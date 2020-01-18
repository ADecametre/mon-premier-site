<?php
if(isset($_GET['fraction'])){
echo '<a href="/outils/reducteur-de-fractions/"><h6>Retour</h6></a></br></br></br>';




$input=$_GET['fraction'];

$string = $input;
$token = strtok($string, "/");

for ($i=1; $token !== false; $i++)
   {
   $GLOBALS['n'.$i]="$token";
	$token = strtok("/");
   }

$i--;
switch($i){
	case 2:
	//echo "d/c";
		$conf=true;
		break;
	case 3:
	//echo "a b/c";
		$conf=true;
		break;
	default :
		echo "ERROR";
		$conf=false;
}

if($conf!=false){
    
    echo "<h3>";
    if($i!=3){echo "<sup>".$n1."</sup>&frasl;<sub>".$n2."</sub>";}
    else{echo $n1." ".$n2."&frasl;".$n3;}
    echo " =</br></br>";
    echo "</h3>";
    
    
	if($i!=2){
		$n1=$n3*$n1+$n2;
		$n2=$n3;
		$n3=NULL;
	}
	$num=$n1;
	$denom=$n2;
	$output=$num."/".$denom;
	
	$comp=$num<=>$denom;
	switch($comp){
		case 0:
			$output=1;
			break;
		case 1:
			$big=$num;
			$small=$denom;
			break;
		case -1:
			$big=$denom;
			$small=$num;
			break;
	};
	//$c_fact=$big;
	if(isset($big)){
		$stop=0;
		$l=0;
	for($n=$small; $n!=0; $n--){
		if($stop!=1){
		switch($big%$n){
			case 0:
				switch($small%$n){
					case 0:
						$l++;
						$n_fact[$l]=$n;
						//$c_fact=$n;
						$stop+=1;
						//echo "<b><u>";
						//echo $n." : ";
						//echo $big%$n ." ". $small%$n;
						//echo "</u></b> ";
						//echo var_dump($stop);
						//echo "</br>";
						break;
					default :
						//echo $n." : ";
						//echo $big%$n ." ". $small%$n;
						//echo "</br>";
						break;
				}
				break;
			default :
				//echo $n." : ";
				//echo $big%$n ." ". $small%$n;
				//echo "</br>";
				break;
		}
	}
	}
		$c_fact=$n_fact[1];
	
		/*$output="Bigger : ".$big;
		$output.="</br>Smaller : ".$small;*/
		
		switch($big){
			case $num:
				/*$output.="</br></br>Num : Bigger";
				$output.="</br>Denom : Smaller";*/
				
				break;
			case $denom:
				/*$output.="</br></br>Num : Smaller";
				$output.="</br>Denom : Bigger";*/
				
				break;
		}
		if(filter_var($big/$c_fact, FILTER_VALIDATE_INT) && filter_var($small/$c_fact, FILTER_VALIDATE_INT)){
			
			if($denom/$c_fact!=1){
				$output="<sup>". $num/$c_fact;
				$output.="</sup>&frasl;<sub>";
				$output.=$denom/$c_fact ."</sub>";
			}else{$output=$num/$c_fact;}
		}
		if($num!=$big){
		}else{
			$output2=floor($num/$denom);
			if($num%$denom!=0){
				$output2.=" ";
				$output2.=$num%$denom/2;
				$output2.="&frasl;";
				$output2.=$denom/$c_fact;
			}
		}
	}
	
	
}

echo "<h1>";

if($conf!=false){
	echo $output;
	if(isset($output2)&&$output2!=$output){
		echo "</br> ou ";
		echo $output2;
	}
}


echo "</h1>";


}else{
    echo '
    <label for="fraction">Entrez votre fraction : </label>
    <form method="GET">
    <input type="text" name="fraction" size="42" placeholder="Sous la forme «a/b/c» (nbre fractionnaire) ou «d/c»">
    <input type="submit" value="OK">
    </from>
    ';
}
?>