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
            <li><a href="">News</a></li>
            <li><a href="./logout/logout.php">Logout</a></li>
            <li><a href="./write/write.html">글쓰기</a></li>
        </ul>
                  
        <div class="paragraph">
            <?php
            require('./db/db.php');

            $select = "SELECT * FROM newsfeed_data ORDER BY id DESC";
            $result = $mysqli->query($select);

            $rows = $result->fetch_all(MYSQLI_NUM);

            foreach ($rows as $row) {
                echo "<h3>$row[0]</h3>";
                echo "<h2>$row[1]</h2>";
                echo "<p>$row[2]</p><br>";
                echo date("Y년 m월 d일 h:i:sa", $row[3]);
                echo "<br> Likes: " . "$row[4]<br><br>";
                echo "<input type='button'>"; // 댓글을 쓰는 버튼
            }
            /*newsfeed_data에 포함된 모든 글을 가져온다.
            화면에 각각의 글들을 가지고 와서 표시를 한다.

            제목, 글쓴이, 글 쓴 시간, 내용, 좋아요, id에 맞는 댓글
            글쓴이는 사용자의 링크를 걸어야 한다.
            링크를 클릭하면 프로필이 나와야 하는데, 이때는 사용자의 아이디로 데이터베이스에서 정보를 가지고 온다.

            뉴스피드의 순서는 일단 시간 역순으로 한다.

            댓글의 경우 각 게시물을 표시할 떄마다 댓글 데이터를 가지고 온다.
            모든 데이터를 가지고 와야 하니까 처음에 다 가지고 와서 파싱한다(개선점이 있을 것 같음)
            ?>*/
            ?>
        </div>
        
    </body>
</html>