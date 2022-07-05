<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ei sunservice</title>

  <!-- Favicons -->
 
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a class="logo"><b>EI <span>SUN SERVICE</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          
   
               

        
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        <button>  <a href="{{ route('logout') }}" class="logout"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                @lang('deconnexion')
                            </a></button>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                                @csrf                                
                            </form>
      </ul>
    </div>
  </header>
  <style>button{
  font-size:15px;
  text-align:center;
  padding-top:5px;
  margin-top:20px;
  padding-bottom:5px;
 font-weight:bold;

  }
  .logout:hover{
    text-decoration: none;
  }
  
</style>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="assets/img/logo.png" class="img-circle" width="80"></a></p>
         
         
          <li class="sub-menu">
          <a  href="{{url('/products')}}">
              <i class="fa fa-desktop"></i>
              <span>gestion produits</span>
              </a>
            
          </li>
          <li class="sub-menu">
          <a  href="{{url('/services')}}">
              <i class="fa fa-cogs"></i>
              <span>gestion services</span>
</a></li>
          <li class="sub-menu">
            <a href="{{url('/commande')}}">
              <i class="fa fa-book"></i>
              <span>gestion commandes</span>
              </a>
           
          </li>
        
         
          @if(Auth::check()&& Auth::user()->role=='admin' )    <li a href="basic_table.html"class="sub-menu">
          <a  href="{{url('/users')}}">
              <i class="fa fa-th"></i>
              <span>gestion utilisateurs</span>
              </a>
           
          
          </li>  @endif
        
        
   
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
  
    <!--main content end-->
    <!--footer start-->
    
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
      
    <!--footer end-->
  
 
</body>

</html>
