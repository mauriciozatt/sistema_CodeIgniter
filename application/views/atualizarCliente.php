<?php
include "conecta.php";
$Vcodigo =$_POST["codigo"];
$Vnome =$_POST["nome"];
$Vlogradouro =$_POST["logradouro"];
$Vcpf =$_POST["cpf"];
$Vdatanascimento =$_POST["datanascimento"];


$update= mysqli_query($con,"update cliente
 set idcliente='$Vcodigo', 
 nome='$Vnome', 
 logradouro='$Vlogradouro',
cpf='$Vcpf', 
datanascimento='$Vdatanascimento'
where idcliente='$Vcodigo'")
 or die ("ERRO");
if ($update != ''){
echo "<script>alert('Cliente atualizado com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisacliente';</script>"; 
         
            }					
else{

echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisacliente';</script>"; 
            		
				}
?>
