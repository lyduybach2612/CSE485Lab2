-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for news
DROP DATABASE IF EXISTS `news`;
CREATE DATABASE IF NOT EXISTS `news` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `news`;

-- Dumping structure for table news.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table news.categories: ~20 rows (approximately)
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Technology'),
	(2, 'Health'),
	(3, 'Education'),
	(4, 'Sports'),
	(5, 'Entertainment'),
	(6, 'Business'),
	(7, 'Politics'),
	(8, 'Science'),
	(9, 'Lifestyle'),
	(10, 'Travel'),
	(11, 'Food'),
	(12, 'Culture'),
	(13, 'Environment'),
	(14, 'Fashion'),
	(15, 'History'),
	(16, 'Finance'),
	(17, 'Real Estate'),
	(18, 'Automotive'),
	(19, 'Gaming'),
	(20, 'Art');

-- Dumping structure for table news.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table news.news: ~0 rows (approximately)
INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_at`, `category_id`) VALUES
	(1, 'Tech Trends 2024', 'Latest trends in technology.', 'tech1.jpg', '2024-12-04 13:35:59', 1),
	(2, 'AI in Healthcare', 'How AI is transforming medicine.', 'health1.jpg', '2024-12-04 13:35:59', 2),
	(3, 'Online Education Growth', 'The rise of online learning platforms.', 'edu1.jpg', '2024-12-04 13:35:59', 3),
	(4, 'Champions League Highlights', 'Top moments from last night.', 'sports1.jpg', '2024-12-04 13:35:59', 4),
	(5, 'Upcoming Movies', 'Top 10 movies to watch.', 'entertainment1.jpg', '2024-12-04 13:35:59', 5),
	(6, 'Stock Market Updates', 'Today’s market performance.', 'business1.jpg', '2024-12-04 13:35:59', 6),
	(7, 'Election Results', 'Breaking: Election updates.', 'politics1.jpg', '2024-12-04 13:35:59', 7),
	(8, 'Space Exploration', 'Latest news in astronomy.', 'science1.jpg', '2024-12-04 13:35:59', 8),
	(9, 'Healthy Living Tips', 'How to maintain a healthy lifestyle.', 'lifestyle1.jpg', '2024-12-04 13:35:59', 9),
	(10, 'Top Travel Destinations', 'Must-visit places in 2024.', 'travel1.jpg', '2024-12-04 13:35:59', 10),
	(11, 'Recipes for Beginners', 'Easy recipes to try.', 'food1.jpg', '2024-12-04 13:35:59', 11),
	(12, 'Cultural Festivals', 'Celebrating diversity.', 'culture1.jpg', '2024-12-04 13:35:59', 12),
	(13, 'Climate Change News', 'What’s happening to our planet.', 'environment1.jpg', '2024-12-04 13:35:59', 13),
	(14, 'Winter Fashion Trends', 'Stylish ideas for the season.', 'fashion1.jpg', '2024-12-04 13:35:59', 14),
	(15, 'Historical Insights', 'Learning from the past.', 'history1.jpg', '2024-12-04 13:35:59', 15),
	(16, 'Personal Finance Tips', 'How to save money effectively.', 'finance1.jpg', '2024-12-04 13:35:59', 16),
	(17, 'Real Estate Guide', 'How to buy your first house.', 'realestate1.jpg', '2024-12-04 13:35:59', 17),
	(18, 'New Car Reviews', 'Top cars of the year.', 'automotive1.jpg', '2024-12-04 13:35:59', 18),
	(19, 'Esports News', 'Latest in gaming tournaments.', 'gaming1.jpg', '2024-12-04 13:35:59', 19),
	(20, 'Art Exhibitions', 'Must-see exhibitions in 2024.', 'art1.jpg', '2024-12-04 13:35:59', 20);

-- Dumping structure for table news.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ROLE` int NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `users_chk_1` CHECK (((`ROLE` = 0) or (`ROLE` = 1)))
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table news.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `username`, `PASSWORD`, `ROLE`) VALUES
	(1, 'admin', 'password123', 1),
	(2, 'editor1', 'editorpass1', 1),
	(3, 'editor2', 'editorpass2', 1),
	(4, 'user1', 'userpass1', 0),
	(5, 'user2', 'userpass2', 0),
	(6, 'user3', 'userpass3', 0),
	(7, 'user4', 'userpass4', 0),
	(8, 'user5', 'userpass5', 0),
	(9, 'user6', 'userpass6', 0),
	(10, 'user7', 'userpass7', 0),
	(11, 'user8', 'userpass8', 0),
	(12, 'user9', 'userpass9', 0),
	(13, 'user10', 'userpass10', 0),
	(14, 'user11', 'userpass11', 0),
	(15, 'user12', 'userpass12', 0),
	(16, 'user13', 'userpass13', 0),
	(17, 'user14', 'userpass14', 0),
	(18, 'user15', 'userpass15', 0),
	(19, 'user16', 'userpass16', 0),
	(20, 'user17', 'userpass17', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;