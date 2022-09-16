<?php 
	class Manusia{
		public $berat_badan = 0;
		public $tinggi_badan = 0;
		public $warna_kulit = '';
		public $warna_bola_mata = '';
		public $warna_rambut = '';
		public $stamina = 0;

		public function Makan()
		{
			return $stamina = 10;
		}

		public function Tidur()
		{
			echo "Hai";
		}
	}

	$deva = new Manusia();
	$deva->berat_badan = 60;
	$deva->tinggi_badan = 160;
	$deva->warna_kulit = "Dark Skin";
	$deva->warna_bola_mata = "Cokelat";
	$deva->warna_rambut = "Hitam";
	$deva->stamina = 0;

	$bb = $deva->berat_badan;

	echo $deva->berat_badan;
	echo "<br>";
	echo $bb;
	echo "<br>";
	echo $deva->Makan();
	echo "<br>";
	echo $deva->Tidur();

 ?>