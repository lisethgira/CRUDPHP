<?php 
    $usuario='root';
    $password='';
    $servidor='localhost';
    $bd='crud';
    // $conexion=mysqli_connect($servidor,$usuario,$password,$bd) or die ("Sin conexion");
    // ESTO PRIMERO VALIDA QUE SE HAYA INGRESADO AL GESTOR DE BASE DE DATOS (USUARIO, CONTRASEÑA...), DESPUÉS SE SELECCIONA LA BASE DE DATOS
    $conexion=mysqli_connect($servidor,$usuario,"") or die ("Sin conexion");
    $db=mysqli_select_db($conexion,$bd) or die ("Sin conexión");
    $consulta="select * from usuarios";
    $resultado=mysqli_query($conexion,$consulta) or die ("Fallas en la consulta");
    ?>
   <?php 
    $usuario='root';
    $password='';
    $servidor='localhost';
    $bd='crud';
    // $conexion=mysqli_connect($servidor,$usuario,$password,$bd) or die ("Sin conexion");
    // ESTO PRIMERO VALIDA QUE SE HAYA INGRESADO AL GESTOR DE BASE DE DATOS (USUARIO, CONTRASEÑA...), DESPUÉS SE SELECCIONA LA BASE DE DATOS
    $conexion=mysqli_connect($servidor,$usuario,"") or die ("Sin conexion");
    $db=mysqli_select_db($conexion,$bd) or die ("Sin conexión");
    $consulta="select * from usuarios";
    $resultado=mysqli_query($conexion,$consulta) or die ("Fallas en la consulta");
    // DATE ALTER TABLE usuarios ADD COLUMN prueba DATE DEFAULT '2020-01-01';

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/semantic.css">
        <script src="../js/jquery.js"></script>
        <script src="../js/semantic.js"></script>
        <link rel="stylesheet" href="../css/estilo.css">
        <title>Conexión</title>
    </head>
    <body>
        <div class="ui container">
            <br>
            <h1 class="texto">Registro de usuarios</h1>
            <table class="ui green table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th class="cols" colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($columna=mysqli_fetch_array($resultado)){ ?>
                        <tr>
                            <td><?php echo $columna['nombre'];?></td>
                            <td><?php echo $columna['apellido'];?></td>
                            <td><?php echo $columna['edad'];?></td>
                            <td><?php echo $columna['direccion'];?></td>
                            <td><?php echo $columna['telefono'];?></td>
                            <td><?php echo $columna['correo'];?></td>
                            <td class="ui left icon input ttd"><a name="btn_actualizar" href="../actualizar.php"><i class="edit icon"></i>ACTUALIZAR</a></td>
                            <td class="ui left icon input ttd"><a name="btn_eliminar" href="../eliminar.php"><i class="trash alternate icon"></i>BORRAR</a></td>
                        </tr>
                    <?php } 
                    // mysqli_close($conexion);
                    ?>
                </tbody>
            </table>
        </div>
    </body>
    </html>
   
   
   <!-- <?php
    // echo "<table>
    //     <thead>
    //         <tr>
    //             <th>Nombre</th>
    //             <th>Apellido</th>
    //             <th>Edad</th>
    //         </tr>
    //     </thead>
    //    <tbody>";
    //         while ($columna=mysqli_fetch_array($resultado)){
    //         echo "<tr>";
    //             echo "<td>".$columna['nombre']."</td>";
    //             echo "<td>".$columna['apellido']."</td>";
    //             echo "<td>".$columna['edad']."</td>";
    //         echo "</tr>";
    //     }
    //     echo "</tbody>";
    //     echo "</table>";   
// ?> -->