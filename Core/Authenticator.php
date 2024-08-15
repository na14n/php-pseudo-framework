<?php

// ========================================
//    This is the Auth Class
// ========================================
//  You can use the attempt() function to
//  login a registered user and the logout()
//  function to sign out the user and delete
//  their session.

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)->query('select * from users where email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $email,
                ]);

                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}
