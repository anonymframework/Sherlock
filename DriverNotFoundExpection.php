<?php

namespace Sherlock;

use Exception;
use Throwable;

/**
 * Class DriverNotFoundExpection
 * @package Sherlock
 */
class DriverNotFoundExpection extends Exception implements Throwable
{
    /**
     * DriverNotFoundExpection constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }
}