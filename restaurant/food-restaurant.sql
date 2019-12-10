-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 10:21 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food-restaurant`
--
CREATE DATABASE IF NOT EXISTS `food-restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `food-restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `telephone` bigint(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`fname`, `email`, `password`, `security`, `ans`, `telephone`) VALUES
('a', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661', 'What is Your Pet Name?', 'a', 123),
('deep', 'deep@gmail.com', 'db068ce9f744fbb35eedc9a883f91085', 'What is Your Pet Name?', 'karan', 9898969594),
('gagan', 'gagan@gmail.com', 'gagan', 'What is Your Pet Name?', 'gagu', 2147483647),
('harman', 'har@gmail.com', 'asdf', 'What is Your Pet Name?', 'harry', 8745237123),
('karam', 'karam@gmail.com', '12345', 'Who is Your Favourite Person?', 'mandeep', 2147483647),
('karam', 'karamjandir@gmail.com', '75a0c3b6e836ef1b2113aa859d01d14f', 'What is Your Pet Name?', 'karam', 9876543234),
('karam', 'karams@gmail.com', 'qwert', 'What is Your Pet Name?', 'karam', 9873526172),
('karan', 'karan123@gmail.com', 'db068ce9f744fbb35eedc9a883f91085', 'What is Your Pet Name?', 'karan', 9898989898),
('karandeep', 'karan@gmail.com', '755b8dce31a77c0017277202c3d1ca92', 'What is Your Pet Name?', 'karan', 9898989898),
('karandeep', 'karandpkr@gmail.com', '12345', 'What is the Name of Your favourite movie?', 'sanam teri kasam', 2147483647),
('karam', 'saini@gmail.com', '84263621bc0a5fa12c1577ac86faddea', 'What is Your Pet Name?', 'karam', 9464044733),
('saini', 'sainikaram@gmail.com', 'da5a6a96788dd98b36ec3cb7b2c992da', 'What is Your Pet Name?', 'karam', 8735241221);

-- --------------------------------------------------------

--
-- Table structure for table `add-categories`
--

CREATE TABLE IF NOT EXISTS `add-categories` (
  `c-id` int(255) NOT NULL AUTO_INCREMENT,
  `c-name` varchar(255) NOT NULL,
  PRIMARY KEY (`c-id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `add-categories`
--

INSERT INTO `add-categories` (`c-id`, `c-name`) VALUES
(10, 'indian food'),
(11, 'Fast Food'),
(12, 'Punjabi'),
(13, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `add-product`
--

CREATE TABLE IF NOT EXISTS `add-product` (
  `p-id` int(255) NOT NULL AUTO_INCREMENT,
  `s-categories` varchar(255) NOT NULL,
  `p-name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `ingredient` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `eat-noneat` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `p-pic` varchar(255) NOT NULL,
  PRIMARY KEY (`p-id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `add-product`
--

INSERT INTO `add-product` (`p-id`, `s-categories`, `p-name`, `price`, `ingredient`, `type`, `eat-noneat`, `description`, `p-pic`) VALUES
(12, '10', 'Thali', 200, ',onion,Potato,chilli,Tomato', 'Vegetarian', 'Eatable', ' Thali is an Indian , Bengali and Nepalese meal made up of a selection of various dishes. it simply means a round platter used to serve food.', 'Thali.jpg'),
(13, '12', 'Chicken ', 200, ',onion', 'Non-Vegetarian', 'Eatable', ' chicken is the most common type of poultry in the world. chicken raised specially for food are called broilers.', 'Chicken .png'),
(14, '11', 'Burger', 35, '', 'Vegetarian', 'Eatable', 'Burger is a sandwich consisting of one or more cooked patties of ground meat , usually beef , placed inside a sliced bread roll or bun.it is so yummy.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n" " ', 'Burger.png'),
(15, '10', 'Dosa ', 125, ',onion,Potato,chilli,Tomato', 'Vegetarian', 'Eatable', ' Dosa is a kind of pancake made from fermented batter. its may ingredient are rice and black gram.Dosa is part of a south indian diet and popular all over the indian sub continent. it is served hot along with sambar and chutney.', 'Dosa .jpeg'),
(16, '11', 'samosa', 30, ',onion,Potato,chilli', 'Vegetarian', 'Eatable', ' samosa is a fried and baked dish with the savoury filling, such as spiced potatoes,onion ,peas, lentils ,macaroni,noodles or minced meat.', 'samosa.jpeg'),
(17, '11', 'Pizza', 199, 'Selected Ingredient', 'Vegetarian', 'Eatable', ' Pizza is a flatbread generally topped with tomato sauce and cheese and baked in an oven. it is a commonly topped with a selection of vegetables and condiments.', 'Pizza.jpeg'),
(18, '10', 'Navratan Korma', 200, '', 'Vegetarian', 'Eatable', ' This is an indian vegetables korma with nuts,paneer cheese and an adjustables list of vegetables." " ', 'Navratan Korma.Jpeg'),
(21, '13', 'Coa cola', 25, '', 'Select Type', 'Non-Eatable', ' Coa Cola  is a cold drinks." ', 'Coa cola.jpg'),
(23, '10', 'iddli', 200, ',onion,chilli', 'Vegetarian', 'Eatable', ' idli is indian food.', 'iddli.jpeg'),
(24, '13', 'maaza', 45, '', 'Vegetarian', 'Non-Eatable', ' maaza is cold drink made by using mangoes.', 'maaza.jpg'),
(25, '13', 'cold coffee', 100, '', 'Vegetarian', 'Non-Eatable', 'cold coffee is very tasty coffee...make from choclate and cold coffee.', 'cold coffee.jpg'),
(27, '11', 'cake', 180, ',Dry fruits', 'Vegetarian', 'Eatable', ' cake is a sweet dish.', 'cake.jpg'),
(28, '11', 'pizza', 200, '', 'Vegetarian', 'Eatable', ' Pizza is tasty and delicious food." ', 'pizza + colddrink.jpg'),
(29, '11', 'macroni', 300, ',onion,Potato,chilli,Tomato,Vegetables', 'Vegetarian', 'Eatable', 'Macaroni /ËŒmÃ¦kÉ™ËˆroÊŠni/ is a variety of dry pasta traditionally in the shape of narrow tubes. It is also produced in various other shapes and sizes.', 'macroni.jpg'),
(30, '13', 'orange juice', 110, '', 'Vegetarian', 'Eatable', 'Orange juice is the liquid extract of the fruit of the orange tree, produced by squeezing oranges. It comes in several different varieties, including blood orange.', 'orange juice.jpg'),
(31, '12', 'biryani', 300, ',onion,Potato,chilli,Tomato', 'Vegetarian', 'Eatable', ' Biryani, also known as biriyani or biriani, is an Indian mixed rice dish with its origins among the Muslims of the Indian subcontinent', 'biryani.jpg'),
(32, '12', 'pratha', 250, ',onion,Potato,chilli,Dry fruits,Tomato,Vegetables', 'Vegetarian', 'Eatable', ' aloo paratha the stuffing is of spiced mashed potatos. the parathas are usually cooked in ghee but as an alternative you can use oil too.', 'pratha.jpg'),
(33, '11', 'Sandwich', 80, ',onion,Potato,Tomato,Cheese,Vegetables', 'Vegetarian', 'Eatable', ' A sandwich is a food item consisting of one or more types of food, such as vegetables, sliced cheese or meat.', 'Sandwich.jpg'),
(34, '13', 'pepsi', 30, '', 'Vegetarian', 'Non-Eatable', 'Pepsi is an American carbonated soft drink produced and manufactured by PepsiCo.', 'pepsi.jpg'),
(35, '11', 'Aloo Patti', 20, '', 'Vegetarian', 'Eatable', ' Aloo patties The mixture of boiled, mashed, spiced potatoes and green peas is formed into the shape of patty" " ', 'Aloo Patti.jpg'),
(36, '11', 'Aloo tikki', 30, ',Potato,chilli', 'Vegetarian', 'Eatable', ' Aloo Tikki the mixture of boiled, mashed, spiced potatoes and green peas is formed into the shape of patty', 'Aloo tikki.jpg'),
(37, '10', 'bhature', 30, ',onion,Potato,chilli,Tomato,Vegetables', 'Vegetarian', 'Eatable', ' bhature recipe, you just need to keep the dough to leaven for about 2 hours and then begun with the frying.', 'bhature.jpg'),
(38, '13', 'Straberry juice', 35, '', 'Vegetarian', 'Non-Eatable', ' Strawberry Juice is a refreshing fresh fruit juice that is full of vitamin C and antioxidants and lot of invigorating flavor.', 'Straberry juice.jpg'),
(39, '10', 'Tandori naan', 30, ',onion,Potato,chilli,Tomato,Cheese,Vegetables', 'Vegetarian', 'Eatable', ' Tandoori Naan - A traditional soft Indian flatbread made in the oven', 'Tandori naan.jpg'),
(40, '10', 'pepsi', 20, '', 'Vegetarian', 'Non-Eatable', ' pepsi is cold drink.', 'pepsi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` bigint(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`sno`, `name`, `email`, `telephone`, `location`, `city`, `address`, `pincode`) VALUES
(1, 'harman', 'har@gmail.com', 8745237123, 'parbhat chowk', 'Hoshiarpur', 'vpo daroli kalan', 146001),
(2, 'harman', 'har@gmail.com', 8745237123, 'Railway station', 'Hoshiarpur', 'rail line hsp', 146001),
(3, 'harman', 'har@gmail.com', 8745237123, 'Railway station', 'Hoshiarpur', 'rail line hsp', 146001),
(4, 'harman', 'har@gmail.com', 8745237123, 'Railway station', 'Hoshiarpur', 'rail line hsp', 146001),
(6, 'harman', 'har@gmail.com', 8745237123, 'parbhat chowk', 'Jalandhar', 'DAROLI', 144001),
(9, 'karam', 'karams@gmail.com', 9873526172, 'BMC chowk', 'Jalandhar', 'v.p.o jandir', 144201),
(10, 'karam', 'karams@gmail.com', 9873526172, 'jyoti chowk', 'Jalandhar', 'v.p.o jandir', 144201),
(11, 'karam', 'karams@gmail.com', 9873526172, 'Police line', 'Hoshiarpur', 'vpo daroli ', 144104),
(12, 'karam', 'karams@gmail.com', 9873526172, 'Police line', 'Hoshiarpur', 'bus stand', 144001),
(31, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'yuiop', 123),
(32, 'a', 'a@a.com', 123, 'fghjk', 'Hoshiarpur', 'dghjk', 3456789),
(33, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'fghjkl', 266776),
(34, 'karan', 'karan123@gmail.com', 9898989898, 'parbhat chowk', 'Hoshiarpur', 'fghjkl', 3245678),
(35, 'a', 'a@a.com', 123, 'bus stand', 'Hoshiarpur', 'bajwara', 144001),
(36, 'a', 'a@a.com', 123, 'jyoti chowk', 'Jalandhar', 'vpo daroli ', 14901),
(37, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'dfg', 23456),
(38, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'ddd', 144104),
(39, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'ghjk', 0),
(40, 'karam', 'saini@gmail.com', 9464044733, 'shimla pahari', 'Hoshiarpur', 'v.p.o jandir', 144801),
(41, 'karam', 'saini@gmail.com', 9464044733, 'parbhat chowk', 'Jalandhar', 'fghj', 1233456),
(42, 'karam', 'saini@gmail.com', 9464044733, 'jyoti chowk', 'Jalandhar', 'fghjkerty', 344678898),
(43, 'karam', 'saini@gmail.com', 9464044733, 'tyui', 'Jalandhar', 'rtyui', 4),
(44, 'karam', 'saini@gmail.com', 9464044733, 'jyoti chowk', 'Jalandhar', 'fgrgtyuiop', 45567),
(45, 'karam', 'saini@gmail.com', 9464044733, 'Laddowali road', 'Jalandhar', 'v.p.o jandir', 1212122),
(46, 'karam', 'saini@gmail.com', 9464044733, 'bus stand', 'Hoshiarpur', 'vpo daroli ', 12356),
(47, 'karam', 'saini@gmail.com', 9464044733, 'bus stand', 'Hoshiarpur', 'v.p.o jandir', 12445),
(48, 'karam', 'saini@gmail.com', 9464044733, 'Police line', 'Hoshiarpur', 'sasdds', 12121),
(49, 'karam', 'saini@gmail.com', 9464044733, 'jyoti chowk', 'Jalandhar', 'ghjk', 0),
(50, 'karam', 'saini@gmail.com', 9464044733, 'BMC chowk', 'Hoshiarpur', 'jalandhar ahsa ', 12345),
(51, 'karam', 'saini@gmail.com', 9464044733, 'BMC chowk', 'Jalandhar', 'rtyu', 1234),
(52, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'fghjk', 34567),
(53, 'a', 'a@a.com', 123, 'fgh', 'Hoshiarpur', 'dfghj', 345678),
(54, 'karam', 'saini@gmail.com', 9464044733, 'bus stand', 'Jalandhar', 'fhjj', 1234),
(55, 'a', 'a@a.com', 123, 'fr', 'Hoshiarpur', 'ty6ui', 34567),
(56, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'ddd', 144104),
(57, 'a', 'a@a.com', 123, 'BMC chowk', 'Jalandhar', 'aaa', 144104),
(58, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'abc', 144104),
(59, 'a', 'a@a.com', 123, 'bus stand', 'Jalandhar', 'jalnadh', 14401),
(60, 'a', 'a@a.com', 123, 'bus stand', 'Jalandhar', 'jalnadh', 14401),
(61, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'ghj', 144104),
(62, 'a', 'a@a.com', 123, 'dkdl', 'Hoshiarpur', 'tyuio', 0),
(63, 'saini', 'sainikaram@gmail.com', 8735241221, 'asa', 'Hoshiarpur', 'hsp', 144001),
(64, 'a', 'a@a.com', 123, 'parbhat chowk', 'Hoshiarpur', 'fghj', 144104),
(65, 'saini', 'sainikaram@gmail.com', 8735241221, 'parbhat chowk', 'Hoshiarpur', 'hgghhg', 123344),
(66, 'saini', 'sainikaram@gmail.com', 8735241221, 'session chowk', 'Hoshiarpur', 'v.ponans', 12344),
(67, 'karam', 'karamjandir@gmail.com', 9876543234, 'bus stand', 'Jalandhar', 'ajkjkskask', 123433),
(68, 'saini', 'sainikaram@gmail.com', 8735241221, 'bmc chowk', 'Hoshiarpur', 'jalandhar road', 144001),
(69, 'a', 'a@a.com', 123, 'BMC chowk', 'Jalandhar', 'q', 0),
(70, 'a', 'a@a.com', 123, 'BMC chowk', 'Jalandhar', 'hsp', 144001),
(71, 'a', 'a@a.com', 123, 'Ramgarhia chowk', 'Hoshiarpur', 'qwqww', 112344),
(72, 'karam', 'karamjandir@gmail.com', 9876543234, 'parbhat chowk', 'Hoshiarpur', 'vpo jjasja', 123432),
(73, 'karam', 'karamjandir@gmail.com', 9876543234, 'bus stand', 'Hoshiarpur', 'near chowk', 144001),
(74, 'karam', 'karamjandir@gmail.com', 9876543234, 'railway station', 'Hoshiarpur', 'near chowk', 144001),
(75, 'karam', 'karamjandir@gmail.com', 9876543234, 'Roshan ground', 'Hoshiarpur', 'near road', 144001);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cancelorder`
--

CREATE TABLE IF NOT EXISTS `cancelorder` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `oid` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `cancelorder`
--

INSERT INTO `cancelorder` (`cid`, `oid`, `price`, `reason`, `time`, `date`, `ip`) VALUES
(9, 13, 200, 'Item price so high', '01:50:03pm', '08/11/16', '::1'),
(10, 13, 200, 'Item price so high', '01:51:28pm', '08/11/16', '::1'),
(11, 13, 200, 'Item price so high', '01:56:14pm', '08/11/16', '::1'),
(27, 9, 200, 'Order created by mistakes', '11:46:45am', '16/11/16', '::1'),
(28, 9, 200, 'Order created by mistakes', '11:48:00am', '16/11/16', '::1'),
(30, 9, 200, 'Item not arrive on time', '11:25:21am', '17/11/16', '::1'),
(32, 26, 125, 'Item not arrive on time', '01:27:25pm', '21/11/16', '::1'),
(33, 8, 200, 'Order created by mistakes', '01:17:38pm', '22/11/16', '::1'),
(34, 32, 0, 'Order created by mistakes', '12:00:48pm', '24/11/16', '::1'),
(35, 10, 198, 'Item price so high', '02:25:06pm', '25/11/16', '::1'),
(37, 19, 0, 'Need to change payment method', '02:36:36pm', '25/11/16', '::1'),
(39, 25, 0, 'other', '02:39:39pm', '25/11/16', '::1'),
(41, 31, 99, 'Found cheaper some where else', '05:33:38pm', '25/11/16', '::1'),
(42, 36, 200, 'Item price so high', '01:24:45pm', '26/11/16', '::1'),
(43, 37, 200, 'Order created by mistakes', '02:23:15pm', '26/11/16', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE IF NOT EXISTS `contactinfo` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` bigint(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`name`, `email`, `telephone`, `message`) VALUES
('karam', 'sain@gmail.com', 8735628902, ' hello'),
('jkajs', 'karam@gmail.com', 2322343232, ' dsd');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `cname`, `lname`) VALUES
(1, 'Hoshiarpur', 'parbhat chowk'),
(2, 'Hoshiarpur', 'Ramgarhia chowk'),
(3, 'Hoshiarpur', 'Police line'),
(4, 'Hoshiarpur', 'Gandhi chowk'),
(5, 'Hoshiarpur', 'Roshan ground'),
(6, 'Hoshiarpur', 'session chowk'),
(7, 'Hoshiarpur', 'bus stand'),
(8, 'Hoshiarpur', 'IKG PTU CAMPUS '),
(9, 'Hoshiarpur', 'shimla pahari'),
(10, 'Hoshiarpur', 'vishal mega mart'),
(11, 'Jalandhar', 'bus stand'),
(12, 'Jalandhar', 'Railway station'),
(13, 'Jalandhar', 'jyoti chowk'),
(14, 'Jalandhar', 'BMC chowk'),
(15, 'Jalandhar', 'BSf chowk'),
(16, 'Jalandhar', 'Laddowali road'),
(17, 'Jalandhar', 'model house'),
(18, 'Jalandhar', 'attari bazaar'),
(19, 'Jalandhar', 'Mai heera gate'),
(20, 'Jalandhar', 'Rama mandi'),
(21, 'Jalandhar', 'sabji Mandi'),
(22, 'Jalandhar', 'Industrial area'),
(23, 'Hoshiarpur', 'railway station'),
(24, 'Hoshiarpur', 'bmc chowk'),
(31, 'Hoshiarpur', '&lt;script&gt;alert(&quot;hello&quot;);&gt;&lt;/script&gt;'),
(32, 'Hoshiarpur', '&lt;script&gt;alert(&quot;karma&quot;);&gt;&lt;/script&gt;'),
(33, 'Select city', 'sasas');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `oid` int(255) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `shippingaddress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `paymentmetod` varchar(255) NOT NULL,
  `paymentid` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'order book',
  `price` int(255) NOT NULL,
  `productid` varchar(255) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`oid`, `userid`, `shippingaddress`, `city`, `date`, `time`, `ip`, `paymentmetod`, `paymentid`, `status`, `price`, `productid`) VALUES
(8, 'a@a.com', 'bus stand', 'bajwara', '04/11/16', '01:15:37pm', '::1', 'Debit Card', 20, 'cancel by user', 200, ',18'),
(9, 'a@a.com', 'jyoti chowk', 'vpo daroli ', '05/11/16', '11:51:28am', '::1', 'cod', 21, 'cancel by user', 200, ',12'),
(10, 'a@a.com', 'parbhat chowk', 'dfg', '05/11/16', '12:14:42pm', '::1', 'cod', 22, 'cancel by user', 198, ',14'),
(12, 'a@a.com', 'parbhat chowk', 'ghjk', '07/11/16', '12:00:22pm', '::1', 'cod', 24, 'Order Delivered', 200, ',12'),
(13, 'saini@gmail.com', 'shimla pahari', 'v.p.o jandir', '07/11/16', '02:55:08pm', '::1', 'cod', 25, 'cancel by user', 200, ',23'),
(14, 'saini@gmail.com', 'jyoti chowk', 'fghjkerty', '08/11/16', '11:44:59am', '::1', 'cod', 26, 'cancel by user', 1600, ',12'),
(15, 'saini@gmail.com', 'jyoti chowk', 'fgrgtyuiop', '08/11/16', '01:19:42pm', '::1', 'cod', 27, 'cancel by admin', 125, ',15'),
(18, 'saini@gmail.com', 'Police line', 'sasdds', '09/11/16', '02:47:30pm', '::1', 'cod', 30, 'cancel by admin', 200, ',13'),
(19, 'saini@gmail.com', 'BMC chowk', 'jalandhar ahsa ', '11/11/16', '12:11:54pm', '::1', 'cod', 37, 'cancel by admin', 200, ',12'),
(25, 'a@a.com', 'parbhat chowk', 'abc', '17/11/16', '11:34:38am', '::1', 'cod', 44, 'cancel by admin', 125, ',15'),
(27, 'a@a.com', 'bus stand', 'jalnadh', '21/11/16', '01:30:17pm', '::1', 'cod', 46, 'cancel by admin', 525, ',15,18'),
(31, 'sainikaram@gmail.com', 'parbhat chowk', 'hgghhg', '24/11/16', '11:46:12am', '::1', 'cod', 55, 'cancel by user', 99, ',14'),
(35, 'sainikaram@gmail.com', 'bmc chowk', 'jalandhar road', '25/11/16', '05:34:47pm', '::1', 'cod', 57, 'Order Book', 200, ',12'),
(36, 'a@a.com', 'Ramgarhia chowk', 'qwqww', '26/11/16', '11:17:20am', '::1', 'cod', 58, 'cancel by user', 200, ',12'),
(37, 'karamjandir@gmail.com', 'bus stand', 'ajkjkskask', '26/11/16', '02:22:25pm', '::1', 'cod', 59, 'cancel by user', 200, ',12'),
(38, 'karamjandir@gmail.com', 'parbhat chowk', 'vpo jjasja', '26/11/16', '03:35:55pm', '::1', 'cod', 60, 'Order Book', 325, ',12,15'),
(39, 'karamjandir@gmail.com', 'bus stand', 'near chowk', '27/11/16', '09:14:05am', '::1', 'cod', 61, 'Order Book', 200, ',12'),
(40, 'karamjandir@gmail.com', 'railway station', 'near chowk', '27/11/16', '10:08:53am', '::1', 'Netbanking', 62, 'Order Book', 200, ',12'),
(41, 'karamjandir@gmail.com', 'Roshan ground', 'near road', '28/11/16', '03:47:24pm', '::1', 'Netbanking', 63, 'Order Delivered', 200, ',12');

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE IF NOT EXISTS `paymentmethod` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `card` bigint(255) NOT NULL,
  `expiremm` int(255) NOT NULL,
  `expireyy` int(255) NOT NULL,
  `security` int(255) NOT NULL,
  `oid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `type`, `bank`, `name`, `card`, `expiremm`, `expireyy`, `security`, `oid`, `email`) VALUES
(12, 'Credit Card', 'CRP', 'Gaurav', 12345678901234, 3, 2017, 858, 0, 'a@a.com'),
(17, 'Netbanking', '', '', 0, 0, 0, 0, 0, 'a@a.com'),
(18, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(19, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(20, 'Debit Card', 'COB', 'Ha', 12345678901231, 1, 2017, 123, 0, 'a@a.com'),
(26, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(27, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(29, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(30, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(31, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(32, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(33, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(34, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(35, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(36, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(37, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(38, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'saini@gmail.com'),
(39, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(40, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(41, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(42, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(43, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(44, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(45, 'Debit Card', 'CRP', 'a', 0, 0, 0, 0, 0, 'a@a.com'),
(46, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(47, 'Netbanking', 'CSB', '', 0, 0, 0, 0, 0, ''),
(48, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(49, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(50, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'sainikaram@gmail.com'),
(51, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'sainikaram@gmail.com'),
(52, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(53, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(54, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'sainikaram@gmail.com'),
(55, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'sainikaram@gmail.com'),
(56, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'sainikaram@gmail.com'),
(57, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'sainikaram@gmail.com'),
(58, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'a@a.com'),
(59, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'karamjandir@gmail.com'),
(60, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'karamjandir@gmail.com'),
(61, 'cod', 'COD', '', 0, 0, 0, 0, 0, 'karamjandir@gmail.com'),
(62, 'Netbanking', 'HDF', '', 0, 0, 0, 0, 0, 'karamjandir@gmail.com'),
(63, 'Netbanking', 'CNB', '', 0, 0, 0, 0, 0, 'karamjandir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `rid` int(255) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) NOT NULL,
  `person` int(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`rid`, `date`, `person`, `time`, `contact`, `email`, `time1`, `date1`, `ip`) VALUES
(4, '2016-11-21', 2, '01:22', 96253415262, 'karamjandir@gmail.com', '03:17:38pm', '21/11/16', '::1'),
(5, '2016-12-07', 3, '03:10', 9898989807, 'deep@gmail.com', '03:27:15pm', '21/11/16', '::1'),
(6, '2016-11-25', 3, '01:01', 9988766554, 'sharma12gaurav@gmail.com', '04:42:15pm', '22/11/16', '::1'),
(7, '2016-11-25', 3, '01:00', 9876543215, 'sainikaram@gmail.com', '05:37:16pm', '25/11/16', '::1'),
(8, '12-1-2016', 2, '12:00', 9835627125, 'karamjandir@gmail.com', '12:12:48pm', '28/11/16', '::1'),
(9, '1-2-15', 1, '22:04', 9090909090, 'karamjandir@gmail.com', '12:20:38pm', '28/11/16', '::1'),
(10, '', 1, '', 0, 'email', '12:27:12pm', '28/11/16', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `statusorder`
--

CREATE TABLE IF NOT EXISTS `statusorder` (
  `sid` int(255) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `oid` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `deliver` varchar(255) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `statusorder`
--

INSERT INTO `statusorder` (`sid`, `status`, `oid`, `date`, `time`, `deliver`) VALUES
(6, 'In Transit', 12, '21/11/16', '11:29:34am', ''),
(8, 'Order Pick By mom', 12, '21/11/16', '11:30:01am', 'on'),
(9, 'order is out from company', 10, '22/11/16', '02:36:32pm', ''),
(10, 'Out For Delivery', 15, '25/11/16', '12:53:17pm', ''),
(11, 'dispatch from jalandhar', 15, '25/11/16', '12:54:21pm', ''),
(12, 'order is out from company', 19, '25/11/16', '02:04:31pm', ''),
(13, 'Out For Delivery', 38, '27/11/16', '10:30:08am', ''),
(14, 'order is out from company', 40, '27/11/16', '10:33:08am', ''),
(15, 'Out For Delivery', 41, '28/11/16', '03:49:07pm', ''),
(16, 'Order Pick By you', 41, '28/11/16', '03:49:47pm', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
