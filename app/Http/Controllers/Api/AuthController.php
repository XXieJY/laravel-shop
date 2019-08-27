<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\User;
class AuthController extends Controller{

     public function wechatStore(){

          $wechatUser = session('wechat.oauth_user.default');
          $user = User::where('weixin_openid',$wechatUser->id)->first();
          if(!$user){
              $user = User::create([
                  'nickname' => $wechatUser->name,
                  'weixin_openid' => $wechatUser->id,
                  'image_head' => $wechatUser->avatar
              ]);
          }

          return "通过";
     }
}