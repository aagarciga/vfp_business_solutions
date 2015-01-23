<?php

namespace Dandelion;


class FileSystem {

    protected $base = null;

    protected function Real($path) {
        $temp = realpath($path);
        if (!$temp) {
            throw new \Exception('Path does not exist: ' . $path);
        }
        if ($this->base && strlen($this->base)) {
            if (strpos($temp, $this->base) !== 0) {
                throw new Exception('Path is not inside base (' . $this->base . '): ' . $temp);
            }
        }
        return $temp;
    }

    protected function Path($id) {
        $id = str_replace('/', DIRECTORY_SEPARATOR, $id);
        $id = trim($id, DIRECTORY_SEPARATOR);
        $id = $this->Real($this->base . DIRECTORY_SEPARATOR . $id);
        return $id;
    }

    protected function GetId($path) {
        $path = $this->Real($path);
        $path = substr($path, strlen($this->base));
        $path = str_replace(DIRECTORY_SEPARATOR, '/', $path);
        $path = trim($path, '/');
        return strlen($path) ? $path : '/';
    }

    public function __construct($base) {
        $this->base = $this->Real($base);
        if (!$this->base) {
            throw new Exception('Base directory does not exist');
        }
    }

    public function ListDir($id, $with_root = false) {
        $dir = $this->Path($id);
        $lst = @scandir($dir);
        if (!$lst) {
            throw new Exception('Could not list path: ' . $dir);
        }
        $res = array();
        foreach ($lst as $item) {
            if ($item == '.' || $item == '..' || $item === null) {
                continue;
            }
            $tmp = preg_match('([^ a-zа-я-_0-9.]+)ui', $item);
            if ($tmp === false || $tmp === 1) {
                continue;
            }
            if (is_dir($dir . DIRECTORY_SEPARATOR . $item)) {
                $res[] = array('text' => $item, 'children' => true, 'id' => $this->GetId($dir . DIRECTORY_SEPARATOR . $item));
            } 
//            else {
//                $res[] = array('text' => $item, 'children' => false, 'id' => $this->GetId($dir . DIRECTORY_SEPARATOR . $item), 'type' => 'file', 'icon' => 'file file-' . substr($item, strrpos($item, '.') + 1));
//            }
        }
        if ($with_root && $this->GetId($dir) === '/') {
            $res = array(array('text' => basename($this->base), 'children' => $res, 'id' => '/', 'state' => array('opened' => true, 'disabled' => false)));
        }
        return $res;
    }

    public function GetContent($id) {
        if (strpos($id, ":")) {
            $id = array_map(array($this, 'id'), explode(':', $id));
            return array('type' => 'multiple', 'content' => 'Multiple selected: ' . implode(' ', $id));
        }
        $dir = $this->Path($id);
        if (is_dir($dir)) {
            return array('type' => 'folder', 'content' => $id);
        }
        if (is_file($dir)) {
            $ext = strpos($dir, '.') !== FALSE ? substr($dir, strrpos($dir, '.') + 1) : '';
            $dat = array('type' => $ext, 'content' => '');
            switch ($ext) {
                case 'txt':
                case 'text':
                case 'md':
                case 'js':
                case 'json':
                case 'css':
                case 'html':
                case 'htm':
                case 'xml':
                case 'c':
                case 'cpp':
                case 'h':
                case 'sql':
                case 'log':
                case 'py':
                case 'rb':
                case 'htaccess':
                case 'php':
                    $dat['content'] = file_get_contents($dir);
                    break;
                case 'jpg':
                case 'jpeg':
                case 'gif':
                case 'png':
                case 'bmp':
                    $dat['content'] = 'data:' . finfo_file(finfo_open(FILEINFO_MIME_TYPE), $dir) . ';base64,' . base64_encode(file_get_contents($dir));
                    break;
                default:
                    $dat['content'] = 'File not recognized: ' . $this->GetId($dir);
                    break;
            }
            return $dat;
        }
        throw new Exception('Not a valid selection: ' . $dir);
    }

    public function Create($id, $name, $mkdir = false) {
        $dir = $this->Path($id);
        if (preg_match('([^ a-zа-я-_0-9.]+)ui', $name) || !strlen($name)) {
            throw new Exception('Invalid name: ' . $name);
        }
        if ($mkdir) {
            mkdir($dir . DIRECTORY_SEPARATOR . $name);
        } else {
            file_put_contents($dir . DIRECTORY_SEPARATOR . $name, '');
        }
        return array('id' => $this->GetId($dir . DIRECTORY_SEPARATOR . $name));
    }

    public function Rename($id, $name) {
        $dir = $this->Path($id);
        if ($dir === $this->base) {
            throw new Exception('Cannot rename root');
        }
        if (preg_match('([^ a-zа-я-_0-9.]+)ui', $name) || !strlen($name)) {
            throw new Exception('Invalid name: ' . $name);
        }
        $new = explode(DIRECTORY_SEPARATOR, $dir);
        array_pop($new);
        array_push($new, $name);
        $new = implode(DIRECTORY_SEPARATOR, $new);
        if ($dir !== $new) {
            if (is_file($new) || is_dir($new)) {
                throw new Exception('Path already exists: ' . $new);
            }
            rename($dir, $new);
        }
        return array('id' => $this->GetId($new));
    }

    public function Remove($id) {
        $dir = $this->Path($id);
//        if ($dir === $this->base) {
//            throw new Exception('Cannot remove root');
//        }
        if (is_dir($dir)) {
            foreach (array_diff(scandir($dir), array(".", "..")) as $f) {
                $this->Remove($this->GetId($dir . DIRECTORY_SEPARATOR . $f));
            }
            rmdir($dir);
        }
        if (is_file($dir)) {
            unlink($dir);
        }
        return array('status' => 'OK');
    }

    public function Move($id, $par) {
        $dir = $this->Path($id);
        $par = $this->Path($par);
        $new = explode(DIRECTORY_SEPARATOR, $dir);
        $new = array_pop($new);
        $new = $par . DIRECTORY_SEPARATOR . $new;
        rename($dir, $new);
        return array('id' => $this->GetId($new));
    }

    public function Copy($id, $par) {
        $dir = $this->Path($id);
        $par = $this->Path($par);
        $new = explode(DIRECTORY_SEPARATOR, $dir);
        $new = array_pop($new);
        $new = $par . DIRECTORY_SEPARATOR . $new;
        if (is_file($new) || is_dir($new)) {
            throw new Exception('Path already exists: ' . $new);
        }

        if (is_dir($dir)) {
            mkdir($new);
            foreach (array_diff(scandir($dir), array(".", "..")) as $f) {
                $this->Copy($this->GetId($dir . DIRECTORY_SEPARATOR . $f), $this->GetId($new));
            }
        }
        if (is_file($dir)) {
            copy($dir, $new);
        }
        return array('id' => $this->GetId($new));
    }

}
