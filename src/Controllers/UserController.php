<?php

namespace Akis\DC\Controllers;

use Akis\DC\Models\User;

class UserController
{

    public function index()
    {
        return User::get();
    }
}
