<?php
include "conecta.php";

$Vcodigo =$_POST["codigo"];
$Vplaca =$_POST["placa"];
$Vano =$_POST["ano"];
$Vmodelo =$_POST["modelo"];
$Vcliente =$_POST["cliente"];

$update= mysqli_query($con,"update veiculo
 set idveiculo='$Vcodigo', 
 placa='$Vplaca',
 ano='$Vano',
 Modelo='$Vmodelo',
 fkcliente='$Vcliente'
 where idveiculo='$Vcodigo'")
 or die ("ERRO");
if ($update != ''){
echo "<script>alert('Veiculo atualizado com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisaveiculo';</script>"; 
         
            }					
else{

echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisaveiculo';</script>";
            		
				}
?>
