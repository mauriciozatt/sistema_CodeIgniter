<?php

include 'conecta.php';
 
$nome =$_POST["nome"];
$idade =$_POST["idade"];
$cidade =$_POST["cidade"];
$estado =$_POST["estado"];
$pais =$_POST["pais"];





$sql = "insert into teste(nome,idade,cidade,estado,pais) 
values('$nome','$idade','$cidade','$estado','$pais')";

if(mysql_query($sql)){
redirect('cadastros/teste?resposta=1');
}

redirect('cadastros/teste?resposta=2');
  
   

?>
