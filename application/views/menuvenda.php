<!DOCTYPE html>
<html>


<head>
 

</head>

<body class="theme-light-blue" background="<?php echo base_url('img/bk2.png');?>">

<?php
include "extensao.php";

/* @session_start();
$nivel= $_SESSION['nivel']; */

date_default_timezone_set('America/Sao_Paulo');
?>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
               <a class="navbar-brand" <a href="<?php echo site_url("primeiro/index")?>">Sistema do Mauricio</a>                
                 <!-- <img src="logo.png" width="180" height="65" alt="User" /> -->
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                     <a class="navbar-brand" <a href="<?php echo site_url("primeiro/index")?>">Sair</a>
                     </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
               <img src="<?php echo base_url('images/user.png');?>" width="48" height="48" alt="User" />
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CODEIGNITER</div>
                    <div class="email">codeigniter@codeigniter.com.br</div>
                    </div>
                </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="active">
                       <a href="<?php echo site_url("chamar/paginaprincipal")?>">
                            <i class="material-icons">home</i>
                            <span>Pagina Inicial</span>
                        </a>
                    </li>
                    
                    <li>
                        
             </div>
            <!-- #Menu -->
            <!-- Footer -->
           <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2018 <a href="javascript:void(0);">FrameWork CodeIgniter</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
    </section>
</body>

</html>