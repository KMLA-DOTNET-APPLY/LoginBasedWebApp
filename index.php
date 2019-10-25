<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="./css/index.css">
    </head>

    <body>
        <?php
        date_default_timezone_set('Asia/Seoul');
        session_start();

        if (!isset($_SESSION['id']) || !isset($_SESSION['user']) || !isset($_SESSION['pw'])) {
            header("Location: ./login/login.html");
            exit();
        }
        ?>
        <div class="header">
            <h1>Open-Chatting</h1>
            <p>Talk with everyone in our school</p>
        </div>

        <div class="topnav">
            <ul>
                <li><a class="active">Home</a></li>
                <li><a href="./write/write.html">Write Post</a></li>
                <li><a href="./logout/logout.php">Log Out</a></li>
                <li><a href="./delete_account/delete_account.html">Delete Account</a></li>
                <li style="float:right"><a href="#about">About</a></li>
            </ul>
        </div>

        <?php
        require './db/db.php';

        $select = "SELECT * FROM newsfeed_data ORDER BY id DESC";
        $result = $mysqli->query($select);
        $rows = $result->fetch_all(MYSQLI_NUM);

        foreach ($rows as $row) {
            echo "<div class="paragraph">";
            echo "<h1>제목: $row[1]</h1><h2>작성자:$row[0]</h2><p>$row[2]</p>";
            echo date("Y년 m월 d일 h:i:sa", $row[3]);
            echo "<br><br>";
            echo "</div>\n";
            // 댓글을 쓰는 버튼
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
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->

        <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyBdiMB9sk-Fj7H_H66GP95E2hjlwWISepE",
            authDomain: "loginbasedwebapp.firebaseapp.com",
            databaseURL: "https://loginbasedwebapp.firebaseio.com",
            projectId: "loginbasedwebapp",
            storageBucket: "loginbasedwebapp.appspot.com",
            messagingSenderId: "130207329293",
            appId: "1:130207329293:web:fff850a73b41c627"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
    </body>
</html>
