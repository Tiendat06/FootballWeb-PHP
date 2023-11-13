<?php
    if(isset($_GET['ID']) && isset($_GET['Atd'])){
        $player_id = $_GET['ID'];
        $attendance = $_GET['Atd'];
        updateAttendance($player_id, $attendance);
        header('location: /info');

    }else{
        header('location: /info');
    }
    // require "../../config/connect.php";

    // if(isset($_POST["id"]) && isset($_POST["atd"])){
    //     $player_id  = $_POST["id"];
    //     $attendance = $_POST["atd"];
    //     updateAttendance($player_id, $attendance);
        ?>
        <!-- <a id="showToast" style="" class=" <?= checkAttendance($player_id) ?> info-check__icon d-block text-light text-center">
            <i class="fa-solid fa-check"></i>
        </a> -->
        <?php
    // }
?>

