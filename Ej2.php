<!DOCTYPE html>
<html>
<head>
    <title> EJERCICIO2 </title>
</head>
<body>
    <h4> EJERCICIO 2 </h4>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST ["num"];
    }

    while ($num > 1) {
    if ($num%2==0){
        $num = $num / 2;
    } else {
        $num = ($num * 3) + 1;
    }
    }

    echo $num;

    ?>
    
    <form method="POST" action="">
        <label for="num"> NÚMERO: </label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>