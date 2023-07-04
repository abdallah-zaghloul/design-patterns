<?php /** @noinspection PhpLanguageLevelInspection */

namespace AbdallahZaghloul\DesignPatterns\Creational\AbstractFactory;

interface ICar
{
    /**
     * @return int
     */
    public function calculatePrice() : int;
}