<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "sys_user";
    protected $fillable = [
        'nickname','weixin_openid','image_head'
    ];
}
