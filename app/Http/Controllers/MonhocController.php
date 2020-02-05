<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonhocController extends Controller
{
    public function index()
    {
        $ds = DB::table('monhoc')->paginate(5);
        return view('monhoc/dsMonhoc', ['dsMonhocView' => $ds]);
    }

    public function add()
    {
        return view('monhoc/addMonhoc');
    }

    public function insert(Request $k)
    {
        $validateData = $k->validate([
            'ten_mon' => 'required|alpha',
            'ma_mon' => 'required',
            'so_tc' => 'required'
        ]);
        dd($validateData);
        if($validateData->fails())
        {
            echo 'Eror';
        }
        $tenRq = $k->ten_mon;
        $mamonRq = $k->ma_mon;
        $sotcRq = $k->so_tc;
        $result = DB::table('monhoc')->insert([
            'tenmonhoc' => $tenRq,
            'mamon' => $mamonRq,
            'sotinchi' =>$sotcRq
        ]);
        if($result) return redirect('monhoc');
        else return 'Save error';

    }
    
    public function viewupdate($id)
    {
        $l = DB::table('monhoc')->find($id);
        return view('monhoc/viewUpdate', ['monhocUpdate' => $l]);
    }

    public function update(Request $k)
    {
        $idRq= $k->id;
        $tenRq = $k->ten_mon;
        $mamonRq = $k->ma_mon;
        $sotcRq = $k->so_tc;
        $result = DB::table('monhoc')-> where('id', $idRq)->update([
            'tenmonhoc' => $tenRq,
            'mamon' => $mamonRq,
            'sotinchi' =>$sotcRq
        ]);
        if($result) return redirect('monhoc');
        else return 'Save error';
    }

    public function informonhoc($id)
    {
        $li = DB::table('monhoc')->find($id);
        return view('monhoc/inforMonhoc', ['monhocView' => $li]);
    }

    public function search(Request $k)
    {
        $tenRq1= $k->ten;
        //dd($tenRq1);
        $h = db::table('monhoc')->where('tenmonhoc','like', '%'.$tenRq1.'%')->paginate(5);
        //dd($h);
        return view('monhoc/dsMonhoc', ['dsMonhocView'=>$h]);
        //dd($this->informonhoc($tenRq1));
        //dd($search);
    }
}
