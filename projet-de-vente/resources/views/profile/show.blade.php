<x-app-layout>


@section('content')
          
<nav>
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
            @if(Auth::check()&& Auth::user()->role=='client' )  <li><a href="{{url('/contact-us')}}">Contact</a></li>@endif
            @if(Auth::check()&& Auth::user()->role=='client' )  <li><a class="text-mited"href="{{route('cart.index')}}">Panier<span class="badge badge-pill badge-danger">{{Cart::Count()}}</span></a></li>@endif
         
         
            @if(!Auth::check())  <li>    <button ><a  href="{{url('/login')}}" >connexion</a>
   </button></li>@endif 
   @if(!Auth::check())<li>    <button ><a  href="{{url('/register')}}" >s'inscrire</a>
   </button></li>@endif 
   
           
          </ul>
        </div>
      </nav>
   
         
   
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif


          

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
    <div class="footer-dark">
           <footer>
               <div class="container">
                   <div class="row">
                     
                       
                       <div class="col-md-12 item text">
                           <h3 >A propos</h3>
                           <p>EI-Sun-service permet de vendre des produits et pouvoir des services. Cette société permet
de proposer des projets, répondre à diverses problématiques.</p>
                       </div>
                       <div class="col-md-6 item text">
                       <h3 >folow us</h3>
                                          <div class="col item social"><a href="https://m.facebook.com/EISS.DJERBA/"><i margin-top="40px" class="fab fa-facebook-f"></i></a><a href="#"><i align="center"class="fab fa-linkedin-in"></i></a><a href="https://www.linkedin.com/in/ei-sun-service-323a37223/?originalSubdomain=tn"><i class="fab fa-instagram"></i></a></div>
                   </div><div class="col-md-6 item text">
                   <h3 align="left">Nos adresses</h3>
                   <b align="right"margin-leftt="40px"><i class="fa fa-map-marker"></i> RUE 20 MARS TAUORIT HOUMET SOUK DJERBA </b></br>
                   <b align="right"margin-leftt="40px"><i class="fa fa-phone"></i>75652068/54337807</b>
</br>  <b  align="right"margin-left="40px"color="#FFD700"><i class="fa fa-envelope"></i> eisunservice@gmail.com</b>
                   <p class="copyright">realised by ilhem et mabrouka</p>
               </div></div>
           </footer>
       </div>
      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      </body>
      
      </html>
      
    <style>
     .b{ margin-right:30px;}
   .alert-success{  background:#B0F2B6;
   height:60px;
   
   padding-top:20px;
   }
         .btn1-danger{border-radius:50%;
               padding: 1px;
               padding-left: 6px;
               padding-right: 6px;
         background:#bb2124;}
         img{margin-left:130px;}
      
         table, th, td {
     border: 1px solid white;
     border-collapse: collapse;
   }
   .btn-dark{
     background :black;
     color:white;
   font-size:25px;
   border-radius:10px;
   float:right;
   }
   
   th, td {
     background-color: #E0E0E0;
   }
         .btn-danger{background:red;
               border-radius: 2px;
               border: 2px solid black;
             width:120px;
           font :bold ;
         color:white;}
   h1{font:50px bold;}
         table{border:bold 8px black;
         background:#F0F0F0;}
     
      
      
      .conteneur-nav{
          position: absolute;
          width: 100%;
      }
      img{margin-left:0px;}
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
      
     .aj{background:pink;
   color:black;
   border: bold 2px;
   font-weight:bold;
   padding:5px;
   width:180px;
   }
   
   .aj:hover{background:pink;
   color:black;
   border: bold 2px;
   padding:5px;} 
      </style>
 
   @endsection
</x-app-layout>
