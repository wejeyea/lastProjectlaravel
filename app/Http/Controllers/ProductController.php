<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function ProductPage(){
        return view('home', ['beautys'=> Product::where('category', 'Beauty')->get()]);
    }



    public function index(Request $req){
        $search = $req->search;
        $products = Product::where('name','LIKE',"%$search%")->paginate(3)->appends(['search'=>$search]);
        return view('home', ['product'=>$products]);
    }
}
