<?php

	$Usuari = $_POST["InputUser"];
	$Contrasenya = $_POST["InputPassword"];

	$Connection = mysqli_connect("127.0.0.1:3306", "Dencina", "P@ssw0rd", "MP07");
	$Query = "SELECT User, Password, Name FROM Users WHERE User = '".$Usuari."' AND Password = '".$Contrasenya."';";
	$Result = mysqli_query($Connection, $Query);

	echo $Query;
	echo "<br>";
	if (mysqli_num_rows($Result)) {
		if ($Result = 1) {
			echo "<label style='background-color: green; color: white;'>Conectat!</label>";
		} else {
			echo "<label style='background-color: red; color: white;'>Incorrecte!</label>";	
		}
	}
	
	mysqli_close($Connection);
?>