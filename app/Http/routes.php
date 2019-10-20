<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

*/

Route::pattern('id','[0-9]+');

Route::get('/', 'WelcomeController@index');

Route::group(['prefix'=>'admin'],function(){
    
    Route::group(['prefix' => 'categories', 'as' => 'admin-categories'],function(){
        Route::get('',['as'=>'-get','uses' =>'AdminCategoriesController@index']);
        Route::get('{id}',['as'=>'-show','uses' =>'AdminCategoriesController@show']);
        Route::post('{id}',['as'=>'-store','uses' =>'AdminCategoriesController@store']);
        Route::put('{id}',['as'=>'-update','uses' =>'AdminCategoriesController@update']);
        Route::delete('{id}',['as'=>'-destroy','uses' =>'AdminCategoriesController@destroy']);
    });

    Route::group(['prefix' => 'products', 'as' => 'admin-products'],function(){
        Route::get('',['as'=>'-get','uses' =>'AdminProductsController@index']);
        Route::get('{id}',['as'=>'-show','uses' =>'AdminProductsController@show']);
        Route::post('{id}',['as'=>'-store','uses' =>'AdminProductsController@store']);
        Route::put('{id}',['as'=>'-update','uses' =>'AdminProductsController@update']);
        Route::delete('{id}',['as'=>'-destroy','uses' =>'AdminProductsController@destroy']);
    });
    
    // Route::get('categories11',['as'=>'','uses' =>'AdminCategoriesController@index']);
    // Route::get('products',['as'=>'admin-products','uses' =>'AdminProductsController@index']);
});

/*
Route::get('/teste/{id?}', ['as'=>'teste', function($id = 0){
      echo Route::currentRouteName().'<br>';
    return 'teste - ' . $id;
}]);


Route::get('category/{category}', function(\CodeCommerce\Category $category){
    return $category->name;
});

  
 Route::any('categories',['as'=>'admin-categories','uses' =>'AdminCategoriesController@index']);
Route::any('products',['as'=>'admin-products','uses' =>'AdminProductsController@index']);


Route::match(['get','post'],'categories',['as'=>'admin-categories','uses' =>'AdminCategoriesController@index']);
Route::match(['get','post'],'products',['as'=>'admin-products','uses' =>'AdminProductsController@index']);
    */