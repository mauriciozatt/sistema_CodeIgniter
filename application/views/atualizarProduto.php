<?php
include "conecta.php";
$vcodigo=$_POST["codigo"];
$vnome=$_POST["nome"];
$vvalor=$_POST["valor"];


$update= mysqli_query($con,"update produto set idproduto='$vcodigo',nome='$vnome',valor='$vvalor' where idproduto='$vcodigo'")
 or die ("ERRO");
if ($update != ''){
echo "<script>alert('Produto Atualizado com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisaproduto';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisaproduto';</script>"; 
            		
				}
?>
