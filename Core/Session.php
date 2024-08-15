<?php

// ============================================
//          This is the Sessions Class
// ============================================
//  You can use this class to access the
//  PHP SESSION.
//   
//  put() function will put a new key-value pair in
//  the PHP Session.
//  
//  get() will return the value of a specified key
//  in the PHP Session.
//
//  has() will return a boolean that corresponds
//  of the PHP Session has the specified key.
//  
//  flash() will set a key-value pair in the PHP
//  session that is available for the current render.
//
//  unflash() will unset the set flash key-value pair/
//
// flush() will delete all PHP Session Data
//
//  destroy() will flush the session, delete the session,
//  and unset the cookie. This is commonly used in 
//  logging out a user.
// 

namespace Core;

class Session
{
    public static function put($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null)
    {

        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
    }

    public static function has($key)
    {
        return (bool) static::get($key);
    }

    public static function flash($key, $value)
    {
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash()
    {
        unset($_SESSION['_flash']);
    }

    public static function flush()
    {
        $_SESSION = [];
    }

    public static function destroy()
    {
        Session::flush();
        
        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain']);
    }
}
