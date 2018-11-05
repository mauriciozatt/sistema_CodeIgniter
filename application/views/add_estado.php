<?php

include 'conecta.php';
 

$nome =$_POST["nome"];
$uf =$_POST["uf"];

$sql = "insert into estado(nome,uf) 
values('$nome','$uf')";



if(mysqli_query($con, $sql)){
      redirect('cadastros/cadastroestado?resposta=1');
    } else {
   redirect('cadastros/cadastroestado?resposta=2');     
    }
                   
?>
