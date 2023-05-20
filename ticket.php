<?php
     echo "<link rel='icon' href='ballena.jpg' type='imagen/icon'>";
    
    $artista=(isset($_POST["artista"])&& $_POST["artista"] !="")? $_POST['artista']:"Falta Variable";
    $boletos=(isset($_POST["boletos"])&& $_POST["boletos"] !="")? $_POST['boletos']:"Falta Variable";
    $recinto=(isset($_POST["recinto"])&& $_POST["recinto"] !="")? $_POST['recinto']:"Falta Variable";
    $correo=(isset($_POST["correo"])&& $_POST["correo"] !="")? $_POST['correo']:"Falta Variable";
    $nombre=(isset($_POST["nombre"])&& $_POST["nombre"] !="")? $_POST['nombre']:"Falta Variable";
    $apellido=(isset($_POST["apellido"])&& $_POST["apellido"] !="")? $_POST['apellido']:"Falta Variable";
    $extras=(isset($_POST["radio2"])&& $_POST["radio2"] !="")? $_POST['radio2']:"Falta Variable";
    $asientos=(isset($_POST["radio"])&& $_POST["radio"] !="")? $_POST['radio']:"Falta Variable";
    $fecha=(isset($_POST["fechayhora"])&& $_POST["fechayhora"] !="")? $_POST['fechayhora']:"Falta Variable";
    for($i=1;$i<=$boletos;$i++){
        if($artista=="DPR")
        {
            echo"<h1 align='center'>Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='dpr.jfif' width='300' height='200'></center>";
                        echo"<center><h2>DPR WE GANG GANG</h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$recinto</h2></center>
                    <center><h3>$asientos</h3></center>";
                    switch ($asientos)
                    {
                        case 'VIP V':
                            echo "<img src='asientos.png' alt='VIP V' width ='200' height= '150'>";
                            break;
                        case 'VIP':
                            echo "<img src='asientos.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'Gradas M':
                            echo "<img src='asientos.png' alt='Gradas M' width ='200' height= '150'>";
                            break;
                        case 'Gradas N':
                            echo "<img src='asientos.png' alt='Gradas N' width ='200' height= '150'>";
                            break;
                        case 'Gradas A';
                            echo "<img src='asientos.png' alt='Gradas A' width='200' height='150'>";
                            break;
                        case 'General A';
                            echo "<img src='asientos.png' alt='General A' width='200' height='150'>";
                            break;
                        case 'General B';
                            echo "<img src='asientos.png' alt='General B' width='200' height='150'>";
                            break;
                    }
                    switch ($recinto)
                {
                    case 'Estadio Azteca':
                        echo "<img src='Estadio Azteca.jfif' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio.jpg' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro sol':
                        echo "<img src='sol.jpg' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$correo</h5>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
     echo "</tbody>";
    echo "</table>";
        }
        if($artista=="BTS")
        {
            echo"<h1 align='center'>Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='bts.jpeg' width='300' height='200'></center>";
                        echo"<center><h2>Life goes on...Borahe</h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$recinto</h2></center>
                    <center><h3>$asientos</h3></center>";
                    switch ($asientos)
                    {
                        case 'VIP V':
                            echo "<img src='asientos.png' alt='VIP V' width ='200' height= '150'>";
                            break;
                        case 'VIP':
                            echo "<img src='asientos.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'Gradas M':
                            echo "<img src='asientos.png' alt='Gradas M' width ='200' height= '150'>";
                            break;
                        case 'Gradas N':
                            echo "<img src='asientos.png' alt='Gradas N' width ='200' height= '150'>";
                            break;
                        case 'Gradas A';
                            echo "<img src='asientos.png' alt='Gradas A' width='200' height='150'>";
                            break;
                        case 'General A';
                            echo "<img src='asientos.png' alt='General A' width='200' height='150'>";
                            break;
                        case 'General B';
                            echo "<img src='asientos.png' alt='General B' width='200' height='150'>";
                            break;
                    }
                    switch ($recinto)
                {
                    case 'Estadio Azteca':
                        echo "<img src='Estadio Azteca.jfif' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio.jpg' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro sol':
                        echo "<img src='sol.jpg' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$correo</h5>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
     echo "</tbody>";
    echo "</table>";
        }
        if($artista=="Natalia Lafourcade")
        {
            echo"<h1 align='center'>Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='nat.jfif' width='300' height='200'></center>";
                        echo"<center><h2>Te quiero de aqui a Marte</h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$recinto</h2></center>
                    <center><h3>$asientos</h3></center>";
                    switch ($asientos)
                    {
                        case 'VIP V':
                            echo "<img src='asientos.png' alt='VIP V' width ='200' height= '150'>";
                            break;
                        case 'VIP':
                            echo "<img src='asientos.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'Gradas M':
                            echo "<img src='asientos.png' alt='Gradas M' width ='200' height= '150'>";
                            break;
                        case 'Gradas N':
                            echo "<img src='asientos.png' alt='Gradas N' width ='200' height= '150'>";
                            break;
                        case 'Gradas A';
                            echo "<img src='asientos.png' alt='Gradas A' width='200' height='150'>";
                            break;
                        case 'General A';
                            echo "<img src='asientos.png' alt='General A' width='200' height='150'>";
                            break;
                        case 'General B';
                            echo "<img src='asientos.png' alt='General B' width='200' height='150'>";
                            break;
                    }
                    switch ($recinto)
                {
                    case 'Estadio Azteca':
                        echo "<img src='Estadio Azteca.jfif' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio.jpg' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro sol':
                        echo "<img src='sol.jpg' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$correo</h5>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
     echo "</tbody>";
    echo "</table>";
        }
        if($artista=="Melanie Martinez")
        {
            echo"<h1 align='center'>Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='mel.jfif' width='300' height='200'></center>";
                        echo"<center><h2>They call me Cry Baby</h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$recinto</h2></center>
                    <center><h3>$asientos</h3></center>";
                    switch ($asientos)
                    {
                        case 'VIP V':
                            echo "<img src='asientos.png' alt='VIP V' width ='200' height= '150'>";
                            break;
                        case 'VIP':
                            echo "<img src='asientos.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'Gradas M':
                            echo "<img src='asientos.png' alt='Gradas M' width ='200' height= '150'>";
                            break;
                        case 'Gradas N':
                            echo "<img src='asientos.png' alt='Gradas N' width ='200' height= '150'>";
                            break;
                        case 'Gradas A';
                            echo "<img src='asientos.png' alt='Gradas A' width='200' height='150'>";
                            break;
                        case 'General A';
                            echo "<img src='asientos.png' alt='General A' width='200' height='150'>";
                            break;
                        case 'General B';
                            echo "<img src='asientos.png' alt='General B' width='200' height='150'>";
                            break;
                    }
                    switch ($recinto)
                {
                    case 'Estadio Azteca':
                        echo "<img src='Estadio Azteca.jfif' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio.jpg' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro sol':
                        echo "<img src='sol.jpg' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$correo</h5>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
     echo "</tbody>";
    echo "</table>";
        }
        if($artista=="Tyler,the Creator")
        {
            echo"<h1 align='center'>Tienes hasta 48 horas antes del evento para recogerlos</h1>";
            echo "<center><table border='2' style; cellpading='20 px'>";
            echo "<thead>
                <tr> <center><h1> ¡Felicidades! </h1> </center> </tr>
            </thead>
                <tbody>
                    <td>
                        <center><h1> $artista </h1> </center>
                        <center><img src='tyl.jpeg' width='300' height='200'></center>";
                        echo"<center><h2>Call me if you get lost</h2></center>";
                
                echo "</td>
                <td>
                    <center><h2>$recinto</h2></center>
                    <center><h3>$asientos</h3></center>";
                    switch ($asientos)
                    {
                        case 'VIP V':
                            echo "<img src='asientos.png' alt='VIP V' width ='200' height= '150'>";
                            break;
                        case 'VIP':
                            echo "<img src='asientos.png' alt='VIP' width ='200' height= '150'>";
                            break;
                        case 'Gradas M':
                            echo "<img src='asientos.png' alt='Gradas M' width ='200' height= '150'>";
                            break;
                        case 'Gradas N':
                            echo "<img src='asientos.png' alt='Gradas N' width ='200' height= '150'>";
                            break;
                        case 'Gradas A';
                            echo "<img src='asientos.png' alt='Gradas A' width='200' height='150'>";
                            break;
                        case 'General A';
                            echo "<img src='asientos.png' alt='General A' width='200' height='150'>";
                            break;
                        case 'General B';
                            echo "<img src='asientos.png' alt='General B' width='200' height='150'>";
                            break;
                    }
                    switch ($recinto)
                {
                    case 'Estadio Azteca':
                        echo "<img src='Estadio Azteca.jfif' alt='estadio' width ='200' height= '150'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo "<img src='palacio.jpg' alt='palacio' width ='200' height= '150'>";
                        break;
                    case 'Foro sol':
                        echo "<img src='sol.jpg' alt='sol' width ='200' height= '150'>";
                        break;
                    case 'Arena ciudad de México':
                        echo "<img src='arena.jfif' alt='arena' width ='200' height= '150'>";
                        break;
                }       
                echo "<span><h5>$nombre  $apellido</h5></span>
                     <h5>$correo</h5>
                     <h5>$extras</h5>";
                echo "</td>";
                echo "</tr>";
     echo "</tbody>";
    echo "</table>";
        }
    }

?>