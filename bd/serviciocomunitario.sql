create database alcaloide;

use alcaloide;

create table roles(
				id_rol int,
				rol varchar(50),
				primary key(id_rol)
					);

create table usuarios(
				id_usuario int auto_increment,
				id_rol int not null,
				nombre varchar(50),
				apellido varchar(50),
				username varchar(50),
				password text(50),
				primary key(id_usuario)
					);

create table funcionarios(
        id_funcionario int auto_increment,
        expediente int,
        nombre varchar(30),
        apellido varchar(30),
        cedula int,
        edocivil varchar(100),
        fechaN date,
        antiguedad int,
        direccion varchar(30),
        telefono varchar(30),
        fechaIngreso date,
        cargo varchar(100),
        id_imagen int not null,
        id_departamento int not null,
        id_clasificacion int not null,
        profesion varchar(50),
        id_municipio int not null,
        id_parroquia int not null,
        id_cargaFamilia int not null,
        id_tipoP int not null,
        id_tipoD int not null,
        id_documento int not null,
        primary key(id_funcionario)
        );
create table cargafamilia( 
    id_cargaFamilia int auto_increment,
    cargaF varchar(100),
    menores_uno varchar(100),
    menores_dos varchar(100),
    esposo varchar(100),
    beneficioUtiles varchar(100),
    guarderia varchar(10),
    becas varchar(10),
    juguetes varchar(10),
    id_funcionario int not null,
    id_documento int not null,
    primary key(id_cargaFamilia)
);
create table imagenes(
    id_imagen int auto_increment,
    nombre varchar(200),
    ruta varchar(200),
    fechaSubida date,
    primary key(id_imagen)
);
create table cedulas(
    id_cedula int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_cedula)
);
create table partidasn(
    id_partidasn int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_partidasn)
);
create table actam(
    id_actaM int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_actaM)
);
create table cedulahijos(
    id_cedulah int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_cedulah)
);
create table constanciae(
    id_constanciae int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_constanciae)
);
create table constanciasol(
    id_constanciasol int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_constanciasol)
);
create table curriculum(
    id_curriculum int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_curriculum)
);
create table fondonegro(
    id_fondonegro int auto_increment,
    id_funcionario int not null,
    id_departamento int not null,
    userPic varchar(200),
    primary key(id_fondonegro)
);
create table parroquia (
  id_parroquia int(11) NOT NULL,
  id_municipio int(11) NOT NULL,
  parroquia varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  primary key(id_parroquia),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO parroquia (id_parroquia, id_municipio, parroquia) VALUES
(1, 1, Antonio Spinetti Dini(Mérida)),
(2, 1, Arias (Mérida)),
(3, 1, Caracciolo Parra Pérez (Mérida)),
(4, 1, Domingo Peña (Mérida)),
(5, 1, El Llano (Mérida)),
(6, 1, Gonzalo Picón Febres (Mérida)),
(7, 1, Jacinto Plaza (Mérida)),
(8, 1, Juan Rodríguez Suárez (Mérida)),
(9, 1, Lasso de la Vega (Mérida)),
(10, 1, Mariano Picón Salas (Mérida)),
(11, 1, Milla (Mérida)),
(12, 1, Osuna Rodríguez (Mérida)),
(13, 1, Sagrario (Mérida)),
(14, 1, El Morro (El Morro)),
(15, 1, Los Nevados (Los Nevados)),
(16, 2, Fernández Peña (Ejido)),
(17, 2, Matriz (Ejido)),
(18, 2, Montalbán (Ejido)),
(19, 2, Acequias (Acequias)),
(20, 2, Jají (Jají)),
(21, 2, La Mesa (La Mesa)),
(22, 2, San José del Sur (San José));

create table municipio (
  id_municipio int(11) not null,
  municipio varchar(50) not null,
  primary key(id_municipio),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO municipio (id_municipio, municipio) VALUES
(1, Libertador),
(2, Campo Elias);

create table clasificacion (
    id_clasificacion int(11) not null,
    clasificacion varchar(100),
    primary key(id_clasificacion)
)
INSERT INTO clasificacion (id_clasificacion, clasificacion) VALUES
(1, BI),
(2, BII),
(3, BIII),
(4, PI),
(5, PII),
(6, PII),
(7, TI),
(8, TII);