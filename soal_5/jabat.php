<?php

function count_handshake($n){
	$jumlah = 0;
	for ($i=0; $i < $n; $i++) { 
		for ($k=0; $k < $i; $k++) { 
			$jumlah++;
		}
	}
	echo "Jumlah jabat tangan adalah = ".$jumlah;
}

count_handshake(10);