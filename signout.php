<?php
    session_start();
    $id_input=$_POST['id'];
    $pw_input=$_POST['pw'];

    echo $id_input;
    echo "<br>";
    echo $pw_input;
    echo "<br>";

    require('db.php');

    $check="SELECT * FROM user_info WHERE id='$id'";
    $delete="DELETE * FROM user_info WHERE id='$id'";
    $result=$mysqli->query($check); 

    if($result->num_rows==1)
    {
         //id에 correspond하는 하나의 열을 배열로 가져오기
        $row=$result->fetch_array(MYSQLI_ASSOC);
        
        echo $row['id'];
        echo "<br>";
        echo $row['pw'];
        echo "<br>";

         //비밀번호 확인하기
        //if($pw_input == $row['pw'] && $id_input == $row['id'])
        //{
        //    query($delete);
        //    header('Location: ./index.php');
        //    exit();
        //}
    }    
    
?>
<script type="text/javascript">
//    alert('탈퇴 실패');
//    <?php 
//        unset($_POST);
//    ?>
//    window.location = 'login.html';
</script>