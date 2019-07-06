<?php 
/*1 mie harganya 3000*/
$tanggal = 10;
$uang = 12000;

$jumlah_mie = $uang / 3000;
if ($tanggal % 2 == 1) {
	if ($jumlah_mie == 3) {
		for ($i=5; $i <= 30; $i= $i+5) {
			if ($i == $tanggal) {
				$bonus = 3 + 10;
				echo $bonus;
			}
		}
	}else{
	echo $jumlah_mie;
}
}elseif($tanggal % 2 == 0){
	if ($jumlah_mie == 4) {
		for ($i=5; $i <= 30; $i= $i+5) {
			if ($i == $tanggal) {
				$bonus = 4 + 5;
				echo $bonus;
			}
		}
	}else{
	echo $jumlah_mie;
}

}


?>