@extends('layouts.app1')

    
      @section('content')
<html>
<nav style="font-size:15px">
     <div class="conteneur-nav">
    
     <input type="checkbox" id="mobile" role="button">
       <ul>
       <img src ="assets/img/logo.png"height="40px"width="60px" align="center"> </img>
      
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
         @if(Auth::check()&& Auth::user()->role=='client' )  <li><a href="{{url('/contact-us')}}">Contact</a></li>@endif
         @if(Auth::check()&& Auth::user()->role=='client' )  <li><a class="text-mited"href="{{route('cart.index')}}">Panier<span class="badge badge-pill badge-danger">{{Cart::Count()}}</span></a></li>@endif
        
         
         @if(!Auth::check())  <li>    <button><a  href="{{url('/login')}}" >connexion</a>
</button></li>@endif 
@if(!Auth::check())<li>    <button ><a  href="{{url('/register')}}" >s'inscrire</a>
</button></li>@endif 

        
       </ul>
     </div>
   </nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif


<div class="col-md-12">
    <a href="{{ route('cart.index') }}" class="btn btn-sm btn-secondary mt-3">Revenir au panier</a>
    <div class="row">
        <div class="col-md-6 mx-auto">
 
        <h2 class="text-center pt-5">Procéder au paiement</h2>
        <form role="form" action="{{ route('checkout.store') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                    
                        <h4 >details de carte</h4>
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='control-label'>Nom de la  carte</label> 
                              <input class='form-control' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='control-label'>Numero de  la carte</label> 
                              <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                           </div>                           
                        </div>                        
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'>CVC</label> 
                              <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration de mois</label> 
                              <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration d'annèe</label> 
                              <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                           </div>
                        </div>                     
                        <div class="form-row row">
                           <div class="col-xs-12">
                              <button class="btn btn-dark btn-lg btn-block" type="submit">Payer maintenant{{cart::total()}}0</button>
                           </div>
                        </div>
                     </form>
                     </br>
        
        
        
        
        
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
              clientnumber: $('.client').val(),
              number: $('.card-number').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    });

    function stripeResponseHandler(status, response) {
        if(response.error) {
            $('.error')
            .removeClass('hide')
            .find('.alert')
            .text(response.error.message);
        }else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
        }
    }
});
</script>
<style>
  .n{
    width:100px;
    height:100px;
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
              box-shadow: 0px 1px 2px #1c2b4f;
            
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
      .btn1-danger{border-radius:50%;
               padding: 1px;
               padding-left: 6px;
               padding-right: 6px;
         background:#bb2124;}</style>

@endsection