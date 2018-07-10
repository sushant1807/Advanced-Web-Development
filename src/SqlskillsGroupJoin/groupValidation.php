<!DOCTYPE html>
<html>
<head>
<title>USER GROUP JOINING VALIDATION</title>
</head>
<body>
 <?php include('validation.php'); ?>

<form class="validate" method="post" action="<?=$_SERVER['PHP_SELF']; ?>" role="form" style="border:1px solid #ccc">
	<div class="container">
		<h1>Request to join the group </h1>		
	
	<div>
		<input type='text' name='email1' value='<?php echo $_SESSION['email'];?>'/>
		<input type='text' name='group1' value='<?php echo $_SESSION['group'];?>'/>
		<button type="submit" name="Accept">Accept</button>
		<button type="submit" name="Reject">Reject</button>
	</div>
</div>
	
</form>
    <p>Group selection details</p>
    <p> 1.SE 2.ISM 3.CS</p>

</body>
</html>