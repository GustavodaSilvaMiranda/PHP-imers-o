<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $num1 = 3;
    $num2 = 2;
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $divisao = $num1 / $num2;
    $resto = $num1 % $num2;
    echo "<table border='1'>";
    echo "<tr>";
        echo "<td>".$num1."+".$num2."=</td>";
        echo "<td>".$soma."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$num1."-".$num2."=</td>";
        echo "<td>".$subtracao."</td>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>".$num1."/".$num2."=</td>";
        echo "<td>".$divisao."</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>".$num1."%".$num2."=</td>";
        echo "<td>".$resto."</td>";
    echo "</tr>";

    echo"<table>";
        
?>
<?php
    echo "<br><br>";
    echo "<a href='PHP-variables-main\index.php'>voltar</a>";
?>
    
</body>
</html>