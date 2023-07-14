<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter;

class JPGConverter
{
    /**
     * @var string
     */
    public static string $extension = "JPG";

    /**
     * @param Photo $photo
     * @return string
     */
    public function convertToJPG(Photo $photo): string
    {
        $photo->setType(self::$extension);
        return (string) $photo;
    }
}