<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $matricula = $_POST["matricula"];
         $nome = $_POST["nome"];
          $email= $_POST["email"];
          $msg = "";
          echo "matricula: ". $matricula . " nome: " . $nome . "email: " . $email;
          if(!file_exists("alunos.txt")){
            $arqDisc = fopen("alunos.txt", "w") or die("erro");
            $linha = "matricula;nome;email\n";
            fwrite($arqDisc,$linha);
            fclose($arqDisc);
          }
          $arqDisc = fopen("alunos.txt","a") or die("erro");
          $linha = $matricula . ";" . $nome . ";" . $email . "\n";
          fwrite($arqDisc,$linha);
          fclose($arqDisc);
          echo "sucesso";
    }
    ?>