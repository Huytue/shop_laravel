<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categories;
use App\Models\ProductTypes;
use App\Models\Product;

use Cart;
use Auth;
class HomeController extends Controller
{
    public function __construct(){
    	$category = Categories::where('status',1)->get();
    	$producttype = ProductTypes::where('status',1)->get();
        view()->share(['category' => $category,'producttype' => $producttype]);
    }

    public function index(){
        $product1 = Product::where('status',1)->where('idCategory',1)->get();
        $product2 = Product::where('status',1)->where('idCategory',8)->get();
        $product3 = Product::where('status',1)->where('idCategory',7)->get();
        $product4 = Product::where('status',1)->where('idCategory',6)->get();
		return view('client.pages.index',compact('product1','product2','product3','product4'));
	}

    public function getDetail($slug) {
        $productID = Product::where('slug', $slug)->first();
        $productDetail = Product::where('slug', $slug)->first();
        $idProType = ProductTypes::where('slug', $slug)->first();
        
        
        if ($productDetail) {
            $comments = Product::find($productID->id)->comments;
            return view('client.pages.detail', ['product' => $productDetail],['comments'=>$comments]);
        }
        else if($idProType) {
            $productByProdType = Product::where('idProductType', $idProType->id)->get();
            return view('client.pages.detail_protype', ['product' => $productByProdType, 'producttype' => $idProType]);
        }
    }
}
