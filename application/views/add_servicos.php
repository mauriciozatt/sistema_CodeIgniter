<?php

include 'conecta.php';
 

$nome =$_POST["nome"];
$valor=$_POST["valor"];

$sql = "insert into servicos(nome,valor) 
values('$nome','$valor')";



if(mysqli_query($con, $sql)){
      redirect('cadastros/cadastroservicos?resposta=1');
    } else {
  redirect('cadastros/cadastroservicos?resposta=2');     
  //echo $sql;
    }
                   
?>
