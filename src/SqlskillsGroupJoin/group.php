<?php
session_start();	
require_once("SqlSkillsDb.php");
if(isset($_POST['join']))
{
	$email = "";
	if(isset($_POST['email'])) 
 		$email=$_POST['email'];
 	$_SESSION['email']= $email;
 	if(isset($_POST['group'])) 
 		$group=$_POST['group'];
 	$_SESSION['group']= $group;
 	echo $group;
 	echo $email;

	try {


		$db = SqlSkillsDb::getConnection();
		$sql = "SELECT email FROM user where email = ?";
		$stmt = $db->prepare($sql);
		if ($stmt->execute(array($email))) {
	  		while ($row = $stmt->fetch()) {
	  			if ($row[0] == $email) {
	  				echo "Valid user";
	  				header('Location: groupValidation.php');
	  			}
	  			else
	  			{
	  				echo "Invalid user";
	  			}
	  		}
	  		echo "Invalid user";
		}
		else
		{
			echo "Failed";
		}
	}





	catch (PDOException $exc) {
	    /* Each time we access a DB, an exception may occur */
	    $msg = $exc->getMessage();
	    $code = $exc->getCode();
	    print "$msg (error code $code)";
	}
}

?>
