<?php

    include "db_connection.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $conn = createConn();

        $teacher = $_POST["teacher"];

        $subtopic = $_POST["subtopic"];

        $query = "INSERT INTO DBMSGroup VALUES(NULL, '$teacher', '$subtopic')";

        echo $query;

        // query the database using the query stmt
        $result = $conn->query($query);

        header('location: /');
        die();
    }

?>
<form method="POST" action="/insert.php">

    Teacher's name: <input name = "teacher" type = "text"/>

    <br/>
    <br/>
    
    Subtopic: <input name = "subtopic" type = "text"/>

    <br/>
    <br/>

    <input type="submit" value = "Submit">

</form>