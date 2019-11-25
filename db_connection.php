<?php

    /*
        This file was created for the sole purpose of demonstrating how to connect
        to a mysql database using php in order for Dr. Okoro Raymond to give me an A in his course.
        Thank you.
    */

    // A typical mysql database connection requires the following parameters:
    
    /*
        Host
        User(name)
        Password
        Database(name)
    */

    // connection function for reusability
    function createConn()
    {
        // init variables. Variables start with $ in php
        $dbhost = "localhost";
        $dbuser = "oladosu";
        $dbpass = "TheBestOfAllTime";
        $database = "practice";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $database) or die("Connection error: %s\n" . $conn -> error);

        return $conn;
    }

    function closeConn($conn){

        // Connection is closed easily using the close() function on the connection object
        $conn -> close();

    }