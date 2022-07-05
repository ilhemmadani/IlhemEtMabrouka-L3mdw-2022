
<x-app-layout style="background:black">
   

                  
@section('content')

  
   <nav>
        <div class="conteneur-nav">
       
        <input type="checkbox" id="mobile" role="button">
          <ul>
          <img src ="assets/img/logo.png"height="20px"width="50px" align="center"> </img>
         
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
     
      
                                
      
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Untitled</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
         <link rel="stylesheet" href="assets/css/style.css">
         <h6 align="center">  si vous avez besoin d'une service vous pouvez contacter la sociète par :
                
               <h4 align="center"> <i class="fa fa-phone"></i>75652068/54337807</h4>
               
                <strong align="center"><a style="background:blue;margin-left:550px;align:center;font-size:20px;color:white;border-radius:10px" href="{{url('/contact-us')}}">sur ce lien: contacter-nous</a> </strong></h6>
      <div class="col-lg-12">
      
      
                <div class="row" >
             
                @foreach ($services as $service)
                  
                 
           

</h4>

    <figure class="snip0015">
    <img  src="{{asset ('/imagesservice/' . $service->image)}}"alt="sample38"/>
	<figcaption>
		<h2>{{$service->nomservice}}</h2>
		
		<a href="#"></a>
	</figcaption>			
</figure>
   
         @endforeach
        
         <div  align="center"style="width:4px;margin-left:520px">  {!! $services->links() !!}</div></div>
         </div></div>
         <body>
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
                       <h3 >Contactez-nous</h3>
                       <div class="col item social"><a href="https://m.facebook.com/EISS.DJERBA/"><i class="icon ion-social-facebook"></i></a><a href="https://www.linkedin.com/in/ei-sun-service-323a37223/?originalSubdomain=tn"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                   </div><div class="col-md-6 item text">
                   <h3 align="left">Nos adresses</h3>
                   <b align="right"margin-leftt="40px"><i class="fa fa-map-marker"></i> RUE 20 MARS TAUORIT HOUMET SOUK DJERBA </b></br>
                   <b align="right"margin-leftt="40px"><i class="fa fa-phone"></i>75652068/54337807</b>
</br>  <b  align="right"margin-left="40px"color="#FFD700"><i class="fa fa-envelope"></i> eisunservice@gmail.com</b>
                   <p class="copyright">realisèe  par ilhem et mabrouka</p>
               </div></div>
           </footer>
       </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      </body>
      
      </html>
      
      <style>
        /*Reset CSS*/
        button{background:#F0F0F0;
  border:2px black;
  border-radius: 50%;}
        .conteneur-nav{
          position: absolute;
          width: 100%;
          height:70px;
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
          z-index:2;
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
              background-color: #1c2b4f;
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
      @import url(https://fonts.googleapis.com/css?family=Raleway:400,200,300,800);
figure.snip0015 {

  color: #fff;
  position: relative;
  overflow: hidden;
  margin: 10px;

  max-width: 650px;
  max-height: 800px;
  width: 100%;
 
 
}
figure.snip0015 * {
 
  box-sizing: border-box;
}
figure.snip0015 img {
  opacity: 1;
  width: 80%;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
  
}
figure.snip0015 figcaption {
  position: absolute;
  bottom: 0;
  left: 0;

  padding-top: 2.5em ;

  padding-right: 4em ;
  padding-left:2em ;
  width:800px;
  height: 300px;
}
figure.snip0015 figcaption::before {
  position: absolute;
  
 width:1000px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.8);

  opacity: 0;

  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  -webkit-transition-delay: 0.6s;
  transition-delay: 0.6s;
}
figure.snip0015 h2,
figure.snip0015 p {
  opacity: 1;
  -webkit-transform: translate3d(0%, 0%, 0);
  transform: translate3d(0%, 0%, 0);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
figure.snip0015 h2 {

  font-weight: bold;
  text-transform: uppercase;
  -webkit-transform: translate3d(0%, 20%, 0);
  transform: translate3d(0%, 50%, 0);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
  color:#1c2b4f;
 
  
}
figure.snip0015 h2 span {
  font-weight: 1000;
  color:#A0522D;
}
figure.snip0015 p {
  font-weight: 200	;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
figure.snip0015 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  color: #1c2b4f;
}
figure.snip0015:hover img {
  opacity: 1;
  width:100%;
}
figure.snip0015:hover figcaption h2 {
  margin-top: 40px;
  opacity: 0;

  transition: opacity 0.35s,-webkit-transform 0.35s,-moz-transform 0.35s,-o-transform 0.35s,transform 0.35s;
}

figure.snip0015:hover figcaption::before {
  background: rgba(255, 255, 255, 0);
  top: 55px;
  bottom: 55px;
  
  opacity: 2;

  transition-delay: 0s; 
}



/* Demo purposes only */

      </style>
      @endsection
      </x-app-layout>
      
          
      