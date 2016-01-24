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



















