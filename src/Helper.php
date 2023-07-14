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