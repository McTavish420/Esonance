<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>ESONANCE | Registration</title>

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
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" href="assets/css/themes/headers/default.css" id="style_color-header-1" />    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head> 

<body>


<!--=== Top ===-->    

<!--=== End Top ===-->    

<?php include 'header.php' ; ?>
<?php include 'news.php'; ?>


<!--=== Content Part ===-->
<div class="body">
	<div class="breadcrumbs margin-bottom-50">
    	<div class="container">
            <h1 class="color-green pull-left">Registration</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                <li class="active">Registration</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->

	<div class="container">		
		<div class="row-fluid margin-bottom-10">
			<!--h3 style="margin-top: -25px; color:#ff1111 ;"><strong><blink>Registration is closed. Thank you for your interest. See you on 22<sup>nd</sup> August, 2014.</blink></strong></h3>
			<h4 style="margin-top: -5px; color:#1ca61c ;"><strong>* Registration is still open for Event Kit and Poster Presentation for IUT final Year Students.</strong></h3-->	
		
        		
        	<div class="controls">
                	<label>To register please Select a Category<span class="color-red">*</span></label>
                	<select class="span3" id = "opts" onchange = "showForm()">
                    <option /> -- Please Select --
                    
                   
               
                    <option value="robomania"/>Unmanned Rescue Mission
                    <option value="project"/>Idea Blowing Competition                   
                    <option value="bcs"/>Investor Pitch Challenge
                    <option value="poster"/>Poster Presentation
                    <option value="quiz"/>Brain Teaser
                    <option value="rcube"/>Rubik's Cube
                    <option value="matlab"/>Signal Processing

                
                    
                    </select> 
                    
                    
                </div>
        	
        	
        	<!--/robomaina-->
        	<div id = "f1" style="display:none">
        		<form method="post" action="reg.php" name="robo">
        			<input type="hidden" name="table" value="robomania">
        		<div class="controls">
                    <div class="span6">
                        <label>Name 1 (Leader Name)<span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name11" required=""/>
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id11" required="" />
                    </div>
                </div>
                
                
                
            
                
                
               
                
                
                <div class="controls">
                    <div class="span6">
                        <label>Number of Team Members </label>
                        <select name="num1" class="span12">
                        	<option value="">-</option>
                        	<option value="1">1</option>
                        	<option value="2">2</option>
                        	<option value="3">3</option>
                        	<option value="4">4</option>
                        	<option value="5">5</option>
                        	<option value="6">6</option>
                        	<option value="7">7</option>
                        	<option value="8">8</option>
                        	<option value="9">9</option>
                        	<option value="10">10</option>
                        </select>
                    
                    </div>
          			<div class="span6">
          				<label>Other Team Members <span class="color-red">*</span></label>
                    <textarea class="span12" name="id21"></textarea>
                    </div>
                </div>
                
                
                <div class="controls">
                	
                	<label>Team name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="team1" required="" />
                    <label>Institution Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins1" required="" />
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact1" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email1" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                </div>
                
                
                <!--/Project Showcasing-->
        		<div id = "f2" style="display:none">
        			<form method="post" action="reg.php" name="project">
        			<input type="hidden" name="table" value="project">
        		<div class="controls">
                    <div class="span6">
                        <label>Name 1 (Leader Name)<span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name12" required=""/>
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id12" required=""/>
                    </div>
                </div>
                
                
                
               
                
                
                <div class="controls">
                    <div class="span6">
                        <label>Number of Team Members </label>
                        <select name="num2" class="span12">
                        	<option value="">-</option>
                        	<option value="1">1</option>
                        	<option value="2">2</option>
                        	<option value="3">3</option>
                        	<option value="4">4</option>
                        	<option value="5">5</option>
                        	<option value="6">6</option>
                        	<option value="7">7</option>
                        	<option value="8">8</option>
                        	<option value="9">9</option>
                        	<option value="10">10</option>
                        </select>
                    
                    </div>
          			<div class="span6">
          				<label>Other Team Members <span class="color-red">*</span></label>
                    <textarea class="span12" name="id22"></textarea>
                    </div>
                </div>
            
                
                
                <div class="controls">
                	
                	<label>Project Title  <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="project2" required="" />
                	<label>Team name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="team2" required="" />
                    <label>Institution Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins2" required="" />
                    <label>Project type<span class="color-red">*</span></label>
                	<select class="span3" name="typ2">
                    <option />--Please Select--
                    <option value="Hardware"/>Hardware
                    <option value="Software"/>Software
                    </select>
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact2" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email2" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                <!--/bcs-->
                <div id = "f3" style="display:none">
                	<form method="post" action="reg.php" name="bcs">
        			<input type="hidden" name="table" value="bcs">
                <div class="controls">
                    <div class="span6">
                        <label>Name 1 (Leader Name)<span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name13" required="" />
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id13" required=""/>
                    </div>
                </div>
                
                
                <div class="controls">
                    <div class="span6">
                        <label>Number of Team Members </label>
                        <select name="num3" class="span12">
                        	<option value="">-</option>
                        	<option value="1">1</option>
                        	<option value="2">2</option>
                        	<option value="3">3</option>
                        	<option value="4">4</option>
                        	<option value="5">5</option>
                        	<option value="6">6</option>
                        	<option value="7">7</option>
                        	<option value="8">8</option>
                        	<option value="9">9</option>
                        	<option value="10">10</option>
                        </select>
                    
                    </div>
          			<div class="span6">
          				<label>Other Team Members <span class="color-red">*</span></label>
                    <textarea class="span12" name="id23"></textarea>
                    </div>
                </div>
                
                
                
                
                
                
                <div class="controls">
                	
                	<label>Team name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="team3" required="" />
                    <label>Institution Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins3" required="" />
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact3" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email3" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                
                </div>
                
                
                
                <!--/poster-->
                <div id = "f4" style="display:none">
                	<form method="post" action="reg.php" name="poster">
        			<input type="hidden" name="table" value="poster">
                <div class="controls">
                    <div class="span6">
                        <label>Name 1 (Leader Name)<span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name14"required="" />
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id14" required=""/>
                    </div>
                </div>
                
                
                
                <div class="controls">
                    <div class="span6">
                        <label>Number of Team Members </label>
                        <select name="num4" class="span12">
                        	<option value="">-</option>
                        	<option value="1">1</option>
                        	<option value="2">2</option>
                        	<option value="3">3</option>
                        	<option value="4">4</option>
                        	<option value="5">5</option>
                        	<option value="6">6</option>
                        	<option value="7">7</option>
                        	<option value="8">8</option>
                        	<option value="9">9</option>
                        	<option value="10">10</option>
                        </select>
                    
                    </div>
          			<div class="span6">
          				<label>Other Team Members <span class="color-red">*</span></label>
                    <textarea class="span12" name="id24"></textarea>
                    </div>
                </div>
                
                
            
                
                
                <div class="controls">
                	
                	<label>Project title <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="project4" required="" />
                    <label>Institution Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins4" required="" />
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact4"  required=""/>
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email4" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                </div>
                
                
                
                <div id = "f10" style="display:none">
                	<form method="post" action="reg.php" name="quiz">
        			<input type="hidden" name="table" value="quiz">
                <div class="controls">
                    <div class="span6">
                        <label>Name<span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name10"required="" />
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id10" required=""/>
                    </div>
                </div>
                
                
                
            
                
                
        
                
                
                
            
                
                
                <div class="controls">
                	
                	<label>Institution Name <span class="color-red">*</span></label>              	
                    <input type="text" class="span6" name="ins10" required="" />
     
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact10" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email10" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                </div>
                
                
                
                
                 <!--/Rubics Cube-->
                <div id = "f5" style="display:none">
                	<form method="post" action="reg.php" name="rcube">
        			<input type="hidden" name="table" value="rcube">
                <div class="controls">
                    <div class="span6">
                        <label>Name <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name15" required=""/>
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id15" required="" />
                    </div>
                </div>
                
                
                
                <div class="controls">
                	
                
                    <label>Institution Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins5" required="" />
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact5" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email5" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                </div>
                
                
                
                
                
                 <!--/matlab-->
                <div id = "f6" style="display:none">
                	<form method="post" action="reg.php" name="matlab">
        			<input type="hidden" name="table" value="matlab">
                <div class="controls">
                    <div class="span6">
                        <label>Name <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name16" required=""/>
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id16" required=""/>
                    </div>
                </div>
                
                
                
                <div class="controls">
                	
                
                    <label>Institution Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins6" required="" />
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact6" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email6" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                </div>
                
                
                
                
                
                
                                <!--/poster-IUT-->
                <div id = "f7" style="display:none">
                	<form method="post" action="reg.php" name="poster_iut">
        			<input type="hidden" name="table" value="poster_iut">
                <div class="controls">
                    <div class="span6">
                        <label>Name 1 (Leader Name)<span class="color-red">*</span></label>
                        <input type="text" class="span12" name="name17" required=""/>
                    </div>
                    <div class="span6">
                        <label>Student ID <span class="color-red">*</span></label>
                        <input type="text" class="span12" name="id17" required=""/>
                    </div>
                </div>
                
                
                
                <div class="controls">
                    <div class="span6">
                        <label>Name 2 </label>
                        <input type="text" class="span12" name="name27" />
                    </div>
                    <div class="span6">
                        <label>Student ID </label>
                        <input type="text" class="span12" name="id27" />
                    </div>
                </div>
                
                
                <div class="controls">
                    <div class="span6">
                        <label>Name 3 </label>
                        <input type="text" class="span12" name="name37" />
                    </div>
                    <div class="span6">
                        <label>Student ID </label>
                        <input type="text" class="span12" name="id37" />
                    </div>
                </div>
                
                
                
                <div class="controls">
                    <div class="span6">
                        <label>Name 4 </label>
                        <input type="text" class="span12" name="name47" />
                    </div>
                    <div class="span6">
                        <label>Student ID </label>
                        <input type="text" class="span12" name="id47" />
                    </div>
                </div>
                
                
                <div class="controls">
                	
                	<label>Project title <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="project7" required="" />
                    <label>Institution Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins7" required="" />
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact7" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email7" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                </div>
                
                
                
                
                
                
                
                
                
                 <!--/event-kit-->
             	<div id = "f8" style="display:none">
             		<form method="post" action="reg.php" name="event_kit">
        			<input type="hidden" name="table" value="event_kit">
                <div class="controls">
                	<label>Event Kit is available for only guest and Ex- IUTians as souvenir</label><br />
                	<label>Name <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="name18" required=""/>
                    <label>Occupation <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="occupation8" required=""/>
                    <label>Institution / Company Name  <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="ins8" required="" />
                    <label>Contact No <span class="color-red">*</span></label>
                    <input type="text" class="span6" name="contact8" required="" />
                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span6" name="email8" required="" />
                    
                    
                </div>
                <div class="controls form-inline">
                    <br />
                    <button class="btn-u pull-left" type="submit">Register</button>
                    <br /> <br />
                </div>
             </form>
                </div>
                
                <div id = "f9" style="display:none">
                </div>
                
                <div class="headline"><h3>SEE EVENT DETAILS</h3></div>
                
                <ul class="thumbnails">
	<a href="robomania.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/1.jpg" alt="" /></div>
                   				
                </div>
                
                
            </div>
        </li>
        </a>
        <a href="projects.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/2.jpg" alt="" /></div>
                    					
                </div>
                
               
            </div>
        </li>
        </a>
        <a href="poster.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/7.jpg" alt="" /></div>
                				
                </div>
                
                
            </div>
        </li>
        </a>
        <a href="case-study.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/3.jpg" alt="" /></div>
                   				
                </div>
                
                
            </div>
        </li>
        </a>
       
    </ul>
	
	
	
	<ul class="thumbnails">
		
        <a href="rcube.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/6.jpg" alt="" /></div>
           				
                </div>
               
               
            </div>
        </li>
        </a>
        <a href="quiz.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/5.jpg" alt="" /></div>
          				
                </div>
                
                
            </div>
        </li>
        </a>
        
        <a href="matlab.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/4.jpg" alt="" /></div>
                				
                </div>
                
                
            </div>
        </li>
        </a>
        <a href="experience-zone.php">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="assets/img/carousel/8.jpg" alt="" /></div>
               				
                </div>
                
                
            </div>
        </li>
        </a>
         
    </ul>
    
                <hr />
				
            
        </div><!--/row-fluid-->
	</div><!--/container-->		
</div><!--/body-->
<!--=== End Content Part ===-->




<?php include 'footer.php' ; ?>


<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>        
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/js/respond.js"></script>
<![endif]-->
<script type = "text/javascript">
function showForm(){
var selopt = document.getElementById("opts").value;
if (selopt == 'robomania' ) {
document.getElementById("f1").style.display="block";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="none";
}
if (selopt == 'project') {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="block";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="none";
}
if (selopt == 'bcs') {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="block";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="none";
}

if (selopt == 'poster') {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="block";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="none";
}

if (selopt == 'quiz') {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="block";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="none";
}
if (selopt == 'rcube') {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="block";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="none";
}

if (selopt == 'quiz') {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="none";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="block";
}
if (selopt == 'matlab') {
document.getElementById("f1").style.display="none";
document.getElementById("f2").style.display="none";
document.getElementById("f3").style.display="none";
document.getElementById("f4").style.display="none";
document.getElementById("f5").style.display="none";
document.getElementById("f6").style.display="block";
document.getElementById("f7").style.display="none";
document.getElementById("f8").style.display="none";
document.getElementById("f9").style.display="block";
document.getElementById("f10").style.display="none";
}

}

</script>
</body>
</html> 