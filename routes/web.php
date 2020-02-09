<?php
Route::get('/', function(){
    return "Let's learn PHP Laravel";
});
Route::get('sinhvien', 'SinhvienController@index');
//------------------

//
Route::get('product', 'ProductController@index');
Route::get('createProduct', 'ProductController@add');
Route::post('insertProduct', 'ProductController@insert');
Route::get('product/viewUpdate/{id}', 'ProductController@viewupdate');
Route::post('product/viewUpdate/{id}', 'ProductController@update');
Route::post('DeleteProduct', 'ProductController@delete');
Route::get('InforProduct/{id}', 'ProductController@inforproduct');
Route::post('searchPrByName', 'ProductController@search');
//------------------

Route::get('monhoc', 'MonhocController@index');
Route::get('addMonhoc', 'MonhocController@add');
Route::post('insertMonhoc', 'MonhocController@insert');
Route::get('viewUpdate/{id}', 'MonhocController@viewupdate');
Route::post('viewUpdate/{id}', 'MonhocController@update');
// Route::get('deleteMonhoc/{id}', function($id){
//     DB::table('monhoc')-> where('id', $id)->delete();
//     return redirect ('monhoc');  
// });
Route::post('DeleteMonhoc', 'Monhoccontroller@delete');
Route::get('inforMonhoc/{id}','MonhocController@informonhoc');
Route::post('searchByName', 'MonhocController@search');