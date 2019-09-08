<?php
    //필요한 정보($mysqli)를 db.php에서 가져온다.
    require('../db/db.php');

    //입력값을 받는다. 
    $id = $_POST['id'];
    $user = $_POST['user'];
    $pw = $_POST['pw'];

    //입력하지 않았으면 경고를 띄우고 페이지를 다시 로드한다.
    if($id == "" || $user == "" || $pw == "")
    {
        echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
        exit();
    }

    //입력된 id값으로 database에서 검색한다.
    $check="SELECT * from user_info WHERE id='$id'";
    $result = mysqli_query($mysqli, $check);

    //동일한 id값이 존재하면 경고를 띄우고 페이지를 다시 로드한다.
    if($result->num_rows==1)
    {
        echo '<script type="text/javascript"> alert("중복된 아이디입니다"); history.back(); </script>';

        exit();
    }
    else //동일한 id값이 존재하니 않는 경우
    {
        //데이터베이스에 값을 입력한다. 
        $insert = "INSERT INTO user_info (id,user,pw) VALUES ('$id','$user','$pw')";
        $signup = mysqli_query($mysqli, $insert);

        //정상적으로 작동했을 경우
        if($signup)
        {
            echo '<script type="text/javascript"> alert("회원가입이 완료되었습니다."); history.back();</script>';
        }
        else
            echo "<button onclick=\"location.href='../signup/signup.html'\"> 회원가입 실패, 돌아가기 </button>";
    }
    unset($_POST);
?>