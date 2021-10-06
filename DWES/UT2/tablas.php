<!-- -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

    <?php 
        $filosofos = array("Platón", "Arístoteles", "Heráclito", "Pitágoras", "Anaxágoras");
        $webs = array("https://es.wikipedia.org/wiki/Platón", "https://es.wikipedia.org/wiki/Aristóteles", "https://es.wikipedia.org/wiki/Heráclito", "https://es.wikipedia.org/wiki/Pitágoras", "https://es.wikipedia.org/wiki/Anaxágoras");

    ?>

<body>
    <table border="1">
        <tr>
            <th>POSICION</th>
            <th>FILOSOFOS</th>
        </tr>
        <?php    
            for ($i=0; $i<sizeof($webs) ;$i++){
                echo    "<tr>";
                echo        "<td>".$i."</td>";
                echo        "<td><a href=".$webs[$i].">".$nomweb[$i]."</a></td>";
                echo    "</tr>";
            } 
        ?>
    </table>
</body>

</html>
