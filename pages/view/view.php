<?php
    if(isset($_GET['match']) && isset($_GET['round'])){
        $round = $_GET['round'];
        $match_id = $_GET['match'];
        if(winnerAndLoserOfR($round, $match_id)){
            ?>
            <div class="bg-outside container p-5">
                <div class="row view justify-content-center">
                    <?php
                        foreach(getMatchByRID($round, $match_id) as $row){
                            $winner_id = $row['winner_id'];
                            $loser_id = $row['lose_id'];
                            $winner_result = $row['winner_result'];
                            $loser_result = $row['loser_result'];
    
                            $winner_data = getPlayerToView($winner_id);
                            $winner_player_name = $winner_data['player_name'];
                            $winner_player_phone = $winner_data['player_phone'];
                            $winner_player_mail = $winner_data['player_mail'];
                            $winner_player_ingame = $winner_data['player_ingame'];
    
                            $loser_data = getPlayerToView($loser_id);
                            $loser_player_name = $loser_data['player_name'];
                            $loser_player_phone = $loser_data['player_phone'];
                            $loser_player_mail = $winner_data['player_mail'];
                            $loser_player_ingame = $loser_data['player_ingame'];
                            ?>
                            <div class="view-player m-auto col-lg-7 p-3">
                                <div class="view-player__item text-light col-lg-12 p-3">
                                    <h1 class="view-player__title text-center"><?= $winner_player_name ?></h1>
                                    <div class="view-player__about">
                                        <p class="view-player__para m-0"> <strong>Player id:</strong> <?= $winner_id ?></p>
                                        <p class="view-player__para m-0"> <strong>Player phone:</strong> <?= $winner_player_phone ?></p>
                                        <p class="view-player__para m-0"> <strong>Player mail:</strong> <?= $winner_player_mail ?></p>
                                        <p class="view-player__para m-0"> <strong>Player ingame:</strong> <?= $winner_player_ingame  ?></p>
                                    </div>
                                    <div class="view-player__result">
                                        <p style="font-size: 2.5rem;" class="view-player__para text-center m-0"><?= $winner_result ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="view-player m-auto col-lg-7 p-3">
                                <div class="view-player__item text-light col-lg-12 p-4">
                                    <h1 class="view-player__title text-center"><?= $loser_player_name ?></h1>
                                    <div class="view-player__about">
                                        <p class="view-player__para m-0"> <strong>Player id:</strong> <?= $loser_id ?></p>
                                        <p href="tel:+84356779197" class="view-player__para m-0"> <strong>Player phone:</strong> <?= $loser_player_phone ?></p>
                                        <p href="mailto:<?= $loser_player_mail ?>" class="view-player__para m-0"> <strong>Player phone:</strong> <?= $loser_player_mail ?></p>
                                        <p class="view-player__para m-0"> <strong>Player ingame:</strong> <?= $loser_player_ingame ?></p>
                                    </div>
                                    <div class="view-player__result">
                                        <p style="font-size: 2.5rem;" class="view-player__para text-center m-0"><?= $loser_result ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
    
                </div>  
            </div>
            
            <?php
        }else{
            header('location: /match_list?round='.$_GET['pages']);
        }
        ?>

        <?php
    }else{
        header('location: /');
    }
?>
