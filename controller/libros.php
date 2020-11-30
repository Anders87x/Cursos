<?php
    require_once("../config/conexion.php");
    require_once("../models/Libros.php");
    $libros = new Libros();

    switch($_GET["op"]){

        case "listar":
            $datos = $libros->get_libros();
            ?>
                <?php
                    foreach ($datos as $row) {
                        ?>
                            <div>
                                <a href="../Books-Details/?id=<?php echo $row['lib_id'];?>" class="uk-text-bold">
                                    <img src="..\..\assets\images\book\<?php echo $row['lib_img'];?>" class="mb-2 w-100 shadow rounded">
                                    <?php echo $row['lib_nom'];?>
                                </a>
                            </div>
                        <?php
                    }
                ?>
            <?php
        break;

        case 'mostrar':
            $datos=$libros->get_libros_x_id($_POST["lib_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["lib_id"] = $row["lib_id"];
                    $output["lib_nom"] = $row["lib_nom"];
                    $output["lib_descripcion"] = $row["lib_descripcion"];
                    $output["lib_img"] = $row["lib_img"];
                    $output["lib_vistas"] = $row["lib_vistas"];
                    $output["lib_pag"] = $row["lib_pag"];
                    $output["lib_dowload"] = $row["lib_dowload"];
                    $output["lib_url"] = $row["lib_url"];
                    $output["fech_crea"] = date("d/m/Y",strtotime($row["fech_crea"]));

                }
                echo json_encode($output);
            } 
        break;


    }

?>