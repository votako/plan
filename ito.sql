-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 08 2014 г., 15:21
-- Версия сервера: 5.5.35
-- Версия PHP: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `plan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ito`
--

CREATE TABLE IF NOT EXISTS `ito` (
  `id` int(1) NOT NULL,
  `hight` text COLLATE utf8_unicode_ci NOT NULL,
  `doneH` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `middle` text COLLATE utf8_unicode_ci NOT NULL,
  `doneM` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `low` text COLLATE utf8_unicode_ci NOT NULL,
  `doneL` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `other` text COLLATE utf8_unicode_ci NOT NULL,
  `doneO` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ShCommit` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'дополнение шкляева',
  `check` int(1) NOT NULL DEFAULT '0' COMMENT 'статус: проверено\\НЕТ',
  `date` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `dateChange` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='test';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
