DROP DATABASE IF EXISTS arduinodaten;

CREATE DATABASE arduinodaten;
USE arduinodaten;

CREATE TABLE kunde (
    kundeId int NOT NULL AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (kundeId)
);

CREATE TABLE kuehlschrankdaten (
    id INT AUTO_INCREMENT,
    SchrankAuf DATETIME NOT NULL,
    SchrankZu DATETIME NOT NULL,
    SchrankOffenDauer INT NOT NULL,
    PRIMARY KEY (id)
);
