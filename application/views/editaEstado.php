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
               document.getElementById("estado").disabled = false; // Habilitar
               document.getElementById("uf").disabled = false; // Habilitar
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
         
         $sql = "SELECT * FROM estado WHERE idestado='$Vcodigo'";
         
               $editar = mysqli_query($con,$sql);
               list($Vcodigo,$Vestado,$Vuf) = mysqli_fetch_row($editar);                                  
           ?>
           
      
      <!-- Horizontal Layout -->
      <div class="row clearfix">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                  <h2>
                     Edição de Estados
                  </h2>
               </div>
               
               <div class="body">
                  <form class="form-horizontal" name="formulario"  action="../atualiza/atualizarestado"  method="POST" role="form">
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
                           <label class="form-label">Estado</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
 <input type="text" id="estado" name="estado" class="form-control" placeholder="Informe o estado"value="<?php echo $Vestado?>"disabled>
                              </div>
                           </div>
                        </div>
                     </div>



                            <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label class="form-label">Uf</label>
                        </div>                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                           <div class="form-group">
                              <div class="form-line">
 <input type="text" id="uf" name="uf" class="form-control" placeholder="Informe a Uf"value="<?php echo $Vuf?>"disabled>
                              </div>
                           </div>
                        </div>
                     </div>





                     <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                        
 <input type="button"  id="botao" value= "Editar" class="btn btn-success btn-lg waves-effect" onclick="troca()"></button>
 
						   <a href="<?php echo "../excluir/excluirestado?codigo=$Vcodigo";?>">
						   
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