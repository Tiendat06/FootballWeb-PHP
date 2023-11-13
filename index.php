<?php
    ob_start();
    session_start();
    require_once('./config/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <base href="http://localhost/521H0442_TaTienDat/"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifa Online 4</title>
    <link rel="shortcut icon" href="./assets/img/sc_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.1.1/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- <script src="./assets/js/head/header.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="./assets/js/script.js"></script>
    
</head>
<body>
    <?php
        include('./includes/header.php');
        
        if(isset($_GET['page']) && isset($_SESSION['login'])){
            switch ($_GET['page']) {
                case 'test': include('./pages/view/test.php');
                    break;
                case 'match_list': include('./pages/match/match_list.php');
                    break;
                case 'match_delete': include('./pages/match/match_list_delete.php');
                    break;
                case 'ranks': include('./pages/ranks/ranks.php');
                    break;
                case 'info': include('./pages/info/info.php');
                    break;
                case 'info_attendance': include('./pages/info/info_attendance.php');
                    break;
                case 'info_delete': include('./pages/info/info_delete.php');
                    break;
                case 'view': include('./pages/view/view.php');
                    break;
                case 'player': include('./pages/player/player.php');
                    break;
                case 'player_change_round': include('./pages/player/player_change_round.php');
                    break;
                case 'data': include('./pages/player/player_adding.php');
                    break;
                case 'more': include('./pages/more/more.php');
                    break;
                case 'logout': include('./pages/login/logout.php');
                    break;
                default: 
                    include('./pages/login/login.php');
                    break;

                // case 'login': include('./pages/login/login.php');
                //     break;
            }
        }else{
            if(!isset($_SESSION['login'])){
                include('./pages/login/login.php');
            }else{
                include('./pages/home.php');
            }
        }
        ?>
        <div id="toast" class="hidden">Your change have been saved</div>
        
        <?php

        include('./includes/footer.php');
    ?>
</body>

<script>
    onClickSuccess()
</script>

</html>
