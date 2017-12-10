<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class ServiceController extends Controller
{
    public function index($id){
    	//$products = Product::paginate(10);
    	$songs = Song::all();
    	//$songs = public_path() . $songPaths;
    	return view('services.index')->with(compact('id', 'songs'));//->with(compact('products')); // Ver listado de productos
    }
    public function play($id, $songId){
    	$songSelected = Song::find($songId);
    	//$myPath = $songSelected->path;
    	return view('services.play')->with(compact('id', 'songSelected'));
    }

    // public function create(){
    // 	return view('admin.products.create'); // Ver formulario de registro
    // }
}
