<?php

namespace App\Helpers\Facades;


use Illuminate\Support\Facades\Facade;

class SaveStr extends  Facade
{

    public static  function getFacadeAccessor()
    {
        return 'savestr';
    }
}