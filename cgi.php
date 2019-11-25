<?php

    include_once "sess.php";

    header(" charset=UTF-8");

    echo "<br/><br/><h3>REQUEST</h3>";
    var_dump($_REQUEST);

    echo "<br/><br/><h3>SERVER</h3>";
    var_dump($_SERVER);

    echo "<br/><br/><h3>COOKIE</h3>";
    var_dump($_COOKIE);

    echo "<br/><br/><h3>SESSION</h3>";
    var_dump($_SESSION);

    echo "<br/><br/><h3>POST</h3>";
    var_dump($_POST);

    echo "<br/><br/><h3>GET</h3>";
    var_dump($_GET);

?>
 