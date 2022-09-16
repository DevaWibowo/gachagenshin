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
		<button id="disablee" style="height: 50px; width: 100px;" onclick="TambahEXP()" value="Kirim" name="TambahPity">Klik</button>
		<!-- <input type="text" name="replacee" id="replacee">
		<p id="replaceeP"></p> -->
	</div>
</body>
<script type="text/javascript">
	var init_exp = 0;
	function tambahEXP()
	{
		exp = init_exp + 100;
	}

	function GenerateRandom()
	{
		counter = Math.floor(Math.random() * 11);
		return counter;
	}

	function Selamat()
	{
		console.log("ANGKA 10 DITEMUKAN");
		console.log("Selamat, Kamu mendapatkan High Rate Item di pity ke-" + panjang);
	}

	function TambahPity()
	{
		coun++;
		console.log(coun);
		counterP = GenerateRandom();
		pity.push(1);
		panjang = pity.length;

		if(panjang == 10 && !pity.includes(10)){
			pity.push(10);
		}
		
		console.log(pity);
		if(pity.includes(10)){
			//document.getElementById('disablee').disabled = true ;
			Selamat(panjang);
			coun = 0;
		}
	}


</script>
</html>