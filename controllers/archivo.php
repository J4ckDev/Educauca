
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos where id_documento=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){
            echo "NO tiene archivos";
             }else{
        header("Location: ../content/".$datos['nombre_archivo']."");
                
        } } ?>