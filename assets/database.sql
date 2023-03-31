
CREATE TABLE maquinas(
    id int(3) auto_increment not null,
    marca varchar(30) not null,
    modelo varchar (30) not null,
    sala varchar (20) not null, 
    fecha_service date not null,
    CONSTRAINT pk_maquinas PRIMARY KEY (id)
)ENGINE=InnoDB;


INSERT INTO maquinas VALUE (null, 'DIAMAX', '13V2666', '1', CURDATE());

INSERT INTO maquinas VALUE (null, 'FRESENIUS', 'A5V2126', '1', CURDATE());

INSERT INTO maquinas VALUE (null, 'DIAMAX', '14V2866', '3', CURDATE());