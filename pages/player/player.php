
<div class="container bg-outside p-5">
    <form method="post" action="" class="form-player p-5">
        <h1 class="text-center form-player__title">Add match</h1>

        <div class="form-group p-3">
            <label class="form-group__player" style="font-size: 1.6rem;" for="exampleFormControlSelect1">Select round</label>
            <select id="round_id" style="font-size: 1.6rem;" name="round" class="form-control" id="exampleFormControlSelect1">
                <option value="none">--Round--</option>
                <option value="playoff">Round play-off</option>
                <option value="r64">Round 1/64 (128 >= x > 64 teams)</option>
                <option value="r32">Round 32 (x <= 64 teams)</option>
                <option value="r16">Round 16 (x <= 32 teams)</option>
                <option value="r8">Round 1/8 (x <= 16 teams)</option>
                <option value="r4">Round quarter final (x <= 8 teams)</option>
                <option value="r2">Round Semi final (x <= 4 teams)</option>
            </select>
        </div>

        <div class="form-group p-3">
            <label class="form-group__player" style="font-size: 1.6rem;" for="exampleFormControlSelect1">Select player1</label>
            <select style="font-size: 1.6rem;" name="player1" class="form-control" id="exampleFormControlSelect1">
                <option value="">--Player 1--</option>
                <?php
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
                ?>
            </select>
        </div>
    
        <div class="form-group p-3">
            <label class="form-group__player" style="font-size: 1.6rem;" for="exampleFormControlSelect2">Select player2</label>
            <select style="font-size: 1.6rem;" name="player2" class="form-control" id="exampleFormControlSelect2">
                <option value="">--Player 2--</option>
                <?php
                    foreach(getPlayer() as $row){
                        $player_id = $row['player_id'];
                        $player_name = $row['player_name'];
                        $player_phone = $row['player_phone'];
                        $player_ingame = $row['player_ingame'];
                        ?>
                            <option value="<?= $player_id ?>"><?= $player_name ?> / <?= $player_phone ?> / <?= $player_ingame ?></option>
                        <?php
                    }
                ?>
            </select>
        </div>


    
        <div class="form-group p-3">
            <label class="form-group__player" style="font-size: 1.6rem;" for="exampleFormControlSelect1">Select Match</label>
            <select id="match_select" style="font-size: 1.6rem;" name="match" class="form-control" id="exampleFormControlSelect1">
                <?php
                
                ?>
            </select>
        </div>
    
        <?php
            if(isset($_POST['btn'])){
                if(!empty($_POST['player1']) && !empty($_POST['player2']) && !empty($_POST['match']) && !empty($_POST['round'])){
                    $player1 = $_POST['player1'];
                    $player2 = $_POST['player2'];
                    $match = $_POST['match'];
                    $round = $_POST['round'];
                    // echo $round;
                    // die;
                    if($player1 != $player2){
                        // echo $player1.' '.$player2.' '. $match;
                        
                        updatePlayerToR($player1, $player2, $match, $round);

                        ?>
                        <p class="text-center text-light" style="font-weight: bold;" >Update successfully</p>
                        <?php
                        // header('location: /player');
                    }else{
                        ?>
                        <p class="text-center text-light" style="font-weight: bold;" >Duplicate player</p>
                        <?php
                    }
                }else{
                    ?>
                    <p class="text-center text-light" style="font-weight: bold;" >No data</p>
                    <?php
                }
            }
        ?>
    
        <div class="btn-site w-100 text-center">
            <button style="font-size: 1.6rem;" name="btn" type="submit" class="btn btn-success btn-add">Add</button>
        </div>
    
    
    </form>

</div>
<script>
    onChangeRound();
    onChangeRoundPlayOff();
    onChangeRoundPlayOffForPlayer2();
</script>
