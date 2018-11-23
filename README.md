En aquest repositori, veurem com fer un formulari de Login de manera correcta y utlitzant PDO. 

Comanda per crear la taula:

CREATE TABLE `Users` (
  `User` varchar(50) NOT NULL,
  `Password` varchar(512) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

Contrasenyes d'Usuari:

P@ssw0rd
