<!-- <div class="bg-outside"> -->
    <div class="container bg-outside p-4">
        <div class="row p-2">
            <div class="home-match d-flex flex-wrap justify-content-center col-l-12">
                <div class="match-r64--outside p-5 col-l-6">
                    <div class="match-r64">
                        <h1 class="match--title text-center m-0">Round 64</h1>
                        <?php
                        foreach(getMatchRLimit5('r64') as $row){
                            $player1 = $row['player1'];
                            $player2 = $row['player2'];
                            ?>
                            <div class="match-list">
                                <a href="match_list?round=1_64" class="text-light">
                                    <div class="match-item d-flex flex-wrap justify-content-center">
                                        <div class="match-item__player1">
                                            <p class="match-item__para">
                                                <?= $player1 ?> 
                                            </p>
                                        </div>
            
                                        <p class="match-item__para px-3">-</p>
            
                                        <div class="match-item__player2">
                                            <p class="match-item__para">
                                                <?= $player2 ?>
                                            </p>
                                        </div>
            
                                    </div>
                                </a>
                            </div>
                            
                            <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="match-r32--outside p-5 col-l-6">
                    <div class="match-r32">
                        <h1 class="match--title text-center m-0">Round 32</h1>
                        <?php
                        foreach(getMatchRLimit5('r32') as $row){
                            $player1 = $row['player1'];
                            $player2 = $row['player2'];
                            ?>
                            <div class="match-list">
                            <a href="match_list?round=1_32" class="text-light">
                                <div class="match-item d-flex flex-wrap justify-content-center">
                                    <div class="match-item__player1">
                                        <p class="match-item__para">
                                            <?= $player1 ?> 
                                        </p>
                                    </div>
        
                                    <p class="match-item__para px-3">-</p>
        
                                    <div class="match-item__player2">
                                        <p class="match-item__para">
                                            <?= $player2 ?>
                                        </p>
                                    </div>
        
                                </div>
                            </a>

                            </div>
                            
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="match-r16--outside p-5 col-l-6">
                    <div class="match-r16">
                        <h1 class="match--title text-center m-0">Round 16</h1>
                        <?php
                        foreach(getMatchRLimit5('r16') as $row){
                            $player1 = $row['player1'];
                            $player2 = $row['player2'];
                            ?>
                            <div class="match-list">
                            <a href="match_list?round=1_16" class="text-light">
                                <div class="match-item d-flex flex-wrap justify-content-center">
                                    <div class="match-item__player1">
                                        <p class="match-item__para">
                                            <?= $player1 ?> 
                                        </p>
                                    </div>
        
                                    <p class="match-item__para px-3">-</p>
        
                                    <div class="match-item__player2">
                                        <p class="match-item__para">
                                            <?= $player2 ?>
                                        </p>
                                    </div>
        
                                </div>
                            </a>

                            </div>
                            
                            <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="match-r8--outside p-5 col-l-6">
                    <div class="match-r8">
                        <h1 class="match--title text-center m-0">Round 8</h1>
                        <?php
                        foreach(getMatchRLimit5('r8') as $row){
                            $player1 = $row['player1'];
                            $player2 = $row['player2'];
                            ?>
                            <div class="match-list">
                            <a href="match_list?round=1_8" class="text-light">
                                <div class="match-item d-flex flex-wrap justify-content-center">
                                    <div class="match-item__player1">
                                        <p class="match-item__para">
                                            <?= $player1 ?> 
                                        </p>
                                    </div>
        
                                    <p class="match-item__para px-3">-</p>
        
                                    <div class="match-item__player2">
                                        <p class="match-item__para">
                                            <?= $player2 ?>
                                        </p>
                                    </div>
        
                                </div>                        
                            </a>

                            </div>
                            
                            <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
            </div>

            <!-- <div class="home-location text-center col-l-8">
                <img class="home-location__img" src="../assets/img/cybercoreichill.png" alt="" srcset="">
                <img src="../assets/img/cyber_location.png" alt="" srcset="">
            </div> -->
        </div>
    </div>
<!-- </div> -->