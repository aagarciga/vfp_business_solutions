<?php

namespace Dandelion\Diana;

use Dandelion\Diana\Pager;

/**
 * Description of BootstrapPager
 *
 * @author Alex
 */
class BootstrapPager extends Pager {

    /**
     * @var
     */
    protected $showPagerControlsIfMoreThan;

    /**
     * 
     * @param \Dandelion\Diana\Interfaces\IDBDriver $dbDriver
     * @param type $sql
     * @param type $itemPerPage
     * @param int $middleRange
     * @param int $showPagerControlsIfMoreThan
     */
    public function __construct($dbDriver, $sql, $itemPerPage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $itemsCount = null) {
        parent::__construct($dbDriver, $sql, $itemPerPage, $middleRange, $itemsCount);

        $this->pagerControl = "<ul class=\"pagination\">\n";
        $this->showPagerControlsIfMoreThan = $showPagerControlsIfMoreThan;
    }

    public function Paginate($page = 1) {
        parent::paginate($page);

        if ($this->pagesCount > $this->showPagerControlsIfMoreThan) { // if more than ten pages
            // render previous link
            if ($this->currentPage != 1 And $this->getItemsCount() >= 10) {
                $this->pagerControl .= "<li><a class=\"pager-btn\" href=\"#\" data-page=\"$this->previusPage\" data-ipp=\"$this->itemsPerPage\">&laquo;</a></li>";
            } else {
                $this->pagerControl .= "<li class=\"disabled\"><a class=\"pager-btn\" href=\"#\"  data-page=\"$this->previusPage\" data-ipp=\"$this->itemsPerPage\">&laquo;</a></li>";
            }

            for ($i = 1; $i <= $this->pagesCount; $i++) {
                if ($this->range[0] > 2 AND $i == $this->range[0]) {
                    $this->pagerControl .= "<li> <span>...</span> </li>";
                }

                // loop through all pages. if first, last, or in range, display
                if ($i == 1 OR $i == $this->pagesCount OR in_array($i, $this->range)) {
                    if ($i == $this->currentPage) {
                        $this->pagerControl .= "<li class=\"active\"><a class=\"pager-btn\" href=\"#\" data-page=\"$i\" data-ipp=\"$this->itemsPerPage\" title=\"Go to page $i of $this->pagesCount\">$i <span class=\"sr-only\">(current)</span></a></li>";
                    } else {
                        $this->pagerControl .= "<li><a class=\"pager-btn\" href=\"#\" data-page=\"$i\" data-ipp=\"$this->itemsPerPage\" title=\"Go to page $i of $this->pagesCount\">$i</a></li>";
                    }
                }

                $lastRangeValue = $this->range[$this->middleRange - 1];
                if (($lastRangeValue < $this->pagesCount - 1) and ( $i == $lastRangeValue)) {
                    $this->pagerControl .= "<li> <span>...</span> </li>";
                }
            }
            if ($this->currentPage != $this->pagesCount And $this->getItemsCount() >= 10) {
                $this->pagerControl .= "<li><a class=\"pager-btn\" href=\"#\" data-page=\"$this->nextPage\" data-ipp=\"$this->itemsPerPage\">&raquo;</a></li>";
            } else {
                $this->pagerControl .= "<li class=\"disabled\"><a class=\"pager-btn\" href=\"#\" data-page=\"$this->nextPage\">&raquo;</a></li>";
            }
        } else {
            for ($i = 1; $i <= $this->pagesCount; $i++) {

                if ($i == $this->currentPage) {
                    $this->pagerControl .= "<li class=\"active\"><a class=\"pager-btn\" href=\"#\" data-page=\"$i\" data-ipp=\"$this->itemsPerPage\" title=\"Go to page $i of $this->pagesCount\">$i <span class=\"sr-only\">(current)</span></a></li>";
                } else {
                    $this->pagerControl .= "<li><a class=\"pager-btn\" href=\"#\" data-page=\"$i\" data-ipp=\"$this->itemsPerPage\"  title=\"Go to page $i of $this->pagesCount\">$i</a></li>";
                }
            }
        }
    }

    public function PaginateForAjax($page) {
        parent::paginate($page);

        $pager = array();

        $pager['itemsCount'] = $this->getItemsCount();
        $pager['currentPage'] = $this->currentPage;
        $pager['itemsPerPage'] = $this->itemsPerPage;
        $pager['pagesCount'] = $this->pagesCount;
        $pager['showPagerControlsIfMoreThan'] = $this->showPagerControlsIfMoreThan;

        if ($this->pagesCount > $this->showPagerControlsIfMoreThan) {
            $pager['startRange'] = $this->startRange;
            $pager['middleRange'] = $this->middleRange;
            $pager['endRange'] = $this->endRange;
            $pager['range'] = $this->range;
        }

        $pager['currentPagedItems'] = $this->getCurrentPagedItems();

        return $pager;
    }

    /**
     * Returns the BootstrapPager Object to use it with AJAX
     * @return String
     */
    public function GetJavascriptPager(){
        return file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'BootstrapPager.js');
    }
    
    public static function GetJavascriptBootstrapPager(){
        return file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'BootstrapPager.js');
    }
}
