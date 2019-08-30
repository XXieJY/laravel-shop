<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\Traits\TransFormer;
use App\Http\Controllers\Resources\UserResource;
use App\User;

class UserController extends Controller{
   use TransFormer;
   public function index(){

       var_dump($this->transFormer(200,'success',
           UserResource::collection(User::all())));
   }
}