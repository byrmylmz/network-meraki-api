<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test',function(){
    $data = [ 
               
         'results'=>[
             ['id'=>1,'name'=>'location 1','ip_adress'=>'10 0 0 1'],
             ['id'=>2,'name'=>'location 2','ip_adress'=>'11 0 0 1'],
                 ]
               
             ];
     return response()->json($data);
 });
 
