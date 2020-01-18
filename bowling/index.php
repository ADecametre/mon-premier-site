<?php
require "data.php";
    
$points[1]['t']=$points[1]['e1']+$points[1]['e2'];
$points[2]['t']=$points[2]['e1']+$points[2]['e2'];
$points[3]['t']=$points[3]['e1']+$points[3]['e2'];
$points[4]['t']=$points[4]['e1']+$points[4]['e2'];
$points[5]['t']=$points[5]['e1']+$points[5]['e2'];
$points[6]['t']=$points[6]['e1']+$points[6]['e2'];
$points[7]['t']=$points[7]['e1']+$points[7]['e2'];
$points[8]['t']=$points[8]['e1']+$points[8]['e2'];
$points[9]['t']=$points[9]['e1']+$points[9]['e2'];
$points[10]['t']=$points[10]['e1']+$points[10]['e2']+$points[10]['e3'];

$pts=$points[1]['t']+$points[2]['t']+$points[3]['t']+$points[4]['t']+$points[5]['t']+$points[6]['t']+$points[7]['t']+$points[8]['t']+$points[9]['t']+$points[10]['t'];

$tc=$points[$tour]['t'];
$e1c=$points[$tour]['e1'];
$e2c=$points[$tour]['e2'];
if($tour!=10){}else{$e3c=$points[10]['e3'];};

?>
<!DOCTYPE html>
<html>
<head>
<title>Bowling</title>
<meta http-equiv="refresh" content="2.5; url="bowling.html" />
<style>
	table {border-style: ridge;}
	td {border-style: groove;}
    	div.tab{height: 25px;}
	div.tab1.tab2.tab3.tab4.tab5.tab6.tab7.tab8.tab9.tab10{height: 75px;}
    	table.table1.table2.table3.table4.table5.table6.table7.table8.table9.table10{height: 100px; width: 250px;}
	p{font-size: 22px;}
	p.title{font-size: 30px;}
	b{font-weight: 10px;}
	body{background-color: <?php echo $body_background; ?>;}
	table{background-color: <?php echo $table_background; ?>;}

	div.tab<?php echo $tour; ?>, div.table<?php echo $tour; ?>{background-color: <?php echo $tour_background ?>;}
</style>
</head>
<body>

<div align="center">

<table><td><p class="title"><b>

	<!--Name--><?php echo $name; ?></b><p></td><td><p class="title"><b>
	<!--Points--><?php echo $pts; ?><!--<span style="font-size: 10px;">(-7)</span>-->     </b>points</p></td>
    
</table></br><table><td><p style="font-size:28px;"><b><u>Tour

	<!--Tour--><?php echo $tour; ?></u></b></p></td></table><table><td align="center"><p><b>
	<!--Total--><?php echo $tc; ?></b> pts</p>
	<table><td><p><b>
	    <!--Essai 1--><?php echo $e1c; ?></b> pts</p></td><td><p><b>
    	<!--Essai 2--><?php echo $e2c; ?></b> pts</p></td>
	    <!--Essai 3-->
            <?php if($tour!=10){echo "<!--";}; ?>
                <td><p><b><?php echo $e3c; ?></b> pts</p></td>
            <?php if($tour!=10){echo "-->";}; ?>
    </td></table>
    
    
</table></br><table><section class="tab">

	<td><div align="center" class="table1"><p class="1">1</p></td><td><div align="center" class="table2"><p class="2">2</p></div></td><td><div align="center" class="table3"><p class="3">3</p></div></td><td><div align="center" class="table4"><p class="4">4</p></div></td><td><div align="center" class="table5"><p class="5">5</p></div></td><td><div align="center" class="table6"><p class="6">6</p></div></td><td><div align="center" class="table7"><p class="7">7</p></div></td><td><div align="center" class="table8"><p class="8">8</p></div></td><td><div align="center" class="table9"><p class="9">9</p></div></td><td><div align="center" class="table10"><p class="10">10</p></div></td><tr>
    
  <td><div align="center" class="tab1"><p class="1">

	<!--Tour1--><?php if($tour>=1){echo $points[1]['t'];} ?><br>---<br><?php if($tour>=1){echo $points[1]['e1'];} ?><br><?php if($tour>=1){echo $points[1]['e2'];} ?></p></div></td><td><div align="center" class="tab2"><p class="2">

	<!--Tour2--><?php if($tour>=2){echo $points[2]['t'];} ?><br>---<br><?php if($tour>=2){echo $points[2]['e1'];} ?><br><?php if($tour>=2){echo $points[2]['e2'];} ?></p></div></td><td><div align="center" class="tab3"><p class="3">

	<!--Tour3--><?php if($tour>=3){echo $points[3]['t'];} ?><br>---<br><?php if($tour>=3){echo $points[3]['e1'];} ?><br><?php if($tour>=3){echo $points[3]['e2'];} ?></p></div></td><td><div align="center" class="tab4"><p class="4">

	<!--Tour4--><?php if($tour>=4){echo $points[4]['t'];} ?><br>---<br><?php if($tour>=4){echo $points[4]['e1'];} ?><br><?php if($tour>=4){echo $points[4]['e2'];} ?></p></div></td><td><div align="center" class="tab5"><p class="5">

	<!--Tour5--><?php if($tour>=5){echo $points[5]['t'];} ?><br>---<br><?php if($tour>=5){echo $points[5]['e1'];} ?><br><?php if($tour>=5){echo $points[5]['e2'];} ?></p></div></td><td><div align="center" class="tab6"><p class="6">

	<!--Tour6--><?php if($tour>=6){echo $points[6]['t'];} ?><br>---<br><?php if($tour>=6){echo $points[6]['e1'];} ?><br><?php if($tour>=6){echo $points[6]['e2'];} ?></p></div></td><td><div align="center" class="tab7"><p class="7">

	<!--Tour7--><?php if($tour>=7){echo $points[7]['t'];} ?><br>---<br><?php if($tour>=7){echo $points[7]['e1'];} ?><br><?php if($tour>=7){echo $points[7]['e2'];} ?></p></div></td><td><div align="center" class="tab8"><p class="8">

	<!--Tour8--><?php if($tour>=8){echo $points[8]['t'];} ?><br>---<br><?php if($tour>=8){echo $points[8]['e1'];} ?><br><?php if($tour>=8){echo $points[8]['e2'];} ?></p></div></td><td><div align="center" class="tab9"><p class="9">

	<!--Tour9--><?php if($tour>=9){echo $points[9]['t'];} ?><br>---<br><?php if($tour>=9){echo $points[9]['e1'];} ?><br><?php if($tour>=9){echo $points[9]['e2'];} ?></p></div></td><td><div align="center" class="tab10"><p class="10"></br>

	<!--Tour10--><?php if($tour>=10){echo $points[10]['t'];} ?><br>---<br><?php if($tour>=10){echo $points[10]['e1'];} ?><br><?php if($tour>=10){echo $points[10]['e2'];} ?><br><?php if($tour>=10){echo $points[10]['e3'];} ?></p></div></td>

</section>
</table>

</div>

</body>
</html>
