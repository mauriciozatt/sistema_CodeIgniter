<!DOCTYPE html>
<html>

<head>
	<script>
	
	$('body').on('hidden.bs.modal', '.modal', function () {
				$(this).removeData('bs.modal').find(".modal-content").html("");
			});
			
			</script>
			</head>
<body>




<b>	<!-- Modal -->
	<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      
	    </div>
	  </div>
	</div>
<?php
include "menurelatorio.php";
include "conecta.php";
?>

    <section class="content">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="panel panel-info">
                        <div class="panel-heading">
                        <center>
                        <h3>
                         Relatorios de Veiculos Cadastrados
                            </h3>
                            </center>
                        </div>
                       
                    </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Placa</th>                                            
                                             <th>Ano</th>
                                              <th>modelo</th>
                                              <th>Ckiente</th>                                                                                                                                                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      	$sql = "select 
                                      veiculo.idveiculo,
                                      	veiculo.placa,
                                      	veiculo.ano,
                                        veiculo.modelo,
                                        cliente.nome as cliente                                                                   
                                        from veiculo                                        
                                        inner join cliente on (veiculo.fkcliente = cliente.idcliente)                                        
                                         order by idveiculo ASC";
	
	$editar = mysqli_query($con,$sql);
    while ($l = mysqli_fetch_array($editar)){
   $Vcodigo = $l['idveiculo'];  
	$Vplaca= $l['placa'];
	$Vano= $l['ano'];
		$Vmodelo= $l['modelo'];
			$Vcliente= $l['cliente'];									
	echo "
      <tr>
      <td> $Vcodigo </td> 
     <td align=right> $Vplaca</td>
       <td> $Vano </td>
        <td> $Vmodelo </td> 
         <td> $Vcliente </td>                  
      ";
      }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
    </section>

</body>

</html>