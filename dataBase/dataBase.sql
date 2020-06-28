Create Database tienda_master;
USE tienda_master;

create table Usuarios(
id 			int(255) auto_increment not null,
nombre		varchar(100) not null,
apellidos	varchar(255),	
email		varchar(255) not null,
password	varchar(255) not null,
rol			varchar(20),
imagen		varchar(255),
constraint pk_usuarios primary key(id),
constraint uq_email unique(email) 
)Engine=innodb;

insert into Usuarios values (null, 'Admin','Admin','admin@admin.com','contraseña','admin',null)

/**************************************/

create table Categorias(
id 		int(255) auto_increment not null,
nombre	varchar(100) not null,
constraint pk_categorias primary key(id)
)Engine=innodb;

insert into Categorias values (null,'Manga Corta');
insert into Categorias values (null,'Tirantes');
insert into Categorias values (null,'Manga larga');
insert into Categorias values (null,'Sudaderas');

/**************************************/

create table Productos(
id       		int(255) auto_increment not null,
categoria_id	int(255) not null,
nombre			varchar(100) not null,
descripcion		text,
precio			float(100,2) not null,
stock			int(255) not null,
oferta			varchar(2),
fecha			date not null,
imagen			varchar(255),
constraint pk_productos primary key(id),
constraint fk_producto_categoria foreign key(categoria_id) references Categorias(id)
)Engine=innodb;

/**************************************/

create table Pedidos(
id       		int(255) auto_increment not null,
usuario_id		int(255) not null,
provincia		varchar(100) not null,
localidad 		varchar(100) not null,
direccion 		varchar(255) not null,
costo			float(200,2) not null,
estado 			varchar(20) not null,
fecha			date,
hora			time,
constraint pk_pedidos primary key(id),
constraint fk_pedidos_usuarios foreign key(usuario_id) references Usuarios(id)

)Engine=innodb;

/**************************************/	
create table lineas_pedido(
id 			int (255) auto_increment not null,
pedido_id	int(255) not null,
producto_id int(255) not null,
constraint pk_lineas_pedido primary key(id),
constraint fk_lineas_pedidos foreign key(pedido_id) references Pedidos(id),
constraint fk_lineas_productos foreign key(producto_id) references Productos(id)

)Engine=innodb;

/*****************************************/
create table departamentos(
id int(255) auto_increment not null,
n_dormitorio int(255),
n_banos int(255),
bodega char(2),
estacionamiento char(2),
mt_util varchar(255),
mt_total varchar(255),
terraza char(2),
constraint pk_departamentos primary key(id)
)Engine=innodb;


create table edificios(
id int(255) auto_increment not null,
id_departamento int(255) ,
comuna varchar(255) ,
direccion varchar(255) ,
areas_verdes char(2) ,
acces_transporte char(2) ,
acces_centro_educ char(2) ,
acces_centro_comer char(2) ,
quincho char(2) ,  
piscina char(2) ,
jacuzzi char(2) ,
constraint pk_edificios primary key(id),
constraint fk_edificios foreign key(id_departamento) references departamentos(id)
)Engine=innodb;

create table general(
id int(255) auto_increment not null,
id_deptos int(255),
direccion varchar(255),
dormitorio int(255),
precio int(255),
mt_utiles float(6,2)
constraint pk_general primary key(id)
)Engine=innodb;

create table deptos(
id int(255) auto_increment not null,
mt_total float(6,2),
dormitorio int(255),
banos int(255),
constraint pk_deptos primary key(id)
)Engine=innodb;
/********************************/
create table Propiedades(
id 				int(255) auto_increment not null,
id_categoria 	int(255) not null,
precio 			varchar(255) not null,
metros			varchar(100) not null,
dormitorio		varchar(100) not null,	
bano			varchar(100) not null,
direccion		varchar(255) not null,
ciudad			varchar(255) not null,
imagen			varchar(255) null,
fecha			date null,
constraint pk_propiedades primary key(id)
)Engine=innodb;

create table categorias
(
	id int(255) auto_increment not null,
	nombre varchar(100) not null,
	constraint pk_categorias primary key(id)
)Engine=innodb;

insert into categorias values (1, 'Casa');
insert into categorias values (2, 'Departamento');
insert into categorias values (3, 'Oficina');








	