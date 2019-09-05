<?php
    session_start();

    $id_input=$_POST['id'];
    $pw_input=$_POST['pw'];

    require('db.php');

    //delete 명령어 만들기
    $delete="DELETE FROM user_info WHERE id=$id_input";

    //session의 id값과 pw값이 입력한 값과 같으면 탈퇴를 진행한다.
    if($_SESSION['id'] == $id_input)
    {
        if($_SESSION['pw'] == $pw_input)
        {
            //데이터를 지운다
            mysqli_query($mysqli, $delete);
            $res=session_destroy(); //모든 세션 변수 지우기 = 로그인된 정보 모두 파괴
            if($res) 
            {
                header('Location: ./signout_check.html'); // 로그아웃 성공 시 로그인 페이지로 이동
            }
            exit();
        }
    }
?>
<script type="text/javascript">
    alert('탈퇴 실패');
    <?php 
        unset($_POST);
    ?>
    window.location = 'index.php';
</script>
