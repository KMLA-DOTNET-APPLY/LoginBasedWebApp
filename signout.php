<?php
    $id_input=$_POST['id'];
    $pw_input=$_POST['pw'];

    require('db.php');

    $delete="DELETE * FROM user_info WHERE id=$id";

    if($pw_input == $_SESSION['pw'] && $id_input == $_SESSION['id'])
    {
        query($delete);
        header('Location: ./signout_check.html');
        exit();
    }    
?>
<script type="text/javascript">
    alert('탈퇴 실패');
    <?php 
        unset($_POST);
    ?>
    window.location = 'login.html';
</script>