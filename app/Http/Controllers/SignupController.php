<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup(Request $k)
    {
        return 'Sinh viên '.$k->hoten.' có địa chỉ là '.$k->diachi.' và số điện thoại là '.$k->sodt;
    }
}
