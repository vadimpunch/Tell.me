<?php

namespace  App\Helpers;

use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;
use Storage;

class SaveFiles implements SaveStr
{

 public static function save(Request $request, User $user)
{
    $obj = new self;
    $data = $obj->checlData($request->only('name', 'text'));

    $str = $data['name'] . ' | ' . $data['text'];

    Storage::prepend('str.txt', $str);
}

    public function checlData($array)
{
    return $array;
}

}