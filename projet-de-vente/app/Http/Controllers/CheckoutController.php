<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\Models\Order;
use App\Models\User;
use App\Models\Ligne_commande;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use PDF;
use App\Models\Product;
use Carbon\Carbon;



class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        return view('checkout.index');
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
      
      
        try {
     
      Stripe::setApiKey(env('STRIPE_SECRET'));

      $customer = Customer::create(array(
        'email' => Auth::user()->email,
        'source'  => $request->stripeToken
    ));
     Charge::create ([
                "amount" => round(Cart::subtotal()*100),
                "currency" => "EUR",
              
                'customer' => $customer->id,
                "description" => "This is test payment",
               
        ]);
       
      
        $order = new Order;
       $order->Nometprenomclient=Auth::user()->name;
       $order->Subtotal = Cart::subtotal()*1.000;
        $order->TVa = Cart::tax()*1.000;
        $order->Total = Cart::total()*1.000;
        $products = [];
        $i = 0;
        foreach (Cart::content() as $product) {
          
            $products['Nomproduit_prod' . $i][] = $product->model->nomproduit;
            $products['PrixUT_prod' . $i][] = $product->model->prixUT;
            $products['Quantite_prod' . $i][] = $product->qty;
            $i++;
        }
 $order->products = serialize($products);
        $order->created_at;
        $order->save();
        $ligne_commande =new ligne_commande;
        $ligne_commande->product_id=$product->id;

        $ligne_commande->order_id=$order->id;
        $ligne_commande->save();
      
        $this->updatestock();
       $orders = Order::find($order);
         $pdf = PDF::loadView('commande.pdf',compact('orders'));
      cart::destroy();
        return $pdf->download('facture.pdf',compact('orders'));
   
    } catch (\Exception $ex) {
        return $ex->getMessage();
    }
   
}
        
    
        
        
     
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $orders = Order::all();
           
            $orders = Order::paginate(2);
            return view('commande.index')->with('orders',$orders);
         
           
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
    private function  updatestock(){
        foreach(Cart::content() as $item){
        $product = Product  :: find   ($item->model->id);
       
        $product->update(['quantite' =>$product->quantite - $item->qty]);
        }
    }
    

}