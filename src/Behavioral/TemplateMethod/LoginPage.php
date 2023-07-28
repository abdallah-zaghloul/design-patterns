<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\TemplateMethod;

/**
 *
 */
class LoginPage extends Page
{

    /**
     * @return string
     */
    protected function getHeader(): string
    {
        return "<header> Login Page CSS and JS Files </header>";
    }


    /**
     * @return string
     */
    protected function getBody(): string
    {
        return "<body> Login Form </body>";
    }
}