 <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $a = $_POST["a"];
                $b = $_POST["b"];
                $operador = $_POST["operador"];
                $resultado = 0;
                if ($operador == "soma"){
                    $resultado = $a + $b;
                } else if ($operador == "subtracao"){
                    $resultado = $a - $b;
                } else if ($operador == "multiplicacao"){
                    $resultado = $a * $b;
                } else if ($operador == "divisao"){
                    $resultado = $a / $b;
                } else if ($operador == "potencia"){
                    $y = $a;
                    for($x = $b; $x > 1; $x--){
                        $y = $y * $a;
                    }
                    $resultado = $y;
                } else {
                    $erro = "operador não encontrado";
                }
            } ?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Calculadora PHP</h1>

        <form method='POST' action='calculadora.php'>
            a:<input type=text name='a'><br>
            b:<input type=text name='b'>
            <br>Operação:
            <br><input type="radio" name="operador" value="soma"> Soma
            <br><input type="radio" name="operador" value="subtracao"> Subtração
            <br><input type="radio" name="operador" value="multiplicacao"> Multiplicação
            <br><input type="radio" name="operador" value="divisao"> Divisão
            <br><input type="radio" name="operador" value="potencia"> Potência
            <br>
            <input type=submit value='Calcular'>
            <br>
           <?php 
           if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo 'Resultado: ' . $resultado;
           }
           ?>
    </body>
</html>