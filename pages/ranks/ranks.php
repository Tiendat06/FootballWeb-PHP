<div class="bg-outside match-container container p-5">
    <div class="row">
        <h1 style="font-size: 3rem;text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.8);" class="text-center text-light m-auto p-4 col-lg-12 col-md-12 col-sm-12">Player ranks</h1>
        <input style="font-size: 1.6rem; border-radius: 20px;outline:none; border: none;box-shadow: 3px 3px 5px rgba(69, 69, 69, 0.5);" placeholder="Search On All" type="text" name="" id="search-input" class="manage-film__input w-50 mx-auto p-3 mb-5">

        <table id='table' class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Ingame</th>
                    <th scope="col">Top</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // $i = 1;
                // $j = 2;
                foreach(getRanks() as $row){
                    $winner_id = $row['winner_id'];
                    $loser_id = $row['loser_id'];
                    $top_winner = $row['top_winner'];
                    $top_loser = $row['top_loser'];

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
                        <tr class="tr">
                            <th scope="col"><?= $winner_id ?></th>
                            <td><?= $winner_player_name ?></td>
                            <td><?= $winner_player_phone ?></td>
                            <td><?= $winner_player_mail ?></td>
                            <td><?= $winner_player_ingame ?></td>
                            <td><?= $top_winner ?></td>

                        </tr>

                        <tr class="tr">
                            <th scope="col"><?= $loser_id ?></th>
                            <td><?= $loser_player_name ?></td>
                            <td><?= $loser_player_phone ?></td>
                            <td><?= $loser_player_mail ?></td>
                            <td><?= $loser_player_ingame ?></td>
                            <td><?= $top_loser ?></td>

                        </tr>
                        
                    <?php
                    // $i+=2;
                    // $j+=2;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>search()</script>

