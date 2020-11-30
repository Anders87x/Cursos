<?php
   class Libros extends Conectar {

		public function get_libros(){
         $conectar= parent::conexion();
            parent::set_names();
            $sql="select * from tm_libro where est=1";
            $sql=$conectar->prepare($sql);
			$sql->execute();
			return $resultado=$sql->fetchAll();
      }

      public function get_libros_x_id($lib_id){
         $conectar= parent::conexion();
            parent::set_names();
            $sql="select * from tm_libro where est=1 and lib_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $lib_id);
			$sql->execute();
			return $resultado=$sql->fetchAll();
      }

   }
?>