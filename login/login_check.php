<?php
    session_start();
    $id=$_POST['id'];
    $pw=$_POST['pw'];
    echo 1;

    require('../db/db.php');
    echo 2;

    $check="SELECT * FROM user_info WHERE id=$id";
    $result=$mysqli->query($check);
    if($id == "" || $pw == "")
    {
        echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    }
    echo 3;

    if($result->num_rows==1)
    {
         //id에 correspond하는 하나의 열을 배열로 가져오기
        $row=$result->fetch_array(MYSQLI_ASSOC);
        echo 4;
         //비밀번호 확인하기
        if($pw == $row['pw'])
        {
            echo 5;
            $user = $row['user'];
            //비밀번호 확인됐으면 세션 변수 만들기
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['pw']=$pw;


            /*//세션 변수에 등록 잘 됐는지 확인
            if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pw']))
            {
                //로그인 성공 시 페이지 이동
                header('Location: ../index.php');
                exit();
            }
        }
    }
    unset($_POST);*/
?>
<script type="text/javascript">
    //alert('로그인 실패');
    <?php
        //unset($_POST);
    ?>
    //window.location = './login.html';
</script>
