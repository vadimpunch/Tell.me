<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FirstController extends Controller
{
    public function show(Request $id)
    {
        echo __METHOD__;
        echo $id;
    }

    public function getPage($id)
    {
        echo $id;
    }
}