<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>

<!-- Stepper -->
<link href="css/stepper.css" rel='stylesheet' type='text/css' />

<!-- Stepper -->


</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php
 	include 'master/nav_master.php';
 ?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  					<div class="md-stepper-horizontal orange">
						    <div class="md-step active done">
						      <div class="md-step-circle"><span>1</span></div>
						      <div class="md-step-title">Basic Info</div>
						      <div class="md-step-bar-left"></div>
						      <div class="md-step-bar-right"></div>
						    </div>
						    <div class="md-step active editable">
						      <div class="md-step-circle"><span>2</span></div>
						      <div class="md-step-title">Education & Occupation</div>
						      <div class="md-step-optional">Optional</div>
						      <div class="md-step-bar-left"></div>
						      <div class="md-step-bar-right"></div>
						    </div>
						    <div class="md-step active">
						      <div class="md-step-circle"><span>3</span></div>
						      <div class="md-step-title">Physical</div>
						      <div class="md-step-bar-left"></div>
						      <div class="md-step-bar-right"></div>
						    </div>
						    <div class="md-step">
						      <div class="md-step-circle"><span>4</span></div>
						      <div class="md-step-title">Family & Religious</div>
						      <div class="md-step-bar-left"></div>
						      <div class="md-step-bar-right"></div>
						    </div>
						    <div class="md-step">
						      <div class="md-step-circle"><span>4</span></div>
						      <div class="md-step-title">Hobby & interests</div>
						      <div class="md-step-bar-left"></div>
						      <div class="md-step-bar-right"></div>
						    </div>
						    <div class="md-step">
						      <div class="md-step-circle"><span>4</span></div>
						      <div class="md-step-title">Partner Profile</div>
						      <div class="md-step-bar-left"></div>
						      <div class="md-step-bar-right"></div>
						    </div>
						    <div class="md-step">
						      <div class="md-step-circle"><span>4</span></div>
						      <div class="md-step-title">Payment</div>
						      <div class="md-step-bar-left"></div>
						      <div class="md-step-bar-right"></div>
						    </div>
						  </div>

   </div>
  </div>
</div>

<!-- MAP -->
<?php
	include 'master/map_master.php';
?>
<!-- End Map-->

<!-- Start Footer-->
<?php
	include 'master/footer_master.php';
?>
<!--End Footer-->
</body>
</html>	