﻿<!DOCTYPE html>
<!-- Author: Scott Grivner -->
<!-- Website: scottgrivner.dev -->
<!-- Abstract: Audit Dashboards -->
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Audit Dashboards</title>
	<link rel="icon" type="image/png" href="images/favicon.ico">
	<style type="text/css">
		body {
			text-align: center;
			background-color: #E5E4E2;
			overflow: hidden;
			width: 100%;
			height: 100%;
		}

		.count {
			font-size: 36pt;
			left: 73%;
			top: 14%;
			transform: translate(-50%, -50%);
			-webkit-transform: translate(-50%, -50%);
			text-align: center;
			background-color: #FFFFFF;
			border-collapse: collapse;
			border-style: solid;
			border-color: #E5E4E2;
			position: absolute;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);


		}

		.table_A {
			text-align: center;
			position: absolute;
			width: 100%;
			height: 100%;
			left: 1%;
			top: 30%;
			border-collapse: collapse;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);

		}

		.table_B {
			text-align: center;
			width: 100%;
			height: 100%;
			left: 51%;
			top: 30%;
			position: absolute;
			border-collapse: collapse;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);

		}

		.table_C {
			text-align: center;
			position: absolute;
			width: 100%;
			height: 100%;
			left: 1%;
			top: 65%;
			border-collapse: collapse;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);

		}

		.table_D {
			text-align: center;
			position: absolute;
			width: 100%;
			height: 100%;
			left: 51%;
			top: 65%;
			border-collapse: collapse;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);

		}

		.update {
			text-align: center;
			width: 20%;
			height: 20%;
			position: absolute;
			left: 20%;
			top: 1%;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);

		}

		.logo {
			text-align: center;
			width: 15%;
			height: 21%;
			position: absolute;
			left: 1%;
			top: 1%;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);

		}

		.service {

			font-size: 36pt;
			left: 32%;
			top: 14%;
			transform: translate(-50%, -50%);
			-webkit-transform: translate(-50%, -50%);
			text-align: center;
			background-color: #FFFFFF;
			border-collapse: collapse;
			border-style: solid;
			border-color: #E5E4E2;
			position: absolute;
			-webkit-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			-moz-box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);
			box-shadow: 10px 10px 10px 0px rgba(50, 50, 50, 0.75);

		}

		.table,
		th,
		td {
			border: 1px #E5E4E2;
			border-collapse: collapse;



		}

		th,
		td {
			padding: 10px;
			border: 3px solid blue;
			border-color: #E5E4E2 #E5E4E2;
		}

		.no-js #loader {
			display: none;
		}

		.js #loader {
			display: block;
			position: absolute;
			left: 100px;
			top: 0;
		}
	</style>
	<script type="text/javascript" src="jquery-1.11.2.min.js"></script>

	<script>
		// Create a refresh function:
		function refresh() {
			// SHOW overlay
			$('#overlay').show();
			// Retrieve data:
			$.ajax({
				url: "Audit_Dashboard_Demo.php",
				context: document.body,
				success: function(s, x) {
					$(this).html(s);
					$('#overlay').hide();
				}
			});
		}

		$(document).ready(function() {
			// Create overlay and append to body:
			$('<div id="overlay"/>').css({
				position: 'fixed',
				top: 0,
				left: 0,
				width: '100%',
				height: $(window).height() + 'px',
				//opacity:0.4, 
				//background: 'lightgray url(http://localhost/Audit Dashboards/loading.gif) no-repeat center'
			}).hide().appendTo('body');

			// Execute refresh with interval:
			setTimeout(refresh, 60000);
			//setInterval(refresh, 60000);

		});
	</script>
	<!--<meta http-equiv="refresh" content="6">-->
</head>

<body>
	<div class="logo" style="width:230px; height:238px; overflow:auto; text-align: center; position: center;">
		<img src="logo.png" />
		<br>
		<font face='Verdana, Arial, Helvetica' color="#000000"><b>London, Europe</b></font><br>
		<?php
		date_default_timezone_set('Europe/London');
		//$Date =date('m/d/Y h:i A');
		$date = date('m/d/Y');
		$time = date('h:i A');
		print "<tr>";
		print "  <td align=\"center\"><font face='Verdana, Arial, Helvetica'size='3' color='black'>" . $date . " " . $time . "</font></span></td>";
		print "</tr>";
		?>
		<br>
		<font face='Verdana, Arial, Helvetica' color="#000000"><b>New York, US</b></font><br>
		<?php
		date_default_timezone_set('America/New_York');
		//$Date =date('m/d/Y h:i A');
		$date = date('m/d/Y');
		$time = date('h:i A');
		print "<tr>";
		print "  <td align=\"center\"><font face='Verdana, Arial, Helvetica'size='3' color='black'>" . $date . " " . $time . "</font></span></td>";
		print "</tr>";
		?>
		<br>
		<font face='Verdana, Arial, Helvetica' color="#000000"><b>GMT</b></font><br>
		<?php
		date_default_timezone_set('GMT');
		//$Date =date('m/d/Y h:i A');
		$date = date('m/d/Y');
		$time = date('h:i A');
		print "<tr>";
		print "  <td align=\"center\"><font face='Verdana, Arial, Helvetica'size='3' color='black'>" . $date . " " . $time . "</font></span></td>";
		print "</tr>";
		?>
	</div>


	<br>
	<!-- Counts -->
	<div class="count">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='5' color="white">Table A</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='5' color="white">Table B</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='5' color="white">Table C</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='5' color="white">Table D</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='5' color="white">Table E</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='5' color="white">Table F</font>
				</th>

			</tr>

			<?php
			//error_reporting(0);
			function getColor($n)
			{

				// Is number 0?
				if ($n == 0) return "green";

				// Is number between 1 and 5?
				if ($n >= 1 && $n <= 7) return "yellow";

				// Is number between 6 and 10?
				if ($n >= 8 && $n <= 12) {
					$file = 'ding.wav';
					return "orange";
				}

				// Is number greater than 11
				if ($n >= 13) {
					return "red";
				}

				// Return default (black) for all other numbers
				return "green";
			}

			//Set Colors
			$color1 = getColor("1");
			$color2 = getColor("10");
			$color3 = getColor("4");
			$color4 = getColor("3");
			$color5 = getColor("36");
			$color6 = getColor("0");

			//Display Results
			print "<tr>";
			print "  <td style=\"background-color:$color1;\" align=\"center\"><font face='Verdana, Arial, Helvetica'size='8' color='black'><b>" . "1" . "</font></span></td>";
			print "  <td style=\"background-color:$color2;\" align=\"center\"><font face='Verdana, Arial, Helvetica'size='8' color='black'><b>" . "10" . "</font></span></td>";
			print "  <td style=\"background-color:$color3;\" align=\"center\"><font face='Verdana, Arial, Helvetica'size='8' color='black'><b>" . "4" . "</font></span></td>";
			print "  <td style=\"background-color:$color4;\" align=\"center\"><font face='Verdana, Arial, Helvetica'size='8' color='black'><b>" . "3" . "</font></span></td>";
			print "  <td style=\"background-color:$color5;\" align=\"center\"><font face='Verdana, Arial, Helvetica'size='8' color='black'><b>" . "36" . "</font></span></td>";
			print "  <td style=\"background-color:$color6;\" align=\"center\"><font face='Verdana, Arial, Helvetica'size='8' color='black'><b>" . "0" . "</font></span></td>";
			print "</tr>";

			?>
		</table>
	</div>
	<div class="table_A" style="width:767px; height:300px; overflow:auto; text-align: center; position: center;">
		<table cellspacing="0" cellpadding="0" border="0" width="767" bgcolor=#FFFFFF>
			<tr>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 1</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 2</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 3</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 4</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 5</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 6</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 7</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 8</font>
				</th>
			</tr>

			<?php

			print "<tr>\n";
			print "  <td colspan='8' align=\"center\"><font face='Verdana, Arial, Helvetica'size='2' color='green'><b>" . 'No Records' .
				"</b></font>\n";
			print "</tr>\n";

			?>
		</table>
	</div>

	<div class="table_B" style="width:767px; height:300px; overflow:auto; text-align: center; position: center;">


		<table cellspacing="0" cellpadding="0" border="0" width="767" bgcolor=#FFFFFF>
			<tr>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 1</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 2</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 3</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 4</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 5</font>
				</th>
			</tr>

			<?php


			print "<tr>\n";
			print "  <td colspan='5' align=\"center\"><font face='Verdana, Arial, Helvetica'size='2' color='green'><b>" . 'No Records' . "</b></font>\n";
			print "</tr>\n";

			?>

		</table>
	</div>

	<div class="table_C" style="width:767px; height:300px; overflow:auto; text-align: center; position: center;">
		<table cellspacing="0" cellpadding="0" border="0" width="767px" bgcolor=#FFFFFF>
			<tr>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 1</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 2</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 3</font>
				</th>
			</tr>

			<?php

			print "<tr>\n";
			print "  <td colspan='3' align=\"center\"><font face='Verdana, Arial, Helvetica'size='2' color='green'><b>" . 'No Records' .
				"</b></font>\n";
			print "</tr>\n";

			?>
		</table>
	</div>
	<div class="table_D" style="width:767px; height:300px; overflow:auto; text-align: center; position: center;">
		<table cellspacing="0" cellpadding="0" border="0" width="767px" bgcolor=#FFFFFF>
			<tr>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 1</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 2</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Column 3</font>
				</th>
			</tr>

			<?php

			print "<tr>\n";
			print "  <td colspan='3' align=\"center\"><font face='Verdana, Arial, Helvetica'size='2' color='green'><b>" . 'No Records' .
				"</b></font>\n";
			print "</tr>\n";

			?>
		</table>
	</div>

	<div class="service" style="width:300px; height:165px; overflow:auto; text-align: center; position: center;">
		<table cellspacing="0" cellpadding="0" border="0" width="300" bgcolor=#FFFFFF>
			<tr>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Service 1</font>
				</th>
				<th bgcolor="#000000">
					<font face='Verdana, Arial, Helvetica' size='2' color="white">Service 2</font>
				</th>
			</tr>

			<?php


			print "<tr>\n";
			print "  <td><font face='Verdana, Arial, Helvetica'size='2' color='green'><b>" . "Running" .  "</b></font>\n";
			print "  <td><font face='Verdana, Arial, Helvetica'size='2' color='red'><b>" . "Not Running" . "</b></font>\n";
			print "</tr>\n";

			?>
		</table>
	</div>
</body>

</html>