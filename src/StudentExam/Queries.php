<?php
	error_reporting(1);
	session_start();
	$hostName = "localhost";
	$userName = "";
	$passWord = "";

	$hostConnect = mysql_connect($hostName,$userName,$passWord);

	if($_POST['createdb']=="createdb")
	{
		$creates = $_POST['name'];
		$createQuery = mysql_query("CREATE DATABASE $creates");
		if($createQuery)
		{
			echo "Created database $creates";
		}
		else
		{
			die("couldn't create database $creates".mysql_error());
		}
	}
	
	if($_POST['dropdb']=="dropdb")
	{
		$drops = $_POST['name'];
		$dropQuery = mysql_query("DROP DATABASE $drops");
		if($dropQuery)
		{
			echo "Deleted database $drops";
		}
		else
		{
			die("couldn't create database $creates".mysql_error());
		}
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="Database Queries">
		<meta charset="UTF-8">
		<title>SQL Queries</title>
        <link rel="stylesheet" type="text/css" href="Project_IGI.css">
		<link href="Queries.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
		<header class="container">
			<header class="row">	
				<header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 class="well text-center">Database Manipulation</h1>
					<header class="form-group">
						<form method="post">
	<input type="text" name="name" id="name" placeholder="Enter Name" class="form-control"><br>

							<header class="btn-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<input class="btn btn-default" type="submit" value="createdb" name="createdb">
								<input class="btn btn-default" type="submit" value="dropdb" name="dropdb">
							</header>	
						</form>
					</header>
                 </header>
				
            </header>
		</header>
	</body>
</html>	