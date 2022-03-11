<html>
<head>
<body bgcolor="#a398a0">
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
</head>
<p><font face="tahoma" size="3" >
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
$baglanti=mysqli_connect("localhost","root","","duyuru");
if(mysqli_connect_errno($baglanti)){echo "veritabanı bağlanti hatası". mysqli_connect_error();}
 
if ($_POST) 
{
	$gecici_ad=$_FILES["resim"]["tmp_name"];
// dosya kendi adıyla upload dizinine kaydedilecek
$kalici_yol_ad="resimler1/".$_FILES["resim"]["name"];

if (file_exists("resimler1/".$_FILES["resim"]["name"])) // yüklenen dosya upload dizininde varsa
   echo "";
else{
      if ($_FILES["resim"]["type"]=="image/jpeg"){
         if (move_uploaded_file($gecici_ad,$kalici_yol_ad)) // eğer dosya kaydedilirse
            echo "Dosya başarı ile yüklendi.";
         else
            echo "Yükleme başarısız!";
      }
      else
         echo "Lütfen jpg resmi seçiniz.";
}
$baslik=$_POST['baslik'];
        $aciklama=$_POST['aciklama'];
		$ekle=mysqli_query($baglanti,"INSERT INTO etkinlik(resim,baslik,aciklama) VALUES ('".$kalici_yol_ad."','$baslik','$aciklama')");
		
		
		if (isset ($ekle)){
echo " ";
}
else {
echo ""."<br>";
}
}

?>
<?php

$baglanti=mysqli_connect("localhost","root","","duyuru");
									
$sql = "select * from etkinlik";

								
if($result = mysqli_query($baglanti, $sql)){
								  
  if(mysqli_num_rows($result) > 0){ #Dönen sorgu boş değilse , uygun formatta ekrana basılıyor..
										
								        
while($row = mysqli_fetch_array($result)){
								        	
echo  "<img src=".$row['resim']." width='500' height='300' alt=''>"."<b> &nbsp;&nbsp;&nbsp;".$row['baslik']."<b> ".$row['aciklama'].""."<br>";
}
 mysqli_free_result($result);
								    
} 
else{
								        
echo "Kayıt bulunamadı.";
																   
 }
								
} else{
								    
echo "Bağlantı hatası $sql. " . mysqli_error($baglanti);
								
}	

?>
