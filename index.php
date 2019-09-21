<?php
    session_start();

    if(!isset($_SESSION['id']) || !isset($_SESSION['user']) || !isset($_SESSION['pw']))
    {
        header("Location: ./login/login.html");
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="./write/write.html">글쓰기</a></li>
        </ul>
                  
        <div class="paragraph">
            <h2>제목</h2>
            <h3>글쓴이</h3>
            <p>글 쓴 시간</p>
            <p>내용</p>
            <p>좋아요</p>
            <p>댓글</p>
        </div>
        
    </body>
</html>