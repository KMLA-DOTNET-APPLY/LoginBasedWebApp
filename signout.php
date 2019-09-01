<?php
    session_start();
    $id=$_POST['id'];
    $pw=$_POST['pw'];

    $check="SELECT * FROM user_info WHERE id='$id'";
    $result=$mysqli->query($check);

    if($result->num_rows==1)
    {
        //id에 correspond하는 하나의 열을 배열로 가져오기
        $row=$result->fetch_array(MYSQLI_ASSOC);
    
        //비밀번호 확인하기
        if($pw == $row['pw'])
        {
            $delete="DELETE * FROM user_info WHERE id='$id'";
            query($delete);
            header('Location: ./signout_check.html');
        }
    }
?>