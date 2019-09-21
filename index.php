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
            }
            ?>
        </div>
        
    </body>
</html>