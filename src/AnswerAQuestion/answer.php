<?php
require_once("SqlSkillsDb.php");
require_once("register.php");
require_once("runEvaluation.php");
session_start();
/* connect to server */
try{
    $dbh=new PDO("mysql:host={$myserver}", $email, $password);
  } catch (PDOException $ex){
      die("cannot connect to database service"); 
      error_log($ex->getMessage());
  }
  
  /* create database */
  $dbh->exec("CREATE DATABASE IF NOT EXISTS {$sql_skills}"); 
  
  /* select database */
  $dbh->exec("USE {$sql_skills}"); 
  
  /* create tables */
  
  $sql="CREATE TABLE IF NOT EXISTS sql_answer (
    question_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    question_id INT(20), 
    trainee_id INT(20),
    evaluation_id INT(11),
    answer TEXT,
    result TEXT,
    gives_correct_result TINYINT(1), 
    FOREIGN KEY (question_id) 
      REFERENCES sql_question (question_id)
      ON DELETE CASCADE
  )";
  $dbh->exec($sql);
  
  
  /* add new answer from HTML form (method POST) */
  $stmt=$dbh->prepare("INSERT INTO sql_answer (question_id,trainee_id,evaluation_id,result,answer,gives_correct_result) 
  VALUES (
    ':question_id', 
    ':trainee_id',
    ':evaluation_id',
    ':result', 
    ':answer',
    ':gives_correct_result'
  )");
  $question_id = process_question_id($_POST['question_id']);
  $trainee_id = process_trainee_id($_POST['trainee_id']);
  $evaluation_id = process_evaluation_id($_POST['evaluation_id']);
  $result = process_result($_POST['result']);
  $answer = process_answer($_POST['answer']);
  $gives_correct_result = process_gives_correct_result($_POST['gives_correct_result']);
  $stmt->bindParam(':question_id',$question_id);
  $stmt->bindParam(':trainee_id',$trainee_id);
  $stmt->bindparam(':evaluation_id',$evaluation_id);
  $stmt->bindParam(':result',$result);
  $stmt->bindParam(':answer',$answer);
  $stmt->bindParam(':gives_correct_result',$gives_correct_result);
  $stmt->execute();

  /* return a table with every question and associated answers */
$sql="SELECT * FROM  sql_question LEFT JOIN sql_answer ON question_id=question_id"; 
$stmt = $dbh->query($sql);

/* return records for a particular question and its answers, if any */
$stmt=$dbh->prepare("SELECT * FROM  sql_question LEFT JOIN answers ON question_id=question_id WHERE question=:question");
$question=process_question_input($_POST['question']); 
$stmt->bindParam(':question',$question);
$stmt->execute();
$dbh = null;

?>     

