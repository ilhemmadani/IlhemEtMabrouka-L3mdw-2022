@extends('layouts.app1')

    
      @section('content')
<html>
  
  
<nav style="font-size:15px">
        <div class="conteneur-nav">
       
        <input type="checkbox" id="mobile" role="button">
          <ul>
          
         
            <li ><a href="{{url('/dashboard')}}">Acceuil &ensp;</a>
             
            </li>
            <li class="deroulant"><a href="#">Liste produits &ensp;</a>
              <ul class="sous">
              <li><a href="{{url('/videossurvaillances')}}">VIDEOSSURVAILLANCES</a></li>
                   <li><a href="{{url('/alarmes')}}">ALARMES</a></li>
                   <li><a href="{{url('/informatiques')}}">INFORMATIQUES</a></li>
              </ul>
            </li>
            <li ><a href="{{url('/listeservices')}}">Liste services&ensp;</a></li>
           <li><a href="{{url('/contact-us')}}">Contact</a></li>
            @if(Auth::check()&& Auth::user()->role=='client' )  <li><a class="text-mited"href="{{route('cart.index')}}">Panier<span class="badge badge-pill badge-danger">{{Cart::Count()}}</span></a></li>@endif
         
         
            @if(!Auth::check())  <li>    <button ><a  href="{{url('/login')}}" >connexion</a>
   </button></li>@endif 
   @if(!Auth::check())<li>    <button ><a  href="{{url('/register')}}" >s'inscrire</a>
   </button></li>@endif 
   
           
          </ul>
        </div>
      </nav> 

<body style="background:#E8E8E8">


@if (session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
    @endif


@if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
 
@if (Cart::count() > 0)

<div class="px-4 px-lg-0">
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                    <!-- Shopping cart table -->
                    <div class="table-responsive" style="font-size:17px">
                        <table class="table"style="font-size:17px">
                            <thead>
                                <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Nom produit</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Description</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Image</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Prix</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantité</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Supprimer</div>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                @foreach (Cart::content() as $product)
                                <tr>
                                   
                                    <td>{{$product->model->nomproduit}} </td>
                                    <td>{{$product->model->designiation}} </td>
                                    <td>
                                        <img align="center"class="n"src="{{asset ('/imagesproduit/'.$product->model->image)}}" alt="Avatar"  width="100px" height="70px">
                                    </td>
                                    <td class="border-0 align-middle">
                                        <strong>{{$product->model->prixUT}} DT </strong></td>
                              
                             
                                        


                                        <td class="border-0 align-middle" align="center">
                       
                                        <strong>  {{ $product->qty }}  </strong>
                                                
                                    </td>
                                    
      



                      
                                    <td class="border-0 align-middle">
                                    <a href="{{ route('cart.destroy', $product->rowId) }}" class="btn btn-danger"title="Remove Cart">
    <i class="fa fa-trash"></i>
</a>
                                    </td>
                                </tr>@endforeach
                              
                               
                           
                            </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </div>
            <div class="row p-4 bg-white rounded shadow-sm">
               
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold"style="font-size:17px">Détails de la commande
                    </div>
                    <div class="p-4">
                       
                        <ul class="list-unstyled mb-4"style="font-size:17px">
                        
                        {{-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li> --}}

                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">PU HT</strong>
                            <h5 class="font-weight-bold">{{ Cart::subtotal() }}0</h5>
                        </li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">TVA</strong>
                            <h5 class="font-weight-bold">{{ Cart::tax() }}0</h5>
                        </li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">NET A PAYER</strong>
                            <h5 class="font-weight-bold">{{ Cart::total() }}0</h5>
                        </li>
                     
                        </ul><a href="{{ route('checkout.index') }}" class="btn btn-dark rounded-pill py-2 btn-block"><i class="fa fa-credit-card" aria-hidden="true"></i> Passer à la caisse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <h1  class="text-center"style="font-weight:bold; font-size: 300%;">Votre panier est vide pour le moment.</h1>
</br></br>
    <p>Mais vous pouvez visiter le <strong><a style="background:blue;font-size:30px;color:white;border-radius:10px" href="{{ route('dashboard') }}">boutique</a> pour faire votre shopping.
    </p>
</br>
</div>
@endif


</section>




<div class="footer-dark">
           <footer>
               <div class="container">
                   <div class="row">
                     
                       
                     
                      

                         <style>
     /*Reset CSS*/
     .alert-sucess{background:green;}
   
   .conteneur-nav{
       position: absolute;
       width: 100%;
       height:80px;
   }
   
   nav label{
       display: inline-block;
       width: 100%;
       padding: 10px 0px;
       text-align: center;
       background-color: gold;
   }
   nav ul{
       display: none;
       list-style-type: none;
       background-color: #1c2b4f;
   }
   nav input[type=checkbox]:checked + ul{
       display: flex;
       flex-flow : column wrap;
   }
   nav ul li{
       flex: 1 1 auto;
       text-align: center;
       color:white;
       
   }
   nav > div > ul > li > a{
       color: white;
       z-index:3;
   }
   nav a{
       display: block;
       text-decoration: none;
       color:black;
       padding: 10px 0px;
       z-index:3;
       font-weight:bold;
   }
   .sous{
       display: flex;
       flex-flow: column wrap;
       z-index: 1000;
   }
   
   .sous li{
   
       text-align: center;
       
   }
   .sous a{
   
       background-color: RGBa(200,200,200,0.8);
       z-index:3;
   }
   
   @media screen and (min-width: 980px){
       .conteneur-nav{
           position: static;
       }
       
       nav label, nav input{
           display: none;
       }
       nav input[type=checkbox]:checked + ul, nav ul{
           display: flex;
          
           
          
       }
       nav ul li{
           position: relative;
       }
       nav > div > ul > li > a{
           color: white;
       }
       nav a{
           border-bottom: 2px solid transparent;
       }
       nav a:hover{
           color: orange;
           border-bottom: 2px solid gold;
       }
       .sous{
           display: none;
           box-shadow: 0px 1px 2px #CCC;
         
           position: absolute;
           width: 100%;
       }
       nav > div > ul li:hover .sous{
           display: flex;
           flex-flow: column wrap;
       }
       .sous a{
           border-bottom: none;
           background-color: white;
           margin:0;
       }
       .sous a:hover{
           border-bottom: none;
           background-color: RGBa(200,200,200,0.1);
       }
       .deroulant > a::after{
           content:" ▼";
           font-size: 12px;
       }
   }
   
   .conteneur-contenu{
     margin: 20px 20px;
     height: 1500px;
   }
      
   .footer-dark {
     padding:50px 0;
     color:#f0f9ff;
     background-color:#A0522D;
   }
   
   .footer-dark h3 {
     margin-top:0;
     margin-bottom:12px;
     font-weight:bold;
     font-size:16px;
   }
   
   .footer-dark ul {
     padding:0;
     list-style:none;
     line-height:1.6;
     font-size:14px;
     margin-bottom:0;
   }
   
   .footer-dark ul a {
     color:inherit;
     text-decoration:none;
     opacity:0.6;
   }
   
   .footer-dark ul a:hover {
     opacity:0.8;
   }
   
   @media (max-width:767px) {
     .footer-dark .item:not(.social) {
       text-align:center;
       padding-bottom:20px;
     }
   }
   
   .footer-dark .item.text {
     margin-bottom:36px;
   }
   
   @media (max-width:767px) {
     .footer-dark .item.text {
       margin-bottom:0;
     }
   }
   
   .footer-dark .item.text p {
     opacity:0.6;
     margin-bottom:0;
   }
   
   .footer-dark .item.social {
     text-align:center;
   }
   
   @media (max-width:991px) {
     .footer-dark .item.social {
       text-align:center;
       margin-top:20px;
     }
   }
   
   .footer-dark .item.social > a {
     font-size:20px;
     width:36px;
     height:36px;
     line-height:36px;
     display:inline-block;
     text-align:center;
     border-radius:50%;
     box-shadow:0 0 0 1px rgba(255,255,255,0.4);
     margin:0 8px;
     color:#fff;
     opacity:0.75;
   }
   
   .footer-dark .item.social > a:hover {
     opacity:0.9;
   }
   
   .footer-dark .copyright {
     text-align:center;
     padding-top:24px;
     opacity:0.3;
     font-size:13px;
     margin-bottom:0;
   }
   button{background:#F0F0F0;
  border:2px black;
  border-radius: 50%;}
 .badge{
  border-radius:50%;
 }
   
   
   </style>


@endsection