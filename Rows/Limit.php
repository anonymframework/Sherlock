<?php


namespace Sherlock\Rows;


class Limit extends Row
{

    public function __construct($limit)
    {
        $row = 'LIMIT ' . is_array($limit) ? join(',', $limit) : $limit;

        $this->string = $row;
    }

}