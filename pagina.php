<?php include('conexion.php')?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = yes, width = device-width">
    <title>Administracion</title>
    <link rel="stylesheet" href="pag2.css" />
  </head>
  <body>
    
    <div id="idtit"><h2>MODULO ADMINISTRATIVO</h2></div>  
    <div class="vMenu">

      <a href="javascript:void()"  class="cabecera">COMPRAS Y PROVEEDORES</a>

        <ul class="menu">

          <li class="item"><a href="reg_factura.php">Registrar Factura de Compra</a></li> 

          <li class="item"><a href="registro_proveedor.php">Registrar Nuevo Proveedor</a></li>

          <li class="item"><a href="ver_riva.php">Retenciones I.V.A.</a></li>

          <li class="item"><a href="mostrar.php">Consultas</a></li>

      </ul>
      <br>

      <a href="javascript:void()"  class="cabecera">VENTAS Y CLIENTES</a>

        <ul class="menu">

          <li class="item"><a href="url1">Registrar Factura de Venta</a></li>

          <li class="item"><a href="url2">Clientes</a></li>

          <li class="item"><a href="url3">Retenciones</a></li>

          <li class="item"><a href="url4">Consultas</a></li>

      </ul>
      
      <br>

      <a href="javascript:void()"  class="cabecera">CAJA</a>

        <ul class="menu">

          <li class="item"><a href="url1">Registrar Ingreso</a></li>

          <li class="item"><a href="url2">Registrar Salida</a></li>

          <li class="item"><a href="url3">Consultas</a></li>

          
      </ul>
      
      <br>

      <a href="javascript:void()"  class="cabecera">BANCOS</a>

        <ul class="menu">

          <li class="item"><a href="url1">Registrar Deposito / NCR</a></li>

          <li class="item"><a href="url2">Registrar Pago / NDB</a></li>

          <li class="item"><a href="">Consultas</a></li>

          
      </ul>
      
      <br>

      <a href="javascript:void()"  class="cabecera">INVENTARIO</a>

        <ul class="menu">

          <li class="item"><a href="url1">Entrada Inventario</a></li>

          <li class="item"><a href="url2">Salida de Inventario</a></li>

          <li class="item"><a href="ver_articulos.php">Articulos</a></li>

          <li class="item"><a href="registro_articulo.php">Crear Nuevo Articulo</a></li>
          

      </ul>




    </div>
  
    <button type="submit" class="btn btn-secondary"><a class="" href="index.html">Salir</a></button>

  </body>
  
  
  
  
  
</html>


