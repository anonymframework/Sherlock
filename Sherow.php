<?php


namespace Sherlock;

use Sherlock\Rows\Limit;
use Sherlock\Rows\OrderBy;
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
    public function addSelect(Select $select)
    {
        $this->rows['select'][] = $select;
    }


    /**
     * @param OrderBy $orderBy
     */
    public function addOrder(OrderBy $orderBy)
    {
        $this->rows['order'] = $orderBy;
    }

    /**
     * @param Limit $limit
     */
    public function addLimit(Limit $limit)
    {
        $this->rows['limit'] = $limit;
    }

}