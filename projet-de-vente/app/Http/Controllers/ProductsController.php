<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductsController extends Controller
{
    public function product(){
        
        $products = Product::orderBy('created_at','desc')->paginate(4);
       
       
        return view('alarmes')->with('products', $products);
      }


        public function cam(){
            $products = Product::orderBy('id', 'asc')->paginate(4);
           
        return view('videossurvaillances')->with('products', $products);}
        
            public function index(){
              $products = Product::paginate(12);
                return view('informatiques')->with('products', $products);}
               
            
                public function show($slug)
                {
                    $product = Product::all();
            
                    return view('products.show')->with('product', $product);
                }
                public function facture()
              {
                $products = Product::all();
                return view('commande.pdf')->with('products', $products);
              }
}
