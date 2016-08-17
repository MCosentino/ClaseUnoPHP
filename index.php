<html>
<head>
	<title>Cosentino</title>
</head>
<body>
	<?php
	$vueltas = 1000;
	$pares = 0;
	$impares = 0;
	$cont1 = 0;
	$cont2 = 0;
	$cont3 = 0;
	$cont4 = 0;
	$cont5 = 0;
	$cont6 = 0;
	$cont7 = 0;
	$cont8 = 0;
	$cont9 = 0;
	$cont10 = 0;
	//echo "<br>El numero es $numero";
	for ($x=1; $x<=$vueltas; $x++)	
	{	
		$random = (rand(1,10));
		if ($random % 2 == 0)
		{
		$pares++;
		}else
		{
		$impares++;
		}

		switch($random){
			case 1:
				$cont1++;
				break;
			case 2:
				$cont2++;
				break;
			case 3:
				$cont3++;
				break;
			case 4:
				$cont4++;
				break;
			case 5:
				$cont5++;
				break;
			case 6:
				$cont6++;
				break;
			case 7:
				if($cont7 * 100 / $vueltas < 5){
					$cont7++;
					break;
				}
				else
				{
					continue;
				}
			case 8:
				$cont8++;
				break;
			case 9:
				$cont9++;
				break;
			case 10:
				$cont10++;
				break;
		}
	}
	echo "<br>Numeros 1: ".($cont1 * 100 / $vueltas)."%";
	echo "<br>Numeros 2: ".($cont2 * 100 / $vueltas)."%";
	echo "<br>Numeros 3: ".($cont3 * 100 / $vueltas)."%";
	echo "<br>Numeros 4: ".($cont4 * 100 / $vueltas)."%";
	echo "<br>Numeros 5: ".($cont5 * 100 / $vueltas)."%";
	echo "<br>Numeros 6: ".($cont6 * 100 / $vueltas)."%";
	echo "<br>Numeros 7: ".($cont7 * 100 / $vueltas)."%";
	echo "<br>Numeros 8: ".($cont8 * 100 / $vueltas)."%";
	echo "<br>Numeros 9: ".($cont9 * 100 / $vueltas)."%";
	echo "<br>Numeros 10: ".($cont10 * 100 / $vueltas)."%";
	echo "<br>Pares: $pares <br> Impares: $impares";

	?>
</body>
</html>