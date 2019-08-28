<?php 

	class funcionarios{


		// REGISTRO IMAGENES
		public function agregaImagen($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$fecha=date('Y-m-d');

			$sql="INSERT into imagenes (nombre,
										ruta,
										fechaSubida)
							values (
									'$datos[0]',
									'$datos[1]',
									'$fecha')";
			$result=mysqli_query($conexion,$sql);

			return mysqli_insert_id($conexion);
		}
		
		public function obtenIdImg($idFuncionario){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="SELECT id_imagen 
					from funcionarios 
					where id_funcionario='$idFuncionario'";
			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_row($result)[0];
		}

		public function obtenRutaImagen($idImg){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="SELECT ruta 
					from imagenes 
					where id_imagen='$idImg'";

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_row($result)[0];
		}
		//REGISTRO DE USUARIOS
		public function registroFuncionario($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$fecha=date('Y-m-d');
			$sql="INSERT into funcionarios (expediente,
								id_imagen,
								nombre,
								apellido,
								cedula,
								edocivil,
								fechaN,
								antiguedad,
								direccion,
								telefono,
								fechaIngreso,
								cargo,
								id_tipoP,
								id_clasificacion,
								id_departamento,
								profesion,
								id_municipio,
								id_parroquia
								)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]',
								'$datos[8]',
								'$datos[9]',
								'$fecha',
								'$datos[11]',
								'$datos[12]',
								'$datos[13]',
								'$datos[14]',
								'$datos[15]',
								'$datos[16]',
								'$datos[17]')";
			return mysqli_query($conexion,$sql);
		}
		
		//REGISTRO DE USUARIOS
		public function registroFuncionarioP($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$fecha=date('Y-m-d');
			$sql="INSERT into funcionarios (expediente,
								
								nombre,
								apellido,
								cedula,
								edocivil,
								fechaN,
								antiguedad,
								direccion,
								telefono,
								fechaIngreso,
								cargo,
								id_tipoP,
								id_clasificacion,
								id_departamento,
								profesion,
								id_municipio,
								id_parroquia
								)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]',
								'$datos[8]',
								'$datos[9]',
								'$fecha',
								'$datos[11]',
								'$datos[12]',
								'$datos[13]',
								'$datos[14]',
								'$datos[15]',
								'$datos[16]')";
			return mysqli_query($conexion,$sql);
		}		
		//OBTENER DATOS FUNCIONARIOS
		public function obtenDatosFuncionario($idfuncionario){
			$c=new conectar();
			$conexion=$c->conexion();
			$sql="SELECT id_funcionario,
							expediente,
							nombre,
							apellido,
							cedula,
							edocivil,
							fechaN,
							antiguedad,
                            direccion,
                            telefono,
							fechaIngreso,
							cargo,
							id_tipoP,
							id_clasificacion,
							id_departamento,
							profesion
					from funcionarios 
					where id_funcionario='$idfuncionario'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
						'id_funcionario' => $ver[0],
						'expediente' => $ver[1],
						'nombre' => $ver[2],
						'apellido' => $ver[3],
						'cedula' => $ver[4],
						'edocivil' => $ver[5],
						'fechaN' => $ver[6],
						'antiguedad' => $ver[7],
                        'direccion' => $ver[8],
						"telefono" => $ver[9],
						'fechaIngreso' => $ver[10],
						'cargo' => $ver[11],
						'id_tipoP' => $ver[12],
						'id_clasificacion' => $ver[13],
						'id_departamento' => $ver[14],
						'profesion' => $ver[15]
						);
			return $datos;
		}
		// ACTUALIZAR FUNCIONARIO
		public function actualizaFuncionario($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$fecha=date('Y-m-d');
			$sql="UPDATE funcionarios set expediente='$datos[1]',
									nombre='$datos[2]',
									apellido='$datos[3]',
									cedula='$datos[4]',
									edocivil='$datos[5]',
									fechaN='$datos[6]',
									antiguedad='$datos[7]',
									direccion='$datos[8]',
									telefono='$datos[9]',
									fechaIngreso='$datos[10]',
									cargo='$datos[11]',
									id_tipoP='$datos[12]',
									id_clasificacion='$datos[13]',
									id_departamento='$datos[14]',
									profesion='$datos[15]'

						where id_funcionario='$datos[0]'";
			return mysqli_query($conexion,$sql);	
		}
		//ELIMINA FUNCIONARIO
			public function eliminaFuncionario($idfuncionario){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from funcionarios 
					where id_funcionario='$idfuncionario'";
			return mysqli_query($conexion,$sql);
		}	
		
	}
?>