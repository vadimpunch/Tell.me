<?php


namespace  App\Helpers;

use App\Helpers\Contracts\SaveStr;
use App\User;
use Illuminate\Http\Request;



class SaveEloquentORM implements SaveStr
{

    public static function save(Request $request, User $user)
    {
        $obj = new self;
       $data = $obj->checlData($request->only('name', 'text'));

        $user->articles()->create(
            $data
        );
    }

    public function checlData($array)
    {
        return $array;
    }

}