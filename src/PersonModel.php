<?php

require_once("SqlSkillsDb.php");

/** Access to the person table.
 * Put here the methods like getBySomeCriteriaSEarch */
class PersonModel {

    /** Get person data for id $userId
     * (here demo with a SQL request about an existing table)
     * @param int $userId id of the quiz to be retrieved
     * @return associative_array table row
     */

    
     
    public static function get($userId) {
        $db = SqlSkillsDb::getConnection();
        $sql = "SELECT user_id, name, email, first_name, token
              FROM user
              WHERE user_id = :user_id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":user_id", $userId);
        $ok = $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function getByLoginPassword($login, $password) {
        $db = SqlSkillsDb::getConnection();
        $sql = "SELECT user_id, name, pwd
            FROM user
            WHERE name = :name AND pwd = :password";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->bindValue(":password", $pwd);
        $ok = $stmt->execute();
				return $stmt->fetch(PDO::FETCH_ASSOC);
                echo $username;
                echo $password;
    }

}

?>

<h1>works
    --------
    echo $username;
    echo $password;
    -------------
</h1>