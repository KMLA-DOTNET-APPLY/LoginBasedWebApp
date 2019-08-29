<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $serverusername = $url["user"];
    $serverpassword = $url["pass"];
    $db = substr($url["path"], 1);
    $mysqli=mysqli_connect($server, $serverusername, $serverpassword, $db);

    echo $server;
    echo "<br>";
    echo $serverusername;
    echo "<br>";
    echo $serverpassword;
    echo "<br>";
?>