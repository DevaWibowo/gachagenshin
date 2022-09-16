<?php 
include "TogelView.php";

if(!isset($_POST['kirim'])){
    header("location:TogelView.php");
}

$tipe = $_POST['tipeAngka'];
//echo $tipe;

if($tipe == "angka2"){
    $r = rand(1, 10);
    $currency -= 2000;
    $menang = 5000;
}else if($tipe == "angka3"){
    $r = rand(100, 999);
    $currency -= 5000;
    $menang = 20000;
}else if($tipe == "angka4"){
    $r = rand(1000, 9999);
    $currency -= 10000;
    $menang = 100000;
}

echo "Angka Bandar: " . $r . "<br>";

$angka_user = $_POST['nomor2'];
echo "Angka tebakan: " . $angka_user . "<br>";

if($r == $angka_user){
    echo "Selamat, Anda mendapatkan 5jeti" . "<br><br>";
    $currency += $menang;
}else{
    echo "Yahh, Kamu kalahhh:(" . "<br><br>";
}

echo "Uang saat ini: " . $currency . "<br>";
 ?>