<?php
//사용자의 전화번호를 사용해서 비밀번호를 알려주는 코드.
//아무 전화번나 넣어도 기능하니까 보안이 취약하다는 것이 단점이다. 이를 위해 암호화하는 작업이 필요하다.

//입력하지 않은 경우
if (empty($_POST['num'])) {
    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
}

$num = $_POST['num'];

require('../db/db.php');

//입력하면, 아이디가 일치 했을 때
//입력한 아이디과 일치하는 array를 가져온다
$select = "SELECT * FROM user_info WHERE num='$num'";
$result = $mysqli->query($select);
$row = $result->fetch_array(MYSQLI_ASSOC);

if ($row['num'] == $num) { //일치하는 아이디가 있을 때
    echo "<script>alert('회원님의 비밀번호는 " . $row['id'] . " 입니다.'); history.back();</script>";
} else { //일치하는 아이디가 없을 떄
    echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
?>
