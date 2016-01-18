<?php
namespace Sherlock;

use PDO;

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

    /**
     * the list of connections
     *
     * @var array
     */
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

    /**
     * add a new driver
     *
     * @param string $name
     * @param callable $callable
     * @return Shercon
     */
    public function extend(string $name, callable  $callable) : Shercon
    {
        $this->connectors[$name] = $callable;
        return $this;
    }

    /**
     * @return PDO
     * @throws DriverNotFoundExpection
     */
    public function open() : PDO
    {

        $driver = $this->options['driver'] ?? 'mysql';

        return $this->callConnectionBridge($driver);
    }

    /**
     * @param array $options
     * @return PDO
     */
    public function mysql(array $options)
    {
        $host = $options['host'] ?? 'localhost';
        $dbname = $options['dbname'] ?? '';
        $username = $options['username'] ?? '';
        $password = $options['password'] ?? '';
        $charset = $options['charset'] ?? '';


        return new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=' . $charset, $username, $password);
    }

    /**
     * @param string $driver
     * @return PDO
     * @throws DriverNotFoundExpection
     */
    private function callConnectionBridge(string $driver) : PDO
    {

        if (isset($this->connectors[$driver])) {

            return $this->connectors[$driver]($this->options);

        } else {
            throw new DriverNotFoundExpection(sprintf('%s driver could not found in your drivers ', $driver));
        }

    }

}
