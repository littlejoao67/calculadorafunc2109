<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 2.0</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<!-- pintei o body de azul porque sim -->

<body class="bg-primary">
    <!-- caixa simples branca no meio da tela azul -->
    <div class="primarybox p-4 position-absolute top-50 start-50 translate-middle">
        <h2>Calculadora 2.0 do João Henrique :)</h2>

        <!-- as duas caixas de entrada dos numeros -->
        <form action="resultado.php" method="post">

            <div class="mt-3">
                <label for="num1">Numero 1</label>
                <!-- ADICIONADO: name="num1" -->
                <input type="number" id="num1" name="num1" class="mt-5" required>
            </div>
            <div class="mt-3">
                <label for="num2">Numero 2</label>
                <!-- ADICIONADO: name="num2" -->
                <input type="number" id="num2" name="num2" class="mt-3" required>
            </div>
            
            <input class="col-2 mt-5" type="submit" name="operacao" value="+"> 
            <input class="col-2 mt-5" type="submit" name="operacao" value="-"> 
            <input class="col-2 mt-5" type="submit" name="operacao" value="/"> 
            <input class="col-2 mt-5" type="submit" name="operacao" value="*">
        </form>
    </div>

</body>

</html>
