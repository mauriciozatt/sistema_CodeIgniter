
<html>
<link rel="icon" href="<?php echo base_url('img/logo.png');?>" type="image/x-icon">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Favicon-->
    <link rel="icon" src="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

    <!-- Google Fonts -->

</head>

<body class="login-page">
<?php
include "extensao.php";
?>
    <div class="login-box">
        <div class="logo">
        <center>
             <img id="profile-img"  src="<?php echo base_url('img/logo.jpg');?>" width="200" heigth="60">
             </center>
             <br>
            <small><h4>Sistema do Mauricio</h4></small>
        </div>
        <div class="card">
            <div class="body">
                 <form name="login" action="<?php echo site_url("chamar/autentica") ?>" method="POST">
                    <div class="msg">Informe seu Usúario e Senha</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="login" placeholder="Usuario" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Lembrar-Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Acessar</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>