<?php


namespace Sherlock\Rows;


/**
 * Class Limit
 * @package Sherlock\Rows
 */
class Limit extends Row
{

    /**
     * Limit constructor.
     * @param $limit
     */
    public function __construct($limit)
    {
        $row = 'LIMIT ' . is_array($limit) ? join(',', $limit) : $limit;

        $this->string = $row;
    }

}