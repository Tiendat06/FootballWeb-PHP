<div class="bg-outside match-container container p-5">
    <div class="row">
        <h1 style="font-size: 3rem;text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.8);" class="text-center text-light m-auto p-4 col-lg-12 col-md-12 col-sm-12">Player info</h1>
        <input style="font-size: 1.6rem; border-radius: 20px;outline:none; border: none;box-shadow: 3px 3px 5px rgba(69, 69, 69, 0.5);" placeholder="Search On All" type="text" name="" id="search-input" class="manage-film__input w-50 mx-auto p-3 mb-5">

        <table id='table' class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Ingame</th>
                    <th scope="col">Attendance</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    foreach(getPlayerInfo() as $row){
                    $player_id = $row['player_id'];
                    $player_name = $row['player_name'];
                    $player_phone = $row['player_phone'];
                    $player_mail = $row['player_mail'];
                    $player_ingame = $row['player_ingame'];
                    $player_attendance = $row['attendance'];
                    
                ?>
                    <tr class="tr">
                        <input type="hidden" id="<?= $player_id ?>" value="<?= $player_id ?>">
                        <input type="hidden" id="<?= $player_id ?>_attendance" value="<?= $player_attendance ?>">
                        <th scope="col"><?= $player_id ?></th>
                        <td><?= $player_name ?></td>
                        <td><?= $player_phone ?></td>
                        <td><?= $player_mail ?></td>
                        <td><?= $player_ingame ?></td>
                        <td id="info-attendance">
                            <!-- <div class="info-check__icon" style="border: none;" onclick="onClickPlayer('<?= $player_id ?>', '<?= $player_attendance ?>')" id="info-attendance__onclick-<?= $player_id ?>"> -->
                                <!-- href="/info_attendance?ID=<?= $player_id ?>&Atd=<?= $player_attendance ?>" -->
                                <a id="showToast" href="/info_attendance?ID=<?= $player_id ?>&Atd=<?= $player_attendance ?>" class="showToast <?= checkAttendance($player_id) ?> info-check__icon d-block text-light text-center">
                                    <i class="fa-solid fa-check"></i>
                                </a>
                            <!-- </div> -->
                        </td>
                        <td>
                            <a id="link_<?= $player_id ?>" onclick="onClickDelete('<?= $player_id ?>')">
                                <i class="fa-solid fa-trash text-light"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        <input type="hidden" id="player_id" value="">
        <input type="hidden" id="attendance" value="">
    </div>
</div>

<script>
    search()

    function onClickDelete(player_id){
        $('#player_id').val(player_id);

        // console.log('hi');
        if(confirm('Do you wanna delete player '+player_id)){
            $('#link'+player_id).attr('href', '/info_delete?player_id='+player_id)
            window.location.href = '/info_delete?player_id='+player_id
        }
    }

    function onClickPlayer(player_id, attendance){
        // id="player_521h0001"
        $('#player_id').val(player_id);
        $('#attendance').val(attendance);
        ajaxCheckAttendance();
    }

</script>

