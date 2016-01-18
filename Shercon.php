<?php
/**
 * Created by PhpStorm.
 * User: kophack
 * Date: 18.01.2016
 * Time: 20:07
 */

namespace Anonym;

/**
 * Class Shercon
 * @package Anonym
 */
class Shercon
{
    /**
     * @var array
     */
    protected $options;

    protected $connectors = [
        'mysql' => 'mysql',
        'pgsql' => 'pgsql'
    ];

    /**
     * Shercon constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->options = $options;
    }

    public function open()
    {

        $driver = $this->options['driver'] ?? 'mysql';


    }

}
