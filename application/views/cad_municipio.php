
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
</head>
						
<body>

<?php
include "menucadastro.php";
include 'conecta.php';

$sqlEstado= mysqli_query($con, "SELECT * FROM estado");


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
                          <form action="<?php echo site_url("cadastros/adicionarmunicipio")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro Municipio</h4></li>
                                </center>
                            </ul>
                        </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Nome Municipio</label>
                                            <input type="text" class="form-control" name="nome" required>
                                        </div>
                                    </div>
                                </div>  

                                <div class="col-md-3">
                                    <div class="form-group">
                                       
                                        <label>Estado</label><br>
                                            <select name="estado" id="estado">
                                            <option>Selecione um Estado...</option>
                                            <?php
                                                while ($qryEstado = mysqli_fetch_array($sqlEstado))   {
                                                ?>
                                                <option value="<?php echo $qryEstado['idestado']; ?>">
                                                <?php echo $qryEstado['nome']; ?></option>";
                                                <?php
                                                }
                                            ?>	
                                            </select>
                                       
                                    </div>
                                </div>  


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>UF</label>
                                            <input type="text" class="form-control" name="uf" required>
                                        </div>
                                    </div>
                                </div>  

                            </div>

                           
                            
<center>
                                
                            <button type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                            
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