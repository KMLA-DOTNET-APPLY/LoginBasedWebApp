<?php
    session_start();

    $id_input=$_POST['id'];
    $pw_input=$_POST['pw'];

    require('../db/db.php');

    //delete 명령어 만들기
    $delete="DELETE FROM user_info WHERE id=$id_input";

    //session의 id값과 pw값이 입력한 값과 같으면 탈퇴를 진행한다.
    if($_SESSION['id'] == $id_input)
    {
        if($_SESSION['pw'] == $pw_input)
        {
            //데이터를 지운다
            if($mysqli->query($delete))
            {
                unset($_POST);
                //로그아웃하기 -> 모든 세션 변수 지우기 = 로그인된 정보 모두 파괴
                require("../logout/logout.php");
                exit();
            }
        }
    }
?>
<script type="text/javascript">
    alert('탈퇴 실패');
    <?php 
        unset($_POST);
    ?>
    window.location = '../index.php';
</script>
