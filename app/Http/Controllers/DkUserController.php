<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DkUserController extends Controller
{
    public function dangkyUser(Request $req)
    {
        return 'Xinchao'.$req->name_user.' ID: '.$req->id_user;
    }
    //
}
