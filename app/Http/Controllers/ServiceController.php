<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($id){
    	//$products = Product::paginate(10);
    	return view('services.index')->with(compact('id'));//->with(compact('products')); // Ver listado de productos
    }

    // public function create(){
    // 	return view('admin.products.create'); // Ver formulario de registro
    // }
}
