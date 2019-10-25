<?php
session_start();
//필요한 정보($mysqli)를 db.php에서 가져온다.
require('/db/db.php');

if(empty($_POST['pw'])){
    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    exit();
}

$pw = $_POST['pw'];
$pw_hash = hash('sha256', $pw);

$update="UPDATE user_info SET pw='$pw_hash' WHERE id='$_SESSION['id']'";
$result = $mysqli->query($update);

if($result)
{
    echo '<script> alert("비밀번호가 변경되었습니다."); window.location = "/index.php"; </script>';
    exit();
}
else
{
    echo '<script> alert("비밀번호가 변경에 실패하였습니다."); window.location = "/index.php"; </script>';
}
session_unset();
session_destroy(); //모든 세션 변수 지우기 = 로그인된 정보 모두 파괴
?>
