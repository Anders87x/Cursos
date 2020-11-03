<?php
    require_once("../../config/conexion.php"); 
    if(isset($_SESSION["usu_id"])){
        ?>
            <a href="view\register\" class="btn btn-info transition-3d-hover ml-3"> <?php echo $_SESSION["usu_id"]?></a>
        <?php
    }else{
        ?>
            <a href="view\register\" class="btn btn-info transition-3d-hover ml-3"><?php echo $_SESSION["usu_id"]?></a>
        <?php
    }
?>
