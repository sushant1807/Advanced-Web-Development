<?php

session_start();	
require_once("QDB.php");
if(isset($_POST['submit']))

/** Access to the person table.
 * Put here the methods like getBySomeCriteriaSEarch */

class QDBModel {

    
    /** Get person data for id $personId
     * (here demo with a SQL request about an existing table)
     * @param int $personId id of the quizz to be retrieved
     * @return associative_array table row
     */
    public void function setQuestion() {


        $db = QDB::getConnection();

        $sql1 = "INSERT INTO sql_question(question_id, db_name, question_text, correct_answer, correct_result, theme_id, author_id, is_public) VALUES($questid, $dbn, $quest, $ans, 0, $themeid, $authid, 0);";


        $stmt = $db->prepare($sql1);
        $ok = $stmt->execute();

}
    public void function dispQuestion() {
        $db = QDB::getConnection();

            $sql = "SELECT question_text, correct_answer FROM sql_question;";
            $stmt = $db->prepare($sql);
            $ok = $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            for($result)
            {
            echo $result;
            }
}
}
?>