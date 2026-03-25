<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sigla = $_POST["sigla"];
    $nome = $_POST["nome"];
    $carga = $_POST["carga"];
    echo "sigla: " . $sigla . "nome" . $nome . "carga" . $carga;

if(!file_exists("disciplinas.txt")){
    $arqDisc = fopen("disciplinas.txt", "w") or die("erro");
    $line = "sigla;nome;carga\n";
    fwrite($arqDisc,$line);
    fclose($arqDisc);
}
 $arqDisc = fopen("disciplinas.txt", "a") or die("erro 2");
 $line = $sigla . ";" . $nome . ";" .$carga . "\n";
 fwrite($arqDisc,$line);
 fclose($arqDisc);
}
?>

<!DOCTYPE html>
    <html>
    <head></head>
    <body>
        <h1>inserir disciplina</h1>
        <form action = "Incluir.php" method="POST">
            <input type="text" name = "sigla">
            <br>
            <input type="text" name = "nome">
            <br>
            <input type="text" name = "carga">
            <br>
            <input type="submit" value="disc">
</form>
    </body>
    </html>