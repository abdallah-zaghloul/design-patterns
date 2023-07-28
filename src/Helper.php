<?php
/**
 * @param ...$vars
 * @return void
 */
function dd(...$vars)
{
    var_dump(...$vars);
    die();
}

/**
 * @param DateTime|null $dateTime
 * @param string|null $format
 * @return string
 */
function timestamp(?DateTime $dateTime = null, ?string $format = null): string
{
    return ($dateTime ?? new DateTime())->format($format ?? 'Y-m-d H:i:s.u');
}