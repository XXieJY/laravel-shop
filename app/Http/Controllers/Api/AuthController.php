<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
class AuthController extends Controller{

     public function wechatStore(){

          $wechatUser = session('wechat.oauth_user.default');

          dd($wechatUser);
     }
}