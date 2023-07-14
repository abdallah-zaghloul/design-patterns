<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter;

class Animator
{
    /**
     * @var array|string[]
     */
    public static array $animatedExtensions = [
      "GIF",
      "APNG"
    ];


    /**
     * @param Photo $photo
     * @return string
     */
    public function animate(Photo $photo): string
    {
        $type = $photo->getType();

        if (in_array($type,self::$animatedExtensions))
            return $photo." animate";
        else
            return $photo." can't animate";
    }
}