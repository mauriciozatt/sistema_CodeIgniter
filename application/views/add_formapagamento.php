<?php

include 'conecta.php';
 
$nome =$_POST["nome"];


$sql = "insert into formapagamento(nome) 
values('$nome')";



if(mysqli_query($con, $sql)){
      redirect('cadastros/cadastroformapagamento?resposta=1');
    } else {
redirect('cadastros/cadastroformapagamento?resposta=2');     
    }
                   
?>
