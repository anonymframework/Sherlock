<?php


namespace Sherlock\Rows;

/**
 * Class OrderBy
 * @package Sherlock\Rows
 */
class OrderBy extends Row
{

    /**
     * OrderBy constructor.
     * @param $column
     * @param $type
     */
    public function __construct($column, $type)
    {
        $row = 'ORDER BY ' . is_string($column) ? $column : join(',', $column) . ' ';

        $this->string = $row;
    }

}
