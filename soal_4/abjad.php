<?php

function print_abc($n,$m){
	$k = 0;
	$abjad = range('A', 'Z');
	for ($i=0; $i < $n; $i++) { 
		for ($j = 1; $j <= $m; $j++) {
			echo $abjad[$k].'<span style="color:#fff;">.</span>';  

			$k++;
		}
		echo "<br>";
	}
}


print_abc(4,6);