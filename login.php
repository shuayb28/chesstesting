
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
<form method="post">
    <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Chess<span>Login</span></div>
		</div>
		<br>
		<div class="login">
			<div>Klikk <a href="registration.php">her</a> for å lage ny bruker
			<input type="text" placeholder="username" name="username"><br>
			<input type="password" placeholder="password" name="password"><br>
			<input type="submit" name="submit" value="Login">
		
			<?php
			include_once 'config.php';
			if(isset($_POST['submit'])){
				
				//Gjøre om POST-data til variabler
				$brukernavn = $_POST['username'];
				$passord = $_POST['password'];
				
				//Gjøre klar SQL-strengen
				$query = "SELECT username, password from users where username='$brukernavn' and password='$passord'";
				
				//Utføre spørringen
				$result = mysqli_query($dbc, $query)
				or die('Error querying database.');


				
				//Koble fra databasen
				mysqli_close($dbc);

				//Sjekke om spørringen gir resultater
				if($result->num_rows > 0){

					//Gyldig login
					session_start();
					$_SESSION['username'] = $brukernavn;
					$_SESSION['password'] = $passord;
					header('location: index.php');

				}else{
					//Ugyldig login
					echo "Feil brukernavn eller passord";
				}
			}
		?>
		</div>
</body>
</html>