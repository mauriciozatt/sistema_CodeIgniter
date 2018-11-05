<?php

include 'conecta.php';
 

$nome =$_POST["nome"];
$valor=$_POST["valor"];

$sql = "insert into produto(nome,valor) 
values('$nome','$valor')";



if(mysqli_query($con, $sql)){
      redirect('cadastros/cadastroproduto?resposta=1');
    } else {
   redirect('cadastros/cadastroproduto?resposta=2');     
    }
                   
?>
