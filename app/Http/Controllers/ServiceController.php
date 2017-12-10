<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Service;

class ServiceController extends Controller
{
    public function index($categoryId){
    	//$products = Product::paginate(10);
    	$songs = Song::all();
    	//$songs = public_path() . $songPaths;
    	return view('services.index')->with(compact('categoryId', 'songs'));//->with(compact('products')); // Ver listado de productos
    }
    public function play($categoryId, $songId){
    	$songSelected = Song::find($songId);
    	//$myPath = $songSelected->path;
    	return view('services.play')->with(compact('categoryId', 'songSelected'));
    }
    public function store(Request $request){
    	$service = new Service();

    	$service->duration = $request->input('tempo');
    	$service->category_id = $request->input('categoria');
    	$service->user_id = $request->input('user_id');

    	if($service->user_id){
    		$service->save(); // INSERT en la tabla servicio
    		return view('services.result')->with(compact('service'));
    	}
    	

    	return view('welcome');
    }

    // public function create(){
    // 	return view('admin.products.create'); // Ver formulario de registro
    // }
}
