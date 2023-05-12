-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 12 2023 г., 16:33
-- Версия сервера: 5.6.51
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `danie_polzov`
--

CREATE TABLE `danie_polzov` (
  `id` int(50) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(110) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `danie_polzov`
--

INSERT INTO `danie_polzov` (`id`, `login`, `password`, `name`, `email`) VALUES
(50, '', '123', 'test', 'danil.kovnyyy@gmail.com'),
(64, ' test', '81dc9bdb52d04dc20036dbd8313ed055', 'Алина', 'pokhuy00@internet.ru'),
(66, ' Danilka_Jester', '202cb962ac59075b964b07152d234b70', 'er', 'danil.kovnyyy@gmail.com'),
(68, '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(69, '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(70, 'Danilka_Jester', '202cb962ac59075b964b07152d234b70', 'Даниил', 'dal.ko@gmail.com'),
(71, 'Danilka', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(72, 'Danilka', 'd41d8cd98f00b204e9800998ecf8427e', '', 'danil.kovnyyy@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `karzina`
--

CREATE TABLE `karzina` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nime_telefon` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `номер заказ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `karzina`
--

INSERT INTO `karzina` (`id`, `name`, `nime_telefon`, `email`, `номер заказ`) VALUES
(24, '1', '11', 'dal.ko@gmail.com', '3456 67'),
(25, '', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `danie_polzov`
--
ALTER TABLE `danie_polzov`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `karzina`
--
ALTER TABLE `karzina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `danie_polzov`
--
ALTER TABLE `danie_polzov`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `karzina`
--
ALTER TABLE `karzina`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
