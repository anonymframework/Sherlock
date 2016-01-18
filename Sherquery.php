<?php


namespace Sherlock;

/**
 * Class Sherquery
 * @package Sherlock
 */
class Sherquery
{

    /**
     * @var array
     */
    protected $rows;
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

}
