<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="static/style.css">
	</head>
<body>

	<nav>
		<h3 class="text-primary">Previsão do Tempo</h3>
		<a href="login.php">Sair</a>
	</nav>
	<div class="main">

		<div class="principal">
			<h1>Olá!</h1>
	<div class="search-box">
		<form action="home.php" method="post">
			<input type="text" name="cidade" placeholder="Insira sua cidade"> <br>
			<div class="resultados">
				<?php
					$apiKey = "1115cc62ea091ea71348f5b635e0e955";
					$city = $_POST['cidade'];
					$apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";

					$response = file_get_contents($apiUrl);

					if ($response) {
						$data = json_decode($response, true);

						if ($data && isset($data['main'])) {
							$temperature = $data['main']['temp']-273;
							$weather = $data['weather'][0]['description'];

							echo "Previsão do tempo em $city:<br>";
							echo "Temperatura: " . $temperature . "°C<br>";
							echo "Condição: " . $weather;
						} else {
							echo "Não foi possível obter a previsão do tempo.";
						}
					}
					?>
			</div>
			<button type="submit">Procurar</button>
		</form>
	</div>
		</div>
		
		
	</div>
</body>
</html>

