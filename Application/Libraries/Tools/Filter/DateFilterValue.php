<?php
/**
 * User: Victor
 * Date: 03/02/2016
 * Time: 11:59
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

class DateFilterValue
{
    protected $day;

    protected $mont;

    protected $year;

    /**
     * DateFilterValue constructor.
     * @param $day
     * @param $mont
     * @param $year
     */
    public function __construct($day, $mont, $year)
    {
        $this->day = $day;
        $this->mont = $mont;
        $this->year = $year;
    }

    public function getDay(){
        return $this->day;
    }

    public function getMont(){
        return $this->mont;
    }

    public function getYear(){
        return $this->year;
    }

    function __toString()
    {
        $mont = $this->getMont();
        $day = $this->getDay();
        $year = $this->getYear();
        return "$mont-$day-$year";
    }
}