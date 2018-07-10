<?php 
include('dbConfig.php');

$selectQuery = mysql_query("select * from questionanswers");

$rowCount = mysql_num_rows($selectQuery);


	$studentResponse = array(0/*Dummy value*/,$_SESSION['studentResponse1'],$_SESSION['studentResponse2'],$_SESSION['studentResponse3'],$_SESSION['studentResponse4'],$_SESSION['studentResponse5'],$_SESSION['studentResponse6'],$_SESSION['studentResponse7'],$_SESSION['studentResponse8'],$_SESSION['studentResponse9'],$_SESSION['studentResponse10']);

$rightAnswerCounter = 0;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $_SESSION['studentName']?>'s Exam Results</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="studentExamResults.css">
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
		
        <section class="container sectionMainDiv">
			

        	<section class="row regFormSection">

                            <?php while($fetchQuery = mysql_fetch_array($selectQuery)) 
                            {
                            ?>
                                
                                <tr style="border:1px solid #009; color:White; 
                                font-size:16px;">
                                    
                                    <td style="border:1px solid #009;"><strong>
                                    <?php echo $fetchQuery['questionId']; ?></strong>
                                    </td>
                                    
                                    <td style="border:1px solid #009;">
                                    <strong><?php echo $fetchQuery['question'];?></strong>
                                    </td>
                                    
                                    <td style="border:1px solid #009;">
                                    <strong><?php for($i=1;$i<=$rowCount;$i++)
                                        {
                                            if($i==$fetchQuery['questionId'])
                                            {
                                                echo $studentResponse[$i];
                                            }
                                        }
                                    ?></strong>
                                    </td>
                         
                                    <td style="border:1px solid #009; text-align:center;">
                                    <strong><?php for($i=1;$i<=$rowCount;$i++)
                                        {
                                            if($i==$fetchQuery['questionId'])
                                            {
                                                if($studentResponse[$i]==
												   $fetchQuery['answer'])
                                                {
                                                   
                                                	echo"
													<span class='fa fa-check fa-4x'
													 	style='color:lime'>
													 </span>";
													$rightAnswerCounter++;
												}
                                                else
                                                {
                                                    echo"
													<span class='fa fa-times fa-4x'
													 	style='color:Red'>
													</span>"; 
													
                                                }
                                            }
                                        }
                                    ?></strong>
                                    </td>
                                    
                                    <td style="border:1px solid #009;">
                                    <strong><?php echo $fetchQuery['answer'];?></strong>
                                    </td>
                         
                                    
                                </tr>
                            <?php
                            }
                            ?>                    	
                        	<tr>
                           		<td class="bg-primary h3" colspan="2">Total Score</td>
                            	<td class="bg-primary h3" colspan="2">
									<?php
									
										$updquery	= mysql_query("update studentDetails set studentScore= ".$rightAnswerCounter." where databaseId = ".$_SESSION['databaseId']."");
						
									 echo $rightAnswerCounter." out of ".$rowCount;
									
										
									
		header("location:studentDashboard.php?msg=Successfully updated");
		
										
									?>
                            	</td>
                                <td colspan="2">
                                	<a class="btn btn-warning btn-block btn-lg" 
                                    href="studentDashboard.php?Exam=Successfully Completed">Exit  </a>
                                   
                                </td>
                            </tr>
                        </table>                        
					</form>
                    
                </section>
<!--------------------------------------------------------------------------------------->                
        	</section>       	
        </section>
	</body>
</html>