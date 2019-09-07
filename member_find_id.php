<?php
    session_start(); 

    $name_input=$_POST['name'];
    require('db.php');

    include "../db.php";

    //입력하지 않은 경우
        if($_POST["name"] == ""){
		    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	    }else{

    //입력하면, 이름이 일치 했을 때, 아이디를 보여준다

    //입력값이 데이터와 일치하는지 확인한다
    $sql = mq("SELECT * FROM member user_info = '{$username}' ");
    $result = $sql -> fetch_array();

    if($_SESSION['name'] == $name_input){ //일치하는 이름이 있을 때
        echo "<script>alert('회원님의 ID는 ".$result['id']." 입니다.'); history.back();</script>";
    }else{ //일치하는 이름이 없을 떄
    echo "<script>alert('없는 계정입니다.'); history.back();</script>";
    }
}
?>
