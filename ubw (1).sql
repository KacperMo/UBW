-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Mar 2020, 20:58
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ubw`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `coments`
--

CREATE TABLE `coments` (
  `commentID` int(11) NOT NULL,
  `publicationID` int(11) NOT NULL,
  `coment` varchar(255) NOT NULL,
  `autofOfComenrt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logindata`
--

CREATE TABLE `logindata` (
  `IdOfUser` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dateOfRegistration` date DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `logindata`
--

INSERT INTO `logindata` (`IdOfUser`, `name`, `password`, `dateOfRegistration`, `email`) VALUES
(19, 'name', '123', NULL, 'mail@admin.pl'),
(20, 'admin', 'admin', NULL, 'mail@mail.pl'),
(21, 'test', 'test', NULL, 'test@test.pl');

--
-- Wyzwalacze `logindata`
--
DELIMITER $$
CREATE TRIGGER `CreateUser` AFTER INSERT ON `logindata` FOR EACH ROW INSERT INTO users (`userID`, `descriptions`, `avatar`) VALUES ((SELECT `IdOfUser` FROM `logindata` ORDER BY IdOfUser DESC LIMIT 1),"I'm new here.","img/defoultAvatar")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `publications`
--

CREATE TABLE `publications` (
  `publicationID` int(11) NOT NULL,
  `authorID` int(11) NOT NULL,
  `date` date NOT NULL,
  `img` varchar(64) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cetegproes` varchar(11) NOT NULL,
  `views` int(10) NOT NULL,
  `retailBranch` varchar(60) NOT NULL,
  `PDFsrc` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `publications`
--

INSERT INTO `publications` (`publicationID`, `authorID`, `date`, `img`, `title`, `cetegproes`, `views`, `retailBranch`, `PDFsrc`, `Description`) VALUES
(1, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(2, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(3, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(4, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(5, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(6, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(7, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(8, 0, '0000-00-00', 'img/', 'Title', '0', 0, 'Servers', 'pdf/', 'descsidhfgksdjfgksdjfhkdsjfhksd'),
(9, 0, '0000-00-00', 'UsersFoldres/AnonymusPublication1844114779/', '', '0', 0, '', 'UsersFoldres/AnonymusPublication1844114779/', ''),
(10, 0, '0000-00-00', 'AnonymusPublication1994594944', '', '0', 0, '', 'AnonymusPublication1994594944', ''),
(11, 0, '0000-00-00', 'AnonymusPublication2117150484', '', '0', 0, '', 'AnonymusPublication2117150484', ''),
(12, 0, '0000-00-00', 'AnonymusPublication274096368', '', '0', 0, '', 'AnonymusPublication274096368', ''),
(13, 0, '0000-00-00', 'AnonymusPublication1825383956', 'd', '0', 0, '', 'AnonymusPublication1825383956', 's'),
(14, 0, '0000-00-00', 'AnonymusPublication167010486', 'd', '0', 0, '', 'AnonymusPublication167010486', 's'),
(15, 0, '0000-00-00', 'AnonymusPublication1574319686', 'd', '0', 0, '1', 'AnonymusPublication1574319686', 's'),
(16, 0, '0000-00-00', 'AnonymusPublication680913392', 'Zanieczyszczenia środowiska', 'eco', 0, '1', 'AnonymusPublication680913392', 'PRzesyłam swoją pracę'),
(17, 0, '0000-00-00', 'AnonymusPublication394968202', 'Zanieczyszczenia środowiska', 'eco', 0, '1', 'AnonymusPublication394968202', 'PRzesyłam swoją pracę'),
(18, 0, '0000-00-00', 'AnonymusPublication158293836', 'Zanieczyszczenia środowiska', 'eco', 0, '1', 'AnonymusPublication158293836', 'PRzesyłam swoją pracę'),
(19, 0, '0000-00-00', 'AnonymusPublication870158932', '', '', 0, '', 'AnonymusPublication870158932', ''),
(20, 0, '0000-00-00', 'AnonymusPublication693917103', '', '', 0, '', 'AnonymusPublication693917103', ''),
(21, 0, '0000-00-00', 'AnonymusPublication96730419', '', '', 0, '', 'AnonymusPublication96730419', ''),
(22, 0, '0000-00-00', 'AnonymusPublication2137987613', '', '', 0, '', 'AnonymusPublication2137987613', ''),
(23, 0, '0000-00-00', 'AnonymusPublication1135863628', '', '', 0, '', 'AnonymusPublication1135863628', ''),
(24, 0, '0000-00-00', 'AnonymusPublication1553333482', '', '', 0, '', 'AnonymusPublication1553333482', ''),
(25, 0, '0000-00-00', 'AnonymusPublication1082426062', '', '', 0, '', 'AnonymusPublication1082426062', ''),
(26, 0, '0000-00-00', 'AnonymusPublication296135382', '', '', 0, '', 'AnonymusPublication296135382', ''),
(27, 0, '0000-00-00', 'AnonymusPublication746270697', '', '', 0, '', 'AnonymusPublication746270697', ''),
(28, 0, '0000-00-00', 'AnonymusPublication2011185422', '', '', 0, '', 'AnonymusPublication2011185422', ''),
(29, 0, '0000-00-00', 'AnonymusPublication44739843', '', '', 0, '', 'AnonymusPublication44739843', ''),
(30, 0, '0000-00-00', 'AnonymusPublication1366549491', '', '', 0, '', 'AnonymusPublication1366549491', ''),
(31, 0, '0000-00-00', 'AnonymusPublication280910471', '', '', 0, '', 'AnonymusPublication280910471', ''),
(32, 0, '0000-00-00', 'AnonymusPublication1344579021', '', '', 0, '', 'AnonymusPublication1344579021', ''),
(33, 0, '0000-00-00', 'AnonymusPublication1172098813', '', '', 0, '', 'AnonymusPublication1172098813', ''),
(34, 0, '0000-00-00', 'AnonymusPublication1469277912', '', '', 0, '', 'AnonymusPublication1469277912', ''),
(35, 0, '0000-00-00', 'AnonymusPublication953890310', '', '', 0, '', 'AnonymusPublication953890310', ''),
(36, 0, '0000-00-00', 'AnonymusPublication2080295386', '', '', 0, '', 'AnonymusPublication2080295386', ''),
(37, 0, '0000-00-00', 'AnonymusPublication1474730617', '', '', 0, '', 'AnonymusPublication1474730617', ''),
(38, 0, '0000-00-00', 'AnonymusPublication856351819', '', '', 0, '', 'AnonymusPublication856351819', ''),
(39, 0, '0000-00-00', 'AnonymusPublication1120049041', '', '', 0, '', 'AnonymusPublication1120049041', ''),
(40, 0, '0000-00-00', 'AnonymusPublication172909250', '', '', 0, '', 'AnonymusPublication172909250', ''),
(41, 0, '0000-00-00', 'AnonymusPublication855059898', '', '', 0, '', 'AnonymusPublication855059898', ''),
(42, 0, '0000-00-00', 'AnonymusPublication1064002008', '', '', 0, '', 'AnonymusPublication1064002008', ''),
(43, 0, '0000-00-00', 'AnonymusPublication891230248', '', '', 0, '', 'AnonymusPublication891230248', ''),
(44, 0, '0000-00-00', 'AnonymusPublication673829170', '', '', 0, '', 'AnonymusPublication673829170', ''),
(45, 0, '0000-00-00', 'AnonymusPublication1160272386', '', '', 0, '', 'AnonymusPublication1160272386', ''),
(46, 0, '0000-00-00', 'AnonymusPublication1844021853', '', '', 0, '', 'AnonymusPublication1844021853', ''),
(47, 0, '0000-00-00', 'AnonymusPublication25589195', '', '', 0, '', 'AnonymusPublication25589195', ''),
(48, 0, '0000-00-00', 'AnonymusPublication1446866374', '', '', 0, '', 'AnonymusPublication1446866374', ''),
(49, 0, '0000-00-00', 'AnonymusPublication338350451', '', '', 0, '', 'AnonymusPublication338350451', ''),
(50, 0, '0000-00-00', 'AnonymusPublication72885542', '', '', 0, '', 'AnonymusPublication72885542', ''),
(51, 0, '0000-00-00', 'AnonymusPublication1499818732', '', '', 0, '', 'AnonymusPublication1499818732', ''),
(52, 0, '0000-00-00', 'AnonymusPublication1402023882', '', '', 0, '', 'AnonymusPublication1402023882', ''),
(53, 0, '0000-00-00', 'AnonymusPublication2117287836', '', '', 0, '', 'AnonymusPublication2117287836', ''),
(54, 0, '0000-00-00', 'AnonymusPublication1503713824', '', '', 0, '', 'AnonymusPublication1503713824', ''),
(55, 0, '0000-00-00', 'AnonymusPublication1375978475', '', '', 0, '', 'AnonymusPublication1375978475', ''),
(56, 0, '0000-00-00', 'AnonymusPublication106086015', '', '', 0, '', 'AnonymusPublication106086015', ''),
(57, 0, '0000-00-00', 'AnonymusPublication997249632', '', '', 0, '', 'AnonymusPublication997249632', ''),
(58, 0, '0000-00-00', 'AnonymusPublication1232440600', '', '', 0, '', 'AnonymusPublication1232440600', ''),
(59, 0, '0000-00-00', 'AnonymusPublication87944107', '', '', 0, '', 'AnonymusPublication87944107', ''),
(60, 0, '0000-00-00', 'AnonymusPublication1731155453', '', '', 0, '', 'AnonymusPublication1731155453', ''),
(61, 0, '0000-00-00', 'AnonymusPublication1625827177', '', '', 0, '', 'AnonymusPublication1625827177', ''),
(62, 0, '0000-00-00', 'AnonymusPublication522792586', '', '', 0, '', 'AnonymusPublication522792586', ''),
(63, 0, '0000-00-00', 'AnonymusPublication1383954966', '', '', 0, '', 'AnonymusPublication1383954966', ''),
(64, 0, '0000-00-00', 'AnonymusPublication2069439588', '', '', 0, '', 'AnonymusPublication2069439588', ''),
(65, 0, '0000-00-00', 'AnonymusPublication1390071451', '', '', 0, '', 'AnonymusPublication1390071451', ''),
(66, 0, '0000-00-00', 'AnonymusPublication881777885', '', '', 0, '', 'AnonymusPublication881777885', ''),
(67, 0, '0000-00-00', 'AnonymusPublication832867557', '', '', 0, '', 'AnonymusPublication832867557', ''),
(68, 0, '0000-00-00', 'AnonymusPublication664427501', '', '', 0, '', 'AnonymusPublication664427501', ''),
(69, 0, '0000-00-00', 'AnonymusPublication1251771864', '', '', 0, '', 'AnonymusPublication1251771864', ''),
(70, 0, '0000-00-00', 'AnonymusPublication1692028098', '', '', 0, '', 'AnonymusPublication1692028098', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` int(64) NOT NULL,
  `surname` int(64) NOT NULL,
  `college` varchar(64) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `years` int(3) DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `lastLoginDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userID`, `name`, `surname`, `college`, `avatar`, `years`, `descriptions`, `lastLoginDate`) VALUES
(19, 0, 0, '', 'img/defoultAvatar', NULL, 'I\'m new here.', '0000-00-00'),
(20, 0, 0, '', 'img/defoultAvatar', NULL, 'I\'m new here.', '0000-00-00'),
(21, 0, 0, '', 'img/defoultAvatar', NULL, 'I\'m new here.', '0000-00-00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indeksy dla tabeli `logindata`
--
ALTER TABLE `logindata`
  ADD PRIMARY KEY (`IdOfUser`);

--
-- Indeksy dla tabeli `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`publicationID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `coments`
--
ALTER TABLE `coments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `logindata`
--
ALTER TABLE `logindata`
  MODIFY `IdOfUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `publications`
--
ALTER TABLE `publications`
  MODIFY `publicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
