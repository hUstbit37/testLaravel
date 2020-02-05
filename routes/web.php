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
// Route::get('DeleteProduct/{id}', function($id){
//     DB::table('products')->where('id', $id)->delete();
//     return redirect ('product');
// });
Route::post('DeleteProduct', 'ProductController@delete');
Route::get('InforProduct/{id}', 'ProductController@inforproduct');
Route::post('searchPrByName', 'ProductController@search');
//------------------

Route::get('monhoc', 'MonhocController@index');
Route::get('addMonhoc', 'MonhocController@add');
Route::post('insertMonhoc', 'MonhocController@insert');
Route::get('viewUpdate/{id}', 'MonhocController@viewupdate');
Route::post('viewUpdate/{id}', 'MonhocController@update');
Route::get('deleteMonhoc/{id}', function($id){
    DB::table('monhoc')-> where('id', $id)->delete();
    return redirect ('monhoc');  
});
Route::get('inforMonhoc/{id}','MonhocController@informonhoc');
Route::post('searchByName', 'MonhocController@search');

//------------------------------//
// Route::get('/', function(){
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('learn/testSignup');
// });

// Route::post('signup', 'SignupController@signup');

//Route::post('dangky', 'DkUserController@dangkyUser');

//---------------------------------------------------------------//

// Route::get('xx/{name}', function($name='Duc')
// {
//     return 'Xin chào'.$name;
// });

// Route::get('xxx/{nnn?}/{iii?}', function ($name='',$age='')
// {
//     $tena='a';
//     return view('test', ['nnn' => $name, 'iii' => $age],compact('tena'));
// });

// });
// Route::get('yyy/{id}/{name}', function ($id,$name) {
//     return view('test', ['IDXXX' => $id, 'Namexx' => $name]);
// });
// Route::get('yyy/{id}', function ($id) {
//     return view('test', ['IDXXX' => $id]);
// });
//Route::redirect('xxx', 'jjj');

