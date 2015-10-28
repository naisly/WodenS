CREATE DATABASE shop;

USE shop;

CREATE TABLE phones (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(15) NOT NULL,
  price VARCHAR(15) NOT NULL,
  description VARCHAR(150) NOT NULL,
  category VARCHAR(15) NOT NULL,
  quantity INT(5) NOT NULL
);

INSERT INTO phones VALUES (2, 'Samsung Galaxy 5S', '999, 00', 'Samsung  with available update for Android 5.4', 'Samsung', 24);
