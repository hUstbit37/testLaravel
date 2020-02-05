<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinhvienController extends Controller
{
    public function index()
    {
        $list=DB::table('sinhviens')->paginate(5);
        return view('sinhvien', ['svListView' => $list]);
    }
}
