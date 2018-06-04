<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthUser extends Authenticatable
{
    protected $table = 'auth_user';
    //
}
