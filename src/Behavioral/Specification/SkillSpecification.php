<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Specification;

/**
 *
 */
class SkillSpecification implements ISpecification
{
    /**
     * @var string
     */
    private string $skill;

    /**
     * @param string $skill
     */
    public function __construct(string $skill)
    {
        $this->skill = $skill;
    }


    /**
     * @param CV $cv
     * @return bool
     */
    public function isSatisfied(CV $cv): bool
    {
        return in_array($this->skill, $cv->getSkills(), true);
    }
}