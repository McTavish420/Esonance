<?php

if(isset($_POST['subject'])){
	
	$name = $_POST['name'];
	$header ="from: <". $_POST['email'].">";
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$to="ESONANCE.info@iut-dhaka.edu";
	$sentmail = mail($to,$subject,$message,$header);
	
}
?>


<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>ESONANCE | Contact</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/headers/header1.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="assets/css/style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css" type="text/css" media="screen" />          
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" href="assets/css/themes/headers/default.css" id="style_color-header-1" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head> 

<body>

<?php include 'header.php';?>
<?php include 'news.php'; ?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
        <h1 class="color-green pull-left">Our Location</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!-- Google Map -->
<div id="map" class="map margin-bottom-40 pull-center">
	<div align="center">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3646.3523635369465!2d90.37895499999999!3d23.947977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4abf8334fb1%3A0xbb003124c3dedc91!2sIslamic+University+of+Technology!5e0!3m2!1sen!2s!4v1407332878625" width="1000" height="300" frameborder="0" style="border:0"></iframe>
	</div>
</div><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row-fluid">
		<div class="span9">
            <div class="headline"><h3>Contacts</h3></div>
<form method="post" action="contact.php"/>

<?php
if(isset($_POST['subject'])){
	echo "Your Message has been sent.";
}
?>
                <label>Name<span class="color-red">*</span></label>
                <input type="text" class="span7 border-radius-none"  name="name" required=""/>
                <label>Email <span class="color-red">*</span></label>
                <input type="text" class="span7 border-radius-none" name="email" required="" />
                <label>Subject <span class="color-red">*</span></label>
                <input type="text" class="span7 border-radius-none" name="subject" required="" />
                <label>Message <span class="color-red">*</span></label>
                <textarea rows="8" class="span10" name="message"></textarea>
                <p><button type="submit" class="btn-u">Send Message</button></p>
            </form>
        </div><!--/span9-->
        
		<div class="span3">
        	<!-- Contacts -->
            <div class="headline"><h3>Contacts</h3></div>
            <ul class="unstyled who margin-bottom-20">
                <li><a href="#"><i class="icon-home"></i>Islamic University of Technology (IUT), BoardBazar, Gazipur, 1704</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>esonance.info@iut-dhaka.edu</a></li>
                <li><a href="http://www.eee.iut-dhaka.edu/ESONANCE"><i class="icon-globe"></i>eee.iut-dhaka.edu/esonance</a></li>
            </ul>

        	
        </div><!--/span3-->
    </div><!--/row-fluid-->        

   
</div><!--/container-->		
<!--=== End Content Part ===-->

<?php include("footer.php"); ?>

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>        
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/contact.js"></script>

</body>
</html> 