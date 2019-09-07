<?php
    session_start(); 

    $name_input=$_POST['name'];
    require('db.php');

    include "../db.php";

    //입력하지 않은 경우
    if($name_input == "")
    {
	    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    }
    else
    {
        //입력하면, 이름이 일치 했을 때, 아이디를 보여준다
        //입력한 이름과 일치하는 array를 가져온다

        $check="SELECT * FROM user_info WHERE name=$name_input";
        $result=$mysqli->query($check);

        if($result["name"] == $name_input)
        { //일치하는 이름이 있을 때
            echo "<script>alert('회원님의 ID는 ".$result['id']." 입니다.'); history.back();</script>";
        }
        else
        { //일치하는 이름이 없을 떄
            echo "<script>alert('없는 계정입니다.'); history.back();</script>";
        }
    }
?>
