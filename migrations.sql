-- CREATE DATABASE stars;
-- USE stars;

CREATE TABLE users(
	id	INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(50),
	pass VARCHAR(50)
);

INSERT INTO users 
(username, pass)
VALUES 
("admin", "parole123");

SELECT * FROM users;


CREATE TABLE stars(
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 image VARCHAR (225),
 user_id INT
 
)
INSERT INTO stars 
(user_id, image)
VALUES 
("1", "stars2.png");

SELECT * FROM stars;