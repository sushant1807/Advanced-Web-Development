<?php
require_once("SqlSkillsDb.php");
try {
	$db = SqlSkillsDb::getConnection();
	$sql = "SELECT COUNT(user_id) AS nb FROM user";
	$stmt = $db->prepare($sql);
	//$stmt->bindValue(":person_id", $personId);
	$ok = $stmt->execute();
	$result = null;
	if ($ok) {
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		print $result["nb"]." users found";
	}
	else {
		print "we have some trouble ...";
	}
} catch (PDOException $exc) {
    /* Each time we access a DB, an exception may occur */
    $msg = $exc->getMessage();
    $code = $exc->getCode();
    print "$msg (error code $code)";
}
	
?>