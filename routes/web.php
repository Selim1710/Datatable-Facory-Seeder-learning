<?php

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // dd('hi');
    $data['users'] = User::all();
    // return $data['users'];
    $data['categories'] = Category::with('subCategories')->get();
    // return $data['categories'];
    $data['subCategories'] = SubCategory::with('category')->get();
    //  return $data['subCategories'];

    return view('home', $data);
});
