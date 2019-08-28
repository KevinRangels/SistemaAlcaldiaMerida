<?php 

	class cargas{
		//REGISTRO DE USUARIOS
		public function registroCargaF($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$sql="INSERT into cargafamilia (id_departamento,
								id_funcionario,
								cargaF,
								menores_uno,
								menores_dos,
								esposo,
								beneficioUtiles,
								guarderia,
								becas,
								juquetes
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
								'$datos[9]')";
			return mysqli_query($conexion,$sql);
		}	
		public function obtenDatosCargaF($idcargaf){
			$c=new conectar();
			$conexion=$c->conexion();
			$sql="SELECT id_cargaFamilia,
							cargaF,
							menores_uno,
							menores_dos,
							esposo,
							beneficioUtiles,
							guarderia,
							becas,
                            juquetes
					from cargafamilia 
					where id_cargaFamilia='$idcargaf'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);
			$datos=array(
						'id_cargaFamilia' => $ver[0],
						'cargaF' => $ver[1],
						'menores_uno' => $ver[2],
						'menores_dos' => $ver[3],
						'esposo' => $ver[4],
						'beneficioUtiles' => $ver[5],
						'guarderia' => $ver[6],
                        'becas' => $ver[7],
						"juquetes" => $ver[8]
						);
			return $datos;
		}

		public function actualizaCargaF($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$sql="UPDATE cargafamilia set cargaF='$datos[1]',
									menores_uno='$datos[2]',
									menores_dos='$datos[3]',
									esposo='$datos[4]',
									beneficioUtiles='$datos[5]',
									guarderia='$datos[6]',
									becas='$datos[7]',
									juquetes='$datos[8]'

						where id_cargaFamilia='$datos[0]'";
			return mysqli_query($conexion,$sql);	
		}

		//ELIMINA CARGA FAMILIAR
		public function eliminaCargaF($idcargaf){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from cargafamilia 
					where id_cargaFamilia='$idcargaf'";
			return mysqli_query($conexion,$sql);
		}	

	}
?>