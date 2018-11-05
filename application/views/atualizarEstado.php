<?php
include "conecta.php";
$Vcodigo=$_POST["codigo"];
$Vestado=$_POST["estado"];
$Vuf=$_POST["uf"];


$update= mysqli_query($con,"update estado set idestado='$Vcodigo',nome='$Vestado',uf='$Vuf'where idestado='$Vcodigo'")
 or die ("ERRO");
if ($update != ''){
echo "<script>alert('Estado Atualizado com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisaestado';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisaestado';</script>";
            		
				}
?>
