<?php

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = 0;

        function multiplicacao($num1, $num2){
            $resultado= $num1 * $num2;
            echo "<h3>Resultado da multiplicação: $resultado </h3>";
        }
?>