<!DOCTYPE html>
<html>
<head>
<title>USER GROUP JOINING</title>
</head>
<body>
	 <?php include('group.php'); ?>
<form class="group" method="post" action="<?=$_SERVER['PHP_SELF']; ?>" role="form" style="border:1px solid #ccc">
	<div class="container">
		<h1>Join the group </h1>
		<p>Please fill the form to join the group. </p>
		<hr>
		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter the email" name="email" required>
		<select name="group">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
        </select>
		
	</div>
	<div>
		<button type="submit" name="join">Join</button>
	</div>
	
</form>
  <p>Group selection details</p>
  <p> 1.SE 2.ISM 3.CS</p>

</body>
</html>