<?php


namespace Sherlock;

use Sherlock\Rows\Select;

/**
 * Class Sherow
 * @package Sherlock
 */
trait Sherow
{

    /**
     * @var array
     */
    protected $rows = [];

    /**
     * @return array
     */
    public function getRows() : array
    {
        return $this->rows;
    }

    /**
     * @param array $rows
     * @return Sherow
     */
    public function setRows(array $rows)
    {
        $this->rows = $rows;
        return $this;
    }

    /**
     * @param Select $select
     */
    public function addSelect(Select $select){
        $this->rows['select'][] = $select;
    }


}