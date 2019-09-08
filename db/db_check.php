<?php
    //개발자가 db에 접속하기 위한 도구
    //이 파일에 접속해서 데이터베이스의 호스트, 이름, 비밀번호를 알 수 있다 -> 보안에 취약한데 어떻게 하지?
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    $mysqli = new mysqli($server, $username, $password, $db);
 
    echo $server;
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
?>
