<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\State;

class StateEnum
{
    public const CREATED = "Created";
    public const PREPARED = "Prepared";
    public const PAID = "Paid";
    public const DELIVERED = "Delivered";
    public const DONE = "Done";
    public const CANCELLED = "Cancelled";

    /**
     * @return string[]
     */
    public static function getStatus(): array
    {
        return [
            self::CREATED,
            self::PREPARED,
            self::PAID,
            self::DELIVERED,
            self::DONE,
            self::CANCELLED,
        ];
    }

}