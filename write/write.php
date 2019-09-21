<?php
if (empty($_POST['title']) || empty($_POST['content'])) {
    echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    exit();
}
//필요한 정보($mysqli)를 db.php에서 가져온다.
require('../db/db.php');

session_start();

$author = $_SESSION['user'];
$title = $_POST['title'];
$content = $_POST['content'];
$created_at = time();
$id = (string) $created_at . $author;
$insert = "INSERT INTO newsfeed_data (author, title, content, created_at, like_num, id) VALUES ('$author', '$title', '$content', $created_at, 0, '$id')";
if ($mysqli->query($insert)) {
    echo '<script> alert("글을 작성하였습니다."); window.location = "../index.php"; </script>';
} else {
    echo '<script> alert("글을 작성하는 것에 실패하였습니다."); history.back(); </script>';
}

/*  포스트로 받은 값을 받아서
 *   값이 없으면 경고를 한다
 *   데이터베이스에 들어갈 수 있는 형식으로 만든 다음
 *   author, title, content, created_at, like_num, id

 *   author: session에 있는 사용자 id
 *   title: 입력받은 제목
 *   content: 입력받은 내용
 *   created_at: time()값을 사용하고 -> int 값이니까 비교도 됨
 *   like_num: 일단 0으로 하고 추가할수록 늘리는 걸로
 *   id: 작성 시간이랑 작성자의 id

 *   데이터베이스에 작성한다
 *   성공적인 경우
 *   index.html로 돌아간다
 */
