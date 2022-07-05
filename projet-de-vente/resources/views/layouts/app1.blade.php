
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>EI SUN SERVICE</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">
                
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('extra-meta')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        

        @yield('extra-script')

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- FontAwesome 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        
    
	

		
		<!-- global styles -->


		<!-- scripts -->
		
	@yield('css')

   

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>
   

  
        <!-- Nav Bar Start -->
        @if(Auth::check()&& Auth::user()->role=='client' ) 
        <div class="navbar navbar-expand-lg"style="background:#A0522D;height:50px">
            <div class="container-fluid">
             
            <a href="/" class="navbar-brand"style="color:white;font-size:30px"><b>EI SUN SERVICE</b></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">

                   
                       

                        <div class="collapse navbar-collapse justify-content-between">
                            @guest                     
                          
                            @else
                            <li class="nav-item dropdown">
                             <a  href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" style="color:gray;height:43px;background:white;border-radius:10px;width:150px;margin-left:20px"aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ auth()->user()->name . ' ' . auth()->user()->prenom }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labellebdy="navbarDropdown">
                                <a style=":hover:background:white">   <x-jet-dropdown-link class="dropdown-item" href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link></a>
                                    <a href="{{ route('logout') }}" class="dropdown-item"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        @lang('Déconnexion')
                                    </a>
                                

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                                        @csrf                                
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </div>
                       
                
                    </div>
                </div>
            </div>
        </div>@endif
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        @yield('titre')
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

     

        @yield('content')

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
                       <h3 >CONTACTEZ-NOUS</h3>
                       <div class="col item social"><a href="#"><i margin-top="40px" class="fab fa-facebook-f"></i></a><a href="#"><i align="center"class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                   </div><div class="col-md-6 item text">
                   <h3 align="left">Nos adresses</h3>
                   <b align="right"margin-leftt="40px"><i class="fa fa-map-marker-alt"></i> RUE 20 MARS TAUORIT HOUMET SOUK DJERBA </b></br>
                   <b align="right"margin-leftt="40px"><i class="fa fa-phone-alt"></i> 75652068/54337807</b>
</br>  <b  align="right"margin-left="40px"color="#FFD700"><i class="fa fa-envelope"></i> eisunservice@gmail.com</b>
                   <p class="copyright">realisèe par ilhem et mabrouka</p>
               </div></div>
           </footer>
       </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      </body>
      
      </html>
      
      <style>
        /*Reset CSS*/
      
      
      .conteneur-nav{
          position: absolute;
          width: 100%;
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
      
     .aj{background:#1c2b4f;
color:white;
border: bold 2px;
font-weight:bold;

width:180px;
}

.aj:hover{background:#A0522D;
color:white;
border: bold 2px;
padding:5px;}


      </style>
        
        <!-- Footer End -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        @yield('extra-js')
        <!-- JavaScript Libraries -->
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing.min.js"></script>
  
   
    
      
        
        <!-- Contact Javascript File -->
       
      

        <!-- Template Javascript -->
    
    </body>
</html>
