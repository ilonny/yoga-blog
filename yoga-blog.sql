-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 08 2018 г., 16:42
-- Версия сервера: 5.5.50-log
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yoga-blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img_src` varchar(255) DEFAULT NULL,
  `text` text,
  `img_src_inside` varchar(255) DEFAULT NULL,
  `text_inside` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`, `img_src`, `text`, `img_src_inside`, `text_inside`) VALUES
(1, 'Алексей Соколовский', '/images/files/90dbc/c3bcb/ec989ac3e2ddfb58ed3f2f146525ea43.jpg', 'Maecenas facilisis, ipsum a dapibus mattis, risus sapien finibus velit, sed pharetra tellus sem ac ligula.', '/images/files/f2afa/63b6a/d48bd96fbbe2a5c6d2a6ade0ca946cd6.jpg', '<p>&laquo; <em>Намастэ! Я преподаватель йоги, практикую с 2000 года.</em></p>\r\n<p><em>Специализируюсь на стиле &ldquo;Сатьянанда-йога&rdquo; (Бихарская школа йоги). Это мягкий и универсальный стиль. Асаны здесь удерживаются в статике; важна последовательность позы и концентрация внимания. Много времени посвящается дыхательным упражнениям (пранаямам) и медитациям. Я изучил все книги С. Сатьянанды по этому стилю, практиковал стиль больше 15 лет и ездил в Южную Индию в сертификационный центр этой школы (Neyyardam).</em></p>\r\n<p><em>С 2005 по 2007 обучался в Индии (преп. Смрити Сингх), прошёл преподавательский курс по продвинутым практикам Хатха-йоги (RYT150 в PIYF, г. Ришикеш), в том числе прошёл интенсивное обучение практикам работы с вниманием и энергией (пранаямы, особые крии, мантра-йога). А до и после этого я учился у нескольких опытных Мастеров йоги в России, на Кавказе и в Москве. Продолжаю обучение у инструкторов йоги в разных странах (Россия, Украина, Индия, Суринам, США).</em></p>\r\n<p><em>2 года путешествовал по Индии, изучая традиции йоги, ища учителей. Встречал йогов, которые читают мысли, останавливают сердце, закапываются в песок, живут в джунглях по 35 лет, по трое суток медитируют&hellip; Учился у каждого чему мог.</em></p>\r\n<p><em>Преподавал по 2-3 раза в день с 2007 по 2013 годы в Москве. Провёл не меньше тысячи часов йоги: групповых, частных занятий и тематических семинаров. Преподавал в Индии (Гоа) на английском языке иностранцам Хатху и Крию.</em></p>\r\n<p><em>В 2014г. в Таиланде я испытал первый опыт Самадхи. Это сфокусировало моё внимание на техниках, которые я в настоящее время преподаю как метод &laquo;Йога-До&raquo; (предельно длительное удержание асан йоги), особые пранаямы и авторские медитативные техники. Уверен, что у меня получится донести опыт достижения состояния медитации до тех, кому это интересно.</em></p>\r\n<p><em>&ldquo;Йога-журналист&rdquo; . Я выпускник факультета журналистики МГУ (2001г), более 20 лет работаю по профессии. Сотрудничал с дюжиной авторитетных компаний, начиная от первой PR компании в России (Promo.ru, 2001-2002) и журнала &laquo;Итоги&raquo;, и заканчивая корпоративным изданием &laquo;Мир ИНКОМ&raquo; (2006) и Советом по науке при Президенте РФ по Науке и высоким технологиям (2012), с 2012 года работаю только на фрилансе. С 2012 года написал более 400 статей по практике йоги и здоровому образу жизни, в т.ч. для блога &laquo;Хануман&raquo; ( <a href=\"http://hanuman.ru/blog\">http://hanuman.ru/blog</a>), сайта &laquo;Секреты йоги&raquo; (&ldquo; <a href=\"http://yogasecrets.ru\">http://yogasecrets.ru</a>/), сайта <a href=\"http://www.peremeny.ru/main/search?cx=013363245661713869930%3Abswtfg3y1xu&amp;cof=FORID%3A9&amp;ie=UTF-8&amp;q=kai&amp;sa=%D0%9F%D0%BE%D0%B8%D1%81%D0%BA&amp;siteurl=www.peremeny.ru%2F&amp;ref=&amp;ss=177j16769j3\">PEREMENY.ru</a>, сайта и газеты (в прошом журнала) VEGETARIAN ( <a href=\"https://vegetarian.ru/authors/25824\">https://vegetarian.ru/authors/25824</a>) и блога Yoga Journal ( <a href=\"http://yogajournal.ru/blogs/aleksey-sokolovskiy/\">http://yogajournal.ru/blogs/aleksey-sokolovskiy/</a>).</em></p>\r\n<p><em>С 2012 года я провёл более 20 зарубежных йога-семинаров (Индия, Непал, Тибет), который посетили более 200 человек из 6 стран (в т.ч. Украина, Беларусь, США, ЕС, Таиланд). Чаще всего это йога-треккинг: когда пешая ходьба по горам на высоте от 2000 м сочетается с йогой. Судя по отзывам, у меня &ldquo;коэффициент полезности&rdquo; около 97% довольных клиентов!</em></p>\r\n<p><em>С 2013г. постоянно живу в Непале и преподаю йогу только в формате выездных семинаров. С 2017 года начал онлайн-преподавание (вебинары для всех, и перс��нальное ведение серьёзных учеников).</em></p>\r\n<p><em>ИНТЕРВЬЮ со мной для Slavyoga.ru &mdash; <a href=\"http://slavyoga.ru/intervyu-o-yoge-s-alekseem-sokolovskim.html\">http://slavyoga.ru/intervyu-o-yoge-s-alekseem-sokolovskim.html</a> </em> <br /><em> Мой йога-дневник про путешествия по Индии &mdash; <a href=\"http://www.mos-yoga.ru/blogs/blog-721.html\">http://www.mos-yoga.ru/blogs/blog-721.html</a> <br />Интервью сайту &laquo;ВЕГЕТАРИАНЕЦ&raquo; &mdash; <a href=\"https://vegetarian.ru/interview/aleksey-sokolovskiy-yoga-darit-obshchenie-i-rabotu.html\">https://vegetarian.ru/interview/aleksey-sokolovskiy-yoga-darit-obshchenie-i-rabotu.html</a> <br />Моя страница на фестивале &laquo;АВАТАР&raquo; &mdash; <a href=\"http://avatarfest.com.ua/masters/aleksei-sokolovskyi/\"> http://avatarfest.com.ua/masters/aleksei-sokolovskyi/</a> </em> <em>&laquo;</em></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `instagram_gallery`
--

CREATE TABLE `instagram_gallery` (
  `id` int(11) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `instagram_gallery`
--

INSERT INTO `instagram_gallery` (`id`, `img_src`, `link`) VALUES
(1, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/'),
(2, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/'),
(3, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/'),
(4, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/'),
(5, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/'),
(6, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/'),
(7, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/'),
(8, '/images/files/c1eed/ff57a/cc76c7477623182d7faba1b8347806c9.jpg', 'https://www.instagram.com/p/BRdo87FAaGf/');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent_category`) VALUES
(1, 'Нет', NULL),
(2, 'Блог', 1),
(3, 'База знаний', 1),
(4, 'Подкатегория блога', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text_short` text,
  `text` text,
  `img_src_short` varchar(255) DEFAULT NULL,
  `img_src` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `index_page` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `create_at`, `text_short`, `text`, `img_src_short`, `img_src`, `category_id`, `index_page`) VALUES
(1, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 2, 0),
(2, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 2, 0),
(3, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 2, 0),
(4, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 2, 0),
(5, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 3, 0),
(6, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 3, 0),
(7, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0),
(8, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0),
(9, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0),
(10, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0),
(11, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0),
(12, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0),
(13, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0),
(14, 'Nam eu nisi non quam ultrices lacinia', '2018-04-08 12:10:12', 'Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi…', '<p>Nam eu nisi non quam ultrices lacinia non sit amet urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar felis at massa auctor, ac bibendum dolor facilisis. Quisque tristique fringilla convallis. Quisque justo nunc, ornare et turpis et, mollis lobortis lectus.</p>\r\n<blockquote>\r\n<p><em>Vivamus blandit nulla et finibus hendrerit. Aliquam at dui id erat ullamcorper fringilla. Aliquam id tellus est. Praesent elementum in nisi quis volutpat. </em></p>\r\n</blockquote>\r\n<p>Vestibulum non augue vel dui consequat tempus ut vitae magna. Curabitur ligula orci, facilisis et urna a, rutrum auctor lorem.</p>\r\n<ul>\r\n<li>Proin lacinia sodales diam, vel congue purus feugiat in.</li>\r\n<li>Sed ut mattis sem, ac lacinia odio.</li>\r\n<li>Donec est leo, tincidunt sit amet tortor nec, sagittis tincidunt tortor.</li>\r\n<li>Mauris auctor libero et est faucibus aliquam.</li>\r\n</ul>\r\n<p><strong>Fusce finibus pulvinar tincidunt</strong>.</p>\r\n<p>Praesent dignissim nulla nulla, ut fermentum orci eleifend eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quis velit gravida, faucibus dui et, ornare elit. Donec dictum, diam eget placerat molestie, purus velit condimentum libero, blandit sodales felis dui ac lectus.</p>\r\n<p>Vestibulum vulputate sed ligula vel euismod. Pellentesque vitae scelerisque nunc. Pellentesque quis rutrum orci. Sed tincidunt risus porta, commodo lacus ut, molestie urna. Fusce eu tellus sed neque ornare molestie non vitae sem.</p>', '/images/files/48ee4/5df0d/fd47850f29d1417c7a7374ee355be1f8.jpg', '/images/files/cf68f/eeb61/881f76bad1b1e0b8ab2ed91995a24176.jpg', 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `content` text,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `showing` tinyint(1) DEFAULT '0',
  `answer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`id`, `topic`, `content`, `name`, `email`, `showing`, `answer`) VALUES
(1, 'Тестовый вопрос', 'А что тестовый вопрос?', 'Дмитрий', 'lonnyfox@bk.ru', 1, 'Тестовый ответ'),
(2, 'тест', 'тестесст', 'Дима', 'lonnyfox@bk.ru', 0, NULL),
(3, 'Тест2', 'тест2', 'Дима', 'lonnyfox@bk.ru', 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `link`, `img_src`, `text`) VALUES
(1, 'http://facebook.com', '/images/files/1b9d6/24432/80df1c96d0d14635f87b731b6f2cdae0.jpg', 'Анонс семинара, а пока ссылка ведет на ФБ'),
(2, 'http://facebook.com', '/images/files/1b9d6/24432/80df1c96d0d14635f87b731b6f2cdae0.jpg', 'Второй слайд, а пока ссылка ведет на ФБ');

-- --------------------------------------------------------

--
-- Структура таблицы `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `social`
--

INSERT INTO `social` (`id`, `name`, `icon`) VALUES
(1, 'Вконтакте', 'fa fa-vk'),
(2, 'Facebook', 'fa fa-facebook'),
(3, 'Instagram', 'fa fa-instagram'),
(4, 'Youtube', 'fa fa-youtube');

-- --------------------------------------------------------

--
-- Структура таблицы `user_social`
--

CREATE TABLE `user_social` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `social_id` int(11) NOT NULL,
  `sorting` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_social`
--

INSERT INTO `user_social` (`id`, `link`, `social_id`, `sorting`) VALUES
(1, 'https://vk.com/id284144440', 1, 1),
(2, 'http://facebook.com', 2, 2),
(3, 'http://instagram.com/', 3, 3),
(4, 'http://youtube.com/?gl=RU&hl=ru', 4, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `instagram_gallery`
--
ALTER TABLE `instagram_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_category` (`parent_category`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_social`
--
ALTER TABLE `user_social`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_id` (`social_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `instagram_gallery`
--
ALTER TABLE `instagram_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user_social`
--
ALTER TABLE `user_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent_category`) REFERENCES `menu` (`id`);

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `menu` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_social`
--
ALTER TABLE `user_social`
  ADD CONSTRAINT `user_social_ibfk_1` FOREIGN KEY (`social_id`) REFERENCES `social` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
