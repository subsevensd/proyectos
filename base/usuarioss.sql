CREATE DATABASE usuarioss;
USE usuarioss;
CREATE TABLE datosgen(
	nombre VARCHAR(25) NOT NULL,
	email VARCHAR(40) NOT NULL,
	pais VARCHAR(50) NOT NULL,
	PRIMARY KEY(email),
	FULLTEXT KEY busca(nombre,email)



)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE datosloc(
id INT NOT NULL AUTO_INCREMENT,
pais VARCHAR(50) NOT NULL,
PRIMARY KEY(id)


)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO datosgen VALUES("Rodrigo","sagitarius@hotmail.com","Mexico"),("Juan","simple@gmail.com","Singapur"),("Silvia","sample@gmail.com","Venezuela");
INSERT INTO datosloc VALUES(1,"Mexico"),(2,"Singapur"),(3,"Venezuela"),(4,"Japón"),(5,"China"),(6,"Brasil"),
(7,"Colombia");
