@extends('layouts.app1')

    
      @section('content')

  
  
<nav style="font-size:15px">
        <div class="conteneur-nav">
       
        <input type="checkbox" id="mobile" role="button">
          <ul>
          <img src ="assets/img/logo.png"height="40px"width="50px" align="center"> </img>
         
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

<body>
<section style="padding-bottom:20px;width:1100px;padding-left:300px;align:center">
@if(Session::has('message_sent'))
<div class="alert alert-success"role="alert">
    {{Session::get('message_sent')}}
    @endif
    <div class="card-header">
        Contacter-nous
</div>

<div class="card-body"width="150px">
    
</br>
</br>
     <form method="POST" action="{{route('contact.us')}}"enctype="multipart/form-data">
         @csrf
        <div class="form-group">
            <label for="name">Nom et  prenom</label>
            <input type="text"name="name"class="form-control"/>
</div>
<div class="form-group">
            <label for="email">Email</label>
            <input type="text"name="email"class="form-control"/>
</div>
<div class="form-group">
            <label for="phone">Telephone</label>
            <input type="text"name="phone"class="form-control"/>
</div>
<div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text"name="adresse"class="form-control"/>
</div>
<div class="form-group">
            <label for="message">message</label>
            <textarea name="message"class="form-control"></textarea>
</div>

<button type="submit"class="btn btn-dark float-right">envoyer</button>

</form>
</div>
</div>



</div>

                         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</section>
</body>
  </html>


  <style>
     /*Reset CSS*/
   
   
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

