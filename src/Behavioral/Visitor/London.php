<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Visitor;

/**
 *
 */
class London implements ICity
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "London";
    }

    /**
     * @param IVisitor $visitor
     * @return void
     */
    public function accept(IVisitor $visitor): void
    {
        $visitor->visitLondon($this);
    }

    /**
     * @param string $passport
     * @return bool
     */
    public function canVisitLondon(string $passport): bool
    {
        return in_array($passport,["AU","US"]);
    }

    /**
     * @return string
     */
    public function goToBigBen(): string
    {
        echo ($bigBin = 'Big Bin');
        return $bigBin;
    }
}