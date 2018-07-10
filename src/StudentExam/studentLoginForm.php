<?php 
include('dbConfig.php');
if($_POST['Login']=="Login")
{
	$studentNameNum = $_POST['studentNameNum'];
	$studentPassword = $_POST['studentPassword'];
	
	$selectQuery = mysql_query("select * from studentDetails where 
	studentName='$studentNameNum' || studentRegNum='$studentNameNum' && 
	studentPassword='$studentPassword'");
	//echo $selectQuery; exit;
	$fetchQuery = mysql_fetch_array($selectQuery);
	
	$_SESSION['databaseId'] = $fetchQuery['databaseId'];
	$_SESSION['studentRegNum'] = $fetchQuery['studentRegNum'];
	$_SESSION['studentName'] = $fetchQuery['studentName'];
	$_SESSION['studentBranch'] = $fetchQuery['studentBranch'];
	$_SESSION['studentStatus'] = $fetchQuery['studentStatus'];	
	$_SESSION['studentScore'] = $fetchQuery['studentScore'];
	//print_r($fetchQuery);exit;
	//print_r($_SESSION);exit;
	if($selectQuery)
	{
		header("location:studentDashboard.php?Login=Successful Login");
	}
	else
	{
		die("Login Failed".mysql_error());
	}
}
?>

<!DOCTYPE html>

<html>
	<head>
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">					
        </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		</script>
		<style>
			
		</style>
		<script type="text/javascript">
		</script>

	</head>
	<body>
        
<!----------------------------------------- FORM SECTION -------------------------------->	
        <section class="container sectionMainDiv">
        	<section class="row regFormSection">
            	
                <section class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 
                col-sm-offset-3 col-sm-6 col-xs-12">
                	<form method="post">
                    	
                        <legend>STUDENT LOGIN</legend>
                    	
                        <section class="table-responsive">
                            
                            <table class="table table-bordered">
                                
                                <tr>
                                    <td class="col-lg-3 col-md-3 col-sm-3 col-xs-12
                                     text-right">
                                        <label for="studentNameNum">Student Name:</label>
                                    </td>
                                
                                    <td class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="studentNameNum" 
                                        id="studentNameNum" 
                                        placeholder="Enter your Name or Registered Number"
                                        class="form-control" value="">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="col-lg-3 col-md-3 col-sm-3 col-xs-12 
                                    text-right">
                                        <label for="studentPassword">Password:</label>
                                    </td>
                               
                                    <td class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="password" name="studentPassword" 
                                        id="studentPassword" placeholder="Enter password" 
                                        class="form-control" value="">
                                    </td>
                                </tr>
                            	
                                <tr>
                                	<td class="text-center" colspan="2">
                                    
                                    	<input type="submit" id="Login" name="Login" 
                                        value="Login" class="btn btn-success">
										
                                        <input type="reset" id="Reset" name="Reset"
                                        value="Sign up" onClick="window.location = 'http://localhost/Student_exam/StudentRegister.php'" class="btn btn-danger">
                                    
                                    </td>
                                </tr>	
                            
                            </table>
						
                        </section>
                    </form>
                
                </section>
        	
            </section>       	
        </section>	
	
    </body>
</html>