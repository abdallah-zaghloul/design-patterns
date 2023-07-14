<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Decorator;

class PainterDecorator implements IPainter
{
    /**
     * @var IPainter
     */
    private IPainter $IPaint;

    /**
     * @param IPainter $IPaint
     */
    public function __construct(IPainter $IPaint)
    {
        $this->IPaint = $IPaint;
    }


    /**
     * @param Car $car
     * @return Car
     */
    public function paintCar(Car $car): Car
    {
        return $this->IPaint->paintCar($car);
    }
}