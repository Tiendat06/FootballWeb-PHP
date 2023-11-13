<?php
    require('../../config/connect.php');
    // $i = 1;
    if(!empty($_POST['round_id'])){
        $round = $_POST['round_id'];

        ?>
        <option value="<?= $round ?>">--Player 1--</option>
        <?php
        if($round != 'playoff'){
            foreach(getPlayer() as $row){
                $player_id = $row['player_id'];
                $player_name = $row['player_name'];
                $player_phone = $row['player_phone'];
                $player_ingame = $row['player_ingame'];
                $player_pass = $row['player_pass'];
                ?>
                    <option value="<?= $player_id ?>"><?= $player_name ?> / <?= $player_phone ?> / <?= $player_ingame ?></option>
                <?php
            }
        }else{
            foreach(getPlayerPlayOff() as $row){
                $player_id = $row['player_id'];
                $player_name = $row['player_name'];
                $player_phone = $row['player_phone'];
                $player_ingame = $row['player_ingame'];
                $player_pass = $row['player_pass'];
                ?>
                    <option value="<?= $player_id ?>"><?= $player_name ?> / <?= $player_phone ?> / <?= $player_ingame ?> / <?= $player_pass ?></option>
                <?php
            }
        }

    }
?>