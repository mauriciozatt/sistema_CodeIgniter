<?php

include 'conecta.php';
 
$nome =$_POST["nome"];
$estado =$_POST["estado"];
$uf =$_POST["uf"];




$sql = "insert into cidade(nome,estado,uf) 
values('$nome','$estado','$uf' )";
if(mysqli_query($con, $sql)){
redirect('cadastros/cadastromunicipio?resposta=1');
}
redirect('cadastros/cadastromunicipio?resposta=2');  

   
?>
