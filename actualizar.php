<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/semantic.css">
    <script src="js/jquery.js"></script>
    <script src="js/semantic.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>ACTUALIZAR USUARIOS</title>
</head>
<body>
    <div class="ui container">
        <br>
        <h1 class="hh1">ACTUALIZAR USUARIOS</h1>
        <?php
                    include "conexio.php";
                    $id=$_GET['id'];
                    $sql = "SELECT * FROM usuarios where idusuario=$id"; 
                    $query = $connect -> prepare($sql); 
                    $query -> execute(); 
                    $resultado = $query -> fetchAll(PDO::FETCH_OBJ); 
                    if($query -> rowCount() > 0){ 
                        foreach($resultado as $result){
        ?>
                        
            <form action="actualizaru.php" class="ui form" method="POST">
            <input type="hidden" name="id" value="<?php echo $result->idusuario; ?>">
            <div class="two fields">
                <div class="field">
                    <div class="ui pointing below label">
                        <label for="">Nombre(s)</label>
                    </div>
                    <div class="ui left icon input">
                        <input type="text" name="nombre" id="" value="<?php echo $result->nombre; ?>" required>
                        <i class="user icon"></i>
                    </div>
                </div>
                <div class="field">
                    <div class="ui pointing below label">
                        <label for="">Apellido</label>
                    </div>
                    <div class="ui left icon input">
                        <input type="text" name="apellido" id="" value="<?php echo $result->apellido; ?>" required>
                        <i class="user icon"></i>
                    </div>
                </div>
            </div>
                <div class="two fields">
                    <div class="field">
                        <div class="ui pointing below label">
                            <label for="">Edad</label>
                        </div>
                        <div class="ui left icon input">
                            <input type="number" name="edad" id="" value="<?php echo $result->edad; ?>" required>
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui pointing below label">
                            <label for="">Dirección</label>
                        </div>
                        <div class="ui left icon input">
                            <input type="text" name="direccion" id="" value="<?php echo $result->direccion; ?>"required>
                            <i class="home icon"></i>
                        </div>
                    </div>
                </div>
            <div class="two fields">
                <div class="field">
                    <div class="ui pointing below label">
                        <label for="">Teléfono</label>
                    </div>
                    <div class="ui left icon input">
                        <input type="number" name="telefono" id="" value="<?php echo $result->telefono; ?>"required>
                        <i class="phone icon"></i>
                    </div>
                </div>
                <div class="field">
                    <div class="ui pointing below label">
                        <label for="">Correo</label>
                    </div>
                    <div class="ui left icon input">
                        <input type="text" name="correo" id="" value="<?php echo $result->correo; ?>" required>
                        <i class="at icon"></i>
                    </div>
                </div>
            </div>
            <br>
            <input type="submit" name="btn_actualizar" class="ui inverted green button boton">
            </form>
            <?php 
                        }
                     }
                    // mysqli_close($conexion);
                    ?>
    </div>
</body>
</html>