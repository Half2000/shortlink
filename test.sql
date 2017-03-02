-- --------------------------------------------------------
-- Хост:                         192.168.0.101
-- Версия сервера:               5.5.45 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test`;


-- Дамп структуры для таблица test.url
CREATE TABLE IF NOT EXISTS `url` (
  `original` varchar(255) NOT NULL,
  `small` varchar(255) NOT NULL,
  `click` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`original`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test.url: ~0 rows (приблизительно)
DELETE FROM `url`;
/*!40000 ALTER TABLE `url` DISABLE KEYS */;
INSERT INTO `url` (`original`, `small`, `click`) VALUES
	('https://www.google.com.ua/?gfe_rd=cr&ei=XFe4WOmsK8zi8Af3i4XoDA', 'LKWnoH', 1),
	('https://www.ukr.net/', 'qZdGNG', 0),
	('https://www.yandex.ua/', 'DMxZOD', 0);
/*!40000 ALTER TABLE `url` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
