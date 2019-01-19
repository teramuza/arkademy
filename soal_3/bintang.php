<?php

function bintang($n){
	$k = 0;
	for ($i=0; $i < $n; $i++) { 
		for ($j = 1; $j <= $n; $j++) {
			if ($k %2 == 0)  {
				//harus genap agar mengeluarkan bintang
				echo "*";
			}
			else{
				echo "&nbsp;&nbsp;";
			}
			$k++;
		}
		if($n %2 == 0){
			//jika nilai yg dimasukan genap maka akan menjalankan
			$k++;
		}
		echo "<br>";
	}
}


bintang(11);