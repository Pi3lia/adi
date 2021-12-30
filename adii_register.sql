-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 08:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adii.register`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `gambar`, `caption`, `dibuat`) VALUES
(7, 'https://images.tokopedia.net/img/cache/300-square/VqbcmM/2021/7/19/9d0d24e6-1ed9-46a7-b712-e6b3482ea830.jpg.webp?ect=4g', 'k', '0000-00-00 00:00:00'),
(8, 'LOL.jpg', 'set', '0000-00-00 00:00:00'),
(9, 'gunung_waifu2x_art_noise1_tta_1.png', 'wahh', '0000-00-00 00:00:00'),
(10, 'kucing1.jpg', 'miaww', '0000-00-00 00:00:00'),
(11, 'airterjun.jpg', 'gg', '0000-00-00 00:00:00'),
(16, 'kucing2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet quidem dignissimos minus corrupti fuga tempore! Cupiditate commodi corrupti itaque. Quidem ipsa reprehenderit facere a nobis accusantium neque eligendi quibusdam?', '0000-00-00 00:00:00'),
(17, 'pp.png', 'Sam', '0000-00-00 00:00:00'),
(18, 'pp.png', 'Sam', '0000-00-00 00:00:00'),
(19, '16407709993818136722835964953399.jpg', 'Sam', '0000-00-00 00:00:00'),
(20, 'FB_IMG_16406032347053248.jpg', 'dew', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(9, 'aw@gmail.com', 'asd'),
(10, 'kyh@gmail.com', 'qwe'),
(11, 'ha@gmail.com', '123'),
(12, '', ''),
(13, '', ''),
(14, 'adyy@gmail.com', 'adyy'),
(15, 'dry@g', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
