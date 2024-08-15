<?php

// ============================================
//      This is the Guest Middleware Class
// ============================================
//  You can use this middleware class to
//  enforce guest access on unprotected routes.
//  You can also use this to hide other routes
//  from singed in users (e.g register routes).
//  
//  We can see that handle() function is the
//  function that handles the redirection, as
//  well as the conditions for the redirection.
//  Please use the same function across all
//  Middleware classes.

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}
