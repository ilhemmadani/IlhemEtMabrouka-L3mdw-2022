<title>EI SUNSERVICE</title>
  <nav>
     <div class="conteneur-nav">
    
     <input type="checkbox" id="mobile" role="button">
       <ul>
     <img src ="assets/img/logo.png"height="60px"width="70px"> </img>
      
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
         @if(!Auth::check())  <li>    <button ><a  href="{{url('/login')}}" >connexion</a>
</button></li>@endif 
@if(!Auth::check())<li>    <button ><a  href="{{url('/register')}}" >s'inscrire</a>
</button></li>@endif 
        
       </ul>
     </div>
   </nav>
   <div margin-bottom="none"id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
   
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1500">
        <img src="assets/img/15.jpeg"height="500px" class="d-block w-100"  alt="...">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1500">
        <img src="assets/img/12.jpg" height="500px"class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
       
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/10.jpg"height="500px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        
        </div>
      </div>
    
   
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
   </div>    </div>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   
   
   
   
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Untitled</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   
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
   
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  
   
   </html>
   
   <style>
     /*Reset CSS*/
   .d-block{height:500px;}
   
   .conteneur-nav{
       position: absolute;
       width: 100%;
       height:60px;
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
           text-decoration: none;
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
   
   
   </style>
 

