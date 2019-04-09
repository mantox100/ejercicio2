<?php include('../lib/constantes.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOSTALRIOAMAZONAS RESERVATION ONLINE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
            <div id="contenido"><form action="../lib/recepcion.php" method="post">
                            Nombre: <input id="nombre" name="nombre" type="text">
                            <br>Email: <input id="email" name="email" type="text">
                            <br>Region Origin: <input id="sourceregion" name="sourceregion" type="text">
                            <br>Ingles:<input id="ingles" name="ingles" type="text">
                            <br>Date check in:<input id="datecheckin" name="datecheckin" type="text">
                            <br>date check out:<input id="datecheckout" name="datecheckout" type="text">
                            <input type="submit" value="Enviar"  >                     
                        </form>
                <br>
                <form  action="../lib/Eliminar.php" method="post">
                            <div class="form-group"> 
                                <label class="col-sm-2 control-label">Nombre:</label> 
<!--                                <div class="col-sm-10">-->
                                    <input class="form-control input-sm" id="eliminanombre" name="eliminanombre" type="text">
<!--                                </div>-->
                           
                                <input id="btneliminar" type="submit" value="Eliminar"  >   
                            </div>
                        </form>
            </div>
            <div id="pie"><?php echo "Antonio Varas #666, Fono de contacto: 000000000";?></div>
        </div>
        <?php
        
         ?>
    </body>
    <script>
        $("#subvacaciones").show();
        $("#subvacaciones").css("display","block");
        $("#subvacaciones").addClass("active");
    </script>
</html>
