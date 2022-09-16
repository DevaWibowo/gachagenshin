<?php

// Section HP

$hp = 100; //init hp karakter
$maks_hp = 9548; //total hp karakter
$maks_hp_benny = 8245; //total hp benny

$batas_hp = round(0.7 * $maks_hp); //batas pemulihan setiap karakter

$heal_bonus = 0.04; //bonus pemulihan karakter
$pemulihan = round((0.06 * $maks_hp_benny) + 577); //pemulihan benny
$healing_bonus = round($heal_bonus * $pemulihan); //total bonus pemulihan
$total_pemulihan = round($healing_bonus + $pemulihan); //total pemulihan

echo "Pemulihan dasar: " . $pemulihan . "<br>";
echo "Bonus pemulihan: " . $healing_bonus . "<br>";
echo "Pemulihan total: " . $total_pemulihan . "<br>";

// End Section HP

// Section ATK
// End Section ATK

echo "<br>";
echo "Pemulihan HP yang dilakukan Bennett: " . $total_pemulihan . "<br>";
echo "HP awal: " . $hp;
echo "<br><br>";

if($hp <= $batas_hp){
	$i = 1; $j = 1;
	while ($hp <= $batas_hp) { //ketika hp karakter di bawah 70% dari 
		echo "Total HP sebelum pemulihan ke-" . $j . ": " . $hp . "<br>";
		$hp += $total_pemulihan;
		echo "Total HP setelah pemulihan ke-" . $i . ": " . $hp . "<br><br>";
		$j++; $i++;
	}
}else{
	echo "Mendapatkan bonus atk berdasarkan base atk benny";
}
