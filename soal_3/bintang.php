<?php

function bintang($n){
	$k = 0;
	for ($i=0; $i < $n; $i++) { 
		$l = $k %2;
		for ($j = 1; $j <= $n; $j++) {
			if ($k %2 == 0)  {
				echo "*";
			}
			else{
				echo "&nbsp;&nbsp;";
			}
			$k++;
		}
		$k++;
		echo "<br>";
	}
}


bintang(12);