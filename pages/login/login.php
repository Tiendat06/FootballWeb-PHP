<?php
    if(isset($_SESSION['login'])){
        header('location: /');
    }
?>


<div class="container bg-outside p-5">
    <!-- <div class="row"> -->
        <form class="form-player p-5 w-75 m-auto" action="" method="post">

            <h1 class="text-center form-player__title">Login
                
            </h1>

            <div class="form-group col-lg-12 text-light">
                <p class="text-light" for="exampleInputEmail1">Student's ID</p>
                <input name="sid" style="font-size: 1.5rem;" type="text" class="form-control login-inp w-100" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
    
            <div class="form-group col-lg-12 text-light">
                <p class="text-light" for="exampleInputPassword1">Password</p>
                <input name="pwd" style="font-size: 1.5rem;" type="password" class="form-control login-inp w-100" id="exampleInputPassword1" placeholder="">
                <a style="font-size: 1.3rem;" href="" class="text-light text-right">Forgot password?</a>
            </div>

            <?php
                if(isset($_POST['btn'])){
                    if(!empty($_POST['sid']) && !empty($_POST['pwd'])){
                        $sid = $_POST['sid'];
                        $pwd = $_POST['pwd'];
                        if(checkLogin($sid, $pwd)){
                            $_SESSION['login'] = $sid;
                            header('location: /');
                        }else{
                            ?>
                            <p style="font-size: 1.6rem; font-weight:bold;" class="text-light text-center">Invalid id or password</p>
                            <?php
                        }
                    }else{
                        ?>
                        <p style="font-size: 1.6rem; font-weight:bold;" class="text-light text-center">Invalid id or password</p>
                        <?php
                    }
                }
            ?>
                
            <div class="btn-site w-100 text-center">
                <button style="font-size: 1.6rem;" name="btn" type="submit" class="btn btn-success btn-add">Login</button>
            </div>
        </form>
    <!-- </div> -->
</div>