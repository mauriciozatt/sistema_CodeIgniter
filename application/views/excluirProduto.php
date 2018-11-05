<!DOCTYPE html>
<html lang="pt-br">
	<head>  
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Excluindo...</title>
	</head>
	<body>
      <?php
			include "conecta.php";
			$vcodigo=$_GET["codigo"];

			$apagar="delete from produto where idproduto='$vcodigo'";
			if(mysqli_query($con,$apagar)){
				echo"<script>alert('Produto Excluido com Sucesso!');</script>";
				echo "<script>window.location ='../pesquisas/pesquisaproduto';</script>";
			}
			else{
 echo($apagar);
				echo"<script>alert('Erro ao excluir Produto! Produto com Movimentação!');</script>";
				echo "<script>window.location ='../pesquisas/pesquisaproduto';</script>";
			}
		?>
	</body>
</html>
