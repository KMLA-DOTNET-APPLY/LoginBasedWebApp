<?php
//필요한 정보($mysqli)를 db.php에서 가져온다.
require('../db/db.php');
//입력하지 않았으면 경고를 띄우고 페이지를 다시 로드한다.
if (empty($_POST['id']) || empty($_POST['user']) || empty($_POST['pw']) || empty($_POST['num'])) {
    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    exit();
}

//입력값을 받는다.
$id = $_POST['id'];
$user = $_POST['user'];
$pw = $_POST['pw'];
$num = $_POST['num'];
//전화번호 형식을 지키지 않은 경우, 페이지를 다시 로드한다.
if ($num <= 9999999 || $num >= 100000000) {
    echo '<script> alert("전화번호 등록 형식을 지켜주세요"); history.back(); </script>';
    exit();
}
//입력된 id값으로 database에서 검색한다.
$checkid="SELECT * from user_info WHERE id='$id'";
$resultid = $mysqli->query($checkid);

//동일한 id값이 존재하면 경고를 띄우고 페이지를 다시 로드한다.
if ($resultid->num_rows==1) {
    echo '<script> alert("중복된 아이디입니다"); history.back(); </script>';
    exit();
} else { //동일한 id값이 존재하지 않는 경우
    //데이터베이스에 값을 입력한다.
    $pw_hash = hash('sha256', $pw);
    $insert = "INSERT INTO user_info (id,user,pw,num) VALUES ('$id','$user','$pw_hash','$num')";
    $signup = $mysqli->query($insert);
    //정상적으로 작동했을 경우
    if ($signup) {
        echo '<script> alert("회원가입이 완료되었습니다."); window.location = "/index.php"; </script>';
    } else {
        echo '<script> alert("회원가입에 실패하였습니다."); window.location = "/index.php"; </script>';
    }
}
?>
