<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
error_reporting(0);
$hostname_connection = "localhost";
$database_connection = "etkinlikler";
$username_connection = "root";
$password_connection = "";
$connection = mysql_pconnect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php
mysql_select_db($database_connection, $connection);
$query_rsEtkinlikler = "SELECT * FROM takvim";
$rsEtkinlikler = mysql_query($query_rsEtkinlikler, $connection) or die(mysql_error());
$row_rsEtkinlikler = mysql_fetch_assoc($rsEtkinlikler);
$totalRows_rsEtkinlikler = mysql_num_rows($rsEtkinlikler);
header('Content-type: text/json');
echo '[';
$separator = "";
$days = 16;
do{

$times = strtotime($row_rsEtkinlikler['etkinlik_tarih']);
$timestamp = $times * 1000 ;

	echo '	{ "date": "' ; echo $timestamp ; echo '",
	"type": "", 
	"title": "' ; echo $row_rsEtkinlikler['etkinlik_adi']; echo"<br>";  echo '" , 
	"description":"' ; echo $row_rsEtkinlikler['etkinlik_aciklama'];echo '", "url":"' ;
	echo "http://" .$row_rsEtkinlikler['etkinlik_link']. "";echo '" },';
	
}while ($row_rsEtkinlikler = mysql_fetch_assoc($rsEtkinlikler));
	
	
	
	
	
	
	
	
	

for ($i = 1 ; $i < $days; $i= 1 + $i * 2) {
	echo $separator;
	$initTime = 0;


	echo '	{ "date": "'; echo $initTime-7200000; echo '", "type": "meeting", "title": "Deneme '; echo $i; echo ' Brainstorming", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },';
	
	echo '	{ "date": "'; echo $initTime+10800000-2592000000; echo '", "type": "test", "title": "A very very long name for a f*cking project '; echo $i; echo ' events", "description": "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.", "url": "http://www.event11.com/" }';
	$separator = ",";
}
echo ']';

mysql_free_result($rsEtkinlikler);
?>
