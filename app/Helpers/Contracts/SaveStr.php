<?php

namespace App\Helpers\Contracts;



use App\User;
use Illuminate\Http\Request;

interface SaveStr
{

    public static function save(Request $request, User $user);
    public function checkData($array);


}