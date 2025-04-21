<?php

namespace Flowaxy;

/**
 * Class Cookie
 *
 * A static utility class for managing HTTP cookies.
 * 
 * Provides methods to get, set, remove, and check the existence of cookies.
 *
 * @package Flowaxy
 */

class Cookie
{
    /**
     * Retrieves the value of a cookie by its key.
     *
     * @param string $key The name of the cookie to retrieve.
     * @return string|false Returns the cookie value if it exists, or false otherwise.
     */

    public static function get(string $key): string|false
    {
        return $_COOKIE[$key] ?? false;
    }

}