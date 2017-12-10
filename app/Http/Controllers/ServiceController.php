<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class ServiceController extends Controller
{
    public function index($id){
    	//$products = Product::paginate(10);
    	$songPaths = Song::all();
    	//$songs = public_path() . $songPaths;
    	return view('services.index')->with(compact('id', 'songPaths'));//->with(compact('products')); // Ver listado de productos
    }

    // public function create(){
    // 	return view('admin.products.create'); // Ver formulario de registro
    // }
}
