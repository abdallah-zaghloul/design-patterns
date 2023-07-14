<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Decorator;

class Car
{
    /**
     * @var string|null
     */
    private ?string $color;

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     * @return void
     */
    public function setColor(?string $color): void
    {
       if (!empty($this->color)){
           $colorArray = explode("-",$this->color);
           $colorArray[] = $color;
           $colorArray = array_filter($colorArray , fn($value) => !empty($value));
           $this->color = implode("-", $colorArray);
       }else{
           $this->color = $color;
       }
    }
}