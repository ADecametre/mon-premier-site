<!DOCTYPE html>
<title>Merci !</title>
<script>
// function exit(){
//     window.location.replace("http://a-decametre.tk/outils/vive-les-bines/results/?name='.$_GET['name'].'&n_bines="+x);
// }

<?php
    // if(!isset($_GET['name'])){
    //     echo 'window.location.replace("http://a-decametre.tk/outils/vive-les-bines/?name=AdSt");';
    // }else{
    //     // echo 'window.onbeforeunload = function(){window.location.replace("http://a-decametre.tk/outils/vive-les-bines/results/?name='.$_GET['name'].'&n_bines="+x); return 0;};';
    //     // echo 'window.onbeforeunload = function(){window.location.replace(\'http://a-decametre.tk/outils/vive-les-bines/results/?name='.$_GET['name'].'&n_bines=\'+x)\'; return true;};';
    //     echo 'window.onbeforeunload = function(){
    //         document.getElementById("cont").innerHTML += \'<meta http-equiv="refresh" content="0;URL=http://a-decametre.tk/outils/vive-les-bines/results/?name='.$_GET['name'].'&n_bines=\'+x+\'">\'; return undefined;
            
    //         };';
    // }
?>

/*function test()
{
  if (confirm("Confirmez la fermeture..."))
  {
      window.location.replace("http://a-decametre.tk/outils/vive-les-bines/?n_bines=180");
    //document.getElementById("cont").innerHTML += '<meta http-equiv="refresh" content="5;URL=?n_bines=180"';
    return;
  }
  else
   return false;
 
}*/
</script>
<body>
    <div>
        <div align="right" id="cont"></div>
    </div>


<style>
    #cont{
        margin: 5% 10% 5% 10%;
    }
    .s{
        border:2px groove black;
        display:inline-table;
        margin: 1% 1% 1% 1%;
    }
    .n0{background-color:red; color:white;}
    .n1{background-color:orange; color:white;}
    .n2{background-color:yellow;}
    .n3{background-color:green;}
    .n4{background-color:lightblue;}
    .n5{background-color:blue; color:white;}
    .n6{background-color:purple; color:white;}
    .n7{background-color:pink;}
    .n8{background-color:black; color:white;}
    .n9{background-color:white;}
    
    /*.i1{-webkit-transform: scaleX(-1);transform: scaleX(-1);}*/
    /*.i2{-webkit-transform: scaleY(-1);transform: scaleY(-1);}*/
    /*.i3{-webkit-transform: scaleX(-1) scaleY(-1);transform: scaleX(-1) scaleY(-1);}*/
</style>
<script>
var x=0;
//document.getElementById("cont").innerHTML = '</tr>';
function cUpd(){
   x++;
   //document.getElementById("cont").innerHTML += '<tr>';
       //document.getElementById("cont").innerHTML += '<td><h1>'+y+'</h1></td><td><img src="https://risibank.fr/cache/stickers/d980/98001-full.png" width="102,25" height="200"></td>';
       //if(x%5!=1){
           document.getElementById("cont").innerHTML = '<div class="s n'+(x%10)+'"><h1>'+x+'</h1><img class="img-responsive i'+(x%4)+'" src="/outils/merci/img/'+(x%10)+'.png" width="" height=""></div>&nbsp;&nbsp;&nbsp;' + document.getElementById("cont").innerHTML;
       /*}else{
           document.getElementById("cont").innerHTML = '<div width="16%" class="s"><h1>'+x+'</h1><img class="img-responsive" src="https://risibank.fr/cache/stickers/d980/98001-full.png" width="153,375" height="300"></div>&nbsp;&nbsp;&nbsp;<br><br>' + document.getElementById("cont").innerHTML;
       };*/
       //document.getElementById("cont").innerHTML = '<table>' + document.getElementById("cont").innerHTML;
};
setInterval(cUpd, 400);
<?php
//if(isset($_GET['n_bines']) && $_GET['n_bines']>0){
//    echo 'document.getElementById("cont").innerHTML = \'<div align="center"><h1 style="font-size:100px;"><small>Vous me devez </small><br><b>'.$_GET['n_bines'].'<b><br><small> bines.</small></h1></div>\'';
//}
// else if(!isset($_GET['name'])){
    // echo 'window.onbeforeunload = window.location.replace("http://a-decametre.tk/outils/vive-les-bines/?n_bines="+x+"");';
// }else if(isset($_GET['name'])){
//     echo 'window.onbeforeunload = window.location.replace("http://a-decametre.tk/outils/vive-les-bines/?name='.$_GET['name'].'&n_bines="+x+"");';
// }
?>
</script>

</body>