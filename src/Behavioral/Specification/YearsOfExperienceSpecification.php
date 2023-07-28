<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Specification;

/**
 *
 */
class YearsOfExperienceSpecification implements ISpecification
{
    /**
     * @var int
     */
    private int $minExperience;

    /**
     * @param int $minExperience
     */
    public function __construct(int $minExperience)
    {
        $this->minExperience = $minExperience;
    }


    /**
     * @param CV $cv
     * @return bool
     */
    public function isSatisfied(CV $cv): bool
    {
        return $cv->getYearsOfExperience() >= $this->minExperience;
    }
}