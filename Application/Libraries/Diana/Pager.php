<?php

namespace Dandelion\Diana;

use Dandelion\Diana\Interfaces\IDBDriver;

/**
 * Description of Pager
 *
 * @author Alex Alvarez Gárciga
 */
abstract class Pager {

    /**
     * @var
     */
    protected $dbDriver;

    /**
     * @var
     */
    protected $entityName;

    /**
     * @var
     */
    protected $sql;

    /**
     * @var
     */
    protected $defaultItemPerPage = 5;

    /**
     * @var
     */
    protected $itemsPerPage;

    /**
     * @var
     */
    protected $itemsCount;

    /**
     * @var
     */
    protected $pagesCount;

    /**
     * @var
     */
    protected $currentPage;

    /**
     * @var
     */
    protected $pagerControl;

    /**
     * @var
     */
    protected $startRange;

    /**
     * @var
     */
    protected $middleRange;

    /**
     * @var
     */
    protected $endRange;

    /**
     * @var
     */
    protected $range;    
       
    /**
     * 
     * @param \Dandelion\Diana\Interfaces\IDBDriver $dbDriver
     * @param string $entityName
     * @param string $sql
     * @param int $itemPerPage
     * @param int $middleRange This parameter must be an even value
     * @param type $itemsCount User for uncommon sql queries that can't be converted in a count sql query
     */
    public function __construct(IDBDriver $dbDriver, $entityName, $sql, $itemPerPage = 5, $middleRange = 5, $itemsCount = null) {

        $this->dbDriver = $dbDriver;
        $this->entityName = $entityName;
        $this->sql = $sql;
        $this->currentPage = 1;
        $this->middleRange = (isset($middleRange)) ? $middleRange : 5;
        $this->itemsPerPage = (isset($itemPerPage)) ? $itemPerPage : 5;        
        $this->setItemsCount($itemsCount);
    }
    
    public function getPagerControl(){
        return $this->pagerControl;
    }
    
    /**
     * User for uncommon sql queries that can't be converted in a count sql query
     */
    public function setItemsCount($value){
        if (is_numeric($value)) {
            $this->itemsCount = $value;
        }        
    }

    /**
     * For Commons sql queries
     * @return integer
     */
    public function getItemsCount() {

        if (empty($this->itemsCount)) {

            //$countSql = strtolower($this->sql);
            $countSql = $this->sql;
            $pattern = "/^(SELECT)(.*)(FROM)/";
            $replacement = 'SELECT count(*) as Total FROM';
            $countSql = preg_replace($pattern, $replacement, $countSql);

            $pattern = "/(GROUP BY)(.*)/";
            $replacement = '';
            $countSql = preg_replace($pattern, $replacement, $countSql);

            $query = $this->dbDriver->GetQuery();
            $queryResult = $query->Execute($countSql);

            $this->itemsCount = $queryResult[0]->Total;
        }
        return $this->itemsCount;
    } 
    
    public function getCurrentPagedItems(){
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->ExecutePaged($this->sql, $this->itemsPerPage, $this->getOffset());
        return $queryResult;
    }
    
    public function getOffset(){
        return (($this->currentPage - 1) * $this->itemsPerPage) + 1;
    }

}
