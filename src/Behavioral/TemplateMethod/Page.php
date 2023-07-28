<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\TemplateMethod;

/**
 *
 */
abstract class Page
{
    /**
     * @var array
     */
    private array $renderSteps;

    /**
     * @return string
     */
    final public function render(): string
    {
        $this->renderSteps[] = $this->getHeader();
        $this->renderSteps[] = $this->getNavbar();
        $this->renderSteps[] = $this->getBody();
        $this->renderSteps[] = $this->getFooter();
        return implode(PHP_EOL, $this->renderSteps);
    }

    /**
     * @return string
     */
    final protected function getNavbar(): string
    {
        return "<nav> Navigation List </nav>";
    }

    /**
     * @return string
     */
    final protected function getFooter(): string
    {
        return "<footer> Contact US </footer>";
    }

    /**
     * @return string
     */
    abstract protected function getHeader(): string;

    /**
     * @return string
     */
    abstract protected function getBody(): string;

}