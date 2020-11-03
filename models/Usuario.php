<?php
   class Usuario extends Conectar {
   	    public function get_usuario(){
   	    	$conectar=parent::Conexion();
   	    	parent::set_names();
			$sql="select * from tm_usuario where est='1' order by usu_apep asc";
   	    	$sql=$conectar->prepare($sql);
   	    	$sql->execute();
   	    	return $resultado=$sql->fetchAll();
		}

		public function login(){
			$conectar=parent::Conexion();
			parent::set_names();
			if(isset($_POST["enviar"])){
				
				$password = $_POST["password"];
				$correo = $_POST["correo"];
				$est = "1";

				if(empty($correo) and empty($password)){
					header("Location:".Conectar::ruta()."index.php?m=2");
					exit();
				}
			else {
				$sql= "select * from tm_usuario where usu_email=? and usu_email_pass=? and est=?";
				$sql=$conectar->prepare($sql);
				$sql->bindValue(1, $correo);
				$sql->bindValue(2, $password);
				$sql->bindValue(3, $est);
				$sql->execute();
				$resultado = $sql->fetch();
					if(is_array($resultado) and count($resultado)>0){
						$_SESSION["usu_id"] = $resultado["usu_id"];
						$_SESSION["usu_nom"] = $resultado["usu_nom"];
						$_SESSION["usu_email"] = $resultado["usu_email"];
						$_SESSION["usu_img"] = $resultado["usu_img"];
						$_SESSION["pe_id"] = $resultado["pe_id"];
						header("Location:".Conectar::ruta()."view/Home/");
						exit(); 
					} else {
						header("Location:".Conectar::ruta()."index.php?m=1");
						exit();
					} 
				}
			}
        }
        
        public function insert_usuario($usu_nom,$usu_ape,$usu_correo,$usu_pass){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_usuario  VALUES (NULL, ?, ?, ?, '', '', NULL, 'M', NULL, NULL, NULL, ?, NOW(), NULL, NULL, '1');";
            //echo $sql; Imprime la consulta en consola.
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usu_nom);
            $sql->bindValue(2,$usu_ape);
			$sql->bindValue(3,$usu_correo);
			$sql->bindValue(4,$usu_pass);
            $sql->execute();	
		}

		public function get_correo_usuario($usu_correo){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_usuario WHERE usu_correo = trim(?) AND est=1;";
            $sql=$conectar->prepare($sql);
			$sql->bindValue(1,$usu_correo);
			$sql->execute();
			return $resultado=$sql->fetchAll();
        }
			
   }
?>