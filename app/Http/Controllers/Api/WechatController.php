<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
class WechatController extends Controller{

    public function index(){

       echo request()->query('token');
    }
}