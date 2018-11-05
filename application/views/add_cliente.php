<?php

include 'conecta.php';
 
$nome =$_POST["nome"];
$cpf =$_POST["cpf"];
$logradouro =$_POST["bairro"];
$datanascimento =$_POST["datanascimento"];


$sql = "insert into cliente(nome,cpf,logradouro,datanascimento) 
values('$nome','$cpf','$logradouro','$datanascimento')";

   if(mysqli_query($con, $sql)){
        redirect('cadastros/cadastrocliente?resposta=1');
    } else {
 redirect('cadastros/cadastrocliente?resposta=2');      
    }
?>
