<?php
session_start();	
require_once("SqlSkillsDb.php");
if(isset($_POST['submit']))
{
	$name = "";
	if(isset($_POST['name'])) 
 		$name=$_POST['name'];
 	$_SESSION['name']= $name;
 	if(isset($_POST['surname'])) 
 		$surname=$_POST['surname'];
 	$_SESSION['surname']= $surname;
     if(isset($_POST['username'])) 
 		$username=$_POST['username'];
 	$_SESSION['username']= $username;
     if(isset($_POST['password'])) 
 		$password=$_POST['password'];
 	$_SESSION['password']= $password;
     if(isset($_POST['rollno'])) 
 		$rollno=$_POST['rollno'];
 	$_SESSION['rollno']= $rollno;
     $token = md5(uniqid(rand(), true));
 	echo $surname;
 	echo $name;
    echo $username;
    echo $password;
    echo $rollno;
	try {
		$db = SqlSkillsDb::getConnection();
		$sql = "INSERT INTO user(user_id,email,pwd,name,first_name,token,created_at) VALUES ('$name','$surname','$username','$password','$rollno','$token',Now())";
		echo $sql;
        $stmt = $db->prepare($sql);
        $result = $stmt->execute();
        // header('Location: Connect.php');
        echo $result;
        if($result) {
            echo "insereted"; 
            }// end if
         else {
             echo '0 results';
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