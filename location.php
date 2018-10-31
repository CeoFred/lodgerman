<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Properties in <?php echo $_GET['area'] ?> - lodgerman</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="../assets/css/style.css">
    
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../assets/images/icons/icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta name="description" content="Here is a full list of properties in <?php echo $_GET['area'] ?>"/>
    <meta name="keywords" content="lodge,lodge in futo,lodgerman,lodge finder,lodge and room,mypadi" />
    <meta name="Robots" content="index, follow" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../assets/css/mdb.min.css" rel="stylesheet">
    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Lodgerman">
    <link rel="apple-touch-icon" href="../assets/images/icons/icon-152x152.png">
    <!-- Windows -->
    <meta name="msapplication-TileImage" content="../assets/images/icons/icon-144x144.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <link rel="icon"
         type="image/png"
         href="../assets/images/icons/icon-144x144.png">
         
</head>
<style>
  
input.navSearch:hover{
  border:0px;
}
div.col-6.areaRow{
  border:3px solid #33cccc;
  padding:40px;
  height: 50px;
}
a .suggested_area {
transition: .3s ease-out;
}
.suggested_area {
margin: 10px;
border: 2px solid #33CCCC;
border-radius: 5px;
padding: 10px;
 text-align: center;
 font-size: 16px;
 color:#000;
}
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.my-float{
	margin-top:22px;
}
.header {
font-size: 24px;
color: #4f4f4f;
font-weight: 700;
}
.suggested_destinations .header {
margin-top: 2px;
margin-bottom: 5px;
}
.suggested_destinations {
margin-top: 50px;
}
.suggested_destinations {
padding-top: 50px;
}
.suggested_destinations .tiny-divider {
margin-bottom: 30px;
}
.suggested_destinations .col-md-2, .suggested_destinations .col-sm-4, .suggested_destinations .col-xs-6 {
padding-right: 10px;
padding-left: 10px;
}
.suggested_area:hover{
  background-color:#33CCCC;
  color:#fff; 
}
.v7-footer-mobile {
  background:url("../assets/images/bg.png");
  background-size: cover;
  padding: 3rem;
  background-repeat: no-repeat;
}
.v7-footer-mobile p {
	font-size: 16px;
	font-weight: 700;
	color: #FFF;
	margin-bottom: 1rem;
}
</style>
<body id="body">
    
<div style="width:100%" >
  <div class="card animated slideInLeft" id="sideNav" style="width:70%;z-index:99;position:absolute;height:100%;display:none;">
    <div class="card-body">
      <div style="float:right"><i class="fa fa-close" onclick="showNav()"></i></div>
      <input type="search" class="navSearch" style="border:0px;border-bottom:2px solid #33CCCC" placeholder="Find Lodges around">
      <br>
  <div>

    <hr>
    <h3 class="h3-responsive"> LandLords</h3>
    <div>
      <a href="#"><i class="fa fa-home"></i> Add your hostel</a>
    </div>
    <div>
        <a href="#"><i class="fa fa-user-circle-o"></i> Login</a>
      </div>
    <hr>
    <h3 class="h3-responsive">Tenants</h3>
    <div>
        <a href="#"><i class="fa fa-money"></i> Pay rents</a>
      </div>
      
    <div>
        <a href="!#"> <i class="fa fa-user"></i> Login</a>
        
      </div>
      
   New here?   <a href="!#" class="btn btn-sm" style="margin-left:0px;background-color:#33CCCC">Sign up</a>
  </div>
    </div>
  </div>
  </div>
  
<nav class="navbar navbar-expand-lg navbar-light navbar-fixed" >
  <button class="navbar-toggler" type="button" onclick="showNav()">
    <span class="navbar-toggler-icon"  style="border-radius:7px"></span>
  </button>
  <a class="navbar-brand" href="../index.html">
      <img src="../assets/images/icon.png" width="40" height="40" class="d-inline-block align-top" alt="">

  </a>

</nav>
      <!-
<main>


</main>


<div class="v7-footer-mobile">
      <p>About Us</p>
      <p>Privacy</p>
      <p>Terms of Service</p>
      <p>How it works</p>
      <br>
      <p style="text-align:center;">Copyright © 2018 lodgerman.inc</p>
</div>
<a href="#" class="float">
    <img src="../assets/images/help.png" alt="support">
    </a>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    
    <script type="text/javascript" src="../assets/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js" type="text/javascript"></script>
      
</body>
</html>