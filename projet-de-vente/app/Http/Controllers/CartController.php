<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Panier;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Validator;


class CartController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    { 
      
           
 
       
   return view('cart.index');
    
    
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $product = Product::find($request->product_id);
        Cart::add( $product->id,$product->nomproduit, $request->quantite,$product->prixUT)
        ->associate('App\Models\Product');
      
          
            
  $panier=new Panier();
 
 
      $panier->quantite=Cart::Count();
      $panier->Nometprenomclient=Auth::user()->name;
      $products = [];
      $i = 0;

      foreach (Cart::content() as $product) {
          
          $products['Nomproduit_prod' . $i][] = $product->model->nomproduit;
          $products['PrixUT_prod' . $i][] = $product->model->prixUT;
          $products['Quantite_prod' . $i][] = $product->qty;
          $i++;
      }
    $panier->products = serialize($products);
    
    $panier->created_at;
     $panier->save();
     

   //  dd($paniers);

   $this->depassequantite();
    
   return redirect()->route('cart.index')->with('success', 'Le produit a été ajoutè avec sucess  avec quantitè : '. $product->qty);
     //return ($panier);
    
            //Cart::destroy();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

       
         public function update(Request $request, $rowId)
    {
     
    } 
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
     
        Cart::remove($id);
     
   
        return redirect()->route('cart.index')->with('success', 'Le produit a été supprimé avec sucess');
    }


    
    private function  depassequantite(){
        foreach(Cart::content() as $value){
            $product = Product  :: find   ($value->model->id);
           if($product->quantite < $value->qty)
        {
            $value->qty=$product->quantite;
    
            return redirect()->route('cart.index')->with('error','ATTENTION ,tu as depassè  la quantitè disponible on va ajoutè juste la quantitè qui est disponible pour le moment !!!');
        }
    }
    }
}
