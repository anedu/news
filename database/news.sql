-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 03 2019 г., 06:48
-- Версия сервера: 5.6.41
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
-- База данных: `couriers`
--
CREATE DATABASE IF NOT EXISTS `couriers` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `couriers`;

-- --------------------------------------------------------

--
-- Структура таблицы `couriers`
--

CREATE TABLE `couriers` (
  `id` int(10) NOT NULL,
  `full_name` varchar(355) NOT NULL,
  `birthdate` datetime NOT NULL,
  `driving_license` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `couriers`
--

INSERT INTO `couriers` (`id`, `full_name`, `birthdate`, `driving_license`) VALUES
(1, 'Едукатион Анна', '1991-01-08 09:15:00', 1),
(2, 'Яковлева Люба', '1993-01-15 19:15:00', 1),
(3, 'kolya', '2019-01-09 00:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `couriers_schedule`
--

CREATE TABLE `couriers_schedule` (
  `id` int(10) NOT NULL,
  `courier_id` int(10) NOT NULL,
  `task_id` int(10) NOT NULL,
  `starts_at` datetime NOT NULL,
  `ends_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `couriers_schedule`
--

INSERT INTO `couriers_schedule` (`id`, `courier_id`, `task_id`, `starts_at`, `ends_at`) VALUES
(1, 1, 23, '2019-01-18 09:00:00', '2019-01-18 21:00:00'),
(2, 2, 25, '2019-01-18 09:00:00', '2019-01-19 21:00:00'),
(9, 3, 28, '2019-01-19 00:00:00', '2019-01-21 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(10) NOT NULL,
  `title` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`) VALUES
(1, 'Стиральный порошок \"Чистюля\"'),
(2, 'мыло \"Dove\"'),
(3, 'зубная паста \"Colgate\"'),
(4, 'чистящая жидкость \"Кедровый цвет\"');

-- --------------------------------------------------------

--
-- Структура таблицы `goods_supply`
--

CREATE TABLE `goods_supply` (
  `id` int(10) NOT NULL,
  `shop_id` int(10) NOT NULL,
  `good_id` int(10) NOT NULL,
  `is_on_sale_now` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods_supply`
--

INSERT INTO `goods_supply` (`id`, `shop_id`, `good_id`, `is_on_sale_now`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 0),
(4, 3, 4, 1),
(5, 2, 4, 0),
(6, 1, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

CREATE TABLE `shops` (
  `id` int(10) NOT NULL,
  `name` varchar(355) NOT NULL,
  `distance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id`, `name`, `distance`) VALUES
(1, 'Хозмаркет', 1500),
(2, 'Ганза', 600),
(3, 'Розтор', 4000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `couriers_schedule`
--
ALTER TABLE `couriers_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courier_id` (`courier_id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods_supply`
--
ALTER TABLE `goods_supply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`,`good_id`),
  ADD KEY `good_id` (`good_id`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `couriers_schedule`
--
ALTER TABLE `couriers_schedule`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `goods_supply`
--
ALTER TABLE `goods_supply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `couriers_schedule`
--
ALTER TABLE `couriers_schedule`
  ADD CONSTRAINT `couriers_schedule_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `couriers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
