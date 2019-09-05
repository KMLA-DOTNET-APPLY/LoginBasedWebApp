<?php
    session_start();

    $id_input=$_POST['id'];
    $pw_input=$_POST['pw'];

    require('db.php');

    echo $id_input;
    $delete="DELETE FROM user_info WHERE id=$id_input";
    mysqli_query($mysqli, $delete);
?>
<script type="text/javascript">
    //alert('탈퇴 실패');
    <?php 
        //unset($_POST);
    ?>
    //window.location = 'index.php';
</script>