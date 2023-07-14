<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Facade\Converter;

class GIFConverter
{
    /**
     * @var string
     */
    private static string $extension = 'GIF';

    /**
     * @var Animator
     */
    private Animator $animator;

    /**
     * @param Animator $animator
     */
    public function __construct(Animator $animator)
    {
        $this->animator = $animator;
    }

    /**
     * @param Photo $photo
     * @return string
     */
    public function convertToGif(Photo $photo): string
    {
        $photo->setType(self::$extension);
        return $this->animator->animate($photo);
    }

}