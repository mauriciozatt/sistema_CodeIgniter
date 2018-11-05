<!DOCTYPE html>
<html>
<head>
 <link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">
</head>

	<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	    </div>
	  </div>
	</div>

<?php
include "extensao.php";
include "conecta.php";

?>

<html>
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8"> 
  <meta name="generator" content="PSPad editor, www.pspad.com">

   
  <title>Tela inicial</title>
<script>
	
			
			</script>


</head>	

<body class="fundo">
  
	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">	      
	    </div>
	  </div>
	</div>
 <center>
 <div class="panel panel-primary" style= "margin-bottom: 0px;">
                        <div class="panel-heading">
                        <center>
                        <h1>
                           Bem vindo ao Sistema de vendas!
                            </h1>
                            </center>
                        </div>                       
                    </div>
<!--<img src="css/img/logo.jpg">  -->


</center>

    <table class="table table-action" border="4">
   <tr>
  <td width="350" height="440" ><a href="<?php echo site_url("chamar/telacadastros")?>"><img src="<?php echo base_url('img/cadastros.png');?>"width="100%" height="440" disabled> </a> </td>
	<td width="350" height="440" ><a href="<?php echo site_url("chamar/telapesquisas")?>"><img src="<?php echo base_url('img/pesquisas.png');?>"width="100%" height="440" disabled> </a> </td>
	<td width="350" height="440" ><a href="<?php echo site_url("chamar/telarelatorios")?>"><img src="<?php echo base_url('img/relatorios.png');?>"width="100%" height="440" disabled> </a> </td>
  <td width="350" height="440" ><a href="<?php echo site_url("venda/cadastrovendas")?>"><img src="<?php echo base_url('img/relatorios.png');?>"width="100%" height="440" disabled> </a> </td>
   </tr>
   <tr>
    <td><center> <h3 class="cordafonte"> Cadastros</h3></center> </td>
   <td> <center> <h3 class="cordafonte"> Pesquisas </h3></center> </td>
    <td><center> <h3 class="cordafonte"> Relatórios</h3></center> </td>
    <td><center> <h3 class="cordafonte"> Venda</h3></center> </td>
    </tr>
    </table>
     
  </body>
</html>
