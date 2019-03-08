CREATE TABLE Users (
    idUser int(11) NOT NULL AUTO_INCREMENT,
    login VARCHAR(64),
    password VARCHAR(64),
    isAdmin boolean,
    PRIMARY KEY (idUser)
)   DEFAULT CHARSET=utf8;

INSERT INTO Users (login, password, isAdmin) VALUES ("Pablo", sha1("password"), true);

CREATE TABLE Oeuvres ( 
	idOeuvre int NOT NULL AUTO_INCREMENT,
	annee int,
	nomOeuvre varchar(64),
	prix float,
	idTheme int,
	PRIMARY KEY (idOeuvre)) DEFAULT CHARSET=utf8;
	
CREATE TABLE Theme ( 
	idTheme int NOT NULL AUTO_INCREMENT,
	nomTheme varchar(64),
	PRIMARY KEY (idTheme)) DEFAULT CHARSET=utf8;
	
ALTER TABLE Oeuvres
ADD CONSTRAINT id_OeuvreTheme
FOREIGN KEY (idTheme)
REFERENCES Theme(idTheme);


INSERT INTO Oeuvres (idOeuvre, annee, nomOeuvre, prix, idTheme) VALUES
(1, 2017, "Mano Lasi", 12, 3),
(2, 2016, "Le cry", 53, 3),
(3, 2017,"La loutre", 100, 1),
(4, 2018,"Fizz", 25, 2),
(5, 2019,"El cartono", 1000, 3),
(6, 2015, "Husky", 1200, 1);

INSERT INTO Theme (idTheme, nomTheme) VALUES 
(1, "Animaux"),
(2, "Figurines"),
(3, "Abstrait");
	
