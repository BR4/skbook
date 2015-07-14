create database skbookDataBase;
use skbookDataBase;
create table libro(
	idLibro int unsigned not null  primary key,
	idAutor int unsigned not null,
	idCategoria int unsigned not null,
	idEditorial int unsigned not null,
	idPublicador int unsigned not null,
	nombreLibro varchar(100) not null,
	descripcion varchar(250) not null,
	fechaPublicacion time not null,
	lugarPublicacion varchar(100) not null,
	edicion varchar(100) not null,
	numeroPaginas varchar(4) not null,
	isbn varchar(10) not null,
	estatus bit default 1 not null
) engine = InnoDB;

create table autor(
	idAutor int unsigned not null primary key,
	nombreAutor varchar(100) not null,
	apellidoPaterno varchar(100) not null,
	apellidoMaterno varchar(100) not null,
	descripcion varchar(250) not null,
    paisOrigen varchar(100) not null,
	alias varchar(50) not null,
	estatus bit default 1 not null
) engine = InnoDB;

create table autorEditorial(
	idAutorEditorial int unsigned not null primary key,
	idEditorial int unsigned not null,
	idAutor int unsigned not null
) engine = InnoDB;


create table publicador(
	idPublicador int unsigned not null primary key,
	idUsuario int unsigned not null,
	fechaPublicacion timestamp not null,
	estatus bit default 1 not null
) engine = InnoDB;


create table categoria(
	idCategoria int unsigned not null primary key,
	nombre varchar(100) not null,
	descripcion varchar(100) not null,
	estatus bit default 1 not null
) engine = InnoDB;

create table editorial(
	idEditorial int unsigned not null primary key,
	nombre varchar(100) not null,
	descripcion varchar(100) not null,
	avenida varchar(100) not null,
	calle varchar(100) not null,
	paginaWeb varchar(100) not null,
	estatus bit default 1 not null
) engine = InnoDB;

create table usuario(
	idUsuario int unsigned not null primary key,
	nombreUsuario  varchar(100) not null,
	apellidoPaterno varchar(100) not null,
	apellidoMaterno varchar(100) not null,
	alias varchar(50) not null,
	contrasenia varchar(10) not null,
	estatus bit default 1 not null
) engine = InnoDB;

alter table libro add constraint fk_autor foreign key(idAutor) 
references autor(idAutor)on update cascade on delete cascade;

alter table libro add constraint fk_categoria foreign key(idCategoria) 
references categoria(idCategoria)on update cascade on delete cascade;

alter table libro add constraint fk_editorial foreign key(idEditorial) 
references editorial(idEditorial)on update cascade on delete cascade;

alter table libro add constraint fk_publicador foreign key(idPublicador) 
references publicador(idPublicador)on update cascade on delete cascade;

alter table publicador add constraint fk_usuario foreign key(idUsuario) 
references usuario(idUsuario)on update cascade on delete cascade;

alter table autorEditorial add constraint fk_autorEditorialAutor foreign key(idAutor) 
references autor(idAutor)on update cascade on delete cascade;

alter table autorEditorial add constraint fk_autorEditorialEditorial foreign key(idEditorial) 
references editorial(idEditorial)on update cascade on delete cascade;

insert into usuario(idUsuario,nombreUsuario,apellidoPaterno,apellidoMaterno,alias,contrasenia) 
values(1,'Brandon','Brandon','Brandon','Brandon','12345678');

insert into autor(idAutor,nombreAutor,apellidoPaterno,apellidoMaterno,descripcion,paisOrigen,alias) 
values(1,'Paulo','coelho','desconocido','Buen autor','Colombia','Paulo coelho');

insert into editorial(idEditorial,nombre,descripcion,avenida,calle,paginaWeb)
values (1,'Grijalbo','alguna','alguna','alguna','alguna');

insert into categoria(idCategoria,nombre,descripcion) values(1,'Ejemplo','Alguna categoria'); 

insert into autorEditorial(idAutorEditorial,idEditorial,idAutor) values(1,1,1);

insert into publicador(idPublicador,idUsuario,fechaPublicacion) values(1,1,current_timestamp);

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (1, 1, 1, 1, 1, 'Ejemplo 1', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '122', '22',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (2, 1, 1, 1, 1, 'Ejemplo 2', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '872', '22222',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (3, 1, 1, 1, 1, 'Ejemplo 3', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '772', '22',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (4, 1, 1, 1, 1, 'Ejemplo 4', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '232', '22',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (5, 1, 1, 1, 1, 'Ejemplo 5', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '566', '22222',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (6, 1, 1, 1, 1, 'Ejemplo 6', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '882', '22',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (7, 1, 1, 1, 1, 'Ejemplo 7', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '132', '22',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (8, 1, 1, 1, 1, 'Ejemplo 8', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '462', '22222',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (9, 1, 1, 1, 1, 'Ejemplo 9', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '442', '22',b'1');

INSERT INTO libro(idLibro, idAutor, idCategoria,idEditorial, idPublicador, nombreLibro,descripcion,fechaPublicacion, lugarPublicacion, edicion, numeroPaginas, isbn, estatus) 
VALUES (10, 1, 1, 1, 1, 'Ejemplo 10', 'Otro', CURRENT_TIME(), 'Otro', 'Otro', '222', '22222',b'1');