<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Specification;

/**
 *
 */
class MandatorySpecification implements ISpecification
{
    /**
     * @var ISpecification[]
     */
    private array $specifications;

    /**
     * @param ISpecification ...$specifications
     */
    public function __construct(ISpecification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * @param CV $cv
     * @return bool
     */
    public function isSatisfied(CV $cv): bool
    {
        foreach ($this->specifications as $specification){
            if (! $specification->isSatisfied($cv))
                return false;
        }

        return true;
    }
}