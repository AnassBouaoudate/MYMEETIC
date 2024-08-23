DROP DATABASE IF EXISTS meetic;

CREATE DATABASE meetic;

USE meetic;

DROP TABLE IF EXISTS utilisateur;

CREATE TABLE utilisateur (
    id              INT             NOT NULL AUTO_INCREMENT,
    nom             VARCHAR(255)    NOT NULL,
    prenom          VARCHAR(255)    NOT NULL,
    datenaissance   DATE       NOT NULL,
    ville           VARCHAR(255),
    email           VARCHAR(255)   NOT NULL UNIQUE,
    motdepasse      VARCHAR(255),
    loisir          VARCHAR(255),
    genre           VARCHAR(255),
    PRIMARY KEY (id)
);
