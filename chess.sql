CREATE DATABASE chess;

CREATE TABLE users
(
	username varchar(30),
	password varchar(30)
);



/* Opprette en bruker som har full tilgang til denne databasen (og bare denne!) */
CREATE USER 'chess'@'localhost' IDENTIFIED BY 'Chess123';
GRANT ALL PRIVILEGES ON chess.* TO 'chess'@'localhost';
FLUSH PRIVILEGES;