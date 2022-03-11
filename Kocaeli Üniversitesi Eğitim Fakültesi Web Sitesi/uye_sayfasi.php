<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body bgcolor="#a398a0">
<form action="giris.php" method="post">
<?php
session_start();
if(!isset($_SESSION["giris"]))
{
 
echo "Bu sayfayı görüntüleme yetkiniz yoktur.<br>";
header("refresh:2;url=kullanici.html");
 
}
else
 
{
echo "Web sayfanıza hoş geldiniz ".$_SESSION["kullanici"];
header("refresh:2;url=a.html");
}
?>
</html>