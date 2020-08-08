<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            "NIS" => "3103118040",
            "Name" => "Defia Syifa Wulandhifa",
            "Gender" => "Female",
            "Phone" => "081326459448",
            "Class" => "XII RPL 2"
        ];
    }
}
