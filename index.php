<?php
    // include db connection file in order to use connection functions
    include "db_connection.php";

    // create connection to the db in order to allow communication between this "webpage" and the mysql db
    $conn = createConn();

    // output if conn is successful
    echo "Connection created successfully.<br><br>";

    // test query
    $query = "SELECT * FROM DBMSGroup";
    
    // query the database using the query stmt
    $result = $conn->query($query);

    // check if there are results
    if ($result) {
        
        /* for each result, fetch a row as an associative array */
        while ($row = $result->fetch_assoc()) {

            echo $row["id"].") " . $row["teacher"] . " will teach " . $row["subtopic"] . "<br /><br/>";
        
        }

        /* free result set */
        $result->free();
    }

    // close the connection
    closeConn($conn);
?>

<a href="insert.php">Insert New Group Member</a>