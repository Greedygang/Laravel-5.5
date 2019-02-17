<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public $timestamps = false;

    public static function createUser($data) {
        return self::insertGetId($data);
    }

    public static function getUserById($id) {
        return self::find($id);
    }


}
