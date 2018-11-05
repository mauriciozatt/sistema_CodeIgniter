<?php

include 'conecta.php';
 
$placa =$_POST["placa"];
$ano =$_POST["ano"];
$modelo =$_POST["modelo"];
$cliente =$_POST["cliente"];



$sql = "insert into veiculo(placa,ano,modelo,fkcliente) 
values('$placa','$ano','$modelo','$cliente')";


   if(mysqli_query($con, $sql)){
        redirect('cadastros/cadastroveiculo?resposta=1');
    } else {
    redirect('cadastros/cadastroveiculo?resposta=2');   
    }  
?>




