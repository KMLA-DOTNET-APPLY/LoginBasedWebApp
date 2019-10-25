<?php
if (empty($_POST['id']) || empty($_POST['num'])) {
    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    exit();
}

session_start();

$id = $_POST['id'];
$num = $_POST['num'];
require '../db/db.php';

$check = "SELECT * FROM user_info WHERE id='$id'";
$result = $mysqli->query($check);
$row = $result->fetch_array(MYSQLI_ASSOC);

//id에 대응하는 하나의 열을 배열로 가져오기
//비밀번호 확인하기
if ($num == $row['num']) { //일치하는 아이디가 있을 때 (hash로 바꿔야)

    //pw_change_next에서 쓰기 위해 세션에 적용한다.
    $_SESSION['id'] = $row['id'];
    header("Location: /pw_change/pw_change_next.html");
} else { //일치하는 아이디가 없을 떄
    echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
exit();
?>
