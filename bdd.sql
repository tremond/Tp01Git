CREATE TABLE Users (
    idUser int(11) NOT NULL AUTO_INCREMENT,
    login VARCHAR(64),
    password VARCHAR(64),
    isAdmin boolean,
    PRIMARY KEY (idUser)
)   DEFAULT CHARSET=utf8;

INSERT INTO Users (login, password, isAdmin) VALUES ("Pablo", sha1("password"), true);
INSERT INTO Users (login, password, isAdmin) VALUES ("Michel", sha1("password"), true);