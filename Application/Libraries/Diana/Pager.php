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
     * @var
     */
    protected $previusPage;
    
    /**
     * @var
     */
    protected $nextPage;

    /**
     * @var
     * Clear Group By statement in getItemCount() sql query.
     */
    protected $clearGroupBy;
       
    /**
     * 
     * @param \Dandelion\Diana\Interfaces\IDBDriver $dbDriver
     * @param string $sql
     * @param int $itemPerPage
     * @param int $middleRange This parameter must be an even value
     * @param type $itemsCount User for uncommon sql queries that can't be converted in a count sql query
     */
    public function __construct(IDBDriver $dbDriver, $sql, $itemPerPage = 5, $middleRange = 5, $itemsCount = null, $clearGroupBy=true) {

        $this->dbDriver = $dbDriver;
        $this->sql = $sql;
        $this->currentPage = 1;
        $this->middleRange = (isset($middleRange)) ? $middleRange : 5;
        $this->itemsPerPage = (isset($itemPerPage)) ? $itemPerPage : 5;        
        $this->setItemsCount($itemsCount);
        $this->clearGroupBy = $clearGroupBy;
    }
    
    public function paginate($page = 1){
        $ipp = intval($this->itemsPerPage);
        if (!is_numeric($ipp) || $ipp <= 0) {
            $this->itemsPerPage = $this->defaultItemPerPage;
        }
        $this->pagesCount = ceil($this->getItemsCount() / $this->itemsPerPage);
        
        if (!is_numeric($page) OR $page <= 0) {
            $this->currentPage = 1;
        } else {
            $this->currentPage = $page;
        }
        if ($this->currentPage > $this->pagesCount) {
            $this->currentPage = $this->pagesCount;
        }

        $this->previusPage = $this->currentPage - 1;
        $this->nextPage = $this->currentPage + 1;
        
        if ($this->pagesCount > $this->showPagerControlsIfMoreThan) {
            $this->startRange = $this->currentPage - floor($this->middleRange / 2);
            $this->endRange = $this->currentPage + floor($this->middleRange / 2);

            if ($this->startRange <= 0) {
                $this->endRange += abs($this->startRange) + 1;
                $this->startRange = 1;
            }

            if ($this->endRange > $this->pagesCount) {
                $this->startRange -= $this->endRange - $this->pagesCount;
                $this->endRange = $this->pagesCount;
            }
            $this->range = range($this->startRange, $this->endRange);
        }
    }
    
    public function getPagerControl(){   
        // Don't show pager control if only one page
        return $this->pagesCount > 1 ? $this->pagerControl : "";
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

            if ($this->clearGroupBy)
            {
                $pattern = "/(GROUP BY)(.*)/";
                $replacement = '';
                $countSql = preg_replace($pattern, $replacement, $countSql);
            }

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

    /**
     * @return mixed
     */
    public function getClearGroupBy()
    {
        return $this->clearGroupBy;
    }

    /**
     * @param mixed $clearGroupBy
     * @return Pager
     */
    public function setClearGroupBy($clearGroupBy)
    {
        $this->clearGroupBy = $clearGroupBy;
        return $this;
    }


}
