<!--#Original Author: Kevin Greene #
#Date Created: 2/11/2022 #
#Version:  1 #
#Date Last Modified: 2/11/2022 #
#Modified by:  Kevin Greene #
#Modification log: 2/11/2022 Created add visit function to link with other files in program. 
                              
    -->
<?php

function addVisit($name_box, $contact, $comment) {

    $db = Database::getDB();
    $query = "INSERT INTO comments
	(first_name, contact_reason, user_comment, comment_date, employee_id)
VALUES
	(:name_box, :contact, :comment, NOW(), 1)";
    $statement = $db->prepare($query);
    $statement->bindValue(':name_box', $name_box);
    $statement->bindValue(':contact', $contact);
    $statement->bindValue(':comment', $comment);
    $statement->execute();
    $statement->closeCursor();
}
function getVisitByEmp($employee_id) {
    $db = Database::getDB();
    $queryVisit = 'SELECT comments.first_name, '
                    . ' comments.comment_ID, comments.contact_reason, '
                    . ' comments.user_comment, comments.comment_date, comments.employee_ID '
                    . ' FROM comments '
                    . ' JOIN employee on comments.employee_ID = employee.employee_ID '
                    . ' WHERE employee.employee_ID = :employee_ID '
                    . ' ORDER BY comment_date';

            $statement2 = $db->prepare($queryVisit);
            $statement2->bindValue(':employee_ID', $employee_id);
            $statement2->execute();
            $comments = $statement2;
            return $comments;
}
function deleteComment($comment_ID){
    $db = Database::getDB();
    $queryDelete = 'DELETE FROM comments WHERE comment_ID = :comment_ID';
        $statement3 = $db->prepare($queryDelete);
        $statement3->bindValue(':comment_ID', $comment_ID);
        $statement3->execute();
        $statement3->closeCursor();
}
?>

