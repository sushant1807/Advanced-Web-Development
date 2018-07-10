<?php 
include("dbConfig.php");

if($_POST['sub']=="submit"){

	$regnum 	= $_POST['studentRegNum'];
	$sname 		= $_POST['studentName'];
	$sbranch 	= $_POST['studentBranch'];
	$spass		= $_POST['studentPassword'];
	$simg		= $_POST['studentImage'];
	$stustatus 	= $_POST['studentStatus'];
	$stuscore	= $_POST['studentScore'];
	$semail 	= $_POST['studentEmail'];
       
	   $sql = "SELECT * FROM studentdetails WHERE studentEmail='$semail'" ;

       $result = mysql_query( $sql ) ;

       if( mysql_num_rows( $result ) > 0 )
       {
	   header("location:StudentRegister.php?error=<p align='center'>There is already a user with that email!</p>");
       }//end if
	   else{
	$insertQuery = mysql_query("insert into studentdetails(studentRegNum,studentName,studentBranch,studentPassword,studentImage,studentStatus,studentScore,studentEmail)values('$regnum','$sname','$sbranch','$spass','$simg','$stustatus','$stuscore','$semail')");
  
	if($insertQuery!=""){

		header("location:studentLoginForm.php?p=success");

		}
		else{

			header("location:StudentRegister.php?k=failed");

		}
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Register page</title>
    <!-- <style>
    td	{ color:#008; padding:20px; font-size:24px}
	td input{ padding:20px;}
    </style> -->
 </head>
 <body>
 
 
 	<h1 style="text-align: center; background:#0CF; color:#F00">Register page</h1>
    <?php if(isset($_GET['error'])){
		echo "<p>".$_GET['error']."</p>";
	}
	?>

 	<form method="post" enctype="multipart/form-data">
 	 
 	 <table align="center" bgcolor="#00FF00";>
 	 	<tr>
 	 		<td>Student ID:</td>
 	 		<td><input type="text" name="studentRegNum" value="" required></td>
 	 	</tr>

 	 	<tr>
 	 		<td>Student Name:</td>
 	 		<td><input type="text" name="studentName" value="" required></td>
 	 	</tr>

 	 	<!-- <tr>
 	 		<td>STUDENT Branch:</td>
 	 		<td><input type="text" name="studentBranch" value="" required></td>
 	 	</tr> -->
        <tr>
 	 		<td>student Password:</td>
 	 		<td><input type="password" name="studentPassword" value="" required></td>
 	 	</tr>
		
        <!-- <tr>
        	<td>studentImage:</td>
            <td><input type="file" name="studentImage" value="" required></td>
        </tr> -->

 	 	<!-- <tr>
        	<td>studentStatus:</td>
 	 		<td><input type="text" name="studentStatus" value=""></td>
 	 	</tr> -->
        <!-- <tr>
        	<td>studentScore:</td>
            <td><input type="text" name="studentScore" value="" ></td>
        </tr> -->
        
         <tr>
        	<td>student Email:</td>
            <td><input type="email" name="studentEmail" value="" ></td>
        </tr>

 	 	<tr>
 	 		<td><input type="submit" name="sub" value="submit"></td>
 	 	</tr>
 	 </table>


 </form>
 
 </body>
 </html>


