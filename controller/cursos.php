<?php
    require_once("../config/conexion.php");
    require_once("../models/Cursos.php");
    $cursos = new Cursos();

    switch($_GET["op"]){

        case "listar":
            $datos = $cursos->get_cursos();
            if($_POST["filtro"]==1){
                ?>
                    <div class="section-small">
                        <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid uk-grid-match" uk-grid="">
                            <?php
                                foreach($datos as $row){
                                    ?>
                                        <div>
                                            <a href="../Resume/?id=<?php echo $row['cur_id'];?>">
                                                <div class="course-card">
                                                    <div class="course-card-thumbnail ">
                                                        <img src="..\..\assets\images\course\<?php echo $row['cur_img'];?>">
                                                        <span class="play-button-trigger"></span>
                                                    </div>
                                                    <div class="course-card-body">
                                                        <div class="course-card-info">
                                                            <div>
                                                                <span class="catagroy"> <?php echo $row['cat_nom'];?> </span>
                                                            </div>
                                                            <div>
                                                                <i class="icon-feather-bookmark icon-small"></i>
                                                            </div>
                                                        </div>
                                                        <h4><?php echo $row['cur_titulo'];?></h4>
                                                        <p><?php echo substr($row['cur_descripcion'],0,60);?>...</p>
                                                        <div class="course-card-footer">
                                                            <h5> <i class="icon-feather-film"></i> 5 Videos </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                <?php
            }else{
                ?>
                    <div class="uk-grid-large" uk-grid="">
                        <div class="uk-width-3-4@m">
                            <?php
                                foreach($datos as $row){
                                    ?>
                                        <div class="course-card course-card-list">
                                            <div class="course-card-thumbnail">
                                                <img src="..\..\assets\images\course\<?php echo $row['cur_img'];?>">
                                                <a href="course-intro.html" class="play-button-trigger"></a>
                                            </div>
                                            <div class="course-card-body">
                                                <a href="course-intro.html">
                                                    <h4><?php echo $row['cur_titulo'];?></h4>
                                                </a>
                                                <p><?php echo substr($row['cur_descripcion'],0,150);?>...</p>
                                                <div class="course-details-info">
                                                    <ul>
                                                        <li> <i class="icon-feather-sliders"></i> <?php echo $row['cat_nom'];?> </li>
                                                        <li> Por <a href="user-profile-1.html"><?php echo $row['usu_nom'].' '.$row['usu_ape'];?></a> </li>
                                                        <li>
                                                            <div class="star-rating"><span class="avg"> 4.8 </span> <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                <?php
            }
        break;

        case "listar_nivel":
            $datos = $cursos->get_cursos_nivel($_POST["niv_id"]);
            if($_POST["filtro"]==1){
                ?>
                    <div class="section-small">
                        <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid uk-grid-match" uk-grid="">
                            <?php
                                foreach($datos as $row){
                                    ?>
                                        <div>
                                            <a href="../Resume/?id=<?php echo $row['cur_id'];?>">
                                                <div class="course-card">
                                                    <div class="course-card-thumbnail ">
                                                        <img src="..\..\assets\images\course\<?php echo $row['cur_img'];?>">
                                                        <span class="play-button-trigger"></span>
                                                    </div>
                                                    <div class="course-card-body">
                                                        <div class="course-card-info">
                                                            <div>
                                                                <span class="catagroy"> <?php echo $row['cat_nom'];?> </span>
                                                            </div>
                                                            <div>
                                                                <i class="icon-feather-bookmark icon-small"></i>
                                                            </div>
                                                        </div>
                                                        <h4><?php echo $row['cur_titulo'];?></h4>
                                                        <p><?php echo substr($row['cur_descripcion'],0,60);?>...</p>
                                                        <div class="course-card-footer">
                                                            <h5> <i class="icon-feather-film"></i> 5 Videos </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                <?php
            }else{
                ?>
                    <div class="uk-grid-large" uk-grid="">
                        <div class="uk-width-3-4@m">
                            <?php
                                foreach($datos as $row){
                                    ?>
                                        <div class="course-card course-card-list">
                                            <div class="course-card-thumbnail">
                                                <img src="..\..\assets\images\course\<?php echo $row['cur_img'];?>">
                                                <a href="course-intro.html" class="play-button-trigger"></a>
                                            </div>
                                            <div class="course-card-body">
                                                <a href="course-intro.html">
                                                    <h4><?php echo $row['cur_titulo'];?></h4>
                                                </a>
                                                <p><?php echo substr($row['cur_descripcion'],0,150);?>...</p>
                                                <div class="course-details-info">
                                                    <ul>
                                                        <li> <i class="icon-feather-sliders"></i> <?php echo $row['cat_nom'];?> </li>
                                                        <li> Por <a href="user-profile-1.html"><?php echo $row['usu_nom'].' '.$row['usu_ape'];?></a> </li>
                                                        <li>
                                                            <div class="star-rating"><span class="avg"> 4.8 </span> <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                <?php
            }
        break;

        case 'mostrar':
            $datos=$cursos->get_cursos_x_id($_POST["cur_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["cur_id"] = $row["cur_id"];
                    $output["cur_titulo"] = $row["cur_titulo"];
                    $output["cur_descripcion"] = $row["cur_descripcion"];
                    $output["cur_descripcion_lar"] = $row["cur_descripcion_lar"];
                    $output["cur_img"] = $row["cur_img"];
                    $output["curd_total"] = $row["curd_total"];
                    $output["curd_dura"] = $row["curd_dura"];
                    $output["usu_id"] = $row["usu_id"];
                    $output["usu_nom"] = $row["usu_nom"];
                    $output["usu_ape"] = $row["usu_ape"];
                    $output["usu_foto"] = $row["usu_foto"];
                    $output["usu_obs"] = $row["usu_obs"];
                    $output["cat_id"] = $row["cat_id"];
                    $output["cat_nom"] = $row["cat_nom"];
                    $output["niv_nom"] = $row["niv_nom"];
                }
                echo json_encode($output);
            } 
        break;

        case "listar_aprender":
            $datos = $cursos->get_cursosaprender_x_cur_id($_POST["cur_id"]);
            ?>
                <?php
                    foreach ($datos as $row) {
                        ?>
                            <li><?php echo $row['cura_nom'];?> </li>
                        <?php
                    }
                ?>
            <?php
           
        break;

        case "listar_requerimiento":
            $datos = $cursos->get_cursosrequerimiento_x_cur_id($_POST["cur_id"]);
            ?>
                <?php
                    foreach ($datos as $row) {
                        ?>
                            <li><?php echo $row['curr_nom'];?> </li>
                        <?php
                    }
                ?>
            <?php
           
        break;

        case "listar_detalle":
            
        break;


    }

?>