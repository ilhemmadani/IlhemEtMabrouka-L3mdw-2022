<?php

 namespace App\Http\Controllers ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function index(){
    
        if( Auth()->user()->role ==='admin'){
           return redirect('/products');
       }
       elseif ( Auth()->user()->role ==='user'){
        return redirect('/products');
    }
    else
      {    return view ('dashboard');
   }
}


}
