<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boraticket pro</title>
    <link rel="icon" href="ballena.jpg" type=image/icon>
</head>
<body style="background-color:#D78CED;">
	<center><h1><strong><i>Boraticket Pro</i></strong></h1></center>
	<center>A un click de conocer a tu artista favorito</center>
	<center><img src="cartelera.png"></center>
	<h2>¡Comienza a reservar!</h2>
	<form action="./ticket.php" method="post">
	<fieldset>
		<label>Nombre</label>
		<input type="text" required></input><br>
		<label>Apellido</label>
		<input type="text" required></input><br>
		<label for "Artista">Artista</label>
		<select id="Artista"Artista required>
		<option value="BTS">BTS</option>
		<option value="Melanie Martinez">Melanie Martinez</option>
		<option value="Natalia Lafourcade">Natalia Lafourcade</option>
		<option value="Tyler,the Creator">Tyler,The Creator</option>
		<option value="DPR">DPR</option>
		</select><br>
		<label for "Resinto">Resinto</label>
		<select id="Resinto" required>
		<option value="Estadio Azteca">Estadio Azteca</option>
		<option value="Palacio de los deportes">Palacio de los Deportes</option>
		<option value="Foro sol">Foro sol</option>
		<option value="Arena ciudad México">Arena ciudad México </option>
		</select><br>
		<label>Zona</label><br>
		VIP V
		<input type="radio" name="radio" value="VIP V"><br></br>
		VIP
		<input type="radio" name="radio" value="VIP"><br></br>
		General A
		<input type="radio" name="radio" value="General A"><br></br>
		Genral B
		<input type="radio" name="radio" value="General B"><br></br>
		Gradas N 
		<input type="radio" name="radio" value="Gradas N "><br></br>
		Gradas M
		<input type="radio" name="radio" value="Gradas M"><br></br>
		Gradas A
		<input type="radio" name="radio" value="Gradas A"><br></br>
		Palco
		<input type="radio" name="radio" value="Palco"><br></br>
		<label>Fecha y hora</label>
		<input type="datetime-local"></input><br>
		<label for "Boletos">Cantidad de boletos</label>
		<select id="Boletos" required>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		</select><br>
		<label>Extras</label>
		Boleto+Alimento
		<input type="checkbox" name="check" value="Check OUT" checked><br>
		Estacionamiento
		<input type="checkbox" name="check" value="Ceck IN" checked><br>
		Early entrance
		<input type="checkbox" name="check" value="Check OUT" checked><br>
		<label>Correo electronico</label>
		<input type="email" placeholder="user1Qgmail.com" required><br>
		<button type="submit">Comprar</button>
		<button type="reset">Borrar</button>
</fieldset>
</forms>
    
</body>
</html>