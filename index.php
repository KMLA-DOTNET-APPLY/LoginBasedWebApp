<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Open Chatting</title>
    </head>

    <body>
        	<?php
				session_start();

				if(!isset($_SESSION['id']) || !isset($_SESSION['user']))
				{
					echo "<meta http-equiv='refresh' content='0;url=login.html'>";
					exit();
				}
				$id = $_SESSION['id'];
				$user = $_SESSION['user'];

				echo "<p>안녕하세요. $user($id)님</p>";
                echo "<p><a href='logout.php'>로그아웃</a></p>";
                echo "<p><a href='signout.html'>탈퇴하기</a></p>";
			?>
    </body>

</html> 