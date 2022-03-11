<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>jQuery Event Calendar Demo Page</title>
	<link rel="shortcut icon" href="images/favicon.ico" />

	<!-- Grid CSS File (only needed for demo page) -->
	<link rel="stylesheet" href="css/paragridma.css">

	<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
	<link rel="stylesheet" href="css/eventCalendar.css">

	<!-- Theme CSS file: it makes eventCalendar nicer -->
	<link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">

	<!--<script src="js/jquery.js" type="text/javascript"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

</head>
<body id="responsiveDemo" style="width: 320px; margin-bottom:-20px;" >
	<hr />
	<div class="container" ></div>
	<div class="container">
		<div class="row">
		  <div class="g4" style="width: 320px; margin-left:-70px ;margin-top:-50px"  >
			<div id="eventCalendarLocale"></div>
			<script>
				$(document).ready(function() {
					$("#eventCalendarLocale").eventCalendar({
						eventsjson: 'json/events.json.php',
						 moveSpeed: 2000,
  						moveOpacity: 1,
						monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
							"Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
						dayNames: [ 'Pazar','Pazartesi','Salı','Çarşamba','Perşembe',
							'Cuma','Cumartesi' ],
						dayNamesShort: [ 'Pzr','Pzt','Sal','Çar','Per', 'Cum','Cts' ],
						txt_noEvents: "Etkinlik Yok",
						txt_SpecificEvents_prev: "",
						txt_SpecificEvents_after: "Etkinlikler:",
						txt_next: "İleri",
						txt_prev: "Geri",
						txt_NextEvents: "Sonraki Etkinlik:",
						txt_GoToEventUrl: "Etkinliğe Git"
					});
				});
			</script>

			</div>
		</div>
	</div>
	<div class="container"></div>
	<div class="container"></div>
	<div class="container"></div>

	<div class="container"></div>

	<div class="container"></div>
    
</body>

<!--script src="js/jquery.timeago.js" type="text/javascript"></script-->
<!--<script src="js/jquery.eventCalendar.min.js" type="text/javascript"></script>-->
<script src="js/jquery.eventCalendar.js" type="text/javascript"></script>




</html>