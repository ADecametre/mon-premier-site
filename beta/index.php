<?php //require 'files/base/c-ini.php'; $_GET['b_page']="/index.php";require 'files/base/c-beta.php';if($_GLOBALS['b_stop']==true){return;} ?>
<!DOCTYPE html>
<html>
<head>
    <title>ADam</title>
    <?php
        if(isset($_GET['pp'])){
            echo '<meta http-equiv="refresh" content="';
            if(time()>1584299715){echo 0;}else{echo 4;}
            echo ';URL=/projets/?s='.$_GET['pp'].'&p=true">';
        }
        if(isset($_GET['pa']) && $_GET['pa']==true){
            echo '<meta http-equiv="refresh" content="0;URL=/projets/?a='.$_GET['pa'].'">';
        }
    ?>
    <?php require 'files/base/c-top.php'; ?>
    <script>
        function m(name){
            $('#'+name).modal('show');
        };
        <?php
        if(isset($_GET['v_info']) && $_GET['v_info']==true){
            echo 'setTimeout(function(){m("version");slideO();}, 2000);';
        }
        ?>
    </script>
</head>
<body id="body">
    <div id="content">
        <h2 class="text-center">Bienvenue sur la</h2>
        <h1 class="text-center" style="margin-block-start:0;margin-block-end:0;margin-top:-15px">
            <big><big><big>
                V<small style="font-weight:500">ERSION</small> 2.0
            </big></big></big>
        </h1>
        <h2 class="text-center">du site ADécamètre</h2>
        <div class="row" style="width:50%;margin-left:25%;margin-right:25%">
            <div class="col">
                <h5 class="text-center"><a href="#" data-toggle="modal" data-target="#version" onclick="slideO();">Quoi de neuf ?</a></h5>
            </div>
            <div class="col">
                <h5 class="text-center"><a href="#" data-toggle="modal" data-target="#about">En savoir plus</a></h5>
            </div>
        </div>
    </div>
</body>
    <?php require 'files/base/c-bot.php'; ?>
</html>