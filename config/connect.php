<?php
    define("host", "localhost");
    define("username", "root");
    define("pass", "");
    define("dbname", "competition");

    function open_Database(){
        $conn = mysqli_connect(host, username, pass, dbname);
        if(!$conn){
            return mysqli_connect_errno();
        }
        return $conn;
    }

    // define("RIDc", "R16ID");

    function AUTO_R64(){
        $conn = open_Database();
        $query = "select max(R2ID) as max_id from r2";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $prev_id = $row['max_id'];

        // Tạo mã cho bản ghi tiếp theo
        if ($prev_id) {
            $stt = (int) substr($prev_id, 3) + 1;
        } else {
            $stt = 1;
        }

        $id = sprintf("R2%03d", $stt);

        return $id;
    }

    function insertR64(){
        $conn = open_Database();
        $query = "select max(R2_R1ID) as max_id from r2";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $prev_id = $row['max_id'];

        // Tạo mã cho bản ghi tiếp theo
        if ($prev_id) {
            $stt = (int) substr($prev_id, 3) + 1;
        } else {
            $stt = 1;
        }

        $id = sprintf("R1%03d", $stt);
        for($i = 0; $i < 2; $i++){
            $r64_id = AUTO_R64();
            $query = "insert into r2 values('$r64_id', null, null, null, null, '$id')";
            mysqli_query($conn, $query);
            // if($i == 1) break;
        }
        mysqli_close($conn);
    }

    // insertR64();

    function updatePlayerID1($number){
        $conn = open_Database();
        $query = "select max(player1) as max_id from r64";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $prev_id = $row['max_id'];
        
        if ($prev_id) {
            $stt = (int) substr($prev_id, 3) + 1;
        } else {
            $stt = 1;
        }

        $id = sprintf("P1%03d", $stt);
        $round = '64';
        $r = '';
        if($number > 0 && $number < 10){
            $r = 'R'. $round.'00'.(string)$number;
        }if($number >= 10 && $number < 100){
            $r = 'R'. $round.'0'.(string)$number;
        }if($number >= 100 && $number < 129){
            $r = 'R'. $round.(string)$number;
        }
        // $r_id = $r;
        // echo $r_id.'</br>';

        $query = "UPDATE r64 
        set r64.player1 = '$id'
        where r64.R64ID = '$r' ";
        mysqli_query($conn, $query);

        // mysqli_close($conn);
    }

    function updatePlayerID2($number){
        $conn = open_Database();
        $query = "select max(player2) as max_id from r64";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $prev_id = $row['max_id'];
        
        if ($prev_id) {
            $stt = (int) substr($prev_id, 3) + 1;
        } else {
            $stt = 1;
        }

        $id = sprintf("P2%03d", $stt);
        $round = '64';
        $r = '';
        if($number > 0 && $number < 10){
            $r = 'R'. $round.'00'.(string)$number;
        }if($number >= 10 && $number < 100){
            $r = 'R'. $round.'0'.(string)$number;
        }if($number >= 100 && $number < 129){
            $r = 'R'. $round.(string)$number;
        }
        
        // $r_id = $r;
        // echo $r_id.'</br>';
        $query = "UPDATE `r64`
        set `r64`.`player2` = '$id'
        where `r64`.`R64ID` = '$r'";
        mysqli_query($conn, $query);

        // mysqli_close($conn);
    }

    function updatePlayerIDBoth(){
        for($i = 1; $i <= 128; $i++){
            updatePlayerID1($i);
            updatePlayerID2($i);
                // die;
        }
    }

    function updatePlayerNull(){
        $conn = open_Database();
        $query = "update r64 
        set player1 = null,
        player2 = null
        where 1";
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function updatePlayerAddedNull(){
        $conn = open_Database();
        $query = "update player 
        set added = null
        where 1";
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    function updateMailForPlayer($player_id){
        $mail = $player_id.'@student.tdtu.edu.vn';
        $query = "update player
        set player_mail = '$mail'
        where player_id = '$player_id'";

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function insertPlayer(){
        $conn = open_Database();
        for($i = 1; $i <= 128; $i++){
            if($i < 10){
                $id = '521H000'.$i;
                $name = 'Jake_'.$i;
                $phone = '012345678'.$i;
                $ingame = generateRandomString(8);
            }
            else if($i >= 10 && $i < 100){
                $id = '521H00'.$i;
                $name = 'Jake_'.$i;
                $phone = '01234567'.$i;
                $ingame = generateRandomString(8);
            }
            else{
                $id = '521H0'.$i;
                $name = 'Jake_'.$i;
                $phone = '0123456'.$i;
                $ingame = generateRandomString(8);

            } 
            $query = "insert into player values('$id', '$name', '$phone', null, '$ingame', null, null)";
            mysqli_query($conn, $query);
        }
        mysqli_close($conn);
    }   

    // foreach(getPlayerInfo() as $row){
    //     $player_id = $row['player_id'];
    //     updateMailForPlayer($player_id);
    // }
    // updateMailForPlayer()
    // updatePlayerIDBoth();
    // updatePlayerNull();
    // updatePlayerAddedNull();
    // insertPlayer();


    // =====================================<< AUTO >>======================================================================

    // login
    function checkLogin($sid, $pwd):bool{
        $conn = open_Database();
        //Kiểm tra có tồn tại phone và pass?
        $query = "Select * from ad_account 
                                  WHERE ad_id like ? and ad_pass LIKE ? ";

        $stm = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param($stm,'ss',$sid, $pwd);

        mysqli_stmt_execute($stm);

        $result = mysqli_stmt_get_result($stm);

        $row = mysqli_fetch_row($result);
        
        mysqli_close($conn);
        if ($row){
            return true;
        }
        return false;
    }

    function totalPlayer(){
        $conn = open_Database();
        $query = "select count(*) as total from player";
        $data = array();
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data = $row;
        }
        mysqli_close($conn);
        return $data['total'];
    }

    function getMatchR($round): array{
        $conn = open_Database();
        $query = "select * from `$round`";
        $data = array();

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        mysqli_close($conn);
        return $data;
    }

    function getMatchRLimit5($round): array{
        $conn = open_Database();
        $query = "select * from `$round` limit 5";
        $data = array();

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        mysqli_close($conn);
        return $data;
    }

    function getMatchRIsNull($round): array{
        $conn = open_Database();
        $query = "select * from `$round` where player1 is null and player2 is null";
        $data = array();

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        mysqli_close($conn);
        return $data;
    }

    function getPlayer():array{
        $conn = open_Database();
        $query = "select * from player where added is null and player_pass is null";
        $data = array();

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        mysqli_close($conn);
        return $data;
    }

    function getPlayerPlayOff(){
        $conn = open_Database();
        $query = "select * from player where added is null and player_pass is not null";
        $data = array();

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        mysqli_close($conn);
        return $data;
    }

    function updatePlayerToR($player1, $player2, $match_id, $round){
        if($round != 'playoff'){
            $round_id = strtoupper($round).'ID';
        }else{
            $round_id = 'RPOID';
        }
        $query = "update `$round`
        set player1 = '$player1',
        player2 = '$player2'
        where `$round`.`$round_id` = '$match_id'";
        
        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
        updatePlayerAdded($player1);
        updatePlayerAdded($player2);
        // updateRoundForPlayer($round, $match_id, $player1);
        // updateRoundForPlayer($round, $match_id, $player2);

    }

    function updatePlayerAdded($player){
        $query = "update player
        set added = 'add'
        where player_id = '$player'";

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function checkPlayer1IsNull($next_match_id, $next_round, $r_id_next){
        $conn = open_Database();
        $query = "select * from `$next_round` where `$r_id_next` = '$next_match_id' and player1 is null";

        // echo $query;
        // die;
        $data = array();
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data = $row;
        }
        if($data == null){
            return false;
        }
        return true;
    }

    function updateFinalAnd3_4($player, $next_match_id, $next_round, $round, $winner, $loser, $match_id, $winner_result, $loser_result){
        $next_round_id = strtoupper($next_round).'ID';
        $round_id = strtoupper($round).'ID';

        if(checkPlayerNextRound($next_match_id, $next_round, $next_round_id)){
            updateNullPlayerNextRound($next_match_id, $next_round, $next_round_id);
        }

        if(checkPlayer1IsNull($next_match_id, $next_round, $next_round_id)){
            $query = "update `$next_round`
            set player1 = '$player'
            where `$next_round_id`= '$next_match_id'";
        }else{
            $query = "update `$next_round`
            set player2 = '$player'
            where `$next_round_id`= '$next_match_id'";
        }

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);

        updateWinner_Loser($round, $winner, $loser, $match_id, $round_id, $winner_result, $loser_result);
        // updateWinner_Loser($round, $winner, $loser, $match_id, );
    }

    function updateRanks($winner_id, $loser_id, $round, $rank_id, $match_id, $winner_result, $loser_result){
        $array = explode("r", $round);
        // print_r($array[1]);
        $top = explode("_", $array[1]);
        // echo $test[0];

        $query = "update ranks
        set `round` = '$round',
        winner_id = '$winner_id',
        loser_id = '$loser_id',
        top_winner = '$top[0]',
        top_loser = '$top[1]'
        where Ranks_ID = '$rank_id'";

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
        $r_id = strtoupper($round).'ID';
        updateWinner_Loser($round, $winner_id, $loser_id, $match_id, $r_id, $winner_result, $loser_result);
    }

    function updateWinner($round, $winner, $next_match_id, $match_id, $loser, $winner_result, $loser_result){

        $r_id = '';
        $r_id_next = '';
        $next_round = '';
        if($round == 'r64'){
            $r_id_next = 'R32ID';
            $r_id = 'R64ID';
            $next_round = 'r32';

        }else if($round == 'r32'){
            $r_id_next = 'R16ID';
            $r_id = 'R32ID';
            $next_round = 'r16';


        }else if($round == 'r16'){
            $r_id_next = 'R8ID';
            $r_id = 'R16ID';
            $next_round = 'r8';


        }else if($round == 'r8'){
            $r_id_next = 'R4ID';
            $r_id = 'R8ID';
            $next_round = 'r4';

        }else if($round == 'r4'){
            $r_id_next = 'R2ID';
            $r_id = 'R4ID';
            $next_round = 'r2';

        }

        if(checkPlayerNextRound($next_match_id, $next_round, $r_id_next)){
            updateNullPlayerNextRound($next_match_id, $next_round, $r_id_next);
        }

        if(checkPlayer1IsNull($next_match_id, $next_round, $r_id_next)){
            $query = "update `$next_round`
            set player1 = '$winner'
            where `$r_id_next` = '$next_match_id'";
        }else{
            $query = "update `$next_round`
            set player2 = '$winner'
            where `$r_id_next` = '$next_match_id'";
        }

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
        updateWinner_Loser($round, $winner, $loser, $match_id, $r_id, $winner_result, $loser_result);
    }
    function updateWinner_Loser($round, $winner, $loser, $match_id, $r_id, $winner_result, $loser_result){
        $query = "update `$round`
        set winner_id = '$winner',
        lose_id = '$loser',
        winner_result = '$winner_result',
        loser_result = '$loser_result'
        where `$r_id` = '$match_id'";

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function checkPlayerNextRound($next_match_id, $next_round, $r_id_next){
        $conn = open_Database();
        $query = "select * from `$next_round` where `$r_id_next` = '$next_match_id' 
        and player1 is not null and player2 is not null";

        // echo $query;
        // die;
        $data = array();
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data = $row;
        }
        if($data == null){
            return false;
        }
        return true;
    }

    function updateNullPlayerNextRound($next_match_id, $next_round, $r_id_next){
        // $next_round_id = strtoupper($next_round).'ID';
        $query = "update `$next_round`
        set player1 = null, player2 = null
        where `$r_id_next` = '$next_match_id'";

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function winnerAndLoserOfR($round, $match_id):string{
        $conn = open_Database();
        if($round != 'playoff'){
            $round_id = strtoupper($round).'ID';
        }else{
            $round_id = 'RPOID';
        }

        $query = "select * from `$round` where
        `$round_id` = '$match_id' and
        winner_id is not null and lose_id is not null";
        // echo $query;
        // die;
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return 'bg-success';
        }
        return '';
    }

    function checkUpdateDuplicate($player, $next_round, $round, $match_id, $next_match_id){
        $conn = open_Database();
        $round_id = strtoupper($round).'ID';
        $next_round_id = strtoupper($next_round).'ID';
        $query = "select * from `$next_round`, `$round` where
        where `$round_id` = '$match_id' 
        and `$next_round_id` = '$next_match_id'
        and `$next_round`.player1 = `$round`.player1
        and `$next_round`.player2 = `$round`.player2";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return true;
        }
        return false;
    }

    function checkNextMatchPlayer($next_round, $next_match_id): string{
        $conn = open_Database();
        $next_round_id = strtoupper($next_round).'ID';
        $query = "select * from `$next_round` where
        `$next_round_id` = '$next_match_id' and
        player1 is not null and player2 is not null";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return 'bg-success';
        }
        return '';
    }

    function getMatchByRID($round, $match_id): array{
        $conn = open_Database();
        if($round != 'playoff'){
            $r_id = strtoupper($round).'ID';
        }else{
            $r_id = 'RPOID';
        }
        $data = array();

        $query = "select * from `$round`
        where `$r_id` = '$match_id'";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    function getPlayerToView($player): array{
        $conn = open_Database();
        $query = "select * from player where player_id = '$player'";

        $data = array();
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data = $row;
        }
        return $data;
    }

    function deleteMatchItems($match_id, $round, $round_id){
        deleteAddedPlayers($match_id, $round, $round_id);
        $conn = open_Database();
        $query = "update `$round` set
        player1 = null, player2 = null,
        winner_id = null, lose_id = null,
        winner_result = null, loser_result = null
        where `$round_id` = '$match_id'";
        mysqli_query($conn, $query);
        mysqli_close($conn);
        
    }

    function deleteAddedPlayers($match_id, $round, $round_id){
        $dataMatch = getPlayerInMatch($match_id, $round, $round_id);
        $player1 = $dataMatch["player1"];
        $player2 = $dataMatch["player2"];
        
        updatePlayerAddedNullManual($player1);
        updatePlayerAddedNullManual($player2);
    }

    function updatePlayerAddedNullManual($player_id){
        $conn = open_Database();
        $query = "update player set
        added = null where player_id = '$player_id'";
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function getPlayerInMatch($match_id, $round, $round_id){
        $conn = open_Database();
        $query = "select * from `$round` where
        `$round_id` = '$match_id'";
        $data = array();
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data = $row;
        }
        mysqli_close($conn);
        return $data;
    }

    function getPlayerXR($round, $player, $match_id): array{
        $conn = open_Database();
        $r_id = strtoupper($round).'ID';
        $data = array();
        $query = "select * from `$round`, player
        where `$r_id` = '$match_id'
        and `player`.`player_id` = '$player'";

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        return $data;
    }

    function getPlayerInfo(): array{
        $conn = open_Database();
        $query = "select * from player";
        $data = array();

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    // info

    function checkAttendance($player_id):string{
        $conn = open_Database();
        $query = "select * from player 
        where player_id = '$player_id'
        and attendance is not null";

        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return 'bg-success';
        }
        return 'bg-danger';
    }

    function updateAttendance($player_id, $attendance){
        
        if($attendance != null){
            $query = "update player
            set attendance = null
            where player_id = '$player_id'";
        }else{
            $query = "update player
            set attendance = 'present'
            where player_id = '$player_id'";
        }

        $conn = open_Database();
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

    function deletePlayerInfo($player_id): bool{
        if(checkExistedPlayer($player_id)){
            $conn = open_Database();
            $query = "delete from player where player_id = '$player_id'";
            mysqli_query($conn, $query);
            mysqli_close($conn);
            return true;
        }
        return false;
    }

    // ranks
    function getRanks(): array{
        $conn = open_Database();

        $query = "select * from ranks order by Ranks_ID asc";
        $data = array();

        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    // add player

    function checkExistedPlayer($player_id): bool{
        $conn = open_Database();
        $query = "select * from player where player_id = '$player_id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        if($row){
            return true;
        }
        return false;
    }

    function addPlayerManual($player_id, $player_name, $player_phone, $player_mail, $player_ingame): bool{
        if(!checkExistedPlayer($player_id)){
            $conn = open_Database();
            $query = "insert into player values('$player_id', '$player_name', '$player_phone', '$player_mail', null, '$player_ingame', null, null)";
            mysqli_query($conn, $query);
            mysqli_close($conn);
            return true;
        }
        return false;
    }

    // play off
    function addPlayerPlayOffManual($player_id, $player_name, $player_phone, $player_mail, $player_ingame): bool{
        if(!checkExistedPlayer($player_id)){
            $conn = open_Database();
            $query = "insert into player values('$player_id', '$player_name', '$player_phone', '$player_mail', 'playoff', '$player_ingame', null, null)";
            mysqli_query($conn, $query);
            mysqli_close($conn);
            return true;
        }
        return false;
    }

    function updateWinnerPlayOff($winner_id, $loser_id, $w_result, $l_result, $match_id): bool{

        if(checkExistedPlayer($winner_id)){
            $conn = open_Database();
            $query = "update player set 
            player_pass = null,
            added = null
            where player_id = '$winner_id'";
            mysqli_query($conn, $query);
            mysqli_close($conn);
            updateMatchPlayOff($winner_id, $loser_id, $w_result, $l_result, $match_id);
            return true;
        }
        return false;
    }

    function updateMatchPlayOff($winner_id, $loser_id, $w_result, $l_result, $match_id){
        $conn = open_Database();
        $query = "update playoff set 
        winner_id = '$winner_id',
        lose_id = '$loser_id',
        winner_result = '$w_result',
        loser_result = '$l_result'
        where RPOID = '$match_id'";
        mysqli_query($conn, $query);
        mysqli_close($conn);
    }

?>