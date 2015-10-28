CREATE DATABASE shop;

USE shop;

CREATE TABLE phones (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(15) NOT NULL,
  photo VARCHAR(30) NOT NULL,
  description VARCHAR(150) NOT NULL,
  category VARCHAR(15) NOT NULL,
  price VARCHAR(10) NOT NULL,
  previous_price VARCHAR(10),
  time_of_adding VARCHAR(20) NOT NULL,
  features VARCHAR(100) NOT NULL,
  quantity INT(5) NOT NULL,
  shipping VARCHAR(10) NOT NULL
);

INSERT INTO phones VALUES (1, 'Iphone 6', 'images/photo1.jpg', 'Newest Iphone by Apple with IOS 9 functionality',
                           'Apple', '1.499', '1.800', '1st December', 'With earpods and USB', 5, '7-11');

INSERT INTO phones VALUES (2, 'Samsung Galaxy', 'images/photo1.jpg', 'Latest Samsung in the serial of Samsung Inc.', 'Samsung','1.222',
                             '1.422', '2nd Novermber', 'With headphones and USD', 1, '5-9');
