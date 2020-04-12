<?php $_GET['b_page']="/files/base/c-top.php";require 'c-beta.php';if($_GLOBALS['b_stop']==true){return;}

// $sl="";
// for ($x = (substr_count($_SERVER['PHP_SELF'],"/")-1); $x != 0; $x--){
//     $sl.="../";
// }
?>

<link rel="apple-touch-icon" sizes="57x57" href="/files/base/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/files/base/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/files/base/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/files/base/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/files/base/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/files/base/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/files/base/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/files/base/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/files/base/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/files/base/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/files/base/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/files/base/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/files/base/favicon/favicon-16x16.png">
<link rel="manifest" href="/files/base/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/files/base/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<!--<link rel="stylesheet" type="text/css" href="/files/base/style.css">-->
<?php include $sl.'files/base/'.$_GET['test'].'style.php';$_GET['i']='css';include $sl.'files/base/'.$_GET['test'].'nav.php'; include $sl.'files/base/'.$_GET['test'].'nav2.php'; ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<?php
$_GET['i']='js';include $sl.'files/base/'.$_GET['test'].'nav.php'; include $sl.'files/base/'.$_GET['test'].'nav2.php'; $_GET['i']='html';
echo "
<script>
$(document).ready(function(){
  $('[data-toggle=\"tooltip\"]').tooltip();
});
</script>
";
?>