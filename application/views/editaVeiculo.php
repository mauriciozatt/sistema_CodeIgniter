<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         include "conecta.php";
         include "extensao.php";
         ?>
      <script>
         function troca(){         
                if(document.getElementById("botao").value=='Editar'){
               document.getElementById("placa").disabled = false; // Habilitar
               document.getElementById("ano").disabled = false; // Habilitar
               document.getElementById("modelo").disabled = false; // Habilitar
               document.getElementById("cliente").disabled = false; // Habilitar                                           
               document.getElementById("botao").value = 'Salvar';
        document.getElementById("excluir").disabled = true; // Habilitar
         }
         else{
         document.formulario.submit();
         }
         }

         
      </script>
   </head>
   <body>
      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
      <?php
         include "conecta.php";
         $Vcodigo=$_GET["codigo"];
         
    
         $sql = "select 
         veiculo.idveiculo,
               veiculo.placa,
               veiculo.ano,
           veiculo.modelo,           
           cliente.nome  as cliente                                    
           from veiculo                                        
           inner join cliente on (veiculo.fkcliente = cliente.idcliente)            
         WHERE idcliente='$Vcodigo'";
         
               $editar = mysqli_query($con,$sql);
               list($Vcodigo,$Vplaca,$Vano,$Vmodelo,$Vcliente) = mysqli_fetch_row($editar);                                    

            ?>
            
      <!-- Horizontal Layout -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Edição de Veiculos
                  </h2>
               </div>
               
               <div class="body">
                  <form class="form-horizontal" name="formulario"  action="../atualiza/atualizarVeiculo"  method="POST" role="form">
                     <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Código</label>
                        </div>
                                                
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
					 <input type="text" name="codigo1" value=<?php echo $Vcodigo ?> disabled>	
                                 <input type="hidden" name="codigo" class="form-control" value="<?php echo $Vcodigo?>">
                              </div>
                           </div>
                        </div>
                     </div>
                                                                                    
                     <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Placa</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
 <input type="text" id="placa" name="placa" class="form-control" placeholder="Informe a Placa"value="<?php echo $Vplaca?>"disabled>
                              </div>
                           </div>
                        </div>
                     </div>

                                   <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Ano</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
 <input type="integer" id="ano" name="ano" class="form-control" placeholder="Informe o ano do veiculo"value="<?php echo $Vano?>"disabled>
                              </div>
                           </div>
                        </div>
                     </div>

              <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Modelo</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
 <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Informe o modelo do veiculo"value="<?php echo $Vmodelo?>"disabled>
                              </div>
                           </div>
                        </div>
                     </div>


                 <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Cliente</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">                          
      <select class="col-md-2 col-sm-4 col-xs-5 form-control show-tick" id="cliente" name="cliente">                                                          
            <?php
		                	$sql_cliente = mysqli_query($con,"select * from  cliente");
			while ($list_cliente = mysqli_fetch_array($sql_cliente)) {			
				$cod_cliente= $list_cliente['idcliente'];
				$desc_cliente= $list_cliente['nome'];
				
				echo "<option value='$cod_cliente'>$desc_cliente</option>";	                                            
			}
			?>
   </select>
    </div>
</div>


                     <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                        
 <input type="button"  id="botao" value= "Editar" class="btn btn-success btn-lg waves-effect" onclick="troca()"></button>
 
						   <a href="<?php echo "../excluir/excluirveiculo?codigo=$Vcodigo";?>">
						   
<input type="button"  id="excluir" value= "Excluir" class="btn btn-danger btn-lg waves-effect" onclick="troca()"></button>
						   </a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>