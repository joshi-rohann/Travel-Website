-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 06:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(24) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `people` int(11) NOT NULL,
  `arrival` varchar(51) NOT NULL,
  `departure` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `address`, `destination`, `people`, `arrival`, `departure`) VALUES
(1, 'Pradip Upreti', 'upreti16@gmail.com', '9812345678', 'Narayantar', 'Pokhara', 2, '2022-07-05', '2022-07-11'),
(2, 'Prem Kumar Jha', 'jhaprem17@gmail.com', '9812345689', 'Kumrintar', 'Lumbini', 3, '2022-07-01', '2022-07-05'),
(4, 'Pritam Acharya', 'acharyapritam18@gmail.com', '9801234567', 'Bhedetar', 'Janakpur', 4, '2022-07-20', '2022-07-21'),
(5, 'Sushant Khatri ', 'khatrasushant19@gmail.com', '9876543210', 'Udaypur', 'Manag & Mustang', 5, '2022-08-02', '2022-08-12'),
(6, 'Subodh Ghimire', 'ghimiresubodh20@gmail.com', '9800000001', 'Bhaisepati', 'Lumbini', 3, '2022-07-18', '2022-07-22'),
(7, 'Rohan Thapa', 'thaparohan16@gmail.com', '9800000002', 'Dhadhing', 'Pokhara', 4, '2022-08-04', '2022-08-08'),
(8, 'Nitin Rai ', 'nitinraai@gmail.com', '9801020304', 'Dharan', 'Manag & Mustang', 2, '2022-07-14', '2022-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `repassword` varchar(40) NOT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`, `repassword`, `usertype`) VALUES
(5, 'joshi_rohan_', 'thaparohan2111@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', 'user'),
(6, 'rohan', 'joshirohan2111@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', 'admin'),
(7, 'hacker', 'hacker@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `title` varchar(18) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(40) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `title`, `description`, `image`, `pid`) VALUES
(3, 'Pokhara', 'Pokhara is a city on Phewa Lake, in central Nepal. It’s known as a gateway to the Annapurna Circuit, a popular trail in the Himalayas.', '836798travel.jpg', 18),
(4, 'Lumbini', 'Lumbini is one of the holiest places of one of the world great religions, and its contains important evidence about the nature of Buddhist pilgrimage.', '446536travel.jpg', 15),
(5, 'Janakpur', 'Janakpur is a sub-metropolitan city in Dhanusha District, Madhesh Province, Nepal. The city is a hub for religious and cultural tourism.', '252162travel.jpg', 5),
(6, 'Manag & Mustang', 'As Manang Mustang is also Himalayan valley. The broad valley of the Marshyangdi River presents Stunning view of Annapurna mountain range.', '144070travel.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `picture` varchar(38) NOT NULL,
  `title` varchar(22) NOT NULL,
  `description` text NOT NULL,
  `pernight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `picture`, `title`, `description`, `pernight`) VALUES
(5, '158790travel.jpg', 'Janakpur', ' The prime attraction of Janakpur is the magnificent temple dedicated to Sita called the Janaki Mandir. Janakpur is also famous for its temples, ponds, Mithila art and vibrant festivals. Janakpur is approximately 390 km and 10-hour drive from Kathmandu. One can also take a 40-minute flight to Janakpur city from Kathmandu. Janakpur is located in the Terai, where the climate is humid subtropical: the months of March and April are hot, dry, and windy. The wet season lasts from May to September, followed by mild dry autumn from October to November. It is a cold winter from December to February.', 3500),
(12, '891741travel.jpg', 'Manang & Mustang', 'Mustang is a vast and arid valley characterized by eroded canyons, colored stratified rock formations and barren high-altitude deserts. There is the average amount of annual rainfall which is less than 260 mm at Jomsom in Lower Mustang. In spring and autumn, the place generally gets dry, but summer monsoons bring some precipitation. In winter, the mean minimum monthly air temperature falls -2.7 degree Celsius, while in summer the maximum monthly air temperature reaches up to 23.1 degree Celsius. Mustang is very rich in biodiversity, especially in trans-Himalayan biodiversity. The vegetation of Mustang is characterized by steppe type and has grasslands with scrub', 5500),
(15, '290992travel.jpg', 'Lumbini', 'The most popular attraction of Lumbini, the Maya Devi temple is located at the place where Maya Devi gave birth to the Lord Buddha. Some of the other famous temples in Lumbini include the International Gautami Nuns temple, Nepal Buddha temple and Dharma Swami Maharaja Buddha Vihara. Lumbini, the birthplace of the Buddha, sits on Nepal\'s Western Terai, close to the border with India. It\'s around 155 miles (250 kilometers) from Kathmandu. Temperature hovers around 25°c and at night it feels like 15°c. In December, Lumbini gets 3.13mm of rain Humidity is close to 50%.', 3800),
(18, '514504travel.jpg', 'POKHARA', 'Pokhara’s tranquil beauty has been the subject of inspiration for many travel writers. Its pristine air, spectacular backdrop of snowy peaks, blue lakes and surrounding greenery make it ‘the jewel in the Himalaya’, a place of remarkable natural disposition. With the magnificent Annapurna range forming the backdrop and the serenity of the Cluster of 9 Lakes with three major ones - Phewa, Rupa and Begnas – Pokhara is a great destination for a long relaxing holiday. Pokhara Valley, gateway to the Annapurna region where many a trekker finds his Shangri-la, sits high on the list of ‘must visit’ places in Nepal.', 4200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
