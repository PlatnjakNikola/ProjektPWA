-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 02:35 AM
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
-- Database: `platnjak`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `korisnicko_ime` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Nikola', 'Platnjak', 'nikola', '$2y$10$a7kTW2lR8OG3rg9grwFBwe.qZUnZKsEb9buGAh/oHta5xf6mvs9Lu', 1),
(2, 'kiki', 'kiki', 'kiki', '$2y$10$nYLyyp42aRqZPmMJ8mYRJOzW3j9HtFPJDjat3KKgjXXJwUPlfVstu', 0),
(3, 'mama', 'mama', 'mama', '$2y$10$YUwOh7YUzYHg.uceaLhC1O7pE37bXrxuyXXcGnu2Vxi16EbbFwXmq', 0),
(4, 'julijana', 'julijana', 'julijana', '$2y$10$To78LfOqiQKBPJ.fn1epbeFzBlSFvi7kdp4KxPVdiZcbKjpnFQ14y', 0),
(5, 'martinovka', 'martinovka', 'martinovka', '$2y$10$eWnLbfmbAZGFlOdPtOXlCOImPlmO5PJ7d24hMWvA90zCo3eA5ePWG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `platnjakprojekt`
--

CREATE TABLE `platnjakprojekt` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `platnjakprojekt`
--

INSERT INTO `platnjakprojekt` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(2, '13.06.2022.', 'nesto novo o vijestimaaaaaa', 'sdkfaskdfm asdfmad asjdfkl   asmkldf  dkasf', 'asmdfklmasdlkf asd fjaskd fasd kassd flkasjdfasd ajsdf sdf sadf asdfjkasd fasdf asdf sdjkfkl asdkfl  jawsd df asdf lkjasd jasdf isadfkjlasdf asdfjasd fjokasdf asdflk jlkjasdfj sdf', 'prva.jpg', 'sport', 0),
(3, '13.06.2022.', 'asdfaasdfasdfasdfasdfasdf', 'adfasdfadf ea cxfasd vddsa dsacasd vcdsc asdc', 'sdcvasdfcasdcasd fasdc asd jfusd hfhs adfjh sdjkf hsadiuf hasjkhd fhjks hfhjkasd hfjsd fhasjdf hasjdf hasjdf hasdjf asdhf a sdf hjkas dfbajksd fuid ahisd cbuiozhasd ', 'druga.jpg', 'sport', 0),
(4, '13.06.2022.', 'asdfasd fd fawswef as fvasdfg ', 'df asdjk fvbhasui gvazsidh fhijosdh fhisdg fuhkas gbdf kjh', ' dsnfjvgv asdui fh qwei ucn asdijfn asdij fnasdijov bnohijasbvf ijhawsdbn vijasd bvihj bn asdfovijh nawdihjvbn hasdijn fvijohasdbn voihjuasd bvihjb asdihv basdihoujvb iuasdv', 'treca.jpg', 'sport', 0),
(5, '13.06.2022.', 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.', 'cetvrta.jpeg', 'Politik', 0),
(6, '13.06.2022.', 'consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repella.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum vero\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum veroLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum veroLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum veroLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur repellat recusandae magnam, \r\n                        rerum vero', 'peta.jpg', 'Politik', 0),
(7, '13.06.2022.', 'rerum vero obcaecati', 'rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae.', 'rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nrerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nrerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nrerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.rerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nrerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\nrerum vero obcaecati, autem quisquam, asperiores consectetur neque harum repudiandae. \r\n                        Similique rem voluptas, dignissimos accusamus in eum ipsam.\r\n', 'sesta.webp', 'Politik', 0),
(13, '15.06.2022.', 'lion naslov vijestsadfasdfasdf', 'asdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf', 'asdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf \r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf', 'test.jpg', 'sport', 0),
(14, '15.06.2022.', 'test 2 za oled akdfmasldfm', 'asdfasf asdf asdfasdf sdf asf asdf asd fasdf sd f', 'asdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdf\r\nasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfasdfdasfdsf asdf asd fasdf asdf asd fasd fasdf asdf asdfv\r\nv', 'test2.jpg', 'sport', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`korisnicko_ime`);

--
-- Indexes for table `platnjakprojekt`
--
ALTER TABLE `platnjakprojekt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `platnjakprojekt`
--
ALTER TABLE `platnjakprojekt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
