<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
<form method="post">
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Chess<span>Registration</span></div>
		</div>
		<br>
		<div class="login">
			<input type="text" placeholder="username" name="username"><br>
			<input type="password" placeholder="password" name="password"><br>
			<input type="submit" name="submit" value="Register">
			
		
			<?php
			include_once 'config.php';
			if(isset($_POST['submit'])){
				
				//Gjøre om POST-data til variabler
				$brukernavn = $_POST['username'];
				$passord = $_POST['password'];
				
				//Gjøre klar SQL-strengen
				$query = "INSERT INTO users VALUES ('$brukernavn','$passord')";
				
				//Utføre spørringen
				$result = mysqli_query($dbc, $query)
				or die('Error querying database.');
				
				//Koble fra databasen
				mysqli_close($dbc);

				//Sjekke om spørringen gir resultater
				if($result){
					//Gyldig login
					echo "Takk for at du lagde bruker! Trykk <a href='login.php'>her</a> for å logge inn";
				}else{
					//Ugyldig login
					echo "Noe gikk galt, prøv igjen!";
				}
			}
		?>
		</div>
</body>
</html>