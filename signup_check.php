<?php

    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $serverusername = $url["user"];
    $serverpassword = $url["pass"];
    $db = substr($url["path"], 1);
    $mysqli=mysqli_connect($server, $serverusername, $serverpassword, $db);

    $id = $_POST['id']; 
    $name = $_POST['name']; 
    $pw = $_POST['pw']; 

    $query = mysqli_query($mysqli,"INSERT INTO user_info(id,name,pw) VALUES('$id', '$name', '$pw')");

    if($query)
    {
        echo "회원가입 성공";
    }
    else
        echo "실패";

?>
