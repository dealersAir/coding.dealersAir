-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Фев 09 2019 г., 20:28
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lufter21_dealersair`
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
  `meta_description` varchar(255) NOT NULL,
  `link_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `relationship` int(10) UNSIGNED DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coding_content`
--

INSERT INTO `coding_content` (`id`, `url`, `type`, `meta_title`, `meta_description`, `link_name`, `title`, `text`, `relationship`, `modified`) VALUES
(1, 'css', 'category', '', '', '', 'CSS', '', NULL, '2019-01-01 15:48:22'),
(2, 'javascript', 'category', 'Шпаргалка по JavaScript', 'Шпаргалка для программирования на JavaScript', '', 'Шпаргалка по JavaScript', '', NULL, '2019-01-27 10:00:00'),
(3, 'html', 'category', '', '', '', 'HTML', '', NULL, '2019-01-01 15:48:22'),
(4, 'php', 'category', 'Шпаргалка по php', 'Шпаргалка для программирования на php', '', 'Шпаргалка по php', '', NULL, '2019-01-01 15:48:22'),
(201, 'javascript/regulyarnye-vyrazheniya', 'post', 'Регулярные выражения в JavaScript', 'Создание и работа с регулярными выражениями в языке JavaScript. Объект RegExp.', 'Регулярные выражения', 'Работа с регулярными выражениями в JavaScript', '<h2>Специальные символы</h2>\r\n<p>\r\nСписок cпециальных символов: <code>[ \\ ^ $ . | ? * + ( )</code>\r\n</p>\r\n<p>\r\nЧтоб превратить спецсимвол в обычный, его необходимо экранировать, ставим перед ним обратный слеш <code>\\</code>\r\n</p>\r\n<h2>Создание регулярного выражения</h2>\r\n<p>\r\nРегулярное выражение состоит из шаблона (pattern) и <b>необязательных</b> флагов (flags).\r\n</p>\r\n<pre><code>var reg = /pattern/;\r\nvar reg = /pattern/flags;</code></pre>\r\n<p>\r\nили\r\n</p>\r\n<pre><code>var reg = new RegExp(\'pattern\');\r\nvar reg = new RegExp(\'pattern\', \'flags\');</code></pre>\r\n<blockquote>\r\n<span class=\"att-icon\">При создании регулярки через <strong>new RegExp()</strong>, символьные классы (\\w, \\d, \\s и\r\nт.д.), необходимо экранировать.</span>\r\n<pre><code>var reg = new RegExp(\'\\\\w*\');</code></pre>\r\n</blockquote>\r\n<h2>Флаги</h2>\r\n<p>\r\n<code>i</code> - игнорирует регистр.\r\n</p>\r\n<p>\r\n<code>g</code> - ищет все совпадения.\r\n</p>\r\n<p>\r\n<code>m</code> - многострочный режим. Cимволы <code>^</code> и <code>$</code> обозначают начало и конец каждой\r\nстроки.\r\n</p>\r\n<pre><code>var reg = /pattern/igm; <code class=\"code-comm\">// порядок флагов не имеет значения</code>\r\nvar reg = new RegExp(\'pattern\', \'mig\'); <code class=\"code-comm\">// порядок флагов не имеет значения</code></code></pre>', 2, '2019-01-01 15:48:22'),
(202, 'javascript/cookie', 'post', 'JavaScript cookie', 'Как создать, прочитать или удалить cookie в JavaScript.', 'Cookie', 'Создание, чтение, удаление cookie в JavaScript', '<p>\r\nДля чтения и записи куки, в JavaScript используется свойство <code>document.cookie</code>, которое содержит строку в специальном формате.\r\n</p>\r\n<h2>Запись cookie</h2>\r\n<p>\r\nЗаписываем в свойство <code>document.cookie</code> строку, с параметрами разделенными <code>;</code>\r\n</p>\r\n<p>\r\n<code>cookie_key=cookie_value</code> - ключ и значение куки.\r\n</p>\r\n<p>\r\n<code>path=/mypath</code> - путь, по которому будет доступ к куке. Если не указать, по умолчанию принимается текущий путь и все дочерние страницы.<br>\r\nКак правило используется <code>path=/</code> - кука будет доступна на всех страницах сайта.\r\n</p>\r\n<p>\r\n<code>domain=site.com</code> - домен или поддомен <code>domain=subdom.site.com</code>, на котором будет доступна кука. По умолчанию принимается текущий домен. Можно указать специальную маску <code>domain=.site.com</code>, тогда кука будет доступна на основном домене и всех его поддоменах.\r\n</p>\r\n<p>\r\n<code>expires=Mon, 07 Jan 2019 09:03:11 GMT</code> - дата и время истечения куки в формате GMT. Если не указать, то кука будет сессионная и будет удалена после закрытия браузера.\r\n</p>\r\n<pre><code>document.cookie = \'cookie_key=cookie_value; path=/; expires=Mon, 07 Jan 2019 09:03:11 GMT\';</code></pre>\r\n<h2>Чтение cookie</h2>\r\n<p>\r\nВсе куки записаны в свойстве <code>document.cookie</code> в виде строки. Эта строка состоит из пар <code>key=value</code> разделенных точкой с запятой и пробелом<code>\'; \'</code>\r\n</p>\r\n<blockquote>\r\n<span class=\"att-icon\">Если никакие cookie к странице не привязаны, то в свойстве <code>document.cookie</code> находится <b>пустая строка</b>.</span>\r\n</blockquote>\r\n<p>\r\nДля того, чтоб найти нужные ключ=значение, можно разбить строку по <code>\'; \'</code> на массив и найти нужный ключ перебирая массив, разбивая пары на подмассивы.\r\n</p>\r\n<pre><code>var cookie_array = document.cookie.split(\'; \');\r\nfor (var i = 0; i < cookie_array.length; i++) {\r\n   var pair_array = cookie_array[i].split(\'=\');\r\n\r\n   if (cookie_key == pair_array[0]) {\r\n      cookie_value = pair_array[1];\r\n      break;\r\n   }\r\n}</code></pre>\r\n<h2>Удаление cookie</h2>\r\n<p>\r\nДля удаления куки достаточно установить дату в прошлом, значение (cookie_value) не важно и можно не указывать.\r\n</p>\r\n<pre><code>document.cookie = \'cookie_key=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT\';</code></pre>', 2, '2019-02-09 10:54:30'),
(203, 'javascript/razmery-ehlementov', 'post', 'Размеры элементов JavaScript', 'Как определить размеры элементов DOM в JavaScript.', 'Размеры элементов DOM', 'Размеры DOM элементов в JavaScript', '<p>\r\nВсе размеры элемента на странице доступны в свойствах его объекта и представлены в <span class=\"bold\">пикселях</span>, тип <i>integer</i>, то есть без единиц измерения в конце.\r\n</p>\r\n<h2>Внешняя ширина и высота элементов</h2>\r\n<p>\r\nВнешняя ширина и высота элемента, <span class=\"bold\">включая рамку <i>border</i></span>, доступны в свойствах <code>offsetWidth</code> и <code>offsetHeight</code>.\r\n</p>\r\n<pre><code>var oWidth = elem.offsetWidth;\r\nvar oHeight = elem.offsetHeight;</code></pre>\r\n<blockquote>\r\n<span class=\"att-icon\">Свойства <code>offsetWidth</code> и <code>offsetHeight</code> доступны только для чтения. Чтоб изменить размеры элемента - используем свойство <span class=\"bold\">style</span>.</span>\r\n<pre><code>elem.style.width = 100 +\'px\';\r\nelem.style.height = 100 +\'px\';</code></pre>\r\n</blockquote>\r\n<h2>Внутренняя ширина и высота элементов</h2>\r\n<p>\r\nВнутренняя ширина и высота элемента, <span class=\"bold\">включая <i>padding</i></span>, но <span class=\"bold\">не включая <i>полосу прокрутки</i> и рамку <i>border</i></span>, доступны в свойствах <code>clientWidth</code> и <code>clientHeight</code>. <span class=\"bold\">Так же не учитывается прокручиваемая область.</span>\r\n</p>\r\n<pre><code>var iWidth = elem.clientWidth;\r\nvar iHeight = elem.clientHeight;</code></pre>\r\n<h2>Внутренняя ширина и высота элементов с учетом прокрутки</h2>\r\n<p>\r\nВнутренняя ширина и высота элемента с учетом прокручиваемой области, <span class=\"bold\">включая <i>padding</i></span>, но <span class=\"bold\">не включая <i>полосу прокрутки</i> и рамку <i>border</i></span>, доступны в свойствах <code>scrollWidth</code> и <code>scrollHeight</code>.\r\n</p>\r\n<pre><code>var sWidth = elem.scrollWidth;\r\nvar sHeight = elem.scrollHeight;</code></pre>', 2, '2019-02-09 06:00:00'),
(401, 'php/baza-dannyh', 'post', 'База данных php', 'Чтение, запись, обновление строк базы данных с помощью php', 'База данных', 'Работа с базой данных в php', '<p>\r\nДля работы с базой данных будем использовать PDO. Устанавливаем соединение и кодировку.\r\n<pre><code>$db = new PDO(\'mysql:host=localhost;dbname=database_name\', \'user_name\', \'user_password\');\r\n$db -> query(\'SET NAMES utf8\');</code></pre>\r\n</p>\r\n<h2>Чтение из БД</h2>\r\n<p>\r\nПодготавливаем запрос к базе данных. <code>table_name</code> - имя таблицы. <code>column_name</code> - имя колонки в таблице. <code>column_value</code> - искомое значение в колонке таблицы.\r\n</p>\r\n<pre><code>$request = $db -> prepare(\'SELECT * FROM table_name WHERE column_name=?\');\r\n$request -> execute(array(\'column_value\'));</code></pre>\r\n<p>\r\nПолучаем строки таблицы\r\n</p>\r\n<pre><code>$result = $request -> fetch(); <code class=\"code-comm\">// одна строка</code>\r\n$result = $request -> fetchAll(); <code class=\"code-comm\">// все строки</code></code></pre>\r\n<h3>Формат данных</h3>\r\n<p>\r\nНеобходимо передать в метод fetch параметр fetch_style, по умолчанию - <code>PDO::FETCH_BOTH</code>\r\n</p>\r\n<pre><code>$result = $request -> fetch($fetch_style);\r\n$result = $request -> fetchAll($fetch_style);</code></pre>\r\n<p>\r\nЧасто используемые параметры fetch_style:\r\n</p>\r\n<p>\r\n<code>PDO::FETCH_ASSOC</code> - возвращает массив, индексированный именами столбцов результирующего набора\r\n</p>\r\n<p>\r\n<code>PDO::FETCH_BOTH</code> (по умолчанию) - возвращает массив, индексированный именами столбцов результирующего набора, а также их номерами (начиная с 0).\r\n</p>\r\n<p>\r\n<code>PDO::FETCH_LAZY</code> - комбинирует PDO::FETCH_BOTH и PDO::FETCH_OBJ, создавая новый объект со свойствами, соответствующими именам столбцов результирующего набора.\r\n</p>\r\n<p>\r\n<code>PDO::FETCH_NUM</code> - возвращает массив, индексированный номерами столбцов (начиная с 0).\r\n</p>\r\n<p>\r\n<code>PDO::FETCH_OBJ</code> - создает анонимный объект со свойствами, соответствующими именам столбцов результирующего набора.\r\n</p>\r\n<h2>Запись в БД</h2>\r\n<pre><code>$request = $db -> prepare(\'INSERT INTO table_name (column_name_1, column_name_2) VALUES (:column_name_1, :column_name_2)\');\r\n$request -> execute(array(\r\n   \'column_name_1\' => \'value_1\',\r\n   \'column_name_2\' => \'value_2\'\r\n));</code></pre>\r\n<p>\r\nЕсли строка с уникальным значением (поле с уникальным ключом) существует - обновляем значения:\r\n</p>\r\n<pre><code>$request = $db -> prepare(\'INSERT INTO table_name (column_name_1, column_name_2) VALUES (:column_name_1, :column_name_2) ON DUPLICATE KEY UPDATE column_name_2=:u_column_name_2\');\r\n$request -> execute(array(\r\n   \'column_name_1\' => \'value_1\',\r\n   \'column_name_2\' => \'value_2\',\r\n   \'u_column_name_2\' => \'value_3\'\r\n));</code></pre>\r\n<h2>Обновление строки</h2>\r\n<pre><code>$request = $db -> prepare(\'UPDATE table_name SET column_name_1=?, column_name_2=? WHERE column_name=?\');\r\n$request -> execute(array(\'column_value_1\', \'column_value_2\', \'column_value\'));</code></pre>', 4, '2019-01-11 12:48:22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coding_content`
--
ALTER TABLE `coding_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
