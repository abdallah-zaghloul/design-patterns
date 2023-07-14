<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter;

class ColorCorrection
{
    /**
     * @param Photo $photo
     * @return string
     */
    public function correct(Photo $photo): string
    {
        return $photo." color corrected";
    }
}