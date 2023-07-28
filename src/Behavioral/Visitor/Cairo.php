<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Visitor;

/**
 *
 */
class Cairo implements ICity
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "Cairo";
    }

    /**
     * @param IVisitor $visitor
     * @return void
     */
    public function accept(IVisitor $visitor): void
    {
        $visitor->visitCairo($this);
    }

    /**
     * @param string $passport
     * @return bool
     */
    public function allowToEnter(string $passport): bool
    {
        return in_array($passport,["EG","UK","DE","US"]);
    }

    /**
     * @return string
     */
    public function visitPyramids(): string
    {
        echo ($pyramids = "Pyramids");
        return $pyramids;
    }
}