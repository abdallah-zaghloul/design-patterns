<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Specification;

/**
 *
 */
class LanguageSpecification implements ISpecification
{
    /**
     * @var string
     */
    private string $language;

    /**
     * @param string $language
     */
    public function __construct(string $language)
    {
        $this->language = $language;
    }


    /**
     * @param CV $cv
     * @return bool
     */
    public function isSatisfied(CV $cv): bool
    {
        return in_array($this->language, $cv->getLanguages(), true);
    }
}