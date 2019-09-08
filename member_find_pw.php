<?php
    $id_input=$_POST['id'];

    require('db.php');

    //입력하지 않은 경우
    if($id_input == "")
    {
	    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    }
    else
    {
        //입력하면, 아이디가 일치 했을 때
        //입력한 아이디과 일치하는 array를 가져온다
        $select="SELECT * FROM user_info WHERE id=$id_input";
        $result=$mysqli->query($select);
        $row=$result->fetch_array(MYSQLI_ASSOC);    

        if($row['id'] == $id_input)
        { //일치하는 아이디가 있을 때
            echo "<script>alert('회원님의 비밀번호는 ".$row['pw']." 입니다.'); history.back();</script>";
        }
        else
        { //일치하는 아이디가 없을 떄
            echo "<script>alert('없는 계정입니다.'); history.back();</script>";
        }
    }
?>