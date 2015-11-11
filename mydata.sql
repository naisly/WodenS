CREATE DATABASE shop;

USE shop;

CREATE TABLE phones (
  id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100) NOT NULL,
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

INSERT INTO phones VALUES (1, 'Iphone 6S', 'images/iphone6S.jpg', 'Internal memory: 16 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO with Bluetooth 4.2 and NFC as well as Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1455 , 1999, '31th October', 'With old headphones and markers and USB', 3, 12, 1, '2015-10-31 21:21:00');

INSERT INTO phones VALUES (2, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7 IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1200, 1599, '1st November', 'With earpods and USB', 5, 11, 1, '2015-11-01 19:34:40');

INSERT INTO phones VALUES (3, 'Iphone 5S', 'images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 8 GB',
                           'Apple', 1221, 1985, '1st November', 'With earpodes and USB', 5, 22, 1, '2015-11-01 21:01:15');

INSERT INTO phones VALUES (4, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 64 GB', 'Apple',
                           1211 , 1677, '2nd November', 'With new earpods and USB with markers', 3, 11, 1, '2015-11-02 11:11:11');

INSERT INTO phones VALUES (5, 'Iphone 6S', 'images/iphone6S.jpg', 'Internal memory: 64 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO with Bluetooth 4.2 and NFC as well as Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1399 , 1999, '2nd November', 'With old headphones and USB', 3, 12, 1, '2015-11-02 21:10:00');

INSERT INTO phones VALUES (6, 'Iphone 4', 'images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           100 , 221, '3rd November', 'With old headphones and markers', 3, 3, 1, '2015-11-03 12:04:15');

INSERT INTO phones VALUES (7, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 64 GB',
                           'Apple', 1111, 1555, '3rd November', 'With earpods and USB', 5, 15, 1, '2015-11-02 21:23:40');

INSERT INTO phones VALUES (8, 'Iphone 5S', 'images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 16 GB',
                           'Apple', 1097, 1322, '5th November', 'With earpodes and USB', 5, 21, 1, '2015-11-05 19:00:01');

INSERT INTO phones VALUES (9, 'Iphone 6S', 'images/iphone6S.jpg', 'Internal memory: 64 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO with Bluetooth 4.2 and NFC as well as Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1600 , 2015, '12st November', 'With old headphones as well as markers and USB', 3, 13, 1, '2015-11-12 11:11:11');

INSERT INTO phones VALUES (10, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1000, 1200, '13th November', 'With earpods and USB', 5, 16, 1, '2015-11-13 21:54:30');

INSERT INTO phones VALUES (11, 'Iphone 5', 'images/iphone5.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 699 , 1022, '15th November', 'With old headphones as well as markers and USB', 3, 11, 1, '2015-11-15 15:04:31');

INSERT INTO phones VALUES (12, 'Iphone 5S', 'images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 8 GB',
                           'Apple', 785, 1255, '15th November', 'With earpodes and USB', 5, 7, 1, '2015-11-15 19:06:06');

INSERT INTO phones VALUES (13, 'Iphone 4', 'images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           99 , 101, '16th November', 'With old headphones and markers', 3, 7, 1, '2015-11-16 12:15:15');

INSERT INTO phones VALUES (14, 'Iphone 6S', 'images/iphone6S.jpg', 'Internal memory: 16 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO Bluetooth 4.2 NFC Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                          999 , 1999, '16th November', 'With old headphones as well as markers and USB', 3, 12, 1, '2015-11-16 14:21:00');

INSERT INTO phones VALUES (15, 'Iphone 4S', 'images/iphone4S.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           100 , 399, '21th November', 'With old headphones and USB', 3, 2, 1, '2015-11-21 13:10:12');

INSERT INTO phones VALUES (16, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 999, 1200, '25th November', 'With earpods and USB', 5, 11, 1, '2015-11-25 19:32:40');

INSERT INTO phones VALUES (17, 'Iphone 5S', 'images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 8 GB',
                           'Apple', 999, 1311, '27th November', 'With earpodes and USB', 5, 19, 1, '2015-11-27 13:01:01');

INSERT INTO phones VALUES (18, 'Iphone 4', 'images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           1 , 211, '27th November', 'With old headphones and markers', 3, 12, 1, '2015-11-27 17:04:30');

INSERT INTO phones VALUES (19, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1023, 1545, '28th November', 'With earpods and USB', 5, 8, 1, '2015-11-28 20:50:40');

INSERT INTO phones VALUES (20, 'Iphone 4', 'images/iphone4.jpg', 'Screen: 3.5" TFT (Retina) 960x640 points support of Multi-Touch
                          Internal memory: 8 GB. Wireless communications: Wi-Fi (802.11b/g) Bluetooth 2.1 + EDR FaceTime', 'Apple',
                           1 , 211, '28th November', 'With old headphones and markers', 3, 8, 1, '2015-11-28 23:12:30');

INSERT INTO phones VALUES (21, 'Iphone 6S', 'images/iphone6S.jpg', 'Internal memory: 16 GB Wireless communications: Wi?Fi
                          802.11a/b/g/n/ac with technology of MIMO Bluetooth 4.2 NFC Camera: 12 MPX. 1.22 (3840 on 2160 dots)', 'Apple',
                           1200 , 1777, '29th November', 'With old headphones as well as markers and USB', 3, 21, 1, '2015-11-29 12:21:00');

INSERT INTO phones VALUES (22, 'Iphone 5S', 'images/iphone5S.jpg', 'Screen: 4.0" IPS TFT (640 x 1136 dots) with LED-backlight / 16 mil. colors /
                          touch capacitive / scratch-resistant glass Gorilla Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 899, 1310, '30th November', 'With earpodes and USB', 5, 12, 1, '2015-11-30 14:01:05');

INSERT INTO phones VALUES (23, 'Iphone 6', 'images/iphone6.png', 'Screen: 4.7" IPS LCD (1334x750 dots) with LED-backlight / 16 mil. colors /
                           touch capacitive / scratch-resistant glass Ion-X Glass with oleophobic coating. Internal memory: 32 GB',
                           'Apple', 1234, 1567, '1st December', 'With earpods and USB', 5, 15, 1, '2015-12-01 12:54:07');
/* SASMUNG */
INSERT INTO phones VALUES (24, 'Samsung Galaxy S6', 'images/samsungs6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                          'Samsung', 901, 1244, '1st December', 'With headphones', 7, 15, 1, '2015-12-01 17:41:04');

INSERT INTO phones VALUES (25, 'Samsung Galaxy S5', 'images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 788, 1111, '2nd December', 'With USB and headphones', 8, 21, 1, '2015-12-02 22:21:14');

INSERT INTO phones VALUES (26, 'Samsung Galaxy S4', 'images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           666, 1000, '3nd December', 'With USB', 1, 12, 1, '2015-12-03 01:12:12');

INSERT INTO phones VALUES (27, 'Samsung Galaxy S3', 'images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 700, 999, '4th December', 'With USB and headphones', 5, 12, 1, '2015-12-04 22:22:22');

INSERT INTO phones VALUES (28, 'Samsung Note', 'images/samsungNote.jpg', 'Internal memory: 16 GB. CPU: 4 cores with 2.7 GGz. Screen:
                           Super AMOLED 2560 on [1444+160] (Quad HD+). CMOS 16.0 MP. Newest and rapid functionality design',
                           'Samsung', 1011, 1111, '5th December', 'With headphones', 4, 11, 1, '2015-12-05 06:12:56');

/* END MAIN */

INSERT INTO phones VALUES (29, 'Samsung Galaxy S6', 'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 888, 1044, '5st December', 'With headphones', 3, 18, 1, '2015-12-05 17:41:04');

INSERT INTO phones VALUES (30, 'Samsung Galaxy S5', 'images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 700, 1022, '2nd December', 'With USB and headphones', 8, 21, 1, '2015-12-02 20:21:14');

INSERT INTO phones VALUES (31, 'Samsung Galaxy S3', 'images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 699, 1022, '4th December', 'With USB and headphones', 5, 12, 1, '2015-12-04 19:22:22');

INSERT INTO phones VALUES (32, 'Samsung Galaxy S6', 'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 1777, 1599, '1st December', 'With headphones', 5, 18, 1, '2015-12-01 12:41:04');

INSERT INTO phones VALUES (33, 'Samsung Galaxy S4', 'images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           599, 1210, '3nd December', 'With USB', 1, 14, 1, '2015-12-03 11:12:12');

INSERT INTO phones VALUES (34, 'Samsung Note', 'images/samsungNote.jpg', 'Internal memory: 16 GB. CPU: 4 cores with 2.7 GGz. Screen:
                           Super AMOLED 2560 on [1444+160] (Quad HD+). CMOS 16.0 MP. Newest and rapid functionality design',
                           'Samsung', 1111, 1211, '5th December', 'With headphones', 7, 9, 1, '2015-12-05 06:18:56');

INSERT INTO phones VALUES (35, 'Samsung Galaxy S5', 'images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 700, 1001, '7nd December', 'With USB and headphones', 7, 11, 1, '2015-12-07 20:21:14');

INSERT INTO phones VALUES (36, 'Samsung Galaxy S3', 'images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 888, 1022, '10th December', 'With USB and headphones', 3, 10, 1, '2015-12-10 18:22:22');

INSERT INTO phones VALUES (37, 'Samsung Galaxy S6', 'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 788, 1044, '11st December', 'With headphones', 6, 12, 1, '2015-12-11 16:41:04');

INSERT INTO phones VALUES (38, 'Samsung Galaxy S4', 'images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           599, 1211, '6nd December', 'With USB', 2, 14, 1, '2015-12-06 01:12:12');

INSERT INTO phones VALUES (39, 'Samsung Note', 'images/samsungNote.jpg', 'Internal memory: 16 GB. CPU: 4 cores with 2.7 GGz. Screen:
                           Super AMOLED 2560 on [1444+160] (Quad HD+). CMOS 16.0 MP. Newest and rapid functionality design',
                           'Samsung', 1289, 1399, '7th December', 'With headphones', 5, 16, 1, '2015-12-07 09:12:56');

INSERT INTO phones VALUES (40, 'Samsung Galaxy S5', 'images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 901, 1211, '15nd December', 'With USB and headphones', 5, 1, 1, '2015-12-15 22:21:14');

INSERT INTO phones VALUES (41, 'Samsung Galaxy S4', 'images/samsungS4.jpg', 'CPU: 8 cores processor with 1.6 GGz (4cores) and 1.2 GGz
                           another 4 cores. Screen: FHD sAMOLED with 1920 on 1080 pixels. Pleasurable move control system', 'Samsung',
                           877, 1200, '3nd December', 'With USB', 4, 15, 1, '2015-12-03 10:12:12');

INSERT INTO phones VALUES (42, 'Samsung Galaxy S3', 'images/samsungS3.jpg', 'Internal memory: 16 GB. Screen : sAMOLED 720 on 1280 pixels
                           (HD). New smart stay that knows what you want. New function SBeam for fast-forward messages and emails',
                           'Samsung', 877, 1099, '10th December', 'With USB and headphones', 3, 10, 1, '2015-12-10 20:22:22');

INSERT INTO phones VALUES (43, 'Samsung Galaxy S6', 'images/samsungS6.jpg', 'Front-end and Back-end cameras have F1.9 diafragm. Fast charging
                          only 10mins for 4hours of work. 5.1" Quad HD (2560 on 1440). Good security as well as mobile payment methods',
                           'Samsung', 1022, 1444, '1st December', 'With headphones', 5, 25, 1, '2015-12-01 12:41:04');

INSERT INTO phones VALUES (44, 'Samsung Galaxy S5', 'images/samsungS5.png', 'Energy safe mode as well pleasurable as measuring of heart
                           rhythm. Processor: 1.9 + 1.3 GGz and 8 cores. 5.1" as equal to 129.4 mm makes with 1920 on 1080 HD makes you
                           feed the best', 'Samsung', 1011, 1521, '12nd December', 'With USB and headphones', 5, 12, 1, '2015-12-12 22:22:14');



SELECT product_name, photo, description, category, price, previous_price, time_of_adding, features,
  id, quantity, shipping, average_price FROM phones WHERE product_name = 'Iphone 5S' AND price > 100 AND price < 1500;

CREATE TABLE orderedItems (
  id INT(11) NOT NULL PRIMARY KEY,
  product_name VARCHAR(150) NOT NULL,
  category VARCHAR(100) NOT NULL,
  price INT(15) NOT NULL,
  user VARCHAR(150) NOT NULL,
  quantity INT(15)
);

CREATE TABLE completeOrders (
  id INT(11) NOT NULL,
  product_name VARCHAR(150) NOT NULL,
  category VARCHAR(100) NOT NULL,
  price INT(15) NOT NULL,
  user VARCHAR(150) NOT NULL,
  quantity INT(15),
  order_id INT(15)
);

CREATE TABLE doneOrders (
  id INT(11) NOT NULL,
  product_name VARCHAR(150) NOT NULL,
  category VARCHAR(100) NOT NULL,
  price INT(15) NOT NULL,
  user VARCHAR(150) NOT NULL,
  quantity INT(15),
  order_id INT(15)
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
)
