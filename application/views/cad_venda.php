
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
</head>
						
<body>

<?php
include "menuvenda.php";
include 'conecta.php';


$sqlcliente= mysqli_query($con, "SELECT * FROM cliente");
$sqlforma= mysqli_query($con, "SELECT * FROM formapagamento");




if(!empty($_GET['resposta'])){

    if($_GET['resposta']=='1'){
    echo "<script>alert('Cadastro Efetuado com Sucesso!');</script>";
    }
    else{
    echo "<script>alert('Erro ao efetuar cadastro!);</script>";
    }
    
}

?>
    <section class="content">
        <div class="container-fluid">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <form action="<?php echo site_url("venda/adicionarvenda")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Venda</h4></li>
                                </center>
                            </ul>
                        </div>

                          <div class="col-md-2">                                   
                                        <div class="form-line">
                                        <label>Cliente</label><br>
                                            <select name="cliente" id="cliente">
                                            <option>Selecione...</option>
                                            <?php
                                                while ($qrycliente = mysqli_fetch_array($sqlcliente))   {
                                                ?>
                                                <option value="<?php echo $qrycliente['idcliente']; ?>">
                                                <?php echo $qrycliente['nome']; ?></option>";
                                                <?php
                                                }
                                            ?>	
                                            </select>
                                        </div>                                
                            </div>  
                            

                            
                            <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Data</label>
                                            <input type="date" class="form-control" name="data" required>
                                        </div>
                                    </div>
                                </div>  

                            
                            <div class="col-md-2">                                   
                                   <div class="form-line">
                                   <label>Forma de Pagamento</label><br>
                                       <select name="forma" id="forma">
                                       <option>Selecione...</option>
                                       <?php
                                           while ($qryforma = mysqli_fetch_array($sqlforma))   {
                                           ?>
                                           <option value="<?php echo $qryforma['idforma']; ?>">
                                           <?php echo $qryforma['nome']; ?></option>";
                                           <?php
                                           }
                                       ?>	
                                       </select>
                                   </div>                                
                           </div>  
                       

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Valor Total</label>
                                            <input type="numeric" class="form-control" name="total" required>
                                        </div>
                                    </div>
                                </div>  
                              
                                        
                           <center>                                
                            <button type="submit" class="btn btn-success waves-effect">Salvar</button>
                           </center>








                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
    </section>

</body>

</html>