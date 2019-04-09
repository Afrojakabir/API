<?php

use Illuminate\Http\Request;
use app\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/homepage', function () {
    $user = App\User::all();
    return response()->json($user);
});
Route::middleware('auth:api')->get('/order', function () {
    $order = App\Order::all();
    return response()->json($order);
});*/

    Route::post('sessions', 'Auth\LoginController@sessionCreate');
    Route::post('users', 'UsersController@store');
    

    Route::middleware('auth:api')->group(function () {  
        Route::post('productCreate', 'ProductsController@poststore');  
        Route::get('userlist', 'UsersController@users');
        Route::get('order', 'OrdersController@orders');
        Route::get('reqshow', 'Order_RequestsController@requestViews');
        Route::get('product', 'ProductsController@products');
        Route::get('category', 'CategorysController@categorys');
        Route::post('categoryCreate', 'CategorysController@storeCategory');
        Route::get('imageview', 'ImagesController@images');
        Route::get('order_product', 'OrdersController@productOrdered');
        Route::get('vieworderapi/{id}', 'OrdersController@vieworderapi');
       // Route::get('category', 'CategorysController@cacategorydestroy');

       //delete route
        Route::delete('deleteCategory/{id}', 'CategorysController@categorydestroy');
        Route::delete('deleteProduct/{id}', 'ProductsController@destroyProduct');
        Route::delete('deleteRequest/{id}', 'Order_RequestsController@destroyRequest');
        Route::delete('deleteOrder/{id}', 'OrdersController@destroyOrder');
        Route::delete('deleteOrderProduct/{id}', 'OrdersController@destroyOrderedProduct');
        Route::delete('deleteUser/{id}', 'UsersController@destroyUser');

        //update route

        Route::patch('updateCategory/{id}','CategorysController@updateCategory');
        Route::patch('updateProduct/{id}','ProductsController@updateProduct');
        Route::patch('updateOrder/{id}','OrdersController@updateOrder');
        Route::patch('updateRequest/{id}','Order_RequestsController@updateRequest');

        
    });
    
 