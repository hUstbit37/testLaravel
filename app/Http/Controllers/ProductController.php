<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prouduct;

class ProductController extends Controller
{
    public function index()
    {
        $listDB=DB::table('products')->paginate(5);
        return view('product/listProduct', ['productListView' => $listDB]);
    }

    public function add()
    {
        return view('product/createProduct');
    }
    
    public function insert(Request $k)
    {
        // $validateData = $k->validate([
        //     'name' => 'required',
        //     'price' => 'required'
        // ]);

        //lay ra ten file anh
        $tenanh = $k->imgProduct->getClientOriginalName();
        //upload anh len folder img trong public
        $k->imgProduct->move(public_path('imgs'), $tenanh);
        //dd($tenanh);
        $insertRs = DB::table('products')->insert(
            [
                'name'=>$k->name_product,
                'price'=>$k->price_product,
                'description'=>$k->des_product,
                'quantity'=>$k->quan_product,
                'expired'=>$k->expired_product,
                'img' => $tenanh
            ]
            );
        //dd($insertRs);
        if($insertRs) return redirect('product');
        else return 'Save Error';    
    }

    public function viewupdate($id)
    {
        $prUdate=db::table('products')->find($id);
        //dd($prUdate);
        return view('product/ViewUpdate', ['productUpdate' => $prUdate]);
    }

    public function update(Request $req)
    {
        $tenanh = $req->imgProduct->getClientOriginalName();
        $req->imgProduct->move(public_path('imgs'), $tenanh);
            
        $updateRs = db::table('products')->where('id', $req->id)->update([
            'name'=>$req->name_product,
            'price'=>$req->price_product,
            'description'=>$req->des_product,
            'quantity'=>$req->quan_product,
            'img' => $tenanh,
            'expired'=>$req->expired_product
        ]);
        if($updateRs) return redirect('product');
        else return 'Save Error';
    }

    public function inforproduct($id)
    {
        $prDb=DB::table('products')->find($id);
        return view('product/InforProduct', ['inforPr'=>$prDb]);
    }

    public function search(Request $rq)
    {
        $namerq=$rq->name_search;
        $sr=DB::table('products')->where('name', 'like', '%'.$namerq.'%')->paginate(5);
        //dd($sr);
        return view('product/listProduct', ['productListView'=>$sr]);
    }

    public function delete(Request $rq)
    {
        $reusltDB = DB::table('products')->where('id', '=', $rq->id)->delete();
        if($reusltDB){
            echo 'OK';
        }else{
            echo 'FAIL';
        }
    }
}
