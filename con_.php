<style>
    body{display:none}
    table{width:90%;margin-top:-2500}
    td{border:2px black groove;border-radius:10px}
    h1{font-family:fantasy}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            $("td").fadeOut(0);
            $("#l").slideUp(0);
            // setTimeout(function(){ $("#l").slideUp(60000) }, 60000);
            $("style").append("body{display:unset}");
            // setTimeout(function(){ $("table").animate({"margin-top": "-1200px"}, 50000) }, 3550000);
        });
    // function s(n){
        $(document).ready(function(){
            // $("#"+n).slideDown(100*n);
            <?php for($x=3600;$x>0;$x--){
                echo 'setTimeout(function(){ $("#'.$x.'").fadeIn(1500) }, '.($x*1000).');
            ';}
            ?>
            // setTimeout(function(){
                $("#l").slideDown(3600000)
            // }, 1000)
            ;
        });
    // }
    // var i;
    // for (i=10;i>0;i--) {
    //     s(i);
    // }
</script>
<table align="center">
    <tr id="l" height="1300px"></tr>
    <tr height="1200px"></tr>
    <tr>
        <?php for($x=3600;$x>0;$x--){echo "<td id='".$x."' align='center'><b>".$x." - Je suis con.</b></td>"; if($x%5==1){echo "</tr><tr>";}} ?>
    </tr>
</table>