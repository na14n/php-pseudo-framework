<?php

// ============================================
//         This is the Validator Class
// ============================================
//  You can use this class to validate form
//  inputs.
//   
//  There are two built-in validator functions
//  but you can add more if you want.
//   
//   Validators should always return a boolean.
//   
//   string function validates a string using
//   its length by setting a min and max length.
//   
//   email function will validate a given string
//   if it is a valid email address. But it will
//   not check if the email is a real working one.
//   the function uses the built-in php email
//   validator.
//   

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}