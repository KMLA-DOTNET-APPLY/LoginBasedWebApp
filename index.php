<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Open Chatting</title>
    </head>

    <body>
        <?php
            session_start();

            if(!isset($_SESSION['id']) || !isset($_SESSION['user']))
            {
                header('Location: ./login/login.html');
                exit();
            }
            $id = $_SESSION['id'];
            $user = $_SESSION['user'];

            header('Location: ./index.html');
        ?>
    </body>
</html> 