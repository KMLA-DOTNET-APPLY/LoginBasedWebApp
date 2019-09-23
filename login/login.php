<?php
if (empty($_POST['id']) || empty($_POST['pw'])) {
    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
}
if (!preg_match('/[^A-Za-z0-9]/', $_POST['id']) || !preg_match('/[^A-Za-z0-9]/', $_POST['pw'])) 
{
    echo '<script> alert("영문 또는 숫자만 입력 가능합니다"); history.back(); </script>';
}
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];

require '../db/db.php';

$check = "SELECT * FROM user_info WHERE id='$id'";
$result = $mysqli->query($check);
$row = $result->fetch_array(MYSQLI_ASSOC);

//id에 대응하는 하나의 열을 배열로 가져오기
//비밀번호 확인하기
if ($pw == $row['pw']) {
    //비밀번호 확인됐으면 세션 변수 만들기
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = $row['user'];
    $_SESSION['pw'] = $row['pw'];

    //세션 변수에 등록 잘 됐는지 확인
    if (isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['pw'])) {
        //로그인 성공 시 페이지 이동
        header('Location: /index.php');
        exit();
    }
} else {
    echo '<script> alert("아이디 또는 비밀번호가 일치하지 않습니다."); history.back(); </script>';
}

unset($_POST);
?>
