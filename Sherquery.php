<?php


namespace Sherlock;

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

    public function orderBy($column, $type = 'DESC')
    {
        $row = 'ORDER BY ' . $column . ' ' . $type;


    }

}
