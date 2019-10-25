<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['user']) || !isset($_SESSION['pw'])) {
    echo '<script>alert("로그인이 필요합니다."); window.location = "./login.html"; </script>';
    exit();
}
?>
