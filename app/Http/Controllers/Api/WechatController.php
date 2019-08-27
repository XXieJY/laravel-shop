<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
class WechatController extends Controller{

    const TOKEN = "wangguoqing";
    public function index(){

        $echoStr = request()->query("echostr");

        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }
    private function checkSignature()
    {
        $signature = request()->query("signature");
        $timestamp = request()->query("timestamp");
        $nonce = request()->query("nonce");
        $token = self::TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if($tmpStr == $signature){
            return true;
        }else{
            return false;
        }
    }
}