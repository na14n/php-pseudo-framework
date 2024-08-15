<?php

// ========================================
//    This is the Middleware Class
// ========================================
//  You can use the middleware class to
//  enforce route protection using the mapped
//  classes in the MAP constant. You can add
//  more middleware classes to suit your needs.

namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
    ];

    public static function resolve($key)
    {
        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("No matching middleware found for key '{$key}'.");
        }

        (new $middleware)->handle();
    }
}
