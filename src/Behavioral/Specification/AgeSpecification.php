<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Specification;

/**
 *
 */
class AgeSpecification implements ISpecification
{
    /**
     * @var int
     */
    private int $minAge;
    /**
     * @var int
     */
    private int $maxAge;

    /**
     * @param int $minAge
     * @param int $maxAge
     */
    public function __construct(int $minAge, int $maxAge)
    {
        $this->minAge = $minAge;
        $this->maxAge = $maxAge;
    }


    /**
     * @param CV $cv
     * @return bool
     */
    public function isSatisfied(CV $cv): bool
    {
        $age = $cv->getAge();
        return $age >= $this->minAge && $age <= $this->maxAge;
    }
}