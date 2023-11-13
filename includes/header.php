
<nav class="navbar-content navbar navbar-expand-lg p-3">
    <div class="container-fluid">
        <h2 class="header-title" href="#">
                <img class="mr-3" src="../assets/img/avatarITZone.jpg" style="width: 50px; border-radius: 50%; border: 2px solid #fff;" alt="" srcset="">
                <a class="header-title__link" href="/">
                    IT-Zone FO4
                </a>
        </h2>


        <div class="" id="">
            <ul class="header-list d-flex ml-auto">
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="/match_list?round=play-off">Play-off</a>
                </li>

                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="/match_list?round=1_64">1/64</a>
                </li>
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="/match_list?round=1_32">1/32</a>
                </li>
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="/match_list?round=1_16">1/16</a>
                </li>
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="match_list?round=1_8">1/8</a>
                </li>
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="match_list?round=1_4">Quarter-final</a>
                </li>
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="match_list?round=semi">Semi-final</a>
                </li>
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="match_list?round=3_4">3-4 final</a>
                </li>
                <li class="header-item nav-item">
                    <a class="header-item__link nav-link" href="match_list?round=final">Final</a>
                </li>
            </ul>

        </div>
    </div>

</nav>

<nav class="navbar navbar-bottom navbar-expand-lg p-4">
    <div class="container">
        <div class="row header-bottom justify-content-between">
            <div class="header-bottom__content">
                <img class="header-bottom__img" src="../assets/img/schedule-fo4-2023.jpg" alt="" srcset="">
                
                <div class="header-bottom__about ml-auto">
                    <h2 class="header-bottom__title">Autumn Fifa Online 4</h2>
                    <div class="header-bottom__info">
                        <p style="font-weight:bold;" class="header-bottom__para m-0">Knock-out || IT-Zone || Cyber Core Ichill</p>
                        <p style="font-weight:bold;" class="header-bottom__para m-0"><i class="fa-solid fa-users"></i> <?= totalPlayer() ?> players</p>
                    </div>
                </div>

            </div>

            <img class="header-bottom__img--FC" src="../assets/img/stadium_logo.png" alt="" srcset="">

            <div class="w-75 d-flex flex-wrap header-bottom__choice align-items-center">
                <div class="header-bottom__rules">
                    <a class="header-bottom__para header-bottom__para--choice mr-3" href="/">HOME</a>
                </div>

                <div class="header-bottom__rules">
                    <a class="header-bottom__para header-bottom__para--choice mr-3" href="/info">INFO</a>
                </div>

                <div class="header-bottom__rules">
                    <a class="header-bottom__para header-bottom__para--choice mr-3" href="/ranks">RANKS</a>
                </div>

                <div class="header-bottom__rules">
                    <a class="header-bottom__para header-bottom__para--choice mr-3" href="/player">MATCH</a>
                </div>

                <div class="header-bottom__rules">
                    <a class="header-bottom__para header-bottom__para--choice mr-3" href="/data">PLAYER</a>
                </div>

                <div class="header-bottom__rules">
                    <a class="header-bottom__para header-bottom__para--choice mr-3" href="/more">MORE</a>
                </div>

                <!-- <div class="header-bottom__rules">
                    <a class="header-bottom__para header-bottom__para--choice mr-3" href="javascript:history.go(-1)">RETURN</a>
                </div> -->

                <?php
                    if(!isset($_SESSION['login'])){
                        ?>
                        <div class="header-bottom__rules">
                            <a class="header-bottom__para header-bottom__para--choice mr-3" href="/login">LOGIN</a>
                        </div>
    
                        <?php
                    }
                ?>

            </div>

            <?php
                if(isset($_SESSION['login'])){
                    ?>
                    <form style="width: 0px;" onsubmit="return confirmSubmit()" action="/logout">
                        <div class="w-25 d-flex flex-wrap header-bottom__choice justify-content-end">
                            <div class=" header-bottom__rules d-flex align-items-center">
                                <button style="border: none; background-color: transparent;" type="submit" class="header-bottom__para header-bottom__para--choice mr-3">LOGOUT</button>
                                <i style="font-size: 1.6rem;" class="header-bottom__icon fa-solid fa-door-open"></i>
                            </div>
                        </div>
                    </form>
                    
                    <?php
                }
                ?>
        </div>
    </div>

</nav>

<script>
    function confirmSubmit() {
        if (confirm("Do you wanna logout ?")) {
            return true;
        } else {
            return false;
        }
    }
</script>
