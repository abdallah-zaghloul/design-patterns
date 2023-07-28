<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Visitor;

/**
 *
 */
class Bali implements ICity
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "Bali";
    }

    /**
     * @param IVisitor $visitor
     * @return void
     */
    public function accept(IVisitor $visitor): void
    {
        $visitor->visitBali($this);
    }

    /**
     * @param string $passport
     * @param bool $hasBookHotel
     * @return bool
     */
    public function validateVisit(string $passport, bool $hasBookHotel): bool
    {
        return $hasBookHotel && in_array($passport, ["EG","BE","BR","US"]);
    }

    /**
     * @return string
     */
    public function enjoyKutaBeach(): string
    {
        echo ($kutaBeach = "Kuta Beach");
        return $kutaBeach;
    }
}