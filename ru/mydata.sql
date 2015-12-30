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
            Wireless N Wi-Fi (802.11b/g/n); Bluetooth 3.0,GPS Enabled with Latitude, Google Maps', 'Samsung', '323', '406', '26th December', '55$ shipping and coupon for 35$ as free',
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