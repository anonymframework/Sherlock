<?php


namespace Sherlock\Rows;

/**
 * Class Row
 * @package Sherlock\Rows
 */
class Row
{

    /**
     * @var string
     */
    protected $string;

    /**
     * @var array
     */
    protected $parameters;


    /**
     * Row constructor.
     * @param mixed $data
     */
    public function __construct($data){}

    /**
     * @return string
     */
    public function getString() : string
    {
        return $this->string;
    }

    /**
     * @param string $string
     * @return Row
     */
    public function setString(string $string)
    {
        $this->string = $string;
        return $this;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return Row
     */
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->string;
    }

    /**
     * @param array ...$data
     * @return static
     */
    public static function create(...$data)
    {
        return new static(...$data);
    }
}
