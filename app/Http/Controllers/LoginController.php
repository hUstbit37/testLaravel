<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginUser(Request $k)
    {
        return 'Tài khoản '.$k->name_user.' có mật khẩu là: '.$k->password_user;
    }
}
