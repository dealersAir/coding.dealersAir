-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 29 2018 г., 07:12
-- Версия сервера: 5.6.37
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dealersair`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coding_content`
--

CREATE TABLE `coding_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `relationship` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coding_content`
--

INSERT INTO `coding_content` (`id`, `url`, `type`, `meta_title`, `title`, `text`, `relationship`) VALUES
(1, 'css', 'category', '', 'CSS', 'Это css', NULL),
(2, 'javascript', 'category', '', 'JavaScript', 'Это JavaScript', NULL),
(3, 'html', 'category', '', 'HTML', 'Это HTML', NULL),
(4, 'php', 'category', 'php', 'php', 'Это php', NULL),
(201, 'javascript/regulyarnye-vyrazheniya', 'post', 'Регулярные выражения в JavaScript. RegExp', 'Регулярные выражения. RegExp', '<h2>Специальные символы</h2>\r\n<p>\r\nСписок cпециальных символов: <code>[ \\ ^ $ . | ? * + ( )</code>\r\n</p>\r\n<p>\r\nЧтоб превратить спецсимвол в обычный, его необходимо экранировать, ставим перед ним обратный слеш <code>\\</code>\r\n</p>\r\n<h2>Создание регулярного выражения</h2>\r\n<p>\r\nРегулярное выражение состоит из шаблона (pattern) и <b>необязательных</b> флагов (flags).\r\n</p>\r\n<pre><code>var reg = /pattern/;\r\nvar reg = /pattern/flags;</code></pre>\r\n<p>\r\nили\r\n</p>\r\n<pre><code>var reg = new RegExp(\'pattern\');\r\nvar reg = new RegExp(\'pattern\', \'flags\');</code></pre>\r\n<blockquote>\r\n<span class=\"att-icon\">При создании регулярки через <strong>new RegExp()</strong>, символьные классы (\\w, \\d, \\s и\r\nт.д.), необходимо экранировать.</span>\r\n<pre><code>var reg = new RegExp(\'\\\\w*\');</code></pre>\r\n</blockquote>\r\n<h2>Флаги</h2>\r\n<p>\r\n<code>i</code> - игнорирует регистр.\r\n</p>\r\n<p>\r\n<code>g</code> - ищет все совпадения.\r\n</p>\r\n<p>\r\n<code>m</code> - многострочный режим. Cимволы <code>^</code> и <code>$</code> обозначают начало и конец каждой\r\nстроки.\r\n</p>\r\n<pre><code>var reg = /pattern/igm; <code class=\"code-comm\">// порядок флагов не имеет значения</code>\r\nvar reg = new RegExp(\'pattern\', \'mig\'); <code class=\"code-comm\">// порядок флагов не имеет значения</code></code></pre>', 2),
(401, 'php/rabota-s-bazoj-dannyh', 'post', 'Работа с базой данных в php. SQL, PDO', 'Работа с базой данных. SQL, PDO', '<p>\r\nДля работы с базой данных будем использовать PDO. Устанавливаем соединение и кодировку.\r\n<pre><code>$db = new PDO(\'mysql:host=localhost;dbname=database_name\', \'user_name\', \'user_password\');\r\n$db -> query(\'SET NAMES utf8\');</code></pre>\r\n</p>\r\n<h2>Чтение из БД</h2>\r\n<p>\r\nПодготавливаем запрос к базе данных. <code>table_name</code> - имя таблицы. <code>column_name</code> - имя колонки в таблице. <code>column_value</code> - искомое значение в колонке таблицы.\r\n</p>\r\n<pre><code>$request = $db -> prepare(\'SELECT * FROM table_name WHERE column_name=?\');\r\n$request -> execute(array(\'column_value\'));</code></pre>\r\n<p>\r\nПолучаем строки таблицы\r\n</p>\r\n<pre><code>$result = $request -> fetch(); <code class=\"code-comm\">// одна строка</code>\r\n$result = $request -> fetchAll();  <code class=\"code-comm\">// все строки</code></code></pre>\r\n<p>\r\nПо умолчанию, будет возвращено два массива, с индексами, которые соответствуют именам столбцов, и нумерованный массив.\r\n</p>\r\n<h2>Запись в БД</h2>\r\n<pre><code>$request = $db -> prepare(\'INSERT INTO table_name (column_name_1, column_name_2) VALUES (:column_name_1, :column_name_2)\');\r\n$request -> execute(array(\r\n   \'column_name_1\' => \'value_1\',\r\n   \'column_name_2\' => \'value_2\'\r\n));</code></pre>\r\n<p>\r\nЕсли строка с уникальным значением (поле с уникальным ключом) существует - обновляем значения:\r\n</p>\r\n<pre><code>$request = $db -> prepare(\'INSERT INTO table_name (column_name_1, column_name_2) VALUES (:column_name_1, :column_name_2) ON DUPLICATE KEY UPDATE column_name_2=:u_column_name_2\');\r\n$request -> execute(array(\r\n   \'column_name_1\' => \'value_1\',\r\n   \'column_name_2\' => \'value_2\',\r\n   \'u_column_name_2\' => \'value_3\'\r\n));</code></pre>\r\n<h2>Обновление строки</h2>\r\n<pre><code>$request = $db -> prepare(\'UPDATE table_name SET column_name_1=?, column_name_2=? WHERE column_name=?\');\r\n$request -> execute(array(\'column_value_1\', \'column_value_2\', \'column_value\'));</code></pre>', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `info_subscribers`
--

CREATE TABLE `info_subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coding_content`
--
ALTER TABLE `coding_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Индексы таблицы `info_subscribers`
--
ALTER TABLE `info_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info_subscribers`
--
ALTER TABLE `info_subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
