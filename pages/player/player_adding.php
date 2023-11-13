
<div class="container bg-outside p-5">
    <form method="post" action="" class="form-player p-5">
        <h1 class="text-center form-player__title">Add player</h1>

        <div class="form-group p-2">
            <label for="formGroupExampleInput" style="font-size: 1.6rem;">Student ID</label>
            <input name="id" type="text" class="form-control" style="font-size: 1.6rem;" id="formGroupExampleInput" placeholder="Student ID...">
        </div>

        <div class="form-group p-2">
            <label for="formGroupExampleInput2" style="font-size: 1.6rem;">Player Name</label>
            <input name="name" type="text" class="form-control" style="font-size: 1.6rem;" id="formGroupExampleInput2" placeholder="Player Name...">
        </div>
    
        <div class="form-group p-2">
            <label for="formGroupExampleInput3" style="font-size: 1.6rem;">Player Phone</label>
            <input name="phone" type="text" class="form-control" style="font-size: 1.6rem;" id="formGroupExampleInput3" placeholder="Player Phone...">
        </div>

        <div class="form-group p-2">
            <label for="formGroupExampleInput5" style="font-size: 1.6rem;">Player Ingame</label>
            <input name="ingame" type="text" class="form-control" style="font-size: 1.6rem;" id="formGroupExampleInput5" placeholder="Player Ingame...">
        </div>

        <div style="font-weight: bold;" class="form-check pt-2 pb-4 pl-3 d-flex align-items-center">
            <label style="font-size: 1.6rem;" class="form-check-label mr-3" for="flexSwitchCheckDefault">Is play-off player?</label>
            <input class="" style="font-size: 1.6rem;" name="playoff_check" type="checkbox" id="flexSwitchCheckDefault" data-toggle="toggle" data-onstyle="success">
        </div>

        <?php
            if(isset($_POST['btn'])){
                if(!empty($_POST['id']) &&
                !empty($_POST['name']) &&
                !empty($_POST['phone']) &&
                !empty($_POST['ingame'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $mail = $id."@student.tdtu.edu.vn";
                    $ingame = $_POST['ingame'];
                    if(empty($_POST['playoff_check'])){
                        if(addPlayerManual($id, $name, $phone, $mail, $ingame)){
                            ?>
                            <p style="font-weight: bold;" class="text-light text-center">Add successfully</p>
                            <?php
                        }else{
                            ?>
                            <p style="font-weight: bold;" class="text-light text-center">Student ID already existed</p>
                            <?php
                        }
                    }else{
                        if(addPlayerPlayOffManual($id, $name, $phone, $mail, $ingame)) {
                            ?>
                            <p style="font-weight: bold;" class="text-light text-center">Add successfully</p>
                            <?php
                        }else{
                            ?>
                            <p style="font-weight: bold;" class="text-light text-center">Student ID already existed</p>
                            <?php
                        }
                    }
                }else{
                    ?>
                        <p style="font-weight:bold;" class="text-light text-center">Please enter fully informations</p>
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
    // onChangeRound();
</script>
