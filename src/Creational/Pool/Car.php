<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\Pool;

use DateTime;

class Car
{
    /**
     * @var DateTime
     */
    private DateTime $rentAt;

    /**
     *
     */
    public function __construct()
    {
        $this->rentAt = new DateTime();
    }

    /**
     * @return string
     */
    public function move(): string
    {
        return "Car is moving";
    }


    /**
     * @return string
     */
    public function getId(): string
    {
        return spl_object_hash($this);
    }
}