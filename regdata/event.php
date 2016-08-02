<?php
	 include_once("conn.php");
	 
	 function curPageURL() {
 	$pageURL = 'http';
 	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 	$pageURL .= "://";
 	if ($_SERVER["SERVER_PORT"] != "80") {
  	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 	} else {
  	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 	}
 	return $pageURL;
	}
	 $url = curPageURL();
	 
	 
	if(isset($_GET['table']) && isset($_GET['typ'])){
	 			
	 		$table= $_GET['table'];
		 	$typ = 	$_GET['typ'];
	 		$fetch = "SELECT * FROM $table where typ = '$typ'";	
			$not= mysql_query($fetch);
			$num=mysql_numrows($not);	
	 }
	 
	 else{
	 		$table= $_GET['table'];
			$fetch = "SELECT * FROM $table";	
			$not= mysql_query($fetch);
			$num=mysql_numrows($not);
	 }
	 

	 
?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
           
          </ul>

        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        

        <div class="row">
          <div class="col-lg-12">
            
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>ENOID </th>
                    <th>Name1 </th>
                    <th>ID1 </th>
                    <th>Name2 </th>
                    <th>ID2 </th>
                    <th>Name3 </th>
                    <th>ID3 </th>
                    <th>Name4 </th>
                    <th>ID4 </th>
                    <th>Team </th>
                    <th>Project</th>
                    <th>Email </th>
                    <th>Contact</th>
                    <th>Institution</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                	
              <?php  	while($row = mysql_fetch_array($not)){
              							
              						
              			$id =$row['id'];
						$name1 =$row['name1'];
						$id1 =$row['id1'];
						$name2 =$row['name2'];
						$id2 =$row['id2'];
						$name3 =$row['name3'];
						$id3 =$row['id3'];
						$name4 =$row['name4'];
						$id4 =$row['id4'];
						$team =$row['team'];
						$project =$row['project'];
						$email =$row['email'];
						$contact =$row['contact'];
						$ins =$row['ins'];
 			
              							
              ?>
              		
              	
                  <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name1;?></td>
                    <td><?php echo $id1;?></td>
                    <td><?php echo $name2;?></td>
                    <td><?php echo $id2;?></td>
                    <td><?php echo $name3;?></td>
                    <td><?php echo $id3;?></td>
                    <td><?php echo $name4;?></td>
                    <td><?php echo $id4;?></td>
                    <td><?php echo $team;?></td>
                    <td><?php echo $project;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $contact;?></td>
                    <td><?php echo $ins;?></td>
                    <td>  <button type="button" class="btn btn-success btn btn-primary btn-xs">Confirmation</button></td>
                    <td><a href="delete.php?id=<?php echo $id;?>&table=<?php echo $table;?>&url=<?php echo $url;?>"><button type="button" class="btn btn-danger btn btn-primary btn-xs">Delete</button></a></td>

                  </tr>

<?php	}   ?>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- /.row -->



      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>