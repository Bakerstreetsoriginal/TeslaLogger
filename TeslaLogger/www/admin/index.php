﻿<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD
	<link rel="stylesheet" href="https://teslalogger.de/teslalogger_style.css">
    <title>Teslalogger Config V1.1</title>
=======
    <title>Teslalogger Config V1.2</title>
>>>>>>> 8e1b602668f2d2f6aded1a5b3989dd7ed72efe02
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="http://teslalogger.de/teslalogger_style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "button" ).button();
	$("#name").val("Hallo");
  } );
  
  function BackgroudRun($target)
  {
	  $.ajax($target, {
		data: {
			id: ''
		}
		})
		.then(
		function success(name) {
			alert('Reboot!');
		},
		function fail(data, status) {
			alert('Reboot!');
		}
	);
  }
  </script>
  </head>
  <body>
  <div style="background-color: #fff;">
  <button onclick="window.location.href='logfile.php';">Logfile</button>
  <button onclick="BackgroudRun('restartlogger.php');">Restart</button>
  <button onclick="BackgroudRun('update.php');">Update</button>
  <button onclick="window.location.href='backup.php';">Backup</button>
  <button onclick="window.location.href='geofencing.php';">Geofence</button>
  <button onclick="window.location.href='/wakeup.php';">Wakeup</button>
  
<<<<<<< HEAD
  <br><br>
 <div id="content">
 <?PHP
 echo file_get_contents('https://teslalogger.de/teslalogger_content_index.php');
 ?>
  </div>
  </div>
=======

  <div id="content">
  <h1>Fahrzeuginfo:</h1>
  <?PHP
  echo(file_get_contents("http://teslalogger.de/teslalogger_content_index.php"));
  ?>
  </div>
  <br><br>	
>>>>>>> 8e1b602668f2d2f6aded1a5b3989dd7ed72efe02
  </body>
</html>