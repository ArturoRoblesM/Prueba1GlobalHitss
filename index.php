<html>
    <head>
        <title>
            Tienda de Ropa
        </title>
    
    </head>
  <body>
      <?php
 require_once "config/config.php";
 if(isset($_REQUEST['command'])){
     $command=$_REQUEST['command'];
 }
 else{
     $command=null;
     
 }
      
      ?>
      <?php require_once "views/headers.php"; ?>
           <div class="navbar navbar-inverse navbar-default" role="navigation">
      <div class="container">
          <div class="navbar-header" style="">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li><a href="index.php" style="color:#285e8e; font-weight:bold;">
                  HRobles Sastreria
                  </a>  
              </li>
              <li class="active"><a href="index.php?command=<?php echo CLIENTES; ?>">Clientes</a></li>
              <li><a href="index.php?command=<?php echo PROVEDORES; ?>">provedores</a></li>
            <li><a href="index.php?command=<?php echo PRODUCTOS; ?>">Productos</a></li>
            <li><a href="index.php?command=<?php echo DEUDORES; ?>">Deudores</a></li>
            <li><a href="index.php?command=<?php echo PAGOS; ?>">Pagos</a></li>
           <li><a href="index.php?command=<?php echo PENDIENTES; ?>">Pendientes</a></li>
           <li><a href="index.php?command=<?php echo PEDIDOS; ?>">Pedidos</a></li>
           <li><a href="logout.php">salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
      <div class="container">
          <?php 
          if(isset($command)){
              require "$arre[$command]"; 
          }

?>
      </div>      
      
<?php require_once "views/footer.php"; ?>
  </body>
</html>
