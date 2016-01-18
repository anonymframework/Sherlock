<?php

namespace Sherlock\Rows;

/**
 * Class Select
 * @package Sherlock\Rows
 */
class Select extends Row
{


    /**
     * Select constructor.
     * @param mized $data
     */
    public function __construct($data)
    {
        if (is_string($data)) {
            $this->string = $data;
        } elseif (is_array($data)) {
            $this->string = join(',', $data);
        }
    }

}
