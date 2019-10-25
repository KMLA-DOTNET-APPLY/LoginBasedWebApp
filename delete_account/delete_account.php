<?php
session_start();

$id=$_POST['id'];
$pw=$_POST['pw'];
$pw_hash = hash('sha256', $pw);

require('/db/db.php');
//delete 명령어 만들기
$delete="DELETE FROM user_info WHERE id='$id'";

//session의 id값과 pw값이 입력한 값과 같으면 탈퇴를 진행한다.
if ($_SESSION['id'] == $id) {
    if ($_SESSION['pw'] == $pw_hash) {
        //데이터를 지운다
        if ($mysqli->query($delete)) {
            unset($_POST);
            //로그아웃하기 -> 모든 세션 변수 지우기 = 로그인된 정보 모두 파괴
            require("/logout/logout.php");
            echo '<script> alert("회원가입이 완료되었습니다."); window.location = "/index.php"; </script>';
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
    window.location = '/index.php';
</script>
