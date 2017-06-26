-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 26 2017 г., 10:53
-- Версия сервера: 5.7.18-0ubuntu0.16.04.1
-- Версия PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(500) CHARACTER SET utf8 NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `age` int(10) NOT NULL,
  `studentgroup` varchar(200) NOT NULL,
  `faculty` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `login`, `password`, `email`, `gender`, `age`, `studentgroup`, `faculty`) VALUES
(1, 'Віталій', 'Шевчук', 'Sheva-lex', 'Sheva1994', 'Sheva-lex@ukr.net', 'М', 22, '55М', 'Інформаційних систем, фізики та математики'),
(2, 'Олег', 'Любченко', 'Olegic', 'Olegic1995', 'Olegic@gmail.ru', 'М', 22, '51', 'Інформаційних систем, фізики та математики'),
(7, 'Віктор', 'Рибарчук', 'Ibra', 'Ibra199', 'Ibra@ukr.net', 'М', 20, '31', 'Філології та журналістики'),
(8, 'Наталія', 'Герук', 'Nata', 'Nata1992', 'Nata@gmail.ru', 'Ж', 20, '55М', 'Психології');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
