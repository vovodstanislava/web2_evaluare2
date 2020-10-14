-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 14 2020 г., 11:16
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Biblioteca`
--

-- --------------------------------------------------------

--
-- Структура таблицы `carti`
--

CREATE TABLE `carti` (
  `id` int(11) NOT NULL,
  `denumirea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anul` int(11) DEFAULT NULL,
  `pagini` int(11) DEFAULT NULL,
  `autorul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `carti`
--

INSERT INTO `carti` (`id`, `denumirea`, `anul`, `pagini`, `autorul`) VALUES
(1, 'abecedar', 1998, 435, 'Grigore Vieru'),
(2, 'Arta subtila a nepasarii', 2001, 290, 'Mark Manson'),
(3, 'La cinci pasi de tine', 1989, 61, 'Tobias Iaconis'),
(4, 'Tatuatorul de la Auschwitz', 1789, 118, 'Heather Morris'),
(6, 'uuuuuuu', 45, 465, 'eeee'),
(7, 'Recviem vesel pentru tata - cu autograf', 1845, 123, 'Radu Paraschivescu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carti`
--
ALTER TABLE `carti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carti`
--
ALTER TABLE `carti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
