<?php

// ============================================
//      This is the Auth Middleware Class
// ============================================
//  You can use this middleware class to
//  enforce auth access on protected routes.
//  
//  We can see that handle() function is the
//  function that handles the redirection, as
//  well as the conditions for the redirection.
//  Please use the same function across all
//  Middleware classes.

namespace Core\Middleware;

class Auth
{
    public function handle()
    {
        if (! $_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}
