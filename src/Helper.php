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

/**
 * @param $var
 * @param $key
 * @param $default
 * @return mixed
 */
function null_catch($var, $key, $default = null)
{
    try {
        return $var[$key];
    }catch (Exception $exception){
        return $default;
    }
}