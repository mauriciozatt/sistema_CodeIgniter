<?php

include 'conecta.php';
 

$cliente =$_POST["cliente"];
$data =$_POST["data"];
$forma =$_POST["forma"];
$total =$_POST["total"];

$sql = "insert into vendas(data, total,fkformapagamento, fkcliente) 
values('$data','$total', '$forma', '$cliente')";



if(mysqli_query($con, $sql)){
      redirect('venda/cadastrovendas?resposta=1');
    } else {
   redirect('venda/cadastrovendas?resposta=2');     
    }
                   
?>
