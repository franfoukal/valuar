-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 09, 2020 at 03:03 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `APITest`
--
CREATE DATABASE IF NOT EXISTS `APITest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `APITest`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` mediumint(9) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `stock` mediumint(9) NOT NULL,
  `sells` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `photos`, `material`, `stock`, `sells`) VALUES
(1, 'Bradford', 'posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet', 5828, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'platino', 60, 109),
(2, 'Lynn', 'dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel,', 1732, 'assets/img/products/prod-2.png, assets/img/products/prod-1.png, assets/img/products/prod-3.png', 'plata', 39, 46),
(3, 'Stephens', 'vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean', 9695, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'plata', 24, 91),
(4, 'Rocha', 'eget mollis lectus pede et risus. Quisque libero lacus, varius', 1875, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'plata', 50, 61),
(5, 'Holcomb', 'metus. Aenean sed pede nec ante blandit viverra. Donec tempus,', 2284, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'oro', 46, 80),
(6, 'Kim', 'Proin vel arcu eu odio tristique pharetra. Quisque ac libero', 4893, 'assets/img/products/prod-3.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'plata', 81, 161),
(7, 'Simpson', 'vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur', 1047, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'oro', 66, 104),
(8, 'Reese', 'nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut', 6054, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'oro', 2, 6),
(9, 'Stein', 'libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus', 9904, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'platino', 1, 72),
(10, 'Daugherty', 'diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est', 5196, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'titanio', 22, 118),
(11, 'Fletcher', 'libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus', 4372, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'plata', 80, 14),
(12, 'Nicholson', 'et libero. Proin mi. Aliquam gravida mauris ut mi. Duis', 6803, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'platino', 72, 175),
(13, 'Schneider', 'nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse', 1218, 'assets/img/products/prod-2.png, assets/img/products/prod-1.png, assets/img/products/prod-3.png', 'titanio', 83, 57),
(14, 'Hughes', 'Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien.', 2147, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'oro', 39, 180),
(15, 'Griffin', 'nunc nulla vulputate dui, nec tempus mauris erat eget ipsum.', 7581, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-3.png', 'oro', 29, 93),
(16, 'Savage', 'hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus.', 5292, 'assets/img/products/prod-1.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'titanio', 84, 179),
(17, 'Duran', 'venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien.', 9393, 'assets/img/products/prod-3.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'platino', 75, 87),
(18, 'Mendez', 'natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 5204, 'assets/img/products/prod-4.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'plata', 11, 162),
(19, 'Kline', 'eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat', 8688, 'assets/img/products/prod-4.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'titanio', 35, 190),
(20, 'Sargent', 'auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris', 1287, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'plata', 25, 129),
(21, 'Goff', 'Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus', 6403, 'assets/img/products/prod-3.png, assets/img/products/prod-2.png, assets/img/products/prod-1.png', 'plata', 73, 8),
(22, 'Coleman', 'dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget', 6147, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'plata', 65, 183),
(23, 'Hutchinson', 'nunc sed pede. Cum sociis natoque penatibus et magnis dis', 9586, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'plata', 36, 29),
(24, 'Calderon', 'in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer', 5771, 'assets/img/products/prod-4.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'oro', 92, 161),
(25, 'Ryan', 'eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris', 3861, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'oro', 74, 153),
(26, 'Mullen', 'risus a ultricies adipiscing, enim mi tempor lorem, eget mollis', 5785, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'plata', 22, 161),
(27, 'Chambers', 'consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate', 1579, 'assets/img/products/prod-3.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'plata', 31, 113),
(28, 'Fuller', 'arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus.', 5215, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'titanio', 77, 111),
(29, 'Church', 'eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada', 2899, 'assets/img/products/prod-1.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'titanio', 13, 168),
(30, 'Bell', 'vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus', 8510, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'titanio', 80, 56),
(31, 'Combs', 'enim, sit amet ornare lectus justo eu arcu. Morbi sit', 6044, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'platino', 5, 129),
(32, 'Goodman', 'a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc', 4101, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'titanio', 1, 137),
(33, 'Walsh', 'dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing', 1735, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'platino', 37, 29),
(34, 'Weber', 'eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum', 9858, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'oro', 55, 185),
(35, 'Briggs', 'tristique pellentesque, tellus sem mollis dui, in sodales elit erat', 4109, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-3.png', 'platino', 1, 93),
(36, 'Sheppard', 'elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis', 3398, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-1.png', 'plata', 92, 54),
(37, 'Barker', 'at arcu. Vestibulum ante ipsum primis in faucibus orci luctus', 7064, 'assets/img/products/prod-3.png, assets/img/products/prod-2.png, assets/img/products/prod-1.png', 'titanio', 60, 103),
(38, 'Lucas', 'pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien,', 6430, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-4.png', 'oro', 79, 21),
(39, 'Brooks', 'hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida', 6387, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'platino', 28, 197),
(40, 'Pearson', 'ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci', 9919, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'platino', 4, 37),
(41, 'Meadows', 'Nullam velit dui, semper et, lacinia vitae, sodales at, velit.', 6892, 'assets/img/products/prod-4.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'plata', 49, 33),
(42, 'Gilliam', 'dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam', 3385, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'oro', 98, 90),
(43, 'Abbott', 'nunc est, mollis non, cursus non, egestas a, dui. Cras', 9841, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'titanio', 5, 78),
(44, 'Wong', 'a feugiat tellus lorem eu metus. In lorem. Donec elementum,', 3356, 'assets/img/products/prod-2.png, assets/img/products/prod-1.png, assets/img/products/prod-3.png', 'titanio', 14, 179),
(45, 'Bryant', 'erat, eget tincidunt dui augue eu tellus. Phasellus elit pede,', 7771, 'assets/img/products/prod-3.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'oro', 74, 134),
(46, 'Cherry', 'Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue', 3465, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'oro', 28, 110),
(47, 'Bradshaw', 'ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque.', 5672, 'assets/img/products/prod-2.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'oro', 94, 102),
(48, 'Shannon', 'habitant morbi tristique senectus et netus et malesuada fames ac', 7805, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'titanio', 26, 186),
(49, 'Bass', 'erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum', 5527, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'oro', 47, 119),
(50, 'Johnston', 'lacus vestibulum lorem, sit amet ultricies sem magna nec quam.', 9340, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'platino', 67, 139),
(51, 'Scott', 'nulla. Donec non justo. Proin non massa non ante bibendum', 5209, 'assets/img/products/prod-3.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'plata', 44, 106),
(52, 'Valentine', 'molestie. Sed id risus quis diam luctus lobortis. Class aptent', 7258, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'oro', 71, 62),
(53, 'Rhodes', 'non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh.', 7869, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'titanio', 60, 96),
(54, 'Beck', 'augue ac ipsum. Phasellus vitae mauris sit amet lorem semper', 2586, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'titanio', 58, 199),
(55, 'Barnes', 'Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum', 7188, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'oro', 91, 73),
(56, 'Weaver', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus', 9537, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'platino', 5, 34),
(57, 'Cervantes', 'Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris', 3805, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'titanio', 69, 92),
(58, 'Bass', 'adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque', 5737, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'oro', 85, 179),
(59, 'Moses', 'et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus.', 9091, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'platino', 48, 197),
(60, 'Macias', 'Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum', 8189, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'titanio', 82, 6),
(61, 'Hoffman', 'est ac facilisis facilisis, magna tellus faucibus leo, in lobortis', 9060, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'titanio', 70, 58),
(62, 'Cooke', 'accumsan convallis, ante lectus convallis est, vitae sodales nisi magna', 5920, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'oro', 46, 197),
(63, 'Bridges', 'ante lectus convallis est, vitae sodales nisi magna sed dui.', 4623, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'platino', 6, 86),
(64, 'Alvarez', 'eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est.', 7123, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-1.png', 'plata', 86, 1),
(65, 'Knapp', 'mus. Donec dignissim magna a tortor. Nunc commodo auctor velit.', 1329, 'assets/img/products/prod-3.png, assets/img/products/prod-2.png, assets/img/products/prod-4.png', 'platino', 72, 41),
(66, 'Tyler', 'eget, dictum placerat, augue. Sed molestie. Sed id risus quis', 2450, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'titanio', 35, 35),
(67, 'Moses', 'mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id', 2154, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-1.png', 'plata', 55, 140),
(68, 'Berry', 'mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet,', 6352, 'assets/img/products/prod-2.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'titanio', 37, 173),
(69, 'Hines', 'risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non', 6927, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'titanio', 94, 113),
(70, 'Booker', 'purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula', 6446, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-4.png', 'platino', 81, 78),
(71, 'Ware', 'neque et nunc. Quisque ornare tortor at risus. Nunc ac', 9801, 'assets/img/products/prod-2.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'titanio', 12, 180),
(72, 'Oneal', 'amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat', 6424, 'assets/img/products/prod-3.png, assets/img/products/prod-2.png, assets/img/products/prod-4.png', 'platino', 76, 166),
(73, 'Ward', 'vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci', 5410, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'platino', 87, 145),
(74, 'Sparks', 'nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae', 8362, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'oro', 46, 112),
(75, 'Jennings', 'accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate,', 6609, 'assets/img/products/prod-1.png, assets/img/products/prod-3.png, assets/img/products/prod-2.png', 'oro', 91, 11),
(76, 'Castro', 'vel est tempor bibendum. Donec felis orci, adipiscing non, luctus', 6031, 'assets/img/products/prod-1.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'plata', 48, 22),
(77, 'Jenkins', 'purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla', 2866, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-3.png', 'oro', 67, 130),
(78, 'Durham', 'fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor,', 5848, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'platino', 49, 93),
(79, 'Holland', 'tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer', 3031, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'plata', 99, 153),
(80, 'Paul', 'eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum.', 4076, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'platino', 5, 131),
(81, 'Boyer', 'Donec felis orci, adipiscing non, luctus sit amet, faucibus ut,', 3952, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'titanio', 25, 134),
(82, 'Obrien', 'Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue.', 8369, 'assets/img/products/prod-2.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'titanio', 71, 83),
(83, 'Stafford', 'libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus', 6643, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-3.png', 'titanio', 80, 125),
(84, 'Fuentes', 'enim, gravida sit amet, dapibus id, blandit at, nisi. Cum', 6272, 'assets/img/products/prod-1.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'platino', 6, 192),
(85, 'Warren', 'cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet', 4314, 'assets/img/products/prod-4.png, assets/img/products/prod-1.png, assets/img/products/prod-2.png', 'titanio', 32, 181),
(86, 'Deleon', 'mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam', 9357, 'assets/img/products/prod-4.png, assets/img/products/prod-2.png, assets/img/products/prod-1.png', 'oro', 9, 143),
(87, 'Shelton', 'turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus.', 7149, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'plata', 27, 111),
(88, 'Richmond', 'eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce', 7341, 'assets/img/products/prod-4.png, assets/img/products/prod-3.png, assets/img/products/prod-1.png', 'oro', 59, 194),
(89, 'Hoffman', 'et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum.', 4508, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'titanio', 74, 150),
(90, 'Graham', 'egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor', 8204, 'assets/img/products/prod-2.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'oro', 41, 99),
(91, 'Wong', 'arcu ac orci. Ut semper pretium neque. Morbi quis urna.', 4621, 'assets/img/products/prod-4.png, assets/img/products/prod-3.png, assets/img/products/prod-2.png', 'plata', 69, 148),
(92, 'Marquez', 'semper erat, in consectetuer ipsum nunc id enim. Curabitur massa.', 3262, 'assets/img/products/prod-1.png, assets/img/products/prod-3.png, assets/img/products/prod-2.png', 'plata', 55, 57),
(93, 'Cervantes', 'cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis', 4186, 'assets/img/products/prod-1.png, assets/img/products/prod-3.png, assets/img/products/prod-4.png', 'titanio', 89, 49),
(94, 'Dixon', 'Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla.', 6906, 'assets/img/products/prod-4.png, assets/img/products/prod-3.png, assets/img/products/prod-2.png', 'platino', 94, 187),
(95, 'Byrd', 'felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla.', 4908, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'platino', 96, 62),
(96, 'Potter', 'Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet', 4403, 'assets/img/products/prod-3.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'platino', 31, 200),
(97, 'Peterson', 'dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris,', 4247, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-1.png', 'platino', 28, 175),
(98, 'Fischer', 'lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus', 1032, 'assets/img/products/prod-3.png, assets/img/products/prod-1.png, assets/img/products/prod-4.png', 'plata', 29, 15),
(99, 'Noble', 'a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu.', 1984, 'assets/img/products/prod-3.png, assets/img/products/prod-2.png, assets/img/products/prod-4.png', 'titanio', 45, 118),
(100, 'Mclean', 'auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus', 4243, 'assets/img/products/prod-1.png, assets/img/products/prod-2.png, assets/img/products/prod-4.png', 'titanio', 61, 195),
(103, 'JPTj', 'anillo justicialista', 2000, 'assets/img/products/prod-3.png, assets/img/products/prod-4.png, assets/img/products/prod-2.png', 'Oro', 52, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'Declan', 'Mays', 'scelerisque@Proin.org', 'GPU84UEW1VC'),
(2, 'Donovan', 'Hamilton', 'habitant.morbi.tristique@ipsumacmi.edu', 'AFU06JBW1DW'),
(3, 'Katelyn', 'Larsen', 'Cras.interdum.Nunc@sodales.net', 'WAW70UKV4EG'),
(4, 'Todd', 'Henry', 'Aenean.eget.magna@pretiumaliquet.com', 'GCQ62FDZ3RA'),
(5, 'Channing', 'Kidd', 'quis.diam.luctus@malesuada.com', 'HGJ04ZTL9TZ'),
(6, 'Cassidy', 'Smith', 'justo@tempus.edu', 'YJU59ZHG6OC'),
(7, 'Alexandra', 'Parrish', 'pede@sed.co.uk', 'AYQ99YWF5AL'),
(8, 'Nyssa', 'Velazquez', 'adipiscing.lobortis@justoProin.net', 'HHT73NHB2UF'),
(9, 'Cody', 'Hogan', 'dolor.dapibus.gravida@blandit.org', 'ITZ39OZI7FW'),
(10, 'Hilel', 'Small', 'montes@natoquepenatibus.com', 'MOU01FTO2XT'),
(11, 'Murphy', 'Roberts', 'eget.dictum.placerat@libero.com', 'YXI88OMZ9YN'),
(12, 'Amelia', 'Collier', 'eleifend.Cras@Etiamimperdiet.com', 'EFM94RNF9DQ'),
(13, 'Noel', 'Sanford', 'egestas.Fusce@sit.ca', 'IWZ25OQY6GK'),
(14, 'Nichole', 'Mooney', 'tortor.Integer@nequeet.com', 'GIL36SHS1QT'),
(15, 'Jacob', 'Kelly', 'ipsum.ac@et.ca', 'OHA03EMU4MR'),
(16, 'Callum', 'Carter', 'orci.adipiscing@Maurisnondui.co.uk', 'ZRW03VPO1KW'),
(17, 'Cameron', 'Nash', 'et@est.com', 'WDH65VFU1XA'),
(18, 'Dustin', 'Johns', 'sem.egestas.blandit@pedePraesenteu.com', 'QCP73LMO7YA'),
(19, 'Xander', 'Farmer', 'semper.egestas@iaculisaliquet.com', 'BUZ44ZLP2CQ'),
(20, 'Clayton', 'Silva', 'lectus.ante@nunc.net', 'TSG04WAD2QF'),
(21, 'Ori', 'Norman', 'felis.ullamcorper@lectussit.co.uk', 'UPX28ZQD4NK'),
(22, 'Octavius', 'Burks', 'placerat.Cras@cursus.co.uk', 'CFK72ZAR2BL'),
(23, 'Brianna', 'Whitfield', 'ultricies.sem@etlacinia.org', 'SBZ19YTS5NM'),
(24, 'Amos', 'Neal', 'dolor.elit@sed.com', 'RAK99BPV9DT'),
(25, 'Forrest', 'Huber', 'auctor.quis@ettristiquepellentesque.net', 'SVD81IGT3RS'),
(26, 'Porter', 'Keller', 'justo@semvitae.co.uk', 'UKX11HZP9ZQ'),
(27, 'Chantale', 'Chapman', 'risus.odio.auctor@Lorem.net', 'YKI53JXV4CW'),
(28, 'Hashim', 'Woods', 'Proin.velit@euduiCum.co.uk', 'ZLN76SJC2FW'),
(29, 'Mary', 'Watts', 'justo.Praesent.luctus@feugiat.org', 'CVG23VHZ6AO'),
(30, 'Holmes', 'Wilson', 'dui.Cum.sociis@Curae.com', 'VFO89EQT0WW'),
(31, 'Cade', 'Wilkinson', 'elit@imperdiet.ca', 'WIA12OOI1ME'),
(32, 'Rose', 'Hayes', 'mauris.sapien@auctor.ca', 'IAT91KYE9DQ'),
(33, 'Teagan', 'Cook', 'eu@natoquepenatibus.edu', 'ELF73MIX9VK'),
(34, 'Joel', 'Fox', 'enim.mi@faucibus.co.uk', 'UWN98AZZ2KY'),
(35, 'Wesley', 'Mccormick', 'non@eratnonummyultricies.net', 'WVS15MRD7FM'),
(36, 'Maite', 'Pratt', 'molestie@consequatdolor.com', 'TBY09DLS9VA'),
(37, 'Leo', 'Blackburn', 'parturient@nuncullamcorper.org', 'OLN52VKO6RL'),
(38, 'Macy', 'Delgado', 'Morbi@Aliquamauctor.ca', 'JKW59HLZ9VU'),
(39, 'Autumn', 'Decker', 'justo@sedfacilisisvitae.com', 'HYX42NSM7QA'),
(40, 'John', 'Walker', 'aliquet.sem@Proinmi.net', 'HAT39JYD6JN'),
(41, 'Preston', 'Melton', 'vel.convallis.in@nuncest.net', 'OLF93JIU4IB'),
(42, 'Deborah', 'Gamble', 'neque@elitAliquam.org', 'GWD93IBH0LA'),
(43, 'Cheyenne', 'Harrington', 'vitae.aliquet.nec@acorci.org', 'OTR65KFC9TX'),
(44, 'Kirk', 'Page', 'sapien.Aenean.massa@Maurisquisturpis.org', 'IHA85UBY4XD'),
(45, 'Brenna', 'Blair', 'Curae.Donec.tincidunt@vitaesemperegestas.co.uk', 'DDK81PTZ1UO'),
(46, 'Tate', 'Briggs', 'odio.a@orci.edu', 'QLP28GWI6NX'),
(47, 'Minerva', 'Maxwell', 'enim@adipiscingenimmi.edu', 'EOJ24CTW4QM'),
(48, 'Reuben', 'Fulton', 'eleifend@PhasellusornareFusce.ca', 'CTB91GZA7XW'),
(51, 'Hillary', 'Ewing', 'Mauris.nulla@Curabitur.ca', 'NCS24NJU9RX'),
(52, 'Quynn', 'Montoya', 'adipiscing.Mauris@mauris.edu', 'XUK17YJH7OU'),
(53, 'Gabriel', 'Carlson', 'iaculis@adipiscing.com', 'AFQ45FOY8BG'),
(54, 'Elvis', 'Richardson', 'gravida.Praesent@in.net', 'NFA65UJM3ZA'),
(55, 'Martina', 'Cash', 'vitae.nibh@tinciduntDonecvitae.co.uk', 'QAM99QPC0VU'),
(56, 'Guinevere', 'Bonner', 'suscipit.nonummy@Curabiturconsequat.ca', 'KIW82GLC2MW'),
(57, 'Yuri', 'Finch', 'mauris.aliquam.eu@acmattissemper.org', 'SNZ50MGS4IL'),
(58, 'Jocelyn', 'Chan', 'Suspendisse.aliquet@Integerinmagna.co.uk', 'DBA72LWO7JE'),
(59, 'Thor', 'Olsen', 'Praesent@odioEtiam.ca', 'SLS14LQL4OI'),
(60, 'Zia', 'Golden', 'Vivamus@maurisanunc.org', 'SSM44UPY0XZ'),
(61, 'Jacqueline', 'Church', 'Duis@aarcuSed.net', 'ZBM61UDP2BF'),
(62, 'Germane', 'Chapman', 'nonummy.ipsum.non@lobortisauguescelerisque.ca', 'TGO12OMQ1ZK'),
(63, 'Charity', 'Shannon', 'Donec.at@dignissimpharetra.ca', 'DIM00SQA8AI'),
(64, 'Eric', 'Fisher', 'magna@iaculis.org', 'FMV86TBC4DH'),
(65, 'Channing', 'Olsen', 'blandit.at@eratvitae.net', 'SXK85XTT5SM'),
(66, 'Graiden', 'Hunt', 'Aliquam@ascelerisque.net', 'ELX89FXX3IY'),
(67, 'Charissa', 'Walker', 'odio.Aliquam@nonbibendumsed.net', 'TZB04WTG2XF'),
(68, 'Graiden', 'Francis', 'In.tincidunt.congue@idrisus.co.uk', 'EIJ03RAF5EY'),
(69, 'Zeph', 'Rollins', 'Ut.sagittis@primisinfaucibus.ca', 'WKF59RMC4QY'),
(70, 'Wade', 'Wright', 'elit.elit@justositamet.co.uk', 'QCO84KJF6NZ'),
(71, 'Amir', 'Good', 'Praesent@tristiquenequevenenatis.com', 'WSU13NJI0KQ'),
(72, 'Isabelle', 'Rosario', 'molestie.sodales@velit.net', 'JIC98MLL1VJ'),
(73, 'Mariko', 'Ratliff', 'Donec.est@sitamet.com', 'INB50PTF8DC'),
(74, 'Uriah', 'Warner', 'at@posuere.co.uk', 'LSK03IAG7HW'),
(75, 'Tobias', 'Kim', 'in.consequat@sodalespurus.net', 'JQM66KAS9SG'),
(76, 'Tallulah', 'Diaz', 'sed.pede.Cum@auctor.edu', 'AEC88LHL0BU'),
(77, 'Virginia', 'Francis', 'Fusce@temporaugueac.org', 'NYE25ANN3NH'),
(78, 'Zephr', 'Deleon', 'metus.Aenean@nequeSed.com', 'QUV78JRJ6SN'),
(79, 'Sloane', 'Rivera', 'ornare.facilisis@elit.ca', 'UPI61BSL7UG'),
(80, 'Hall', 'Sexton', 'ridiculus.mus@utlacusNulla.edu', 'PXD42BTT8CF'),
(81, 'Orson', 'Fox', 'ac.nulla@turpisvitaepurus.net', 'RCK28PVD4PR'),
(82, 'Leah', 'Gregory', 'diam.Sed@justonecante.org', 'UXO84MQW2VE'),
(83, 'Declan', 'Gates', 'pharetra@ornaresagittis.ca', 'RCZ33FYM0FZ'),
(84, 'Hakeem', 'Crosby', 'Maecenas@velconvallisin.org', 'MJS32XGV5KH'),
(85, 'Aquila', 'Coffey', 'semper@mollisnec.edu', 'PDT39PYJ7CR'),
(86, 'August', 'Benjamin', 'libero.Proin@ultricesVivamus.edu', 'VSE54VJM7VL'),
(87, 'Felix', 'Michael', 'gravida@vitae.edu', 'UMU24HLA8MO'),
(88, 'Quentin', 'Greene', 'In@aenim.org', 'IIP00OYF2JZ'),
(89, 'Tatum', 'Berger', 'nec@laoreet.com', 'RTX05HDA1BK'),
(90, 'Branden', 'Christensen', 'nunc.ac@morbitristiquesenectus.ca', 'RIR50NHL6IO'),
(91, 'Lacey', 'Steele', 'Nam@mifringillami.org', 'FRB60JUF4HO'),
(92, 'Ulric', 'Peck', 'dictum.mi.ac@Vivamus.org', 'CPE42RVQ2PQ'),
(93, 'Yardley', 'Larsen', 'mauris@nullaCras.org', 'LOT00PGU8YR'),
(94, 'Melodie', 'Vincent', 'Etiam.vestibulum@tristique.ca', 'WTW38UGF4KS'),
(95, 'Jack', 'Mitchell', 'lorem.eget@sedsem.ca', 'EDQ80DOZ1NO'),
(96, 'Brennan', 'Mccormick', 'sem@consectetueradipiscing.org', 'IKW95NGJ1WX'),
(97, 'Aretha', 'Stafford', 'magna.Phasellus@volutpat.net', 'RQV81VSN4IA'),
(98, 'Stuart', 'Snow', 'rhoncus@sodalespurus.edu', 'XYF02AHT4UF'),
(99, 'Barrett', 'Hall', 'interdum@mifringillami.net', 'YRE28OZX4BT'),
(100, 'John', 'Herman', 'vestibulum.massa.rutrum@natoque.org', 'KKO97RKE9KC'),
(101, 'nasmd', 'asdas', 'pd@asd.com', '$2y$10$fC44H7/b1jEPengDn4AM8OmoO6zCJ0g9bMxdn7wDNDM.PPYibhyjK'),
(102, 'Luciano', 'Perez', 'a@as.com', '$2y$10$ts4eYdWAUU.86sAIsylsdOSZDvSsDrCuxhDKhLqPU2qbnGvJUMCEO'),
(103, 'bob', '', 'b@b.com', '$2y$10$37.GN3oGzM48ppcUbWKC2OgIJB3Lk7FBsqIkvF593qx7tgfCLptyu'),
(104, 'bob', 'esponja', 'b@b.com', '$2y$10$Kh6/WOk/0gtWv1YKAU6zxOP8U1ZcpqXVZoRNDNEkEtSDr.it1GRqu'),
(105, '', '', 'b@b.com', '$2y$10$oeRhqji1wDVzFbTy2ksMfe8ntlDjSKDtPwnVGu9uA2e8IskWCkTWS'),
(106, NULL, NULL, 'b@b.com', '$2y$10$GdPJC/UiKRPgGX39u/VuYeGtbTpsBEEZojE/SOyp8XxVmqiARQuNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
