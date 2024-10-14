<!DOCTYPE html>
<html>
<head>
    <title> EJERCICIO1 </title>
</head>
<body>
    <h4> EJERCICIO 1 </h4>
    
    <?php
    
        $total = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $paquetes = $_POST ["paquetes"];
            $tamano = $_POST ["tamano"];
            $peso = $_POST ["peso"];
            $zona = $_POST ["zona"];
        }

        if ($tamano <= 5) {
            $total = $total + 50;
        } elseif ($tamano < 10) {
            $total = $total + 75;
        } elseif ($tamano >= 10) {
            $total = $total + 100;
        }

        if ($peso < 5) {
            $total = $total;
        } elseif ($peso >= 10) {
            $total = $total + ($total * 25 / 100);
        } elseif ($peso >= 10) {
            $total = $total + ($total * 50 / 100);
        } if ($peso > 15) {
            $total = 0;
        }
    
        if ($zona == 'Peninsula') {
            $total = $total;
        } elseif ($zona == 'BalearesMaritimo') {
            $total = $total;
        } elseif ($zona == 'BalearesAereo') {
            $total = $total + ($total * 10 / 100);
        } elseif ($zona == 'Canarias') {
            $total = $total + ($total * 10 / 100);
        }
        
        $total = $paquetes * $total;
        echo "$total €";
    ?>
    
    <form method="POST" action="">
        <label for="paquetes"> PAQUETES: </label>
        <input type="number" id="paquetes" name="paquetes" value="$paquetes">
        <label for="tamano"> TAMAÑO: </label>
        <input type="number" id="tamano" name="tamano" value="$tamano">
        <label for="peso"> PESO: </label>
        <input type="number" id="peso" name="peso" value="$peso">
        <label for="zona"> ZONA: </label>
        <input id="zona" name="zona" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>