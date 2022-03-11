<?php
session_start();
$kullanici_adi=$_POST["kullanici_adi"];
$sifre=$_POST["sifre"];
$baglanti=mysqli_connect("localhost","root","","uyeler");
if(mysqli_connect_errno($baglanti)) { echo "veritabanı bağlantı hatası".mysqli_connect_error(); }
$sorgu="select kullanici_adi,sifre from tablo where kullanici_adi='$kullanici_adi' and sifre='$sifre'";	
$sonuc=$baglanti->query($sorgu);
if($sonuc->num_rows>0)
{
	$_SESSION["giris"] = "true";
	$_SESSION["kullanici"] = $kullanici_adi;
	$_SESSION["sifre"] = $sifre;
	
	header("Location:uye_sayfasi.php");
}
else { echo "Bu sayfayı görüntüleme yetkiniz yoktur"; }
header("refresh:2;url=kullanici.html");
mysqli_close($baglanti);
?>