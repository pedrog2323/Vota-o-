<!DOCTYPE html>
<html>
<head>
    <title>Indicador de idade</title>
</head>
<body>
    <!-- parte do envio da idade !-->
    <h1>Diga sua Idade</h1>
    <form method="post">
        <label for="idade">Digite a idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
    <!-- lógica -->
    <?php
    // recebimento dos dados da caixa de números//
        $idade = $_POST["idade"];
            if($idade < 16 && $idade > 0){
                echo "não pode votar";
            }
            else if($idade >= 16 && $idade <= 18) {
                echo "voto facultativo";
            }
            else if($idade >= 19 && $idade <= 65){
                echo "voto obrigatório";
            }
            else if($idade >= 66){
                echo "voto facultativo";
            }
            //resto 
            else {
                echo "não é uma idade";
            }
        
    ?>


</body>
</html>