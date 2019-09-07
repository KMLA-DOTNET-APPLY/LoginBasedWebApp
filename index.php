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

				//
				//contests 여기다 추가하세요
				//

                echo "<p><a href='logout.php'>로그아웃</a></p>";
                echo "<p><a href='signout.html'>탈퇴하기</a></p>";
			?>
        	<a href="signup.html" target="right">
				<button>회원가입 하러가기</button>
			</a>
			
    </body>

</html> 