<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index () {
        $pageConfigs = [
            'pageHeader' => false
        ];
        return view('/pages/users', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}
