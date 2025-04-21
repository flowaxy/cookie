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

    /**
     * Sets a cookie with the given key and value.
     *
     * @param string $key The name of the cookie.
     * @param string $value The value to store in the cookie.
     * @param int $daysToExpire Number of days until the cookie expires. Default is 30 days.
     * 
     * If set to 0, the cookie will expire at the end of the browser session.
     */

    public static function set(string $key, string $value, int $daysToExpire = 30): void
    {
        $expire = time() + (60 * 60 * 24 * $daysToExpire);
        setcookie($key, $value, $expire, "/");
    }

    /**
     * Removes a cookie by setting its expiration date in the past.
     *
     * @param string $key The name of the cookie to remove.
     */

    public static function remove(string $key): void
    {
        unset($_COOKIE[$key]);
        setcookie($key, '', time() - 3600, "/");
    }

    /**
     * Checks whether a cookie is empty or not set.
     *
     * @param string $key The name of the cookie to check.
     * @return bool True if the cookie is not set or its value is empty, false otherwise.
     */
    
    public static function isEmpty(string $key): bool
    {
        return empty($_COOKIE[$key]);
    }
}
