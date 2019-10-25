<?php
    //파일들에서 데이터베이스에 접속할 때 사용하는 파일
    //require('/db/db.php'); 를 파일 앞에 붙여서 사용한다.
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    $mysqli = new mysqli($server, $username, $password, $db);

    //연결에서 에러가 있는지 확인
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
?>
