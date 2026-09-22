<?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = 0;

        function multiplicacao($num1, $num2){
            $resultado= $num1 * $num2;
            return $resultado;
        }

        function adicao($num1, $num2){
            $resultado= $num1 + $num2;
            return $resultado;
        }

        function subtracao($num1, $num2){
            $resultado= $num1 - $num2;
            return $resultado;
        }

        function divisao($num1, $num2){
            $resultado= $num1 / $num2;
            return $resultado;
        }

    if ($operacao == "*"){
        $resultado = multiplicacao($num1, $num2);
        echo "<h2>Sua multiplicação deu: $resultado </h2>";
    }


    if ($operacao == "+"){
        $resultado = adicao($num1, $num2);
        echo "<h2>Sua adição deu: $resultado </h2>";
    }

    
    if ($operacao == "-"){
        $resultado = subtracao($num1, $num2);
        echo "<h2>Sua subtração deu: $resultado </h2>";
    }

    
    if ($operacao == "/"){
        $resultado = divisao($num1, $num2);
        echo "<h2>Sua divisão deu: $resultado </h2>";
    }
?>