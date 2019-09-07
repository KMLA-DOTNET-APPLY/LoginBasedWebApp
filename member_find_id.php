<?php
    session_start(); 

    $user_input=$_POST['user'];
    require('db.php');

    //입력하지 않은 경우
    if($user_input == "")
    {
	    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    }
    else
    {
        //입력하면, 이름이 일치 했을 때, 아이디를 보여준다

        //입력한 이름과 일치하는 array를 가져온다
        $check="SELECT * FROM user_info WHERE user=$user_input";
        $result=$mysqli->query($check);
        $row=$result->fetch_array(MYSQLI_ASSOC);

        if($row['user'] == $user_input)
        { //일치하는 이름이 있을 때
            echo "<script>alert('회원님의 ID는 ".$row['id']." 입니다.'); history.back();</script>";
        }
        else
        { //일치하는 이름이 없을 떄
            echo "<script>alert('없는 계정입니다.'); history.back();</script>";
        }
    }
?>