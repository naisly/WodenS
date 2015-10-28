CREATE DATABASE shop;

USE shop;

CREATE TABLE phones (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(15) NOT NULL,
  photo VARCHAR(15) NOT NULL,
  description VARCHAR(150) NOT NULL,
  category VARCHAR(15) NOT NULL,
  price VARCHAR(10) NOT NULL,
  previous_price VARCHAR(10),
  time_of_adding VARCHAR(20) NOT NULL,
  features VARCHAR(100) NOT NULL,
  quantity INT(5) NOT NULL
);

INSERT INTO phones VALUES (1, 'Iphone 6', '/images/iphones.jpg', 'Newest Iphone by Apple with IOS 9 functionality',
                           'Apple', '1, 499', '1, 800', '1st December', 'With earpods and USB', 5);

INSERT INTO phones VALUES (2, 'Samsung Galaxy', '/images/iphones.jpg', 'Latest Samsung in the serial of Samsung Inc.', 'Samsung','1, 222',
                           '1, 422', '2nd Novermber', 'With headphones and USD', 1);
