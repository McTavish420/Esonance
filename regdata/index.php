<?php
	 include_once("conn.php");
	
	$fetch1 = "SELECT * FROM robomania";	
	$not1= mysql_query($fetch1);
	$num1=mysql_numrows($not1);
	
	
	$fetch2 = "SELECT * FROM project WHERE typ ='Hardware'";	
	$not2= mysql_query($fetch2);
	$num2=mysql_numrows($not2);
	
	
	$fetch3 = "SELECT * FROM project WHERE typ ='Software'";	
	$not3= mysql_query($fetch3);
	$num3=mysql_numrows($not3);
	
	
	$fetch4 = "SELECT * FROM bcs";	
	$not4= mysql_query($fetch4);
	$num4=mysql_numrows($not4);
	
	$fetch5 = "SELECT * FROM poster";	
	$not5= mysql_query($fetch5);
	$num5=mysql_numrows($not5);
	
	$fetch6 = "SELECT * FROM quiz";	
	$not6= mysql_query($fetch6);
	$num6=mysql_numrows($not6);
	
	$fetch7 = "SELECT * FROM matlab";	
	$not7= mysql_query($fetch7);
	$num7=mysql_numrows($not7);
	
	$fetch8 = "SELECT * FROM poster_iut";	
	$not8= mysql_query($fetch8);
	$num8=mysql_numrows($not8);

	$fetch9 = "SELECT * FROM event_kit";	
	$not9= mysql_query($fetch9);
	$num9=mysql_numrows($not9);
	$fetch10 = "SELECT * FROM rcube";	
	$not10= mysql_query($fetch10);
	$num10=mysql_numrows($not10);
	

?>











<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SB Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ul>


        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
          </div>
        </div><!-- /.row -->
		  <div class="btn-group">
                  <button type="button" class="btn btn-danger">Download</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="download.php?type=robomania">Robomania</a></li>
                    <li><a href="download.php?type=project">Project Hardware</a></li>
                    <li><a href="download.php?type=bcs">Business Case Study</a></li>
                    <li><a href="download.php?type=poster">Poster Presentation</a></li>
                    <li><a href="download.php?type=quiz">Quiz</a></li>
                    <li><a href="download.php?type=matlab">Matlab</a></li>
                    <li><a href="download.php?type=rcube">Rubics Cube</a></li>
                    <li><a href="download.php?type=event_kit">Event Kit</a></li>
                    
                  </ul><br><br>
            </div><br><br>
        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num1 ; ?></p>
                    <p class="announcement-text">Robomania</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=robomania">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num2 ; ?></p>
                    <p class="announcement-text">Project Hardware</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=project&typ=Hardware">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num3 ; ?></p>
                    <p class="announcement-text">Project Software</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=project&typ=Software">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num4 ; ?></p>
                    <p class="announcement-text">Business Case Study</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=bcs">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          
         
          
        </div><!-- /.row -->
        
        
        
        
        
        
        
        
        
         <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num5 ; ?></p>
                    <p class="announcement-text">Poster Presentation</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=poster">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num6 ; ?></p>
                    <p class="announcement-text">Quiz</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=quiz">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num7 ; ?></p>
                    <p class="announcement-text">Matlab</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=matlab">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num10 ; ?></p>
                    <p class="announcement-text">Rubics Cube</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=rcube">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

       

			<div class="row">

          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $num9 ; ?></p>
                   <p class="announcement-text">Event Kit</p>
                  </div>
                </div>
              </div>
              <a href="event.php?table=event_kit">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View Mentions
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->
        

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
