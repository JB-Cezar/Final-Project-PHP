-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2023 at 01:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FinalProjectPHP`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeId` int(11) NOT NULL,
  `first_name` char(50) DEFAULT NULL,
  `last_name` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `gender` char(50) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `department` char(50) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeId`, `first_name`, `last_name`, `email`, `gender`, `username`, `password`, `department`, `salary`, `picture`) VALUES
(1, 'Addison', 'Mc Caughen', 'amccaughen0@mit.edu', 'Male', 'amccaughen0', '5pzLWBARs', 'Services', 131281, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(2, 'Stella', 'Lindborg', 'slindborg1@redcross.org', 'Female', 'slindborg1', 'tM1s2wg', 'sales', 130052, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(3, 'Eliza', 'Boult', 'eboult2@indiatimes.com', 'Female', 'eboult2', 'iw71fI', 'sales', 148810, 'https://images.pexels.com/photos/2182973/pexels-photo-2182973.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(4, 'Laurie', 'McVey', 'lmcvey3@whitehouse.gov', 'Female', 'lmcvey3', 'VWBd587t', 'Product Management', 140917, 'https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(5, 'Elene', 'Boud', 'eboud4@hc360.com', 'Female', 'eboud4', 'eeepd1MQpMcq', 'sales', 109820, 'https://images.pexels.com/photos/12935094/pexels-photo-12935094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(6, 'Clyve', 'Cuming', 'ccuming5@yelp.com', 'Male', 'ccuming5', 'sAdj6xZxHe', 'Accounting', 147057, 'https://images.pexels.com/photos/8297074/pexels-photo-8297074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(7, 'Roddie', 'Peskin', 'rpeskin6@meetup.com', 'Male', 'rpeskin6', 'TMZtfqZthuKD', 'sales', 111054, 'https://images.pexels.com/photos/4349751/pexels-photo-4349751.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(8, 'Bartel', 'Gribble', 'bgribble7@purevolume.com', 'Male', 'bgribble7', 'Q6QYUW', 'Human Resources', 125268, 'https://images.pexels.com/photos/6592547/pexels-photo-6592547.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(9, 'Haven', 'Dunbobbin', 'hdunbobbin8@utexas.edu', 'Male', 'hdunbobbin8', '5hvNFItsDSK', 'Accounting', 125055, 'https://images.pexels.com/photos/3808818/pexels-photo-3808818.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(10, 'Marten', 'Ginner', 'mginner9@ocn.ne.jp', 'Male', 'mginner9', '6p8UnIqjQk', 'Legal', 128906, 'https://images.pexels.com/photos/5668798/pexels-photo-5668798.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(11, 'Ardath', 'McAnulty', 'amcanultya@wunderground.com', 'Female', 'amcanultya', 'LLoScMi7', 'sales', 95142.8, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(12, 'Cam', 'Donohue', 'codonohueb@moonfruit.com', 'Male', 'codonohueb', 'YC8cYAk', 'Services', 112854, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(13, 'Una', 'Sink', 'usinkc@examiner.com', 'Female', 'usinkc', 'JBWIKCiq8PQ', 'Business Development', 110881, 'https://images.pexels.com/photos/859264/pexels-photo-859264.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(14, 'Eulalie', 'DawemployeeIdowitz', 'edawemployeeIdowitzd@scientificamerican.com', 'Female', 'edawemployeeIdowitzd', 'M69FGTFy', 'sales', 95162.1, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(15, 'Filippa', 'Dugall', 'fdugalle@wikimedia.org', 'Female', 'fdugalle', 'f85pnMY', 'sales', 120643, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(16, 'Lonnard', 'Tibb', 'ltibbf@gov.uk', 'Male', 'ltibbf', 'V3o6EN', 'Research and Development', 130250, 'https://images.pexels.com/photos/756484/pexels-photo-756484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(17, 'Lennard', 'Hallen', 'lhalleng@liveinternet.ru', 'Male', 'lhalleng', 'I3tzMk1fX', 'Research and Development', 132375, 'https://images.pexels.com/photos/756484/pexels-photo-756484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(18, 'Ninnette', 'Bestar', 'nbestarh@themeforest.net', 'Female', 'nbestarh', 'YnPWBXe', 'Human Resources', 134686, 'https://images.pexels.com/photos/6592547/pexels-photo-6592547.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(19, 'Neda', 'Pach', 'npachi@about.com', 'Female', 'npachi', 'ToV8HI8K', 'Legal', 123127, 'https://images.pexels.com/photos/5668798/pexels-photo-5668798.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(20, 'Laraine', 'Lamont', 'llamontj@tamu.edu', 'Female', 'llamontj', 'dkNlBmw', 'sales', 94966.6, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(21, 'Neville', 'Skottle', 'nskottlek@xing.com', 'Male', 'nskottlek', 'EJHV5DD', 'Services', 120857, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(22, 'Stephi', 'Robion', 'srobionl@virginia.edu', 'Female', 'srobionl', 'zL0ABnGDLh', 'Services', 96864.9, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(23, 'Linn', 'Slyme', 'lslymem@comcast.net', 'Male', 'lslymem', 'IjuVHNvq', 'sales', 143238, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(24, 'Uriel', 'employeeIddon', 'uemployeeIddonn@who.int', 'Male', 'uemployeeIddonn', 'UxdUCzo', 'sales', 142420, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(25, 'Melody', 'Crallan', 'mcrallano@scientificamerican.com', 'Female', 'mcrallano', 'sScbe7', 'Accounting', 104032, 'https://images.pexels.com/photos/8297074/pexels-photo-8297074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(26, 'Wilhelmine', 'Hirsthouse', 'whirsthousep@aboutads.info', 'Female', 'whirsthousep', 'jHsUafptyPLi', 'Research and Development', 148942, 'https://images.pexels.com/photos/756484/pexels-photo-756484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(27, 'Sergio', 'Sallans', 'ssallansq@geocities.com', 'Polygender', 'ssallansq', 'aIICRp', 'Services', 141100, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(28, 'Forest', 'Faircliff', 'ffaircliffr@csmonitor.com', 'Male', 'ffaircliffr', '1kv4XNln2nCe', 'Research and Development', 119250, 'https://images.pexels.com/photos/756484/pexels-photo-756484.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(29, 'Alexine', 'Patsall', 'apatsalls@huffingtonpost.com', 'Female', 'apatsalls', 'AYazbPd5e', 'sales', 139124, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(30, 'Jackelyn', 'McKeady', 'jmckeadyt@desdev.cn', 'Non-binary', 'jmckeadyt', 'oNzFkMU50X', 'Product Management', 130682, 'https://images.pexels.com/photos/4467687/pexels-photo-4467687.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(31, 'Yuri', 'O Shea', 'yosheau@apple.com', 'Male', 'yosheau', '5AKa4aw', 'Services', 99638.6, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(32, 'Jocelin', 'Oldroyde', 'joldroydev@wikia.com', 'Female', 'joldroydev', 'v4P7uj6l', 'Human Resources', 82963.9, 'https://images.pexels.com/photos/6592547/pexels-photo-6592547.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(33, 'Ladonna', 'Tombleson', 'ltomblesonw@bandcamp.com', 'Female', 'ltomblesonw', 'i1pet7Fxq8', 'Accounting', 133891, 'https://images.pexels.com/photos/8297074/pexels-photo-8297074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(34, 'Renelle', 'Brayford', 'rbrayfordx@bluehost.com', 'Female', 'rbrayfordx', 'HMCMETw', 'Training', 103880, 'https://images.pexels.com/photos/3201694/pexels-photo-3201694.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(35, 'Garnet', 'Heller', 'ghellery@rakuten.co.jp', 'Bigender', 'ghellery', 'ZW7zh4', 'Business Development', 87996.6, 'https://images.pexels.com/photos/859264/pexels-photo-859264.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(36, 'Tori', 'Bordiss', 'tbordissz@ed.gov', 'Female', 'tbordissz', 'uOKaQZ', 'Marketing', 114047, 'https://images.pexels.com/photos/2422278/pexels-photo-2422278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(37, 'Marietta', 'Lear', 'mlear10@bloomberg.com', 'Female', 'mlear10', 'q6wTc8eZU5p7', 'Accounting', 93920.1, 'https://images.pexels.com/photos/8297074/pexels-photo-8297074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(38, 'Andra', 'Beverage', 'abeverage11@ucsd.edu', 'GenderfluemployeeId', 'abeverage11', '1lXl6cx', 'sales', 113949, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(39, 'Daune', 'Romme', 'dromme12@chronoengine.com', 'Female', 'dromme12', 'vX9oD8gYU43', 'Accounting', 83612.4, 'https://images.pexels.com/photos/8297074/pexels-photo-8297074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(40, 'Mike', 'Collumbine', 'mcollumbine13@huffingtonpost.com', 'Male', 'mcollumbine13', 'zYKNr1v', 'Product Management', 116906, 'https://images.pexels.com/photos/4467687/pexels-photo-4467687.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(41, 'Jane', 'Rosenfield', 'jrosenfield14@networkadvertising.org', 'Female', 'jrosenfield14', 'Ii00eXF', 'Human Resources', 105769, 'https://images.pexels.com/photos/6592547/pexels-photo-6592547.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(42, 'Beau', 'Strathearn', 'bstrathearn15@dailymail.co.uk', 'Male', 'bstrathearn15', 'tp0IFT', 'sales', 88542.1, 'https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(43, 'Godiva', 'Whordley', 'gwhordley16@trellian.com', 'Female', 'gwhordley16', 'FDh7Jx34gvzL', 'Marketing', 116594, 'https://images.pexels.com/photos/2422278/pexels-photo-2422278.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(44, 'Nerissa', 'Dureden', 'ndureden17@nps.gov', 'Female', 'ndureden17', 'Xs29IMWbfQbA', 'Services', 148407, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(45, 'Sharl', 'Herrero', 'sherrero18@dell.com', 'Female', 'sherrero18', 'MbwoOUDmj3', 'Accounting', 119712, 'https://images.pexels.com/photos/8297074/pexels-photo-8297074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(46, 'Salem', 'St Quenin', 'sstquenin19@tinyurl.com', 'Male', 'sstquenin19', 'UWMf9RW', 'Services', 112947, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(47, 'Claudianus', 'Males', 'cmales1a@deviantart.com', 'Bigender', 'cmales1a', 'VnKrcSQOi0', 'Product Management', 116168, 'https://images.pexels.com/photos/4467687/pexels-photo-4467687.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(48, 'Dani', 'Wasiel', 'dwasiel1b@dedecms.com', 'Male', 'dwasiel1b', 'C2iHgyBVRc', 'Product Management', 147876, 'https://images.pexels.com/photos/4467687/pexels-photo-4467687.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(49, 'Francene', 'Gemlbett', 'fgemlbett1c@skype.com', 'Female', 'fgemlbett1c', '6h8gocpNNZIV', 'Services', 103864, 'https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(50, 'Craggy', 'Pawellek', 'cpawellek1d@bloglovin.com', 'Polygender', 'cpawellek1d', 'fwElfr', 'Business Development', 96786.4, 'https://images.pexels.com/photos/859264/pexels-photo-859264.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuId` int(11) NOT NULL,
  `menuName` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuId`, `menuName`) VALUES
(1, 'Mexican'),
(2, 'Brazilian'),
(3, 'Indian'),
(4, 'Korean'),
(5, 'Japanese'),
(6, 'Colombian');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `pictureId` int(11) NOT NULL,
  `picture` varchar(5000) DEFAULT NULL,
  `truckId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`pictureId`, `picture`, `truckId`) VALUES
(1, 'https://nenosmexican.com/wp-content/uploads/2021/04/FoodTruck1.png', 1),
(2, 'https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_1024,h_684/https://zacsburgers.com/wp-content/uploads/2017/06/food-truck-festivals-1024x684.jpg', 1),
(3, 'https://interactive.wttw.com/sites/default/files/styles/full/public/images/2022/05/20/food%20truck%20fest.jpg?itok=zGdRpn0L', 1),
(4, 'https://d21yqjvcoayho7.cloudfront.net/wp-content/uploads/2022/03/23/ven12_ja_25mar_1beer.jpg', 1),
(5, 'https://torontofoodtrucks.ca/wp-content/uploads/2015/06/20150605-macandcheesefest2048-40.jpg', 2),
(6, 'https://thefoodpornographer.com/wp-content/uploads/2015/04/DSCF4563.jpg', 2),
(7, 'https://media.blogto.com/events/2018/04/17/Da_f2SFVMAILCiG.jpg?w=2048&cmd=resize&quality=70', 2),
(8, 'https://media.blogto.com/events/2018/04/17/Da_f2SFVMAILCiG.jpg?w=2048&cmd=resize&quality=70', 2),
(9, 'https://saltwire.imgix.net/2022/7/10/indian-street-food-truck-a-venture-between-boss-and-employee_lnEveoQ.jpg?cs=srgb&fit=crop&h=568&w=847&dpr=1&auto=enhance%2Ccompress%2Cformat', 3),
(10, 'https://nmgprod.s3.amazonaws.com/media/files/42/f7/42f74085497ea051bb2552287d209d17/cover_image.jpeg.760x400_q85_crop_upscale.jpg', 3),
(11, 'https://kubrick.htvapps.com/htv-prod-media.s3.amazonaws.com/images/heard-1623185614.jpg', 3),
(12, 'https://www.mtlblog.com/media-library/an-edition-of-les-premiers-vendredis-on-montreal-s-montreal-s-olympic-stadium-esplanade.jpg?id=33637243&width=1245&height=700&quality=85&coordinates=148%2C0%2C0%2C0', 3),
(13, 'https://media-cdn.tripadvisor.com/media/photo-s/17/9b/2d/04/a-korean-tv-show-about.jpg', 4),
(14, 'https://www.todocanada.ca/wp-content/uploads/Megacone-Creamery-e1654608013708.jpg', 4),
(15, 'https://mtltimes.ca/wp-content/uploads/elementor/thumbs/Montreal-Food-truck-festival-2019-min-oxspd6upwq7p04rtboj83cqa97j2s0gnphv7amc66s.jpg?8dcf9f&8dcf9f', 4),
(16, 'https://i0.wp.com/mtltimes.ca/wp-content/uploads/2020/11/Montreal-Food-Truck-festival-first-friday-3.jpg?resize=520%2C245&ssl=1', 4),
(17, 'https://1.bp.blogspot.com/-P5CUsw60p20/YQmVc15N9wI/AAAAAAABPmE/800x8GTZvbAjhQMTvzIrMmgfPp8pqcGnACPcBGAsYHg/w640-h476/20210731_111932.jpg', 5),
(18, 'https://glamadelaide.com.au/wp-content/uploads/2021/03/Crowd1.jpg', 5),
(19, 'https://glamadelaide.com.au/wp-content/uploads/2021/03/Food-Trucks2.jpg', 5),
(20, 'https://glamadelaide.com.au/wp-content/uploads/2021/03/Koinobori-Carp-Streamers.jpg', 5),
(21, 'https://colombianstation.com/wp-content/uploads/2020/08/Food-Truck.jpg', 6),
(22, 'https://uproxx.com/wp-content/uploads/2018/07/truck-grid-uproxx.jpg', 6),
(23, 'https://smallbiztrends.com/ezoimgfmt/media.smallbiztrends.com/2022/04/food-truck-festival-850x476.png?ezimgfmt=rs:660x370/rscb12/ng:webp/ngcb12', 6),
(24, 'https://www.canadianfoodtruckfestivals.com/wp-content/uploads/pickering_1937.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `price` float(5,2) DEFAULT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `picture` varchar(5000) DEFAULT NULL,
  `menuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `price`, `description`, `picture`, `menuId`) VALUES
(1, 'Chicken Tacos', 10.00, 'Three grilled soft corn tortillas, with diced onion and cilantro. Side of grilled onion & cactus, lime and our signature hot sauce. Choose from salsa verde (green) or salsa roja (red).', 'https://www.allrecipes.com/thmb/UuPQ632-v8TVuGv3kH7buxuO_mw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/242342-fiesta-slow-cooker-shredded-chicken-tacos-ddmfs-3X2-0902-775cf5010b5b46cdbdf2ca50993628a9.jpg', 1),
(2, 'Cheesesteak Tacos', 12.00, 'Grilled steak and sautéed onion topped with our white cheese sauce and freshly diced cilantro', 'https://img1.wsimg.com/isteam/ip/c451c370-1b12-4117-85ed-4c20ffaa75b3/B4C9CC2D-1E2E-4AD5-94A5-BDCB664C7828_1_201_a.jpeg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1280', 1),
(3, 'Dry Burrito ', 11.00, 'Your choice of grilled steak, chicken or ground beef. Seasoned rice, beans, cheese, lettuce, tomato, and crema rolled in a 12 flour tortilla. Served with a side of our red hot sauce.', 'https://www.inspiredtaste.net/wp-content/uploads/2019/10/Easy-Breakfast-Burrito-Recipe-1-1200.jpg', 1),
(4, 'Cheese Quesadilla ', 10.00, 'Grilled 10 flour tortilla with melted cheddar jack cheese, served with side of cream and garnished with lettuce and tomato.', 'https://www.simplyrecipes.com/thmb/S77yyGItsM98kjwNacwU0hC9XpI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Quesadilla-LEAD-4-523a569564b4453484be4cdf05ce0d6a.jpg', 1),
(5, 'Nachos', 8.00, 'Hand cut tortillas fried into crispy chips and topped to your liking. Add any additional topping of pico, guacamole, cream, or extra cheese.', 'https://static.onecms.io/wp-content/uploads/sites/43/2023/01/06/51147-SuperNachos-MFS-2X3-0095.jpg', 1),
(6, 'Churro', 5.00, 'Fried pastry stick coated with cinnamon and sugar. ', 'https://vegnews.com/media/W1siZiIsIjI0Njg5L1ZlZ05ld3MuQ2h1cnJvcy5qcGciXSxbInAiLCJ0aHVtYiIsIjEzNjB4ODA0IyIseyJmb3JtYXQiOiJqcGcifV0sWyJwIiwib3B0aW1pemUiXV0/VegNews.Churros.jpg?sha=3868f3a3467c856d', 1),
(7, 'Coxinha', 12.00, 'Crispy potato-based teardrop shaped croquette stuffed with shredded chicken and spices. Served with a side of aioli sauce (optional).', 'https://tb-static.uber.com/prod/image-proc/processed_images/924e7c1042ca570a1f5492b47041eed3/5954bcb006b10dbfd0bc160f6370faf3.jpeg', 2),
(8, 'Queijo Coalho ', 13.00, 'Brazilian Grilled Cheese. A firm but very lightweight cheese that is common in Northeastern Brazil. Served with sweet and spicy house made pepper jelly (optional).', 'https://tb-static.uber.com/prod/image-proc/processed_images/095a245be8b298844d24a8a5f811e43d/5954bcb006b10dbfd0bc160f6370faf3.jpeg', 2),
(9, 'Calabresa', 12.00, 'Cured sausage with caramelized onion and sautéed kale. Served with seasoned fries', 'https://tb-static.uber.com/prod/image-proc/processed_images/2752c3376e8f4bc8654044aeb2497683/5954bcb006b10dbfd0bc160f6370faf3.jpeg', 2),
(10, 'Polenta', 10.00, 'Fries made of ground cornmeal with vegetable broth. Served with garlic aioli dip (optional). Vegan option without garlic aioli dip.', 'https://tb-static.uber.com/prod/image-proc/processed_images/08bf4d5e9a29a07fc916446a7a972217/5954bcb006b10dbfd0bc160f6370faf3.jpeg', 2),
(11, 'Bolinha de Queijo ', 14.00, 'Crispy potato-based croquette stuffed with mozzarella cheese and oregano. Served with a side of aioli sauce (optional).', 'https://tb-static.uber.com/prod/image-proc/processed_images/0b07e90ff29457854a4c5ff0c995f542/5954bcb006b10dbfd0bc160f6370faf3.jpeg', 2),
(12, 'Mandioca', 9.00, 'Crispy cassava root fries garnished with parmesan cheese. Vegan option without parmesan cheese', 'https://tb-static.uber.com/prod/image-proc/processed_images/2ed5feb1983af674c12c7e0f3304628a/5954bcb006b10dbfd0bc160f6370faf3.jpeg', 2),
(13, 'SAMOSAS ', 7.00, 'flaky, handmade empanada-like pastries stuffed with curried potatoes; tamarind and cilantro chutney', 'https://images.squarespace-cdn.com/content/v1/54090308e4b0ba22079ce4dd/1508429230449-ARVFJW9MRDWAXB1ELY86/SAMOSAS?format=750w', 3),
(14, 'TIKKA MASALA', 15.00, ' turmeric white rice, chana garbanzo masala, pico kachumber. our iconic tikka masala choice of chicken or paneer', 'https://images.squarespace-cdn.com/content/v1/54090308e4b0ba22079ce4dd/1508430792710-10BOI6PAR6YC9TYCDNKW/TIKKA+MASALA', 3),
(15, 'KASHMIRI LAMB ', 16.00, ' turmeric white rice, chana garbanzo masala, pico kachumber,a kashmiri stew of lamb shoulder & potatoes', 'https://images.squarespace-cdn.com/content/v1/54090308e4b0ba22079ce4dd/1508430912251-862CBFMJ4VKFQIC1FB0C/KASHMIRI+LAMB', 3),
(16, 'HELLA VEGAN', 15.00, 'turmeric white rice, chana garbanzo masala, pico kachumber,handmade samosa, chutneys (V)', 'https://images.squarespace-cdn.com/content/v1/54090308e4b0ba22079ce4dd/1510688173225-T45ZBRFSTSAUGI465T8D/HELLA+VEGAN', 3),
(17, 'FRIES', 6.00, 'an indian-inspired poutine - criss cut sweet potato fries, cheese choice of chicken, paneer or hella vegan ', 'https://images.squarespace-cdn.com/content/v1/54090308e4b0ba22079ce4dd/1508439162315-9299MVNJWIBLXVXR14YI/SEXY+FRIES', 3),
(18, 'DECONSTRUCTED SAMOSA', 17.00, 'an inside out phenomenon loaded with chana garbanzo masala, pico kachumber, chutneys, crispy sev noodles, mini samosas', 'https://images.squarespace-cdn.com/content/v1/54090308e4b0ba22079ce4dd/1508438957650-MQ3AFY1YOMA98YC3D2QW/DECONSTRUCTED+SAMOSA', 3),
(19, 'Bibimbap', 13.00, 'White Rice, Sesame Oil +,Fresh Arugula ,Sautéed Zucchini ,Sautéed Carrots ,Pickled Daikon Radish ,Seasoned Blenched Bean Sprouts ,Eggs , Sesame Seed ,Side of Gochujang (Pepper Paste Sauce)', 'https://www.eggs.ca/assets/RecipeThumbs/EFC-BIBIMBAP-1280x720.jpg', 4),
(20, 'Original Kimbop', 12.00, 'Korean style sushi roll with cucumber, carrot, egg, fried tofu, burdock root, pickled radish.', 'https://www.seriouseats.com/thmb/WtcBGMWbdUcAIVe8zg4VCm2aqc4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__2020__01__20200122-gimbap-vicky-wasik-24-f5ed1075f35846a29e0812ee053a1bf8.jpg', 4),
(21, 'Cheese Kimbop', 10.00, 'Half string cheese / Half sausage.', 'https://christieathome.com/wp-content/uploads/2021/05/Kimchi-Fried-Rice-Cheese-Kimbap-11.jpg', 4),
(22, 'Original Toppoki', 13.00, 'Spicy rice cakes with fish cakes & veggie.', 'https://asset-a.grid.id/crop/0x0:0x0/945x630/photo/grid/original/7883_toppoki.jpg', 4),
(23, 'Pan Fried Toppoki', 13.00, 'Vegan. Sweet & spicy pan fried rice cakes', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs03xPncDA8rC0gs5jLvswsFUWggBa5zhbHw&usqp=CAU', 4),
(24, 'Kimchi Fried Rice', 16.00, 'Spicy fried rice with kimchi, pork, and egg.', 'https://www.simplyrecipes.com/thmb/jYm7ax6fInIcvskRiWF1yLESBeI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Kimchi-Fried-Rice-LEAD-4-1b73ba2f1c6b4d9fb9d25430ab73c32f.jpg', 4),
(25, 'Prawn Avocado Roll', 10.00, 'Boiled shrimp, avocado, Kinshi-egg and tobiko', 'https://takenakavancouver.com/wp-content/uploads/2021/07/prawn-avocado-roll-647x440.jpg', 5),
(26, 'Salmon Avocado Roll', 12.00, 'Salmon, avocado and Kinshi-egg', 'https://takenakavancouver.com/wp-content/uploads/2021/07/salmon-avocado-roll-647x440.jpeg', 5),
(27, 'Yuzu Tuna Roll', 15.00, 'Yuzu sauce marinated tuna tataki, Yuzu-Kosho mayo, Yuzu tobiko, pickles and cucumber', 'https://takenakavancouver.com/wp-content/uploads/2021/07/yuzu-tuna-roll-647x440.jpeg', 5),
(28, 'Scallop Roll', 13.00, 'Scallop, salmon, cucumber, Shiso leaf, Kinshi-egg and tobiko', 'https://takenakavancouver.com/wp-content/uploads/2021/07/scallop-roll-647x440.jpeg', 5),
(29, 'Unagi Roll', 14.00, 'Unagi(eel), cucumber, Kinshi-egg and tobiko', 'https://takenakavancouver.com/wp-content/uploads/2021/07/unagi-roll-647x440.jpeg', 5),
(30, 'Seafood Bara Chirashi Bowl', 20.00, 'Vibrant coloured sashimi cubes, snow crab, scallop, salmon roe, sweet egg omelet, radish sprouts, shiso marinated kelp, tobiko are festively spread on top of original sushi rice.', 'https://takenakavancouver.com/wp-content/uploads/2019/02/Seafood-Bara-Chirashi-647x523.jpg', 5),
(31, 'Colombian Style Beef Arepa', 10.00, 'Shredded beef, guacamole, Colombian Creole sauce, mozzarella', 'https://bestfoodtrucks.mo.cloudinary.net/https://bft-production.storage.googleapis.com/resources/items/6463/images/medium/Colombian_Beef.jpg?1645473851&tx=f_auto,c_limit,g_center,w_750,q_90&resource_type=image', 6),
(32, 'Chimichurri Steak & Fries', 12.00, 'Large fries topped with 6oz flame grilled sirloin steak, handmade chimichurri sauce', 'https://bestfoodtrucks.mo.cloudinary.net/https://bft-production.storage.googleapis.com/resources/items/6497/images/medium/Steak___Fries.jpg?1636226857&tx=f_auto,c_limit,g_center,w_750,q_90&resource_type=image', 6),
(33, 'Colombian Empanadas- Beef', 9.00, 'Colombian Empanadas 3 per order beef & potato in a corn shell served with spicy aji on the side', 'https://bestfoodtrucks.mo.cloudinary.net/https://bft-production.storage.googleapis.com/resources/items/22126/images/medium/Empanadas.jpg?1590760420&tx=f_auto,c_limit,g_center,w_750,q_90&resource_type=image', 6),
(34, 'Colombian Tacos (3 per order)', 13.00, '3 tacos, choose chicken, beef or pork, topped with pico de gallo, guacamole, chipotle mayo, mozzarella in soft corn tortillas Served with freshly fried tortilla chips', 'https://bestfoodtrucks.mo.cloudinary.net/https://bft-production.storage.googleapis.com/resources/items/6493/images/medium/data.jpg?1616156994&tx=f_auto,c_limit,g_center,w_750,q_90&resource_type=image', 6),
(35, 'Fiesta Pulled Pork Arepa', 10.00, 'Slow roasted mojo pulled pork, black bean & corn salsa, avocado ranch sauce, mozzarella', 'https://bestfoodtrucks.mo.cloudinary.net/https://bft-production.storage.googleapis.com/resources/items/13673/images/medium/Fiesta.jpg?1645466487&tx=f_auto,c_limit,g_center,w_750,q_90&resource_type=image', 6),
(36, 'Loaded Fries', 12.00, 'Large bowl of fries topped with guacamole, pico de gallo, shredded mozzarella, sour cream, Colombian Creole sauce, Chipotle mayo and choice of chicken, beef or pork', 'https://bestfoodtrucks.mo.cloudinary.net/https://bft-production.storage.googleapis.com/resources/items/6495/images/medium/Loaded_Fries.jpg?1636308765&tx=f_auto,c_limit,g_center,w_750,q_90&resource_type=image', 6);

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `truckId` int(11) NOT NULL,
  `truckName` varchar(30) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `dayOff` varchar(30) DEFAULT NULL,
  `openHour` varchar(30) DEFAULT NULL,
  `closeHour` varchar(30) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `address` varchar(5000) DEFAULT NULL,
  `logo` varchar(5000) DEFAULT NULL,
  `menuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`truckId`, `truckName`, `category`, `dayOff`, `openHour`, `closeHour`, `description`, `email`, `phoneNumber`, `address`, `logo`, `menuId`) VALUES
(1, 'La Mosca Cocina Mexicana', 'Mexican food', 'Sunday', '10', '16', 'Tasty Truck is serving up everything you could ask for on the streets of Vancouver! This is Mexican food made right. Crafted with fresh and meticulously prepared ingredients, you wont regret paying this food trailer a visit.Established in June 2009.  Our menu offers quality, freshness and affordability with an environmental and nutritional conscience.', 'tgullam0@ow.ly', '218-244-1604', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.5290973332835!2d-123.12332588847003!3d49.28531957044887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867181bfa70395%3A0xa6b3654d1dade921!2sVancouver%2C%20BC%20V6C%202R7!5e0!3m2!1sen!2sca!4v1686121212978!5m2!1sen!2sca ', 'https://images-workbench.99static.com/mca4De76LMQRgukgDRgaElmv4Qw=/http://s3.amazonaws.com/projects-files/157/15766/1576644/0a2bdb34-ea78-44bf-8d7b-8a673f1ddd03.jpg', 1),
(2, 'Salgadinhos Brazil', 'Brazilian food', 'Monday', '9', '18', 'Espeto Brazil  is giving  an authentic experience at every turn. It iss a food truck  that is  got traditional Brazilian cuisine on board, which you probably gathered given the namesake. What you might not guess, however, is that they have updated it for the modern foodie scene, giving you street food on a whole new level of delicious.', 'mwoolliams1@reuters.com', '413-300-9837', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.7083436661237!2d-123.12144833847017!3d49.28192347068933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486717f08f80c77%3A0x44d7f76bbaf3c9fa!2sVancouver%2C%20BC%20V6Z%201E4!5e0!3m2!1sen!2sca!4v1686121696480!5m2!1sen!2sca', 'https://img.freepik.com/premium-vector/brazilian-cuisine-food-menu-brazil-national-dishes_8071-34711.jpg?w=1380', 2),
(3, 'Indian Express', 'Indian food', 'Tuesday', '10', '19', 'Indian Express is an unorthodox food truck, and we mean that in the best way of course. Its hard enough to find authentic Indian food in Vancouver, let alone out of a food truck. But Indian Express is the tasty exception to the rule, importing the exotic flavors and spices from a country whose unique cuisine is uniquely satisfying to all. This food trucks specialty is in street food, culled from the streets of India', 'centicott2@google.co.uk', '805-273-6405', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.8271781891194!2d-123.11805748847036!3d49.27967187084883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486717e99624263%3A0xbcf5014e2923c1fb!2s350%20W%20Georgia%20St%2C%20Vancouver%2C%20BC%20V6B%206B3!5e0!3m2!1sen!2sca!4v1686121772307!5m2!1sen!2sca', 'https://img.freepik.com/premium-vector/indian-food-logo-template_66941-114.jpg', 3),
(4, 'Korean Kitchen', 'Korean food', 'Wednesday', '11', '20', 'Korean Kitchen is bringing a taste of authenticity to the streets of Vancouver. Cant get more real than that. But this isnt your regular old Korean food truck. No, Korean Kitchen sticks to tradition by serving up a bevy of traditional eats, but also brings a distinctive Own style to cater to the ever popular fusion food truck trend.', 'cburtonwood3@over-blog.com', '186-401-2207', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20841.641215201922!2d-123.1390397479556!3d49.234599533449824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f54e6bc621%3A0xb4b7ef4d0fe7a488!2sQueen%20Elizabeth%20Park!5e0!3m2!1sen!2sca!4v1686122147510!5m2!1sen!2sca', 'https://thumbs.dreamstime.com/b/korean-food-logo-round-linear-dishes-white-background-eps-179136501.jpg', 4),
(5, 'Sushi GO!', 'Japanese food', 'Wednesday', '10', '19', 'This great sushi truck is serving the OC curbsides with fantastic sushi pieces and rolls. All the classic nigiri and rolls you might expect, plus a few new tasty options. With hand rolls and veggie options to round out the menu, this truck cant go wrong! Stop by today!', 'bmacvicar4@blinklist.com', '422-848-7697', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.5359745893306!2d-123.24495948847117!3d49.2662404717997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548672c7f30a003f%3A0x7087c7e84660155d!2s2155%20Allison%20Rd%2C%20Vancouver%2C%20BC%20V6T%201T5!5e0!3m2!1sen!2sca!4v1686122246268!5m2!1sen!2sca', 'https://media.istockphoto.com/id/1219849596/vector/japanese-sushi-seafood-logo-design-vector-chopstick-and-bowl-template-food-and-beverages.jpg?s=612x612&w=0&k=20&c=qg0BTTsvPsMuoKiJPTU8xjXR31MPjurJ6xGuvDTvzaU=', 5),
(6, 'Delicias Colombianas', 'Colombian food', 'Thursday', '12', '21', 'Quick Bites is San Antonios premier way to get great Colombian cuisine on the go! Youll find only the finest in authentic, home style Colombian dishes, like their delicious empanadas and fried plantains. Sure to satisfy your hunger, Quick Bites is just right for you!', 'bseymour5@oaic.gov.au', '341-392-2142', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.725955875919!2d-123.14206358847024!3d49.281589770713005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486722e9770fef3%3A0x77039d947c816f86!2sBeach%20Ave%2C%20Vancouver%2C%20BC!5e0!3m2!1sen!2sca!4v1686122369160!5m2!1sen!2sca', 'https://awelp.com/wp-content/uploads/2018/10/logo-colombiana-color-a.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `userID` int(11) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `gender` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeId`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuId`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pictureId`),
  ADD KEY `truckId` (`truckId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `menuId` (`menuId`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`truckId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `menuId` (`menuId`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`truckId`) REFERENCES `truck` (`truckId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`menuId`) REFERENCES `menu` (`menuId`);

--
-- Constraints for table `truck`
--
ALTER TABLE `truck`
  ADD CONSTRAINT `truck_ibfk_1` FOREIGN KEY (`menuId`) REFERENCES `menu` (`menuId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
