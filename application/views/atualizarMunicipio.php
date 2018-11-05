<?php
include "conecta.php";
$Vcodigo =$_POST["codigo"];
$Vmunicipio =$_POST["municipio"];
$Vestado =$_POST["estado"];
$Vuf =$_POST["uf"];



$update= mysqli_query($con,"update cidade
 set idcidade='$Vcodigo', 
 nome='$Vmunicipio',
 estado='$Vestado',
 uf='$Vuf'
where idcidade='$Vcodigo'")
 or die ("ERRO"); 
if ($update !=''){
echo "<script>alert('Municipio atualizado com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisamunicipio';</script>"; 
         
            }					
else{

echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisamunicipio';</script>"; 
            		
				}
?>
