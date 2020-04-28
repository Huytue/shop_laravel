<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class SearchController extends Controller
{
    //
 
    public function search(Request $request)
    {
    	if($request->has('q')){
    		$product = Product::search($request->get('q'))->get();	
    	}else{
    		$product = Product::get();
    	}
        return view('client.pages.search', compact('product'));
        //return view('client.pages.search', ['product' => $product]);
    }
}
