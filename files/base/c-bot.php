<?php $_GET['b_page']="/files/base/c-bot.php";require 'c-beta.php';if($_GLOBALS['b_stop']==true){return;} ?>
<script>
    document.getElementById("body").insertAdjacentHTML('afterbegin', '<?php include $sl.'files/base/'.$_GET['test'].'nav.php' ?>');
    document.getElementById("body").insertAdjacentHTML('beforeend', '<?php include $sl.'files/base/'.$_GET['test'].'nav2.php' ?>');
    
    if($(document).width()<=800){window.mobile=true;}else{window.mobile=false;};
    if(window.mobile==true){
        document.getElementById("nav").insertAdjacentHTML('afterend', '<div style="min-height:100px"></div>');
        document.getElementById("navd2").insertAdjacentHTML('afterend', '<div id="nav2" align="center"><h5 style="margin-block-end: 0">ADam<sup><img id="r" width="8px" src="/files/base/r.png" /></sup> <?php echo date("Y"); ?></h5></div>');
    }else{
        document.getElementById("nav").insertAdjacentHTML('afterend', '<div style="min-height:50px"></div>');
        document.getElementById("navd2").insertAdjacentHTML('beforebegin', '<div id="nav2" align="center"><h5 style="margin-block-end: 0">ADam<sup><img id="r" width="8px" src="/files/base/r.png" /></sup> <?php echo date("Y"); ?></h5></div>');
    }
</script>