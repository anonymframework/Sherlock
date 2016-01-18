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
     * @param string $column
     * @param string $type
     */
    public function __construct($column, $type)
    {
        $row = 'ORDER BY ' . is_string($column) ? $column : join(',', $column) . ' ';

        $this->string = $row;
    }

}
