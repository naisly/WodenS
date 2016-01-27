CREATE DATABASE shop;

USE shop;

CREATE TABLE phones (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
  original_name VARCHAR(200) NOT NULL,
  photo VARCHAR(30) NOT NULL,
  description VARCHAR(300) NOT NULL,
  category VARCHAR(15) NOT NULL,
  price INT(10) NOT NULL,
  previous_price INT(10),
  time_of_adding VARCHAR(20) NOT NULL,
  features VARCHAR(300) NOT NULL,
  quantity INT(5) NOT NULL,
  shipping INT(3) NOT NULL,
  average_price INT(10) NOT NULL,
  time TIMESTAMP
);

CREATE TABLE notebooks (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
  original_name VARCHAR(200) NOT NULL,
  photo VARCHAR(30) NOT NULL,
  description VARCHAR(300) NOT NULL,
  category VARCHAR(15) NOT NULL,
  price INT(10) NOT NULL,
  previous_price INT(10),
  time_of_adding VARCHAR(20) NOT NULL,
  features VARCHAR(300) NOT NULL,
  quantity INT(5) NOT NULL,
  shipping INT(3) NOT NULL,
  average_price INT(10) NOT NULL,
  time TIMESTAMP
);

--------------------------------------------TEST----------------------------------
INSERT INTO notebooks VALUES (1, 'Iphone 6S', 'images/iphone6S.jpg', 'Internal memory: 16 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO with Bluetooth 4.2 and NFC as well as Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1455 , 1999, '31th October', 'With old headphones and markers and USB', 3, 12, 1, '2015-10-31 21:21:00');

INSERT INTO notebooks VALUES (2, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7 IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1200, 1599, '1st November', 'With earpods and USB', 5, 11, 1, '2015-11-01 19:34:40');
-------------------------------------------/TEST----------------------------------

INSERT INTO phones VALUES (1, 'Iphone 6S', 'Iphone 6S White 32GB Neverlock','images/iphone6S.jpg', 'Internal memory: 16 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO with Bluetooth 4.2 and NFC as well as Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1455 , 1999, '31th October', 'With old headphones and markers and USB', 3, 12, 1, '2015-10-31 21:21:00');

INSERT INTO phones VALUES (2, 'Iphone 6', 'Iphone 6 Black/White 8GB Neverlock','images/iphone6.png', 'Screen: 4.7 IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1200, 1599, '1st November', 'With earpods and USB', 5, 11, 1, '2015-11-01 19:34:40');

INSERT INTO phones VALUES (3, 'Iphone 5S', 'Iphone 5S White 16GB Unlocked', 'images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 8 GB',
                           'Apple', 1221, 1985, '1st November', 'With earpodes and USB', 5, 22, 1, '2015-11-01 21:01:15');

INSERT INTO phones VALUES (4, 'Iphone 6', 'Iphone 6 Black/White 8GB Neverlock','images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 64 GB', 'Apple',
                           1211 , 1677, '2nd November', 'With new earpods and USB with markers', 3, 11, 1, '2015-11-02 11:11:11');

INSERT INTO phones VALUES (5, 'Iphone 6S', 'Iphone 6S White 32GB Neverlock','images/iphone6S.jpg', 'Internal memory: 64 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO with Bluetooth 4.2 and NFC as well as Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1399 , 1999, '2nd November', 'With old headphones and USB', 3, 12, 1, '2015-11-02 21:10:00');

INSERT INTO phones VALUES (6, 'Iphone 4', 'Iphone 4 Black 64 GB Neverlock','images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           100 , 221, '3rd November', 'With old headphones and markers', 3, 3, 1, '2015-11-03 12:04:15');

INSERT INTO phones VALUES (7, 'Iphone 6', 'Iphone 6 Black/White 8GB Neverlock','images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 64 GB',
                           'Apple', 1111, 1555, '3rd November', 'With earpods and USB', 5, 15, 1, '2015-11-02 21:23:40');

INSERT INTO phones VALUES (8, 'Iphone 5S', 'Iphone 5S White 16GB Unlocked','images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 16 GB',
                           'Apple', 1097, 1322, '5th November', 'With earpodes and USB', 5, 21, 1, '2015-11-05 19:00:01');

INSERT INTO phones VALUES (9, 'Iphone 6S', 'Iphone 6S White 32GB Neverlock','images/iphone6S.jpg', 'Internal memory: 64 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO with Bluetooth 4.2 and NFC as well as Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1600 , 2015, '12st November', 'With old headphones as well as markers and USB', 3, 13, 1, '2015-11-12 11:11:11');

INSERT INTO phones VALUES (10, 'Iphone 6', 'Iphone 6 Black/White 8GB Neverlock','images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1000, 1200, '13th November', 'With earpods and USB', 5, 16, 1, '2015-11-13 21:54:30');

INSERT INTO phones VALUES (11, 'Iphone 5', 'Iphone 5 White 16GB Unlocked','images/iphone5.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 699 , 1022, '15th November', 'With old headphones as well as markers and USB', 3, 11, 1, '2015-11-15 15:04:31');

INSERT INTO phones VALUES (12, 'Iphone 5S', 'Iphone 5S White 16GB Unlocked','images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 8 GB',
                           'Apple', 785, 1255, '15th November', 'With earpodes and USB', 5, 7, 1, '2015-11-15 19:06:06');

INSERT INTO phones VALUES (13, 'Iphone 4', 'Iphone 4 Black 64 GB Neverlock','images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           99 , 101, '16th November', 'With old headphones and markers', 3, 7, 1, '2015-11-16 12:15:15');

INSERT INTO phones VALUES (14, 'Iphone 6S', 'Iphone 6S White 32GB Neverlock','images/iphone6S.jpg', 'Internal memory: 16 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO Bluetooth 4.2 NFC Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                          999 , 1999, '16th November', 'With old headphones as well as markers and USB', 3, 12, 1, '2015-11-16 14:21:00');

INSERT INTO phones VALUES (15, 'Iphone 4S', 'Iphone 4S Black 32 GB Neverlock','images/iphone4S.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           100 , 399, '21th November', 'With old headphones and USB', 3, 2, 1, '2015-11-21 13:10:12');

INSERT INTO phones VALUES (16, 'Iphone 6', 'Iphone 6 White 64GB','images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 999, 1200, '25th November', 'With earpods and USB', 5, 11, 1, '2015-11-25 19:32:40');

INSERT INTO phones VALUES (17, 'Iphone 5S', 'Iphone 5S White 16GB Unlocked','images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 8 GB',
                           'Apple', 999, 1311, '27th November', 'With earpodes and USB', 5, 19, 1, '2015-11-27 13:01:01');

INSERT INTO phones VALUES (18, 'Iphone 4', 'Iphone 4 Black 64 GB Neverlock','images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           1 , 211, '27th November', 'With old headphones and markers', 3, 12, 1, '2015-11-27 17:04:30');

INSERT INTO phones VALUES (19, 'Iphone 6', 'Iphone 6 White 64GB','images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1023, 1545, '28th November', 'With earpods and USB', 5, 8, 1, '2015-11-28 20:50:40');

INSERT INTO phones VALUES (20, 'Iphone 4', 'Iphone 4 Black 64 GB Neverlock','images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           1 , 211, '28th November', 'With old headphones and markers', 3, 8, 1, '2015-11-28 23:12:30');

INSERT INTO phones VALUES (21, 'Iphone 6S', 'Iphone 6S White 32GB Neverlock','images/iphone6S.jpg', 'Internal memory: 16 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO Bluetooth 4.2 NFC Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1200 , 1777, '29th November', 'With old headphones as well as markers and USB', 3, 21, 1, '2015-11-29 12:21:00');

INSERT INTO phones VALUES (22, 'Iphone 5S', 'Iphone 5S White 16GB Unlocked','images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 899, 1310, '30th November', 'With earpodes and USB', 5, 12, 1, '2015-11-30 14:01:05');

INSERT INTO phones VALUES (23, 'Iphone 6', 'Iphone 6 Black/White 8GB Neverlock','images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1234, 1567, '1st December', 'With earpods and USB', 5, 15, 1, '2015-12-01 12:54:07');
/* SASMUNG */
INSERT INTO phones VALUES (24, 'Samsung Galaxy S6','Samsung Galaxy S6 SM-G920F 32GB (Factory Unlocked) 5.1"' ,'Samsung Galaxy ','images/samsungs6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                          'Samsung', 901, 1244, '1st December', 'With headphones', 7, 15, 1, '2015-12-01 17:41:04');

INSERT INTO phones VALUES (25, 'Samsung Galaxy S5', 'Samsung Galaxy S5 SM-G900H Factory Unlocked Cellphone International Version Black','images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 788, 1111, '2nd December', 'With USB and headphones', 8, 21, 1, '2015-12-02 22:21:14');

INSERT INTO phones VALUES (26, 'Samsung Galaxy S4', 'Samsung Galaxy S4 i9500 Factory Unlocked cellphone, International Version, 16GB, White','images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           666, 1000, '3nd December', 'With USB', 1, 12, 1, '2015-12-03 01:12:12');

INSERT INTO phones VALUES (27, 'Samsung Galaxy S3', 'Samsung Galaxy S3 i9300 Unlocked Cellphone International Version 16GB White','images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 700, 999, '4th December', 'With USB and headphones', 5, 12, 1, '2015-12-04 22:22:22');

INSERT INTO phones VALUES (28, 'Samsung Note', 'Samsung Note i6901 Unlocked Cellphone International Version 16GB White','images/samsungNote.jpg', 'Internal memory: 16 GB. CPU: 4 cores with 2.7 GGz. Screen:
                           Super AMOLED 2560 on [1444+160] (Quad HD+). CMOS 16.0 MP. Newest and rapid functionality design',
                           'Samsung', 1011, 1111, '5th December', 'With headphones', 4, 11, 1, '2015-12-05 06:12:56');

/* END MAIN */

INSERT INTO phones VALUES (29, 'Samsung Galaxy S6', 'Samsung Galaxy S6 SM-G920F 32GB (Factory Unlocked) 5.1"' ,'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 888, 1044, '5st December', 'With headphones', 3, 18, 1, '2015-12-05 17:41:04');

INSERT INTO phones VALUES (30, 'Samsung Galaxy S5', 'Samsung Galaxy S5 SM-G900H Factory Unlocked Cellphone International Version Black','images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 700, 1022, '2nd December', 'With USB and headphones', 8, 21, 1, '2015-12-02 20:21:14');

INSERT INTO phones VALUES (31, 'Samsung Galaxy S3', 'Samsung Galaxy S3 i9300 Unlocked Cellphone International Version 16GB White','images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 699, 1022, '4th December', 'With USB and headphones', 5, 12, 1, '2015-12-04 19:22:22');

INSERT INTO phones VALUES (32, 'Samsung Galaxy S6', 'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 1777, 1599, '1st December', 'With headphones', 5, 18, 1, '2015-12-01 12:41:04');

INSERT INTO phones VALUES (33, 'Samsung Galaxy S4', 'Samsung Galaxy S4 i9500 Factory Unlocked cellphone, International Version, 16GB, White','images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           599, 1210, '3nd December', 'With USB', 1, 14, 1, '2015-12-03 11:12:12');

INSERT INTO phones VALUES (34, 'Samsung Note', 'Samsung Galaxy Note Charcoal Black 32GB (Verizon Wireless)','images/samsungNote.jpg', 'Internal memory: 16 GB. CPU: 4 cores with 2.7 GGz. Screen:
                           Super AMOLED 2560 on [1444+160] (Quad HD+). CMOS 16.0 MP. Newest and rapid functionality design',
                           'Samsung', 1111, 1211, '5th December', 'With headphones', 7, 9, 1, '2015-12-05 06:18:56');

INSERT INTO phones VALUES (35, 'Samsung Galaxy S5', 'Samsung Galaxy S5 SM-G900H Factory Unlocked Cellphone International Version Black','images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 700, 1001, '7nd December', 'With USB and headphones', 7, 11, 1, '2015-12-07 20:21:14');

INSERT INTO phones VALUES (36, 'Samsung Galaxy S3', 'Samsung Galaxy S3 i9300 Unlocked Cellphone International Version 16GB White','images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 888, 1022, '10th December', 'With USB and headphones', 3, 10, 1, '2015-12-10 18:22:22');

INSERT INTO phones VALUES (37, 'Samsung Galaxy S6', 'Samsung Galaxy S6 SM-G920F 32GB (Factory Unlocked) 5.1"' , 'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 788, 1044, '11st December', 'With headphones', 6, 12, 1, '2015-12-11 16:41:04');

INSERT INTO phones VALUES (38, 'Samsung Galaxy S4', 'Samsung Galaxy S4 i9500 Factory Unlocked cellphone, International Version, 16GB, White','images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           599, 1211, '6nd December', 'With USB', 2, 14, 1, '2015-12-06 01:12:12');

INSERT INTO phones VALUES (39, 'Samsung Note', 'Samsung Galaxy Note Charcoal Black 32GB (Verizon Wireless)','images/samsungNote.jpg', 'Internal memory: 16 GB. CPU: 4 cores with 2.7 GGz. Screen:
                           Super AMOLED 2560 on [1444+160] (Quad HD+). CMOS 16.0 MP. Newest and rapid functionality design',
                           'Samsung', 1289, 1399, '7th December', 'With headphones', 5, 16, 1, '2015-12-07 09:12:56');

INSERT INTO phones VALUES (40, 'Samsung Galaxy S5', 'Samsung Galaxy S5 SM-G900H Factory Unlocked Cellphone International Version Black','images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 901, 1211, '15nd December', 'With USB and headphones', 5, 1, 1, '2015-12-15 22:21:14');

INSERT INTO phones VALUES (41, 'Samsung Galaxy S4', 'Samsung Galaxy S4 i9500 Factory Unlocked cellphone, International Version, 16GB, White','images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           877, 1200, '3nd December', 'With USB', 4, 15, 1, '2015-12-03 10:12:12');

INSERT INTO phones VALUES (42, 'Samsung Galaxy S3', 'Samsung Galaxy S3 i9300 Unlocked Cellphone International Version 16GB White','images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 877, 1099, '10th December', 'With USB and headphones', 3, 10, 1, '2015-12-10 20:22:22');

INSERT INTO phones VALUES (43, 'Samsung Galaxy S6', 'Samsung Galaxy S6 SM-G920F 32GB (Factory Unlocked) 5.1"' , 'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 1022, 1444, '1st December', 'With headphones', 5, 25, 1, '2015-12-01 12:41:04');

INSERT INTO phones VALUES (44, 'Samsung Galaxy S5', 'Samsung Galaxy S5 SM-G900H Factory Unlocked Cellphone International Version Black','images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 1011, 1521, '12nd December', 'With USB and headphones', 5, 12, 1, '2015-12-12 22:22:14');



SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
  id, quantity, shipping, average_price FROM phones WHERE product_name = 'Iphone 5S' AND price > 100 AND price < 1500;

CREATE TABLE users (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(200) NOT NULL,
  password VARCHAR(100) NOT NULL,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  day_of_birth TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  question1 VARCHAR(200) NOT NULL,
  question2 VARCHAR(200) NOT NULL,
  question3 VARCHAR(200) NOT NULL,
  answer1 VARCHAR(200) NOT NULL,
  answer2 VARCHAR(200) NOT NULL,
  answer3 VARCHAR(200) NOT NULL,
  country VARCHAR(100) NOT NULL,
  advertisements INT(1) NOT NULL
);

CREATE TABLE orderedItems (
  id INT(11) NOT NULL,
  product_name VARCHAR(150) NOT NULL,
  category VARCHAR(100) NOT NULL,
  price INT(15) NOT NULL,
  user VARCHAR(150) NOT NULL,
  quantity INT(15),
  product_table VARCHAR(50) NOT NULL,
  sort_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE completeOrders (
  id INT(11) NOT NULL,
  product_name VARCHAR(150) NOT NULL,
  category VARCHAR(100) NOT NULL,
  price INT(15) NOT NULL,
  user VARCHAR(150) NOT NULL,
  quantity INT(15),
  order_id INT(15),
  product_table VARCHAR(50) NOT NULL,
  sort_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

SELECT phones.original_name, phones.photo, phones.shipping, completeOrders.order_id, completeOrders.price, completeOrders.category FROM
       phones INNER JOIN completeOrders WHERE completeOrders.id = phones.id AND completeOrders.id = 7;

CREATE TABLE doneOrders (
  id INT(11) NOT NULL,
  product_name VARCHAR(150) NOT NULL,
  category VARCHAR(100) NOT NULL,
  price INT(15) NOT NULL,
  user VARCHAR(150) NOT NULL,
  quantity INT(15),
  order_id INT(15),
  product_table VARCHAR(50) NOT NULL,
  sort_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE orders (
  order_id INT(20) NOT NULL,
  name VARCHAR(150) NOT NULL,
  street VARCHAR(250) NOT NULL,
  city VARCHAR(25) NOT NULL,
  state VARCHAR(25) NOT NULL,
  zip VARCHAR(20) NOT NULL,
  country VARCHAR(100) NOT NULL,
  wrap INT(2) NOT NULL
);

CREATE TABLE billing (
  user VARCHAR(150) NOT NULL,
  name VARCHAR(150) NOT NULL,
  street VARCHAR(250) NOT NULL,
  city VARCHAR(25) NOT NULL,
  state VARCHAR(25) NOT NULL,
  zip VARCHAR(20) NOT NULL,
  country VARCHAR(100) NOT NULL,
  wrap INT(2) NOT NULL
);


CREATE TABLE support (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(60) NOT NULL,
  subject VARCHAR(60) NOT NULL,
  message VARCHAR(500) NOT NULL
)

-------------------------------------------NOTEBOOKS------------------------------------------------

CREATE TABLE notebooks (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
  original_name VARCHAR(200) NOT NULL,
  photo VARCHAR(30) NOT NULL,
  description VARCHAR(300) NOT NULL,
  category VARCHAR(15) NOT NULL,
  price INT(10) NOT NULL,
  previous_price INT(10),
  time_of_adding VARCHAR(20) NOT NULL,
  features VARCHAR(300) NOT NULL,
  quantity INT(5) NOT NULL,
  shipping INT(3) NOT NULL,
  average_price INT(10) NOT NULL,
  time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'Macbook Pro', 'Apple Macbook Pro MD101LL/A 13.3-Inch Laptop', 'images/macbookpro.png', '2.7 GHz dual-core Intel Core i5 processor
                      Turbo Boost up to 3.1GHz with 3MB shared L3 cache 13.3-inch IPS Retina Display 2560-by-1600
                      resolution', 'Apple', 1299, 1765, '19th November', 'With selling gift card for up to $625.00',
                      14, 12);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'Macbook Pro', 'Apple MF839LL/A MacBook Pro 13.3-Inch Laptop with Retina Display','images/macbookpro.png', '2.7 GHz dual-core Intel Core i5 processor
                      Turbo Boost up to 3.1GHz with 3MB shared L3 cache 13.3-inch IPS Retina Display 2560-by-1600
                      resolution', 'Apple', 1354, 1899, '19th November', 'With selling gift card for up to $625.00',
                      14, 12);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                     ('', 'Macbook Air', 'Apple MacBook Air MJVE2LL/A 13.3-Inch Laptop (128 GB)','images/macbookair.png', '1.6 GHz dual-core Intel Core i5 (Turbo Boost
                     up to 2.7 GHz) with 3 MB shared L3 cache. 13.3-Inch (diagonal) LED-backlit Glossy Widescreen
                     Display 1440 x 900 resolution', 'Apple', 994, 1022, '20th November', 'With selling gift cart
                     for up to $100.00', 13, 11);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                     ('', 'Macbook Air', 'Apple MacBook Air MJVE2LL/A 13-inch Laptop ','images/macbookair.png', '1.6 GHz dual-core Intel Core i5 (Turbo Boost
                     up to 2.7 GHz) with 3 MB shared L3 cache. 13.3-Inch (diagonal) LED-backlit Glossy Widescreen
                     Display 1440 x 900 resolution', 'Apple', 854, 999, '20th November', 'With selling gift cart
                     for up to $100.00', 15, 8);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'Macbook Pro', 'Apple MacBook Pro MJLQ2LL/A 15.4-Inch Laptop with Retina Display','images/macbookpro.png', '2.7 GHz dual-core Intel Core i5 processor
                      Turbo Boost up to 3.1GHz with 3MB shared L3 cache 13.3-inch IPS Retina Display 2560-by-1600
                      resolution', 'Apple', 1258, 1301, '20th November', 'With selling gift card for up to $625.00',
                      11, 10);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                     ('', 'Macbook Air', 'Apple MacBook Air MC503LL/A 13.3-Inch Laptop (OLD VERSION)','images/macbookair.png', '1.6 GHz dual-core Intel Core i5 (Turbo Boost
                     up to 2.7 GHz) with 3 MB shared L3 cache. 13.3-Inch (diagonal) LED-backlit Glossy Widescreen
                     Display 1440 x 900 resolution', 'Apple', 811, 1094, '21th November', 'With selling gift cart
                     for up to $100.00', 13, 10);
INSERT INTO notebooks(id, product_name, photo, original_name, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                     ('', 'Macbook Air', 'Apple MacBook Air MC965LL/A 13.3-Inch Laptop (OLD VERSION)','images/macbookair.png', '1.6 GHz dual-core Intel Core i5 (Turbo Boost
                     up to 2.7 GHz) with 3 MB shared L3 cache. 13.3-Inch (diagonal) LED-backlit Glossy Widescreen
                     Display 1440 x 900 resolution', 'Apple', 678, 1022, '22th November', 'With selling gift cart
                     for up to $100.00', 1, 12);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'Macbook Pro', 'Apple MacBook Pro 15.4" Laptop - 500 GB HARDRIVE - i7 QUAD-CORE - MC721LL/A','images/macbookpro.png', '2.7 GHz dual-core Intel Core i5 processor
                      Turbo Boost up to 3.1GHz with 3MB shared L3 cache 13.3-inch IPS Retina Display 2560-by-1600
                      resolution', 'Apple', 1459, 1601, '23th November', 'With selling gift card for up to $625.00',
                      12, 16);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                     ('', 'Macbook Air', 'Apple MacBook Air MD760LL/B 13.3-Inch Laptop','images/macbookair.png', '1.6 GHz dual-core Intel Core i5 (Turbo Boost
                     up to 2.7 GHz) with 3 MB shared L3 cache. 13.3-Inch (diagonal) LED-backlit Glossy Widescreen
                     Display 1440 x 900 resolution', 'Apple', 800, 1000, '24th November', 'With selling gift cart
                     for up to $100.00', 14, 15);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'Macbook Pro', 'Apple MacBook Pro MF840LL/A 13.3-Inch Laptop with Retina Display (256 GB)','images/macbookpro.png', '2.7 GHz dual-core Intel Core i5 processor
                      Turbo Boost up to 3.1GHz with 3MB shared L3 cache 13.3-inch IPS Retina Display 2560-by-1600
                      resolution', 'Apple', 1234, 1456, '20th November', 'With selling gift card for up to $625.00',
                      4, 6);

INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Zenbook', 'ASUS Zenbook UX305FA 13.3 Inch Laptop (Intel Core M with 8 GB. 256GB SSD Greyish Black) - Free Upgrade to Windows 10', 'images/asuszenbook.jpg',
                      '13.3-Inch Full-HD IPS Anti-Glare Matte Display with an Ultra-wide 170 Viewing Angle. Intel Core M-5Y10 Processor (4M Cache up to 2.00 GHz). Equipped with dual-band
                      WiFi 802.11N. Bluetooth 4.0.', 'ASUS', '639', '874', '21th November', 'With selling gift card for up to $123.45', 5, 11);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Transformer', 'ASUS Transformer Book Flip TP200SA-DH04T 11.6-inch 2 in 1 Touchscreen Laptop', 'images/asustransformer.jpg','32 GB Storage (expandable up to 128GB via microSD). 1TB OneDrive Cloud Storage for 1 Year. Dual-band
                      802.11N WiFi for fast web browsing. MicroSDXC card reader as microHDMI with microUSB ports & Bluetooth 4.0.', 'ASUS', '655', '785',
                      '22th November', 'With selling gift card for up to $345.67', 4, 10);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Transformer', 'Asus Transformer Book 2015-T 10.1-inches Laptop', 'images/asustransformer.jpg','32 GB Storage (expandable up to 128GB via microSD). 1TB OneDrive Cloud Storage for 1 Year. Dual-band
                      802.11N WiFi for fast web browsing. MicroSDXC card reader as microHDMI with microUSB ports & Bluetooth 4.0.', 'ASUS', '700', '741',
                      '23th November', 'With selling gift card for up to $345.67', 8, 9);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Zenbook', 'ASUS Zenbook UX305LA 13.3-Inch Laptop (Intel Core i5 8GB 256 GB SSD Titanium Gold) with Windows 10', 'images/asuszenbook.jpg',
                      '13.3-Inch Full-HD IPS Anti-Glare Matte Display with an Ultra-wide 170 Viewing Angle. Intel Core M-5Y10 Processor (4M Cache up to 2.00 GHz). Equipped with dual-band
                      WiFi 802.11N. Bluetooth 4.0.', 'ASUS', '768', '899', '23th November', 'With selling gift card for up to $123.45', 8, 12);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Zenbook', 'ASUS Zenbook UX303UA 13.3 Inch. Intel Core i5 8GB. 256GB SSD Laptop Windows 10 (64 bit) Smokey Brown', 'images/asuszenbook.jpg',
                      '13.3-Inch Full-HD IPS Anti-Glare Matte Display with an Ultra-wide 170 Viewing Angle. Intel Core M-5Y10 Processor (4M Cache up to 2.00 GHz). Equipped with dual-band
                      WiFi 802.11N. Bluetooth 4.0.', 'ASUS', '439', '474', '24th November', 'With selling gift card for up to $123.45', 1, 1);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Transformer', 'ASUS T100 10-Inch Wide Laptop [2014]', 'images/asustransformer.jpg','32 GB Storage (expandable up to 128GB via microSD). 1TB OneDrive Cloud Storage for 1 Year. Dual-band
                      802.11N WiFi for fast web browsing. MicroSDXC card reader as microHDMI with microUSB ports & Bluetooth 4.0.', 'ASUS', '678', '899',
                      '25th November', 'With selling gift card for up to $345.67', 6, 15);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Zenbook', 'ASUS Zenbook UX305FA 13.3 Inch Laptop (Intel Core M, 8 GB, 256GB SSD, Greyish Black) - Free Upgrade to Windows 10', 'images/asuszenbook.jpg',
                      '13.3-Inch Full-HD IPS Anti-Glare Matte Display with an Ultra-wide 170 Viewing Angle. Intel Core M-5Y10 Processor (4M Cache up to 2.00 GHz). Equipped with dual-band
                      WiFi 802.11N. Bluetooth 4.0.', 'ASUS', '546', '768', '24th November', 'With selling gift card for up to $123.45', 3, 14);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Zenbook', 'ASUS Zenbook UX303LA-US51T 13.3-Inch Touchscreen Notebook Computer (i5-5200U 8 GB RAM 256 GB SSD Windows 8.1)', 'images/asuszenbook.jpg',
                      '13.3-Inch Full-HD IPS Anti-Glare Matte Display with an Ultra-wide 170 Viewing Angle. Intel Core M-5Y10 Processor (4M Cache up to 2.00 GHz). Equipped with dual-band
                      WiFi 802.11N. Bluetooth 4.0.', 'ASUS', '578', '800', '25th November', 'With selling gift card for up to $123.45', 8, 15);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Transformer', 'Asus Transformer Book 10.1-inch 32GB Detachable 2-in-1 Touch Laptop/Tablet ', 'images/asustransformer.jpg','32 GB Storage (expandable up to 128GB via microSD). 1TB OneDrive Cloud Storage for 1 Year. Dual-band
                      802.11N WiFi for fast web browsing. MicroSDXC card reader as microHDMI with microUSB ports & Bluetooth 4.0.', 'ASUS', '546', '675',
                      '26th November', 'With selling gift card for up to $345.67', 4, 10);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS Transformer', 'ASUS Transformer Pad TF103C-A1-Bundle 10.1-Inch Tablet with Keyboard Bundle (Black)', 'images/asustransformer.jpg','32 GB Storage (expandable up to 128GB via microSD). 1TB OneDrive Cloud Storage for 1 Year. Dual-band
                      802.11N WiFi for fast web browsing. MicroSDXC card reader as microHDMI with microUSB ports & Bluetooth 4.0.', 'ASUS', '566', '675',
                      '27th November', 'With selling gift card for up to $345.67', 6, 15);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS X551MA', 'ASUS X551MA 15.6 Inch Laptop (Intel Celeron, 4 GB, 500GB HDD, Black) - Free Upgrade to Windows 10', 'images/asusx551ma.jpg',
                      '15.6-Inch High-Definition LED-lit display (1366*768) Webcam for Skype. 1x USB 3.0 1x USB 2.0 1x HDMI. No optical drive Windows 8.1 (Free
                      Upgrade to Windows 10)', 'ASUS', '235', '456', '28th November', 'With selling gift card for up to $345.67', 3, 10);
INSERT INTO notebooks(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
                      ('', 'ASUS K501UX', 'ASUS K501UX 15-inch Gaming Laptop (Intel Core i7 Processor, 8GB RAM, 256GB SSD Hard Drive, Windows 10 (64 bit))',
                      'images/asussl1500.jpg', 'Powerful 6th-generation Intel Core i7-6500U 2.5GHz (Turbo up to 3.1GHz). Skylake. Gigabit Dual-Band 802.11AC
                      ultra-fast Wi-Fi.', 'ASUS', '456', '789', '29th November', 'With selling gift card for up to $345.67', 1, 6);

CREATE TABLE television (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
  original_name VARCHAR(200) NOT NULL,
  photo VARCHAR(30) NOT NULL,
  description VARCHAR(300) NOT NULL,
  category VARCHAR(15) NOT NULL,
  price INT(10) NOT NULL,
  previous_price INT(10),
  time_of_adding VARCHAR(20) NOT NULL,
  features VARCHAR(300) NOT NULL,
  quantity INT(5) NOT NULL,
  shipping INT(3) NOT NULL,
  average_price INT(10) NOT NULL,
  time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

---------------------------TELEVISION---------------------------------
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac Retina 5K (OLD)', 'Apple iMac with Retina 5K display (OLDEST VERSION)', 'images/shopimac.jpg', '3.5GHz quad-core Intel Core i5 processor
            27-inch (diagonal) Retina display with IPS technology AMD Radeon R9 M290X graphics processor with 2GB of GDDR5 memory', 'IMac', 2499, 2879,
            '1st December', 'Free shipping and coupon for $199', 11, 17);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac Retina 5K (NEW)', 'Apple iMac with Retina 5K display (NEWEST VERSION)', 'images/imacshop.jpg', 'Mac OS X Yosemite
            8GB (two 4GB) of 1600MHz DDR3 memory; 1 TB Fusion Drive 27-inch (diagonal) Retina display with IPS technology AMD', 'IMac', 3000, 3270,
            '2nd December', 'Free shipping and coupon for $600', 6, 12);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac', 'Apple iMac MK462LL/A 27-Inch Retina 5K Desktop (3.2 GHz Intel Core i5 with 8GB DDR3 & 1TB Mac OS X) Silver', 'images/imac.jpg', '5120 x 2880 Resolution
            AMD Radeon R9 M380 graphics processor with 2GB of GDDR5 memory. 27" Retina 5K Display', 'IMac', 2480, 2750,
            '3rd December', 'Free shipping and coupon for $1000', 9, 15);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac Retina 5K (OLD)', 'Apple iMac with Retina 5K display (OLDEST VERSION)', 'images/shopimac.jpg', '3.5GHz quad-core Intel Core i5 processor
            27-inch (diagonal) Retina display with IPS technology AMD Radeon R9 M290X graphics processor with 2GB of GDDR5 memory', 'IMac', 2769, 2979,
            '4th December', 'Free shipping and coupon for $199', 15, 21);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac Retina 5K (NEW)', 'Apple iMac with Retina 5K display (NEWEST VERSION)', 'images/imacshop.jpg', 'Mac OS X Yosemite
            8GB (two 4GB) of 1600MHz DDR3 memory; 1 TB Fusion Drive 27-inch (diagonal) Retina display with IPS technology AMD', 'IMac', 2199, 2400,
            '5th December', 'Free shipping and coupon for $600', 1, 1);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac Retina 5K (OLD)', 'Apple iMac with Retina 5K display (OLDEST VERSION)', 'images/shopimac.jpg', '3.5GHz quad-core Intel Core i5 processor
            27-inch (diagonal) Retina display with IPS technology AMD Radeon R9 M290X graphics processor with 2GB of GDDR5 memory', 'IMac', 1999, 2879,
            '5th December', 'Free shipping and coupon for $199', 1, 12);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac', 'Apple iMac MK462LL/A 27-Inch Retina 5K Desktop (3.2 GHz Intel Core i5 with 8GB DDR3 & 1TB Mac OS X) Silver', 'images/imac.jpg', '5120 x 2880 Resolution
            AMD Radeon R9 M380 graphics processor with 2GB of GDDR5 memory. 27" Retina 5K Display', 'IMac', 1820, 1800,
            '6th December', 'Free shipping and coupon for $1000', 6, 10);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac Retina 5K (NEW)', 'Apple iMac with Retina 5K display (NEWEST VERSION)', 'images/imacshop.jpg', 'Mac OS X Yosemite
            8GB (two 4GB) of 1600MHz DDR3 memory; 1 TB Fusion Drive 27-inch (diagonal) Retina display with IPS technology AMD', 'IMac', 2958, 3600,
            '7th December', 'Free shipping and coupon for $600', 5, 10);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac', 'Apple iMac MK462LL/A 27-Inch Retina 5K Desktop (3.2 GHz Intel Core i5 with 8GB DDR3 & 1TB Mac OS X) Silver', 'images/imac.jpg', '5120 x 2880 Resolution
            AMD Radeon R9 M380 graphics processor with 2GB of GDDR5 memory. 27" Retina 5K Display', 'IMac', 2100, 2467,
            '8th December', 'Free shipping and coupon for $1000', 10, 15);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'IMac Retina 5K (OLD)', 'Apple iMac with Retina 5K display (OLDEST VERSION)', 'images/shopimac.jpg', '3.5GHz quad-core Intel Core i5 processor
            27-inch (diagonal) Retina display with IPS technology AMD Radeon R9 M290X graphics processor with 2GB of GDDR5 memory', 'IMac', 2968, 3000,
            '8th December', 'Free shipping and coupon for $199', 15, 21);


INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Apple TV Mount', 'TotalMount - Apple TV Mount (Compatible with the New Apple TV)', 'images/appletv.jpg', 'Mount for Apple TV (Apple TV not included)
            Perfect for wall-mounted televisions (Attaches Apple TV to the back of your television)', 'AppleTV', 76, 102, '9th December',
            '5$ shipping and coupon for 15$ as free', 11, 15);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Apple TV Mount', 'Apple TV Mount', 'images/appletv1.jpg', 'Designed for the new Apple TV (Apple TV 4)
            Includes three mounting options: innovative hooks for TV vents and special adhesive for elevated TV temperatures with screws for wall mounting', 'AppleTV', 102, 132, '10th December',
            '15$ shipping and coupon for 35$ as free', 13, 18);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Apple TV Mount', 'Apple TV (Compatible)', 'images/appletv2.jpg', 'Perfect for wall-mounted televisions (Attaches Apple TV to the back of your television)
            Designed for the new Apple TV (Apple TV 4)', 'AppleTV', 38, 69, '11th December',
            '5$ shipping and coupon for 25$ as free', 12, 15);
            '15$ shipping and coupon for 35$ as free', 13, 18);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'ShowTop 4K', 'ShowTop 4K Quad Core Android Tv Box Fully Loaded', 'images/appletv1.jpg', 'Pre-install XBMC media center XBMC can be used to play almost all popular audio and video formats around
            Support to play 3D blu-ray and Blu-ray ISO format video and movies directly.Great wifi signals with support ethernet port and bluetooth v4.0.Support Mircast Wifi-display mirroring With Wi-Fi sharing picture/video/music from Apple devices as well Android smartphones', 'ShowTop', 99, 200, '11th December',
            '55$ shipping and coupon for 100$ as free', 10, 10);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'ShowTop 4K', 'ShowTop 4K Quad Core', 'images/appletv3.jpg', 'Excellent performance with S812 Quad-core processor Octa core GPU.Adding H.265/HEVC video decoding up to 4K.Could be also used as a pretty good gaming platform or a media center
            Enjoy customization on the highly evolved Android Kit Kat 4.4.Enjoy the best of Google with voice commands.CxMorInfoTec TVB-M8C OTT S812 4K Quad FULL HD-4K*2K HDMI Output with full 3840*2160 ULTRA HD 1080P video decoding and output', 'ShowTop', 68, 199, '12th December',
            '55$ shipping and coupon for 100$ as free', 12, 12);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'AirPort', 'AirPort Extreme 802.11n (5th Generation)', 'images/appletv2.jpg', 'Package Content: AirPort Extreme Base Station. Printed documentation as well as Power cordFeatures. 1-Year Limited Warranty
            Connect your DSL or cable modem to the AirPort Extreme Base Station then set it up with the AirPort Utility available as download.', 'AppleTV', 25, 67, '13th December',
            '15$ shipping and coupon for 55$ as free', 10, 9);
INSERT INTO television(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'AirPort', 'AirPort normal', 'images/appletv.jpg', 'AirPort Extreme works simultaneously on both the 2.4GHz and 5GHz bands allows all devices on the network to use band automatically.
            Set up a separate Wi-Fi network with a separate password for your visitors.', 'AppleTV', 67, 91, '14th December',
            '25$ shipping and coupon for 55$ as free', 6, 19);

CREATE TABLE gadgets (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
  original_name VARCHAR(200) NOT NULL,
  photo VARCHAR(30) NOT NULL,
  description VARCHAR(300) NOT NULL,
  category VARCHAR(15) NOT NULL,
  price INT(10) NOT NULL,
  previous_price INT(10),
  time_of_adding VARCHAR(20) NOT NULL,
  features VARCHAR(300) NOT NULL,
  quantity INT(5) NOT NULL,
  shipping INT(3) NOT NULL,
  average_price INT(10) NOT NULL,
  time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad mini', 'Apple iPad mini MD531LL/A (16GB Wi-Fi Only White / Silver)', 'images/ipadshop1.jpg', '7.9-inch LED-backlit Multi-Touch Display; 1024-by-768 Resolution
            Apple iOS 6; Dual-Core A5 Chip 1GHZ', 'Apple', 299, 431, '15th December', '25$ shipping and coupon for 55$ as free', 8, 19);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad mini', 'Apple iPad with Retina Display MD510LL/A (16GB Wi-Fi Black) 4th Generation', 'images/ipadshop.jpg', '5 MP iSight Camera; 1080p HD Video Recording
            Wi-Fi (802.11a/b/g/n); 16 GB Capacity', 'Apple', 463, 501, '16th December', '45$ shipping and coupon for 75$ as free', 5, 11);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad mini', 'Apple iPad 2 MH0W2LL/A 10-Inch Retina Display 16GB (Gold)', 'images/ipadshop3.jpg', 'Wi-Fi (802.11a/b/g/n); 16 GB Capacity
            Up to 10 Hours of Battery Life; 0.68 lbs', 'Apple', 564, 600, '17th December', '45$ shipping and coupon for 55$ as free', 4, 15);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad mini', 'Apple iPad 4 with Retina Display 16GB Wi-Fi Only Tablet, Black (Certified Refurbished)', 'images/ipadshop.jpg', 'Apple iOS 6; Dual-Core A5 Chip 1GHZ
            Apple iOS 6; Dual-Core A5 Chip 1GHZ', 'Apple', 380, 560, '18th December', '55$ shipping and coupon for 55$ as free', 1, 10);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad mini', 'Apple iPad (32GB Wi-Fi Space Gray) - 12.9" Display', 'images/ipadshop4.jpg', '7.9-inch LED-backlit Multi-Touch Display; 1024-by-768 Resolution
            Apple iOS 6; Dual-Core A5 Chip 1GHZ', 'Apple', 341, 345, '19th December', '65$ shipping and coupon for 55$ as free', 4, 11);

INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad pro', 'Apple iPad Air MD788LL/A (16GB Wi-Fi Silver)', 'images/ipadshop2.jpg', '9.7 inches Display 10-hour battery life 1.00 pounds
            Apple iOS 7; 9.7 Retina display; 2048 x 1536 resolution', 'Apple', '234', '345', '19th December', '35$ shipping and coupon for 55$ as free',
            6, 12);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad pro', 'Apple iPad Air FD788LL/A (16GB Wi-Fi White)(Certified Refurbished)', 'images/ipadshop.jpg', 'Apple iOS 7; 9.7 Retina display; 2048 x 1536 resolution
            10-hour battery life', 'Apple', '565', '634', '20th December', '35$ shipping and coupon for 55$ as free',
            6, 12);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Ipad pro', 'Apple iPad Air MD786LL/A 9.7-Inch 32 GB Touchscreen Tablet (Black/Space Gray)', 'images/ipadshop3.jpg', '1.00 pounds 16 GB Flash Memory 1 GB RAM Memory
            Apple iOS 7; 9.7 Retina display; 2048 x 1536 resolution', 'Apple', '345', '45', '21th December', '35$ shipping and coupon for 55$ as free',
            6, 12);

INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Samsung Galaxy Tab 4', 'Samsung Galaxy Tab 4 10.1 SM-T530 Android 4.4 16GB WiFi Tablet (WHITE)', 'images/galaxytab.jpg', 'Easily multitask with two apps using Multi
            Window WXGA Display (1280x800 Resolution) 50GB of free Dropbox storage', 'Samsung', '453', '544', '22th December', '35$ shipping and coupon for 15$ as free',
            8, 12);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Samsung Galaxy Tab 4', 'Samsung Galaxy Tab 4 10.1 SM', 'images/galaxytab2.jpg', 'Dual Core Tegra 2 processor 1GB RAM
            Memory Capacity: 16GB', 'Samsung', '342', '444', '23th December', '45$ shipping and coupon for 25$ as free',
            5, 10);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Samsung Galaxy Tab 4', 'Samsung Galaxy Tab (10.1-Inch 16GB Wi-Fi)', 'images/galaxytab1.jpg', 'Android Honeycomb 3.1
            Display: 10.1" WXGA (1280x800)', 'Samsung', '423', '456', '24th December', '55$ shipping and coupon for 35$ as free',
            5, 10);

INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Samsung Galaxy Tab 2', 'Samsung Galaxy Tab 2 (10.1-Inch Wi-Fi) 2012 Model', 'images/galaxytabshop.jpg', 'Android 4.2 Jelly Bean
            Wireless N Wi-Fi (802.11b/g/n); Bluetooth 3.0 GPS Enabled with Latitude, Google Maps', 'Samsung', '323', '406', '26th December', '55$ shipping and coupon for 35$ as free',
            3, 8);
INSERT INTO gadgets(id, product_name, original_name, photo, description, category, price, previous_price, time_of_adding, features, quantity, shipping) VALUES
            ('', 'Samsung Galaxy Tab 2', 'Samsung Galaxy Tab 2', 'images/galaxyshop1.jpg', '10.1-inch Multitouch 720p HD Screen (1280 x 800)
            1GHz Dual-Core Processor', 'Samsung', '434', '566', '27th December', '155$ shipping and coupon for 35$ as free',
            3, 6);

CREATE TABLE subdescription(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(200) NOT NULL,
  assoc_photo VARCHAR(100) NOT NULL,
  description VARCHAR(1000),
  assoc_products VARCHAR(1000),
  technical_details VARCHAR(1000),
  technical_details1 VARCHAR(1000),
  technical_details2 VARCHAR(1000),
  technical_details3 VARCHAR(1000),
  technical_details4 VARCHAR(1000),
  technical_details5 VARCHAR(1000),
  technical_details6 VARCHAR(1000),
  product_details VARCHAR(1000)
);

INSERT INTO subdescription VALUES('', 'Iphone 6S White 32GB Neverlock', 'images/iphone6Sdesc.jpg' ,'4.7-inch (diagonal) LED-backlit widescreen Multi-Touch display with IPS technology, New 8-megapixel iSight camera with 1.5 pixels,
            A8 chip with 64-bit architecture. M8 motion coprocessor, 1080p HD video recording (30 fps or 60 fps), Unlocked cell phones are compatible with GSM carriers like AT&T and T-Mobile as well as
            with GSM SIM cards (e.g. H20 and select prepaid carriers). Unlocked cell phones will not work with CDMA Carriers like Sprint; Verizon; Boost or Virgin.', 'Iphone 6 Black/White 8GB Neverlock,
            Iphone 5S White 16GB Unlocked, Iphone 6S White 32GB Neverlock, Iphone 4 Black 64 GB Neverlock, Iphone 5 White 16GB Unlocked', 'Technical Details, Size (LWH): 5.44 inches; 2.64 inches; 0.27 inches,
            Weight: 4.48 ounces, Minimum Rated Talk Time: 14 hours, Minimum Rated Standby Time: 250 hours', 'Product Description, Display, Retina HD display, 1334-by-750-pixel resolution at 326 ppi, 1400:1 contrast ratio (typical),
            500 cd/m2 max brightness (typical), Full sRGB standard, Dual-domain pixels for wider viewing angles, Fingerprint-resistant oleophobic coating on front, Support for display of multiple languages and characters simultaneously,
            Display Zoom', 'iSight Camera, Autofocus with Focus Pixels, f/2.2 aperture, True Tone flash, Hybrid IR filter, Backside illumination sensor,Sapphire crystal lens cover,
            Auto image stabilization, Auto HDR for photos, Improved face detection, Exposure control, Panorama (upto 43 megapixels), Burst mode,Tap to focus, Photo geotagging, Timer mode',
            'Video Recording, 1080p HD video recording (30 fps or 60 fps), True Tone flash, Slo-mo video (120 fps or 240 fps),Time-lapse video,Cinematic video stabilization,Continuous autofocus video,Take still photos while recording video,
            Improved face detection,3x zoom, Video geotagging', 'Cellular and Wireless, UMTS/HSPA+/DC-HSDPA (850; 900; 1700/2100; 1900; 2100 MHz), 802.11a/b/g/n/ac WiFi, Bluetooth 4.0 wireless technology NFC',
            'SIM card, Nano-SIM, iPhone 6 is not compatible with existing micro SIM cards', 'In the Box, iPhone with iOS 8, Apple EarPods with Remote and Mic, Lightning to USB Cable, USB Power Adapter, Documentation',
            'Product Details, Product Dimensions: 5.4 x 2.6 x 0.3 inches ; 4.5 ounces, Shipping Weight: 13.6 ounces, ASIN: B00NQGP3L6');

INSERT INTO subdescription VALUES('', 'Apple MacBook Air MC965LLA ', 'images/macbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display', 'images/macbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Air MJVE2LLA 13.3-Inch Laptop (128 GB)', 'images/macbookprodesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Air MJVE2LLA 13.3-Inch Laptop', 'images/macbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display', 'images/macbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)', 'images/macbookprodesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Air MC965LLA 13', 'images/macbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Pro 15.4 Laptop 500 GB HARDRIVE - i7 QUAD-CORE MC721LLA', 'images/macbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Air MD760LLB 13.3-Inch Laptop ', 'images/macbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Apple Macbook Pro MF840LLA 13.3-Inch Laptop with Retina Display (256 GB)', 'images/macbookprodesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS Zenbook UX305FA 13.3 Inch Laptop (Intel Core M with 8 GB. 256GB SSD Greyish Black) - Free Upgrade to Windows 10', 'images/zenbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS Transformer Book Flip TP200SA-DH04T 11.6-inch 2 in 1 Touchscreen Laptop', 'images/transformerdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Asus Transformer Book 2015-T 10.1-inches Laptop', 'images/transformerdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS Zenbook UX305LA 13.3-Inch Laptop (Intel Core i5 8GB 256 GB SSD Titanium Gold) with Windows 10', 'images/zenbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS Zenbook UX303UA 13.3 Inch. Intel Core i5 8GB. 256GB SSD Laptop Windows 10 (64 bit) Smokey Brown', 'images/zenbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS T100 10-Inch Wide Laptop [2014]', 'images/transformerdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS Zenbook UX305FA 13.3 Inch Laptop (Intel Core M)', 'images/zenbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS Zenbook UX303LA-US51T 13.3-Inch Touchscreen Notebook Computer (i5-5200U 8 GB RAM 256 GB SSD Windows 8.1)', 'images/zenbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Asus Transformer Book 10.1-inch 32GB Detachable 2-in-1 Touch Laptop/Tablet ', 'images/transformerdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'Asus Transformer Book 10.1-inch 32GB Detachable 2-in-1 Touch Laptop/Tablet ', 'images/transformerdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS Transformer Pad TF103C-A1-Bundle 10.1-Inch Tablet with Keyboard Bundle (Black)', 'images/transformerdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS X551MA 15.6 Inch Laptop (Intel Celeron)', 'images/transformerdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');

INSERT INTO subdescription VALUES('', 'ASUS K501UX 15-inch Gaming Laptop ', 'images/zenbookdesc.jpg','2.7 GHz dual-core Intel Core i5 processor (Turbo Boost up to 3.1 GHz) with 3MB shared L3 cache,
          8 GB 1866 MHz LPDDR3 RAM; 256 GB PCIe-based flash storage, 13.3-inch IPS Retina Display, 2560-by-1600 resolution, Intel Iris Graphics 6100, OS X Yosemite, Up to 10 Hours of Battery Life', 'Apple MF839LLA MacBook Pro 13.3-Inch Laptop with Retina Display,
          Apple MacBook Air MJVE2LLA 13.3-Inch Laptop (128 GB), Apple MacBook Air MJVE2LLA 13.3-inch Laptop, Apple MacBook Pro MJLQ2LLA 15.4-Inch Laptop with Retina Display, Apple MacBook Air MC503LLA 13.3-Inch Laptop (OLD VERSION)',
          'Technical Details, Screen Size	13.3 inches, Screen Resolution	2560 x 1600, Processor	2.7 GHz Intel Core i5, RAM	8 GB LPDDR3, Graphics Coprocessor	Intel Iris Graphics 6100',
          'Product Description, Other Technical Details, Brand Name	Apple, Series	MF840LL/A, Product Dimensions	8.6 x 12.3 x 0.7 inches, Item Dimensions L x W x H	8.62 x 12.35 x 0.71 inches, Computer Memory Type	DDR3 SDRAM, Flash Memory Size	256',
          'From the Manufacturer, Quickly start up and launch apps, Superior reliability and up to 22 times faster than a traditional hard drive, Up to 2.5 times faster than previous generation flash storage, Intel Iris Graphics 6100 for advanced integrated graphics performance, Designed to reduce power consumption while maintaining high performance',
          'Product specifications, 13.3-inch screen with Retina display, 3.48 pounds; 0.71 inches thin, 2.7GHz dual-core Intel Core i5 processor (Broadwell), Turbo Boost up to 3.1GHz, Intel Iris Graphics 6100, 256GB PCIe-based flash hard drive',
          'Additional information, Up to 10 hours of wireless web; up to 12 hours of iTunes movie playback, 802.11ac Wi-Fi and Bluetooth 4.0, HDMI and USB 3 ports, FaceTime HD camera for video calls, Dual mics and stereo speakers',
          'All-new Force Touch trackpad, Force sensors allow you to click anywhere with a uniform feel, Customizable click sensitivity, Taptic Engine delivers click sensations through haptic feedback, Use Force click for easier access to helpful tools and information, Fast-forward or zoom by gradually applying pressure to the trackpad',
          'Thunderbolt 2 ports, Two ports deliver up to 20Gbps of bandwidth for each external device—so you can move data up to 4 times faster than with USB 3, Daisy-chain multiple displays and high-performance devices while maintaining maximum throughput',
          'Stunning Retina display, With over 5 million pixels, everything is visible down to the finest detail in images and text, High contrast ratio results in deeper blacks and brighter whites, and colors are more vivid and images take on a new level of realism');






CREATE TABLE questions(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product VARCHAR(500) NOT NULL,
  ask_person VARCHAR(80) NOT NULL,
  question VARCHAR(500) NOT NULL,
  answer VARCHAR(500),
  answer_person VARCHAR(80),
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO questions(product, ask_person, question, answer, answer_person) VALUES ('Iphone 6S White 32GB Neverlock', 'Serdiuk Oleksandr', 'Does this will work in Ukraine ?', 'I am pretty sure that YES', 'Dmitry Medvedev');
INSERT INTO questions(product, ask_person, question, answer, answer_person) VALUES ('Iphone 6S White 32GB Neverlock', 'Ivan Sakhan', 'Can i use this Phone in Trinidad & Tobago', 'Yes , 100%', 'PRIME ELECTRONICS');
INSERT INTO questions(product, ask_person, question, answer, answer_person) VALUES ('Iphone 6S White 32GB Neverlock', 'Jenya Kalujin', 'Will this phone work in Israel ? With an Israeli carrier', 'Yes it should work in Israel', 'Professional Seller');
INSERT INTO questions(product, ask_person, question, answer, answer_person) VALUES ('Iphone 6S White 32GB Neverlock', 'Anton Vovnenko', 'Can I use this phone in Russia ?', 'Yes', 'Oleksandr Serdiuk(Woden S)');

/*
 * ENCODING DATA
 */
SET character_set_database=utf8
SET NAMES utf8
/* Mysql.exe -> chcp 65001 or RUS 1251 */

CREATE TABLE search(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(1000) NOT NULL,
  url VARCHAR(1000) NOT NULL,
  description VARCHAR(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;

INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Reliable personal tested by time. Award-store.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Walking in lockstep with new technologies');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Since 1984, world has seen a great many changes in its business, its products, its services. Change always comes with opportunity. And Serdiuk has always been ready and willing to embrace it. By the time, Woden Sims never forgotten core values thanks to which the Store became real, such as lightweight prices, high quality of provided items.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Those values determine the way we work, the quality we offer, and the unsurpassed treatment you get as a customer, investor, employee.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Career opportunities');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Make your routine day as diverse as it could be.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Join our team');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'If you have friendly and engaging personality, responsive manners as well as helpful and polite, that all you need to growth in our team.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'What we offer');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Our founder was best known for his manners, business notreally straightforward steps to achieve company goals on the world stage. We are developing company with internet as well as live stores.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'We also starting developing new devices for simplifying routine day life. Our main task is to help people with achieving their personal goals in this era of technological expansion, consulting and selling.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'What you can expect');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'You might expect Woden Sims to have the highest ethics, rigorous regulatory compliance, and the deepest desire to develop and promote fairness in public policies and practices. You would be right on all accounts. And if you have a relationship with Woden Sims - as a customer, employee, dealer, or supplier - you would expect Woden Sims to offer an inclusive environment. One that would welcome diversity. You would be right again.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Investors');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'On the one hand, Woden Sims is a store located at more than seven countries primary in Europe. On the other hand, our Company provides software in the industry of IT. We are developing Apps for Android as well as IOS, web-sites.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Our development team');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Woden Sims own software development team model is a great choice for companies that are looking to grow their development resources without the cost and manpower of recruiting, hiring, Housing, and retaining a team at your location. With our approach to building your own software team, you get the expertise of Woden Sims in-house recruitment professionals with software development cost savings of up 60%.');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Custom Software Development');
INSERT INTO search VALUES ('', 'Our Company - Woden Sims', 'http://woden-sims.hol.es/about/', 'Woden Sims employs a staff of talented developers who are ready to tackle your next development project. Our custom software development is ideal for short-term projects with a quick turnaround. Our custom software engineering services offer access to top developers experienced in a variety technologies and platforms, as well as Woden Sims consultants and project managers ready to handle all aspects of your development. Our outsourced proj development can serve as a supplement to your Woden Sims Own Software Team, or as a standalone solution.');


INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Sicheres Personal ist durchgesucht Zeit. Beehrter Kaufladen.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Bewegen sich Bein in Bein mit neue Technologien');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Aus dem 1984 Jahr Friede sah sehr reich ?nderungen in ihrigem Busine?, ihriger Produkte, ihrige Gefallen. Allemal herkommt mit M?glichkeit zu verraten. Und Deere ist allemal bereit und bereiter zu annehmen ihn. Zu dieser Zeit Woden Sims keinmal nicht verga?en haupts?chliche Werte, dank die Kaufladen wurde wesenhafter, z.B., Licht des Preises, hoche Qualit?t der anheimstellen Punkte.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Diese Bedeutungen bestimmen, was wir arbeiten, Qualit?t, wir anbieten, und un?bertroffener Kur ihr bekommen als Kunde, Investor, Arbeiter.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Steinbr?chem?glichkeiten');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Erledige euer Regime des Tags, an mancherleier, als dieser kann sein.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Einstimme in unseren Befehl');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Falls bei euch sind freundschaftlich und anlockender Person, entgegenkommende Manieren, sowie zu aufhelfen und h?flicher, da? all, da? euch ist n?tig, auf da? gedeiht in unserem Befehl.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Da? wir Euch anbieten');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Unser Gr?nder war bekannt vor seinige Manieren, Angelegenheit nicht sonderlicher einfache Schritte, auf da? zu erreichen Ziele der Geselschaft an Weltarena. Wir ausf?hrt Geselschaft mit Internet, sowie lebende Kaufl?den.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Wir gleichfalls anfangen Ausarbeitung der neuen Einrichtungen f?r vereinfacht des Routine Alltags Lebens. Unsere Hauptaufgabe, auf da? zu aufhelfen Leute mit Erreichung der pers?nlichen Ziele in ?ra das technologische Erweiterung, beratung und Verkauf.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Auf was ihr k?nnen ablohnen');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Ihr k?nnten erwarten Woden Sims haben am meisten hocher Sittenlehre, die normativen Anforderungen stramm ist, und am meisten tiefer Wunsch zu ausf?hren und zu durchbringen Billigkeit in staatlicher Politik und Praktik. Ihr w?ren recht all Abz?hlungen. Und falls bei euch sind Beziehungen mit Woden Sims - als Kunden, Mitarbeiter, dellers, oder mit Lieferanten - es darf es w?re erwarten Woden Sims zu anbieten esclusives Mitte. Das, das zu begl?ckwunschen Abwechselung ist. Ihr w?ren recht wieder.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Investoren');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Einerseits, Woden Sims spukt Kaufladen, der in mehr als sieben L?nder angeordnet ist in haupts?chlicher in Europa C anderer Seite, Unsere Geselschaft ausarbeitet Programmsversorgung in Gebiet IT. Wir ausarbeiten Anbiegungen f?r Android, und desgleichen IOS, Webseiten');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Unsere Geselschaft ausarbeiten');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Woden Sims eigenes Modell Ausarbeitung der Programmsversorgung des Befehls spukt ausgezeichnetes Auslesen f?r Geselschaften, die suchen, auf da? zu z?chten ihre Ressourcen der Aufw?rtsentwicklung ohne Betrag der Arbeitskraft, Anwerbung, Wohnst?tte, und unter Bebehaltung Befehl an Ort. Mit unser gegen?bertritt zu Aufstellung ihriger eigener Befehl der Programmsversorgung, ihr ?bernehmen Erfahrung in Haus der Berufsspieler Woden Sims Setzen aus Einsparung Ausarbeitung der Programmsversorgung 60.');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Ausarbeitung der Programmsversorgung');
INSERT INTO search VALUES ('', 'Geselschaft - Woden Sims (DE)', 'http://woden-sims.hol.es/de/about/', 'Woden Sims arbeiten Mitarbeiter die begabten ausarbeiten, die bereit ist, euer folgendes Projekt zu entscheiden. Unsere Ausarbeitung der Programmsversorgung ideal gegen?bertritt f?r kurzbefristete Projekte mit schneller Haken. Erfahrung in diverse Technologien und Bahnsteige, sowie Woden Sims Berater und Manager der Projekte, die f?r Aufl?sung der all Aspekte euerer Aufw?rtsentwicklung bereit ist. Unser Outsourcing der Ausarbeitung der Projekte kann dienen als Erg?nzung zu euer Woden Sims eigene Programmsversorgung, oder als autonome Aufl?sung.');


INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Un personnel ''fiable contr?l? un temps. Une prix boutique.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Avan?ons un pied un pied avec un technologies'' nouvelles');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'D?s un 1984 an un monde aper?ut un beaucoup beaucoup changements dans leur business, leur production, leurs bienfaits. Contrefaire toujours arrive avec une possibilit?. Et Deere toujours pr?t et pr?t adopter le. Contre ce temps Woden Sims jamais non oubli?rent un valeurs, ? force de dont une boutique devint effectif essentielles, par exemple, lumi?re un prix, une qualit? un accordent points aigu?.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Ces importances assignent, comment nous exer?ons, une qualit?, nous offrons, et imbattable une cure vous encaissent ? titre de un client, un donateur, travailleur.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Carri?res d?bouch?s');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Font votre mode un jour, sur tant multiple, comme ce peut-?tre.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Adh?rent contre notre commandement');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Si contre vous sont ami et attrayant une figure, un sensible attitudes, et aussi aider et courtois, que entier, que vous faut, pour un accroissement dans notre commandement.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Que nous vous offrons');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Notre fondateur fut c?l?bre siennes attitudes, une affaire gu?re un d?marches frugales, pour atteindre un buts une compagnie sur une ar?ne mondiale. Nous sommes une compagnie ?volutive avec un internet, et aussi un boutiques vivantes.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Nous aussi commen?ons une ?laboration un agencements nouveaux pour une simplification une une routine de tous les jours vie. Notre une cardinale probl?me, pour aider un gens avec une performance un buts personnels une ?poque une expansion, consultation et une vente technologique.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Que vous peuvent calculer');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Vous purent attendre se Woden Sims ont le plus aigu ?thique, aust?re un demandes normatives, et un d?sir cultiver et avancer une ?quit? dans une politique et une pratique ?tatique le plus profond. Vous furent droit selon un additions enti?res. Et si contre vous sont un termes avec Woden Sims - comme un clients, un collaborateurs, concessionnaires, ou avec un fournisseur - on peut est attendre se Woden Sims offrir un exclusif entourage. Celui, dont est saluer une diversit?. Vous furent droit de nouveau.');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Donateurs');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'D?s un c?t? seul, Woden Sims compara?t une boutique, situ? dans un pays'' plus que sept dans essentiel dans une Europe C autre c?t?, notre compagnie exploite un logiciel dans une r?gion IT. Nous exploitons un annexes pour Android, et de la sorte IOS, web un sites');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Notre compagnie un concepteurs');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Woden Sims un mod?le propre une ?laboration un logiciel un commandement compara?t un choix chic pour un compagnies, dont cherchent, pour cultiver leurs ressources un d?veloppement sans un co?t une main-d''?uvre et recruting, hiring, une habitation, et conserve un commandement sur un lieu');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', '?laboration un logiciel');
INSERT INTO search VALUES ('', 'Compangnie - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/about/', 'Woden Sims exercent un collaborateurs un un talents concepteurs, dont pr?t conclure se votre conforme projet. Notre ?laboration un logiciel id?alement approche se pour un court projets avec prompt un d?tour. Notre utilisateur de l''ONU un programmes un ing?nieurs bienfaits offrent un acc?s contre un Top d?veloppeurs une exp?rience dans un technologies et un plates-formes assorties, et aussi Woden Sims un conseils et un managers un projets, pr?t pour une d?cision un aspects votre d?veloppement entiers. Notre externalisation une ?laboration un projets peut desservir ? titre de une annexe contre votre Woden Sims un logiciel propre, ou ? titre de une d?cision autonome.');


INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Надежный персонал проверенный временем. Удостоенный магазин.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Двигаемся нога в ногу с новыми технологиями');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'С 1984 года мир увидел очень много изменений в своем бизнесе, своей продукции, своих услуг. Изменения всегда приходят с возможностью. И Deere всегда готов и готовы принять его. К этому времени Woden Sims никогда не забыли основные ценности, благодаря которым магазин стал реальным, например, легких цены, высокое качество предоставляемых пунктов.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Эти значения определяют, как мы работаем, качество, которые мы предлагаем, и непревзойденные желания которые вы получаете в качестве клиента, инвестора, работника.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Карьерные возможности');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Сделайте ваш режим дня, на столько разнообразным, как это может быть.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Присоединяйтесь к нашей команде');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Если у вас есть дружественные и привлекательный личность, отзывчивые манеры, а также помочь и вежливы, что все, что вам нужно, чтобы рост в нашей команде.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Что мы Вам предлагаем');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Наш основатель был известен за его манеры, дело не очень простые шаги, чтобы достичь целей компании на мировой арене. Мы развивающаяся компания с интернетом, а также живых магазинах.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Мы также начинаем разработку новых устройств для упрощения рутинной повседневной жизни. Наша главная задача, чтобы помочь людям с достижением личных целей в эпоху технологической экспансии, консалтинга и продажи.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'На что вы можете расчитывать');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Вы могли бы ожидать Woden Sims имеют самые высокие этику, строгую нормативным требованиям, и самое глубокое желание развивать и продвигать справедливость в государственной политике и практике. Вы были бы правы по всем счетам. И если у вас есть отношения с Woden Sims - как клиентов, сотрудников, дилеров, или с поставщиком - можно было бы ожидать Woden Sims предложить инклюзивной среды. Тот, который будет приветствовать разнообразие. Вы были бы правы снова.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Инвесторы');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'С одной стороны, Woden Sims является магазин, расположенный в более чем семи стран в основном в Эвропе C другой стороны, Наша компания разрабатывает програмное обеспечение в области IT. Мы разрабатываем приложения для Android, а так же IOS, веб сайты');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Наша компания разработчиков');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Woden Sims собственную модель разработка программного обеспечения команды является отличным выбором для компаний, которые ищут, чтобы вырастить их ресурсы развития без стоимости рабочей силы и рекрутинга, найма, жилье, и сохраняя команду на месте. С нашим подходом к построению свою собственную команду программного обеспечения, вы получите опыт в доме профессионалов Woden Sims набора с экономии разработка программного обеспечения до 60%.');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Разработка программного обеспечения');
INSERT INTO search VALUES ('', 'Компания - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/about/', 'Woden Sims работают сотрудники талантливых разработчиков, которые готовы решать ваш следующий проект. Наша разработка программного обеспечения идеально подходит для краткосрочных проектов с быстрой поворот. Наши пользовательские программные инженерные услуги предлагают доступ к топ-разработчиков опыт в различных технологий и платформ, а также Woden Sims консультантов и менеджеров проектов, готовых для решения всех аспектов вашего развития. Наша аутсорсинг разработки проектов может служить в качестве дополнения к вашей Woden Sims собственное программное обеспечение, или в качестве автономного решения.');

INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Main Account Page');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Cart');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Your Orders');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Change account info');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Billing info');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Your cart');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Last order');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Account Info');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Last Billing info');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Last added item');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Change your order status');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Change your account entrance');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Change Your Active Email');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Please, be sure that you have access to this email.');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Change Your Username');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Please, fill the real data in order to have no problems with shipping.');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'Change Your Password');
INSERT INTO search VALUES ('', 'Account - Woden Sims', 'http://woden-sims.hol.es/account/', 'If you forgot your password, please follow those instructions for recovering your password.');

INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Главная страница упраления');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Корзина');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Ваши заказы');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Изменить данные аккаунта');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Доставка');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Ваша корзина');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Последний заказ');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Информация об аккаунте');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Последние данные доставки');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Последний добавленый предмет');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Изменить статус заказа');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Изменить данные входа');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Изменить активную Почту');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Пожалуйста, будьте уверены что у Вас есть доступ к этой Почте.');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Измените Ваше Имя');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Пожалуйста, вводите реальную информацию что бы избежать проблем с доставкой.');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Измените Ваш пароль');
INSERT INTO search VALUES ('', 'Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/', 'Если вы забыли пароль, пожалуйста следуйте инструкция чтобы востановить Ваш пароль.');

INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Cardinale page gestion');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Cardinale page gestion');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Un ''cabas');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Vos commandes');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Contrefaire un donn?es account');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Livraison');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Votre cabas');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Commande derni?re');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Information de Account');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Un administr?es livraisons derni?res');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Un ajout? objet dernier');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Contrefaire un statut une commande');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Contrefaire un donn?es une bouche');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Contrefaire un courrier actif');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'S''il vous pla?t, sont s?r que contre vous est un acc?s contre ce courrier.');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Contrefont votre nom');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'S''il vous pla?t, ?tablissent une information effective que conjurer un probl?mes avec une livraison.');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Contrefont votre mot de passe');
INSERT INTO search VALUES ('', 'Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/', 'Si vous oubli?rent mot de passe, s''il vous pla?t conforment une consigne pour R?tablir votre votre mot de passe.');

INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Kardinale Seite Verwaltung');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Korb');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Euere Auftr?ge');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Angaben Rechnung'' zu ''verraten');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Zustellung');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Euer Korb');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Allerletzter Auftrag');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Information ?ber Rechnung');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Allerletzte gegebene Zustellungen');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Allerletztes hinzugef?gt Pr?fungsfach');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Status des Auftrags : zu ''verraten');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Angaben des Betretens'' zu ''verraten');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Aktive ''Post zu verraten');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Bitte, sei zuversichtlich da? bei Ihnen ist Eingang zu dieser Post.');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Verrat Eueren Namen');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Bitte, einf?hren wesenhafte Information was zu entgehen Probleme mit Zustellung.');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Verrat Euer Kennwort');
INSERT INTO search VALUES ('', 'Rechnung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/', 'Falls ihr verga?en Kennwort, bitte komm Instruktion auf da? Wiederherstellung Euer Kennwort.');

INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Your Bag');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Describe new possibilities');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Fully equipped for a world');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Smart. Mighty. Heavyweight.');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'The future of television is here');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Any questions? Go to our support page');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Product name');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Category');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Remove');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Continue shopping');
INSERT INTO search VALUES ('', 'Cart - Account - Woden Sims', 'http://woden-sims.hol.es/account/cart', 'Place order now');

INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Корзина');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Имя продукта');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Категория');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Продолжить покупки');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Разместить заказ сейчас');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Не найдено продуктов в Вашей корзине');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Попробуйте новые возможности');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Полностью оснащена для мира');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Умный. Могущественный. Прогрессивный.');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Будущее телевидения здесь');
INSERT INTO search VALUES ('', 'Корзина - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/cart', 'Какие либо вопросы? Перейти на страницу поддержки');

INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Korb');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'versuchen neuer M?glichkeiten');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'G?nzlich ausger?steter f?r Friede');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Geistvoller. M?chtiger. Fortschrittlicher.');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Zukunft des Fernsehens da');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Welch oder Fragen? Auf Seite der Aufrechterhaltung'' zu ''her?berkommen');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Name des Produkts');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Kategorie');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Zu ''abdecken');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Abnahmen zu fortf?hren');
INSERT INTO search VALUES ('', 'Korb - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/cart', 'Auftrag ''augenblicklich zu plazieren');

INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Nom un produit');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Cat?gorie');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'D?barrasser');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Continuer un courses');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Arranger une commande maintenan');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Non retrouv? un produits dans votre cabas');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Essaient nouveau D?bouch?s');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Compl?tement dot? pour Monde');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Intelligent. Puissant. Progressif.');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Avenir une t?l? ici');
INSERT INTO search VALUES ('', 'Cabas - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/cart', 'Lequel ou un questions? D?passer une page une adh?sion');

INSERT INTO search VALUES ('', 'Orders - Account - Woden Sims', 'http://woden-sims.hol.es/account/orders', 'Done Orders');
INSERT INTO search VALUES ('', 'Orders - Account - Woden Sims', 'http://woden-sims.hol.es/account/orders', 'Complete Orders');
INSERT INTO search VALUES ('', 'Orders - Account - Woden Sims', 'http://woden-sims.hol.es/account/orders', 'Your Orders');

INSERT INTO search VALUES ('', 'Заказы - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/orders', 'Готовые заказы');
INSERT INTO search VALUES ('', 'Заказы - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/orders', 'Запрошенные заказы');
INSERT INTO search VALUES ('', 'Заказы - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/orders', 'Ваши заказы');

INSERT INTO search VALUES ('', 'Commandes - sont Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/orders', 'Vos commandes');
INSERT INTO search VALUES ('', 'Commandes - sont Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/orders', 'Commandes pr?tes');
INSERT INTO search VALUES ('', 'Commandes - sont Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/orders', 'Demand? commandes');

INSERT INTO search VALUES ('', 'Auftr?ge - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/orders', 'Euere Auftr?ge');
INSERT INTO search VALUES ('', 'Auftr?ge - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/orders', 'Bereite Auftr?ge');
INSERT INTO search VALUES ('', 'Auftr?ge - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/orders', 'Gefragte Auftr?ge');

INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Billing Information');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Ship To');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Primary Name');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Address');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Default Street Address');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Default City');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Default State');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Default Zip');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Default Country');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Default Options');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Gift wrap All items');
INSERT INTO search VALUES ('', 'Billing - Account - Woden Sims', 'http://woden-sims.hol.es/account/billing', 'Update info');

INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Информация об доставке');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Доставка');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Основное Имя');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Адрес');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Улица по умолчанию');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Город по умолчанию');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Штат по умолчанию');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Индекс по умолчанию');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Страна по умолчанию');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Выбор по умолчанию');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Упаковывать все предметы');
INSERT INTO search VALUES ('', 'Доставка - Аккаунт - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/account/billing', 'Обновить данные');

INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Information de une livraison');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Livraison');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Gros nom');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Adresse');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Rue selon une r?ticence');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Cit? selon une r?ticence');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Effectif selon une r?ticence');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Indice selon une r?ticence');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Pays selon une r?ticence');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Choix selon une r?ticence');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Emballer un objets entiers');
INSERT INTO search VALUES ('', 'Livraison - est Account - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/account/billing', 'Rajeunir un donn?es');

INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Information ?ber Zustellung');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Zustellung');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Haupts?chlicher Name');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Adresse');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Stra?e default');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Stadt default');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Staat default');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Index default');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Land default');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Auslesen default');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'All ''Pr?fungsf?cher zu einpacken');
INSERT INTO search VALUES ('', 'Zustellung - Account - Woden Sims (DE)', 'http://woden-sims.hol.es/de/account/billing', 'Angaben zu erneuern');

INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'We believe that there are lots to transform your business in gentle manner');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'With usability, free to use apps in Phones, easy to use, thin Devices, powerful as well as practical Laptops, you have everything to transform your personal life, change your way of thinking, not to mention even on business.');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'Laptops in business');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'Being powerful and thin laptop, It gives you an advantage over opponents. Whether your data can be stored in one place, it also protected for unwanted eyes');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'Learn more');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'Phones in business');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'Phones have powerful battery to still be connected to worldwide with complex and flex apps. Be always equipped with information about every a of business');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'Devices in business');
INSERT INTO search VALUES ('', 'Business - Woden Sims', 'http://woden-sims.hol.es/business/', 'Devices change the way of your work with yours partners by using thousands of different apps for business, that makes your productivity non-catchable.');

INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Мы считаем, что есть много путей, чтобы трансформировать свой бизнес в мягкой форме');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'С юзабилити, свободно использовать приложения в телефоны, проста в использовании, тонкие устройства, мощные, а также практические Ноутбуки, у вас есть все, чтобы превратить вашу личную жизнь, изменить свой образ мышления, не говоря уже о еще по делу.');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Ноутбуки для бизнеса');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Будучи мощным и тонкий ноутбук, это дает вам преимущество над оппонентами. Ли ваши данные могут быть сохранены в одном месте, но и защищен от нежелательных глаз');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Телефоны для бизнеса');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Телефоны имеют мощный аккумулятор по-прежнему быть подключены к всемирно со сложными и гибких приложений. Будьте всегда оснащены с информацией о каждом а бизнес');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Планшеты для бизнеса');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Устройства изменить способ вашей работы с вашим партнерам с помощью тысячи различных приложений для бизнеса, что делает вашу производительность неуловимой');
INSERT INTO search VALUES ('', 'Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/', 'Узнать больше');

INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'Nous croyons, que est un beaucoup chemins, pour transformer leur business dans une forme douce');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'Avec un recours, couramment utiliser un annexes un t?l?phones, frugal dans un recours, un agencements, puissant, et aussi pragmatique notebooks d?licats, contre vous est entier, pour convertir votre vie personnelle, contrefaire leur formule une mentalit?, non d?bite d?j? encore selon une affaire.');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'Notebooks pour un business');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'Est puissant et d?licat notebooks, ce accorde vous un avantage au-dessus de un contradicteurs. Vos donn?es peuvent ?tre conserv? dans un lieu seul, mais et infraudable de un yeux ind?sirables');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'Apprendre davantage');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'T?l?phones pour un business');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'T?l?phones ont un accumulateur puissant encore ?tre connect? contre mondialement avec complexe et un annexes flexibles. Sont toujours dot? avec une information de chaque et un business');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'Plaques pour un business');
INSERT INTO search VALUES ('', 'Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/', 'Agencements contrefaire une fa?on votre travail avec vos coassoci?s avec une aide un millier un annexes assorties pour un business, que fait votre efficacit? imperceptible');

INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Wir aufz?hlen, da? ist reich Wege, auf da? transformieren ihriges Busine? in weicher Ausgestaltung ');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Mit Schlichtheit, frei zu ausnutzen Anbiegungen in Fernsprecher, einfacher in Ausnutzung, d?nne Einrichtungen, Kraftvoll, sowie praktischer Notizbuch, bei euch ist all, auf da? zu transformieren euer pers?nliches Leben, ihrige Gestalt des Denkens zu verraten, nicht bespricht bereits noch gesch?ftlich.');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Notizbuch f?r Busine?');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Ist kraftvoll und d?nner Notizbuch, dieser gibt euch Bevorzugung ?ber Gegnern. Lee euere Angaben k?nnen sein behalten in eins Ort, sondern auch gesch?tzter ab unerw?nschten Augen');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Gr??er zu');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Fernsprecher f?r Busine?');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Fernsprecher haben kraftvoll Speicher nach wie vor zu sein verbunden zu weltumspannend mit komplizierter und biegsame Anbiegungen. Sei allemal ausger?stet mit Information ?ber jeder und Busine?');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Gegenst?nde f?r Busine?');
INSERT INTO search VALUES ('', 'Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/', 'Einrichtungen zu verraten Art eueres Arbeitens mit euere Partner anhand Abertausende der diversen Anbiegungen f?r Busine?, da? macht euere Produktivit?t unfa?bare');

INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Moving in lockstep with business');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'When you use MAC OS X or Windows technology as one of the main business skills, new possibilities are available. As many people that have laptop, they love their work, productivity is increasin in a simple working day. Laptops enable your mind with skills that never ever thought about before and operate with them in random tasks.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Better than you can just imagine');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'With new tools for IT in IOS, great security you can hold any data in your Laptop. Powerful productivity features are pretty useful for your users needs and to make your workday more productive.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'With Macbook, you are not going to miss any note for your business and stay up-to-date everywhere');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Apps for Everything');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'The suite of electronic tools a business needs to conduct daily operations is shifting. At one time, a business owner needed an Office suite, e-mail, and industry-specific software to open for business.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Everything from billing and scheduling to project management may be moved to Cloud-based apps, allowing small businesses with small budgets to compete against much larger companies.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Reimagine your life with Macbook and Apps');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Be in touch with others by using laptop. For non-resident calls laptops have Skype or Viber for free calls. In addition, social networks are available with fast 3G like Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Make your photos available for everyone for likes or dislikes, like Instagram.For each photo, available Apple Store App called Instaphoto to share your photos instantly.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'A lot of Cloud Apps');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Cloud providers who provide connectivity from any approved device will be at an advantage as businesses begin to troubleshoot ways they can continue to do business in a mobile-preferred workplace.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'When a new solution is needed, businesses will be able to immediately find and download that solution without having to pay a team of software developers to create one.');
INSERT INTO search VALUES ('', 'Laptops - Business - Woden Sims', 'http://woden-sims.hol.es/business/laptops/', 'Search laptop for business');

INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Двигаясь нога в ногу с бизнесом');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'При использовании Mac OS X или Windows, а технологии одной из главных деловых навыков, новые возможности имеются. Как и многие люди, которые имеют ноутбук, они любят свою работу, производительность растет в простой рабочий день. Ноутбуки включить свой ум с навыками, которые никогда не думали о до и работать с ними в случайных задач.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Лучше чем вы можете даже представить');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'С новыми инструментами для ИТ в IOS, большой безопасности вы можете проводить какие-либо данные в вашем ноутбуке. Мощные функции производительности довольно полезно для ваших нужд пользователей и сделать ваш рабочий день более продуктивным.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'С Macbook, вы не собираетесь пропустить любую ноту для вашего бизнеса и оставаться актуальными во всем мире');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Приложения для всего');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'В суете электронных средств бизнес должен вести ежедневные операции смещается. В свое время, владелец бизнеса нужен офисный пакет, электронной почты, и отраслевые программы, чтобы открыть для бизнеса.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Все, начиная от биллинга и планирования в управлении проектами могут быть перемещены в приложениях облачных, что позволяет малым предприятиям с небольшими бюджетами, чтобы конкурировать с более крупными компаниями.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Переопределите Вашу жизнь с Macbook и приложениями');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Будьте в контакте с другими, используя ноутбук. Для нерезидента ноутбуки имеют Skype или Viber для бесплатных звонков. В дополнение, социальные сети доступны всегда с быстрым 3G такие как Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Сделайте ваши фотографии доступными для всех, для лайков и дизлайков, такие как Instagram.Для каждой фотографии, доступной Apple Store Приложения называеться Instaphoto что бы делиться фотографиями моментально.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Много Облачных приложений');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Облако провайдеров, которые предоставляют подключение от проверенного устройства будет преимущество, как предприятия начинают устранять, как они могут продолжать делать бизнес в мобильном-Удобнее рабочем месте.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Когда новое решение необходимо, предприятия смогут сразу найти и скачать это решение без того, чтобы платить команду разработчиков программного обеспечения, чтобы создать одну.');
INSERT INTO search VALUES ('', 'Ноутбуки - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/laptops/', 'Искать ноутбук для бизнеса');

INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Avance un pied un pied avec un business');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Sous un recours Mac OS X ou Windows, et un technologies seul de un un affaires habitudes capitales, un d?bouch?s nouveaux se ont. Comme et un beaucoup de gens, dont ont notebook, eux aiment leur travail, une efficacit? un cro?t un ouvrable jour frugal. Notebooks brancher leur esprit avec un habitudes, dont jamais non crurent de avant et exercer avec eux dans un probl?mes accidentels.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Mieux que vous peuvent m?me d?poser');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Avec un instruments nouveaux pour dans IOS, une s?curit? grande vous peuvent r?aliser toute ONU donn?es dans votre notebooks. Un fonctions une efficacit? puissantes assez utile pour vos besoins un usagers et faire votre jour ouvrable plus productif.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Avec Macbook, vous non assemblent se manquer une ne importe quel note pour votre business et demeurer actuel dans tout le un monde');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Annexes pour entier');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Dans active se un ressources ?lectroniques un business doit conduire un op?rations quotidiennes se destitue. Leur temps, un possesseur un business besoin un une office paquet, un courriel, et un programmes sectoriels, pour d?couvrir pour un business.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Entier, commence de une livraison et une planification dans une administration un projets peuvent ?tre d?plac? dans un annexes nuageux, que permet un petit entreprises avec un budgets petits, pour concurrencer avec un compagnies plus grosses.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Override votre vie avec Macbook et un annexes');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Sont dans un contact avec autre, utilise notebook. Pour non-r?sident notebooks ont Skype ou Viber pour un sonneries gracieuses. Une annexe, un filets sociaux abordable toujours avec prompt 3G pareil comme Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Font vos photographies abordable pour entier, pour aime et d?pla?t, pareil comme Instagram.Pour une photographie, abordable chaque Apple Store Annexes appelle se Instaphoto que partager se un photographies momentan?ment.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Beaucoup annexes nuageuses');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Nuage fournisseurs, dont accordent connecte de un agencement contr?l? est un avantage, comme un entreprises commencent ?liminer, comme eux peuvent continuer faire un business dans mobile pr?f?r? un emploi.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Lorsque une un nouveau d?cision indispensable, un entreprises peuvent imm?diatement retrouver et t?l?charger cette d?cision sans celui, pour payer un commandement un concepteurs un logiciel, pour constituer seul.');
INSERT INTO search VALUES ('', 'Notebooks - est un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/laptops/', 'Chercher notebook pour un business');

INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Bewegt sich Bein in Bein mit Busine?');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Bei Ausnutzung Mac OS X oder Windows, und Technologien eins aus kardinalen sachlichen Fertigkeiten, neue M?glichkeiten haben. Sowohl wie viele Leute, die Notizbuch haben, sie lieben ihriges Arbeiten, Produktivit?t ansteigt in einfachen Arbeitstag. Notizbuch zu schalten ihrige Klugheit mit Fertigkeiten, die an bis und zu arbeiten mit ihnen in beil?ufige Aufgaben keinmal nicht dachten.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Besser was ihr k?nnen selbst vorstellen'' sich');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Mit neuen Werkzeugen f?r IT in IOS, gro?er Sicherheit ihr k?nnen durchf?hren irgendeine Angaben in euer Notizbuch. Kraftvoll Funktionen der Produktivit?t genug behilflich f?r euere Drangsale der Benutzer und zu erledigen eueren Arbeitstag mehr produktiver.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Mit Macbook, ihr nicht anschicken sich, beliebiger Hinweis f?r euer Busine? und zu bleiben aktuell in Ost und West'' zu vers?umen');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Anbiegungen f?r all');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'In Gehetze der elektronischen Geldmittel Busine? mu? f?hren allt?gliche Operationen absetzt. Zu seiner Zeit, Besitzer des Busine? ist n?tig B?ro T?te, elektronische Post, und Zweigeprogramme, auf da? zu ?ffnen f?r Busine?.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'All, anf?ngt ab Haltung und Konzeptionierung in Amt Projekte k?nnen sein deportiert in Anbiegungen wolkiger, da? erlaubt geringen Betrieben mit kleinen Budgets, auf da? zu konkurrieren mit mehr gro?en Geselschaften.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Override Euer Leben mit Macbook und Anbiegungen');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Sei in Ber?hrung mit anderer, ausnutzt Notizbuch. F?r gebietsfremde Notizbuch haben Skype oder Viber f?r kostenfreie Glocken. Erg?nzend, soziale Netze ist zug?nglich allemal mit schneller 3g derart als Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Erledige euere Lichtbilder zug?ngliche f?r all, f?r anmutet und mi?f?llt, derart als Instagram.F?r jedes Lichtbild, das zug?nglich'' ist Apple Store Anbiegungen rufen Instaphoto was zu teilen sich Lichtbilder momentan.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Reich Wolkige Anbiegungen');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Wolke Anbieter, das Anschluss ab durchgesuchter Einrichtung ist Bevorzugung anheimstellen, als Betriebe anfangen, zu abschaffen, als sie k?nnen fortf?hren zu machen Busine? in Mobile bevorzugt Arbeitsplatz.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Wann neue Aufl?sung ist n?tig, Betriebe Wille auf einmal zu finden und herunterladen diese Aufl?sung ohne das, auf da? zu bezahlen Befehl ausarbeiten der Programmsversorgung, auf da? zu schaffen eins.');
INSERT INTO search VALUES ('', 'Notizbuch - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/laptops/', 'Notizbuch f?r ''Busine? zu suchen');

INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Moving in lockstep with business');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'When you use IOS or Android technology as one of the main business skills, new possibilities are available. As many people that have phone, they love their work, productivity is increasing in a simple working day. Phones enable your mind with skills that never ever thought about before and operate with them in random tasks.');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Better than you can just imagine');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'With new tools for IT in IOS, great security you can hold any data in your Iphone.Powerful productivity features are pretty useful for your users needs and to make your workday mo productive.');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'With Iphone, you are not going to miss any note for your business and stay up-to-date everywhere');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Apps for Everything');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'The suite of electronic tools a business needs to conduct daily operations is shifting. At one time, a business owner needed an Office suite, e-mail, and industry-specific software to open for business.');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Everything from billing and scheduling to project management may be moved to Cloud-based apps, allowing small businesses with small budgets to compete against much larger companies.');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Reimagine your life with Iphone and Apps');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Be in touch with others by using phone. For non-resident calls IOS or Android phones have Skype or Viber for free calls. In addition, social networks are available with fast 3G like Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Make your photos available for everyone for likes or dislikes, like Instagram.For each photo, available Apple Store App called Instaphoto to share your photos instantly.');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'A lot of Cloud Apps');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'Cloud providers who provide connectivity from any approved device will be at an advantage as businesses begin to troubleshoot ways they can continue to do business in a mobile-preferred workplace.');
INSERT INTO search VALUES ('', 'Phones - Business - Woden Sims', 'http://woden-sims.hol.es/business/phones/', 'When a new solution is needed, businesses will be able to immediately find and download that solution without having to pay a team of software developers to create one.');

INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Двигаясь нога в ногу с бизнесом');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'При использовании IOS или Android технологии, одной из главных деловых навыков, новые возможности имеются. Как и многие люди, которые имеют телефон, они любят свою работу, производительность растет в простой рабочий день. Телефоны позволяют ваш разум с навыками, которые никогда не думали о до и работать с ними в случайных задач.');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Лучше чем вы можете даже представить');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'С новыми инструментами для ИТ в IOS, большой безопасности вы можете держать какие-либо данные в ваших Iphone.Powerful особенностей производительности довольно полезно для ваших нужд пользователей и сделать ваш рабочий день пн продуктивным.');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'С Iphone, вы не собираетесь пропустить любую ноту для вашего бизнеса и оставаться актуальной во всем мире');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Приложения для всего');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'В суете электронных средств бизнес должен вести ежедневные операции смещается. В свое время, владелец бизнеса нужен офисный пакет, электронной почты, и отраслевые программы, чтобы открыть для бизнеса.');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Все, начиная от биллинга и планирования в управлении проектами могут быть перемещены в приложениях облачных, что позволяет малым предприятиям с небольшими бюджетами, чтобы конкурировать с более крупными компаниями.');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Переопределите Вашу жизнь с Iphone и приложениями');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Будьте в контакте с другими, используя телефон. Для нерезидента IOS или Android телефоны имеют Skype или Viber для бесплатных звонков. В дополнение, социальные сети доступны всегда с быстрым 3G такие как Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Сделайте ваши фотографии доступными для всех, для лайков и дизлайков, такие как Instagram.Для каждой фотографии, доступной Apple Store Приложения называеться Instaphoto что бы делиться фотографиями моментально.');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Много Облачных приложений');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Облако провайдеров, которые предоставляют подключение от проверенного устройства будет преимущество, как предприятия начинают устранять, как они могут продолжать делать бизнес в мобильном-Удобнее рабочем месте.');
INSERT INTO search VALUES ('', 'Телефоны - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/phones/', 'Когда новое решение необходимо, предприятия смогут сразу найти и скачать это решение без того, чтобы платить команду разработчиков программного обеспечения, чтобы создать одну.');

INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Bewegt sich Bein in Bein mit Busine?');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Bei Ausnutzung IOS oder Android der Technologie, die eins aus kardinalen sachlichen Fertigkeiten, neue M?glichkeiten haben. Sowohl wie viele Leute, die Fernsprecher haben, sie lieben ihriges Arbeiten, Produktivit?t ansteigt in einfachen Arbeitstag. Fernsprecher erlauben euer Geist mit Fertigkeiten, die an bis und zu arbeiten mit ihnen in beil?ufige Aufgaben keinmal nicht dachten.');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Besser was ihr k?nnen selbst vorstellen'' sich');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Mit neuen Werkzeugen f?r IT in IOS, gro?er Sicherheit ihr k?nnen halten irgendeine Angaben in euer Iphone.Powerful der Seltsamkeiten der Produktivit?t genug behilflich f?r euere Drangsale der Benutzer und zu erledigen eueren Arbeitstag Montag produktiver.');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Mit Iphone, ihr nicht anschicken sich, beliebiger Hinweis f?r euer Busine? und zu bleiben aktuell in Ost und West'' zu vers?umen');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Anbiegungen f?r all');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'In Gehetze der elektronischen Geldmittel Busine? mu? f?hren allt?gliche Operationen absetzt. Zu seiner Zeit, Besitzer des Busine? ist n?tig B?ro T?te, elektronische Post, und Zweigeprogramme, auf da? zu ?ffnen f?r Busine?.');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'All, anf?ngt ab Haltung und Konzeptionierung in Amt Projekte k?nnen sein deportiert in Anbiegungen wolkiger, da? erlaubt geringen Betrieben mit kleinen Budgets, auf da? zu konkurrieren mit mehr gro?en Geselschaften.');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Override Euer Leben mit Iphone und Anbiegungen');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Sei in Ber?hrung mit anderer, ausnutzt Fernsprecher. F?r gebietsfremde IOS oder Android Fernsprecher haben Skype oder Viber f?r kostenfreie Glocken. Erg?nzend, soziale Netze ist zug?nglich allemal mit schneller 3g derart als Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Erledige euere Lichtbilder zug?ngliche f?r all, f?r anmutet und mi?f?llt, derart als Instagram.F?r jedes Lichtbild, das zug?nglich'' ist Apple Store Anbiegungen rufen Instaphoto was zu teilen sich Lichtbilder momentan.');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Reich Wolkige Anbiegungen');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Wolke Anbieter, das Anschluss ab durchgesuchter Einrichtung ist Bevorzugung anheimstellen, als Betriebe anfangen, zu abschaffen, als sie k?nnen fortf?hren zu machen Busine? in Mobile bevorzugt Arbeitsplatz.');
INSERT INTO search VALUES ('', 'Fernsprecher - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/phones/', 'Wann neue Aufl?sung ist n?tig, Betriebe Wille auf einmal zu finden und herunterladen diese Aufl?sung ohne das, auf da? zu bezahlen Befehl ausarbeiten der Programmsversorgung, auf da? zu schaffen eins.');

INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Avance un pied un pied avec un business');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Sous un recours IOS ou Android une technologie, seul de un un affaires habitudes capitales, un d?bouch?s nouveaux se ont. Comme et un beaucoup de gens, dont ont un t?l?phone, eux aiment leur travail, une efficacit? un cro?t un ouvrable jour frugal. Un t?l?phones permettent votre raison avec un habitudes, dont jamais non crurent de avant et exercer avec eux dans un probl?mes accidentels.');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Mieux que vous peuvent m?me d?poser');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Avec un instruments nouveaux pour un technologies informationneles dans IOS, une s?curit? grande vous peuvent d?tenir un tout donn?es dans votre Iphone.Powerful un particularit?s une efficacit? assez utile pour vos besoins un usagers et faire votre jour ouvrable plus productif.');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Avec Iphone, vous non assemblent se manquer une ne importe quel note pour votre business et demeurer actuel dans tout le un monde');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Annexes pour entier');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Dans active se un ressources ?lectroniques un business doit conduire un op?rations quotidiennes se destitue. Leur temps, un possesseur un business besoin un une office paquet, un courriel, et un programmes sectoriels, pour d?couvrir pour un business.');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Entier, commence de une livraison et une planification dans une administration un projets peuvent ?tre d?plac? dans un annexes nuageux, que permet un petit entreprises avec un budgets petits, pour concurrencer avec un compagnies plus grosses.');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Override votre vie avec Iphone et un annexes');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Sont dans un contact avec autre, utilise un t?l?phone. Pour non-r?sident IOS ou Android un t?l?phones ont Skype ou Viber pour un sonneries gracieuses. Une annexe, un filets sociaux abordable toujours avec prompt 3G pareil comme Twitter, Facebook, VK. ');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Font vos photographies abordable pour entier, pour aime et d?pla?t, pareil comme Instagram.Pour une photographie, abordable chaque Apple Store Annexes appelle se Instaphoto que partager se un photographies momentan?ment.');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Beaucoup annexes nuageuses');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Nuage fournisseurs, dont accordent connecte de un agencement contr?l? est un avantage, comme un entreprises commencent ?liminer, comme eux peuvent continuer faire un business dans mobile pr?f?r? un emploi.');
INSERT INTO search VALUES ('', 'T?l?phone - sont un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/phones/', 'Lorsque une un nouveau d?cision indispensable, un entreprises peuvent imm?diatement retrouver et t?l?charger cette d?cision sans celui, pour payer un commandement un concepteurs un logiciel, pour constituer seul.');

INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Moving in lockstep with business');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'When you use MAC OS X or Windows technology as one of the main business skills, new possibilities are available. As many people that have laptop, they love their work, productivity is increasing in a simple working day. Devices enable your mind with skills that never ever thought about before and operate with them in random tasks.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Better than you can just imagine');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'With new tools for IT in IOS, great security you can hold any data in your Device. Powerful productivity features are pretty useful for your users needs and to make your workday more productive.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'With Ipad, you are not going to miss any note for your business and stay up-to-date everywhere',
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Apps for Everything');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'The suite of electronic tools a business needs to conduct daily operations is shifting. At one time, a business owner needed an Office suite, e-mail, and industry-specific software to open for business.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Everything from billing and scheduling to project management may be moved to Cloud-based apps, allowing small businesses with small budgets to compete against much larger companies.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Reimagine your life with Ipad and Apps');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Be in touch with others by using Ipad. For non-resident calls devices have Skype or Viber for free calls. In addition, social networks are available with fast 3G like Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Make your photos available for everyone for likes or dislikes, like Instagram. For each photo, available Apple Store App called Instaphoto to share your photos instantly.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'A lot of Cloud Apps');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Cloud providers who provide connectivity from any approved device will be at an advantage as businesses begin to troubleshoot ways they can continue to do business in a mobile-preferred workplace.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'When a new solution is needed, businesses will be able to immediately find and download that solution without having to pay a team of software developers to create one.');
INSERT INTO search VALUES ('', 'Devices - Business - Woden Sims', 'http://woden-sims.hol.es/business/devices/', 'Search device for business');

INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Двигаясь нога в ногу с бизнесом');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'При использовании Mac OS X или Windows, а технологии одной из главных деловых навыков, новые возможности имеются. Как и многие люди, которые имеют ноутбук, они любят свою работу, производительность растет в простой рабочий день. Устройства позволяют ваш разум с навыками, которые никогда не думали о до и работать с ними в случайных задач.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Лучше чем вы можете даже представить');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'С новыми инструментами для ИТ в IOS, большой безопасности вы можете проводить какие-либо данные в устройстве. Мощные функции производительности довольно полезно для ваших нужд пользователей и сделать ваш рабочий день более продуктивным.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'С Ipad, вы не собираетесь пропустить любую ноту для вашего бизнеса и оставаться актуальным во всем мире');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Приложения для всего');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'В суете электронных средств бизнес должен вести ежедневные операции смещается. В свое время, владелец бизнеса нужен офисный пакет, электронной почты, и отраслевые программы, чтобы открыть для бизнеса.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Все, начиная от биллинга и планирования в управлении проектами могут быть перемещены в приложениях облачных, что позволяет малым предприятиям с небольшими бюджетами, чтобы конкурировать с более крупными компаниями.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Пересмотрите Вашу жизнь с Ipad и приложениями');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Будьте связаны с другими используя Ipad. Для международних звонков планшеты имеют Skype или Viber для бесплатных звонков. В дополнение, социальные сети доступны всегда с быстрым 3G такие как Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Сделайте ваши фотографии доступными для всех, для лайков и дизлайков, такие как Instagram. Для каждой фотографии, доступной Apple Store Приложения называеться Instaphoto что бы делиться фотографиями моментально.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Много Облачных приложений');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Облако провайдеров, которые предоставляют подключение от проверенного устройства будет преимущество, как предприятия начинают устранять, как они могут продолжать делать бизнес в мобильном-Удобнее рабочем месте.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Когда новое решение необходимо, предприятия смогут сразу найти и скачать это решение без того, чтобы платить команду разработчиков программного обеспечения, чтобы создать одну.');
INSERT INTO search VALUES ('', 'Планшеты - Бизнес - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/business/devices/', 'Искать планшет для бизнеса');

INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Avance un pied un pied avec un business');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Sous un recours Mac OS X ou Windows, et un technologies seul de un un affaires habitudes capitales, un d?bouch?s nouveaux se ont. Comme et un beaucoup de gens, dont ont notebook, eux aiment leur travail, une efficacit? un cro?t un ouvrable jour frugal. Un agencements permettent votre raison avec un habitudes, dont jamais non crurent de avant et exercer avec eux dans un probl?mes accidentels.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Mieux que vous peuvent m?me d?poser');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Avec un instruments nouveaux pour un technologies informationneles dans IOS, une s?curit? grande vous peuvent conduite un tout donn?es dans un agencement. Un fonctions une efficacit? puissantes assez utile pour vos besoins un usagers et faire votre jour ouvrable plus productif.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Avec Ipad, vous non assemblent se manquer une ne importe quel note pour votre business et demeurer actuel dans tout le un monde');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Annexes pour entier');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Dans active se un ressources ?lectroniques un business doit conduire un op?rations quotidiennes se destitue. Leur temps, un possesseur un business besoin un une office paquet, un courriel, et un programmes sectoriels, pour d?couvrir pour un business.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Entier, commence de une livraison et une planification dans une administration un projets peuvent ?tre d?plac? dans un annexes nuageux, que permet un petit entreprises avec un budgets petits, pour concurrencer avec un compagnies plus grosses.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Revoissent votre vie avec Ipad et un annexes');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Sont connexe avec autre utilise Ipad. Pour un sonneries internationales un objets ont Skype ou Viber pour un sonneries gracieuses. Une annexe, un filets sociaux abordable toujours avec prompt 3G pareil comme Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Font vos photographies abordable pour entier, pour aime et d?pla?t, pareil comme Instagram. Pour une photographie, abordable chaque Apple Store Annexes appelle se Instaphoto que partager se un photographies momentan?ment.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Beaucoup annexes nuageuses');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Nuage fournisseurs, dont accordent connecte de un agencement contr?l? est un avantage, comme un entreprises commencent ?liminer, comme eux peuvent continuer faire un business dans mobile pr?f?r? un emploi.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Lorsque une un nouveau d?cision indispensable, un entreprises peuvent imm?diatement retrouver et t?l?charger cette d?cision sans celui, pour payer un commandement un concepteurs un logiciel, pour constituer seul.');
INSERT INTO search VALUES ('', 'Plaques - un Business - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/business/devices/', 'Chercher un objet pour un business');

INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Bewegt sich Bein in Bein mit Busine?');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Bei Ausnutzung Mac OS X oder Windows, und Technologien eins aus kardinalen sachlichen Fertigkeiten, neue M?glichkeiten haben. Sowohl wie viele Leute, die Notizbuch haben, sie lieben ihriges Arbeiten, Produktivit?t ansteigt in einfachen Arbeitstag. Einrichtungen erlauben euer Geist mit Fertigkeiten, die an bis und zu arbeiten mit ihnen in beil?ufige Aufgaben keinmal nicht dachten.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Besser was ihr k?nnen selbst vorstellen'' sich');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Mit neuen Werkzeugen f?r Informationentechnologien in IOS, gro?er Sicherheit ihr k?nnen durchf?hren irgendeine Angaben in Einrichtung. Kraftvoll Funktionen der Produktivit?t genug behilflich f?r euere Drangsale der Benutzer und zu erledigen eueren Arbeitstag mehr produktiver.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Mit Ipad, ihr nicht anschicken sich, beliebiger Hinweis f?r euer Busine? und zu bleiben aktuell in Ost und West'' zu vers?umen');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Anbiegungen f?r all');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'In Gehetze der elektronischen Geldmittel Busine? mu? f?hren allt?gliche Operationen absetzt. Zu seiner Zeit, Besitzer des Busine? ist n?tig B?ro T?te, elektronische Post, und Zweigeprogramme, auf da? zu ?ffnen f?r Busine?.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'All, anf?ngt ab Haltung und Konzeptionierung in Amt Projekte k?nnen sein deportiert in Anbiegungen wolkiger, da? erlaubt geringen Betrieben mit kleinen Budgets, auf da? zu konkurrieren mit mehr gro?en Geselschaften.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Durchlauf Euer Leben mit Ipad und Anbiegungen');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Sei gebunden mit anderer ausnutzt Ipad. F?r internationale Glocken Gegenst?nde haben Skype oder Viber f?r kostenfreie Glocken. Erg?nzend, soziale Netze ist zug?nglich allemal mit schneller 3g derart als Twitter, Facebook, VK.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Erledige euere Lichtbilder zug?ngliche f?r all, f?r anmutet und mi?f?llt, derart als Instagram. F?r jedes Lichtbild, das zug?nglich'' ist Apple Store Anbiegungen rufen Instaphoto was zu teilen sich Lichtbilder momentan.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Reich Wolkige Anbiegungen');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Wolke Anbieter, das Anschluss ab durchgesuchter Einrichtung ist Bevorzugung anheimstellen, als Betriebe anfangen, zu abschaffen, als sie k?nnen fortf?hren zu machen Busine? in Mobile bevorzugt Arbeitsplatz.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Wann neue Aufl?sung ist n?tig, Betriebe Wille auf einmal zu finden und herunterladen diese Aufl?sung ohne das, auf da? zu bezahlen Befehl ausarbeiten der Programmsversorgung, auf da? zu schaffen eins.');
INSERT INTO search VALUES ('', 'Gegenst?nde - Busine? - Woden Sims (DE)', 'http://woden-sims.hol.es/de/business/devices/', 'Gegenstand f?r ''Busine? zu suchen');

INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Contacting Woden Sims');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Sales category');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Woden Sims Online Store');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'The Woden Sims Online Store is a quit place to purchase any quality or any product category from Apple, Samsung and other manufacturers. You can buy online or by call +38 (095) 094 82 68 or other phones as follows on this page 7 days a week from 10 a.m. to 19 p.m. UTC');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'You can get information about an order placed on Woden Sims Store by Order Status page. If you would prefer, you can also check the order status via Phone, all phones available for each country of our company is provided below.');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Get Financing for each of your device bought in our Store');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Woden Sims Financial offers financing for every product you bought. It''s available on categories: Phones, Laptops, TVs.For each category, Education, Business you can find out hot deals for each Area of work.');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Consult using Online Support Service');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Visit our Support page to ask any questions that you want. We will respond you as soon as possible.');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Getting items for Business');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'If you want to get items for your business or be consulted in area of using it call +38 (095) 094 82 68 or other phones supported by Woden Sims. All phones available for each country of our company is provided below.');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Getting items for Education');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'If you want to get items for your education or be consulted in area of using it call +38 (095) 531 618 31 or other phones supported by Woden Sims. All phones available for each country of our company is provided below.');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Praha, Czech Republic');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Rosmarin Business Center');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Woden Sims Store');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Support Service');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Warsaw, Poland');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'International Business Center');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Vilnius, Lithuania');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Vilnius International Business Center');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Lviv, Ukraine');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'King Cross Leopolis');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Kiev, Ukraine');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Gulliver Business Center');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Moscow, Russia');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Moscow International Business Center Facto');
INSERT INTO search VALUES ('', 'Contact Us - Woden Sims', 'http://woden-sims.hol.es/contact/', 'Important! Due to political tensions personal leaved Moscow and unfortunately, the Open Line not working now!');

INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Связаться c Woden Sims');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Отдел продаж');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Woden Sims Онлайн магазин');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Woden Sims Онлайн магазин это место для покупки любого качества или любую категорию продукта из Apple, Samsung и других производителей. Вы можете купить онлайн или по телефону +38 (095) 094 82 68 или других телефонов, как следует на этой странице 7 дней в неделю с 10 утра до 19 часов UTC');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Вы можете получить информацию о порядке размещается на Woden Sims магазин, с помощью Статус заказа страница. Если вы предпочитаете, вы также можете проверить статус заказа по телефону, все телефоны, доступные для каждой страны нашей компании представлена ниже.');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Получить финансирование для каждого из ваших устройств купили в нашем магазине');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Woden Sims финансовый предлагает финансирование для каждого продукта, который вы купили. Его можно по категориям: Телефоны, Ноутбуки, TV.Для каждой категории, Образование, Бизнес Вы можете узнать горячие предложения для каждой области работы.');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Проконсультируйтесь с помощью службы поддержки онлайн');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Посетите наш Поддержка страница задавать любые вопросы, которые вы хотите. Мы ответим вам как можно скорее.');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Получение предметы для бизнеса');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Если вы хотите, чтобы получить предметы для вашего бизнес или можно ознакомиться в сфере использования его по телефону +38 (095) 094 82 68 или другие телефоны, поддерживаемые Woden Sims. Все телефоны, доступные для каждой страны нашей компании представлена ниже.');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Получить предметы для образования');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Если вы хотите, чтобы получить предметы для вашего образование или можно ознакомиться в сфере использования его по телефону +38 (095) 531 618 31 или другие телефоны, поддерживаемые Woden Sims. Все телефоны, доступные для каждой страны нашей компании представлена ниже.');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Прага, Республика Чехия');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Розмарин Бизнес Центр');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Woden Sims Магазин');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Служба поддержки');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Офис');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Варшава, Польша');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Международный бизнес центр');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Вильнюс, Литва');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Вильнюский Международный бизнес центр');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Львов, Украина');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Киев, Украина');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Гулливер Бизнес Центр');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Москва, Россия');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Московский Международный бизнес центр Факто');
INSERT INTO search VALUES ('', 'Свяжитесь с нами - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/contact/', 'Важно! В связи с политической напряженностю персонал покинул Москву и к сожалению, открытая линия не работает сейчас!');

INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'C zu ''entspinnen sich Woden Sims');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Abteilung der Verk?ufe');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Woden Sims Onlune Kaufladen');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Woden Sims Onlune Kaufladen dieser Ort f?r Abnahme der beliebigen Qualit?t oder beliebige Kategorie des Produkts aus Apple, Samsung und andere Produzenten. Ihr k?nnen kaufen online oder durch Draht 38 (095) 094 82 68 oder andere Fernsprecher, als kommt an dieser Seite 7 Tage in Woche aus 10 Matinee 19 Stunden UTC');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Ihr k?nnen ?bernehmen Information ?ber Ordnung disloziert an Woden Sims Kaufladen, mit Aushilfe Status des Auftrags Seite. Falls ihr bevorzugen, ihr gleichfalls k?nnen durchsuchen Status des Auftrags durch Draht, all Fernsprecher, die f?r jedes Land unserer Geselschaft vorgestellter sich niedriger zug?nglich ist.');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Finanzierung f?r jeder aus eueren Einrichtungen kauften in unserem ''Kaufladen zu ?bernehmen');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Woden Sims finanzieller anbietet Finanzierung f?r jedes Produkt, das ihr kauften. Er es darf Kategorieen: Fernsprecher, Notizbuch, TV.F?r jede Kategorie, Ausbildung, Busine? Ihr k?nnen dahinterkommen hei?e Anerbieten f?r jedes Gebiet des Arbeitens.');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Konsultieren anhand Dienstes der Aufrechterhaltung online');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Besuche unser Aufrechterhaltung Seite zu aufgeben beliebige Fragen, die ihr belieben. Wir antworten euch so bald wie m?glich.');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Empfang Gegenst?nde f?r Busine?');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Falls ihr belieben, auf da? zu ?bernehmen Gegenst?nde f?r euer Busine? oder es darf bekannter macht sich in Sph?re der Ausnutzung des seiner durch Draht 38 (095) 094 82 68 oder andere Fernsprecher, aufrechterhalten Woden Sims. All Fernsprecher, die f?r jedes Land unserer Geselschaft vorgestellter sich niedriger zug?nglich ist.');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Gegenst?nde f?r ''Ausbildung zu ?bernehmen');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Falls ihr belieben, auf da? zu ?bernehmen Gegenst?nde f?r euer Ausbildung oder es darf bekannter macht sich in Sph?re der Ausnutzung des seiner durch Draht 38 (095) 531 618 31 oder andere Fernsprecher, aufrechterhalten Woden Sims. All Fernsprecher, die f?r jedes Land unserer Geselschaft vorgestellter sich niedriger zug?nglich ist.');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Prag, Republik Tschechei');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Rosmarin Busine? Kern');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Woden Sims Kaufladen');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Dienst der Aufrechterhaltung');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'B?ro');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Warschau, Polen');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Internationales Busine? Kern');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Wilnjus, Litauen');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Wilnjus Internationales Busine? Kern');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Lviv, Ukraine');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Kiew, Ukraine');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Gulliver Busine? Kern');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Moskau, Ru?land');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Internationales Moskaubusine? Kern Facto');
INSERT INTO search VALUES ('', 'Einla? sich mit wir - Woden Sims (DE)', 'http://woden-sims.hol.es/de/contact/', 'Es ist ''beachtenswert! Gelegentlich politischer Spannung Personal abwandte'' sich Moskau und leider, offene Linie nicht arbeitet augenblicklich!');

INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Embarrasser se c Woden Sims');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'D?partement un ventes');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Woden Sims Online est une boutique');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Woden Sims Online est une boutique ce lieu pour un achat une ne importe quel qualit? ou une ne importe quel cat?gorie un produit de Apple, Samsung et autres producteurs. Vous peuvent acheter online ou t?l?phoniquement 38 (095) 094 82 68 ou autres t?l?phones, comme il convie sur cette page un 7 jours une semaine d?s 10 un matin un 19 h UTC');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Vous peuvent empocher une information de un dispositif range se sur Woden Sims une boutique, avec une aide Statut une commande page. Si vous pr?f?rer, vous aussi peuvent contr?ler un statut une commande t?l?phoniquement, T?l?phones, abordable pour un pays notre compagnie chaque d?pos? au-dessous ''entiers.');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Empocher un financement pour chaque de vos agencements achet?rent dans notre boutique');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Woden Sims financier offre un financement pour un produit, dont vous achet?rent chaque. Il on peut selon un cat?gories: T?l?phones, Notebook, TV.Pour une cat?gorie chaque, Enseignement, Business Vous peuvent apprendre un offres ardentes pour une r?gion un travail chaque.');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Consulter avec une aide un service une adh?sion online');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Visitent notre Soutien Page demander un ne importe quel questions, dont vous veulent. Nous r?pondons vous comme on peut plut?t.');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'R?ception un objets pour un business');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Si vous veulent, pour empocher un objets pour votre un business ou on peut disponible dans un domaine un recours il t?l?phoniquement 38 (095) 094 82 68 ou autres t?l?phones, appuient Woden Sims. T?l?phones, abordable pour un pays notre compagnie chaque d?pos? au-dessous ''entiers.');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Empocher un objets pour un enseignement');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Si vous veulent, pour empocher un objets pour votre Enseignement ou on peut disponible dans un domaine un recours il t?l?phoniquement 38 (095) 531 618 31 ou autres t?l?phones, appuient Woden Sims. T?l?phones, abordable pour un pays notre compagnie chaque d?pos? au-dessous ''entiers.');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Prague, une r?publique R?publique tch?que');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Romarin un business un centre');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Woden Sims une boutique');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Service une adh?sion');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Office');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', ' Varsovie, une Pologne');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Un business ''international est un centre');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Vilnious, Lituanie');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Vilnius un business international un centre');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Lviv, une Ukraine');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'King Cross Leopolis');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Kiev, une Ukraine');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Gulliver un business un centre');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Moscou, une Russie');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Un international business moscovite est un centre Facto');
INSERT INTO search VALUES ('', 'Embarrassents - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/contact/', 'Essentiel! Dans une connexion avec un raidissement politique un personnel abandonna Moscou et malheureusement, une ligne d?couverte ch?me maintenant!');

INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Thin, capable that you have never ever seen before.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Never worry about where to place this incredible thing.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Powerful, minimalistic form');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Lots of Ipads have 64-bit arhitecture that makes performance to be the perfect in a comparison with others.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Battery for performance');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'With new edition Apple made graphics in a 2.5 times faster than in a previous With new battery life, that equals to 10 hours of work you will forgive about charging your device for all day long.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Awesome thin, best performance');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'There is lots to meet your eye. Developing the most user common interface, thin, productive');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Take Photos and Record Video');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'The back-facing camera on the iPad is surprisingly good. It''s not quite as good as the iPhone 6, but the iPad Air 2''s 8 megapixel camera can compete with most smartphone cameras. You''ll know you have a great shot lined up on it, and you don''t have to miss the action because you are staring at a tiny screen.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Family Entertainment');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'When you combine Apple''s rigorous inspection of each app with the parental controls found in their iOS devices and the thousands of great games and apps on the iPad, you get the perfect family entertainment system.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Interactive performance with other devices');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Now, using of Icloud as well as OneDrive is actual much');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Icloud. Connect with Apple TV. Share Data.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Using of Icloud you can share Photos, Videos, apps with another devices such as Iphones, Imac, Macbook that is really useful. You can send an request for your Apple TV to see the Full HD video on your TV. The same works for all devices that are compatible and uses Windows');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Thin. Incredible. Useful for day-to-day life.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Apple designed and made 6.1 mm thin device for your needs. Now, you will never be worry about where to place this incredible thing. Newly, developed Ipad weight only 1 pound that is really useful for teenth, day-to-day life.');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Thin. Productive. Practical');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Order it now');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Reimagine your life with new technology');
INSERT INTO search VALUES ('', 'Devices - Woden Sims', 'http://woden-sims.hol.es/devices/', 'Discover for business');

INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Тонкий, способный, который вы никогда не видели раньше.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Никогда не переживайте куда положить эту замечательную вещь');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Сильный, минималистическая форма');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Многие Ipad имеют 64-разрядную архитектуру, что делает выступление будет идеальным в сравнении с другими.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Батарея за производительность');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'С новой редакции Apple, сделал графику в 2,5 раза быстрее, чем в предыдущей С новой жизни батареи, который равен 10 часов работы вы будете прощать о зарядке устройства в течение всего дня.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Удивительно тонкий, лучшее исполнение');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Существует много, чтобы удовлетворить ваши глаза. Разработка общий интерфейс пользователя наиболее тонкий, продуктивной');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Делайте фотографии и записывать видео');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Задняя фронтальная камера на Ipad удивительно хорошо. Это не совсем так хорошо, как iPhone 6, но 8-мегапиксельная камера в IPAD воздуха 2 может конкурировать с большинством смартфонов камер. Вы будете знать, у вас есть великолепный снимок выстроились на нем, и вы не должны пропустить действие, потому что вы, глядя на крошечном экране.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Семейное развлечение');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Если вы объедините строгую проверку от Apple каждого приложения с родительского контроля, обнаруженных в их IOS устройств и тысячи великих игр и приложений на Ipad, вы получите совершенную систему развлечения для всей семьи.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Интерактивный перформанс с другими устройствами');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Теперь, используя в ICloud а также OneDrive актуальна много');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'ICloud. Связаться с Apple TV. Распространение данных.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Использование ICloud вы можете обмениваться фотографиями, видео, приложения с еще устройств, таких как Iphones, Imac, Macbook, что действительно полезно. Вы можете отправить запрос для вашего Apple TV, чтобы увидеть видео Full HD на телевизоре. Те же работы для всех устройств, которые совместимы и использует Windows');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Тонкий. Невероятный. Полезно для жизни изо дня в день.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Apple, разработаны и изготовлены 6.1 мм тонкий устройство для ваших нужд. Теперь вы никогда не будет беспокоиться о том, где разместить эту невероятную вещь. Недавно, разработаны Ipad вес только 1 фунт, что на самом деле полезно для надцатого, жизнь изо дня в день.');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Тонкий. Продуктивный. Практический');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Заказать сейчас');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Переопределите Вашу жизнь с новыми технологиями');
INSERT INTO search VALUES ('', 'Планшеты - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/devices/', 'Откройте для бизнеса');

INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'D?licat, apte, dont vous jamais non aper?urent auparavant.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Jamais non en fait se o? reposer cette chose ?patante');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Costaud, une forme minimale');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Beaucoup de Ipad ont une une 64-d?charge architecture, que fait un discours est id?al dans une comparaison avec autre.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Batterie une efficacit?');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'D?s une r?daction Apple nouvelle, fit graphique dans 2,5 un coup prompt, que dans une d?s une vie nouvelle batterie ant?rieure, dont ?gal un 10 h un travail vous sont amnistier de charge un agencement ? le un cours de un jour entier.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Fameusement d?licat, un une ?lite accomplissement');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Existe beaucoup, pour contenter vos yeux. Une ?laboration une interface un usager commune plus d?licat, productif');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Font un photographies et enregistrer une vid?o');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Derri?re une frontale cam?ra sur Ipad fameusement bien. Ce non compl?tement de la sorte bien, comme iPhone 6, mais une 8-mpX cam?ra dans IPAD un air 2 peut concurrencer avec une majorit? smartphone un cam?ras. Vous sont conna?tre, contre vous est une photographie magnifique rang?rent se sur le, et vous non doivent manquer une action, parce que vous, pige sur un ?cran minuscule.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Amusement familial');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Si vous associent un contr?le aust?re de Apple une annexe chaque d?s un un parent contr?le, ?vent? dans leur IOS un agencements et un millier un jeux et un annexes grands sur Ipad, vous empochent un syst?me un amusement perfectif pour une famille enti?re.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Interactif un accomplissement avec autres agencements');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Maintenant, utilise dans ICloud et aussi OneDrive actuel beaucoup');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'ICloud. Embarrasser se avec Apple TV. Une diffusion un donn?es.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Recours ICloud vous peuvent ?changer un photographies, une vid?o, un annexes d?s un encore agencements, pareil comme Iphones, Imac, Macbook, que r?ellement utile. Vous peuvent d?puter une demande pour votre Apple TV, pour apercevoir une vid?o Full HD sur un poste. M?mes travaux pour un agencements, dont compatible et utilise Windows entiers');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'D?licat. Fabuleux. Utile pour une vie un jour un jour.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Apple, exploit? et fabriqu? 6.1 mm d?licat un agencement pour vos besoins. Maintenant vous jamais non est d?ranger se de celui, o? arranger cette chose fabuleuse. Depuis peu, exploit? Ipad un poids seul une 1 livre, que sur m?me affaire utile pour un enfants, une vie un jour un jour.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'D?licat. Productif. Pragmatique.');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Commander maintenant');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'Assignent votre vie avec un technologies');
INSERT INTO search VALUES ('', 'Plaques - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/devices/', 'D?couvrent pour un business');

INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'D?nner, t?chtiger, das ihr keinmal nicht sahen ehemals.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Keinmal nicht gr?me sich wohin zu hineinlegen dieses bemerkenswertes Ding');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Gewaltiger, minimalistic Ausgestaltung');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Vieler Ipad haben 64-Bit Architektur, da? macht Aufbrechen ist idealer in dem Vergleich zu anderer.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Batterie vor Produktivit?t');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Aus neuer Schriftleitung Apple, erledigte Graphik in 2,5 Mal schnell, als in vorherige Aus neuem Leben Batterie, das ist gleich 10 Stunden des Arbeitens ihr sind zu begnadigen ?ber Lade der Einrichtung binnen all Tags.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Erstaunlich d?nner, bessere Erf?llung');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Besteht viel, auf da? zu zufriedenstellen euere Augen. Ausarbeitung gemeiner Schnittstelle des Benutzers ist h?chst d?nn, produktiver');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Mache Lichtbilder und zu anschreiben Video');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'R?ck Vorderseite Kamer an Ipad erstaunlich gut. Dieser nicht gar derma?en gut, als iPhone 6, aber 8-mpX Kamer in IPAD der Luft 2 kann konkurrieren mit Mehr Smartphone der Kamern. Ihr sind zu kennen, bei euch ist gro?artiger Schnappschuss aufgereiht an ihm, und ihr nicht m?ssen vers?umen Aktion, weil ihr, schaut an winzigem Bildschirm.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Familiebelustigung');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Falls ihr vereinigen strammen Versuch ab Apple jeder Anbiegung aus elterlicher Kontrolle, entdeckter in ihr IOS der Einrichtungen und Abertausende der gro?en Spiele und Anbiegungen an Ipad, ihr ?bernehmen vollkommenes Geb?ude der Belustigung f?r all Familie.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Online Aufbrechen mit anderen Einrichtungen');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'gegenw?rtig, ausnutzt in ICloud sowie OneDrive aktuell viel');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'ICloud. Apple TV zu einlassen sich mit. Ausbreitung der Angaben.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Ausnutzung ICloud ihr k?nnen austauschen Lichtbilder, video, Anbiegungen aus noch Einrichtungen, derart als Iphones, Imac, Macbook, da? g?ltig behilflich. Ihr k?nnen abfertigen Anfrage f?r euer Apple TV, auf da? zu sehen video Full HD an Fernsehapparat. Selbes Arbeiten f?r all Einrichtungen, die und ausnutzt Windows vereinbar ist');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'D?nner. Unwahrscheinlicher. Behilflich f?r Leben.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Apple, ist ausgearbeitet und fabrizierter 6.1 mm d?nner Einrichtung f?r euere Drangsale. Gegenw?rtig ihr keinmal nicht ist Sorgen macht sich ?ber das, wo zu plazieren dieses unwahrscheinliches Ding. J?ngst, ist ausgearbeitet Ipad Gewicht allein 1 Pfund, da? an selbst Angelegenheit behilflich f?r Kinder, Leben Tag in Tag.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'D?nner. Produktiver. Praktischer.');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Augenblicklich zu bestellen');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', 'Euer Leben mit neuen Technologien');
INSERT INTO search VALUES ('', 'Soup - Woden Sims (DE)', 'http://woden-sims.hol.es/de/devices/', '?ffne f?r Busine?');

INSERT INTO search VALUES ('', 'Education - Woden Sims', 'http://woden-sims.hol.es/education/', 'Even lots of ways to make your education more convenient');
INSERT INTO search VALUES ('', 'Education - Woden Sims', 'http://woden-sims.hol.es/education/', 'With usability, handy Phones, powerful as well as practical, comfortable and easy to use Laptops, you have everything to start thinking in a new way that gonna change your mind in more productive, practical way.');
INSERT INTO search VALUES ('', 'Education - Woden Sims', 'http://woden-sims.hol.es/education/', 'Phones in education');
INSERT INTO search VALUES ('', 'Education - Woden Sims', 'http://woden-sims.hol.es/education/', 'Phones have powerful, reusable, complex apps and features to make your schedule flexible as well as precise, lightly usable together with many devices.');
INSERT INTO search VALUES ('', 'Education - Woden Sims', 'http://woden-sims.hol.es/education/', 'Learn more');
INSERT INTO search VALUES ('', 'Education - Woden Sims', 'http://woden-sims.hol.es/education/', 'Laptops in education');
INSERT INTO search VALUES ('', 'Education - Woden Sims', 'http://woden-sims.hol.es/education/', 'Meanwhile its thin and powerful handy computer, the Laptop consider every detail to make your study exciting as well as pleasurable. Describe new possibilities.');

INSERT INTO search VALUES ('', 'Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/', 'Даже много способов, чтобы сделать ваше образование удобнее');
INSERT INTO search VALUES ('', 'Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/', 'С удобностю, удобных телефонов, мощный, а также практической, и удобной для использования с ноутбуками, у вас есть все, чтобы начать думать по-новому, что собираюсь передумать, зайдите в более продуктивной, практическим образом.');
INSERT INTO search VALUES ('', 'Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/', 'Телефоны в образовании');
INSERT INTO search VALUES ('', 'Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/', 'Телефоны имеют мощные, многоразовые, сложные приложения и функции, чтобы сделать ваш график гибкий, а также точным, слегка используется совместно со многими устройствами.');
INSERT INTO search VALUES ('', 'Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/', 'Узнать больше');
INSERT INTO search VALUES ('', 'Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/', 'Ноутбуки в образовании');
INSERT INTO search VALUES ('', 'Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/', 'Между тем, это тонкий и мощный удобный компьютер, ноутбук рассмотреть каждую деталь, чтобы сделать ваш исследование интересно, как а также приятным. Определите новые возможности.');

INSERT INTO search VALUES ('', 'Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/', 'Selbst reich Arten, auf da? zu erledigen euere Ausbildung bequem');
INSERT INTO search VALUES ('', 'Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/', 'Mit G?nstig, bequeme Fernsprecher, kraftvoll, sowie praktischer, und bequemer f?r Ausnutzung mit Laptops, bei euch ist all, auf da? zu anfangen zu denken-neu, da? anschickt sich, Ihre Meinung ?ndern, hingeh in mehr produktiver, praktische Art.');
INSERT INTO search VALUES ('', 'Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/', 'Fernsprecher in Ausbildung');
INSERT INTO search VALUES ('', 'Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/', 'Fernsprecher haben Leistungsstark, wiederverwendbar, komplizierter Anbiegungen und Funktionen, auf da? zu erledigen eueren graphischen Plan biegsamer, sowie exakter, leicht ausnutzt gemeinsam mit viel Einrichtungen.');
INSERT INTO search VALUES ('', 'Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/', 'Notizbuch in uns Ausbildung');
INSERT INTO search VALUES ('', 'Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/', 'Dazwischen, dieser d?nner und kraftvoll bequemer Computer, Notizbuch zu begutachten jedes Detail, auf da? zu erledigen euer Durchforschung ist interessant, als sowie angenehmer. Bestimme neue M?glichkeiten.');
INSERT INTO search VALUES ('', 'Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/', 'Gr??er zu');

INSERT INTO search VALUES ('', 'Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/', 'M?me un beaucoup fa?ons, pour faire votre enseignement confortable');
INSERT INTO search VALUES ('', 'Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/', 'Avec une commodit?, un t?l?phones confortables, puissant, et aussi pragmatique, et confortable pour un recours avec notebooks, contre vous est entier, pour commencer croire ? nouveau, que assemble se changer votre esprit dans plus productif, une formule pragmatique.');
INSERT INTO search VALUES ('', 'Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/', 'T?l?phones dans un enseignement');
INSERT INTO search VALUES ('', 'Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/', 'T?l?phones ont un, r?utilisables, complexe annexes et un fonctions puissantes, pour faire votre diagramme flexible, et aussi exact, vaguement se utilise mixte avec un beaucoup agencements.');
INSERT INTO search VALUES ('', 'Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/', 'Apprendre davantage');
INSERT INTO search VALUES ('', 'Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/', 'Notebooks dans un enseignement');
INSERT INTO search VALUES ('', 'Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/', 'Entre celui, c''est un confortable ordinateur d?licat et puissant, notebook consid?rer un chrome chaque, pour faire votre une exploration int?ressant, comme et aussi agr?able. Assignent un d?bouch?s nouveaux.');

INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Useful cells in education to increase quality of received knowledge');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Every phone is packed and designed for usability with software, built-in applications that makes you greater productive. And in this era of technological development, increased compound between laptops and TVs. With easy up-to-day tasks, it makes your life absolutely complete and plain');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Awesome Student and Teacher Apps');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Dropbox: One of my most beloved apps is dropbox. Dropbox allows all my computers and my phone to interact together. So the photo I take on my cell phone can be put in my Dropbox app and now it is available on all my devices, love it!');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Photoshop: Next, in line is going app is photoshop. Photoshop allows you to improve photos and interact lots of items together. Its now available on phones based on Windows OS');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Delivering Materials via Phone using developed cross usage platforms');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'As more curriculum materials are delivered digitally creative teachers are delivering materials directly to students on their personal cell phones. One such platform is School Town.This learning platform makes it possible for teachers and students to collaborate in discussion areas and chat with each other making blended learning a real possibility.');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Usage of phones through adults nowadays');
INSERT INTO search VALUES ('', 'Phones - Education - Woden Sims', 'http://woden-sims.hol.es/education/phones/', 'Today, over 85% of people use mobile phones to stay connected (to get homework tasks, getting data, compare answers etc.) organized (clocks, calculator) and entertained. And, now that mobile phones are capable of doing much more than simply calling and texting, they have started to replace other devices like cameras and desktop computers.');

INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Полезные клетки в области образования для повышения качества полученных знаний');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Каждый телефон упакован и дизайн для удобства использования с программным обеспечением, встроенными приложениями, что делает вас более продуктивным. И в эту эпоху технологического развития, повышение соединение между ноутбуками и телевизорами. С легкой до-в день задач, это делает вашу жизнь абсолютно полной и равнины');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Разнообразные студенсткие и преподавательские программы и приложения');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Dropbox: Один из моих самых любимых приложений является Dropbox. Dropbox позволяет все мои компьютеры и мой телефон, чтобы взаимодействовать друг с другом. Таким образом, фото, которое я взять на мой мобильный телефон можно положить в моей Dropbox приложение и теперь она доступна на всех моих устройствах, люблю его!');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Photoshop: Далее, в соответствии собирается приложение фотошоп. Photoshop позволяет повысить качество фотографий и взаимодействовать много вещей вместе. Его теперь доступны на телефонах на основе ОС Windows');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Поставляющих материалы через телефон с помощью перекрестных разработаны платформы использования');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Поскольку все больше учебных материалов поставляются в цифровом виде творческих учителей доставки материалов прямо на студентов на их личных мобильных телефонов. Одним из таких платформа School Town.Эта платформа обучения позволяет преподавателям и студентам сотрудничать в области обсуждения и общение друг с другом решений смешанного обучения реальную возможность.');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Использование телефонов через взрослых в настоящее время');
INSERT INTO search VALUES ('', 'Телефоны - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/phones/', 'Сегодня, более 85% людей используют мобильные телефоны, чтобы оставаться на связи (для получения домашних заданий, получение данных, сравнить ответы и т.д.) организовал (часы, калькулятор) и развлекали. И теперь, что мобильные телефоны способны делать гораздо больше, чем просто звонить и текстовые сообщения, они начали заменять другие устройства, такие как камеры и настольных компьютеров.');

INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Un cages profitables dans une r?gion un enseignement pour une augmentation une qualit? un savoirs empoch?s');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Un t?l?phone chaque emball? et un design pour une commodit? un recours avec un logiciel, un annexes encastr?es, que fait vous productif. Et cette ?poque un d?veloppement technologique, une augmentation un accouplement entre notebooks et un postes. Avec ais? un jour un probl?mes, ce fait votre vie absolument complet et un plaines');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Un universitaires et enseignent programmes et un annexes'' assortis');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Dropbox: Seul de mes annexes le plus favorites compara?t Dropbox. Dropbox permet mes ordinateurs et mon t?l?phone entiers, pour interagir un ami avec un ami. De la sorte, une photo, dont je prendre mon t?l?phone mobile on peut reposer dans mon Dropbox une annexe et maintenant elle abordable sur mes agencements entiers, aime le!');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Photoshop: Ci-apr?s, dans une ad?quation assemble se une annexe photoshop. Photoshop permet ?lever une qualit? un photographies et interagir un affaires ensemble. Il maintenant abordable sur un t?l?phones sur une armature Windows');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Fournissent un mat?riaux ? travers un t?l?phone avec une aide traverser exploit? un plates-formes un recours');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Comme un tout davantage mat?riaux scolaires se fournissent dans un aspect un un cr?atrices instituteurs une livraison un mat?riaux digital carr?ment un ?tudiants sur leurs mobiles t?l?phones personnels. Seul de pareil une plate-forme School Town.Cette plate-forme un apprentissage permet un enseignants et un ?tudiants collaborer un r?gions un d?bat et une communication un ami avec un ami un d?cisions un apprentissage hybride une possibilit? effective.');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Recours un t?l?phones ? travers un grandes un personnes actuellement');
INSERT INTO search VALUES ('', 'T?l?phones - sont un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/phones/', 'Aujourd''hui, 85 personnes utilisent un t?l?phones mobiles, pour demeurer sur une connexion (pour une r?ception un devoirs, une r?ception un donn?es, comparer un r?ponses etc.) anima (un montres, un calculateur) et amus?rent. Et maintenant, que un t?l?phones mobiles apte faire beaucoup davantage, que simplement appeler et un un textes communications, eux commenc?rent remplacer autres agencements, pareil comme une cam?ra et un bureau ordinateurs.');

INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Behilfliche K?fige in Gebiet der Ausbildung f?r Aufsteigen der Qualit?t des ?bernommenen Wissens');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Jeder Fernsprecher ist verschachtelt und Design zu der Bequemlichkeit der Ausnutzung mit Programmsversorgung, eingebaute Anbiegungen, da? macht euch mehr produktiver. Und in diese ?ra der technologischen Aufw?rtsentwicklung, Aufsteigen F?gung zwischen Notizbuch und Fernsehapparate. Mit leichter Tag der Aufgaben, dieser macht euer Leben absolut beleibter und Ebenen');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Mancherleier Sch?ler und unterrichten Programme und Anbiegungen');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Dropbox: Eins aus meinen am meisten lieben Anbiegungen spukt Dropbox. Dropbox erlaubt all meine Computer und mein Fernsprecher, auf da? zu zusammenwirken aneinander. Also, photo, das ich zu nehmen auf meinen mobilen Fernsprecher es darf hineinlegen in mein Dropbox Anbiegung und gegenw?rtig sie ist zug?nglich an all meinen Einrichtungen, liebt ihn!');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Photoshop: Weiter, in Entsprechung anschickt sich Anbiegung Photoshop. Photoshop erlaubt, Qualit?t der Lichtbilder und zu zusammenwirken viel Dinger zusammen zu erh?hen. Er gegenw?rtig zug?nglicher an Fernsprechern an Anfangsgr?nde Windows');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Bek?stigender Materialien durch Fernsprecher anhand gekreuzter ist ausgearbeitet Bahnsteige der Ausnutzung');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Insofern immer mehr Unterrichtsstoffe bek?stigen in Ziffer?u?ere der bildenden Lehrer der Zustellung der Materialien aufrecht auf Fernstudenten an ihre pers?nliche mobile Fernsprecher. Eins aus derart Bahnsteig School Town.Dieser Bahnsteig des Unterrichts erlaubt unterrichten und Fernstudenten zu kooperieren in Gebiete der Besprechung und verkehrt aneinander Aufl?sungen des gattiert Unterrichts wesenhafte M?glichkeit.');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Ausnutzung der Fernsprecher durch Erwachsene gegenw?rtig');
INSERT INTO search VALUES ('', 'Fernsprecher - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/phones/', 'Heute, mehr 85 Menschen ausnutzen mobile Fernsprecher, auf da? zu bleiben an Band (f?r Empfang der Hausaufgaben, Empfang der Angaben, Vergleich bedient sich Antworten usw.) organisierte (Uhren, Kalkulator) und am?soren. Und gegenw?rtig, da? mobile Fernsprecher ist t?chtig, bedeutend gr??er zu machen, was es einfach zu klingeln und Texteansagen, sie anfingen, andere Einrichtungen zu substituieren, derart als Kamer und Tischecomputer.');

INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Expand your skills of usage Laptops to improve your knowledge in area of education');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Laptop computers are becoming increasingly prevalent in education. Great part of skills required to maintain the device became readily to know all the special. While laptops may present opportunities for distraction, utilizing portable computers in classrooms can yield several significant benefits.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'A lot of fun for Students & Teachers');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Laptops can provide a high level of interactivity between students, teachers and subject matter. For instance, a teacher could challenge students to find the answer to a question about history or some other subject using their laptops online. This would force students to conduct quick research and use creativity to find the answer than paging through a dense textbook.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Another potential benefit of using laptops in classrooms is that using computers is more fun for students than simply sitting at a desk and listening to a lecture with a pad of paper and a pen. Students that have fun in the classroom are more likely to come to school.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Stay organized and remember all work');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'When you have six or more classes, it is easy to misplace a worksheet or forget about an assignment. If teachers distribute assignments digitally, students can easily review their work all in one place. Digital copies of work also help students by making it easy to edit or change work.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'All data in one place');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Control your schedule via Macbook''s Apps like Clocks or Calendar. Its really easy to make important marks and control your time. Windows provide either those Apps whats make your life absolutely complete');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Collect / Compare all projects');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'It''s really easy to compare your projects with your mates or send your task to your teacher for review. Every project can be saved in one place for an reason to collect all data and rewrite them into another one.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Edit / Change everywhere');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'If someone wants to make any significant improvements into your work you can make it just in your own laptop without correcting the whole assignment paper.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Useful device for teachers as well');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Usability with collection and sorting');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Having students turn work in via email or another digital system is easier than collecting and sorting through stacks of physical paper.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Work remotely, increasing productivity');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Whats more, digital assignments allow students that have to miss school to turn in work remotely, reducing the inequity of allowing students extensions on assignments for missing class.');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'The best result for the same time');
INSERT INTO search VALUES ('', 'Laptops - Education - Woden Sims', 'http://woden-sims.hol.es/education/laptops/', 'Additionally, typewritten assignments are much easier to read than those written by hand. Thats why, this will decrease spending time of students and teachers either');

INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Расширьте свои навыки использования ноутбуков, чтобы улучшить свои знания в области образования');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Портативные компьютеры становятся все более распространенными в образовании. Большая часть навыков, необходимых для поддержания устройства стал легко знать все особенное. В то время как ноутбуки могут представить возможности для отвлечения внимания, используя портативные компьютеры в классах может дать значительные преимущества.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Много веселья для студентов & преподавателей');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Ноутбуки могут обеспечить высокий уровень интерактивности между студентами, преподавателями и предмета. Например, учитель может оспорить студентов, чтобы найти ответ на вопрос о истории или какой-либо другой объект, используя свои ноутбуки в Интернете. Это вынудит студентов провести быстрый исследований и использовать творческий, чтобы найти ответ, чем листать плотной учебника.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Еще одна потенциальная выгода от использования ноутбуков в классах, что использование компьютеров веселее, чем для студентов просто сидя за столом и слушать лекцию с блокнотом и ручкой. Студенты, которые имеют удовольствие в классе, скорее всего, приходят в школу.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Планируйте и помните всю работу');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Если у вас есть шесть или более классов, легко теряются листа или забыть о назначении. Если учителя распределяла в цифровом виде, студенты могут легко просматривать свою работу все в одном месте. Цифровые копии работы также помочь студентам, сделав его легко редактировать или изменить работу.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Все данные в одном месте');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Контролируйте свой график через Macbook приложений, как часы или календарь. Его очень легко сделать важные знаки и контролировать свое время. Окна либо обеспечить эти приложения Что сделать вашу жизнь абсолютно полной');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Собирайте / Сравнивайте все проекты');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Это действительно легко сравнить свои проекты с товарищами или отправить вашу задачу к своему учителю на проверку. Каждый проект может быть сохранен в одном месте в течение причине, чтобы собрать все данные и переписать их в другой.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Корректируйте / Меняйте где-либо');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Если кто-то хочет, чтобы делать какие-либо значительные улучшения в вашей работе вы можете сделать это только в вашем собственном ноутбуке без коррекции всю бумагу присваивания.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Используймый предмет для учителей так же');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Легкость со сбором и сортировкой');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Наличие студентам обратиться работать в электронной почте или другим цифровая система проще, чем сбор и сортировку стеков физической работе.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Что больше, цифровые задания позволяют студентам, которые должны пропустить школу, чтобы превратить в работе удаленно, уменьшая несправедливость позволяет студентам расширения на уступки для пропавшего класса.');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Работайте удаленно, повышение производительности труда');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Лучший результат за одно и тоже время');
INSERT INTO search VALUES ('', 'Ноутбуки - Образование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/education/laptops/', 'Кроме того, машинописные задания намного легче читать, чем те, которые написаны от руки. Вот почему, это уменьшит проводить время студентов и преподавателей либо');

INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Agrandissent leurs habitudes un recours notebooks, pour am?liorer leurs savoirs dans une r?gion un enseignement');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Ordinateurs portables deviennent tout plus r?pandu dans un enseignement. Une plupart un habitudes, indispensable pour un maintien un agencement devint facilement conna?tre entier particulier. Alors comme notebooks peuvent d?poser un d?bouch?s pour une r?vulsion une attention, utilise un ordinateurs portables dans un classes peut administrer un avantages consid?rables.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Beaucoup all?gresse pour un ?tudiants & un enseignants');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Notebooks peuvent assurer un degr? interactif entre un ?tudiants, un enseignants et un objet aigu. Par exemple, un instituteur peut contester un ?tudiants, pour retrouver une r?ponse une question de un histoires ou tout autre objet, utilise leur notebooks dans un internet. Ces contraignent un ?tudiants installer prompt un explorations et utiliser une cr?atrice, pour retrouver une r?ponse, que feuilleter compact manuel.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Un potentiel avantage encore seul de un recours notebooks dans un classes, que un recours un ordinateurs enjou?, que pour un ?tudiants simplement est assis au-del? de une table et ?couter une conf?rence avec un bloc-notes et une anse. Un ?tudiants, dont ont un bien-?tre dans une classe, plut?t entier, arrivent une ?cole.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Planent et rappellent se un travail entier');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Si contre vous suis six ou plus un classes, facilement perdent se une feuille ou oublier de une nomination. Si un instituteur d?partit dans un aspect digital, un ?tudiants peuvent facilement feuilleter leur travail entier dans un lieu seul. Un copies un travail digitales aussi aider un ?tudiants, fait le facilement ?diter ou contrefaire un travail.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Un donn?es enti?res dans un lieu seul');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Contr?lent leur diagramme ? travers Macbook un annexes, comme un montres ou un calendrier. Le beaucoup facilement faire un indices essentiels et contr?ler leur temps. Un vitrages ou assurer ces annexes que faire votre vie absolument complet');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Amassent / comparent un projets entiers');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Ce r?ellement facilement comparer leurs projets avec un compagnons ou d?puter votre probl?me contre leur instituteur un contr?le. Un projet chaque peut-?tre conserv? dans un lieu seul ? le un cours de une cause, pour amasser un donn?es enti?res et copier eux dans autre.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Ajuster / changent n''importe o?');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Si quelqu''un veut, pour faire un tout am?liorations consid?rables dans votre travail vous peuvent faire ce seul dans votre propre notebooks sans une correction un papier approprie se entier.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Utilis? un objet pour un instituteurs de la sorte');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Une facilit? avec une collecte et un tri');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Une pr?sence un ?tudiants adresser se exercer dans un courriel ou autre un syst?me digital frugal, que une collecte et un tri un sticks un travail physique.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Exercent ?loign?, une augmentation une efficacit? une besogne');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Que davantage, un t?ches digitales permettent un ?tudiants, dont doivent manquer une ?cole, pour convertir dans un travail ?loign?, abaisse une injustice permet un ?tudiants un agrandissement un concessions pour une classe disparue.');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Un r?sultat meilleur seul et aussi un temps');
INSERT INTO search VALUES ('', 'Notebooks - est un Enseignement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/education/laptops/', 'Sauf celui, un t?ches dactylographiques beaucoup ais? lire, que celui, dont ?crit de un bras. Voici pourquoi, ce abaisse conduite un temps un ?tudiants et un enseignants ou');

INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Ausbreite ihrige Fertigkeiten der Ausnutzung Notizbuch, auf da? zu bessern ihriges Wissen in Gebiet der Ausbildung');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Portabel Computer hinstellen immer mehr ausgebreitete in Ausbildung. Gro?er Anteil der Fertigkeiten, die f?r Unterhaltung der Einrichtung wurde, all besonderer erforderlich leicht zu kennen ist. W?hrend Notizbuch k?nnen vorstellen sich M?glichkeiten f?r Ablenkung der Aufmerksamkeit, ausnutzt portabel Computer in Klassen kann geben respektierliche Bevorzugungen.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Reich fun f?r Fernstudenten & unterrichten');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Notizbuch k?nnen versorgen hoches Niveau Online zwischen Fernstudenten, unterrichten und Gegenstand. Z.B., Lehrer kann absprechen Fernstudenten, auf da? zu finden Antwort auf Frage Geschichten oder irgendeines anderes Objekt, ausnutzt ihriger Notizbuch in Internet. Dieser bem??igt Fernstudenten zu durchf?hren schneller Durchforschungen und zu ausnutzen bildender, auf da? zu finden Antwort, was zu bl?ttern in dichter Lehrbuch.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Noch eins potentialer Vorteil ab Ausnutzung Notizbuch in Klassen, da? Ausnutzung der Computer sein aufgemundert, als f?r Fernstudenten einfach herumsitzt hinter Tisch und zu zuh?ren Vorlesung mit Block und B?gel. Fernstudenten, die Vergn?gen in Klasse haben, ziemlich all, herkommen in Schule.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Plane und behalt all Arbeiten');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Falls bei euch ist sechs oder mehr der Klassen, leicht verlieren Blatt oder zu vergessen ?ber Aussetzung. Falls Lehrer aufschl?sselte in Ziffer?u?ere, Fernstudenten k?nnen leicht bl?ttern ihriges Arbeiten all in eins Ort. Ziffernkopien des Arbeitens gleichfalls zu aufhelfen Fernstudenten, erledigt ihn es leicht zu cutten oder zu verraten Arbeiten.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'All Angaben in eins Ort');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Kontrolliere ihrigen graphischen Plan durch Macbook der Anbiegungen, als Uhren oder Kalender. Ihn es ist blitzeinfach, beachtenswerte Zeichen und zu kontrollieren ihrige Zeit zu erledigen. Fenster oder zu versorgen diese Anbiegungen Da? zu erledigen euer Leben absolut beleibtes');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Ablies / Vergleich all Projekte');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Dieser es g?ltig leicht Vergleich bedient sich ihrige Projekte mit Genossen oder zu abfertigen euere Aufgabe zu ihrigem Lehrer auf Versuch. Jedes Projekt kann sein behalten in eins Ort in Str?mung Anla?, auf da? zu ablesen all Angaben und Rewrite sie in anderer.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Korrigiere / Tausche irgendwo');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Falls jemand beliebt, auf da? zu machen irgendeine respektierliche Aufbesserungen in euerem Arbeiten ihr k?nnen erledigen dieser allein in euer eigener Notizbuch ohne korrigiert all Papier Zuordnung.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Gebraucht Gegenstand f?r Lehrer desgleichen');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Leichtheit mit Sammeln und Sonderung');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Vorhandensein Fernstudenten zu wenden sich zu arbeiten in elektronischer Post oder anderer Ziffergeb?ude sein einfach, als Sammeln und Sonderung Stacks k?rperliches Arbeiten.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Arbeite entfernt, Aufsteigen der Arbeitsleistung');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Da? gr??er, Ziffernaufgaben erlauben Fernstudenten, die vers?umen Schule m?ssen, auf da? zu transformieren in Arbeiten entfernt, abmindert Erbitterung erlaubt Fernstudenten der Ausbreitung auf Abschl?ge f?r ist abg?ngiger Klasse.');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Besseres Ergebnis vor eins und gleichfalls Zeit');
INSERT INTO search VALUES ('', 'Notizbuch - Ausbildung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/education/laptops/', 'Au?erdem, maschinegeschriebene Aufgaben es ist viel leicht, zu hinweglesen, als das, das ab Arm aufgeschrieben ist. Da warum, dieser abmindert zu durchf?hren Zeit der Fernstudenten und unterrichten oder');

INSERT INTO search VALUES ('', 'H?ufig gestellte Fragen - Woden Sims (DE)', 'http://woden-sims.hol.es/de/FAQ/', 'Sind Fragen? Find Antworten');
INSERT INTO search VALUES ('', 'H?ufig gestellte Fragen - Woden Sims (DE)', 'http://woden-sims.hol.es/de/FAQ/', 'Am meisten allbeliebte Bed?rfnisse');

INSERT INTO search VALUES ('', 'Questions fr?quemment pos?es - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/FAQ/', 'Sont un questions? Retrouvent un r?ponses');
INSERT INTO search VALUES ('', 'Questions fr?quemment pos?es - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/FAQ/', 'Un demandes'' ''le plus populaires');

INSERT INTO search VALUES ('', 'Часто задаваемые запросы - Woden Sims (RU)', 'http://woden-sims.hol.es/fr/FAQ/', 'Есть вопросы? Найдите ответы');
INSERT INTO search VALUES ('', 'Часто задаваемые запросы - Woden Sims (RU)', 'http://woden-sims.hol.es/fr/FAQ/', 'Самые популярные запросы');

INSERT INTO search VALUES ('', 'Frequently Asked Questions - Woden Sims', 'http://woden-sims.hol.es/FAQ/', 'Have a question? Search for answers');
INSERT INTO search VALUES ('', 'Frequently Asked Questions - Woden Sims', 'http://woden-sims.hol.es/FAQ/', 'Most popular requests');

INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Get additional prices and financing getting items with Woden Sims');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'If you use VISA or MASTERCARD payment methods to pay online you are going to earn points each time. For every 250$ you will earn 10% sale for next item');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Apply for financing with Card usage by getting an Woden Sims shopping card');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Earn reward for every dollar spent');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'For every purchase that is greater than 250$ you will earn 10% sale for next item. Earn 5% discount by getting old-phones.');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Accumulate each dollar into your cart');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Every 1$ of check you are going to accumulate dollars in your Woden Sims card. While this sum is greater than 5, 000$ you are going to get discount amount of 7%.');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Make order online, get discount for each product');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Getting payed online, you are going to save your time, getting 3% discount for the sum order');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Taxes in Poland are levied by both the federal and regional governments. Tax revenue in Poland is 31.7% of the country''s GDP in 2009. The most important revenue sources include the income tax, Social Security, corporate tax and the value added tax, which are all applied on the national level. Income earned is generally subject to a progressive income tax, which apply to all who are in the workforce. For the year 2014, two different tax rates on income apply.');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'The Code is designed as a complete national system for federal, regional and local taxes but excludes customs tariffs. Rules and rates of regional and local taxation must conform to the framework established by the Code. Taxes or levies not listed explicitly by the Code or enacted in violation of its specific provisions are deemed illegal and void.');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'Many direct and indirect taxes exist in Germany; income tax and VAT are the most significant. The German word for tax is die Steuer which originates from the Old High German word stiura meaning help. The Financial Secrecy Index ranks Germany as the 8th safest tax haven in the world, ahead of Jersey but behind Lebanon.');
INSERT INTO search VALUES ('', 'Financing - Woden Sims', 'http://woden-sims.hol.es/financing/', 'According to the NKY 167.5.1 NDS was delivered as 20%. Plus, according to the military tax 1.5% of each sale is going as objective tax. Thus, 21.5% is the main tax The amount of tax calculated from the amount of interest accrued on the account and debited on a monthly basis.');

INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Получить дополнительные цены и финансирования покупок вещи с Woden Sims');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Если вы используете VISA или MASTERCARD или способы оплаты, чтобы оплатить онлайн вы собираетесь зарабатывать очки каждый раз. За каждые 250 $ вы будете зарабатывать 10% продаж на следующий пункт');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Применить для финансирования с использованием карты на получение торговые карты Woden Sims');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Заработайте награды за каждый доллар потраченный');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Для каждой покупки, которая превышает 250 $ вы будете зарабатывать 10% продаж на следующий пункт. Заработайте 5% скидку, получая старые-телефоны.');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Накопляйте каждый доллар в корзину');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Каждые 1 $ проверки вы собираетесь накопить долларов в Woden Sims карты. В то время как эта сумма больше, чем 5, 000 $ вы собираетесь получить скидку количество 7%.');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Сделайте заказ онлайн, получите скидку за каждого продукта.');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Получение оплаты в Интернете, вы собираетесь сэкономить ваше время, получая скидку 3% для суммы заказа');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Налоги в Польше взимаются на федеральном и региональных органов власти. Налоговые поступления в Польше составляет 31,7% территории страны ВВП в 2009 году наиболее важные источники доходов включают подоходный налог, социальное обеспечение, корпоративный налог и налог на добавленную стоимость, которые все применяются на национальном уровне. Доход, как правило, подлежат прогрессивного подоходного налога, которые применяются ко всем, кто находится в рабочей силе. Для 2014 года, два различные налоговые ставки на доходы применяется.');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Кодекс разработан в качестве полной национальной системы федеральных, региональных и местных налогов, но исключает таможенных тарифов. Правила и нормы регионального и местного налогообложения должны соответствовать рамках, установленных настоящим Кодексом. Налогов или сборов, не перечисленные в явном виде кодекса или принятые в нарушение своих конкретных положений считаются незаконными и недействительными.');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Существует множество прямых и косвенных налогов в Германии; налог на прибыль и НДС являются наиболее значимыми. Немецкое слово для налога умереть Стюер который происходит из Старого Высокого немецкого слова stiura смысл помощи. Индекс финансовой секретности занимает Германию 8 безопасным убежищем в налогового мире, опередив-Джерси, но за Ливане.');
INSERT INTO search VALUES ('', 'Финансирование - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/financing/', 'Согласно НБУ 167.5.1 НДС был определен налог в 20%. Кроме того, в соответствии с военной налога 1,5% от каждой продажи идет как объективную налог. Таким образом, 21,5% является основным налог Сумма налога рассчитывается от суммы процентов, начисленных на счет и списания на ежемесячной основе.');

INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Empocher un prix et un financements un courses une chose compl?mentaires avec Woden Sims');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Si vous utilisent VISA ou MASTERCARD ou un fa?ons un acquittement, pour acquitter en ligne vous assemblent se gagner un lunettes un coup chaque. Fur chaque 250 $ vous sont gagner 10% un conforme point');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Appliquer pour un financement avec un recours une carte une r?ception un cartes Woden Sims');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Gagnent un distinctions un dollar d?pens? chaque');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Pour un achat, dont d?passe 250 $ vous sont gagner 10% un conforme point chaque. Gagnent 5%, encaisse t?l?phones.');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Accumuler un dollar chaque un cabas');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Chaque un 1 $ contr?le vous assemblent se accumuler un dollars dans Woden Sims un cartes. Alors comme ce chiffre davantage, que 5, 000 $ vous assemblent se empocher une remise une quantit?');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Font une commande online, empochent une remise au-del? de un produit chaque.');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'R?ception un acquittement dans un internet, vous assemblent se sauver votre temps, encaisse une remise un chiffre une commande');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Contributions dans une Pologne se per?oivent sur f?d?ral et un organes une autorit? r?gionaux. Fiscaux entrent dans une Pologne agence un 31.7% pays VVP dans un 2009 an un fontaines un profits essentielles branchent un revenu imp?t, social assure, un imp?t et un imp?t corporatif un co?t ajout?, dont entier appliquent se sur un degr? national. Un profit, en une r?gle une g?n?rale, revenu soumis ? l''ONU imp?t progressif, dont appliquent se contre entier, qui trouve se dans une main-d''?uvre. Pour un 2014 an, un assorti fiscal enjeu deux un profits applique se.');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Code exploit? ? titre de un national syst?me un, r?gional et de ici contributions f?d?rales complet, mais excepte un un douanes tarifs. Gouverna et un normes une fiscalit? r?gionale et de ici doivent match un cadres, canonique un code actuel. Un contributions ou un collectes, non d?nombr? dans un aspect un code apparent ou consacr? une contravention leurs positions concr?tes croient se ill?gal et nul.');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Existe un nombre un contributions directes et indirect dans une Allemagne; un imp?t un b?n?fice et NDS comparaissent le plus important. Un mot allemand pour un imp?t d?c?der Stier dont accomplit se de un aigu allemand mot vieux un stiura sens une aide. Un indice financier secret emploie une Allemagne 8 un asile s?curitaire fiscal un monde, coups Jersey, mais au-del? de Livan.');
INSERT INTO search VALUES ('', 'Financement - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/financing/', 'Selon NKY 167.5.1 NDS fut d?termin? un imp?t dans 20. En outre celui, dans une ad?quation avec militaire un imp?t 1.5% une vente chaque pr?c?de comme d?sint?ress? un imp?t. De la sorte, 21.5% essentiel un imp?t un chiffre un imp?t se calcule de un chiffre un int?r?ts, ?valu? une addition et un copiages sur une armature mensuelle.');

INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Erg?nzungs Preise und Finanzierungen der Abnahmen des Dinges mit Woden Sims zu ?bernehmen');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Falls ihr ausnutzen VISA oder MASTERCARD oder Arten der Bezahlung, auf da? zu bezahlen online ihr anschicken sich, earn Augengl?ser allemal. Vor jeder 250 $ ihr sind earn 10$ auf folgenden Punkt');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'F?r Finanzierung mit Ausnutzung der Karte auf Empfang Handel Karten Woden Sims zu anwenden');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Verdiene Belohnungen vor jeden Dollar verbraucht');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'F?r jede Abnahme, die 250 $ ihr sind earn 10% auf folgenden Punkt ?berwiegt. Verdiene 5%, bekommt alte Handys.');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Aufh?ufe jeden Dollar in Korb');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Jeder 1 $ Versuch ihr anschicken sich, Dollars in Woden Sims Karten zu anh?ufen. W?hrend dieser Betrag sein gr??er, als 5, 000 $ ihr anschicken sich, Abzug Quantum 7 zu ?bernehmen');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Erledige Auftrag online, ?bernehmen Abzug hinter jedes Produkt.');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Empfang der Bezahlung in Internet, ihr anschicken sich, euere Zeit zu ersparen, bekommt Abzug des 3 Betrags des Auftrags');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Steuern in Polen erheben an Bund und regin?re Machtorgane. Steuereinnahmen in Polen abfasst 31,7 Gebiet L?nder VVP in dem 2009 Jahr h?chst beachtenswerte Quellen des Einkommens schalten Einkommen Steuer, Sozialf?rsorge, korporative Steuer und Steuer auf subsumierten Betrag, das all anpassen sich an nationalem Niveau. Einkommen, als Regel, unterliegen fortschrittliche Einkommen Steuer, das anpassen sich zu all, wer in Arbeitskraft ist. F?r das 2014 Jahr, zwei diverser Steuernsatz auf Einkommen anpa?t sich.');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Kodex ist ausgearbeitet als beleibtes nationales Geb?ude der, regin?rer und einheimischer B?ndesteuern, aber ausnimmt Z?lletarife. Regel und Normen das regin?re und einheimischer der Besteuerung m?ssen zutreffen Umrahmungen, die authentischer Kodex ansetzen. Steuern oder Versammlungen, nicht durchgez?hlter in ersichtlichem ?u?ere des Kodexs oder angenommener in Verletzung ihriger konkreter Lagen achten ungesetzlicher und ung?ltiger.');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Besteht gro?e Anzahl der aufrechten und indirekter Steuern in Deutschland; Lohnsteuer und NDS spuken h?chst signifikanter. Deutsches Wort f?r Steuer zu hin?bergehen Stieur das ist aus Altem Hochem deutschem Wort stiura Bedeutung der Aushilfe. Index der finanziellen Diskretion einnimmt Deutschland 8 ungef?hrlicher Schlupfwinkel in Steuer Friede, Ahead Jersey, aber hinter Libanon.');
INSERT INTO search VALUES ('', 'Finanzierung - Woden Sims (DE)', 'http://woden-sims.hol.es/de/financing/', 'Nach NKY 167.5.1 NDS war bestimmt Steuer in 20 auch das, entsprechend militarischer Steuer 1,5% jedes Verkaufs geht als objektiver Steuer. Also, 21.5 ist haupts?chlicher Steuer Betrag der Steuer abrechnet ab Betrag der Zinse, die auf Abz?hlung und Abhauungen an allmonatlichen Anfangsgr?nde angerechnet ist.');

INSERT INTO search VALUES ('', 'Recover your Woden Sims Account - Woden Sims', 'http://woden-sims.hol.es/forgot-password/', 'Any problems with Sign In?');
INSERT INTO search VALUES ('', 'Recover your Woden Sims Account - Woden Sims', 'http://woden-sims.hol.es/forgot-password/', 'Enter your Email to get started');
INSERT INTO search VALUES ('', 'Recover your Woden Sims Account - Woden Sims', 'http://woden-sims.hol.es/forgot-password/', 'We can help you reset your password and security info. Follow the instructions below.');

INSERT INTO search VALUES ('', 'Востановление Аккаунта Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/forgot-password/', 'Какие-то проблемы с входом?');
INSERT INTO search VALUES ('', 'Востановление Аккаунта Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/forgot-password/', 'Введите e-mail, чтобы начать');
INSERT INTO search VALUES ('', 'Востановление Аккаунта Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/forgot-password/', 'Мы можем помочь вам сбросить пароль и данные безопасности. Следуйте инстурциям ниже.');

INSERT INTO search VALUES ('', 'Reconstitution Account Woden Sims - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/forgot-password/', 'Uns une esp?ce de probl?mes avec une bouche?');
INSERT INTO search VALUES ('', 'Reconstitution Account Woden Sims - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/forgot-password/', '?tablissent e-mail, pour commencer');
INSERT INTO search VALUES ('', 'Reconstitution Account Woden Sims - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/forgot-password/', 'Nous pouvons aider vous d?verser mot de passe et un donn?es une s?curit?. Conforment un consignes au-dessous.');

INSERT INTO search VALUES ('', 'Sich erholen Account Woden Sims - Woden Sims (DE)', 'http://woden-sims.hol.es/de/forgot-password/', 'Irgendeine Probleme mit Betreten?');
INSERT INTO search VALUES ('', 'Sich erholen Account Woden Sims - Woden Sims (DE)', 'http://woden-sims.hol.es/de/forgot-password/', 'Einf?hre e-mail, auf da? zu anfangen');
INSERT INTO search VALUES ('', 'Sich erholen Account Woden Sims - Woden Sims (DE)', 'http://woden-sims.hol.es/de/forgot-password/', 'Wir k?nnen aufhelfen euch zu absch?tteln Kennwort und Angaben der Sicherheit. Komm Instruktionen niedriger.');

INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Love your job working here. Hardworking, pleasant atmosphere');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Sales Assistant');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Make your routine day as diverse as it could be.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be part of our team');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Your responsibilities');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be involved in stock control and management.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Assisting shoppers to find the goods and products they are looking for.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Being responsible for processing cash and card payments.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Stocking shelves with merchandise.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Answering queries from customers.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Reporting discrepancies and problems to the supervisor.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Giving advice and guidance on product selection to customers.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Optional Personal skills');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Having a friendly and engaging personality.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Comfortable working with members of the public.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Should have a confident manner.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Must be helpful and polite.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Assistants should be physically fit as they will be on their feet for most of the day and may be required to lift large amounts of stock.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'The job requires a high level of customer interaction, meaning sales assistants should have good customer facing and communication skills.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'If you are considering a career in this field then bear in mind that some retail outlets require staff to meet sales targets. If these targets are not met then their job may be on the line.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Consultant');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Take responsibility. Show professionalism.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Every step you take, going for your future.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Attend sales meetings, conferences and events');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Handle clients in a professional manner');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Deal with customer issues');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Process customer orders');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Keep up to date with product developments');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Call clientele');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Devise new sales or marketing strategies');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Work with other departments');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Schedule appointments, calls, and meetings');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be self motivated');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be professional');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be passionate about the sales industry');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Have superior expertise in sales');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Have quality customer service expertise');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Possess creative and innovative sales ideas');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Possess first-class time and project management capabilities');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be able to do extremely well at internet and web marketing');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Have a driving record of accomplishments');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be able to absorb information in a timely manner');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Have first-rate interpersonal skills');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Be able to network and negotiate');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Sales consultants have at least a bachelors degree.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'This degree is typically in a business related field such as marketing, finance or communications.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Having a higher-level degree is valuable for professionals hoping to acquire higher managerial positions.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Sales consultants are the middlemen between companies and clients, promoting products and services and building long-term commercial relationships.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'They may work on either an employed or self-employed basis.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Those working for employers often receive benefits and bonuses on top of a set salary, while self-employed consultants work independently, setting their own hours and level of income');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Key responsibilities include identifying and meeting customer needs within their allotted sales territory, maintaining good after-sales relationships, keeping records of customer appointments and completed sales, and providing detailed information on the products they are selling.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Store Director');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Take control in your hands.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Show your leave-taking business. Be persistent.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Qualification');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Must be at least 21 years of age.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'High school education with some college background preferred or equivalent combination of education and experience.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Must successfully pass cashier training after hire.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Because of the increasing amounts of responsibility placed on store managers, many employers prefer to hire employees with a bachelor''s degree or other formal education in a business-related field.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'A bachelor''s in business administration degree program provides students with the skills necessary to become effective store managers through coursework in such subjects as marketing, accounting, business ethics and management strategy.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Employees with a degree are most likely to be promoted to a higher level of management and administration in larger retail companies.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Responsible for all aspects of the store''s operation including its financial results.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Director must plan, organize, direct, and control all store activities and operations plus make effective and objective decisions regarding operational choices in work procedures, inventory allocations, ordering, scheduling and other situations where multiple factors must be considered and weighed to maximize operating results.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'The Store Director must observe and enforce all store rules and company policies and ensure all employees adhere to company procedures.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'They emphasize and role model company customer service standards and maintain a neat, well-groomed personal appearance, observing company dress code.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'This position must prepare store projections and store operating budgets and is responsible for employee schedules and controlling labor and other overhead costs.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Possess creative and innovative sales ideas');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Stock up strong leadership, interpersonal and multitasking skills.');
INSERT INTO search VALUES ('', 'Jobs - Woden Sims', 'http://woden-sims.hol.es/jobs/', 'Work in office environments while performing administrative duties and on the sales floor while addressing staffing, customer, and merchandising needs.');


INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Полюбите вашу работу, работая здесь. Рабочая, приятная атмосфера');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Помощник по продажам');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Сделайте ваш режим дня, на столько разнообразным, как это может быть.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Будьте частю нашей команды.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Принимать участие в управлении запасами и управления.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Помощь покупателям найти товары и продукты, которые они ищут.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Быть ответственным за обработку наличных и карточных платежей.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Учет полки с товарами');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Отвечая запросы от клиентов.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Отчетность расхождений и проблем с наблюдателем.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Давать советы и рекомендации по выбору продукта для клиентов.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Оптимальные Личные навыки');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Имея дружественный и привлекательный личность.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Удобная работа с представителями общественности.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Иметь уверенную манеру.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Должен быть доброжелательным и вежливым.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Помощники должны быть физически, как они будут на своих ногах в течение большей части дня, и может потребоваться, чтобы поднять большое количество акций.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Эта работа требует высокого уровня взаимодействия с клиентами, то есть продавцы должны иметь хорошие облицовочные клиентов и навыки общения.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Если вы рассматриваете карьеру в этой области, то имейте в виду, что некоторые торговые точки требуют сотрудников для достижения целей продаж. Если эти цели не будут достигнуты, то их работа может быть на линии.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Консультант');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Берите ответственность. Покажите профессионализм.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Каждый ваш шаг, ведет к плюсам для вашего будущего.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Ваши обязаности');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Присутствовать на заседаниях продаж, конференций и других мероприятий');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Ручка клиентов в профессиональной манере');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Помощь с проблемами покупателей');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Оформать клиентские заказы');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Быть в курсе новых разработках');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Звонить клиентам');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Разработать новые продажи или маркетинговых стратегий');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Работа с другими ведомствами');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Расписание встреч, звонки и встречи');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Будьте самомотивированными');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Будьте професионалом');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Будьте увлечены промышленности продаж');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Есть превосходные знания в области продаж');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Есть экспертиза качества обслуживания клиентов');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Обладают идеи творческие и инновационные продаж');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Обладают время первого класса и возможности управления проектами');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Будьте в состоянии сделать очень хорошо в интернет-маркетинге и интернет-маркетинге');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Имею водительские запись достижений');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Будьте в состоянии поглотить информацию своевременно');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Есть первоклассные навыки межличностного общения');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Уметь общаться и вести переговоры');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Консультанты имеют по крайней мере степень бакалавра.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Образование');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Эта степень, как правило, в бизнес, связанный области, таких как маркетинг, финансы и связь.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Имея степень выше уровня ценно для профессионалов, надеющихся получить высшее управленческие позиции.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Продавцы-консультанты посредниками между компаниями и клиентами, продвижение продукции и услуг и построение долгосрочных коммерческих отношений.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Они могут работать либо на работу или самозанятого основе.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Те, кто работает для работодателей часто получают преимущества и бонусы на вершине множества зарплаты, в то время как самозанятые консультанты работают независимо друг от друга, устанавливая собственные часы и уровень дохода');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Основные обязанности включают в себя выявление и удовлетворение потребностей клиентов в выделенных им территории продаж, поддержание хороших послепродажное отношения, учет назначений клиентов и завершила сделки по продаже, а также предоставление подробной информации о продуктах, которые они продают.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Директор Магазина');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Возьмите контроль под свои руки.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Покажите свой отдания бизнеса. Будьте настойчивы.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Квалификация');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Должно быть не менее 21 лет.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Среднее образование с какой-то колледж фон предпочтительного или эквивалент комбинации образования и опыта.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Должны успешно пройти обучение кассира после проката.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Из-за возрастающих количествах ответственности, размещенных на менеджеров магазинов, многие работодатели предпочитают нанимать сотрудников со степенью бакалавра или другой формального образования в области бизнеса, связанных с.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Бакалавра в программе делового администрирования степени обеспечивает студентов с навыками, необходимыми, чтобы стать эффективных менеджеров магазина через курсовые по таким предметам, как маркетинг, бухгалтерский учет, бизнес-этики и стратегии управления.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Сотрудники со степенью, скорее всего, будет назначен на более высокий уровень управления и администрации в крупных розничных компаний.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Отвечает за все аспекты работы магазина, включая его финансовые результаты.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Директор должен планировать, организовывать, направлять и контролировать все магазин деятельности и операций плюс принимать эффективные и объективные решения, касающиеся оперативной выбор в процедурах работы, отчислений инвентаризации, заказ, планирования и других ситуациях, где несколько факторов должны быть рассмотрены и взвешенных максимально операционные результаты.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Директор магазина должен соблюдать и обеспечивать соблюдение всех правил магазинов и политику компании и убедиться, что все сотрудники придерживаются процедур компании.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Они подчеркивают и стандарты обслуживания для подражания компания клиентов и поддерживать аккуратный, ухоженный вид ничего, соблюдая дресс-код компании.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Эта позиция должна подготовить магазин прогнозы и хранить операционные бюджеты и несет ответственность за графиками сотрудников и управляющего труда и других накладных расходов.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Обладают идеи творческие и инновационные продаж');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Запаситесь сильное руководство, межличностные и многозадачность навыки.');
INSERT INTO search VALUES ('', 'Работа - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/jobs/', 'Работа в офисе, выполняя административные обязанности и на полу продаж, а удовлетворение потребностей штатное расписание, клиентов и мерчендайзинга.');

INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Liebgewinn euer Arbeiten, arbeitet da. Arbeitensatmosph?re');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Gehilfe Verk?ufe');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Erledige euer Regime des Tags, an mancherleier, als dieser kann sein.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sei Teil unseres Befehls.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Euer Aufgaben');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Amt Vorr?te und ?mter zu ''einlassen sich auf.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Aushilfe Abnehmern zu finden Artikel und Produkte, die sie suchen.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Verantwortlicher vor Verarbeitung der baren und Karten Auszahlungen zu ''sein.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Accounting Regale mit Artikeln.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Antwortet Bed?rfnisse ab Kunden.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Berichterstattung auseinandergehen und Probleme mit Beobachter.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Anraten und Anempfehlungen nach Wahl des Produkts f?r Kunden zu ''geben.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Optimale Pers?nliche Fertigkeiten');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Hat freundschaftlicher und anlockender Person.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Bequemes Arbeiten mit Repr?sentanten der ?ffentlichkeit.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Zuversichtliche Manier zu ''haben.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Mu? sein wohlwollender und h?flicher.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Gehilfen m?ssen sein k?rperlich, als sie sind an ihrigen Beinen binnen gr??eren Anteils des Tags, und kann abfordern, auf da? zu anheben Menge der Aktionen.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Dieses Arbeiten abfordert hoches Niveau der Interaktion mit Kunden, d.h. Verk?ufer m?ssen haben bek?mmliche Verkleidungen Kunden und Fertigkeiten des Verkehrs.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Falls ihr begutachten Karriere in diesem Gebiet, beabsichtige, da? einige Handel Gedankenpunkte abfordern Mitarbeiter f?r Erreichung der Ziele der Verk?ufe. Falls diese Ziele nicht sind erreicht, ihr Arbeiten kann sein an Linie.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Berater');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Entnimm Verantwortung. Aufweis Professionalit?t.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Jeder euer Schritt, f?hrt zu Plus f?r euere Zukunft.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'An Sitzungen der Verk?ufe, Konferenzen und andere Ma?nahmen zu dabeisitzen');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'B?gel der Kunden in fachlicher Manier');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Aushilfe mit Problemen der Abnehmer');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Oformat Kundenauftr?ge');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'In Kurs neue ''Ausarbeitungen zu sein');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Kunden zu klingeln');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Neue Verk?ufe oder Marketing ''Strategie zu ausarbeiten');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Arbeiten mit anderen Beh?rden');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Zeitplan der Begegnungen, Glocken und Begegnungen');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sei Eigenmotivation');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sei professionell');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sei begeistert gewerblicher der Verk?ufe');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sind exzellent Wissen in Gebiet der Verk?ufe');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Ist Begutachtung der Qualit?t der Bedienung der Kunden');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Besitzen Ideen bildender und Innovationen Verk?ufe');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Besitzen Zeit der ersten Klasse und M?glichkeit des Amtes Projekte');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sei in Befund zu erledigen sehr gut in internet-Marketing und internet-Marketing');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Hat Fahrer Aufschreiben der Erreichungen');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sei in Befund zu absorbieren Information rechtzeitig');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sind erstklassige Fertigkeiten des zwischenmenschliche Kommunikation');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Und zu verhandeln zu wissen zu verkehren');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Ausbildung');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Berater haben wenigstens Grad des Bakkalaureus.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Dieser Grad, als Regel, in Busine?, das Gebiet gebunden ist, derart als Marketing, Finanzen und Band.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Hat Grad h?her des Niveaus kostbar f?r Berufsspieler, die hoffend zu ?bernehmen h?herer F?hrungs Haltungen ist.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'In dem Gesamten');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Verk?ufer-berater Vermittler zwischen Geselschaften und Kunden, Weiterf?hrung Produkte und Gefallen und Aufstellung der langfristigen kaufm?nnischen Beziehungen.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sie k?nnen arbeiten oder auf Arbeiten oder selbstst?ndig Anfangsgr?nde.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Das, wer f?r Arbeitgeber h?ufig bekommen Bevorzugungen und Boni an Top der gro?en Anzahl Gehalt arbeitet, w?hrend selbstst?ndig Berater arbeiten unabh?ngig voneinander, ansetzt eigene Uhren und Niveau des Einkommens');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Haupts?chliche Pflichten einschlie?en in sich beweist und Bedarfsdeckung Kunden in abgeschiedener ihnen Territorien der Verk?ufe, Unterhaltung bek?mmlicher After Sales Beziehungen, Aufzeichnungen der Aussetzungen der Kunden und abschlo? Abmachungen Verkauf, sowie Eingabe der ausf?hrlichen Information ?ber Produkten, die sie verkaufen.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Direktor des Kaufladens');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Nimm Kontrolle unter ihrige Arme');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Aufweis ihriger Zur?ckgaben des Busine?. Sei andringlich.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Qualifikation');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Es mu? sein nicht weniger 21 Jahre.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Mittelschulbildung mit irgendeiner College Grund pr?ferentieller oder Gegenwert der Kombination der Ausbildung und Erfahrung.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'M?ssen erfolgreich durchmachen Unterricht des Kassiers nach selbstst?ndig.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Ausbildung');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Wegen anwachsende Quanten der Verantwortung, plazieren auf Manager Kaufl?den, viele Arbeitgeber bevorzugen zu abmieten Mitarbeiter mit Grad des Bakkalaureus oder anderer formale Ausbildung in Gebiet des Busine?, gebundener.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Bakkalaureus in Programm des sachlichen Administrierens des Grads versorgt Fernstudenten mit Fertigkeiten, die erforderlich ist, auf da? zu werden effektive Manager des Kaufladens durch Kurse derart Pr?fungsf?cher als selbstst?ndig, Buchhaltung Aufzeichnungen, Wirtschaftsethik und Strategie des Amtes.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Mitarbeiter mit Grad, ziemlich all, ist festgesetzt auf mehr hoches Niveau des Amtes und Administration in gro?e Einzel Geselschaften.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Beschreibung des Arbeitens');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Aufkommt f?r all Aspekte des Arbeitens des Kaufladens, mitsamt seinige finanzielle Ergebnisse.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Direktor mu? planen, zu organisieren, und zu kontrollieren all Kaufladen der T?tigkeit und Operationen Plus zu annehmen effektive und objektiver Aufl?sungen, die operativer Auslesen in selbstst?ndig des Arbeitens, Abf?hrungen der Inventarisation betreffend ist, Auftrag, Konzeptionierungen und andere Situationen zu dirigieren, wo etliche Faktoren m?ssen sein begutachtet und gewogener maximal Operations Ergebnisse.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Direktor des Kaufladens mu? beachten und zu versorgen Einhaltung der all Regeln der Kaufl?den und Politik der Geselschaft und zu ?berzeugen sich, da? all Mitarbeiter befolgen Verfahren der Geselschaft.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Sie anstreichen und Standards der Bedienung f?r Nachmachung Geselschaft der Kunden und zu aufrechterhalten ordentliches, gepflegt ?u?ere nichts, unter Beachtung Dresscode der Geselschaft.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Diese Haltung mu? anbahnen Kaufladen Prognosen und zu aufbewahren Operations Budgets und tr?gt Verantwortung f?r graphische Pl?ne der Mitarbeiter und lenkende Arbeit und andere Nebenkosten.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Besitzen Ideen bildender und Innovationen Verk?ufe');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Versieh sich gewaltige Anf?hrung, zwischenmenschliche und selbstst?ndig Fertigkeiten.');
INSERT INTO search VALUES ('', 'Arbeiten - Woden Sims (DE)', 'http://woden-sims.hol.es/de/jobs/', 'Arbeiten in B?ro, erf?llt administrative Pflichten und an Boden der Verk?ufe, und Bedarfsdeckung Staat selbstst?ndig, Kunden und merchendaizing.');

INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Affectionnent votre travail, exerce ici. Ambiance ouvrable'' agr?able');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Aide selon un ventes');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Font votre mode un jour, sur tant multiple, comme ce peut-?tre.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont une fraction notre commandement.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Vos devoirs');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Accepter une participation dans une administration un approvisionnements et un administrations.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Aide un client?les retrouver un ?talages et un produits, dont eux cherchent.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', '?tre charg? une culture un comptants disponibles et un cartes.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Comptabilit? un casier avec un ?talages.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'R?pond un demandes de un clients.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Compte-rendu un d?calages et un probl?mes avec un observateur.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Accorder un conseils et un recommandations selon un choix un produit pour un clients.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Un personnelles ''habitudes optimales');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'A ami et attrayant une figure.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Un travail ''confortable avec un d?l?gu?s un public.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Avoir une fa?on s?re.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Doit ?tre bienveillant et courtois.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Un ''aides doivent ?tre physiquement, comme eux sont sur leurs pieds ? le un cours de une plupart un jour, et peut se demander, pour d?fricher un plus un actions.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Ce travail demande un degr? une interaction aigu avec un clients, celui est un vendeurs doivent avoir un rev?tements beaux un clients et un habitudes une communication.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Si vous consid?rent une carri?re dans cette r?gion, cela ont dans un aspect, que un points divers demandent un collaborateurs pour une performance un buts un ventes. Si ces buts non sont atteint, cela leur travail peut-?tre sur une ligne.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Conseil');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Prennent une responsabilit?. D?signent un professionnalisme.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Votre d?marche chaque, conduit contre pour votre avenir.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Assister sur un s?ances un ventes, un conf?rences et autres mesures');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Une ''anse un clients dans une fa?on'' professionnelle');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Aide avec un probl?mes un client?les');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Libeller un un clients commandes');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', '?tre dans un cap un ?laborations'' Nouvelles');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Appeler un clients');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Exploiter un ventes nouvelles ou un un march?ages strat?gies');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Travail avec autres d?partements');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Calendrier un rendez-vouses, un sonneries et un rendez-vouses');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont motiv?');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont un professionnel');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont f?ru une industrie un ventes');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont un savoirs accomplis dans une r?gion un ventes');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Est une expertise une qualit? un service un clients');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Poss?dent un id?es un cr?atrices et Innovative un ventes');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Poss?dent un temps une premi?re et une possibilit? une administration un projets');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont dans un ?tat faire beaucoup bien dans un le marketing Internet et un le marketing Internet');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Ai un chauffeurs un enregistrement un performances');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont dans un ?tat engloutir une information opportun?ment');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Sont un en premi?re classe habitudes une une interpersonnelle communication');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Capable communiquer et traiter');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Enseignement');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Conseils ont selon une mesure extr?me un baccalaur?at.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Ce degr?, en une r?gle une g?n?rale, un business, connexe une r?gion, pareil comme un march?age, un finances et une connexion.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'A un degr? au-dessus un degr? pr?cieux pour un professionnels, esp?rent empocher haut un manag?riale attitudes.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Dans un entier');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Unconseils un conciliateurs entre un compagnies et un clients, un avancement une production et un bienfaits et un dispositif un commerciaux termes longs.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Eux peuvent exercer ou un travail ou ind?pendants une armature.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Quiconque exerce pour employeurs fr?quemment encaissent un avantages et sur une cime un nombre un appointements, alors comme un conseils ind?pendants exercent ind?pendant un ami de un ami, installe un montres et un degr? un profit'' propres');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Un devoirs ''essentiels branchent soi un d?pistage et un assouvissement un besoins un clients dans accentu? eux un territoires un ventes, un maintien beau apr?s-Vente un termes, une comptabilit? un nominations un clients et paracheva un accommodements selon une vente, et aussi une prestation une information d?taill?e de un produits, dont eux d?bitent.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Directeur une boutique');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Prennent un contr?le sous leurs bras.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'D?signent leur donnent un business.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Une ''qualification');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Doit ?tre non moins 21 ans.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Un enseignement ''moyen avec un une esp?ce de coll?ge un fond pr?f?rable ou un ?quivalent une combinaison un enseignement et une exp?rience.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Doivent fructueusement d?passer un apprentissage un caissier apr?s un louage.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Enseignement');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', '? cause de un quantit?s une responsabilit?, un managers boutiques dispos?es progressives, beaucoup de employeurs pr?f?rer embaucher un collaborateurs avec un baccalaur?at ou autre un enseignement formel dans une r?gion un business, connexe.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Bachelier dans un programme une affaire administration un degr? assure un ?tudiants avec un habitudes, indispensable, pour devenir un managers une boutique effectifs ? travers un caps selon un objets pareils, comme un march?age, une comptabilit? comptable, L''?thique des affaires et une strat?gie une administration.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Collaborateurs avec un degr?, plut?t entier, est assign? un degr? une administration et une administration plus aigu dans un Commerce de d?tail compagnies grosses.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Description un travail');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'R?pond un aspects un travail une boutique entiers, y compris siens aboutissants financiers.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Directeur doit planer, animer, adresser et contr?ler entier une boutique une activit? et un op?rations plus accepter un d?cisions, concernent op?rationnel un choix dans un proc?dures un travail, un dotations un inventaire, une commande, un planifications effectives et d?sint?ress? et autres situations, o? plusieurs facteurs doivent ?tre abord? et pond?r? un aboutissants maximal op?rationnels.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Directeur une boutique doit garder et assurer une observation un r?glements un boutiques entiers et une politique une compagnie et assurer se, que un collaborateurs entiers conforment un proc?dures une compagnie.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Eux accentuent et un ?talons un service pour une imitation une compagnie un clients et appuyer un aspect ponctuel, soign? un n?ant, garde code vestimentaire une compagnie.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Cette attitude doit disposer une boutique un anticipations et conserver un budgets op?rationnels et assume une responsabilit? au-del? de un diagrammes un collaborateurs et une besogne et autres charges postiches ?conome.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Poss?dent un id?es un cr?atrices et Innovative un ventes');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Approvisionnent se une direction costaude, un interpersonnelle et multit?che un habitudes.');
INSERT INTO search VALUES ('', 'Travail - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/jobs/', 'Travail dans une office, accomplit un devoirs administratifs et sur un plancher un ventes, et un assouvissement un besoins un effectif calendrier, un clients et merchandising.');

INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Thin, stunning display makes your heart beat faster.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'All the power you want. All day long.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Build your life as easy as it could be');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Powerful apps included');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Really useful apps for Windows 10 like Live Table Calendar, Mail with build-in system sign up. Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Anywhere you want');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'So you can be creative and productive right from the start. You also get great apps for email, sending texts, and making FaceTime calls, there even an app for new apps. Be connected to the social networks.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'The best design. For the best performance');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Special All-day battery life');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Usability. Be connected. High Performance');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'With the usability and high performance of each newly developed Laptop, you''re going to change your mind as well as fundamental principals at all.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Nowadays, despite all most casual situations, every person from Kid up to Businessman must be connected to the world. With newly developed 24 hours battery you''re going to forget about lack of power in general.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'The entire internal structure was built to keep the very best high-performance components: all-flash storage, the latest processors powerful discrete graphics, massive amounts of memory, autonomy.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Stunning display');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Best quality for your performance');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Latest developments. Retina display. Graphics elaboration');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Latest technologies give you a wide, 178-degree view of everything on the screen, so you''ll see the difference at practically any angle.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'The Retina display also reduces glare while maintaining incredible color and quality. In fact,it has a 29 percent higher contrast ratio than a standard laptop from Apple display.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'With new graphics cards from NVIDIA or Intel you can not look away from the screen at maximum resolution, not to mention the 5K video.');
INSERT INTO search VALUES ('', 'Laptops - Woden Sims', 'http://woden-sims.hol.es/laptops/', 'Thin. Powerful. Awesome');

INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Тонкий, потрясающий дисплей заставляет ваше сердце биться быстрее.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Вся сила которую Вы хотите. Весь день.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Создайте свою жизнь так просто, как это может быть');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Мощные приложения включены');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Где либо Вы хотите');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Действительно полезные приложения для Windows 10, как таблицы прямого календарь, почта со встроенным в системе зарегистрироваться. Каждый новый Mac поставляется с Photo, IMovie, GarageBand, Pages, Numbers, Keynote');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Таким образом, вы можете быть творческим и продуктивным с самого начала. Вы также получаете большие приложения для электронной почты, отправки текстов и делает FaceTime звонки, есть даже приложение для новых приложений. Подключайтесь к социальным сетям.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Лучший дизайн. Для лучшей производительности');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Специальный Весь день автономной работы');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Удобства использывания. Будьте на связи. Высокая производительность');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'С удобностю и высокой производительности каждого вновь разработанного Ноутбук, который вы собираетесь изменить свое мнение, а также основополагающие принципы вообще.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'В настоящее время, несмотря на все наиболее случайных ситуациях, каждый человек от малыша до Бизнесмен должен быть подключен к миру. С недавно разработанные батареи 24 часов вы собираетесь забыть о нехватке власти в целом.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Вся внутренняя структура была построена, чтобы сохранить самые лучшие высокопроизводительные компоненты: все-флэш-памяти, последние процессоры мощные дискретные графические, массивные объемы памяти, автономия.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Обвораживающий экран');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Лучшее качество для вашей работы');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Последние изобретения. Ретина экран. Графическая разработка');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Новейшие технологии дают вам широкий, 178-градусный вид на все на экране, так что вы увидите разницу практически на любой угол.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Дисплей Ретина также уменьшает блики при сохранении невероятной цвета и качества. В самом деле, он имеет 29 процентов более высокий коэффициент контрастности, чем стандартный ноутбук из яблочного дисплея.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'С новыми видеокартами от NVIDIA или Intel вы не можете смотреть от экрана при максимальном разрешении, не говоря уже о видео 5K.');
INSERT INTO search VALUES ('', 'Ноутбуки - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/laptops/', 'Тонкий. Мощный. Потрясающий');

INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Un visuel ''d?licat, bouleversant contraint votre c?ur battre prompt.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Une force ''enti?re dont vous veulent. Un jour entier.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Constituent leur vie de la sorte simplement, comme ce peut-?tre');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Un annexes ''puissantes compris');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'O? ou vous veulent');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Un annexes ''r?ellement profitables pour Windows 10, comme un tableaux direct un calendrier, un courrier avec encastr? dans un syst?me se enregistrer. Chaque nouveau Mac se fournit avec Photo, IMovie, GarageBand, Pages, Numbers, Keynote');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'De la sorte, vous peuvent ?tre une cr?atrice et productif d?s m?me commencement. Vous aussi encaissent un annexes pour un courriel, un envois un textes grandes et fait FaceTime un sonneries, est m?me une annexe pour un annexes nouvelles. Se connectent contre un filets sociaux.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Un design ''meilleur. Pour une efficacit?'' meilleure');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Sp?cial un jour entier un travail'' autonome');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Conforts un recours. Sont sur une connexion. Haute efficacit?.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'D?s id?alement et une efficacit? aigu? chaque de nouveau exploit? notebook, dont vous assemblent se contrefaire leur avis, et aussi un principes fondamentaux en g?n?ral.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Actuellement, en un d?pit de entier un situations plus accidentelles, un homme chaque de une gosse avant un businessman doit ?tre connect? contre un monde. Avec un batteries un 24 h depuis peu exploit?es vous assemblent se oublier de une insuffisance une autorit? dans un entier.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Une interne charpente ''enti?re fut b?ti, pour conserver le plus meilleur ?lev? composants: une souvenance, un processeurs derniers sont un digitaux graphiques, massif encombrements une souvenance, une autonomie puissants.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'S?duire ?cran');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Une ?lite qualit? pour votre travail');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Inventions derni?res. Retina est un ?cran. Une ?laboration graphique.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Un technologies ''sophistiqu?es accordent vous un aspect ample, un 178-degr? entier sur un ?cran, de la sorte que vous aper?oivent une diff?rence pratiquement un ne importe quel coin.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Visuel retina aussi abaisse Faits saillants sous une conservation fabuleux un colorations et un qualit?s. Bien, il a un 29 int?r?ts un coefficient un contraste plus aigu, que un ?talon notebook de un une pomme visuel.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'Avec nouveau cartes graphiques de NVIDIA ou Intel vous non peuvent regarder de un ?cran sous une autorisation maximale, non d?bite d?j? une vid?o 5k.');
INSERT INTO search VALUES ('', 'Notebook - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/laptops/', 'D?licat. Puissant. Bouleversant.');

INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'D?nner, ein beeindruckendes Display n?tigt euer Herz sich schl?gt schnell.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'All Gewalt das Sie belieben. All Tag.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Schaff ihriges Leben derma?en einfach, als dieser kann sein');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Kraftvoll Anbiegungen ist geschaltet');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Wo oder Sie belieben');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'G?ltig behilfliche Anbiegungen f?r Windows 10, als Tabellen aufrechter Kalender, Post mit eingebauter in Geb?ude zu registrieren sich. Jeder neuer Mac bek?stigt mit Photo, IMovie, GarageBand, Pages, Numbers, Keynote');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Also, ihr k?nnen sein bildender und produktiver von Beginn an. Ihr gleichfalls bekommen gro?e Anbiegungen f?r elektronische Post, Abtransporte der Texte und macht FaceTime Glocken, ist selbst Anbiegung f?r neue Anbiegungen. Verbunden zu sozialen Netzen.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Besseres Design. F?r bessere Produktivit?t');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Fachgem??er All Tag autonomes Arbeiten');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Annehmlichkeiten der Ausnutzung. Sei an Band. Hochleistung.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Mit Annehmlichkeit und Hochleistung jeder von neuer ausgearbeiteter Notizbuch, das ihr anschicken sich, ihrige Meinung, sowie theoriegeleitete Prinzipe durchg?ngig zu verraten.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Gegenw?rtig, trotz all h?chst beil?ufige Situationen, jeder Mensch ab Kleine bis Busine?mann mu? sein verbunden zu Frieden. Mit j?ngst ausgearbeitete Batterien 24 Stunden ihr anschicken sich, ?ber Mangel der Gewalt in dem Gesamten zu vergessen.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'All Binnenstruktur war vorgebaut, auf da? zu behalten am meisten besserer hochleistungsf?higer Komponenten: Alle der Flash-Speicher, allerletzter Prozessoren kraftvoll diskret graphische, massiger Umf?nge des Andenkens, Autonomie.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Verf?hren Bildschirm');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Bessere Qualit?t f?r euer Arbeiten');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Allerletzte Erfindungen. Selbstst?ndig Bildschirm. Graphische Ausarbeitung.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Neueste Technologien geben euch breites, 178-Grad ?u?ere auf all an Bildschirm, derma?en da? ihr sehen Differenz praktisch auf beliebigen Winkel.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Selbstst?ndig Netzhaut gleichfalls abmindert Lichtstellen bei Aufbewahrung unwahrscheinlicher Farben und Eigenschaften. In selbst Angelegenheit, er hat 29 Zinse mehr hocher Koeffizient gegens?tzlicher, was Standard Notizbuch aus Apfel Anzeige.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'Mit neuer Grafikkarten ab NVIDIA oder Intel ihr nicht k?nnen anblicken ab Bildschirm bei maximaler Erlaubnis, nicht bespricht bereits video 5k.');
INSERT INTO search VALUES ('', 'Notizbuch - Woden Sims (DE)', 'http://woden-sims.hol.es/de/laptops/', 'D?nner. Kraftvoll. Terrific.');

INSERT INTO search VALUES ('', 'Woden Sims Order Status - Woden Sims', 'http://woden-sims.hol.es/order-status/', 'Sign In');
INSERT INTO search VALUES ('', 'Woden Sims Order Status - Woden Sims', 'http://woden-sims.hol.es/order-status/', 'Account');
INSERT INTO search VALUES ('', 'Woden Sims Order Status - Woden Sims', 'http://woden-sims.hol.es/order-status/', 'Order Number');
INSERT INTO search VALUES ('', 'Woden Sims Order Status - Woden Sims', 'http://woden-sims.hol.es/order-status/', 'Look up for order');
INSERT INTO search VALUES ('', 'Woden Sims Order Status - Woden Sims', 'http://woden-sims.hol.es/order-status/', 'Where is order number?');
INSERT INTO search VALUES ('', 'Woden Sims Order Status - Woden Sims', 'http://woden-sims.hol.es/order-status/', 'Number is located with thanks message or in your account');

INSERT INTO search VALUES ('', 'Статус Заказа Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/order-status/', 'Вход');
INSERT INTO search VALUES ('', 'Статус Заказа Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/order-status/', 'Аккаунт');
INSERT INTO search VALUES ('', 'Статус Заказа Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/order-status/', 'Искать заказ');
INSERT INTO search VALUES ('', 'Статус Заказа Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/order-status/', 'Где найти номер заказа?');
INSERT INTO search VALUES ('', 'Статус Заказа Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/order-status/', 'Номер заказа');
INSERT INTO search VALUES ('', 'Статус Заказа Woden Sims - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/order-status/', 'Номер располагаеться в Вашем аккаунте или в сообщении');

INSERT INTO search VALUES ('', 'Woden Sims Bestell-Status - Woden Sims (DE)', 'http://woden-sims.hol.es/de/order-status/', 'Betreten');
INSERT INTO search VALUES ('', 'Woden Sims Bestell-Status - Woden Sims (DE)', 'http://woden-sims.hol.es/de/order-status/', 'Rechnung');
INSERT INTO search VALUES ('', 'Woden Sims Bestell-Status - Woden Sims (DE)', 'http://woden-sims.hol.es/de/order-status/', 'Auftrag zu suchen');
INSERT INTO search VALUES ('', 'Woden Sims Bestell-Status - Woden Sims (DE)', 'http://woden-sims.hol.es/de/order-status/', 'Nummer des Auftrags');
INSERT INTO search VALUES ('', 'Woden Sims Bestell-Status - Woden Sims (DE)', 'http://woden-sims.hol.es/de/order-status/', 'Wo zu Nummer des Auftrags?');
INSERT INTO search VALUES ('', 'Woden Sims Bestell-Status - Woden Sims (DE)', 'http://woden-sims.hol.es/de/order-status/', 'Nummer anordnet in Euer Accounte oder in Ansage');

INSERT INTO search VALUES ('', 'Statut Woden Sims Ordre - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/order-status/', 'Une bouche');
INSERT INTO search VALUES ('', 'Statut Woden Sims Ordre - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/order-status/', 'Account');
INSERT INTO search VALUES ('', 'Statut Woden Sims Ordre - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/order-status/', 'Chercher une commande');
INSERT INTO search VALUES ('', 'Statut Woden Sims Ordre - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/order-status/', 'Chambre une commande');
INSERT INTO search VALUES ('', 'Statut Woden Sims Ordre - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/order-status/', 'O? retrouver une chambre une commande?');
INSERT INTO search VALUES ('', 'Statut Woden Sims Ordre - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/order-status/', 'Chambre installe se dans votre account ou dans une communication');

INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'The only thing that can change your life absolutely.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'Describe new possibilities.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'Most people have at least a simple, if not sophisticated, mobile phone. These devices are convenient to carry around and you can use them on the go as long as there is network coverage wherever you are. Mobile phones have clearly made it easier to communicate.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'Although the mobile phone doesn''t guarantee safety, you can use it to make calls whenever there is an emergency.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'Thin, powerful and awesome.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'Change your way of thinking. Interact with each other. Awesome Apps for your needs.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'With the upgrades made year in, year out, mobile phones are becoming more like computers with the added benefit of portability.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'One can receive and send emails, browse websites, download games and videos, book flight tickets, and even chat with friends.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'Be productive, move forward.');
INSERT INTO search VALUES ('', 'Phones - Woden Sims', 'http://woden-sims.hol.es/phones/', 'Reimagine work and tasks with next-generation Apps. Transform your business strategy. Be mobile as much as possible. Go in lockstep with future.');

INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Только они, могут изменить Вашу жизнь абсолютно.');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Попробуйте новые возможности');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Многие люди имеют как минимум обычный телефон, если не крутой, мобильный телефон. Эти устройства сделаны что бы вы чувствовали себя спокойно и использовать их можно в любой зоне покрытия сети. Мобильные телефоны сделали возможность контактировать легче чем некуда.');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Несмотря на это, мобильные телефоны не гарантируют безопасность, но вы можете их использовать их в любой случае опасности.');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Токний, мощный и какой либо.');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Измените ваш стиль мышления. Связывайтесь друг с другом. Разные Приложения для Ваших потребностей.');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'В связи с новыми обновлениями сделаными этим годом, годом другим, мобильные телефоны стают почти как компьютерами с преймуществом их компактности.');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Кто-либо может получать и отправлять електонные письма, листать веб-сайты, скачивать игры и видео, иметь книгу авиаполетов, и списываться друг с другом.');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Будьте продуктивны, двигайтесь вперед');
INSERT INTO search VALUES ('', 'Телефоны - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/phones/', 'Преосмотрите работу и задания с новыми приложениями. Трансформируйте вашу бизнес стратегию. Будьте мобильными настолько на сколько возможно. Двигайтесь нога в ногу с будущим.');

INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Allein sie, k?nnen verraten Euer Leben absolut.');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Versuchen Sie, neue M?glichkeiten');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Viele Leute haben mindestens gew?hnlichen Fernsprecher, falls nicht absch?ssiger, mobiler Fernsprecher. Diese Einrichtungen ist erledigt was ihr empfanden sich gemach und ausnutzen sie es darf in beliebiger Zone der Deckung des Netzes. Mobile Fernsprecher erledigten M?glichkeit Kontakt leicht was es nirgends.');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Trotzdem, mobile Fernsprecher nicht garantieren Sicherheit, aber ihr k?nnen sie ausnutzen sie in beliebiger Gelegenheit der Gefahr.');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'D?nner, kraftvoll und welch oder.');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Verrat eueren Stil des Denkens. Einla? sich mit aneinander. Allerhande Anbiegungen f?r Eueren Bedarf.');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Gelegentlich neuer Erneuerungen erledigter dieses Jahr, Jahr anderer, mobile Fernsprecher machen beinah als Computer mit Bevorzugung ihrer Kompaktheit.');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Irgendwer kann bekommen und zu abfertigen elektronische Briefe, Webseiten zu bl?ttern in, herunterladen Spiele und Video, Buch Suche Fl?ge zu haben, und zu abhauen aneinander.');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Sei produktiv, fortbewege sich');
INSERT INTO search VALUES ('', 'Fernsprecher - Woden Sims (DE)', 'http://woden-sims.hol.es/de/phones/', 'Durchlauf Arbeiten und Aufgaben mit neuen Anbiegungen. Transformieren euer Busine? Strategie. Sei mobiler derma?en an wieviel m?glich. Bewege sich Bein in Bein mit Zukunft.');

INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Seul eux, peuvent contrefaire votre vie absolument.');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Essaient un d?bouch?s'' nouveaux');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Beaucoup de gens ont comme min un t?l?phone accoutum?, si un t?l?phone non abrupt, mobile. Ces agencements fait que vous ressentirent soi calmement et utiliser eux on peut dans une ne importe quel zone un rev?tement un filet. Un t?l?phones mobiles firent une possibilit? contact ais? que nulle part.');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'En un d?pit de ce, un t?l?phones mobiles non gagent une s?curit?, mais vous peuvent eux utiliser eux dans ne importe quel un cas un danger.');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'D?licat, puissant et lequel ou.');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Contrefont votre facture une mentalit?. Embarrassent se un ami avec un ami. Un annexes diff?rentes pour vos besoins.');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Dans une connexion avec un rajeunissements nouveaux fait ce an, un an autre, un t?l?phones mobiles sont ? peu pr?s comme un ordinateurs avec un avantage leur compacit?.');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Quelqu'' un peut encaisser et d?puter un lettres ?lectroniques, feuilleter sites, t?l?charger un jeux et une vid?o, avoir un livre par avion un vols, et se copier un ami avec un ami.');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Sont productif, se avancent');
INSERT INTO search VALUES ('', 'T?l?phones - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/phones/', 'Surveillent un travail et un t?ches avec un annexes nouvelles. Transformer votre un business une strat?gie. Sont mobile tant sur combien ?ventuellement. Avancent un pied un pied avec un avenir.');

INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Privacy Policy');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Updated as of November 2015');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Woden-sims.hol.es (called a "Site") is electronic commerce platform are predominantly used by business entities to facilitate electronic commerce and such business use does not generally involve the collection of personal information of individuals. Woden Sims recognizes the importance of privacy as well as the importance of maintaining the confidentiality of personal information. This Privacy Policy applies to all products and services provided by us and sets out how we may collect, use and disclose information in relation to users of the Sites.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'You may use our services and products via a mobile device either through mobile applications or mobile optimized websites. This Privacy Policy also applies to such use of our services and products.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Collection Of Information');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Your privacy is important to us and we have taken steps to ensure that we do not collect more information from you than is necessary for us to provide you with our services and to protect your account.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Information including, but not limited to, user name, address, phone number, fax number, email address, gender, date and/or year of birth and user preferences ("Registration Information") may be collected at the time of user registration on the Sites.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'In connection with any transaction and payment services or services under our buyer protection schemes we provide on the Sites, information, including but not limited to, bank account numbers, billing and delivery information, credit/debit card numbers and expiration dates and tracking information from cheques or money orders ("Account Information") may be collected to, among other things, facilitate the sale and purchase as well as the settlement of purchase price of the products or services transacted on or procured through the Sites.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'We record and retain records of users'' buying and browsing activities on our platform including but not limited to IP addresses, browsing patterns and buyer behavioral patterns. In addition, we gather statistical information about the Sites and visitors to the Sites including, but not limited to, IP addresses, browser software, operating system, software and hardware attributes, pages viewed, number of sessions and unique visitors (together "Browsing Information").');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Registration Information, Account Information, Activities Information, Event Information and Browsing Information generally relate to business entities and are together referred to as business data ("Business Data"). Insofar and only insofar as they constitute personally identifiable data of living individuals, such information are together referred to as personal data ("Personal Data")');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Use of Personal Data');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'If you provide any Personal Data to us, you are deemed to have authorized us to collect, retain and use that Personal Data for the following purposes:');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'verifying your identity;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'processing your registration as a user, providing you with a log-in ID for the Sites and maintaining and managing your registration;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'performing research or statistical analysis in order to improve the content and layout of the Sites, to improve our product offerings and services and for marketing and promotional purposes;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'subject to obtaining your consent in such form as may be required under the applicable law, we may use your name, phone number, residential address, email address and fax number ("Marketing Data") to provide notices, surveys, product alerts, communications and other marketing materials to you relating to goods and services offered by us on the Sites including Gold Suppliers membership, Verified Members membership, Free Members membership (each of Gold Suppliers membership, Verified Members membership, and Free Members membership, a "Membership" and collectively, the "Memberships") the value added services ancillary to the Memberships, and other products and services offered by us from time to time to members of the Sites;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'if you voluntarily submit any information to the Sites for publication on the Sites through the publishing tools, including but not limited to, Company Profile, Product Catalog, Trade Leads, TrustPass Profile and any discussion forum, then you are deemed to have given consent to the publication of such information on the Sites ("Voluntary Information"); and');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'making such disclosures as may be required for any of the above purposes or as required by law or in respect of any claims or potential claims brought against us.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Disclosure of Personal Data');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'You further agree that we may disclose and transfer (whether within or outside the jurisdiction of the Woden Sims entity that you are contracting with) your Personal Data to service providers engaged by us to assist us with providing you with our services (including but not limited to data entry, database management, promotions, products and services alerts, delivery services, payment extension services, and membership authentication and verification services) ("Service Providers"). These Service Providers are under a duty of confidentiality to us and are only permitted to use your Personal Data in connection with the purposes specified at Section 2 above, and not for their own purposes (including direct marketing)');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'When necessary we may also disclose and transfer (whether within or outside the jurisdiction of the Woden Sims entity that you are contracting with) your Personal Data to our professional advisers, law enforcement agencies, insurers, government and regulatory and other organizations for the purposes specified at Section 2above');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'All Voluntary Information may be made publicly available on the Sites and therefore accessible by any internet user. Any Voluntary Information that you disclose to us becomes public information and you relinquish any proprietary rights (including but not limited to the rights of confidentiality and copyright) in such information. You should exercise caution when deciding to include personal or proprietary information in the Voluntary Information that you submit to us.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'We may provide statistical information to third parties, but when we do so, we do not provide personally-identifying information without your permission.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'We may share your Account Information with banks or vendors to enable your transactions on the Sites to be completed. In addition, we may use your Account Information to determine your credit-worthiness and, in the process of such determination, we may need to make such Account Information available to banks or credit agencies. While we have in place up-to-date technology and internal procedures to keep your Account Information and other Personal Data secure from intruders, there is no guarantee that such technology or procedures can eliminate all of the risks of theft, loss or misuse.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Security Measures');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'We employ commercially reasonable security methods to prevent unauthorized access to the Sites, to maintain data accuracy and to ensure the correct use of the information we hold.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'For registered users of the Sites, your Registration Information and Account Information (if any) can be viewed and edited through your account, which is protected by a password. We recommend that you do not divulge your password to anyone. Our personnel will never ask you for your password in an unsolicited phone call or in an unsolicited email. If you share a computer with others, you should not choose to save your log-in information (e.g., user ID and password) on that shared computer. Remember to sign out of your account and close your browser window when you have finished your session.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'No data transmission over the internet or any wireless network can be guaranteed to be perfectly secure. As a result, while we try to protect the information we hold for you, we cannot guarantee the security of any information you transmit to us and you do so at your own risk.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Cookies');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'We use "cookies" to store specific information about you and track your visits to the Sites. It is not uncommon for websites to use cookies to enhance identification of their users.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'A "cookie" is a small amount of data that is sent to your browser and stored on your computer''s hard drive. A cookie can be sent to your computer''s hard drive only if you access the Sites using a computer. If you do not de-activate or erase the cookie, each time you use the same computer to access the Sites, our web servers will be notified of your visit to the Sites and in turn we may have knowledge of your visit and the pattern of your usage.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Generally, we use cookies to identify you and enable us to');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Access your Registration Information or Account Information so you do not have to re-enter it;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Gather statistical information about usage by users;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Research visiting patterns and help target advertisements based on user interests;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Assist our partners to track user visits to the Sites and process orders;');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'Track progress and participation in promotions.');
INSERT INTO search VALUES ('', 'Privacy Policy - Woden Sims', 'http://woden-sims.hol.es/privacy-policy/', 'You can determine if and how a cookie will be accepted by configuring the browser which is installed in the computer you are using to access the Sites. If you choose, you can change those configurations. By setting your preferences in the browser, you can accept all cookies or you can choose to be notified when a cookie is sent or you can choose to reject all cookies. If you reject all cookies by choosing the cookie-disabling function in your browser, you may be required to re-enter information on the Sites more often and certain features of the Sites may be unavailable.');

INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Конфиденциальность');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Обновлено в Ноябре 2015');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Woden-sims.hol.es (так называемый "Сайт") является электронная платформа торговли преимущественно используется субъектами хозяйствования для облегчения электронной коммерции и бизнес-использования такого обычно не предусматривают сбор личной информации лиц. Woden Sims признает важность конфиденциальности, а также важность сохранения конфиденциальность личной информации. Эта политика конфиденциальности распространяется на все продукты и услуги, предоставляемые нами, и устанавливает, как мы можем собирать, использовать и раскрывать информацию в отношении пользователями сайтов.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Вы можете использовать наши услуги и продукты через мобильное устройство или через мобильные приложения и мобильные оптимизированные сайты. Эта политика конфиденциальности также применяется к такому использованию наших продуктов и услуг.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Сбор Информации');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Ваша конфиденциальность очень важна для нас, и мы приняли меры, чтобы гарантировать, что мы не собираем больше информации от вас, чем это необходимо для нас, чтобы предоставить вам наши услуги и для защиты вашей учетной записи.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Информация, включая, но не ограничиваясь, имя пользователя, адрес, номер телефона, номер факса, адрес электронной почты, пол, дата и / или года рождения и пользовательских предпочтений ("Регистрационная информация") могут быть собраны на момент регистрации пользователя на Сайтов.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'В связи с любой сделки и платежных услуг или услуг по нашим схемам защиты покупателей мы предоставляем на сайты, информации, в том числе, но не ограничиваясь, банк номера счетов, счетов и доставки информации, номеров кредитных / дебетовых карт и даты истечения срока действия и отслеживания информации из чеки или денежные переводы («Информация по счету") может быть собрана, среди прочего, способствовать продаже и покупке, а также урегулирования покупной цены продукции или услуг в сделках на или закупаемых через сайты.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Мы записываем и сохранять записи пользователей \ "покупки и просмотра деятельности на нашей платформе, включая, но не ограничиваясь IP-адресов, шаблонов просмотра и покупатель поведения. Кроме того, мы собираем статистические данные о сайтах и посетителей сайтов, включая, но не ограничиваясь, IP-адреса, программное обеспечение браузера, операционной системы, программного обеспечения и аппаратных атрибутов, просмотренных страниц, количество сессий и уникальных посетителей (вместе "Сидя Информация ").');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Информация о регистрации, сведения об учетной записи, Деятельность Информация, Информация о событии и просмотр данных, как правило, относятся к бизнес-субъектов и далее совместно именуемые бизнес-данных ("бизнес-данных"). Поскольку и лишь постольку, поскольку они представляют собой данные, удостоверяющие личность живых лиц, такой информации совместно именуемые персональных данных ("Личные данные")');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Использование персональных данных');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Если вы предоставляете любые личные данные к нам, вы считаются уполномочили нас на сбор, сохранение и использование личных данных, которые для следующих целей:');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'проверки вашей личности;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'обработки регистрацию в качестве пользователя, предоставляя вам журнал в ID для сайтов и услуг и управления регистрации;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'проведения исследований или статистический анализ для того, чтобы улучшить содержание и оформление сайтов, чтобы улучшить наши предложения продукта и услуг и для маркетинговых и рекламных целей;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'при условии получения вашего согласия в такой форме, как это требуется в соответствии с применимым законодательством, мы можем использовать ваше имя, номер телефона, адрес проживания, адрес электронной почты и номер факса ("Маркетинг данных"), чтобы обеспечить замечает, опросы, оповещения продукта, коммуникации и другие маркетинговые материалы вам, относящиеся к товарам и услугам, предлагаемых нами на сайтах, включая золото Поставщики членства, членство Проверенный членов, свободных членов членства (каждый из Золотой членства Поставщики, членство Проверенный членов и свободных членов членство, А "членство" и в совокупности "Членство") вспомогательное услуги с добавленной стоимостью на членство, и другие продукты и услуги, предлагаемые нами время от времени к членам сайтов;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'если вы добровольно представить любую информацию на сайтах для публикации на сайтах через издательские инструменты, в том числе, но не ограничиваясь, профиля компании, каталог товаров, торговля ведет, архив доверенности и любой дискуссионный форум, то вы, как считается, дал согласие на публикация такой информации на сайтах («Добровольное информация»); а также');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'что делает такие раскрытия информации, которые могут потребоваться для любой из вышеперечисленных целей или в соответствии с законом или в отношении каких-либо претензий или потенциальных исков против нас.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Распространение персональных данных');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Вы также соглашаетесь, что мы можем раскрыть и перевод (будь то в рамках или вне юрисдикции Woden Sims лицо, вы заключаете договор с) ваши личные данные провайдеров, занимающихся нами, чтобы помочь нам с предоставлением Вам наши услуги (включая, но не ограничиваясь ввода данных, управления базами данных, акциях, товарах и услугах предупреждений, служб доставки, расширение оплаты услуг и аутентификация членство и услуги верификации) ("поставщики услуг"). Эти поставщики услуг обязано конфиденциальности нам и разрешается использовать только ваши личные данные в связи с целями, указанными в Секция 2 выше, а не в своих собственных целях (в том числе прямого маркетинга)');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'При необходимости мы также можем раскрывать и перевод (будь то в рамках или вне юрисдикции Woden Sims лицо, вы заключаете договор с) Ваши личные данные наших профессиональных консультантов, сотрудников правоохранительных органов, страховщиков, государственных и нормативные и другие организации для целей, указанных в Секция 2 выше');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Все добровольные Информация может быть публично доступны на сайтах и, следовательно, доступными для любой интернет-пользователь. Любая добровольная информацию, которую Вы предоставляете нам становится достоянием общественности информацию, и вы отказаться от каких-либо прав собственности (в том числе, но не ограничиваясь прав конфиденциальности и авторского права) в такой информации. Вы должны проявлять осторожность при принятии решения включают в себя личную или конфиденциальную информацию в добровольных информация, которую Вы предоставляете нам.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Мы можем предоставлять статистическую информацию третьим лицам, но когда мы делаем это, мы не предоставляем персональную информацию о без вашего разрешения.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Мы можем поделиться информации об учетной записи с банками или поставщиками для того, чтобы ваши сделки на сайтах должна быть завершена. Кроме того, мы можем использовать вашу учетную информацию, чтобы определить ваше кредитоспособности и, в процессе такого определения, мы, возможно, потребуется, чтобы сделать такую информацию аккаунт доступны банкам или кредитных агентств. В то время как мы на месте до-до-современных технологий и внутренних процедур, чтобы сохранить информацию о Вашем счете и другие личные данные в безопасности от злоумышленников, нет никакой гарантии, что такая технология или процедуры могут устранить все риски кражи, потери или неправильного использования.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Меры безопасности');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Мы используем все коммерчески разумные методы безопасности для предотвращения несанкционированного доступа к сайтам, для поддержания точности данных и обеспечения правильного использования информации мы проводим.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Для зарегистрированных пользователей на сайты, регистрационную информацию и информации счета (если таковые имеются) могут быть просмотрены и отредактированы с помощью аккаунта, который защищен паролем. Мы рекомендуем вам не разглашать свой пароль никому. Наш персонал никогда не будет спрашивать ваш пароль в нежелательных телефонных звонков или нежелательной электронной почты. Если вы разделяете компьютера с другими, вы не должны выбирать, чтобы сохранить регистрационную информацию (например, ID пользователя и пароль) на этом общедоступном компьютере. Не забудьте выйти из вашего счета и закрыть окно браузера, когда вы закончили сессию.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Никакая передача данных через Интернет или любой беспроводной сети может быть гарантированно будет абсолютно безопасной. В результате, в то время как мы пытаемся защитить информацию, которую мы храним для вас, мы не можем гарантировать безопасность любой информации, которую вы передаете нам, и вы делаете это на свой страх и риск.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Куки');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Мы используем «куки» для хранения определенной информации о вас, и отслеживать посещение достопримечательностей. Это не редкость для веб-сайтов, чтобы использовать куки для повышения идентификацию своих пользователей.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', '"Куки" представляет собой небольшой объем данных, который посылается на ваш браузер и сохраняется на жестком диске вашего компьютера. Печенье может быть отправлен на жесткий диск вашего компьютера, только если вы доступ к сайтам с помощью компьютера. Если вы не деактивировать или удалить куки, каждый раз, когда вы используете один и тот же компьютер для доступа к сайтам, наши веб-серверы будут уведомлены о визите к сайтам и мы в свою очередь может иметь знания вашего визита и образец вашего использования.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Как правило, мы используем куки, чтобы идентифицировать вас и позволит нам');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Доступ к регистрации данных или данных счета, так что вы не должны повторно ввести его;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Соберите статистические данные об использовании пользователями;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Исследования посещения узоры и помощь целевые рекламные объявления, основанные на интересах пользователей;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Помочь нашим партнерам, чтобы отслеживать пользователей посещений сайтов и технологических заказов;');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Отслеживания прогресса и участия в акциях.');
INSERT INTO search VALUES ('', 'Конфиденциальность - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/privacy-policy/', 'Вы можете определить, если и как то куки будут приняты настройки браузера, который установлен в компьютере, который вы используете для доступа к сайтам. Если вы выбираете, вы можете изменить настройки. Установив свои предпочтения в браузере, вы можете принимать все файлы или вы можете выбрать, чтобы получить уведомление, когда печенье направляется или вы можете выбрать, чтобы отклонить все куки. Если вы отвергаете все куки, выбрав функцию куки отключение в вашем браузере, вам может потребоваться повторно ввести информацию на сайтах чаще и некоторых особенностей сайты могут быть недоступны.');

INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Konfidentieller');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Es ist ''erneut in November 2015');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Woden-sims.hol.es (sogenannter "Website") spukt elektronischer Bahnsteig des Gasch?fts meistenteils ausnutzt Subjekte Verwaltung f?r Erleichterung des elektronischen Handels Gesch?ftsbedingungen derart ?blich nicht voraussagen Sammeln der pers?nlichen Information der Gesichter. Woden Sims akzeptiert Wichtigkeit konfidentieller, sowie Wichtigkeit der Aufbewahrung konfidentieller der pers?nlichen Information. Diese Politik konfidentieller erstreckt sich auf all Produkte und Gefallen, die wir anheimstellen, und ansetzt, als wir k?nnen ablesen, und zu aufdecken Information in Beziehungen Benutzer websites zu ausnutzen.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Ihr k?nnen ausnutzen unsere Gefallen und Produkte durch mobile Einrichtung oder durch mobile Anbiegungen und mobiler optimierter Websites. Diese Politik konfidentieller gleichfalls anpa?t sich zu derart Ausnutzung unserer Produkte und Gefallen.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Sammeln der Information');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Euer konfidentieller ist sehr beachtenswert f?r uns, und wir annahmen Anstalten, auf da? zu garantieren, da? wir nicht ablesen mehr Information ab euch, was dieser ist erforderlich f?r uns, auf da? zu anheimstellen euch unsere Gefallen und f?r Schutz eueres Rechnungswesen Aufschreibens.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Information, mitsamt, aber nicht beschr?nkt sich, Name des Benutzers, Adresse, Nummer des Fernsprechers, Nummer faxen, Adresse der elektronischen Post, Fu?b?den, Datum und / oder Jahrg?nge und benutzerdefinierte Bevorzugungen (Registrierunginformation") k?nnen sein gesammelt auf Moment der Registrierung des Benutzers an Websites.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Gelegentlich beliebige Abmachung und Auszahlungengefallen oder Gefallen unsere Schaltungen des Schutzs der Abnehmer wir anheimstellen auf websites, Information, darunter, aber nicht beschr?nkt sich, Bank der Nummer der Abz?hlungen, Abz?hlungen und Zustellung der Information, Nummern der Sollskarten und Datum des Ausflusses der Laufzeit und Tracking der Information aus Schecks oder Geldanweisungen ("Information Abz?hlung") kann sein gesammelt, immitten ?briger, Verkauf und Abnahme zu f?rdern, sowie Regelungen des Kaufpreises Produkte oder Gefallen in Abmachungen an oder aufkaufen durch websites.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Wir anschreiben und zu behalten Aufschreiben der Benutzer \ "Abnahme und Einsehen der T?tigkeit an unserem Bahnsteig, mitsamt, aber nicht beschr?nkt sich IP- der Adressen, Vorlagen des Einsehens und Abnehmer des Benehmens. Au?erdem, wir ablesen statistische Angaben ?ber Websites und Besucher Websites, mitsamt, aber nicht beschr?nkt sich, IP- der Adresse, Programmsversorgung Browser, Operations Geb?ude, Programmsversorgung und G?reteattribute, anzeigen Seiten, Quantum der Sessionen und einzigartige Besucher ("Beieinandersitzt Information ").');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Information Registrierungen, informationen ?ber Rechnungswesen Aufschreiben, T?tigkeit Information, Information ?ber Begebenheit und Einsehen der Angaben, als Regel, beziehen sich auf Gesch?ftseinheiten und weiter gemeinsam genannter Gesch?ftsdaten ("Gesch?ftsdaten").');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Ausnutzung der personalen Angaben');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Falls ihr anheimstellen beliebige pers?nliche Angaben zu uns, ihr achten akkreditoren uns auf Sammeln, Aufbewahrung und Ausnutzung der pers?nlichen Angaben, die f?r folgende Ziele :');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Versuche euerer Person;');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Verarbeitungen Registrierung als Benutzer, anheimstellt euch Zeitschrift in ID f?r websites und Gefallen und Amt der Registrierung;');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Durchf?hrungen der Durchforschungen oder statistische Analyse dazu, auf da? zu bessern Gehalt und Aufmachung Websites, auf da? zu bessern unsere Anerbieten des Produkts und Gefallen und f?r Marketing und Annoncen Ziele;');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'mit unterer Bedingung Empfang euerer Einheit in derart Ausgestaltung, als dieser abfordert entsprechend anwendbarer Gesetzgebung, wir k?nnen ausnutzen euer Name, Nummer des Fernsprechers, Wohnort, Adresse der elektronischen Post und Nummer faxen ("Marketing der Angaben"), auf da? zu versorgen beachtet, Befragungen, Bekanntmachungen des Produkts, Kommunikationen und andere Marketing Materialien ihr, beziehender sich auf Artikel und Gefallen, anbieten wir an Websites, mitsamt Gold Lieferanten der Mitgliedschaft, Mitgliedschaft Durchgesuchter Mitglieder, freie Mitglieder der Mitgliedschaft (jeder aus Goldener Mitgliedschaft Lieferanten, Mitgliedschaft Durchgesuchter Mitglieder und freie Mitglieder Mitgliedschaft, Und "Mitgliedschaft" und in Ganze "Mitgliedschaft") Hilfs Gefallen mit subsumierter Betrag auf Mitgliedschaft, und andere Produkte und Gefallen, die wir dazwischen zu Mitgliedern Websites anbieten;');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'falls ihr freiwillig zu vorstellen sich beliebige Information an websites f?r Bekanntmachung an websites durch Verlagewerkzeuge, darunter, aber nicht beschr?nkt sich, Profil der Geselschaft, Katalog der Artikel, Gasch?ft f?hrt, Archiv der Vollmacht und beliebiges diskutables Forum, ihr, als achtet, gab Einheit auf Bekanntmachung der derart Information an websites ("Freiwilliger Information"); sowie');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'da? macht derart Aufschlie?ung der Information, das k?nnen abfordern f?r beliebiger aus oben Zielen oder rechtskonform oder in Beziehungen irgendeiner Anforderungen oder potentiale Klagen wider wir.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Ausbreitung der personalen Angaben');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Ihr gleichfalls beistimmen, da? wir k?nnen aufdecken und Nacherz?hlung (sei es in Umrahmungen oder au?er Verfahren Woden Sims Gesicht, ihr schlie?en Vertrag) euere pers?nliche Angaben Anbieter, das wir treibend ist, auf da? zu aufhelfen uns mit Eingabe Ihr unsere Gefallen (mitsamt, aber nicht beschr?nkt sich Einf?hrung der Angaben, ?mter Basen der Angaben, Aktionen, Artikel und Gefallen der Vorbemerkungen, Dienste der Zustellung, Ausbreitung der Bezahlung der Gefallen und authentication Mitgliedschaft und Gefallen ?berpr?fung) ("Lieferanten der Gefallen"). Abschnitt 2 h?her, und nicht in ihrigen eigenen Zielen (darunter aufrechter Marketing)');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Bei Mu? wir gleichfalls k?nnen aufdecken und Nacherz?hlung (sei es in Umrahmungen oder au?er Verfahren Woden Sims Gesicht, ihr schlie?en Vertrag) Euere pers?nliche Angaben unserer fachlicher Berater, Mitarbeiter der Rechtsschutzorgane, Assekuranten, die und normativer und andere Organisationen f?r Ziele, die in'' n?mlich ist staatlich ist Abschnitt 2 h?her');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'All freiwilliger Information kann sein ?ffentlich zug?nglicher an websites und, also, zug?nglicher f?r beliebiger Internets-benutzer. Beliebiger freiwilliger Information, die Sie uns hinstellt Eigentum der ?ffentlichkeit Information anheimstellen, und ihr zu ausschlagen ab irgendeinen Eigentumsrechten (darunter, aber nicht beschr?nkt sich Anrechte konfidentieller und Autorenrecht) in derart Information. Ihr m?ssen bekunden vorsichtiger bei Beschlu?fassung einschlie?en in sich pers?nliche oder konfidentieller Information in freiwilliger Information, die Sie uns anheimstellen.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Wir k?nnen anheimstellen statistische Information Drittengesichtern, aber wann wir machen dieser, wir nicht anheimstellen personale Information ?ber ohne euere Erlaubnis.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Wir k?nnen teilen sich Information ?ber Rechnungswesen Aufschreiben mit Gl?sern oder Lieferanten dazu, auf da? euere Abmachungen an websites mu? sein abgeschlossen. Au?erdem, wir k?nnen ausnutzen euere Benutzer Information, auf da? zu bestimmen euer Kreditf?higkeit und, in Proce? der derart Bestimmung, wir, m?glich, abfordert, auf da? zu erledigen derart Information Account zug?nglicher Gl?sern oder Krediteagenturen.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Anstalten der Sicherheit');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Wir ausnutzen all kaufm?nnisch Geist Methoden der Sicherheit f?r Verhinderung des unberechtigten Eingangs zu websites, f?r Unterhaltung der Genauigkeit der Angaben und Versorgung der korrekten Ausnutzung der Information wir durchf?hren.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'F?r registrierte Benutzer auf websites, Registrierunginformation und Information der Abz?hlung (falls jeder haben) k?nnen sein sucht und bearbeitet anhand Account, das Kennwort gesch?tzt ist. Wir anbefehlen euch nicht preisgeben ihriges Kennwort niemand. Unser Personal keinmal nicht ist zu abfragen euer Kennwort in unerw?nschte telephonische Glocken oder unerw?nschte elektronische Post. Falls ihr abteilen Computer mit anderer, ihr nicht m?ssen w?hlen, auf da? zu behalten Registrierunginformation (z.B., ID des Benutzers und Kennwort) an diesem erschwinglichem Computer. Nicht vergi? zu aussteigen aus euerer Abz?hlung und zu zumachen Fenster Browser, wann ihr beendeten Session.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Keine Abgabe der Angaben via Internet oder beliebiges drahtloses Netz kann sein garantiert ist absolut ungef?hrlicher. In Ergebnis, w?hrend wir beflei?en, Information, die wir f?r euch aufbewahren zu sch?tzen, wir nicht k?nnen garantieren Sicherheit der beliebigen Information, die ihr uns bestellen, und ihr machen dieser auf ihrige Angst und Risiko.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Cookies');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Wir ausnutzen "Cookie" f?r Aufhebung der bestimmten Information ?ber euch, und Spur Besuch der Sehensw?rdigkeiten. Dieser ist nicht selten f?r Webseiten, auf da? zu ausnutzen cookie f?r Aufsteigen Identifikation ihriger Benutzer.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', '"Cookie" darstellt sich kleiner Umfang der Angaben, der auf euer Browser und erh?lt sich an hartem Diskus eueres Computers sendet. Backwerk kann sein abgefertigt auf harten Diskus eueres Computers, allein falls ihr Eingang zu websites anhand Computers. Falls ihr nicht deaktivieren oder zu entfernen cookie, jedesmal wenn ihr ausnutzen eins und selber Computer f?r Eingang zu websites, unsere Web-Server sind benachrichtigt ?ber Besuch zu websites und wir in ihriger Wende kann haben Wissen eueres Besuchs und Vorbild euerer Ausnutzung.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Als Regel, wir ausnutzen cookie, auf da? zu identifizieren euch und erlaubt uns');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Eingang zu Registrierung der Angaben oder Angaben der Abz?hlung, derma?en da? ihr nicht m?ssen abermals einf?hren ihn;');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Ablies statistische Angaben ?ber Ausnutzung Benutzer;');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Durchforschungen des Besuchs Muster und Aushilfe Annoncenank?ndigungen, die an Interessen der Benutzer gegr?ndet ist;');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Unseren Partnern zu ''aufhelfen, auf da? Spur Benutzer der Besuche websites und technologische Auftr?ge');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Spur der Aufw?rtsentwicklung und Beteiligung sich an Aktionen.');
INSERT INTO search VALUES ('', 'Konfidentieller - Woden Sims (DE)', 'http://woden-sims.hol.es/de/privacy-policy/', 'Ihr k?nnen bestimmen, wenn auch als derjenige cookie sind angenommen Abstimmungen Browser, das in Computer, der ihr f?r Eingang zu websites ausnutzen angesetzt ist. Falls ihr w?hlen, ihr k?nnen verraten Abstimmungen. Ansetzt ihrige Bevorzugungen in Browser, ihr k?nnen annehmen all Dateien oder ihr k?nnen w?hlen, auf da? zu ?bernehmen Benachrichtigung, wann Backwerk zusteuert oder ihr k?nnen w?hlen, auf da? zu ausschlagen all cookie. Falls ihr aberkennen all cookies, w?hlt Funktion cookies Abschaltung in euer Browser, euch es kann abfordern abermals zu einf?hren Information an websites h?ufig und einige Seltsamkeiten website k?nnen sein unzug?nglich.');

INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Confidentiel');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Rajeuni dans un novembre 2015');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Woden-sims.hol.es (un "site" pr?tendu) compara?t une plate-forme un commerce ?lectronique principalement se utilise un individus gestion pour un d?barras ?lectronique Commerce et un Utilisation professionnelle pareil commun?ment non pr?voient une collecte une information un visages personnelle. Woden Sims Reconna?tre une gravit? confidentiel, et aussi une gravit? une conservation confidentiel une information personnelle. Cette politique confidentiel ?pand se un produits et un bienfaits, accordent nous entiers, et installe, comme nous pouvons amasser, utiliser et d?celer une information dans une attitude un usagers un sites.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Vous peuvent utiliser nos bienfaits et un produits ? travers un agencement mobile ou ? travers un annexes et un optimis?s sites mobiles mobiles. Cette politique confidentiel aussi applique se contre un recours nos produits et un bienfaits pareil.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Une ''collecte une information');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Votre confidentiel beaucoup essentiel pour nous, et nous adopt?mes un mesures, pour gager, que nous non amassons une davantage information de vous, que ce indispensable pour nous, pour accorder vous nos bienfaits et pour une d?fense votre une comptabilit? enregistrement.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Information, y compris, mais non borne se, un nom un usager, une adresse, une chambre un t?l?phone, une chambre Fax, une adresse un courriel, un pans, une date et / ou un ans une naissance et un coutume pr?dilections (Une un "enregistrement information") peuvent ?tre assembl? un moment un enregistrement un usager sur un sites.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Dans une connexion avec un ne importe quel accommodement et un un comptants bienfaits ou un bienfaits selon nos sch?mas une d?fense un client?les nous accordons un sites, une information, inclus, mais non borne se, une banque une chambre un additions, un additions et une livraison une information, un chambres un un cr?dits / un d?bets cartes et une date une p?remption une action et suivi une information de ch?ques ou un mandats (Une "information selon une addition") argent?s peut-?tre assembl?, parmi autres, contribuer une vente et un achat, et aussi un r?glements un achat prix une production ou un bienfaits dans un accommodements sur ou achet? ? travers un sites.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Nous enregistrons et conserver un enregistrements un usagers \ un "achat et feuillette une activit? sur notre plate-forme, y compris, mais non borne se IP- un adresses, un poncifs feuillette et un acheteur une attitude. Sauf celui, nous amassons un donn?es de un sites et un consommateurs un sites statistiques, y compris, mais non borne se, IP- une adresse, un logiciel navigateur, un syst?me, un logiciel et un un appareils attributs, un pages feuillet?es op?rationnel, une quantit? un sessions et un consommateurs (ensemble "est assis une information ") uniques.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Information de un enregistrements, un renseignements de un une comptabilit? enregistrement, une activit? une information, une information de un ?v?nement et feuillette un donn?es, en une r?gle une g?n?rale, portent contre un entit?s commerciales et ci-apr?s mixte d?nomment un Business Data (un "Business Data").');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Un ''recours un personnel donn?es');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Si vous accordent un ne importe quel donn?es personnelles contre nous, vous croient se accr?dit?rent nous une collecte, une conservation et un recours un donn?es, dont pour un conforment buts personnelles :');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Contr?les votre figure;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Cultures un enregistrement ? titre de un usager, accorde vous un journal dans ID pour un sites et un bienfaits et une administration un enregistrement;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'R?alisations un explorations ou une analyse statistique pour celui, pour am?liorer un contenu et libelle un sites, pour am?liorer nos offres un produit et un bienfaits et pour un un march?ages et publicitaire buts;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'sous une condition une r?ception votre acceptation dans une forme pareille, comme ce se demande dans une ad?quation avec une l?gislation applicable, nous pouvons utiliser votre nom, une chambre un t?l?phone, une adresse demeure, une adresse un courriel et une chambre Fax (Un "march?age un donn?es"), pour assurer aper?oit, un enqu?tes, alerte un produit, un communications et autres un march?ages mat?riaux vous, relatif contre un ?talages et un bienfaits, offrent nous sur un sites, y compris un or un fournisseurs un membre, un membre contr?l? un membres, un un libres membres un membre (chaque de jaunet un membres un fournisseurs, un membre contr?l? un membres et un un libres membres un membre, et un "membre" et dans un ensemble un "membre") auxiliaire un bienfaits avec ajout? un co?t un membre, et autres produits et un bienfaits, offrent nous de un temps ? autre contre un membres un sites;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'si vous b?n?volement d?poser une ne importe quel information sur un sites pour une publication sur un sites ? travers un un ?diteurs instruments, inclus, mais non borne se, un profil une compagnie, un catalogue un ?talages, un commerce conduit, un archives une procuration et un ne importe quel forum discuteur, cela vous, comme croit se, administra une acceptation une publication une information pareille sur un sites ("volontaire une information"); et aussi');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'que fait pareil une r?v?lation une information, dont peuvent se demander pour ne importe quel de un dessus buts ou dans une ad?quation avec une loi ou dans une attitude un tout griefs ou un un potentiels demandes contre nous.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Une ''diffusion un personnel donn?es');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Vous aussi acceptent, que nous pouvons ?venter et un mandat (est celui dans un cadres ou en dehors de une juridiction Woden Sims visage, vous contractent) vos donn?es fournisseurs, emploient se nous personnelles, pour aider nous avec une prestation vous nos bienfaits (y compris, mais non borne se une m?morisation un donn?es, un administrations un armatures un donn?es, un actions, un ?talages et un bienfaits un pr?ventions, un d?pendances une livraison, un agrandissement un acquittement un bienfaits et authentification est un membre et un bienfaits v?rification) (un "fournisseurs un bienfaits"). Section 2 au-dessus, et non dans leurs buts (inclus un march?age direct) propres');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Sous un besoin nous aussi pouvons d?celer et un mandat (est celui dans un cadres ou en dehors de une juridiction Woden Sims Visage, vous contractent) vos donn?es nos conseils, un collaborateurs un application de la loi organes professionnels, un assur?s, ?tatique et normatif et autres organisations pour un buts, vis? dans'' personnelles Section 2 au-dessus');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Entier volontaire une information peut-?tre public abordable sur un sites et, donc, abordable pour un ne importe quel unusager. Ne importe quel volontaire une information, dont vous accordent nous devient un apanage un public une information, et vous abandonner de un tout droits une propri?t? (inclus, mais non borne se un droits confidentiel et un copyright) dans une information pareille. Vous doivent d?ployer un m?nagement sous une acceptation une d?cision branchent soi une information personnelle ou confidentiel dans volontaire une information, dont vous accordent nous.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Nous pouvons accorder une information statistique un intervenants, mais lorsque nous faisons ce, nous non accordons une personnel information de sans votre autorisation.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Nous pouvons partager se une information de un une comptabilit? enregistrement avec un bocaux ou un fournisseurs pour celui, pour vos accommodements sur un sites doit ?tre parachev?. Sauf celui, nous pouvons utiliser votre une comptabilit? information, pour assigner votre une honorabilit? et, dans un processus une d?finition pareille, nous, ?ventuellement, se demande, pour faire une information pareille Account abordable un bocaux ou un un cr?dits agences. Alors comme nous sur un lieu un technologies et un proc?dures internes mise ? jour, pour conserver une information de votre addition et autres donn?es personnelles dans une s?curit? de un malfaiteurs, est aucune garantie, que une technologie ou un proc?dures pareille peuvent ?liminer entier risques un vol, une perte ou un recours d?fectueux.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Mesures une s?curit?');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Nous utilisons un commercialement judicieuses m?thodes une s?curit? enti?res pour conjure un non autoris? acc?s contre un sites, pour un maintien une exactitude un donn?es et assure un recours une information correct nous conduite.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Pour un usagers d?pos?s un sites, une un enregistrement information et une information une addition (si tel se ont) peuvent ?tre feuillet? et ?dit? avec une aide Account, dont infraudable mot de passe. Nous recommandons vous non divulguer leur mot de passe une personne. Notre personnel jamais non est demander votre mot de passe dans un t?l?phoniques sonneries ou un courriel ind?sirable ind?sirables. Si vous d?croisent un ordinateur avec autre, vous non doivent choisir, pour conserver une un enregistrement information (par exemple, ID un usager et mot de passe) sur ce le public ordinateur. Non oublient d?boucher de votre addition et occlure une fen?tre navigateur, lorsque vous achev?rent une session.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Aucune commande un donn?es ? travers un internet ou un ne importe quel sans fil filet peut-?tre garanti est absolument s?curitaire. Dans un r?sultat, alors comme nous t?chons d?fendre une information, dont nous conservons pour vous, nous non pouvons gager une s?curit? une ne importe quel information, dont vous d?l?guent nous, et vous font ce leur peur et un risque.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Cookie');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Nous utilisons "Cookie" pour une conservation une information d?termin?e de vous, et piste une visite un curiosit?s. C''est une non raret? pour Sites Web, pour utiliser Cookie pour une augmentation identifie leurs usagers.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', '"Cookie" d?pose vous-m?me un encombrement un donn?es, dont se d?l?gue votre navigateur et se conserve sur un disque votre ordinateur rigide petit. Un biscuit peut-?tre d?put? un disque votre ordinateur rigide, seul si vous sont un acc?s contre un sites avec une aide un ordinateur. Si vous non d?sactiver ou enlever Cookie, un coup chaque, lorsque vous utilisent un ordinateur seul et m?me pour un acc?s contre un sites, notre serveurs Web sont notifi? de une visite contre un sites et nous leur tour peut avoir un savoirs votre visite et un exemple votre recours.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'En une r?gle une g?n?rale, nous utilisons Cookie, pour identifier vous et permet nous');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Acc?s contre un enregistrement un donn?es ou un donn?es une addition, de la sorte que vous non doivent renouvelable ?tablir le;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Amassent un donn?es statistiques de un recours un usagers;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Explorations une visite mod?les et une aide un un buts affiches, bas? sur un int?r?ts un usagers publicitaires;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Aider nos coassoci?s, pour piste un usagers un visites un sites et un commandes technologiques;');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Suivi une progression et une participation dans un actions.');
INSERT INTO search VALUES ('', 'Confidentiel - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/privacy-policy/', 'Vous peuvent assigner, si et comme celui Cookie sont consacr? un accords navigateur, dont canonique dans un ordinateur, dont vous utilisent pour un acc?s contre un sites. Si vous choisissent, vous peuvent contrefaire un accords. Installe leurs pr?dilections dans navigateur, vous peuvent accepter un fichiers entiers ou vous peuvent choisir, pour empocher notifie, lorsque un biscuit dirige se ou vous peuvent choisir, pour d?cliner entier Cookie. Si vous refusent entier Cookie, choisit une fonction Cookie une coupure dans votre navigateur, vous peut se demander renouvelable ?tablir une information sur un sites dru et un particularit?s diverses un sites peuvent ?tre inabordable.');

INSERT INTO search VALUES ('', 'Store - Woden Sims', 'http://woden-sims.hol.es/store/', 'Ask what you want');
INSERT INTO search VALUES ('', 'Store - Woden Sims', 'http://woden-sims.hol.es/store/', 'Join us for free explains that covers all answers for your questions, like the basic tricks about the bought product up to professional skills. Come to our shop to use the product, see all the pros and cons as well as getting lots of advices.');
INSERT INTO search VALUES ('', 'Store - Woden Sims', 'http://woden-sims.hol.es/store/', 'Get the help you need');
INSERT INTO search VALUES ('', 'Store - Woden Sims', 'http://woden-sims.hol.es/store/', 'Ask us about what you should do about repairing. In each of our stores we have some professionals that are experts in an area of software. In order to get help as fast as possible, contact us by phone');
INSERT INTO search VALUES ('', 'Store - Woden Sims', 'http://woden-sims.hol.es/store/', 'Buy online. Then, pick up at our store');
INSERT INTO search VALUES ('', 'Store - Woden Sims', 'http://woden-sims.hol.es/store/', 'Make up an online order using the internet-shop and pick up in the store near you.');

INSERT INTO search VALUES ('', 'Склад - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/store/', 'Спрашивайте что либо');
INSERT INTO search VALUES ('', 'Склад - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/store/', 'Присоединяйтесь к нам бесплатно, объясняет, что охватывает все ответы на ваши вопросы, как основные хитрости о купленной продукции до профессиональных навыков. Приходите в наш магазин, чтобы использовать продукт, увидеть все плюсы и минусы, а также получить много советов.');
INSERT INTO search VALUES ('', 'Склад - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/store/', 'Получите помощь которая Вам нужна');
INSERT INTO search VALUES ('', 'Склад - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/store/', 'Спросите нас о том, что вы должны сделать, о ремонте. В каждом из наших магазинов у нас есть некоторые профессионалы, которые являются экспертами в области программного обеспечения. Для того, чтобы получить помощь как можно быстрее, свяжитесь с нами по телефону');
INSERT INTO search VALUES ('', 'Склад - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/store/', 'Купите онлайн. Затем подобрать в нашем магазине');
INSERT INTO search VALUES ('', 'Склад - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/store/', 'Сделайте онлайн-заказ при помощи интернет-магазина и заберите в магазине возле Вас.');

INSERT INTO search VALUES ('', 'D?p?t - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/store/', 'Demandent que ou');
INSERT INTO search VALUES ('', 'D?p?t - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/store/', 'Adh?rent contre nous ? un titre gracieux, explique, que embo?te un r?ponses enti?res vos questions, comme un astuces essentielles de une production achet?e avant un habitudes professionnelles. Arrivent notre boutique, pour utiliser un produit, apercevoir entier pros et un moinss, et aussi empocher un beaucoup conseils.');
INSERT INTO search VALUES ('', 'D?p?t - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/store/', 'Empochent une aide dont vous besoin');
INSERT INTO search VALUES ('', 'D?p?t - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/store/', 'Demandent nous de celui, que vous doivent faire, de un d?pannage. Dans chaque de nos boutiques contre nous sont un professionnels, dont comparaissent un experts dans une r?gion un logiciel divers. Pour celui, pour empocher une aide comme on peut prompt, embarrassent se avec nous t?l?phoniquement');
INSERT INTO search VALUES ('', 'D?p?t - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/store/', 'Ach?tent en ligne. Ensuite assortir dans notre boutique');
INSERT INTO search VALUES ('', 'D?p?t - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/store/', 'Font une commande en ligne sous une aide une boutique en ligne et retirent dans une boutique devant vous.');

INSERT INTO search VALUES ('', 'Ablage - Woden Sims (DE)', 'http://woden-sims.hol.es/de/store/', 'Abfrage da? oder');
INSERT INTO search VALUES ('', 'Ablage - Woden Sims (DE)', 'http://woden-sims.hol.es/de/store/', 'Einstimme in uns entsch?digungslos, erkl?rt, da? ergreift all Antworten auf euere Fragen, als haupts?chliche Listen ?ber gekaufter Produkte bis fachliche Fertigkeiten. Herkomm in unseren Kaufladen, auf da? zu ausnutzen Produkt, all Plus und Minus zu sehen, sowie zu ?bernehmen reich Anraten.');
INSERT INTO search VALUES ('', 'Ablage - Woden Sims (DE)', 'http://woden-sims.hol.es/de/store/', '?bernimm Aushilfe das Euch ist n?tig');
INSERT INTO search VALUES ('', 'Ablage - Woden Sims (DE)', 'http://woden-sims.hol.es/de/store/', 'Befrage uns ?ber das, da? ihr erledigen m?ssen, ?ber Reparaturen. In jeder aus unseren Kaufl?den bei uns sind einige Berufsspieler, die Experten in Gebiet der Programmsversorgung spuken. Dazu, auf da? zu ?bernehmen Aushilfe als es darf schnell, einla? sich mit wir durch Draht');
INSERT INTO search VALUES ('', 'Ablage - Woden Sims (DE)', 'http://woden-sims.hol.es/de/store/', 'Kaufe Online. Darauf zu auflesen in unserem Kaufladen');
INSERT INTO search VALUES ('', 'Ablage - Woden Sims (DE)', 'http://woden-sims.hol.es/de/store/', 'Erledige Online-Bestellung mittels Internet-Speicher und wegnimm in Kaufladen an Ihnen.');

INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Welcome to Woden Sims Support');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'We are here to help you');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Our Main support community:');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Email: serdiuk.oleksandr@gmail.com');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Phone: (095) 094 82 68');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Address: 5 Knyajiy zaton, Kyiv, Ukraine 02095');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Contact Us');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'We are going to help you with any issues with products, shipping details, orders and much more! You could get support by Phone, email, contact form or just in our product center with our customers');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Find your order');
INSERT INTO search VALUES ('', 'Support - Woden Sims', 'http://woden-sims.hol.es/support/', 'Check the status of your Order See if the product approved and much more!');

INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Служба поддержки Woden Sims');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Мы тут что бы помочь Вам');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Наш главный персонал:');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Почта: serdiuk.oleksandr@gmail.com');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Телефон: (095) 094 82 68');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Адрес: 5 Knyajiy zaton, Kyiv, Ukraine 02095');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Свяжитесь с нами');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Найти Ваш заказ');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Мы собираемся, чтобы помочь вам с любыми вопросами, с продуктами, судоходных деталей, заказов и многое другое! Вы можете получить поддержку по телефону, электронной почте, контактную форму или просто в нашем центре с нашими клиентами');
INSERT INTO search VALUES ('', 'Поддержка - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/support/', 'Проверить состояние заказа. Посмотреть если заказ одобрен и многое другое!');

INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Service une adh?sion Woden Sims');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Nous ici que aider vous');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Notre personnel capital:');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Un courrier: serdiuk.oleksandr@gmail.com');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Un t?l?phone: (095) 094 82 68');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Adresse: 5 Knyajiy zaton, Kyiv, Ukraine 02095');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Embarrassents');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Retrouver votre commande');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Nous assemblons se, pour aider vous avec un ne importe quel questions, avec un produits, un chromes, un commandes navigables et beaucoup de chose autre! Vous peuvent empocher une adh?sion t?l?phoniquement, un courriel, une un contact forme ou simplement dans notre centre avec nos clients');
INSERT INTO search VALUES ('', 'Soutien - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/support/', 'Contr?ler un ?tat une commande. Regarder si une commande approuv? et beaucoup de chose autre!');

INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Dienst der Aufrechterhaltung Woden Sims');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Wir hier was zu aufhelfen Euch');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Unser kardinales Personal:');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Post: serdiuk.oleksandr@gmail.com');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Fernsprecher: (095) 094 82 68');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Adresse: 5 Knyajiy zaton, Kyiv, Ukraine 02095');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Einla? sich mit wir');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Eueren ''Auftrag zu finden');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Befund des Auftrags'' zu ''durchsuchen. Falls Auftrag ist ''gebilligt zu anblicken und vieler anderer!');
INSERT INTO search VALUES ('', 'Aufrechterhaltung  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/support/', 'Wir anschicken sich, auf da? zu aufhelfen euch mit beliebigen Fragen, mit Produkten, schiffbare Details, Auftr?ge und vieler anderer! Ihr k?nnen ?bernehmen Aufrechterhaltung durch Draht, elektronische Post, Kontaktsausgestaltung oder einfach in unserem Kern mit unseren Kunden');

INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Thin. Powerful. Retina development is amazing');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Move ahead. Get some technology love');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Moving in lockstep with future');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Something great to watch');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'And thats where TV on your big screen is headed. The new Apple TV is designed around this reality. And the Siri Remote with Touch surface takes the effort out of searching through all these Apps to find something great to watch.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Easy to use');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Its really easy to use with most popular apps like Netflix, HBO. Amazing HD will catch your eyes');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Apple TV and awesome');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Games and Apps on TV gonna be excited');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Lets look at big, high resolution games that makes you feel excited, thrilled. Apps can absolutely flip your life from routine, dreary to entire, outright way of being.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims', 'http://woden-sims.hol.es/tv/', 'Also, you might be interested in ShowTop');

INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Тонкий. Мощьный. Ретинное развитие прекрасно');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Двигайтесь вперед. Получите не много любви к технологиям');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Двигаясь нога в ногу с будущим');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Что-то большое, чтобы посмотреть');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'И тот, где телевидение на большом экране возглавляет. Новый Apple TV, строится вокруг этой реальности. И Дистанционное Сири с сенсорным поверхности занимает усилия из поиска по всем этим Apps, чтобы найти что-то большое, чтобы посмотреть.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Легкий в использывании');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Его очень легко использовать с большинством популярных приложений, таких как Netflix, HBO. Удивительная HD будет ловить ваши глаза');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Apple TV и что-либо');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Игры и Приложения на TV держит Вас в восторге');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Давайте посмотрим на больших, высоких игр разрешением, что делает вас чувствовать себя рады, рады. Приложения могут абсолютно перевернуть вашу жизнь от рутины, скучно, чтобы весь, прямой способ бытия.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/tv/', 'Вам так же должен быть интересен ShowTop');

INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'D?nner. Kraftvoll. Retina Aufw?rtsentwicklung ist ausgezeichnet');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Fortbewege sich. ?bernimm nicht viel Liebe zu Technologien');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Bewegt sich Bein in Bein mit Zukunft');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Ein gro?er, auf da? zu anblicken');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Und das, wo Fernsehen an gro?em Bildschirm anf?hrt. Neuer Apple TV, baut um diese Realit?t. Und Distanz Siri mit ber?hren Bildfl?che einnimmt Anstrengungen aus Suche all dieser Apps, auf da? zu finden ein gro?er, auf da? zu anblicken.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Leichter in Ausnutzung');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Ihn es ist blitzeinfach, mit Mehr der allbeliebten Anbiegungen zu ausnutzen, derart als Netflix, HBO. Verwunderlicher HD ist zu fangen euere Augen');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Apple TV und etwas');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Spiele und Anbiegungen an TV h?lt Sie in Begeisterung');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Lassen Sie uns aufsehen zu gro?e, hocher Spiele Erlaubnis, da? macht euch zumute froh. Anbiegungen k?nnen absolut umst?lpen euer Leben ab Routine, langweilig, auf da? all, aufrechte Art des Daseins.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/tv/', 'Ihr desgleichen mu? sein interessant ShowTop');

INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'D?licat. Puissant. Retina Un ''d?veloppement beau');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Se ''avancent. Empochent non beaucoup Une ''affection contre un technologies');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Avance un pied un pied avec un avenir');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Quelque chose grand, pour regarder');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Et celui, o? une t?l? sur un ?cran grand t?tes. Nouveau Apple TV, aligne se autour cette r?alit?. Et une distance Siri avec toucher une aire emploie un efforts de une qu?te selon entier ce Apps, pour retrouver quelque chose grand, pour regarder.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Ais? dans un recours');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Le beaucoup facilement utiliser avec une majorit? un annexes populaires, pareil comme Netflix, HBO. ?tonnant HD est p?cher vos yeux');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Apple TV et rien');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Un jeux et un annexes sur TV d?tient vous enchant?');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'LET regardons un jeux grands, aigu une autorisation, que fait vous porter. Un annexes peuvent absolument retourner votre vie de une routine, ennuyeusement, pour entier, une fa?on un ?tre directe.');
INSERT INTO search VALUES ('', 'TV  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/tv/', 'Vous de la sorte doit ?tre int?ressant ShowTop');

INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden Sims Terms of Use');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Please, read these terms and conditions carefully.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Application and Acceptance of the Terms');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Your use of the Site and Woden-sims.hol.es services, software and products (collectively the as the "Services" hereinafter) is subject to the terms and conditions contained in this document as well as the Privacy Policy ,the Product Listing Policy and any other rules and policies of the Sites that Woden-sims.hol.es may publish from time to time. This document and such other rules and policies of the Sites are collectively referred to below as the"Terms"By accessing the Sites or using the Services, you agree to accept and be bound by the Terms. Please do not use the Services or the Sites if you do not accept all of the Terms.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'You may not use the Services and may not accept the Terms if (a) you are not of legal age to form a binding contract with Woden-sims.hol.es, or (b) you are not permitted to receive any Services under the laws of any country / regions including the country / region in which you are resident or from which you use the Services.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'You acknowledge and agree that Woden-sims.hol.es may amend any Terms at any time by posting the relevant amended and restated Terms on the Sites. By continuing to use the Services or the Sites, you agree that the amended Terms will apply to you.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'If Woden-sims.hol.es has posted or provided a translation of the English language version of the Terms, you agree that the translation is provided for convenience only and that the English language version will govern your uses of the Services or the Sites.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'You may be required to enter into a separate agreement, whether online or offline, with Woden-sims.hol.es or our affiliate for any Service("Additional Agreements")If there is any conflict or inconsistency between the Terms and an Additional Agreement, the Additional Agreement shall take precedence over the Terms only in relation to that Service concerned.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'The Terms may not otherwise be modified except in writing by an authorized officer of Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Provision of Services');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'The Woden-sims.hol.es contracting entity that you are contracting with is Woden-sims.hol.es Kyiv Limited if you are a registered member of the Sites and registered or resident in Kyiv. If you registered in a jurisdiction outside Kyiv, you are contracting with Woden-sims.hol.es Ukraine E-Commerce Private Limited (incorporated in Ukraine). If you registered in or are a resident of mainland Ukraine, you are contracting with Woden Sims OOO, Ltd. As some or part of the Services may be supported and provided by affiliates of Woden-sims.hol.es, Woden-sims.hol.es may delegate some of the Services to its affiliates, particularly Woden-sims.hol.es(Europe) Limited incorporated in the United Kingdom, who you agree may invoice you for their part of the Services.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'You must register as a member on the Sites in order to access and use some Services. Further, Woden-sims.hol.es reserves the right, without prior notice, to restrict access to or use of certain Services (or any features within the Services) to paying Users or subject to other conditions that Woden-sims.hol.esmay impose in our discretion.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Services (or any features within the Services) may vary for different regions and countries. No warranty or representation is given that a particular Service or feature or function thereof or the same type and extent of the Service or features and functions thereof will be available for Users. Woden-sims.hol.es may in our sole discretion limit, deny or create different level of access to and use of any Services (or any features within the Services) with respect to different Users.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden-sims.hol.es may launch, change, upgrade, impose conditions to, suspend, or stop any Services (or any features within the Services) without prior notice except that in case of a fee-based Service, such changes will not substantially adversely affect the paying Users in enjoying that Service.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Some Services may be provided by Woden-sims.hol.es affiliates on behalf of Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Users Generally');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'As a condition of your access to and use of the Sites or Services, you agree that you will comply with all applicable laws and regulations when using the Sites or Services.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'You agree to use the Sites or Services solely for your own private and internal purposes. You agree that (a) you will not copy, reproduce, download, re-publish, sell, distribute or resell any Services or any information, text, images, graphics, video clips, sound, directories, files, databases or listings, etc available on or through the Sites (the "Site Content"), and (b) you will not copy, reproduce, download, compile or otherwise use any Site Content for the purposes of operating a business that competes with Woden-sims.hol.es, or otherwise commercially exploiting the Site Content. Systematic retrieval of Site Content from the Sites to create or compile, directly or indirectly, a collection, compilation, database or directory (whether through robots, spiders, automatic devices or manual processes) without written permission from Woden-sims.hol.es is prohibited. Use of any content or materials on the Sites for any purpose not expressly permitted in the Terms is prohibited.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'You must read Woden-sims.hol.es Privacy Policy which governs the protection and use of personal information about Users in the possession of Woden-sims.hol.es and our affiliates. You accept the terms of the Privacy Policy and agree to the use of the personal information about you in accordance with the Privacy Policy.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden-sims.hol.es may allow Users to access to content, products or services offered by third parties through hyperlinks (in the form of word link, banners, channels or otherwise), API or otherwise to such third parties'' web sites. You are cautioned to read such web sites'' terms and conditions and/or privacy policies before using the Sites. You acknowledge that Woden-sims.hol.es has no control over such third parties'' web sites, does not monitor such web sites, and shall not be responsible or liable to anyone for such web sites, or any content, products or services made available on such web sites.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Member Accounts');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'User must be registered on the Sites to access or use some Services (a registered User is also referred to as a"Member"below)Except with Woden-sims.hol.es approval, one User may only register one member account on the Sites. Woden-sims.hol.es may cancel or terminate a User''s member account if Woden-sims.hol.es has reasons to suspect that the User has concurrently registered or controlled two or more member accounts. Further, Woden-sims.hol.es may reject Use''s application for registration for any reason.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Upon registration on the Sites, Woden-sims.hol.es shall assign an account and issue a member ID and password (the latter shall be chosen by a registered User during registration) to each registered User. An account may have a web-based email account with limited storage space for the Member to send or receive emails.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'A set of Member ID and password is unique to a single account. Each Member shall be solely responsible for maintaining the confidentiality and security of your Member ID and password and for all activities that occur under your account. No Member may share, assign, or permit the use of your Member account, ID or password by another person outside of the Member''s own business entity. Member agrees to notify Woden-sims.hol.es immediately if you become aware of any unauthorized use of your password or your account or any other breach of security of your account.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Member agrees that all activities that occur under your account (including without limitation, posting any company or product information, clicking to accept any Additional Agreements or rules, subscribing to or making any payment for any services, sending emails using the email account or sending SMS) will be deemed to have been authorized by the Member.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Breaches by Members');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden-sims.hol.es reserves the right in our sole discretion to remove, modify or reject any User Content that you submit to, post or display on the Sites which we reasonably believe is unlawful, violates the Terms, could subject Woden-sims.hol.es or our affiliates to liability, or is otherwise found inappropriate in Woden-sims.hol.es opinion');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'If any Member breaches any Terms or if Woden-sims.hol.es has reasonable grounds to believe that any Member is in breach of any the Terms,Woden-sims.hol.es shall have the right to impose a penalty against the Member, or suspend or terminate the Member''s account or subscription of any Service without any liability to the Member. Woden-sims.hol.es shall also have the right to restrict, refuse or ban any and all current or future use of any other Service that may be provided by Woden-sims.hol.es.The penalties that Woden-sims.hol.esmay impose include, among others, warning, removing any product listing or other User Content that the Member has submitted, posted or displayed, imposing restrictions on the number of product listings that the Member may post or display, or imposing restrictions on the Member''s use of any features or functions of any Service for such period as Woden-sims.hol.es may consider appropriate in our sole discretion.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden-sims.hol.es reserves the right to cooperate fully with governmental authorities, private investigators and/or injured third parties in the investigation of any suspected criminal or civil wrongdoing. Further, Woden-sims.hol.es may disclose the Member''s identity and contact information, if requested by a government or law enforcement body, an injured third party, or as a result of a subpoena or other legal action. Woden-sims.hol.es shall not be liable for damages or results arising from such disclosure, and Member agrees not to bring any action or claim against Woden-sims.hol.esfor such disclosure');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Limitation of Liability');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'TO THE MAXIMUM EXTENT PERMITTED BY LAW, THE SERVICES PROVIDED BY WODEN-SIMS.HOL.ES ON OR THROUGH THE SITES ARE PROVIDED "AS IS", "AS AVAILABLE" AND "WITH ALL FAULTS", AND WODEN-SIMS.HOL.ES HEREBY EXPRESSLY DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO, ANY WARRANTIES OF CONDITION, QUALITY, DURABILITY, PERFORMANCE, ACCURACY, RELIABILITY, MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. ALL SUCH WARRANTIES, REPRESENTATIONS, CONDITIONS, AND UNDERTAKINGS ARE HEREBY EXCLUDED.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'TO THE MAXIMUM EXTENT PERMITTED BY LAW, WODEN-SIMS.HOL.ES MAKES NO REPRESENTATIONS OR WARRANTIES ABOUT THE VALIDITY, ACCURACY, CORRECTNESS, RELIABILITY, QUALITY, STABILITY, COMPLETENESS OR CURRENTNESS OF ANY INFORMATION PROVIDED ON OR THROUGH THE SITES; WODEN-SIMS.HOL.ES DOES NOT REPRESENT OR WARRANT THAT THE MANUFACTURE, IMPORTATION, EXPORT, DISTRIBUTION, OFFER, DISPLAY, PURCHASE, SALE AND/OR USE OF PRODUCTS OR SERVICES OFFERED OR DISPLAYED ON THE SITES DOES NOT VIOLATE ANY THIRD PARTY RIGHTS; AND WODEN-SIMS.HOL.ES MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING ANY PRODUCT OR SERVICE OFFERED OR DISPLAYED ON THE SITES.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Any material downloaded or otherwise obtained through the Sites is done at each User''s sole discretion and risk and each User is solely responsible for any damage to Woden-sims.hol.es computer system or loss of data that may result from the download of any such material. No advice or information, whether oral or written, obtained by any User from Woden-sims.hol.es or through or from the Sites shall create any warranty not expressly stated herein.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Each User hereby agrees to indemnify and save Woden-sims.hol.es, our affiliates, directors, officers and employees harmless, from any and all losses, claims, liabilities (including legal costs on a full indemnity basis) which may arise from such User''s use of the Sites or Services (including but not limited to the display of such User''s information on the Sites) or from your breach of any of the terms and conditions of the Terms. Each User hereby further agrees to indemnify and save Woden-sims.hol.es, our affiliates, directors, officers and employees harmless, from any and all losses, damages, claims, liabilities (including legal costs on a full indemnity basis) which may arise from User''s breach of any representations and warranties made by User to Woden-sims.hol.es, including but not limited to those set forth in Section 5 hereunder.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Notices');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'All legal notices or demands to or upon Woden-sims.hol.es shall be made in writing and sent to Woden-sims.hol.es personally, by courier, certified mail, or facsimile to the following entity The notices shall be effective when they are received by Woden-sims.hol.es in any of the above-mentioned manner.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'You agree that all agreements, notices, demands, disclosures and other communications that Woden-sims.hol.es sends to you electronically satisfy the legal requirement that such communication should be in writing.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'General Provisions');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Subject to any Additional Agreements, the Terms constitute the entire agreement between you and Woden-sims.hol.es with respect to and govern your use of the Sites and Services, superseding any prior written or oral agreements in relation to the same subject matter herein.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden-sims.hol.es and you are independent contractors, and no agency, partnership, joint venture, employee-employer or franchiser-franchisee relationship is intended or created by the Terms.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'If any provision of the Terms is held to be invalid or unenforceable, such provision shall be deleted and the remaining provisions shall remain valid and be enforced.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden-sims.hol.es shall have the right to assign the Terms (including all of our rights, titles, benefits, interests, and obligations and duties in the Terms to any person or entity (including any affiliates of Woden-sims.hol.es). You may not assign, in whole or part, the Terms to any person or entity.');
INSERT INTO search VALUES ('', 'Terms of Use  - Woden Sims', 'http://woden-sims.hol.es/terms/', 'Woden-sims.hol.es failure to enforce any right or failure to act with respect to any breach by you under the Terms will not constitute a waiver of that right nor a waiver of Woden-sims.hol.es right to act with respect to subsequent or similar breaches.');

INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Правила использывания сайта Woden Sims');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Пожалуйста, прочитайте эти термины и условия внимательно.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Применение и принятие условий');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Ваше использывание сайта и Woden-sims.hol.es услуги, программное обеспечение и продукты (в совокупности, как "Сервисов" далее) является предметом условий, содержащихся в этом документе, а также Конфиденциальность ,список продуктов политики и любые другие правила и политики из сайтов, которые Woden-sims.hol.es может публиковать время от времени. Этот документ и другие подобные правила и политика Сайтов вместе именуются ниже как"Условия использывания"Заходя на сайты или с помощью услуги, вы соглашаетесь принять и соблюдать Условия. Пожалуйста, не используйте Услуги или Сайтов, если вы не принимаете все Правила.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Вы не вправе пользоваться Услугами и не можете принять Условия, если (а) вы не достигли установленного законом возраста для связывания контракт с Woden-sims.hol.es, или (б) вы не разрешается получать услуги в соответствии с законодательством любой страны / регионы, включая страны / региона, в котором вы находитесь, или из которого вы пользуетесь услугами.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Вы признаете и соглашаетесь, что Woden-sims.hol.es может изменить любые условия в любое время, размещая соответствующие изменениями и дополнениями Условия на сайтах. Продолжая пользоваться Услугами или сайты, вы соглашаетесь, что измененные условия будут применяться к вам.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Если Woden-sims.hol.es опубликовал или предоставил перевод английской версии Условий, вы соглашаетесь, что такой перевод предоставляется только для удобства, и что английская версия будет регулируют использование Услуг или сайты.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Вам может потребоваться ввести в отдельном соглашении, будь то онлайн или в автономном режиме, с Woden-sims.hol.es или наша партнерская для любого услуг("Дополнительные соглашения")Если есть какой-то конфликт или противоречие между Правилами и Дополнительного Соглашения, Дополнительный Договор вступает приоритет над Правила только по отношению к этой службе заинтересованного.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Круг не может иначе быть изменены только в письменной форме уполномоченным должностным Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Предоставление услуг');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es contracting entity that you are contracting with i Woden-sims.hol.es Киев ограниченной, если Вы являетесь зарегистрированным членом сайтов, зарегистрированных и проживающих в Киеве. Если вы зарегистрированы в юрисдикции за пределами Киева, вы контрактов с Woden-sims.hol.es Украина E-Commerce Private Limited (зарегистрирована в Украине). Если вы зарегистрированы в или житель материковой Украины, вы заключаете договор с ООО Woden Sims, Ltd. как некоторые или части Услуг, может быть поддержана и при условии, филиалов Woden-sims.hol.es, Woden-sims.hol.es может делегировать некоторые из услуг для своих филиалов, особенно Woden-sims.hol.es(Европа) Лимитед, зарегистрированной в Соединенном Королевстве, который вы согласны могут выставить вас за их части Услуг.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Вы должны зарегистрироваться в качестве члена на сайтах для того, чтобы получить доступ и использовать некоторые услуги. В дальнейшем, Woden-sims.hol.es оставляет за собой право, без предварительного уведомления, чтобы ограничить доступ или использование определенных Услуг (или каких-либо особенностей в рамках услуги) платить пользователей или подвергать других условий, которые Woden-sims.hol.esможет наложить на наше усмотрение.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Услуги (или какие-то особенности в рамках служб) могут отличаться для разных регионов и стран. Никаких гарантий или репрезентативности не учитывая то, что конкретная услуга или функция, или их функции или тот же тип и степень услуг или функций и их функций будут доступны для пользователей. Woden-sims.hol.es может по своему собственному усмотрению предела, отрицать или зарегистрироваться различный уровень доступа и использования любых Услуг (или каких-либо особенностей в рамках услуги) по отношению к различным пользователям.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es может начать, изменить, обновить, навязать условия для, приостановить или прекратить какие-либо услуги (или каких-либо функций в рамках Услуг) без предварительного уведомления, за исключением, что в случае платной основе услуг, такие изменения не будут существенно негативно повлиять на платных пользователей в наслаждаясь этой службы.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Некоторые услуги могут быть предоставлены Woden-sims.hol.es филиалы по имени Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Обычно для пользователей');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'В качестве условия Вашего доступа и использования Сайты или Услуги, вы соглашаетесь, что вы будете соблюдать все применимые законы и правила при использовании сайты или услуги.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Вы соглашаетесь использовать сайты или услуги исключительно для собственных частных и внутренних целей. Вы соглашаетесь, что (а) вы не будете копировать, воспроизводить, загружать, повторно публиковать, продавать, распространять или продавать какие-либо услуги или любой информации, текст, изображения, графики, видеоклипов, звуковых, каталоги, файлы, базы данных или списки, и т.д. доступны или через сайты ("Контент сайта"), и (б) вы не будете копировать, воспроизводить, загружать, компилировать или иным образом использовать материалы сайта для целей ведения бизнеса, который конкурирует Woden-sims.hol.es, или иным образом коммерчески эксплуатировать содержание сайта. Систематический поиск содержания сайта с сайтов для создания или компиляции, прямо или косвенно, сбор, компиляция, базы данных или каталог (через роботы, пауки, автоматических устройств или ручных процессов) без письменного разрешения Woden-sims.hol.es запрещено. Использование любых материалов, контента или на сайтах в любых целях, прямо не разрешенных в Условиях запрещено.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Вы должны прочитать Woden-sims.hol.es Конфиденциальность который регулирует охрану и использование личной информации о пользователях в распоряжении Woden-sims.hol.es и наши филиалы. Вы принимаете условия Конфиденциальность и согласиться на использование личной информации о вас в соответствии с Конфиденциальность.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es может позволить пользователям доступ к контенту, продукции или услуг, предлагаемых третьими лицами через гиперссылки (в виде ссылок слово, баннеров, каналов или иным образом), API или иначе таких сайты третьих лиц. Предупреждаем читать такие веб-сайтов \ "условия и / или политику конфиденциальности перед использованием сайтов. Вы признаете, что Woden-sims.hol.es не имеет никакого контроля над такими третьими лицами веб-сайты, не отслеживает такие веб-сайты и не несет ответственности или обязательств ни перед кем за такие веб-сайты или любого содержания, продукции или услуг, предоставляемых на таких веб-сайтов.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Аккаунты учасников');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Пользователь должен быть зарегистрирован на сайтах, чтобы получить доступ или использовать некоторые услуги (зарегистрированный Пользователь также упоминается как"Учасник"ниже)За исключением Woden-sims.hol.es утверждение, один пользователь может зарегистрировать только одну учетную запись члена на сайты. Woden-sims.hol.es может отменить или прекратить учетную запись члена Пользователя, если Woden-sims.hol.es есть причины подозревать, что Пользователь одновременно зарегистрированы или контролируется двумя или более счетов членов. В дальнейшем, Woden-sims.hol.es может отклонить Использует заявку на регистрацию по любой причине.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'После регистрации на сайтах, Woden-sims.hol.es должен назначить счет и выдать членам ID и пароль (последний должен быть выбран зарегистрированный пользователь при регистрации) для каждого зарегистрированного пользователя. Счет может иметь веб-учетной записи электронной почты с ограниченным пространством для хранения член отправить или получить электронную почту.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Набор членов и пароля является уникальным для одной учетной записи. Каждый Участник несет полную ответственность за сохранение конфиденциальности и безопасности вашего ID пользователя и пароль, и для всех видов деятельности, которые происходят под вашей учетной записью. Ни один член не может делиться, уступать или разрешить использование вашей учетной записи, ID или пароля другим лицом за пределами членов собственной предпринимательской деятельности. Пользователь соглашается с тем, чтобы уведомить Woden-sims.hol.es немедленно, если вам стало известно о любом несанкционированном использовании вашего пароля или вашей учетной записи или о любом другом нарушении безопасности Вашего счета.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Пользователь соглашается с тем, что все мероприятия, которые происходят под вашей учетной записью (в том числе, без ограничения, размещение любой компании или информацию о продукте, кликнув принимать какие-либо дополнительные соглашения или правил, подписавшись или делать любую компенсацию за любые услуги, отправка электронной почты с помощью учетной записи электронной почты или отправки SMS ) будет считаться уполномоченным члена.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Нарушения учасников');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es оставляет за собой право по собственному усмотрению удалять, изменять или отклонить любой Пользовательский контент, который вы представить, по почте или отображения на сайты, которые мы обоснованно считают, является незаконным, нарушает Условия, могут подвергнуть Woden-sims.hol.es или наши филиалы в ответственности, или иным образом нашли неуместным в Woden-sims.hol.es мнение');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Если какой-либо член нарушает какие-либо условия или если Woden-sims.hol.es имеет разумные основания полагать, что какой-либо участник нарушает любое Условиями,Woden-sims.hol.es имеет право налагать штраф на члена или приостановить или прекратить счета пользователя или подписки любого услуг без какой-либо ответственности в член. Woden-sims.hol.es также имеют право ограничить, отказаться или запретить любые и все текущее или будущее использование любого другого сервиса, который может быть обеспечен Woden-sims.hol.es.Штрафы, что Woden-sims.hol.esможет наложить включают, среди прочего, предупреждение, устранение любой список продуктов или другой Пользовательский контент, что страна-член, представленное, размещенные или отображается, вводить ограничения на количество перечислений продукта, что член может размещать или дисплея, или наложения ограничений на использование этого члена ни возможностей или функций любого услуг на такой срок, Woden-sims.hol.es сочтет целесообразным по нашему усмотрению.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es оставляет за собой право в полной мере сотрудничать с государственными органами, частными детективами и / или пострадавших третьих лиц в расследовании любого подозреваемого уголовного или гражданского правонарушения. В дальнейшем, Woden-sims.hol.es может раскрыть личность и контактную информацию пользователя, по просьбе органа власти или правоохранительной, потерпевшего третьего лица, или в результате вызов в суд или другой судебный иск. Woden-sims.hol.es не несет ответственности за ущерб или результаты, вытекающие из такого раскрытия, и член обязуется не принесет каких-либо действий или иск Woden-sims.hol.esдля такого раскрытия');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Ограничение ответственности');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'В МАКСИМАЛЬНО РАЗРЕШЕНО ЗАКОНОМ, услуги, предоставляемые WODEN-SIMS.HOL.ES На или через сайты предоставляются "КАК ЕСТЬ", "КАК ДОСТУПНО" И "СО ВСЕМИ ОШИБКАМИ" И WODEN-SIMS.HOL.ES ОТКАЗЫВАЕТСЯ ОТ ЛЮБЫХ ГАРАНТИЙ, ЯВНЫХ ИЛИ ПОДРАЗУМЕВАЕМЫХ, ВКЛЮЧАЯ, НО НЕ ОГРАНИЧИВАЯСЬ, ЛЮБЫЕ ГАРАНТИИ состояние, качество, долговечность, производительность, точность, надежность, КОММЕРЧЕСКОЙ ЦЕННОСТИ И ПРИГОДНОСТИ ДЛЯ КОНКРЕТНЫХ ЦЕЛЕЙ. ВСЕ ТАКИЕ ГАРАНТИИ, ПРЕДСТАВЛЕНИЯ, УСЛОВИЯ, ОБЯЗАТЕЛЬСТВА И НАСТОЯЩИМ ИСКЛЮЧАЮТСЯ.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'В МАКСИМАЛЬНО РАЗРЕШЕНО ЗАКОНОМ, WODEN-SIMS.HOL.ES НЕ ДАЕТ НИКАКИХ ГАРАНТИЙ О достоверности, точности, правильности, надежности, качества, стабильности, полноты или СОВРЕМЕННОСТИ любой информации, предоставленной на или через САЙТЫ; WODEN-SIMS.HOL.ES НЕ ГАРАНТИРУЕТ, ЧТО производство, импорт, экспорт, распределение, предложение, дисплей, Покупка, продажа и / или использования продукции или услуг, предлагаемых или отображаться на сайтах не нарушает прав третьих лиц; А ТАКЖЕ WODEN-SIMS.HOL.ES НЕ ДАЕТ НИКАКИХ ЗАЯВЛЕНИЙ ИЛИ ГАРАНТИЙ ЛЮБОГО РОДА В ОТНОШЕНИИ любого продукта или услуг, предложенных или отображается на сайтах.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Любой материал, загруженные или иным полученные через сайты делается по усмотрению каждого пользователя и риска, и каждый пользователь несет полную ответственность за любой ущерб, Woden-sims.hol.es компьютерная система или потери данных, которые могут возникнуть в результате загрузки любых таких материалов. Никакой совет или информация, в устной или письменной форме, полученные любым пользователем из Woden-sims.hol.es или через или из мест не создают никаких гарантий, прямо не указанных здесь.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Каждый пользователь соглашается с тем, чтобы освободить и спасти Woden-sims.hol.es, наши филиалы, директора, должностные лица и сотрудники безвредны, от любых и всех убытков, претензий, обязательств (в том числе судебные издержки на основе полного возмещения), которые могут возникнуть в результате использования такого пользователя Сайтов или Услуг (включая, но не ограничиваясь дисплее информация такого пользователя на Сайтах) или из нарушения любого из условий условий. Каждый Пользователь настоящим соглашается с тем, чтобы освободить и спасти Woden-sims.hol.es, наши филиалы, директора, должностные лица и сотрудники безвредны, от любых и всех убытков, ущерба, претензий, обязательств (в том числе судебные издержки на основе полного возмещения), которые могут возникнуть в результате нарушения Пользователем любых заявлений и гарантий, сделанных Пользователем Woden-sims.hol.es, в том числе, но не ограничиваясь тем, которые изложены в разделе 5 настоящего Договора.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Уведомления');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Все юридические уведомления или требования или в момент Woden-sims.hol.es должно быть сделано в письменной форме и направляется Woden-sims.hol.es лично, курьером, заказным письмом, по факсу или на следующий лица Уведомления должны быть эффективными, если они получены Woden-sims.hol.es в любом из вышеупомянутого вещества.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Вы соглашаетесь, что все соглашения, уведомления, требования, раскрытие и другие коммуникации, которые Woden-sims.hol.es посылает вам в электронном удовлетворить законное требование, что такая связь должна быть в письменной форме.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Основные положения');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'С учетом любых Дополнительных соглашений, Условия представляют собой полное соглашение между вами и Woden-sims.hol.es по отношению к и регулируют использование сайтов и служб, заменяет любые предшествующие письменные или устные договоренности в отношении же вопросу в данном документе');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es и вы независимые подрядчики, и ни одно агентство, партнерство, совместное предприятие, работник-работодатель или франчайзер франчайзи-отношения не предназначено или создано в соответствии с Условиями.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Если какое-либо положение Условий будет признано недействительным или неисполнимым, такое положение должно быть удалены, а остальные положения остаются в силе и будут соблюдаться.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es имеет право назначать членов (в том числе все наши права, титулы, льготы, интересов и обязательств и обязанностей в условиях любому физическому или юридическому лицу (в том числе каких-либо филиалов Woden-sims.hol.es). Вы не можете назначить, в целом или частично, Условия для любого физического или юридического лица.');
INSERT INTO search VALUES ('', 'Условия Использывания  - Woden Sims (RU)', 'http://woden-sims.hol.es/ru/terms/', 'Woden-sims.hol.es неисполнение каких-либо прав или бездействие в отношении любого нарушения вами в соответствии с Условиями, не означает отказ от этого права, ни отказ от Woden-sims.hol.es Право выступать с относительно последующих или подобных нарушений.');

INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Regeln das Nutzung Website Woden Sims');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Bitte, durchlies dieser Begriffe und Bedingungen aufmerksam.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Anwendung und ?bernahme der Bedingungen');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Euer Nutzung der Website und Woden-sims.hol.es Gefallen, Programmsversorgung und Produkte (in Ganze, als "Services" weiter) spukt Gegenstand der Bedingungen, die in diesem Dokument enthalten, sowie Konfidentieller ,der Artikellistungsrichtlinien und alle anderen Regeln und Richtlinien der Websites Woden-sims.hol.es kann publizieren dazwischen. Dieses Dokument und andere derartige Regeln und Politik Website zusammen nennen sich niedriger als"Bedingungen der Ausnutzung"Hineingeht auf websites oder anhand Gefallens, ihr beistimmen, und zu beachten Bedingungen zu annehmen. Bitte, unterschreit Gefallen oder Websites, falls ihr nicht annehmen all Regeln.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Ihr ist nicht berechtigt, Gefallen und nicht k?nnen annehmen Bedingungen zu ben?tzen, falls (а) ihr nicht erreichten angesetztes Gesetz Alter f?r Bindung Kontrakt mit Woden-sims.hol.es, oder (b) ihr es nicht darf bekommen Gefallen entsprechend Gesetzgebung des beliebigen Landes / Regionen, mitsamt L?nder / der Region, in die ihr sind, oder aus die ihr ben?tzen Gefallen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Ihr akzeptieren und beistimmen, da? Woden-sims.hol.es kann verraten beliebige Bedingungen zu jeder Stunde, disloziert angemessener ?nderungen und Erg?nzungen der Bedingung an website. Fortf?hrt, Gefallen oder website zu ben?tzen, ihr beistimmen, da? verratene Bedingungen sind zu anpassen sich zu euch.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Falls Woden-sims.hol.es ver?ffentlichte oder anheimstellte Nacherz?hlung der englischen Version der Bedingungen, ihr beistimmen, da? derart Nacherz?hlung anheimstellt allein zu der Bequemlichkeit, und da? englische Version ist nachstellen Ausnutzung der Gefallen oder website.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Euch es kann abfordern zu einf?hren in abgesondertem Abfindungsvertrag, sei es online oder in autonomem Regime, mit Woden-sims.hol.es oder unser partnerschaftlicher f?r beliebiger Gefallen("Zusatzabkommen")Falls ist irgendeiner Konflikt oder Unstimmigkeit zwischen Regeln und Zusatzabkommen, Erg?nzungs Vertrag beitritt Priorit?t ?ber Regel allein gegen?ber diesem Dienst interessierter.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Kreis nicht kann anderenfalls sein verratener allein in brieflicher Ausgestaltung erm?chtigter amtlicher Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Eingabe der Gefallen');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es contracting entity that you are contracting with i Woden-sims.hol.es Kiew beschr?nkter, falls Sie spuken registriertes Mitglied websites, das und wohnhafter in Kiew registriert ist. Falls ihr ist registriert in Zust?ndigkeit hinter Rahmen des Kiew, ihr Kontrakte mit Woden-sims.hol.es Ukraine E - Commerce Private Limited (registrierter in Ukraine). Falls ihr ist registriert in oder Anwohner der Festlandesukraine, ihr schlie?en Vertrag mit OOO Woden Sims, Ltd. als einiger oder Anteile der Gefallen, kann sein aufrechterhalten und mit unterer Bedingung, Nebenstellen Woden-sims.hol.es, Woden-sims.hol.es kann abordnen einiger aus Gefallen f?r ihrige Nebenstellen, besonders Woden-sims.hol.es(Europa) Limited, das in Gegattetem K?nigreich registriert ist, das ihr ist einverstanden k?nnen hinaussetzen euch vor ihre Anteile der Gefallen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Ihr m?ssen registrieren sich als Mitglied an website dazu, auf da? zu ?bernehmen Eingang und zu ausnutzen einige Gefallen. In dem weiteren, Woden-sims.hol.es bleibenl??t hinter selbst Anrecht, ohne vorher Benachrichtigung, auf da? zu begrenzen Eingang oder Ausnutzung der bestimmten Gefallen (oder irgendeine Seltsamkeiten in dem Rahmen Gefallens) zu bezahlen Benutzer oder aussetzen andere Bedingungen, die Woden-sims.hol.eskann st?lpen nach unserem Befinden.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Gefallen (oder irgendeine Seltsamkeiten in dem Rahmen Dienste) k?nnen unterscheiden sich f?r allerhande Regionen und L?nder. Keine B?rgschaften oder repr?sentativer nicht gerechneter das, da? konkreter Gefallen oder Funktion, oder ihre Funktionen oder selbes Baumuster und Grad der Gefallen oder Funktionen und ihre Funktionen sind zug?nglich f?r Benutzer. Woden-sims.hol.es kann ihriges eigenes Belieben Rahmen, oder zu registrieren sich diverses Niveau des Eingangs und Ausnutzung der beliebigen Gefallen (oder irgendeine Seltsamkeiten in dem Rahmen Gefallens) gegen?ber diversen Benutzern zu absprechen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es kann anfangen, zu verraten, zu erneuern, Bedingungen f?r zu aufzwingen, oder zu aufheben irgendeine Gefallen (oder irgendeine Funktionen in dem Rahmen Gefallen) ohne vorher Benachrichtigung zu aussetzen, mit Ausnahme, da? in Gelegenheit entgeltliche Anfangsgr?nde der Gefallen, derart ?nderungen nicht sind ansehnlich negativ zu beeinflussen auf entgeltliche Benutzer in erg?tzt sich dieser Dienst.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Einige Gefallen k?nnen sein erbracht Woden-sims.hol.es Nebenstellen namens Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', '?blich f?r Benutzer');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Als Bedingung Eueres Eingangs und Ausnutzung Websites oder Gefallen, ihr beistimmen, da? ihr sind zu beachten all anwendbare Gesetze und Regeln bei Ausnutzung website oder Gefallen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Ihr beistimmen, website oder Gefallen ausschlie?lich f?r eigene partielle und inl?ndischer Ziele zu ausnutzen. Ihr beistimmen, da? (а) ihr nicht sind zu kopieren, zu reproduzieren, zu beladen, abermals zu publizieren, zu verkaufen, oder zu verkaufen irgendeine Gefallen oder beliebige Information zu ausbreiten, Text, Darstellungen, graphische Pl?ne, Video Clips, das Halle, Kataloge, Dateien, Basen der Angaben oder Listen, usw. Woden-sims.hol.es, oder anderswie kaufm?nnisch zu ausbeuten Gehalt website. Systematische Suche des Gehalts website aus websites f?r Sch?pfung oder Kompilation, aufrecht oder indirekt, Sammeln, Kompilation, Basen der Angaben oder Katalog (durch Robots, Spinnen, automatische Einrichtungen oder manuelle Processe) ohne briefliche Erlaubnis Woden-sims.hol.es es ''tabu. Ausnutzung der beliebigen Materialien, Inhalt oder an website in beliebigen Zielen, die in Bedingungen es tabu aufrecht nicht freistehen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Ihr m?ssen durchlesen Woden-sims.hol.es Konfidentieller das nachstellt Bewachung und Ausnutzung der pers?nlichen Information ?ber Benutzern in Anordnung Woden-sims.hol.es und unsere Nebenstellen. Ihr annehmen Bedingungen Konfidentieller und zu beistimmen auf Ausnutzung der pers?nlichen Information ?ber euch entsprechend Konfidentieller.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es kann erlauben Benutzern Eingang zu Inhalt, Produkte oder Gefallen, das Drittengesichter durch Hyperlinks (in ?u?ere der Exile Wort, Banner, Kan?le oder anderswie) anbieten, API oder anderenfalls derart website der Drittengesichter. Aufk?nden zu hinweglesen derart Webseiten \ "Bedingungen und / oder Politik konfidentieller vor Ausnutzung websites. Ihr akzeptieren, da? Woden-sims.hol.es nicht hat keine Kontrolle ?ber derart Drittengesichtern Webseiten, nicht Monitore derart Webseiten und nicht tr?gt Verantwortung oder Schulden nicht vor wer vor derart Webseiten oder beliebiger Gehalt, Produkte oder Gefallen, das an derart Webseiten anheimstellen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Account Teilnehmer');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Benutzer mu? sein registriert an website, auf da? zu ?bernehmen Eingang oder zu ausnutzen einige Gefallen (registrierter Benutzer gleichfalls erw?hnt als"Mitglied"niedriger)Mit Ausnahme Woden-sims.hol.es Behauptung, eins Benutzer kann registrieren allein eins Benutzer Aufschreiben des Mitgliedes auf websites. Woden-sims.hol.es kann aufheben oder zu aufheben Benutzer Aufschreiben des Mitgliedes des Benutzers, falls Woden-sims.hol.es sind Anlasse zu argwohnen, da? Benutzer gleichzeitig registrierter oder kontrolliert zwei oder mehr der Abz?hlungen der Mitglieder. In dem weiteren, Woden-sims.hol.es kann ausschlagen Ausnutzt Voranmeldung zu Registrierung beliebiger Anla?.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Nach Registrierung an websites, Woden-sims.hol.es mu? festlegen Abz?hlung und zu abliefern Mitgliedern ID und Kennwort (allerletzter mu? sein gew?hlt registrierter Benutzer bei Registrierung) f?r jeden registrierten Benutzer. Abz?hlung kann haben Web-Benutzer Aufschreiben der elektronischen Post mit beschr?nktem Raum f?r Aufhebung Mitglied zu abfertigen oder zu ?bernehmen elektronische Post.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Setzen der Mitglieder und Kennwort spukt einzigartiges f?r eins Rechnungswesen Aufschreiben. Jeder Anteilhaber tr?gt beleibte Verantwortung f?r Aufbewahrung konfidentieller und Sicherheit euer ID des Benutzers und Kennwort, und f?r all Erwerbszweige, die unter euerem Rechnungswesen Aufschreiben entstehen. Kein Mitglied nicht kann teilen sich, oder zu l?sen Ausnutzung eueres Rechnungswesen Aufschreibens, ID oder Kennwort anderes Gesicht hinter Rahmen der Mitglieder der eigenen bevorzugen T?tigkeit zu ablassen. Woden-sims.hol.es sofort, falls euch es wurde bekannt ?ber beliebiger unberechtigten Ausnutzung eueres Kennwortes oder euer Rechnungswesen Aufschreiben oder ?ber beliebiger anderer Verletzung der Sicherheit Euerer Abz?hlung.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Benutzer beistimmt mit das, da? all Ma?nahmen, die unter euerem Rechnungswesen Aufschreiben (darunter, unumschr?nkt, Anbringung der beliebigen Geselschaft oder Information ?ber Produkt, Klick zu annehmen irgendeines Zusatzabkommen oder Regel, abonniert oder zu machen beliebige Kompensation vor beliebige Gefallen, Abtransport der elektronischen Post anhand Rechnungswesen Aufschreibens der elektronischen Post oder Abtransport SMS ) es ist zu achten Beauftragten des Mitgliedes entstehen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Verletzungen Teilnehmer');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es bleibenl??t hinter selbst Anrecht eigenes Belieben zu entfernen, oder zu ausschlagen beliebiger Benutzer Inhalt, das ihr zu vorstellen sich zu abwandeln, Post oder Abbilde auf website, das wir begr?ndet aufz?hlen, spukt ungesetzlicher, verletzt Bedingungen, k?nnen Gegenstand Woden-sims.hol.es oder unsere Nebenstellen in Verantwortung, oder anderswie fanden unbeh?riger in Woden-sims.hol.es Meinung');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Falls irgendeines Mitglied verletzt irgendeine Bedingungen oder falls Woden-sims.hol.es hat Geist Grundlagen zu glauben, da? irgendeiner Anteilhaber verletzt beliebiger Bedingungen,Woden-sims.hol.es hat Anrecht zu auferlegen Strafe auf Mitglied oder zu aussetzen oder zu aufheben Abz?hlungen des Benutzers oder Vorbestellungen beliebiger Gefallen ohne irgendeine Verantwortung in Mitglied. Woden-sims.hol.es gleichfalls haben Anrecht zu begrenzen, oder zu verbieten beliebiger und all fortlaufende oder zuk?nftiger Ausnutzung beliebigen anderen Service, das sein gesichert'' kann zu ausschlagen Woden-sims.hol.es.Strafen, da? Woden-sims.hol.eskann st?lpen schalten, immitten ?briger, Vorbemerkung, Abstellung beliebige Liste der Produkte oder anderer Benutzerinhalte, da? Landes-mitglied, vorgestellter sich, plazieren oder widergibt, Einschr?nkung auf Quantum der Enumerationen des Produkts zu einf?hren, da? Mitglied kann dislozieren oder Anzeige, oder Auferlegung der Einschr?nkungen auf Ausnutzung dieses Mitgliedes nicht M?glichkeiten oder Funktionen beliebiger Gefallen auf derart Fachausdruck, Woden-sims.hol.es Funde zweckm??iger unser Belieben.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es bleibenl??t hinter selbst Anrecht in beleibter Anstalt zu kooperieren mit staatlichen Gliedma?en, partielle Detektive und / oder betroffen Drittengesichter in Durchforschung das beliebige argwohnt kriminell oder b?rgerlicher Vergehen. In dem weiteren, Woden-sims.hol.es kann aufdecken Person und Kontaktsinformation des Benutzers, auf Bitte Machtorgan oder Strafverfolgungsbeh?rden, Opfer Drittesgesicht, oder in Ergebnis Vorladung oder andere Justiz Klage. Woden-sims.hol.es nicht tr?gt Verantwortung f?r Einbu?e oder Ergebnisse, die derart Aufschlie?ung ergebend sich aus ist, und Mitglied engagiert sich nicht herholt irgendeine Aktionen oder Klage Woden-sims.hol.esf?r derart Aufschlie?ung');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Einschr?nkung der Verantwortung');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'In es MAXIMAL FREISTEHT GESETZ, Gefallen, die anheimstellen WODEN-SIMS.HOL.ES An oder durch website anheimstellen "Als ist", "ALS ZUG?NGLICH" Und "Mit ALL FEHLERN" Und WODEN-SIMS.HOL.ES ABSIEHT VON BELIEBIGEN B?RGSCHAFTEN, die ODER MEINEN ERSICHTLICH ist, MITSAMT, ABER NICHT BESCHR?NKT sich, BELIEBIGE B?RGSCHAFTEN Befund, Qualit?t, Langlebigkeit, Produktivit?t, Genauigkeit, Verla?, KAUFM?NNISCHER WERT Und EIGNUNG F?R KONKRETE ZIELE. ALL DERART B?RGSCHAFTEN, BEGRIFFE, BEDINGUNGEN, SCHULDEN Und GEGENWART AUSNEHMEN.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'In es MAXIMAL FREISTEHT GESETZ, WODEN-SIMS.HOL.ES NICHT GIBT KEINE B?RGSCHAFTEN ?ber Richtigkeit, Genauigkeit, Richtigkeit, Verla?, Qualit?t, stabiler, F?lle oder NEUZEIT der beliebigen Information, die an oder durch website erbracht ist; WODEN-SIMS.HOL.ES NICHT GARANTIERT, DA? Betrieb, Einfuhr, Ausfuhr, Aufschl?sselung, Anerbieten, Anzeige, Abnahme, Verkauf und / oder Ausnutzungen Produkte oder Gefallen, das oder zu widergeben an websites nicht verletzt Anrechte der Drittengesichter anbieten; Sowie WODEN-SIMS.HOL.ES NICHT GIBT KEINE ERKL?RUNGEN ODER B?RGSCHAFTEN des BELIEBIGEN ROD In Beziehungen des beliebigen Produkts oder Gefallen, das oder widergibt an website angebotten ist.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Beliebiges Material, beladener oder anderer ?bernommener durch website macht Belieben jedes Benutzers und Risiko, und jeder Benutzer tr?gt beleibte Verantwortung f?r beliebige Einbu?e, Woden-sims.hol.es Computer Geb?ude oder Einbu?en der Angaben, die anfallen in Ergebnis der Ladung der beliebigen derart Materialien k?nnen. Kein Anraten oder Information, in m?ndlicher oder brieflicher Ausgestaltung, ist ?bernommen beliebiger Benutzer aus Woden-sims.hol.es oder durch oder aus ?rtern nicht schaffen keine B?rgschaften, die da aufrecht nicht n?mlich ist.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Jeder Benutzer beistimmt damit zu freilegen und zu bergen Woden-sims.hol.es, unsere Nebenstellen, Direktoren, amtliche Gesichter und Mitarbeiter ist harmlos, ab beliebiger und all Nachteile, Anforderungen, Schulden (darunter Gerichtkosten an Anfangsgr?nde der beleibten Abfindung), die anfallen in Ergebnis der Ausnutzung des derart Benutzers Websites oder Gefallen (mitsamt, aber nicht beschr?nkt sich Anzeige Information des derart Benutzers an Websites) oder aus Verletzung beliebiger aus Bedingungen der Bedingungen k?nnen. Woden-sims.hol.es, unsere Nebenstellen, Direktoren, amtliche Gesichter und Mitarbeiter ist harmlos, ab beliebiger und all Nachteile, Einbu?e, Anforderungen, Schulden (darunter Gerichtkosten an Anfangsgr?nde der beleibten Abfindung), die anfallen in Ergebnis der Verletzung Benutzer der beliebigen Erkl?rungen und B?rgschaften, die Benutzer'' erledigen k?nnen Woden-sims.hol.es, darunter, aber nicht beschr?nkt sich das, das in Abteilung 5 authentischer Vertrag dargelegt ist.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Benachrichtigungen');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'All juridische Benachrichtigungen oder Anforderungen oder in Moment Woden-sims.hol.es es ''mu? sein erledigt in brieflicher Ausgestaltung und zusteuert Woden-sims.hol.es pers?nlich, Bote, Einschreibbrief, Fax oder auf folgender Gesichter der Benachrichtigung m?ssen sein effektiver, falls sie ist ?bernommen Woden-sims.hol.es in beliebiger aus obengenanntem Stoff.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Ihr beistimmen, da? all Abfindungsvertrage, Benachrichtigungen, Anforderungen, Aufschlie?ung und andere Kommunikationen, die Woden-sims.hol.es sendet euch in elektronischer zu zufriedenstellen Rechtsanspruch, da? derart Band mu? sein in brieflicher Ausgestaltung.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Grunds?tze');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Mit gegeben des beliebigen Zusatzabkommens, Bedingungen darstellen sich beleibter Abfindungsvertrag zwischen euch und Woden-sims.hol.es gegen?ber und nachstellen Ausnutzung websites und Dienste, substituiert beliebige bevorzugen briefliche oder m?ndlicher Verabredungen in Beziehungen aber Frage in gegebenem Dokument');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es und ihr unabh?ngiger Bauunternehmen, und keine Agentur, Partnerschaft, Gemeinschaftsunternehmen, Arbeiters-arbeitgeber oder Franchisegeber Franchisegeber-Beziehung ist nicht pr?destiniert oder geschaffener entsprechend Bedingungen.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Falls irgendeine Lage der Bedingungen ist anerkannt ung?ltiger oder unausf?hrbarer, derart Lage mu? sein entfernter, und ?brige Lagen bleiben in Gewalt und sind zu beachten.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es hat Anrecht zu bestimmen Mitglieder (darunter all unsere Anrechte, Titel, Verg?nstigungen, Interessen und Schulden und Pflichten in Bedingungen beliebiges k?rperliches oder juridischer Gesicht (darunter irgendeine Nebenstellen Woden-sims.hol.es). Ihr nicht k?nnen festlegen, in dem Gesamten oder teils, Bedingungen f?r beliebiges k?rperliches oder juridischer Gesicht.');
INSERT INTO search VALUES ('', 'Nutzungsbedingungen  - Woden Sims (DE)', 'http://woden-sims.hol.es/de/terms/', 'Woden-sims.hol.es Nichterf?llung irgendeiner Anrechte oder Unt?tigkeit in Beziehungen der beliebigen Verletzung ihr entsprechend Bedingungen, nicht bedeutet Verzicht auf diesem Anrecht, nicht Verzicht auf Woden-sims.hol.es Anrecht zu auftreten aus verh?ltnism??ig anschlie?enden oder derartiger Verletzungen.');

INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'R?glements un recours un site Woden Sims');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'S''il vous pla?t, lisent ces termes et un conditions attentivement.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Une application et une acceptation un conditions');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Votre recours un site et Woden-sims.hol.es Un bienfaits, un logiciel et un produits (dans un ensemble, comme "Service" ci-apr?s) compara?t un objet un conditions, compris dans ce document, et aussi Confidentiel ,Un inventaire un produits une politique et ne importe quel autres r?glements et un politiciens de un sites, dont Woden-sims.hol.es peut publier de un temps ? autre. Ce document et autres r?glements et une politique un sites pareils ensemble se d?nomment au-dessous comme"Un conditions un recours"En acc?dant un sites ou avec une aide un bienfait, vous acceptent adopter et garder un conditions. S''il vous pla?t, non utilisent un bienfait ou un sites, si vous refusent un r?glements entiers.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Vous non est en droit de b?n?ficier un bienfaits et non peuvent adopter un conditions, si (а) vous non atteignirent un une loi ?ge canonique pour attache un contrat avec Woden-sims.hol.es, ou (b) vous non autorise encaisser un bienfaits dans une ad?quation avec une l?gislation un ne importe quel pays / un r?gions, y compris un pays / une r?gion, dans dont vous trouvent se, ou de dont vous b?n?ficient un bienfaits.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Vous reconna?tre et acceptent, que Woden-sims.hol.es peut contrefaire un ne importe quel conditions un ne importe quel temps, arrange ad?quat un changements et un annexes une condition sur un sites. Continue b?n?ficier un bienfaits ou un sites, vous acceptent, que un conditions transform?es sont appliquer se contre vous.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Si Woden-sims.hol.es publia ou accorda un mandat une version un conditions anglaise, vous acceptent, que un mandat pareil se accorde seul pour une commodit?, et que une une anglaise version est ajustent un recours un bienfaits ou un sites.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Vous peut se demander ?tablir dans un accord d?tach?, est celui en ligne ou dans un mode autonome, avec Woden-sims.hol.es ou notre coassoci? pour ne importe quel un bienfaits("Un avenants")Si est un une esp?ce de conflit ou une contradiction entre un r?glements et un avenant, un contrat compl?mentaire adh?re une priorit? au-dessus de gouverna seul ? le un ?gard de ce service int?ress?.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un cercle non autrement peut-?tre transform? seul dans une forme ?crite autoris? une fonction Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Prestation un bienfaits');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es contracting entity that you are contracting with i Woden-sims.hol.es Un Kiev born?, si vous comparaissent un membre un sites, d?pos? et demeurent dans un Kiev d?pos?. Si vous d?pos? dans une juridiction au-del? de un bornes un Kiev, vous un contrats avec Woden-sims.hol.es Une Ukraine E - Commerce Private Limited (d?pos? dans une Ukraine). Si vous d?pos? dans ou un habitant une un continent Ukraine, vous contractent avec OOO Woden Sims, Ltd. comme divers ou un fractions un bienfaits, peut-?tre entretenu et sous une condition, un filiales Woden-sims.hol.es, Woden-sims.hol.es peut d?l?guer divers de un bienfaits pour leurs filiales, particulier Woden-sims.hol.es(Une Europe) Limited, d?pos? dans un royaume uni, dont vous se mettre d''accord peuvent arborer vous leurs fractions un bienfaits.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Vous doivent se enregistrer ? titre de un membre sur un sites pour celui, pour empocher un acc?s et utiliser un bienfaits divers. Ult?rieurement, Woden-sims.hol.es r?serve un droit, sans pr?alable notifie, pour borner un acc?s ou un recours un bienfaits (ou un tout particularit?s dans un cadres un bienfait) d?termin?s payer un usagers ou exposer autres conditions, dont Woden-sims.hol.espeut infliger notre discr?tion.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un bienfaits (ou unes une esp?ce de particularit?s dans un cadres un d?pendances) peuvent diff?rer pour un r?gions et un pays diff?rentes. Aucunes garanties ou une repr?sentativit? non vu celui, que un bienfait concret une ou fonction, ou leurs fonctions ou m?me embranchement et un degr? un bienfaits ou un fonctions et leurs fonctions sont abordable pour un usagers. Woden-sims.hol.es peut selon leur propre discr?tion une limite, d?nier ou se enregistrer un degr? un acc?s et un recours un ne importe quel bienfaits (ou un tout particularit?s dans un cadres un bienfait) diff?rent ? le un ?gard de un usagers assortis.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es peut commencer, contrefaire, rajeunir, imposer un conditions pour, suspendre ou arr?ter un tout bienfaits (ou un tout fonctions dans un cadres un bienfaits) sans pr?alable notifie, ? le une exception de, que dans un cas une armature un bienfaits payante, un changements pareils non sont essentiel n?gativement influer un usagers payants dans d?guste ce service.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un bienfaits divers peuvent ?tre accord? Woden-sims.hol.es Un filiales nominalement Woden-sims.hol.es.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Commun?ment pour un usagers');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', '? titre de une condition votre acc?s et un recours un sites ou un bienfaits, vous acceptent, que vous sont garder un applicables lois et un r?glements enti?res sous un recours un sites ou un bienfaits.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Vous doivent lire Woden-sims.hol.es Confidentiel dont ajuste une escorte et un recours une information personnelle de un usagers ? le une disposition de Woden-sims.hol.es et nos filiales. Vous acceptent un conditions Confidentiel et accepter un recours une information personnelle de vous dans une ad?quation avec Confidentiel.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Vous acceptent utiliser un sites ou un bienfaits exceptionnellement pour un particuliers et interne buts propres. Vous acceptent, que (а) vous non sont copier, reproduire, t?l?charger, renouvelable publier, d?biter, diffuser ou d?biter un tout bienfaits ou une ne importe quel information, un texte, un images, un diagrammes, un vid?oclips, sonore, un catalogues, un fichiers, un armatures un donn?es ou un inventaires, etc. Woden-sims.hol.es, ou autre formule commercialement exploiter un contenu un site. Une qu?te un contenu un site syst?matique d?s un sites pour une cr?ation ou compile, carr?ment ou allusivement, une collecte, compile, un armatures un donn?es ou un catalogue (? travers un robots, un araign?es, un agencements ou un processuses manuels automatiques) sans une autorisation ?crite Woden-sims.hol.es illicite. Un recours un ne importe quel mat?riaux, teneur ou sur un sites dans un ne importe quel buts, carr?ment non autoris? dans un conditions illicite.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es peut permettre un usagers un acc?s contre teneur, une production ou un bienfaits, offrent un intervenants ? travers hyperliens (dans un aspect un exils un mot, banni?res, un canaux ou autre formule), API ou autrement pareil un sites un intervenants. Avertissons lire pareil Web Sites \ un "conditions et / ou une politique confidentiel avant un recours un sites. Vous reconna?tre, que Woden-sims.hol.es non a aucun contr?le au-dessus de un intervenants pareils Web Sites, non moniteurs pareil Web Sites et non assume une responsabilit? ou un engagements ni avant qui pareil Web Sites ou un ne importe quel contenu, une production ou un bienfaits, accordent sur pareil Web Sites.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Account un associ?s');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un usager doit ?tre d?pos? sur un sites, pour empocher un acc?s ou utiliser un bienfaits (divers un usager d?pos? aussi se ?voque comme"Membres"au-dessous)? le une exception de Woden-sims.hol.es Une affirmation, un usager seul peut immatriculer seul un une comptabilit? enregistrement un membre seul un sites. Woden-sims.hol.es peut supprimer ou arr?ter un une comptabilit? enregistrement un membre un usager, si Woden-sims.hol.es sont un causes douter, que un usager simultan? d?pos? ou se contr?le deux ou plus un additions un membres. Ult?rieurement, Woden-sims.hol.es peut d?cliner utilise demande un enregistrement selon une ne importe quel cause.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Apr?s un enregistrement sur un sites, Woden-sims.hol.es doit affecter une addition et d?livrer un membres ID et mot de passe (dernier doit ?tre choisi un usager d?pos? sous un enregistrement) pour un d?pos? usager chaque. Une addition peut avoir un une utilisateur Web enregistrement un courriel avec une ?tendue born?e pour une conservation un membre d?puter ou empocher un courriel.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Une composition un membres et mot de passe compara?t unique pour un une comptabilit? enregistrement seul. Un associ? chaque assume une responsabilit? compl?te une conservation confidentiel et une s?curit? votre ID un usager et mot de passe, et pour un aspects une activit?, dont accomplissent se sous votre une comptabilit? enregistrement entiers. Un ni seul membre non peut partager se, c?der ou autoriser un recours votre une comptabilit? enregistrement, ID ou mot de passe autre visage au-del? de un bornes un membres une patronale activit? propre. Woden-sims.hol.es sans tarde, si vous devient c?l?bre de un ne importe quel non autoris? recours votre mot de passe ou votre une comptabilit? enregistrement ou de ne importe quel autre contravention une s?curit? votre addition.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un usager accepte avec celui, que un mesures, dont accomplissent se sous votre une comptabilit? enregistrement (inclus, sans une limitation, un arrangement une ne importe quel compagnie ou une information de un produit, clic accepter un tout avenants ou gouverna, abonne se ou faire une ne importe quel compensation un ne importe quel bienfaits, un envoi un courriel avec une aide un une comptabilit? enregistrement un courriel ou un envoi SMS ) est croire se un d?l?gu?s un membre enti?res.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Contraventions un associ?s');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es r?serve un droit selon propre discr?tion enlever, contrefaire ou d?cliner ne importe quel utilisateur teneur, dont vous d?poser, selon un courrier ou refl?tent un sites, dont nous fond? croient, compara?t ill?gal, d?sorganise un conditions, peuvent exposer Woden-sims.hol.es ou nos filiales dans une responsabilit?, ou autre formule retrouv?rent d?plac? dans Woden-sims.hol.es un avis');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Si un tout membre d?sorganise un tout conditions ou si Woden-sims.hol.es a un bases consid?rer, que un tout associ? d?sorganise ne importe quel un conditions judicieuses,Woden-sims.hol.es a un droit infliger une amende un membre ou suspendre ou arr?ter un additions un usager ou un abonnements ne importe quel un bienfaits sans une tout responsabilit? dans un membre. Woden-sims.hol.es aussi ont un droit borner, abandonner ou censurer ne importe quel et un courant ou ? vient recours ne importe quel autre service, susceptible ais? entier Woden-sims.hol.es.Un amendes, que Woden-sims.hol.espeut infliger branchent, parmi autres, une pr?vention, une ?limination un ne importe quel inventaire un produits ou autre utilisateur teneur, que un unmembre, d?pos?, dispos? ou se refl?te, ?tablir une limitation une quantit? un d?nombrements un produit, que un membre peut arranger un ou visuel, ou une application un limitations un recours ce membre ni un d?bouch?s ou un fonctions ne importe quel un bienfaits une limite pareille, Woden-sims.hol.es trouve conseill? selon notre discr?tion.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es r?serve un droit dans une mesure compl?te collaborer avec un organes ?tatiques, un d?tectives particuliers et / ou un intervenants sinistr?s dans une enqu?te un ne importe quel doute d?lit p?nal ou civique. Ult?rieurement, Woden-sims.hol.es peut ?venter une figure et une un contact information un usager, selon une demande un organe une autorit? ou application de la loi, un victime intervenant, ou dans un r?sultat une citation ou autre demande judiciaire. Woden-sims.hol.es non assume une responsabilit? un d?g?t ou un aboutissants, d?coulent de une r?v?lation pareille, et un membre engage se non apporte un tout actions ou une demande Woden-sims.hol.espour une r?v?lation pareille');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Limitation une responsabilit?');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Dans maximal autoris? une loi, un bienfaits, accordent WODEN-SIMS.HOL.ES Sur ou ? travers un sites se accordent "comme suis", "comme abordable" et "avec un fautes" enti?res et WODEN-SIMS.HOL.ES Abandonne de un ne importe quel garanties, apparent ou implicite, y compris, mais non borne se, un ne importe quel garanties un ?tat, une qualit?, durabilit?, une efficacit?, une exactitude, une fiabilit?, une valeur et une aptitude commerciale pour un buts concrets. Un pareilles garanties, un exhibitions, un conditions, un engagements enti?res et un pr?sent se exceptent.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Dans maximal autoris? une loi, WODEN-SIMS.HOL.ES Non accorde aucunes garanties de une authenticit?, une exactitude, une correction, une fiabilit?, une qualit?, une stabilit?, une corpulence ou une actualit? une ne importe quel information, accord? sur ou ? travers un sites; WODEN-SIMS.HOL.ES Non gage, que une fabrication, une importation, une exportation, une distribution, une offre, un visuel, un achat, une vente et / ou un recours une production ou un bienfaits, offrent ou se refl?ter sur un sites non d?sorganise un droits un intervenants; Et aussi WODEN-SIMS.HOL.ES Non accorde aucunes demandes ou un garanties ne importe quel Roda dans une attitude un ne importe quel produit ou un bienfaits, offert ou se refl?te sur un sites.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un ne importe quel mat?riau, surencombr? ou autre empoch? ? travers un sites fait se selon discr?tion un usager chaque et risque, et un usager chaque assume une responsabilit? compl?te un ne importe quel d?g?t, Woden-sims.hol.es Un ordinateur syst?me ou un freintes un donn?es, dont peuvent germer dans un r?sultat un chargement un ne importe quel mat?riaux pareils. Aucun conseil ou une information, dans une forme orale ou ?crit, empoch? un ne importe quel usager de Woden-sims.hol.es ou ? travers ou de un lieux non constituent aucunes garanties, carr?ment non vis? ici.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un usager ''chaque accepte avec celui, pour acquitter et sauver Woden-sims.hol.es, nos filiales, un directeurs, dignitaire et un collaborateurs inoffensif, de ne importe quel et un d?g?ts, un griefs, un engagements (inclus un co?ts judiciaires sur une armature une compensation compl?te), dont peuvent germer dans un r?sultat un recours un usager un sites ou un bienfaits (y compris, mais non borne se un visuel une information un usager pareil sur un sites) pareil ou de une contravention ne importe quel de un conditions un conditions entiers. Woden-sims.hol.es, nos filiales, un directeurs, dignitaire et un collaborateurs inoffensif, de ne importe quel et un d?g?ts, un endommagement, un griefs, un engagements (inclus un co?ts judiciaires sur une armature une compensation compl?te), dont peuvent germer dans un r?sultat une contravention un usager un ne importe quel demandes et un garanties, fait un usager entiers Woden-sims.hol.es, inclus, mais non borne se celui, dont expos? dans un copartage 5 un contrat actuel.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Notifient');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Entiers juridiques notifient ou un demandes ou un moment Woden-sims.hol.es doit ?tre fait dans une forme ?crite et dirige se Woden-sims.hol.es personnel, un courrier, une lettre recommand?e, selon fax ou conforme un visages notifie doivent ?tre effectif, si eux empoch? Woden-sims.hol.es dans ne importe quel de une mati?re ledite.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Vous acceptent, que un accords, notifient, un demandes, une r?v?lation et autres communications, dont entiers Woden-sims.hol.es d?l?gue vous dans ?lectronique contenter une demande l?gale, que une connexion pareille doit ?tre dans une forme ?crite.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Un positions essentielles');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Avec une comptabilit? un ne importe quel avenants, un conditions d?posent vous-m?me un accord complet entre vous et Woden-sims.hol.es ? le un ?gard de et ajustent un recours un sites et un d?pendances, remplace un ne importe quel ?crits ou oral arrangements ant?rieurs dans une attitude une question dans un document administr?');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es et vous sont un entrepreneurs ind?pendants, et une ni seul agence, un coassoci?, une entreprise, employ?-employeur ou un franchiseur franchiseur-relations mixte non pr?destin? ou constitu? dans une ad?quation avec un conditions.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Si une tout position un conditions est consacr? nul ou inex?cutable, une position pareille doit ?tre ?loign?, et ils autre positions demeurent dans une force et sont se garder.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es a un droit affecter un membres (inclus entier notre un droits, un titres, un franchises, un int?r?ts et un engagements et un devoirs dans un conditions un ne importe quel visage (physique ou juridique inclus un tout filiales Woden-sims.hol.es). Vous non peuvent affecter, dans un entier ou partiel, un conditions pour un ne importe quel visage physique ou juridique.');
INSERT INTO search VALUES ('', 'Un conditions un recours  - Woden Sims (FR)', 'http://woden-sims.hol.es/fr/terms/', 'Woden-sims.hol.es ?chec un tout droits ou une inaction dans une attitude une ne importe quel contravention vous dans une ad?quation avec un conditions, non signifie un abandon de ce droit, ni abandon de Woden-sims.hol.es Un droit avancer d?s un contraventions relativement ult?rieures ou pareil.');













