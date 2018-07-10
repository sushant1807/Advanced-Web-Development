<?php
session_start();	
require_once("SqlSkillsDb.php");
if(isset($_POST['Accept']))
{
	
	
	$email = "";
	$group = "";
	if(isset($_POST['email1'])) 
 		$email=$_POST['email1'];
 	$_SESSION['email']= $email;
 	if(isset($_POST['group1'])) 
 		$group=$_POST['group1'];
 	$_SESSION['group']= $group;
 	

	try {
		$db = SqlSkillsDb::getConnection();
		$sql = "SELECT user_id FROM user where email = ?";
		
		$stmt = $db->prepare($sql);
		$stmt->execute(array($email));
	  	$row = $stmt->fetch();
	  	$insert = "INSERT INTO group_member(user_id,group_id,validated_at) VALUES ('$row[0]','$group',NOW())";
	  	
	  
	  	
	  	$istmt = $db->prepare($insert);
	  	$result = $istmt->execute();

	  	echo $result;
	   
	  	
	  	echo "User is added to the group"; 
	  	header('Location: submit.html');	



	  	   
	  		
	  		 	}
	  	catch (PDOException $exc) {
	    /* Each time we access a DB, an exception may occur */
	    $msg = $exc->getMessage();
	    $code = $exc->getCode();
	    print "$msg (error code $code)";
	}
}
else if(isset($_POST['Reject'])) {

	echo "User addition to the group is rejected";

}
?>


