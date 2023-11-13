<?php

    $data = array();
    $match_id_row = '';
    $next_match_id_row = '';
    $round = '';
    $title = '';

    if(isset($_GET['round'])){
        $ROUND = $_GET['round'];
        if($ROUND == '1_64'){
            $round = 'r64';
            $next_round = 'r32';
            $data = getMatchR($round);
            $match_id_row = 'R64ID';
            $next_match_id_row = 'R64_R32ID';
            $title = '64';
        }else if($ROUND == '1_32'){
            $round = 'r32';
            $next_round = 'r16';
            $data = getMatchR($round);
            $match_id_row = 'R32ID';
            $next_match_id_row = 'R32_R16ID';
            $title = '32';
        }else if($ROUND == '1_16'){
            $round = 'r16';
            $next_round = 'r8';
            $data = getMatchR($round);
            $match_id_row = 'R16ID';
            $next_match_id_row = 'R16_R8ID';
            $title = '16';
        }else if($ROUND == '1_8'){
            $round = 'r8';
            $next_round = 'r4';
            $data = getMatchR($round);
            $match_id_row = 'R8ID';
            $next_match_id_row = 'R8_R4ID';
            $title = '8';
        }else if($ROUND == '1_4'){
            $round = 'r4';
            $next_round = 'r2';
            $data = getMatchR($round);
            $match_id_row = 'R4ID';
            $next_match_id_row = 'R4_R2ID';
            $title = 'Quarter-final';
        }else if($ROUND == 'semi'){
            $round = 'r2';
            $next_round = 'r1_2';
            $data = getMatchR($round);
            $match_id_row = 'R2ID';
            $next_match_id_row = 'R2_R1ID';
            $title = 'Semi-final';
        }else if($ROUND == 'final'){
            $round = 'r1_2';
            $next_round = 'ranks';
            $data = getMatchR($round);
            $match_id_row = 'R1_2ID';
            $next_match_id_row = 'ranks';
            $title = 'Final';
        }else if($ROUND == '3_4'){
            $round = 'r3_4';
            $next_round = 'ranks';
            $data = getMatchR($round);
            $match_id_row = 'R3_4ID';
            $next_match_id_row = 'ranks';
            $title = '3-4 final';
        }else if($ROUND == 'play-off'){
            $round = 'playoff';
            $next_round = 'r64';
            $data = getMatchR($round);
            $match_id_row = 'RPOID';
            $next_match_id_row = '';
            $title = 'Play-off';
        }
        else{
            header('location: /');
        }
    }
?>

<div class="match-container container bg-outside p-5">
    <div class="row">
    <h1 style="font-size: 3rem; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.9);" class="text-center text-light m-auto p-4 col-lg-12 col-md-12 col-sm-12">Round <?= $title ?></h1>
    <input style="font-size: 1.6rem; border-radius: 20px;outline:none; border: none;box-shadow: 3px 3px 5px rgba(69, 69, 69, 0.5);" placeholder="Search On All" type="text" name="" id="search-input" class="manage-film__input w-50 mx-auto p-3 mb-5">

    <table id='table' class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Match</th>
                <th scope="col">Player 1</th>
                <th scope="col"><i class="fa-solid fa-bolt"></i></th>
                <th scope="col">Player 2</th>
                <th scope="col">Winner</th>
                <th scope="col">Loser</th>
                <th scope="col">W result</th>
                <th scope="col">L result</th>
                <th scope="col">More</th>
                <th scope="col" colspan="2">Update</th>
                <th scope="col">Clean</th>
                <!-- <th scope="col">Update</th> -->

                <!-- -->
            </tr>
        </thead>
        <tbody>
            <?php
            
            $i = 1;
            foreach($data as $row){
                $match_id = $row[$match_id_row];
                if($ROUND != 'play-off'){
                    $next_match_id = $row[$next_match_id_row];
                }
                $player1 = $row['player1'];
                $player2 = $row['player2'];
                $winner_id = $row['winner_id'];
                $lose_id = $row['lose_id'];
                $w_result = $row['winner_result'];
                $l_result = $row['loser_result'];
                if($i < 10){
                    $stt = '00'.$i;
                }else if($i >= 10 && $i < 100){
                    $stt = '0'.$i;
                }else{
                    $stt = $i;
                }

                $border_bottom = '';
                if($i % 2 == 0){
                    $border_bottom = 'border-bottom: 3px solid #fff';
                }
            ?>
                <tr class="tr" style="<?= $border_bottom ?>">
                    <form action="" method="post">
                        <th scope="row">Match <?= $stt ?></th>
                        <td class="<?= checkAttendance($player1) ?>"><?= $player1 ?></td>
                        <td>vs</td>
                        <td class="<?= checkAttendance($player2) ?>"><?= $player2 ?></td>
                        <td>
                            <select name="winner" id="">
                                <?php
                                    if($winner_id == null || $lose_id == null){
                                        ?>
                                            <option value="">--Winner--</option>
                                            <option value="<?= $player1 ?>"><?= $player1 ?></option>
                                            <option value="<?= $player2 ?>"><?= $player2 ?></option>
                                        <?php
                                    }else{
                                        ?>
                                        <option value="<?= $winner_id ?>"><?= $winner_id ?></option>
                                        <option value="">--Winner--</option>
                                        <option value="<?= $lose_id ?>"><?= $lose_id ?></option>
                                        <?php
                                    }
                                ?>
                                <!-- <option value="">--Winner--</option>
                                <option value="<?= $player1 ?>"><?= $player1 ?></option>
                                <option value="<?= $player2 ?>"><?= $player2 ?></option> -->
                            </select>
                        </td>
                        <td>
                            <select name="loser" id="">

                            <?php
                                    if($winner_id == null || $lose_id == null){
                                        ?>
                                            <option value="">--Loser--</option>
                                            <option value="<?= $player1 ?>"><?= $player1 ?></option>
                                            <option value="<?= $player2 ?>"><?= $player2 ?></option>
                                        <?php
                                    }else{
                                        ?>
                                            <option value="<?= $lose_id ?>"><?= $lose_id ?></option>
                                            <option value="">--Loser--</option>
                                            <option value="<?= $winner_id ?>"><?= $winner_id ?></option>
                                        <?php
                                    }
                                ?>
                                <!-- <option value="">--Loser--</option>
                                <option value="<?= $player1 ?>"><?= $player1 ?></option>
                                <option value="<?= $player2 ?>"><?= $player2 ?></option> -->
                            </select>
                        </td>
                        <td>
                            <input value="<?= $w_result ?>" class="text-center match-list__inp" style="width: 30px;height: 30px;" type="text" name="w_result" id="" required>
                        </td>
                        <td>
                            <input value="<?= $l_result ?>" class="text-center match-list__inp" style="width: 30px;height: 30px;" type="text" name="l_result" id="" required>
                        </td>
                        <td>
                            <a style="cursor: pointer; padding: 5px; font-size: 1.4rem;" 
                            href="/view?match=<?= $match_id ?>&round=<?= $round ?>&pages=<?= $ROUND ?>" 
                            class="btn btn-success match-btn__update d-flex justify-content-center align-items-center text-light match-list__view m-0">
                                View
                            </a>

                        </td>
                        <td>
                            <?php
                                if(isset($_POST['btn-'.$match_id])){
                                    if($ROUND == 'play-off'){
                                        if(!empty($_POST['winner']) && !empty($_POST['loser'])){
                                            $winner_id = $_POST['winner'];
                                            $lose_id = $_POST['loser'];
                                            $winner_result = $_POST['w_result'];
                                            $loser_result = $_POST['l_result'];
                                            if($winner_id != $lose_id && intval($winner_result) > intval($loser_result)){
                                                if(updateWinnerPlayOff($winner_id, $lose_id, $winner_result, $loser_result, $match_id)){
                                                    ?>
                                                    <script>
                                                        alert('Match <?= $stt ?> has been updated');
                                                    </script>
                                                    <?php
    
                                                    header('location: /match_list?round='.$ROUND);
                                                }else{
                                                    ?>
                                                    <script>
                                                        alert('Match <?= $stt ?> has not been updated');
                                                    </script>
                                                <?php
                                                }
                                            } else if(intval($winner_result) < intval($loser_result)){
                                                ?>
                                                <script>
                                                    alert('Match <?= $stt ?> invalid data position');
                                                </script>
                                            <?php
                                            } else{
                                                ?>
                                                <script>
                                                    alert('Match <?= $stt ?> only 1 winner');
                                                </script>
                                            <?php
                                            }
                                            
                                        }else{
                                            ?>
                                                <script>
                                                    alert('Match <?= $stt ?> has not been updated');
                                                </script>
                                            <?php
                                        }
                                    }
                                    
                                    else if(!empty($_POST['winner']) && !empty($_POST['loser'])){
                                        $winner = $_POST['winner'];
                                        $loser = $_POST['loser'];
                                        $next_match = $_POST[$next_match_id];
                                        $match = $_POST[$match_id];
                                        $winner_result = $_POST['w_result'];
                                        $loser_result = $_POST['l_result'];
                                        if($winner != $loser && intval($winner_result) > intval($loser_result)){
                                            if($ROUND != 'semi' && $ROUND != 'final' && $ROUND != '3_4'){
                                                ?>
                                                    <script>
                                                        alert('Match <?= $stt ?> has been updated');
                                                    </script>
                                                <?php
                                                updateWinner($round, $winner, $next_match, $match, $loser, $winner_result, $loser_result);

                                                // sleep(3);
                                                header('location: /match_list?round='.$ROUND);
                                            }else if($ROUND == 'semi'){
                                                updateFinalAnd3_4($winner, 'R1001', 'r1_2', $round, $winner, $loser, $match, $winner_result, $loser_result);
                                                updateFinalAnd3_4($loser, 'R3001', 'r3_4', $round, $winner, $loser, $match, $winner_result, $loser_result);
                                                // updateFinalAnd3_4($loser, 'R3001', 'r3_4');
                                                ?>
                                                    <script>
                                                        alert('Match <?= $stt ?> has been updated');
                                                    </script>
                                                <?php
                                                sleep(3);
                                                header('location: /match_list?round='.$ROUND);
                                            }else if($ROUND == 'final' || $ROUND == '3_4'){
                                                updateRanks($winner, $loser, $round, $next_match, $match, $winner_result, $loser_result);
                                                ?>
                                                <script>
                                                    alert('Match <?= $stt ?> has been updated');
                                                </script>
                                                <?php
                                                    sleep(3);
                                                    header('location: /match_list?round='.$ROUND);
                                                ?>
                                            <?php
                                            }
                                        } else if(intval($winner_result) < intval($loser_result)){
                                            ?>
                                            <script>
                                                alert('Match <?= $stt ?> invalid data position');
                                            </script>
                                        <?php
                                        } else{
                                            ?>
                                            <script>
                                                alert('Match <?= $stt ?> only 1 winner');
                                            </script>
                                        <?php
                                        }
                                    }else{
                                        ?>
                                            <script>
                                                alert('Match <?= $stt ?> has not been updated');
                                            </script>
                                        <?php
                                    }
                                }
                            ?>
                            <input type="hidden" name="<?= $next_match_id ?>" value="<?= $next_match_id ?>">
                            <input type="hidden" name="<?= $match_id ?>" value="<?= $match_id ?>">
                                                                                        <!-- text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5); -->
                            <button name="btn-<?= $match_id ?>" type="submit" class="btn btn-success match-btn__update"><p style="" class="m-0">Update</p></button>
                        </td>

                        <td>
                            <?php
                            winnerAndLoserOfR($round, $match_id);
                            
                            ?>
                            <div class="<?= /*checkNextMatchPlayer($next_round, $next_match_id) */ winnerAndLoserOfR($round, $match_id) ?> match-list__icon">
                                <!-- <i class="bg-success match-list__icon--check fa-regular fa-circle-check"></i>  -->
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </td>

                        <td class="">
                            <a id="link_"<?= $match_id ?> onclick="onClickClearMatch('<?= $match_id ?>', '<?= $round ?>', '<?= $ROUND ?>')" style="font-size: 2rem;" class="m-auto">
                                <i class="fa-solid fa-trash text-light"></i>
                            </a>
                        </td>
                    </form>
                </tr>

            <?php
            $i++;
            }
            ?>
        </tbody>
    </table>
    
    </div>
</div>

<script>
    search()

    function onClickClearMatch(match_id, round, pages){
        // console.log('hi');
        if(confirm('Do you wanna clear match '+match_id)){
            $('#link'+match_id).attr('href', '/match_delete?match_id='+match_id+'&round='+round+'&pages='+pages)
            window.location.href = '/match_delete?match_id='+match_id+'&round='+round+'&pages='+pages
        }
    }
</script>