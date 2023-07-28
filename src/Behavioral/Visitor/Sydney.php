<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Visitor;

/**
 *
 */
class Sydney implements ICity
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "Sydney";
    }

    /**
     * @param IVisitor $visitor
     * @return void
     */
    public function accept(IVisitor $visitor): void
    {
        $visitor->visitSydney($this);
    }

    /**
     * @param int $amount
     * @return bool
     */
    public function canPayBudget(int $amount): bool
    {
        return $amount >= 5000;
    }

    /**
     * @return string
     */
    public function bookInOpera(): string
    {
        echo ($opera = "Opera");
        return $opera;
    }
}