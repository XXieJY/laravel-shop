<?php
namespace App\Http\Controllers\Api\Traits;
trait TransFormer
{
    public function transFormer($code,$msg,$data){

        return [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data
        ];
    }
}