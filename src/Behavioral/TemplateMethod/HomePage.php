<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\TemplateMethod;

/**
 *
 */
class HomePage extends Page
{

    /**
     * @return string
     */
    protected function getHeader(): string
    {
        return "<header> Home Page CSS and JS Files </header>";
    }

    /**
     * @return string
     */
    protected function getBody(): string
    {
        return "<body> Home News Feeds </body>";
    }
}