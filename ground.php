<!DOCTYPE html>
<head>
	
	<title>Black White HTML5 Template</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="templatemo-logo visible-xs-block">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg logo-left-container">
			<h1 class="logo-left">optional</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg logo-right-container">
			<h1 class="logo-right">operating</h1>
		</div>			
	</div>
	<div class="templatemo-container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 left-container">
        <div class="media-body">
			<h1 class="logo-left hidden-xs margin-bottom-60">optional</h1>			
			<div class="tm-left-inner-container">
				<ul class="nav nav-stacked templatemo-nav">
				  <li><a href="homepage.html"><i class="fa fa-home fa-medium"></i>Homepage</a></li>
				  <li><a href="about.php"><i class="fa fa-shopping-cart fa-medium"></i>about</a></li>
				  <li><a href="insert_lots.html"><i class="fa fa-send-o fa-medium"></i>insert lots of books</a></li>
				  <li><a href="search.html" class="active"><i class="fa fa-gears fa-medium"></i>search a book</a></li>
                  		  <li><a href="borrow.html"><i class="fa fa-gears fa-medium"></i>borrow a book</a></li>
				  <li><a href="giveback.html"><i class="fa fa-envelope-o fa-medium"></i>give back a book</a></li>
                		  <li><a href="credit_card_manage.html"><i class="fa fa-envelope-o fa-medium"></i>credit_card manage</a></li>
				</ul>
			</div>
            </div>
		</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">

			<h1 class="logo-right hidden-xs margin-bottom-60">operating</h1>		
			<div class="tm-right-inner-container">
				<h1 class="templatemo-header">My Own Library</h1>

<?php
	if(!get_magic_quotes_gpc()){
		$userid = addslashes($userid);	
	}
	@ $db = new mysqli('localhost', 'root','123','mutu');
	if(mysqli_connect_errno()){
		echo'Error: we could not connect to the database, please try again later.';
		exit;
	}

	$activitys = "select * from activity ";
	$activitys = mysqli_query($db,$activitys);
	
	$num_activitys = mysqli_num_rows($activitys);

//列出活动信息
	for($i = 0; $i< $num_activitys;$i++){
		$row = mysqli_fetch_assoc($activitys);
		echo "<table><div id= \"table\">";
		echo "<p><strong>".($i+1)." : ";
		echo "<strong><br />activitys".($i+1).": </strong>";
		echo"<li><a href=".stripslashes($row['activity_name'])."><i class='fa fa-envelope-o fa-medium'></i><strong><br />activitys".($i+1).": </strong></a></li>";
			echo "<br />";
		echo "</div></table>";
		echo "</p>";
		echo "<br />";
	}

	mysqli_free_result($activitys);
    mysqli_close($db);
?>



			</div>	
		</div> <!-- right section -->
	</div>	
</body>
</html>
