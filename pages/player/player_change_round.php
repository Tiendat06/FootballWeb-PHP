<?php
    require('../../config/connect.php');
    // $i = 1;
    if(!empty($_POST['round_id'])){
        $round = $_POST['round_id'];
        ?>
            <option value="none">--Match--</option>
        <?php
        foreach(getMatchRIsNull($round) as $row){
            if($round != 'playoff'){
                $r_id_row = strtoupper($round);
                $r_id = $row[$r_id_row.'ID'];
            }else{
                $r_id = $row['RPOID'];
            }
            ?>
                <option value="<?= $r_id ?>">Match <?= $r_id ?></option>
            <?php
        }
    }
?>