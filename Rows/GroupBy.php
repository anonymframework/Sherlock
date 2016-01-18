<?php


namespace Sherlock\Rows;

/**
 * Class GroupBy
 * @package Sherlock\Rows
 */
class GroupBy extends Row
{

    /**
     * GroupBy constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $row = "GROUP BY(" . is_array($data) ? join(',', $data) : $data . ")";

        $this->string = $row;
    }
}