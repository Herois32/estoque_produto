<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Sistema de Estoque</title>

    <!-- chamado meus arquivo do bootstrap. Nesse sistema estou usando o framework Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</head>
<body>
    <!-- Inicia aqui o corpp do sistema sendo um tamplet da barra superior que vai servir pra todo os sistema -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="<?php echo BASE_URL; ?>" class="navbar-brand">Sistema de Estoque</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        </ul>
    </div>
</nav> 
   <!-- Chamando o Tamplete do sistema -->   
  <?php $this->loadViewInTemplate($viewName, $viewData); ?>  
  
</body>
</html>
