
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
			</head>
			
			
<body>

<?php
include "menucadastro.php";

if(!empty($_GET['resposta'])){

if($_GET['resposta']=='1'){
echo "<script>alert('Cadastro Efetuado com Sucesso!');</script>";
}
else{
echo "<script>alert('Erro ao Efetuar Cadastro!');</script>";
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
                          <form action="<?php echo site_url("cadastros/adicionarcliente")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro De Clientes</h4></li>
                                </center>
                            </ul>
                        </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Cliente</label>
                                            <input type="text" class="form-control" name="nome" required>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Cpf</label>
                                            <input type="text" class="form-control" name="cpf"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Logradouro </label>
                                            <input type="text" class="form-control" name="bairro">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Data de Nascimento</label>
                                            <input type="date" class="form-control" name="datanascimento" required >
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