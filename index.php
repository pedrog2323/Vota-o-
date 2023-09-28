<!DOCTYPE html>
<html>
<head>
    <title>Indicador de idade</title>
</head>
<body>
    <h1>Diga sua Idade</h1>
    <form method="post">
        <label for="idade">Digite a idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
        $idade = $_POST["idade"];
            if($idade < 16 && $idade > 0){
                echo "não pode votar";
            }
            if($idade >= 16 && $idade <= 18) {
                echo "voto facultativo";
            }
            if($idade >= 19 && $idade <= 65){
                echo "voto obrigatório";
            }
            if($idade >= 66){
                echo "voto facultativo";
            }
            else {
                echo "não é uma idade";
            }
        
    ?>


</body>
</html>