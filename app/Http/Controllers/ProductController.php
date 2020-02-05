<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $nameReq= $k->name_product;
        $priceReq = $k->price_product;
        $desReq = $k->des_product;
        $quantityReq = $k->quan_product;
        $expiredReq = $k->expired_product;
        $insertRs = DB::table('products')->insert(
            [
                'name'=>$nameReq,
                'price'=>$priceReq,
                'description'=>$desReq,
                'quantity'=>$quantityReq,
                'expired'=>$expiredReq,
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
        $idReq=$req->id;
        $nameReq= $req->name_product;
        $priceReq = $req->price_product;
        $desReq = $req->des_product;
        $quantityReq = $req->quan_product;
        $expiredReq = $req->expired_product;
        $updateRs = db::table('products')->where('id', $idReq)->update([
            'name'=>$nameReq,
            'price'=>$priceReq,
            'description'=>$desReq,
            'quantity'=>$quantityReq,
            'expired'=>$expiredReq
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

    public function delete(Request $de)
    {
        $reusltDB = DB::table('products')->where('id', '=', $de->id)->delete();
        if($reusltDB){
            echo 'OK';
        }else{
            echo 'FAIL';
        }
    }
}
