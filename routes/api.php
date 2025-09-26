<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\RouteGroup;

Route::get("/products",[ProductController::class,'index']);
Route::post("/products",[ProductController::class,'store']);
Route::get("/products/{id}",[ProductController::class,'show']);
Route::put("/products/{id}",[ProductController::class,'update']);
Route::delete("/products/{id}",[ProductController::class,'destroy']);

