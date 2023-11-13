<?php
    if(isset($_GET['match_id']) && $_GET['round']){
        $match_id = $_GET['match_id'];
        $round = $_GET['round'];
        if($round != 'playoff'){
            $round_id = strtoupper($round).'ID';
        }else{
            $round_id = 'RPOID';
        }
        // echo '/match_list?round='.$_GET['pages'];
        // die;
        deleteMatchItems($match_id, $round, $round_id);
        // die;
        header('location: /match_list?round='.$_GET['pages']);
    }else{
        header('location: /');
    }
?>