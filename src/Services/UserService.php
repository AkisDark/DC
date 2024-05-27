<?php

namespace Akis\DC\Services;

use Akis\DC\Models\User;

class UserService
{


    public static function getUserById($id)
    {
        return User::where('id', $id)->first();
    }
}
