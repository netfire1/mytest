-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2015 at 01:42 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8_unicode_ci,
  `rating` tinyint(3) unsigned DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_item` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `rating`, `username`, `id_item`, `post_date`) VALUES
(1, 'Full shit!!!', 5, 'pp', 1, '2015-10-26 20:19:19'),
(2, 'hooooooooooooooooly shit!', 3, 'pp', 1, '2015-10-27 18:58:55'),
(3, 'it`s a plastic one!!!', 1, 'ss', 2, '2015-10-27 19:00:32'),
(4, 'Norm', 5, 'ss', 2, '2015-10-27 19:00:49'),
(5, 'unreal', 5, 'pp', 3, '2015-10-27 19:02:10'),
(6, 'Is this a stone?', 2, 'aa', 3, '2015-10-27 19:02:40'),
(8, 'вапиваисмиваап саиавпип', NULL, 'ss', 3, '2015-10-28 19:54:22'),
(9, 'Нормальный. Деревянный такой', 5, 'Tom', 2, '2015-10-28 21:14:49'),
(10, 'Это что вообще такое', 1, 'Tom', 1, '2015-10-28 21:15:22'),
(11, 'БАРАХЛО!', 1, 'Tom', 4, '2015-10-28 21:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `info`, `name`) VALUES
(1, 'dfvddvdfv\r\ngjfj565u5jhg', 'shit'),
(2, 'damn good wooden table', 'table'),
(3, 'big and orange', 'pumpking'),
(4, 'Внешний вид и функциональность Пуф «Хит» (НСТ) – мягкая и пружинистая бескаркасная модель в современном исполнении, выполненная на основе нескольких слоев пенополиуретановой крошки разной степени жесткости. Устойчивый пуф имеет округлую форму. Он легкий, компактный, безопасный и удобный в транспортировке. Обтянут практичной обивкой из кожзаменителя. Производитель предоставляет официальную гарантию на изделие, действующую один год. Используемые материалы Пенополиуретан – экологически чистый упругий наполнитель, способен быстро восстанавливать форму после снятия нагрузки. Пеноблок обладает воздухопроницаемостью, износостойкостью и гигроскопичностью. Синтепон – объемный нетканый материал из полиэфирных волокон, который придает рельефности и мягкости сиденью. Не впитывает влагу и обладает противогрибковыми свойствами. Эксплуатация осуществляйте влажную чистку чехла при температуре не выше 40ºС; не применяйте чистящие средства, содержащие отбеливатели и агрессивные химические компоненты; протирайте поверхность аккуратно, без интенсивных втираний и надавливаний на чехол; не используйте жесткие щетки и порошки; следите за тем, чтобы наполнитель оставался внутри; не располагайте изделие в непосредственной близости от отопительных приборов, открытых источников огня; следите за целостностью чехла; соблюдайте рекомендуемые весовые нагрузки.\r\n\r\nПодробнее: https://sofino.ua/goods-14316/33387 Интернет-магазин - Sofino.ua ', 'Пуфик «Хит» NST Aliance'),
(5, 'Р-к цилинд торм 3302 ОАО ГАЗ', 'Ремкомплект цилиндра тормозного 3302, 2217, 2705, ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'pp', '7TZKy3wAFiK6fkVeuYtU8aDZGJCTjTaH', '$2y$13$NpY6G4JpdFT33MJ/0V0jtOj5sVgi/R5HxO2zaE/Ypk74U6hswK.xe', NULL, 'p@p.p', 10, 1445887568, 1445887568),
(4, 'ss', 'gwNlaHkmEbNS86Fm9eY0jy9w9Xogu6SQ', '$2y$13$vrTSxzVWeIWpaYIl/OqR7uK5aPa3tkn0sIheO16xMqJxIfjOlkcGO', NULL, 's@s.s', 10, 1445971877, 1445971877),
(5, 'aa', 'VrzcnzPWy26Azv7Ora7bA5s3g4hmKYrG', '$2y$13$z6frCajL01d88kG468mvFuk.brwDblMhu7d2im6hA7FCvTMTlS6qa', NULL, 'a@a.a', 10, 1445971889, 1445971889),
(6, 'Tom', 'OqMpu1ikCNugKlC3naaBxplzd12Ivwu3', '$2y$13$PGGXqkpY1SpYFMox5J3nSep0Br4KtgfkZr/5rf97kdKCBeVBLfJNO', NULL, 'tom@gmail.com', 10, 1446066576, 1446066576);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
