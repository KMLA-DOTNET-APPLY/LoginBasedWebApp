<?php
    if(empty($_POST['title']) || empty($_POST['content']))
    {
        echo '<script> alert("항목을 입력하세요"); </script>';
        header('Location: ../index.php');
        exit();
    }

    $author = session;
    $title;
    $content;
    $created_at = time();
    $id =
    $insert = "INSERT INTO newsfeed_data (author, title, content, created_at, like_num, id) VALUES ()";
?>

--포스트로 받은 값을 받아서
--값이 없으면 경고를 한다
데이터베이스에 들어갈 수 있는 형식으로 만든 다음
author, title, content, created_at, like_num, id

author: session에 있는 사용자 id
title: 입력받은 제목
content: 입력받은 내용
created_at: time()값을 사용하고 -> int 값이니까 비교도 됨 
like_num: 일단 0으로 하고 추가할수록 늘리는 걸로
id: 작성 시간이랑 작성자의 id

데이터베이스에 작성한다
성공적인 경우
index.html로 돌아간다
