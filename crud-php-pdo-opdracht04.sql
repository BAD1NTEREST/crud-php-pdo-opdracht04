CREATE DATABASE IF NOT EXISTS Nailstudio;

USE Nailstudio;

CREATE TABLE IF NOT EXISTS Afspraak (
  id INT(11) NOT NULL AUTO_INCREMENT,
  email VARCHAR(100) NOT NULL,
  telefoonnummer VARCHAR(20) NOT NULL,
  afspraakdatum DATE NOT NULL,
  afspraaktijd TIME NOT NULL,
  opmerkingen TEXT,
  PRIMARY KEY (id)
);
