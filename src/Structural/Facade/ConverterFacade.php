<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Facade;

use AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter\Animator;
use AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter\ColorCorrection;
use AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter\GIFConverter;
use AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter\JPGConverter;
use AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter\Photo;

class ConverterFacade
{
    /**
     * @param Photo $photo
     * @return string
     */
    public function convertToGif(Photo $photo): string
    {
        $animator = new Animator();
        return (new GIFConverter($animator))->convertToGif($photo);
    }

    /**
     * @param Photo $photo
     * @return string
     */
    public function convertToJPG(Photo $photo): string
    {
        return (new JPGConverter())->convertToJPG($photo);
    }

    /**
     * @param Photo $photo
     * @return string
     */
    public function correctColor(Photo $photo): string
    {
        return (new ColorCorrection())->correct($photo);
    }

}