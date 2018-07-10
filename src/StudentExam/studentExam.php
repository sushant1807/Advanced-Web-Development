<?php 
	include('dbConfig.php');
	//print_r($_SESSION);exit;
	$studentId = $_GET['id'];
	$selectQuery = mysql_query("select * from questionanswers");
	
	$rowCount = mysql_num_rows($selectQuery);
	$rowCount1 = mysql_num_rows($selectQuery1);
	
	//echo $fetchQuery1['studentStatus'];exit;
	//echo $rowCount;exit;
	$questionSerial = 1;
	if($_POST['Submit']=="Submit")
	{
		//print_r($_POST);exit;
		$_SESSION['studentResponse1'] = $_POST['studentResponse1'];
		$_SESSION['studentResponse2'] = $_POST['studentResponse2'];
		$_SESSION['studentResponse3'] = $_POST['studentResponse3'];
		$_SESSION['studentResponse4'] = $_POST['studentResponse4'];
		$_SESSION['studentResponse5'] = $_POST['studentResponse5'];
		$_SESSION['studentResponse6'] = $_POST['studentResponse6'];
		$_SESSION['studentResponse7'] = $_POST['studentResponse7'];
		$_SESSION['studentResponse8'] = $_POST['studentResponse8'];
		$_SESSION['studentResponse9'] = $_POST['studentResponse9'];
		$_SESSION['studentResponse10'] = $_POST['studentResponse10'];
		
		$selectQuery1 = mysql_query("select * from studentDetails where 
		databaseId='$studentId'");
		
		$rowCount1 = mysql_num_rows($selectQuery1);
		
		$fetchQuery1 = mysql_fetch_array($selectQuery1);	
		
		$changeStatus = "active";
		
		$updateQuery1 = mysql_query("Update studentDetails set 	
		studentStatus='$changeStatus'");
		
		header("location:studentExamResults.php?");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $_SESSION['studentName']?>'s Exam </title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" type="text/css" href="studentExam.css"> -->
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">  
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
		<!--<header class="container headerMainDiv">
            <header class="row">
            	<header class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                	<img class=" center-block img-responsive img-thumbnail" title="RCBS" width="100" height="100" src="images/RCBS_LOGO.png" alt="RCBS">
                </header>
                <header class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
     				<h1 class="text-center">RCBS<span class="small">Database Management Systems</span></h1>           	
                </header>
                <header class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                	<img class=" center-block img-responsive img-thumbnail" title="RCBS" width="100" height="100" src="images/RCBS_LOGO.png" alt="RCBS">
                </header>
            </header>
        	<nav class="row headerNav">
				<nav class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12 headerSubNav">
                    <ul class="nav nav-justified">
                        <li class="active btn btn-info"><a href="#"><span class="fa fa-home"></span> Home</a></li>
                        <li class="btn btn-info"><a href="#"><span class="fa fa-info-circle"></span> About Us</a></li>
                        <li class="btn btn-info"><a href="#"><span class="fa fa-book"></span> Courses</a></li>
                        <li class="btn btn-info"><a href="#"><span class="fa fa-users"></span> Faculty</a></li>
                        <li class="btn btn-info"><a href="#"><span class="fa fa-phone-square"></span> Contact Us</a></li>
                    </ul> 
                </nav>
            </nav>	
        </header>-->
        <section class="container sectionMainDiv">

        	<section class="row regFormSection">
<!----------------------------------------Form Section--------------------------------->
               	<section class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 
                col-sm-offset-2 col-sm-8 col-xs-12">

					<form method="post">
            			<legend class="text-center">
							<?php echo $_SESSION['studentName']?>'s Exam 
                        </legend>

                        <section class="table-responsive">
                        	<?php 
								
							while($fetchQuery = mysql_fetch_array($selectQuery))
							{
							?>
                            <table class="table table-condensed table-bordered">

                            	<tr class="bg-warning h4">
                                	<td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    	S.No
                                    </td>

                                    <td class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    	Question
                                    </td>
                                </tr>

                                <tr class="bg-danger h4">
                                	<td class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    	<?php echo $questionSerial++; ?>	
                                    </td>

                                    <td class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          				<?php echo $fetchQuery['question'];?>          
                                    </td>
                                </tr>

                                <tr class="bg-primary h5">
                                	<td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    	Option A:
                                    </td>

                                    <td class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    	<input class="radio-inline" type="radio" 
                                        name="studentResponse<?php 
											echo $fetchQuery['questionId'] ?>" 
                                        value="<?php echo $fetchQuery['optionA'];?>">
										<?php echo " ".$fetchQuery['optionA']; ?>
                                    </td>
                                </tr>

                                <tr class="bg-primary h5">
                                	<td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    	Option B:
                                    </td>

                                    <td class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    	<input class="radio-inline" type="radio" 
                                        name="studentResponse<?php 
											echo $fetchQuery['questionId'] ?>" 
                                        value="<?php echo $fetchQuery['optionB'];?>">
										<?php echo " ".$fetchQuery['optionB']; ?>
                                    </td>
                                </tr>

                                <tr class="bg-primary h5">
                                	<td class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    	Option C:
                                    </td>

                                    <td class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                               			<input class="radio-inline" type="radio" 
                                        name="studentResponse<?php 
											echo $fetchQuery['questionId'] ?>" 
                                        value="<?php echo $fetchQuery['optionC'];?>">
										<?php echo " ".$fetchQuery['optionC']; ?>     
                                    </td>
                                </tr>

                                <tr class="bg-primary h5">
                                	<td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    	Option D:
                                    </td>

                                    <td class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                               			<input class="radio-inline" type="radio" 
                                        name="studentResponse<?php 
											echo $fetchQuery['questionId'] ?>" 
                                        value="<?php echo $fetchQuery['optionD'];?>">
										<?php echo " ".$fetchQuery['optionD']; ?>     
                                    </td>
                                </tr>
                                
                                

                            </table>
                            <?php } ?>

                        </section>
<!--------------------------------------------------------------------------------------->                        
                        <section class="table-responsive">

                            <table class="table table-condensed table-bordered">

								<tr>

                                	<td class="col-lg-offset-3 col-lg-3 col-md-offset-3 
                                    col-md-3 col-sm-offset-3 col-sm-3 col-xs-12
                                    text-center">
                                    	<input class="btn btn-warning btn-block" 
                                        type="submit" name="Submit" value="Submit">
                                    </td>

                                    <td class="col-lg-3 col-md-3 col-sm-3 col-xs-12 
                                    text-center">
                                    	<input class="btn btn-warning btn-block" 
                                        type="reset" name="Reset" value="Reset">
                                    </td>
                                </tr>

                            </table>
                        </section>
                    </form>
                </section>
				<!---------------------------------------------------------------------->				
			</section>       	
        </section>
	</body>
</html>