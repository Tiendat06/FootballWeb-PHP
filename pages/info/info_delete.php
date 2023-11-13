<?php
    if(isset($_GET['player_id'])){
        $player_id = $_GET['player_id'];
        if(deletePlayerInfo($player_id)){
            header('location: /info');
        }else{
            header('location: /');
        }
    }else{
        header('location: /');
    }

?>