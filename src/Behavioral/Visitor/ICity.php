<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\Visitor;

/**
 *
 */
interface ICity
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param IVisitor $visitor
     * @return void
     */
    public function accept(IVisitor $visitor): void;
}