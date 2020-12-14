<?php
   class Cursos extends Conectar {

		public function get_cursos(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                    tm_curso.cur_id,
                    tm_curso.cur_titulo,
                    tm_curso.cur_descripcion,
                    tm_curso.cur_img,
                    tm_curso.usu_id,
                    tm_usuario.usu_nom,
                    tm_usuario.usu_ape,
                    tm_curso.cat_id,
                    tm_categoria.cat_nom,
                    tm_nivel.niv_nom
                FROM tm_curso INNER join 
                    tm_usuario on tm_curso.usu_id = tm_usuario.usu_id INNER JOIN
                    tm_categoria on tm_curso.cat_id = tm_categoria.cat_id INNER JOIN
                    tm_nivel on tm_curso.niv_id = tm_nivel.niv_id
                WHERE
                    tm_curso.est = 1
                    AND tm_curso.niv_id in (2,3,4)";
            $sql=$conectar->prepare($sql);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

		public function get_cursos_nivel($niv_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT 
                    tm_curso.cur_id,
                    tm_curso.cur_titulo,
                    tm_curso.cur_descripcion,
                    tm_curso.cur_img,
                    tm_curso.usu_id,
                    tm_usuario.usu_nom,
                    tm_usuario.usu_ape,
                    tm_usuario.usu_foto,
                    tm_curso.cat_id,
                    tm_categoria.cat_nom,
                    tm_nivel.niv_nom
                FROM tm_curso INNER join 
                    tm_usuario on tm_curso.usu_id = tm_usuario.usu_id INNER JOIN
                    tm_categoria on tm_curso.cat_id = tm_categoria.cat_id INNER JOIN
                    tm_nivel on tm_curso.niv_id = tm_nivel.niv_id
                WHERE
                    tm_curso.est = 1
                    AND tm_curso.niv_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $niv_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

		public function get_cursos_x_id($cur_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="call SP_L_CURSO_01 (?)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cur_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

        public function get_cursosaprender_x_cur_id($cur_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso_aprender WHERE tm_curso_aprender.cur_id = ? AND tm_curso_aprender.est = 1";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cur_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

        public function get_cursosrequerimiento_x_cur_id($cur_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso_requerimiento WHERE tm_curso_requerimiento.cur_id = ? AND tm_curso_requerimiento.est = 1";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cur_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }

        public function get_cursosdetalle_x_id($cur_id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_curso_detalle WHERE cur_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $cur_id);
            $sql->execute();
			return $resultado=$sql->fetchAll();
        }

   }
?>