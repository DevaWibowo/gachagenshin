<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Pity Counter
	</title>
</head>
<body>
	<div class="container" style="margin-top: 50px; margin-left: 50%; margin-right: 50%;">
		<button id="disablee" style="height: 50px; width: 100px;" onclick="TambahPity()" value="Kirim" name="TambahPity">Klik</button>
		<!-- <input type="text" name="replacee" id="replacee"> -->
		
	</div>
	<div class="container">
		<p id="replaceeP" style="text-align: center;"></p>
		<p id="total_count" style="text-align: center;"></p>
		<p id="pemberitahuan" style="text-align: center;"></p>
		<p id="total_c4" style="text-align: center;"></p>
	</div>
</body>
<script type="text/javascript">
	//, 'Rosaria', 'Yanfei', 'Gorou', 'Shikanoin', 'Razor', 'Chongyun', 'Bennett', 'Noelle', 'Fishcl', 'Amber', 'Xingqiu', 'Beidou', 'Diona', 'Kaeya', 'Sayu', 'Xiangling', 'Thoma', 'Yunjin', 'Shinobu'
	pity_c = [];
	
	totalPity = ['Lisa', 'Barbara', 'Ningguang', 'Sucrose', 'Xinyan', 'Favonius Codex', 'The Widsith', 'Mappa Mare', 'Favonius Sword', 'Alley Flash', "Lion's Roar", 'Favonius Lance', "Wavebreaker's Fin", "Dragon's Bane", 'Favonius Greatsword', "Rainslasher", "Sacrificial Greatsword", 'Favonius Bow', "Sacrificial Bow", "Rust", 'Magic Guide', "Twin Nephrite", "Emerald Orb", 'Skyrider Sword', "Cool Steel", "Harbinger of Dawn", 'White Tassel', "Halberd", "Black Tassel", 'Bloodtainted Greatsword', "Debate Club", "Skyrider Greatsword", 'Raven Bow', "Messenger", "Recurve Bow"];

	// pity4starweapCata = ['Favonius Codex', 'The Widsith', 'Mappa Mare'];
	// pity4starweapSword = ['Favonius Sword', 'Alley Flash', "Lion's Roar"];
	// pity4starweapSpear = ['Favonius Lance', "Wavebreaker's Fin", "Dragon's Bane"];
	// pity4starweapGS = ['Favonius Greatsword', "Rainslasher", "Sacrificial Greatsword"];
	// pity4starweapBow = ['Favonius Bow', "Sacrificial Bow", "Rust"];
	// totalpity4starweap = [];
	// totalpity4starweap.push(pity4starweapCata, pity4starweapBow, pity4starweapSword, pity4starweapGS, pity4starweapSpear);
	// pity3starweapCata = ['Magic Guide', "Twin Nephrite", "Emerald Orb"];
	// pity3starweapSword = ['Skyrider Sword', "Cool Steel", "Harbinger of Dawn"];
	// pity3starweapSpear = ['White Tassel', "Halberd", "Black Tassel"];
	// pity3starweapGS = ['Bloodtainted Greatsword', "Debate Club", "Skyrider Greatsword"];
	// pity3starweapBow = ['Raven Bow', "Messenger", "Recurve Bow"];
	// pity_t = [];
	// pity_t.push(pity4starchara, pity4starweapCata);
	
	coun = 0;
	coun_tot = 0;

	function GenerateRandom()
	{
		counter = Math.floor(Math.random() * 101);
		return counter;
	}

	function Selamat()
	{
		kong = "Selamat, Kamu mendapatkan High Rate Item di pity ke-" + panjang;
		document.getElementById('replaceeP').innerHTML = kong;
	}

	function TambahPity()
	{
		item = totalPity[Math.floor(Math.random() * totalPity.length)];

		console.log(item);
		
		// coun++; coun_tot++;
		// counterP = GenerateRandom();
		// pity.push(counterP);
		// panjang = pity.length;
		// document.getElementById('total_count').innerHTML = "Kamu sudah gacha sebanyak: " + coun_tot;

		// if(panjang == 100 && !pity.includes(100)){
		// 	pity.push(100);
		// }

		// if(pity.includes(100)){
		// 	//document.getElementById('disablee').disabled = true ;
		// 	Selamat(panjang);
		// 	pity_c.push(coun);
		// 	console.log();
		// 	pemberitahuan = "Kamu mendapat high rate item pada pity: " + pity_c;
		// 	total_c4 = "Total High Rate Item yang didapatkan: " + pity_c.length;
		// 	document.getElementById('pemberitahuan').innerHTML = pemberitahuan;
		// 	document.getElementById('total_c4').innerHTML = total_c4;
		// 	coun = 0;
		// 	pity = [];
		// }
		// console.log(pity);
	}


</script>
</html>