<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Specification;

/**
 *
 */
interface ISpecification
{
    /**
     * @param CV $cv
     * @return bool
     */
    public function isSatisfied(CV $cv): bool;
}