<?php
        include "conexio.php";
        $id=$_GET['id']; // OTRA FORMA DE HACERLO ES METIENDO EL FORM Y PONER EL INPUT TYPE HIDDEN, así se verifica el isset($_POST).
        $eliminar = "DELETE FROM usuarios WHERE idusuario=:id";
        $sql = $connect-> prepare($eliminar);
        $sql -> bindParam(':id', $id, PDO::PARAM_INT, 11);
        // $id=trim($_POST['id']);
        $sql->execute();
        if($sql->rowCount() > 0){
            $count = $sql -> rowCount();
            echo "<script>window.alert('$count registro ha sido eliminado');</script>";
            echo "<script>window.location='consulta.php';</script>";    
        }else{
            echo "<script>window.alert('No se ha podido eliminar);</script>";
            // print_r($sql->errorInfo()); 
        }
    
?>