<?php


namespace Sherlock;

use Sherlock\Rows\OrderBy;
use Sherlock\Rows\Select;

/**
 * Class Sherquery
 * @package Sherlock
 */
class Sherquery
{

    use Sherow;

    /**
     * @var Shercon
     */
    protected $shercon;

    /**
     * Sherquery constructor.
     * @param Shercon $shercon
     */
    public function __construct(Shercon $shercon)
    {
        $this->shercon = $shercon;
    }

    /**
     * add a new select row
     *
     * @param mixed $select
     * @return Sherquery
     */
    public function select($select) : Sherquery
    {
        $this->addSelect(Select::create($select));
        return $this;
    }

    /**
     * @param string|array $column
     * @param string $type
     * @return Sherquery
     */
    public function orderBy($column,string $type = 'DESC') : Sherquery
    {
        $this->addOrder(OrderBy::create($column, $type));
        return $this;
    }

}
