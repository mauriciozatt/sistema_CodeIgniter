<?php
include "conecta.php";
$Vcodigo =$_POST["codigo"];
$Vnome =$_POST["nome"];

$update= mysqli_query($con,"update formapagamento
 set idforma='$Vcodigo', 
 nome='$Vnome'
where idforma='$Vcodigo'")
 or die ("ERRO");
if ($update != ''){
echo "<script>alert('Forma de pagamento atualizada com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisaforma';</script>"; 
         
            }					
else{

echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisaforma';</script>"; 
            		
				}
?>
