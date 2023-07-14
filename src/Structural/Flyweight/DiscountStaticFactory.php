<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\Flyweight;

class DiscountStaticFactory
{
    /**
     * @var array
     */
    private static array $instances = [];

    /**
     * @var array|string[]
     */
    private static array $discounts = [
        'day'=> DayDiscount::class,
        'item'=> ItemDiscount::class,
    ];

    /**
     * @param string $discountType
     * @return Discount|null
     */
    public static function build(string $discountType): ?Discount
    {
        $class = self::getClass($discountType);
        if (!isset(self::$instances[$discountType]) && isset($class))
            self::$instances[$discountType] = new $class;
        return @self::$instances[$discountType];
    }

    /**
     * @param string $discountType
     * @return string|null
     */
    public static function getClass(string $discountType): ?string
    {
        return @self::$discounts[$discountType];
    }
}