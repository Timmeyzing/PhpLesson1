<html>
	<head>
		<title> Familie </title>
	</head>
	<body>
		<h1 style="color:red;font-size:100px;text-align:center;"> Familie </h1>
		<?php
			echo "Hallo Welt, es ist der ";
			
			$timeget = time();
			$datum = date("d.m.Y ",$timeget);
			
			echo "<span style=\"color:green;\">".$datum."</span>";
			echo "und wir haben es ";
			
			$timeget = time();
			$uhrzeit = date("H:i:s ",$timeget); 
			echo "<span style=\"color:green;\">".$uhrzeit."</span>"; 
			
			mysql_connect("localhost","root","")
			or die ("Keine Verbindung zum Server!");
			
			mysql_select_db ("familie");
			
			$result=mysql_query ("SELECT * FROM person");
			
			while($row=mysql_fetch_object($result)) {
				echo "</br>$row->Vorname ";
				echo "$row->Nachname ";
				echo "$row->Alter";
			}
		?>
	</body>
</html>
