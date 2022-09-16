<?php 
	class Childe{
		public $total_damage;
// dmg phase 1 Keqing 76
	// dmg phase 2 Keqing 20
	// dmg phase 3 Keqing 163
		
	}

	$tartag = new Childe();
	$keqing = new Childe();

	

	$ruin_guard_def = 925;
	$keqing->total_damage = 200; //Base Attack Keqing
	$tartag->total_damage = 189; //Base Attack Childe

	$dmg_tartag = $tartag->total_damage;
	$dmg_keqing = $keqing->total_damage;

	//Keqing
	

	echo "Damage Keqing: " . $dmg_keqing . "<br><br>";
	
	$phase_1_keqing = floor($dmg_keqing * 0.946); //Skill Damage
	$phase_2_keqing = floor(($dmg_keqing * 0.258) * 8); //Consecutive Slash DMG
	$phase_3_keqing = floor($dmg_keqing * 2.03); //Last Attack Damage

	echo "Base Damage Phase 1 Keqing: " . $phase_1_keqing . "<br>";
	echo "Base Damage Phase 2 Keqing: " . $phase_2_keqing . "<br>";
	echo "Base Damage Phase 3 Keqing: " . $phase_3_keqing . "<br>";

	$total_dmg_keqing = $phase_1_keqing + $phase_2_keqing + $phase_3_keqing; //Total semua damage

	echo "Total Damage Elemental Burst Keqing: " . $total_dmg_keqing . "<br><br>";

	//Tartaglia
	

	echo "Damage Tartaglia: " . $dmg_tartag . "<br><br>";

	$ranged_tartag = floor($dmg_tartag * 4.07); //Skill Damage: Ranged
	$melee_tartag = floor($dmg_tartag * 4.99); //Skill Damage: Melee

	echo "Damage Ranged Tartaglia: " . $ranged_tartag . "<br>";
	echo "Damage Melee Tartaglia: " . $melee_tartag . "<br>";
	
	