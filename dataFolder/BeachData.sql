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


-- Dumping database structure for beautifulbeaches
CREATE DATABASE IF NOT EXISTS `beautifulbeaches` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `beautifulbeaches`;

-- Dumping structure for table beautifulbeaches.beaches
CREATE TABLE IF NOT EXISTS `beaches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beaches_city_id_foreign` (`city_id`),
  CONSTRAINT `beaches_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.beaches: ~10 rows (approximately)
DELETE FROM `beaches`;
INSERT INTO `beaches` (`id`, `name`, `description`, `city_id`, `status`, `type`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'My Khe Beach', '\nMy Khe Beach, often referred to as China Beach, is a stunning and renowned destination located in Da Nang, Vietnam. This picturesque beach stretches for approximately 20 miles (30 kilometers) along the central coast of Vietnam, offering a breathtaking panorama of fine white sand and clear turquoise waters. The beach’s natural beauty is complemented by the gentle waves and a backdrop of lush green mountains, creating an ideal setting for relaxation and a variety of recreational activities.', 3, 'active', 'good', 'assets/images/1725164293_89337fdd33e8efdc1e63f92ed2ba165e.jpg', '2024-08-31 21:18:13', '2024-08-31 21:18:13'),
	(2, 'Phan Thiet Beach', 'Phan Thiet Beach, located in Phan Thiet city in Binh Thuan Province, is renowned for its natural beauty. The beach features a long stretch of fine white sand and clear blue waters, creating a picturesque and tranquil setting. The scenic coastline offers a perfect backdrop for relaxation and enjoyment.', 13, 'active', 'good', 'assets/images/1725164453_9c2a567365efac5db73af7a52407b61f.jpg', '2024-08-31 21:20:53', '2024-08-31 21:20:53'),
	(3, 'Lang Co Beach', 'Lang Co Beach, located in Thua Thien-Hue Province, Vietnam, is celebrated for its stunning natural beauty. This picturesque beach features a long stretch of soft, white sand and crystal-clear blue waters, bordered by lush green mountains. The serene environment and breathtaking views make it an ideal spot for relaxation and appreciation of nature.', 4, 'active', 'good', 'assets/images/1725164537_bien-lang-co-hue-1.jpg', '2024-08-31 21:22:17', '2024-08-31 21:22:17'),
	(4, 'Mui Ne Beach', 'Mui Ne Beach, located in Binh Thuan Province, Vietnam, is celebrated for its breathtaking scenery. The beach features a wide expanse of golden sand and clear blue waters, set against a backdrop of rolling sand dunes and lush palm trees. This picturesque landscape offers a stunning setting for visitors looking to enjoy both natural beauty and tranquility.', 9, 'active', 'good', 'assets/images/1725164688_409793646ff9d2246ce9498f6ead6f27.jpg', '2024-08-31 21:24:48', '2024-08-31 21:24:48'),
	(5, 'Con Dao Island', 'Con Dao, an archipelago located off the southeastern coast of Vietnam, is renowned for its stunning natural beauty. The islands feature pristine beaches with fine white sand and crystal-clear waters, lush tropical forests, and dramatic coastal cliffs. The untouched landscapes and serene environment make Con Dao a paradise for nature lovers and those seeking tranquility.', 10, 'active', 'good', 'assets/images/1725164786_7c22218e093077d1c6687dc810828fed.jpg', '2024-08-31 21:26:26', '2024-08-31 21:26:26'),
	(6, 'Halong Bay', 'Halong Bay, located in northeastern Vietnam, is renowned for its majestic natural wonders. The bay is famous for its dramatic seascape of over 1,600 limestone islands and islets that rise spectacularly from the emerald waters of the Gulf of Tonkin. These towering karst formations, often shrouded in mist, create a surreal and picturesque environment that is truly breathtaking.', 11, 'active', 'good', 'assets/images/1725165010_895692711c38ecf2519a1bd70396ed45.jpg', '2024-08-31 21:30:10', '2024-08-31 21:30:10'),
	(7, 'Nha Trang Beach', 'Halong Bay holds significant cultural and historical value. The bay is steeped in local legends and folklore, adding a layer of cultural depth to the experience. The geological formations of the bay have been shaped over millions of years, contributing to its scientific and historical importance. The local fishing communities also provide insights into traditional maritime life, enriching the overall visit.', 5, 'active', 'good', 'assets/images/1725165123_ab25ad53b057abaeac324d98e646d9c7.jpg', '2024-08-31 21:32:03', '2024-08-31 21:32:03'),
	(8, 'Phu Quoc Island', 'Phu Quoc Beach, located on Phu Quoc Island in the Gulf of Thailand, Vietnam, is celebrated for its idyllic coastal beauty. The island boasts a series of stunning beaches with powdery white sand and crystal-clear waters. The picturesque setting is enhanced by lush tropical vegetation, tranquil blue seas, and gentle waves, making it a perfect spot for relaxation and scenic enjoyment.', 8, 'active', 'good', 'assets/images/1725165243_ff8dc1ecb5269399e00033fbc92e934c.jpg', '2024-08-31 21:34:03', '2024-08-31 21:34:03'),
	(9, 'Thuan An', 'Thuan An Beach, located in Thuan An Ward, near the city of Hue in Vietnam, is known for its charming coastal landscape. This picturesque beach features a serene stretch of fine, golden sand and clear, calm waters. The beach is flanked by palm trees and offers beautiful views of the horizon, making it a tranquil escape from the bustle of city life.', 14, 'active', 'good', 'assets/images/1725165404_bien-thuan-an-5.webp', '2024-08-31 21:36:44', '2024-08-31 21:36:44'),
	(10, 'Ho Tram Beach', 'Ho Tram Beach, situated in the coastal town of Ho Tram in Vung Tau Province, Vietnam, is known for its serene and picturesque coastal beauty. This relatively untouched beach features a long stretch of golden sand and clear, tranquil waters. Surrounded by lush greenery and rolling dunes, Ho Tram Beach offers a peaceful retreat with stunning natural scenery.', 6, 'active', 'good', 'assets/images/1725165519_7e84df3c71e4011526c5a821bc404429.jpg', '2024-08-31 21:38:39', '2024-08-31 21:38:39');

-- Dumping structure for table beautifulbeaches.beach_images
CREATE TABLE IF NOT EXISTS `beach_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beach_section_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beach_images_beach_section_id_foreign` (`beach_section_id`),
  CONSTRAINT `beach_images_beach_section_id_foreign` FOREIGN KEY (`beach_section_id`) REFERENCES `beach_sections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.beach_images: ~44 rows (approximately)
DELETE FROM `beach_images`;
INSERT INTO `beach_images` (`id`, `path`, `beach_section_id`, `created_at`, `updated_at`) VALUES
	(1, '01J6NWW3E6BJXDVMPK8Y8DFVQJ.jpg', 1, '2024-08-31 21:18:13', '2024-08-31 21:18:13'),
	(2, '01J6NWW3E8BCTK5ZWP95JVG8BR.jpg', 1, '2024-08-31 21:18:13', '2024-08-31 21:18:13'),
	(3, '01J6NWW3EBM61KATFQ738VVH1D.jpg', 1, '2024-08-31 21:18:13', '2024-08-31 21:18:13'),
	(4, '01J6NWW3EET7DSQ85YS9S9MB5Z.jpg', 2, '2024-08-31 21:18:13', '2024-08-31 21:18:13'),
	(5, '01J6NWW3EGE53QNAPFX6KFG217.jpg', 2, '2024-08-31 21:18:13', '2024-08-31 21:18:13'),
	(6, '01J6NX0Z9M2M1VHAAB5VJVZ3BW.jpg', 3, '2024-08-31 21:20:53', '2024-08-31 21:20:53'),
	(7, '01J6NX0Z9P60D1HNJ8HS9MJ6CY.jpg', 3, '2024-08-31 21:20:53', '2024-08-31 21:20:53'),
	(8, '01J6NX0Z9YV0KSCP3X6J908EFC.jpg', 4, '2024-08-31 21:20:53', '2024-08-31 21:20:53'),
	(9, '01J6NX0ZA0GJNJPRNFKN5ZSQP6.jpg', 4, '2024-08-31 21:20:53', '2024-08-31 21:20:53'),
	(10, '01J6NX3HG3T1QGMYTE3CDHJR6J.jpg', 5, '2024-08-31 21:22:17', '2024-08-31 21:22:17'),
	(11, '01J6NX3HG63D5CH9S1G024G0P8.jpg', 5, '2024-08-31 21:22:17', '2024-08-31 21:22:17'),
	(12, '01J6NX3HG8VSRDCWCF9A4KHGQF.jpg', 5, '2024-08-31 21:22:17', '2024-08-31 21:22:17'),
	(13, '01J6NX3HGAMCXK4P72K6MXT7XX.jpg', 5, '2024-08-31 21:22:17', '2024-08-31 21:22:17'),
	(14, '01J6NX85CEVJ63HYTXHNBX5RH6.jpg', 6, '2024-08-31 21:24:48', '2024-08-31 21:24:48'),
	(15, '01J6NX85CGN4SZ8X33SYVNF6DB.jpg', 6, '2024-08-31 21:24:48', '2024-08-31 21:24:48'),
	(16, '01J6NX85CM4F6K2TF8TA8VKR4H.jpg', 7, '2024-08-31 21:24:48', '2024-08-31 21:24:48'),
	(17, '01J6NXB4JKPNVJQQ0FRX0NA8ES.jpg', 8, '2024-08-31 21:26:26', '2024-08-31 21:26:26'),
	(18, '01J6NXB4JN1HSCHKS6RSE047N7.jpg', 8, '2024-08-31 21:26:26', '2024-08-31 21:26:26'),
	(19, '01J6NXB4JRRZ0B456GF2MJMMQJ.jpg', 8, '2024-08-31 21:26:26', '2024-08-31 21:26:26'),
	(20, '01J6NXHZZ2D9MNXAJ8E7W3MKGQ.jpg', 9, '2024-08-31 21:30:10', '2024-08-31 21:30:10'),
	(21, '01J6NXHZZ9RP6Y944AA8CDE6GZ.jpg', 9, '2024-08-31 21:30:10', '2024-08-31 21:30:10'),
	(22, '01J6NXHZZBDEBZDZ9QA0CPNMW0.jpg', 9, '2024-08-31 21:30:10', '2024-08-31 21:30:10'),
	(23, '01J6NXHZZD7BQVBQ5VK1DFG2QJ.jpg', 9, '2024-08-31 21:30:10', '2024-08-31 21:30:10'),
	(24, '01J6NXHZZH71G7ATX3WKFYSPRH.jpg', 10, '2024-08-31 21:30:10', '2024-08-31 21:30:10'),
	(25, '01J6NXHZZKH1EP78WKK8QP74Q2.jpg', 10, '2024-08-31 21:30:10', '2024-08-31 21:30:10'),
	(26, '01J6NXHZZQ2PS1GA6FBCR6SG53.jpg', 11, '2024-08-31 21:30:11', '2024-08-31 21:30:11'),
	(27, '01J6NXHZZSV6PPS4HV9PSFAKCB.jpg', 11, '2024-08-31 21:30:11', '2024-08-31 21:30:11'),
	(28, '01J6NXNDVBNPNRSHXKWPPZG3VK.jpg', 12, '2024-08-31 21:32:03', '2024-08-31 21:32:03'),
	(29, '01J6NXNDVDYNE4RVP62B9CJ7F3.jpg', 12, '2024-08-31 21:32:03', '2024-08-31 21:32:03'),
	(30, '01J6NXNDVGZGZ45KNGBFW6WN9H.jpg', 12, '2024-08-31 21:32:03', '2024-08-31 21:32:03'),
	(31, '01J6NXNDVKB82T8WW4A8D4YD0K.webp', 13, '2024-08-31 21:32:03', '2024-08-31 21:32:03'),
	(32, '01J6NXNDVPTWRE7VGB07YZSW39.jpg', 13, '2024-08-31 21:32:03', '2024-08-31 21:32:03'),
	(33, '01J6NXNDVRJK4J95SZT5R2NGH8.jpg', 13, '2024-08-31 21:32:03', '2024-08-31 21:32:03'),
	(34, '01J6NXS3DDPZ8EM87CV37ZWZNV.jpg', 14, '2024-08-31 21:34:03', '2024-08-31 21:34:03'),
	(35, '01J6NXS3DFBEG4VCC3ZXXQ84TA.jpg', 14, '2024-08-31 21:34:03', '2024-08-31 21:34:03'),
	(36, '01J6NXS3DJC4PEVRNTYYPVF10B.jpg', 14, '2024-08-31 21:34:03', '2024-08-31 21:34:03'),
	(37, '01J6NXS3DNMX5DVQQYSDR4H8ET.jpg', 15, '2024-08-31 21:34:03', '2024-08-31 21:34:03'),
	(38, '01J6NXS3DQM5AGWKNPYECVCAK1.jpg', 15, '2024-08-31 21:34:03', '2024-08-31 21:34:03'),
	(39, '01J6NXY0JM5P91RBZ0994SHXKT.jpg', 16, '2024-08-31 21:36:44', '2024-08-31 21:36:44'),
	(40, '01J6NXY0JPBKCDZ340R6D8YER4.webp', 16, '2024-08-31 21:36:44', '2024-08-31 21:36:44'),
	(41, '01J6NXY0JTQSYEJG50HRNWS4HQ.webp', 17, '2024-08-31 21:36:44', '2024-08-31 21:36:44'),
	(42, '01J6NXY0JW2MJ196BHGCV34BSY.webp', 17, '2024-08-31 21:36:44', '2024-08-31 21:36:44'),
	(43, '01J6NY1GDZAH0AXGFYWJ35H7GY.jpg', 18, '2024-08-31 21:38:39', '2024-08-31 21:38:39'),
	(44, '01J6NY1GE0KMR5EGBP96MFAS2T.jpg', 18, '2024-08-31 21:38:39', '2024-08-31 21:38:39');

-- Dumping structure for table beautifulbeaches.beach_sections
CREATE TABLE IF NOT EXISTS `beach_sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `beach_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `beach_sections_beach_id_foreign` (`beach_id`),
  CONSTRAINT `beach_sections_beach_id_foreign` FOREIGN KEY (`beach_id`) REFERENCES `beaches` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.beach_sections: ~18 rows (approximately)
DELETE FROM `beach_sections`;
INSERT INTO `beach_sections` (`id`, `created_at`, `updated_at`, `beach_id`, `title`, `description`, `image`, `status`, `type`) VALUES
	(1, '2024-08-31 21:18:13', '2024-08-31 21:18:13', 1, 'Recreational Activities', 'My Khe Beach offers a range of recreational activities for visitors. It’s an excellent spot for sunbathing, swimming, and engaging in water sports such as surfing and paddleboarding. The clear waters and consistent waves cater to both casual beachgoers and more adventurous souls looking to enjoy a variety of water-based activities.', NULL, 'active', 'good'),
	(2, '2024-08-31 21:18:13', '2024-08-31 21:18:13', 1, ' Nearby Attractions', 'The beach is also close to several notable attractions. The Marble Mountains, a series of five marble and limestone hills with impressive views and intriguing cave systems, are nearby. Additionally, the famous Golden Bridge on Ba Na Hills, known for its striking design and panoramic vistas, is a short drive away, offering further opportunities for exploration and sightseeing.', NULL, 'active', 'good'),
	(3, '2024-08-31 21:20:53', '2024-08-31 21:20:53', 2, ' Recreational Activities', 'Phan Thiet Beach is an ideal destination for a variety of outdoor activities. Visitors can engage in water sports such as surfing and kayaking or simply enjoy swimming and sunbathing. The beach’s inviting waters and expansive sandy areas make it a great spot for both relaxation and adventure.', NULL, 'active', 'good'),
	(4, '2024-08-31 21:20:53', '2024-08-31 21:20:53', 2, 'Accessibility and Amenities', 'Phan Thiet Beach is easily accessible and well-equipped with various amenities. The surrounding area offers a range of accommodations, from luxurious resorts to budget-friendly hotels. There are also numerous dining options available, featuring both local seafood and international cuisine, ensuring a comfortable and enjoyable stay for visitors.', NULL, 'active', 'good'),
	(5, '2024-08-31 21:22:17', '2024-08-31 21:22:17', 3, 'Accessibility and Amenities', 'Lang Co Beach is conveniently located about 30 kilometers (18 miles) from Da Nang and approximately 70 kilometers (43 miles) from Hue, making it easily accessible from these major cities. The area offers a range of accommodations, from upscale resorts to more modest hotels, ensuring a comfortable stay for all types of travelers. There are also local dining options available, offering fresh seafood and traditional Vietnamese cuisine.', NULL, 'active', 'good'),
	(6, '2024-08-31 21:24:48', '2024-08-31 21:24:48', 4, 'Convenient Access and Facilities', 'Mui Ne Beach is conveniently located approximately 200 kilometers (124 miles) east of Ho Chi Minh City and about 10 kilometers (6 miles) from Phan Thiet city center. The area boasts a range of accommodation options, from luxurious resorts to more affordable hotels. There is also a diverse selection of dining venues, serving everything from fresh seafood to international dishes. The well-developed infrastructure ensures a comfortable and enjoyable stay for visitors.', NULL, 'active', 'good'),
	(7, '2024-08-31 21:24:48', '2024-08-31 21:24:48', 4, 'Must-See Sights', 'In addition to the beach, Mui Ne offers several must-see attractions. The Red Sand Dunes and White Sand Dunes are renowned for their unique landscapes and are perfect for sandboarding and photography. The Fairy Stream, a charming creek flowing through striking red and white sand formations, provides a serene and scenic excursion. The local fishing village offers insights into traditional fishing practices and fresh seafood.\n\n', NULL, 'active', 'good'),
	(8, '2024-08-31 21:26:26', '2024-08-31 21:26:26', 5, 'Outdoor Adventures', 'Con Dao offers a range of outdoor adventures for visitors. The clear, turquoise waters are perfect for snorkeling and diving, with vibrant coral reefs and diverse marine life. Hiking enthusiasts can explore the island\'s mountainous terrain and dense forests, with trails leading to breathtaking viewpoints. Kayaking, fishing, and swimming are also popular activities, making Con Dao an excellent destination for outdoor enthusiasts.', NULL, 'active', 'good'),
	(9, '2024-08-31 21:30:10', '2024-08-31 21:30:10', 6, ' Getting There and Where to Stay', 'Halong Bay is conveniently accessible from Hanoi, which is approximately 170 kilometers (105 miles) away. The trip usually takes between 2.5 to 4 hours by car or bus. The bay features a variety of accommodation options, including luxury cruises, boutique hotels, and budget guesthouses. Staying on a cruise boat provides a unique experience, allowing guests to fully immerse themselves in the bay’s scenic beauty and enjoy overnight stays on the water.', NULL, 'active', 'good'),
	(10, '2024-08-31 21:30:10', '2024-08-31 21:30:10', 6, 'Attractions in the Vicinity', 'Besides the bay itself, there are several nearby attractions worth exploring. Cat Ba Island, the largest island in the bay, offers beautiful beaches, scenic hiking trails, and the Cat Ba National Park, known for its rich biodiversity. The fishing villages, such as Vung Vieng, offer a glimpse into traditional local life. Additionally, the vibrant city of Hanoi, with its rich cultural heritage, serves as an excellent starting point for trips to Halong Bay.', NULL, 'active', 'good'),
	(11, '2024-08-31 21:30:11', '2024-08-31 21:30:11', 6, 'Cultural and Historical Context', 'Halong Bay holds significant cultural and historical value. The bay is steeped in local legends and folklore, adding a layer of cultural depth to the experience. The geological formations of the bay have been shaped over millions of years, contributing to its scientific and historical importance. The local fishing communities also provide insights into traditional maritime life, enriching the overall visit.', NULL, 'active', 'good'),
	(12, '2024-08-31 21:32:03', '2024-08-31 21:32:03', 7, 'Activities and Entertainment', 'Nha Trang Beach offers a wide range of activities and entertainment options for visitors. The clear waters are ideal for swimming, snorkeling, and diving, with vibrant coral reefs and diverse marine life just offshore. The beach also provides opportunities for water sports such as jet skiing, parasailing, and windsurfing. Additionally, Nha Trang is known for its lively beachfront promenade, which features numerous cafes, restaurants, and shops, providing ample options for dining and leisure.', NULL, 'active', 'good'),
	(13, '2024-08-31 21:32:03', '2024-08-31 21:32:03', 7, 'Accessibility and Accommodations', 'Nha Trang Beach is easily accessible, with Nha Trang city being well-connected by air, rail, and road. Cam Ranh International Airport, located about 30 kilometers (19 miles) from the city, serves as the primary gateway for international and domestic flights. The area offers a wide range of accommodations, from luxury resorts and boutique hotels to budget-friendly guesthouses. Many hotels and resorts are located directly along the beachfront, offering stunning views and convenient access to the beach.', NULL, 'active', 'good'),
	(14, '2024-08-31 21:34:03', '2024-08-31 21:34:03', 8, 'Water Activities and Leisure', 'Phu Quoc Beach offers a range of water activities and leisure options. The calm, clear waters are ideal for swimming, snorkeling, and diving, with vibrant coral reefs and diverse marine life easily accessible. For adventure seekers, there are opportunities for kayaking, paddleboarding, and jet skiing. The beaches also feature opportunities for leisurely beach walks, sunbathing, and enjoying beachside massages.', NULL, 'active', 'good'),
	(15, '2024-08-31 21:34:03', '2024-08-31 21:34:03', 8, 'Nearby Attractions', 'Phu Quoc Island is home to several attractions beyond its beautiful beaches. The VinWonders theme park, Vinpearl Safari, and Vinpearl Land offer entertainment and recreational activities for all ages. The island’s lush natural beauty is further showcased in places like the Vinpearl Safari Park and the Phu Quoc National Park, which offer opportunities for wildlife spotting and hiking. The island’s night markets, such as the Dinh Cau Night Market, provide a taste of local life and cuisine.', NULL, 'active', 'good'),
	(16, '2024-08-31 21:36:44', '2024-08-31 21:36:44', 9, 'Recreational Activities', 'Thuan An Beach provides a range of recreational activities for visitors. The gentle waters are ideal for swimming and wading, while the expansive sandy area is perfect for sunbathing and relaxing. Visitors can also enjoy beach sports like volleyball and frisbee. For those interested in local culture, the beach offers opportunities to interact with local fishermen and learn about traditional fishing techniques.', NULL, 'active', 'good'),
	(17, '2024-08-31 21:36:44', '2024-08-31 21:36:44', 9, 'Accessibility and Accommodations', 'Thuan An Beach is easily accessible from Hue city, which is located approximately 15 kilometers (9 miles) away. The beach can be reached by a short drive or motorbike ride. While Thuan An Beach is less developed than some other beach destinations, there are a few accommodation options in the nearby area, including local guesthouses and small hotels. For more extensive lodging choices, visitors can stay in Hue city and make day trips to the beach.', NULL, 'active', 'good'),
	(18, '2024-08-31 21:38:39', '2024-08-31 21:38:39', 10, 'Local Culture and Cuisine', 'Ho Tram Beach and its surrounding areas offer a taste of local culture and cuisine. The region is known for its seafood, and visitors can enjoy fresh catches at local eateries and beachfront restaurants. Traditional Vietnamese dishes are served alongside local specialties, providing a rich culinary experience. The nearby fishing villages offer insights into local maritime life and traditions, enhancing the cultural experience of the area.', NULL, 'active', 'good');

-- Dumping structure for table beautifulbeaches.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `beach_id` bigint unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_user_id_foreign` (`user_id`),
  KEY `blogs_beach_id_foreign` (`beach_id`),
  CONSTRAINT `blogs_beach_id_foreign` FOREIGN KEY (`beach_id`) REFERENCES `beaches` (`id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.blogs: ~18 rows (approximately)
DELETE FROM `blogs`;
INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `user_id`, `beach_id`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'The most beautiful beach in Vietnam', '\nMy Khe Beach, often referred to as China Beach, is a stunning and renowned destination located in Da Nang, Vietnam. This picturesque beach stretches for approximately 20 miles (30 kilometers) along the central coast of Vietnam, offering a breathtaking panorama of fine white sand and clear turquoise waters. The beach’s natural beauty is complemented by the gentle waves and a backdrop of lush green mountains, creating an ideal setting for relaxation and a variety of recreational activities.', 'public/assets/images/1725167444_0697df3fab7b438326b4f4969a0d76bf.jpg', 1, 1, 'inactive', '2024-08-31 22:10:44', '2024-08-31 22:10:44'),
	(2, 'Great experience in Da Nang', '\nMy Khe Beach, often referred to as China Beach, is a stunning and renowned destination located in Da Nang, Vietnam. This picturesque beach stretches for approximately 20 miles (30 kilometers) along the central coast of Vietnam, offering a breathtaking panorama of fine white sand and clear turquoise waters. The beach’s natural beauty is complemented by the gentle waves and a backdrop of lush green mountains, creating an ideal setting for relaxation and a variety of recreational activities.', 'public/assets/images/1725167598_c9eb0a95bde5a729503a589beb80c774.jpg', 1, 1, 'inactive', '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(3, 'First time coming to Da Nang', '\nMy Khe Beach, often referred to as China Beach, is a stunning and renowned destination located in Da Nang, Vietnam. This picturesque beach stretches for approximately 20 miles (30 kilometers) along the central coast of Vietnam, offering a breathtaking panorama of fine white sand and clear turquoise waters. The beach’s natural beauty is complemented by the gentle waves and a backdrop of lush green mountains, creating an ideal setting for relaxation and a variety of recreational activities.', 'public/assets/images/1725167750_2bcd75ad85151d7230f8412b4de7fce3.jpg', 1, 1, 'inactive', '2024-08-31 22:15:22', '2024-08-31 22:15:50'),
	(4, 'First time coming to Phan Thiet', 'Phan Thiet Beach, located in Phan Thiet city in Binh Thuan Province, is renowned for its natural beauty. The beach features a long stretch of fine white sand and clear blue waters, creating a picturesque and tranquil setting. The scenic coastline offers a perfect backdrop for relaxation and enjoyment.', 'public/assets/images/1725167848_9c2a567365efac5db73af7a52407b61f.jpg', 1, 2, 'inactive', '2024-08-31 22:17:28', '2024-08-31 22:17:28'),
	(5, 'The green pearl of southern Vietnam', 'Phan Thiet Beach is easily accessible and well-equipped with various amenities. The surrounding area offers a range of accommodations, from luxurious resorts to budget-friendly hotels. There are also numerous dining options available, featuring both local seafood and international cuisine, ensuring a comfortable and enjoyable stay for visitors.', 'public/assets/images/1725167919_4a8a7874576c55d9e862d8918d7c4c40.jpg', 1, 2, 'inactive', '2024-08-31 22:18:39', '2024-08-31 22:18:39'),
	(6, 'Bringing the ancient beauty of Hue', 'Lang Co Beach, located in Thua Thien-Hue Province, Vietnam, is celebrated for its stunning natural beauty. This picturesque beach features a long stretch of soft, white sand and crystal-clear blue waters, bordered by lush green mountains. The serene environment and breathtaking views make it an ideal spot for relaxation and appreciation of nature.', 'public/assets/images/1725168010_bien-lang-co-hue-1.jpg', 1, 3, 'inactive', '2024-08-31 22:20:10', '2024-08-31 22:20:10'),
	(7, 'The Northernmost Point of Vietnam', 'Mui Ne Beach, located in Binh Thuan Province, Vietnam, is celebrated for its breathtaking scenery. The beach features a wide expanse of golden sand and clear blue waters, set against a backdrop of rolling sand dunes and lush palm trees. This picturesque landscape offers a stunning setting for visitors looking to enjoy both natural beauty and tranquility.', 'public/assets/images/1725168103_82c37cd99e35bd29ca03ea6e8ea77d36.jpg', 1, 4, 'inactive', '2024-08-31 22:21:43', '2024-08-31 22:21:43'),
	(8, 'Great beach for the first time coming to Vietnam', 'In addition to the beach, Mui Ne offers several must-see attractions. The Red Sand Dunes and White Sand Dunes are renowned for their unique landscapes and are perfect for sandboarding and photography. The Fairy Stream, a charming creek flowing through striking red and white sand formations, provides a serene and scenic excursion. The local fishing village offers insights into traditional fishing practices and fresh seafood.\n\n', 'public/assets/images/1725168169_ba549f12f776e8cf108d263fa91c1ad2.jpg', 1, 4, 'inactive', '2024-08-31 22:22:49', '2024-08-31 22:22:49'),
	(9, 'My most memorable trip', 'Con Dao, an archipelago located off the southeastern coast of Vietnam, is renowned for its stunning natural beauty. The islands feature pristine beaches with fine white sand and crystal-clear waters, lush tropical forests, and dramatic coastal cliffs. The untouched landscapes and serene environment make Con Dao a paradise for nature lovers and those seeking tranquility.', 'public/assets/images/1725168289_2673e83ce098bb2d3c906b3e23e6a235.jpg', 1, 5, 'inactive', '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(10, 'One of the world\'s natural wonders', 'Halong Bay, located in northeastern Vietnam, is renowned for its majestic natural wonders. The bay is famous for its dramatic seascape of over 1,600 limestone islands and islets that rise spectacularly from the emerald waters of the Gulf of Tonkin. These towering karst formations, often shrouded in mist, create a surreal and picturesque environment that is truly breathtaking.', 'public/assets/images/1725168519_11b2625022324b6e26fb65aa3e9d0121.jpg', 1, 6, 'inactive', '2024-08-31 22:28:39', '2024-08-31 22:28:39'),
	(11, 'Definitely must come', 'Halong Bay is conveniently accessible from Hanoi, which is approximately 170 kilometers (105 miles) away. The trip usually takes between 2.5 to 4 hours by car or bus. The bay features a variety of accommodation options, including luxury cruises, boutique hotels, and budget guesthouses. Staying on a cruise boat provides a unique experience, allowing guests to fully immerse themselves in the bay’s scenic beauty and enjoy overnight stays on the water.', 'public/assets/images/1725168663_895692711c38ecf2519a1bd70396ed45.jpg', 1, 6, 'inactive', '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(12, 'Don\'t miss this place if you want to find a place to travel !', 'If you\'re searching for the perfect destination for your next trip, don\'t miss the chance to explore this place. It\'s definitely one of those must-visit locations where you\'ll find a perfect blend of stunning landscapes, unique culture, and exciting experiences that you won\'t find anywhere else. Make your journey complete and unforgettable with a visit to this remarkable destination.', 'public/assets/images/1725168741_2402a9bbb41f90e3ad439d489964497d.jpg', 1, 6, 'inactive', '2024-08-31 22:32:21', '2024-09-04 00:35:21'),
	(13, 'beach and long sandy shore', 'Halong Bay holds significant cultural and historical value. The bay is steeped in local legends and folklore, adding a layer of cultural depth to the experience. The geological formations of the bay have been shaped over millions of years, contributing to its scientific and historical importance. The local fishing communities also provide insights into traditional maritime life, enriching the overall visit.', 'public/assets/images/1725169038_55f0e6d570728b36bc72fcff3a29cbfc.jpg', 1, 7, 'inactive', '2024-08-31 22:37:18', '2024-08-31 22:37:18'),
	(14, 'A beautiful beach at night', 'Nha Trang Beach offers a wide range of activities and entertainment options for visitors. The clear waters are ideal for swimming, snorkeling, and diving, with vibrant coral reefs and diverse marine life just offshore. The beach also provides opportunities for water sports such as jet skiing, parasailing, and windsurfing. Additionally, Nha Trang is known for its lively beachfront promenade, which features numerous cafes, restaurants, and shops, providing ample options for dining and leisure.', 'public/assets/images/1725169211_ab25ad53b057abaeac324d98e646d9c7.jpg', 1, 7, 'inactive', '2024-08-31 22:40:11', '2024-08-31 22:40:11'),
	(15, 'Unforgettable Experience in Phu Quoc', 'Phu Quoc Beach, located on Phu Quoc Island in the Gulf of Thailand, Vietnam, is celebrated for its idyllic coastal beauty. The island boasts a series of stunning beaches with powdery white sand and crystal-clear waters. The picturesque setting is enhanced by lush tropical vegetation, tranquil blue seas, and gentle waves, making it a perfect spot for relaxation and scenic enjoyment.', 'public/assets/images/1725169341_6eff0f4358a4c1bcd33c46e6c075442c.jpg', 1, 8, 'inactive', '2024-08-31 22:42:21', '2024-08-31 22:42:21'),
	(16, 'Interesting Experience At Thuan An Beach', 'Thuan An Beach, located in Thuan An Ward, near the city of Hue in Vietnam, is known for its charming coastal landscape. This picturesque beach features a serene stretch of fine, golden sand and clear, calm waters. The beach is flanked by palm trees and offers beautiful views of the horizon, making it a tranquil escape from the bustle of city life.', 'public/assets/images/1725169527_bien-thuan-an-5.webp', 1, 9, 'inactive', '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(17, 'Ho Tram Beach and its surrounding', 'Ho Tram Beach and its surrounding areas offer a taste of local culture and cuisine. The region is known for its seafood, and visitors can enjoy fresh catches at local eateries and beachfront restaurants. Traditional Vietnamese dishes are served alongside local specialties, providing a rich culinary experience. The nearby fishing villages offer insights into local maritime life and traditions, enhancing the cultural experience of the area.', 'public/assets/images/1725170703_07e6eed7cd53f6bf175773c8ad44606c.jpg', 1, 10, 'inactive', '2024-08-31 22:46:54', '2024-08-31 23:08:12'),
	(18, 'Phu Quoc Beach offers a range of water activities and leisure options.', 'Phu Quoc Beach, located on Phu Quoc Island in the Gulf of Thailand, Vietnam, is celebrated for its idyllic coastal beauty. The island boasts a series of stunning beaches with powdery white sand and crystal-clear waters. The picturesque setting is enhanced by lush tropical vegetation, tranquil blue seas, and gentle waves, making it a perfect spot for relaxation and scenic enjoyment.', 'public/assets/images/1725169684_3960882f7404d2dc8eab228b9815beb5.jpg', 1, 8, 'inactive', '2024-08-31 22:48:04', '2024-08-31 22:48:04');

-- Dumping structure for table beautifulbeaches.blog_images
CREATE TABLE IF NOT EXISTS `blog_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_section_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_images_blog_section_id_foreign` (`blog_section_id`),
  CONSTRAINT `blog_images_blog_section_id_foreign` FOREIGN KEY (`blog_section_id`) REFERENCES `blog_sections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.blog_images: ~55 rows (approximately)
DELETE FROM `blog_images`;
INSERT INTO `blog_images` (`id`, `path`, `blog_section_id`, `created_at`, `updated_at`) VALUES
	(1, 'public/assets/images/1725167444_a84e455e76bc85456e9554e20b7cb49f.jpg', 1, '2024-08-31 22:10:44', '2024-08-31 22:10:44'),
	(2, 'public/assets/images/1725167444_c052c8ed02150dbdb6901bb0b0f757f5.jpg', 1, '2024-08-31 22:10:44', '2024-08-31 22:10:44'),
	(3, 'public/assets/images/1725167444_2bcd75ad85151d7230f8412b4de7fce3.jpg', 1, '2024-08-31 22:10:44', '2024-08-31 22:10:44'),
	(4, 'public/assets/images/1725167598_71092026b7a15eeaa40b29ffbafdb3c0.jpg', 2, '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(5, 'public/assets/images/1725167598_2bcd75ad85151d7230f8412b4de7fce3.jpg', 2, '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(6, 'public/assets/images/1725167598_c052c8ed02150dbdb6901bb0b0f757f5.jpg', 3, '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(7, 'public/assets/images/1725167598_d35d04cf1ea3741763a94415f3122222.jpg', 3, '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(8, 'public/assets/images/1725167598_89337fdd33e8efdc1e63f92ed2ba165e.jpg', 3, '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(9, 'public/assets/images/1725167722_750b42778afb48223dca3644227d731a.jpg', 4, '2024-08-31 22:15:22', '2024-08-31 22:15:22'),
	(10, 'public/assets/images/1725167722_89337fdd33e8efdc1e63f92ed2ba165e.jpg', 4, '2024-08-31 22:15:22', '2024-08-31 22:15:22'),
	(11, 'public/assets/images/1725167848_32bfa982d5ee89abe291dcc1407fc792.jpg', 5, '2024-08-31 22:17:28', '2024-08-31 22:17:28'),
	(12, 'public/assets/images/1725167848_f05d5bed084289efed758738b63cd275.jpg', 6, '2024-08-31 22:17:28', '2024-08-31 22:17:28'),
	(13, 'public/assets/images/1725167848_bai-rang-mui-ne.jpg', 6, '2024-08-31 22:17:28', '2024-08-31 22:17:28'),
	(14, 'public/assets/images/1725167919_bai-rang-mui-ne.jpg', 7, '2024-08-31 22:18:39', '2024-08-31 22:18:39'),
	(15, 'public/assets/images/1725167919_32bfa982d5ee89abe291dcc1407fc792.jpg', 7, '2024-08-31 22:18:39', '2024-08-31 22:18:39'),
	(16, 'public/assets/images/1725168010_bien-lang-co-hue-1.jpg', 8, '2024-08-31 22:20:10', '2024-08-31 22:20:10'),
	(17, 'public/assets/images/1725168010_vinh-lang-co-tu-tren-cao.jpg', 8, '2024-08-31 22:20:10', '2024-08-31 22:20:10'),
	(18, 'public/assets/images/1725168103_ba549f12f776e8cf108d263fa91c1ad2.jpg', 9, '2024-08-31 22:21:43', '2024-08-31 22:21:43'),
	(19, 'public/assets/images/1725168103_82c37cd99e35bd29ca03ea6e8ea77d36.jpg', 9, '2024-08-31 22:21:43', '2024-08-31 22:21:43'),
	(20, 'public/assets/images/1725168169_82c37cd99e35bd29ca03ea6e8ea77d36.jpg', 10, '2024-08-31 22:22:49', '2024-08-31 22:22:49'),
	(21, 'public/assets/images/1725168169_409793646ff9d2246ce9498f6ead6f27.jpg', 10, '2024-08-31 22:22:49', '2024-08-31 22:22:49'),
	(22, 'public/assets/images/1725168289_998b7c9d19b439573b20495eb1b6c699.jpg', 11, '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(23, 'public/assets/images/1725168289_fe604caf4c27d638ca829a2687087bd9.jpg', 11, '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(24, 'public/assets/images/1725168289_7c22218e093077d1c6687dc810828fed.jpg', 12, '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(25, 'public/assets/images/1725168289_29c6ed7e778931e7ad7508ef10891241.jpg', 12, '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(26, 'public/assets/images/1725168289_a9951aa5bba1e9c2bd50d6a3b98f61d6.jpg', 12, '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(27, 'public/assets/images/1725168519_1343ee2003969a508c1c320f53808ac2.jpg', 13, '2024-08-31 22:28:39', '2024-08-31 22:28:39'),
	(28, 'public/assets/images/1725168519_a4d58ffb2055eb61813a6ebc1bdb58f1.jpg', 13, '2024-08-31 22:28:39', '2024-08-31 22:28:39'),
	(29, 'public/assets/images/1725168519_fd29e8254ab880b60ccabd65b731dee0.jpg', 13, '2024-08-31 22:28:39', '2024-08-31 22:28:39'),
	(30, 'public/assets/images/1725168519_2402a9bbb41f90e3ad439d489964497d.jpg', 13, '2024-08-31 22:28:39', '2024-08-31 22:28:39'),
	(31, 'public/assets/images/1725168519_835ee87b3031c6c1790af0199e191416.jpg', 13, '2024-08-31 22:28:39', '2024-08-31 22:28:39'),
	(32, 'public/assets/images/1725168663_11b2625022324b6e26fb65aa3e9d0121.jpg', 14, '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(33, 'public/assets/images/1725168663_a4d58ffb2055eb61813a6ebc1bdb58f1.jpg', 14, '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(34, 'public/assets/images/1725168663_835ee87b3031c6c1790af0199e191416.jpg', 14, '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(35, 'public/assets/images/1725168663_3c8ee458c8ebfdf127a92d72eea43b0b.jpg', 15, '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(36, 'public/assets/images/1725168663_895692711c38ecf2519a1bd70396ed45.jpg', 15, '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(37, 'public/assets/images/1725168741_a4d58ffb2055eb61813a6ebc1bdb58f1.jpg', 16, '2024-08-31 22:32:21', '2024-08-31 22:32:21'),
	(38, 'public/assets/images/1725168741_58e09c5fa3b7ed5b44605b22c0e04253.jpg', 16, '2024-08-31 22:32:21', '2024-08-31 22:32:21'),
	(39, 'public/assets/images/1725168741_fd29e8254ab880b60ccabd65b731dee0.jpg', 16, '2024-08-31 22:32:21', '2024-08-31 22:32:21'),
	(40, 'public/assets/images/1725169038_8f305799e99cf1ec075b76cd062cc2af.jpg', 17, '2024-08-31 22:37:18', '2024-08-31 22:37:18'),
	(41, 'public/assets/images/1725169038_11c985139ae8bdcc0e5058daaca043d8.jpg', 17, '2024-08-31 22:37:18', '2024-08-31 22:37:18'),
	(42, 'public/assets/images/1725169211_bai-tam-dep-o-nha-trang-8.webp', 18, '2024-08-31 22:40:11', '2024-08-31 22:40:11'),
	(43, 'public/assets/images/1725169211_ef07482c9f4a9c8f18539369e8e3df3c.jpg', 18, '2024-08-31 22:40:11', '2024-08-31 22:40:11'),
	(44, 'public/assets/images/1725169211_a3f6e16b387f48290ac29fd530e3543a.jpg', 18, '2024-08-31 22:40:11', '2024-08-31 22:40:11'),
	(45, 'public/assets/images/1725169341_9ac3ead6fd156f35b6069aca8784e61e.jpg', 19, '2024-08-31 22:42:21', '2024-08-31 22:42:21'),
	(46, 'public/assets/images/1725169341_62b22bd460e3d2e853d4bf4da207db30.jpg', 19, '2024-08-31 22:42:21', '2024-08-31 22:42:21'),
	(47, 'public/assets/images/1725169527_bien-thuan-an-1-1024x597.webp', 20, '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(48, 'public/assets/images/1725169527_bien-thuan-an-hue-06_1624764596.webp', 20, '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(49, 'public/assets/images/1725169527_bien-thuan-an-hue-10_1624764693.webp', 20, '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(50, 'public/assets/images/1725169527_thuan an (1).jpg', 21, '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(51, 'public/assets/images/1725169527_bien-thuan-an-hue-4.webp', 21, '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(52, 'public/assets/images/1725169614_07e6eed7cd53f6bf175773c8ad44606c.jpg', 22, '2024-08-31 22:46:54', '2024-08-31 22:46:54'),
	(53, 'public/assets/images/1725169614_2-3.png', 22, '2024-08-31 22:46:54', '2024-08-31 22:46:54'),
	(54, 'public/assets/images/1725169684_9ac3ead6fd156f35b6069aca8784e61e.jpg', 23, '2024-08-31 22:48:04', '2024-08-31 22:48:04'),
	(55, 'public/assets/images/1725169684_62b22bd460e3d2e853d4bf4da207db30.jpg', 23, '2024-08-31 22:48:04', '2024-08-31 22:48:04');

-- Dumping structure for table beautifulbeaches.blog_sections
CREATE TABLE IF NOT EXISTS `blog_sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_sections_blog_id_foreign` (`blog_id`),
  CONSTRAINT `blog_sections_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.blog_sections: ~23 rows (approximately)
DELETE FROM `blog_sections`;
INSERT INTO `blog_sections` (`id`, `blog_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Recreational Activities', 'My Khe Beach offers a range of recreational activities for visitors. It’s an excellent spot for sunbathing, swimming, and engaging in water sports such as surfing and paddleboarding. The clear waters and consistent waves cater to both casual beachgoers and more adventurous souls looking to enjoy a variety of water-based activities.', NULL, '2024-08-31 22:10:44', '2024-08-31 22:10:44'),
	(2, 2, ' Nearby Attractions', 'The beach is also close to several notable attractions. The Marble Mountains, a series of five marble and limestone hills with impressive views and intriguing cave systems, are nearby. Additionally, the famous Golden Bridge on Ba Na Hills, known for its striking design and panoramic vistas, is a short drive away, offering further opportunities for exploration and sightseeing.', NULL, '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(3, 2, 'Recreational Activities', 'My Khe Beach offers a range of recreational activities for visitors. It’s an excellent spot for sunbathing, swimming, and engaging in water sports such as surfing and paddleboarding. The clear waters and consistent waves cater to both casual beachgoers and more adventurous souls looking to enjoy a variety of water-based activities.', NULL, '2024-08-31 22:13:18', '2024-08-31 22:13:18'),
	(4, 3, 'Recreational Activities', 'My Khe Beach offers a range of recreational activities for visitors. It’s an excellent spot for sunbathing, swimming, and engaging in water sports such as surfing and paddleboarding. The clear waters and consistent waves cater to both casual beachgoers and more adventurous souls looking to enjoy a variety of water-based activities.', NULL, '2024-08-31 22:15:22', '2024-08-31 22:15:22'),
	(5, 4, ' Recreational Activities', 'Phan Thiet Beach is an ideal destination for a variety of outdoor activities. Visitors can engage in water sports such as surfing and kayaking or simply enjoy swimming and sunbathing. The beach’s inviting waters and expansive sandy areas make it a great spot for both relaxation and adventure.', NULL, '2024-08-31 22:17:28', '2024-08-31 22:17:28'),
	(6, 4, 'Accessibility and Amenities', 'Phan Thiet Beach is easily accessible and well-equipped with various amenities. The surrounding area offers a range of accommodations, from luxurious resorts to budget-friendly hotels. There are also numerous dining options available, featuring both local seafood and international cuisine, ensuring a comfortable and enjoyable stay for visitors.', NULL, '2024-08-31 22:17:28', '2024-08-31 22:17:28'),
	(7, 5, 'Accessibility and Amenities', 'Phan Thiet Beach is easily accessible and well-equipped with various amenities. The surrounding area offers a range of accommodations, from luxurious resorts to budget-friendly hotels. There are also numerous dining options available, featuring both local seafood and international cuisine, ensuring a comfortable and enjoyable stay for visitors.', NULL, '2024-08-31 22:18:39', '2024-08-31 22:18:39'),
	(8, 6, 'Accessibility and Amenities', 'Lang Co Beach is conveniently located about 30 kilometers (18 miles) from Da Nang and approximately 70 kilometers (43 miles) from Hue, making it easily accessible from these major cities. The area offers a range of accommodations, from upscale resorts to more modest hotels, ensuring a comfortable stay for all types of travelers. There are also local dining options available, offering fresh seafood and traditional Vietnamese cuisine.', NULL, '2024-08-31 22:20:10', '2024-08-31 22:20:10'),
	(9, 7, 'Convenient Access and Facilities', 'Mui Ne Beach is conveniently located approximately 200 kilometers (124 miles) east of Ho Chi Minh City and about 10 kilometers (6 miles) from Phan Thiet city center. The area boasts a range of accommodation options, from luxurious resorts to more affordable hotels. There is also a diverse selection of dining venues, serving everything from fresh seafood to international dishes. The well-developed infrastructure ensures a comfortable and enjoyable stay for visitors.', NULL, '2024-08-31 22:21:43', '2024-08-31 22:21:43'),
	(10, 8, 'Must-See Sights', 'In addition to the beach, Mui Ne offers several must-see attractions. The Red Sand Dunes and White Sand Dunes are renowned for their unique landscapes and are perfect for sandboarding and photography. The Fairy Stream, a charming creek flowing through striking red and white sand formations, provides a serene and scenic excursion. The local fishing village offers insights into traditional fishing practices and fresh seafood.\n\n', NULL, '2024-08-31 22:22:49', '2024-08-31 22:22:49'),
	(11, 9, 'Outdoor Adventures', 'Con Dao offers a range of outdoor adventures for visitors. The clear, turquoise waters are perfect for snorkeling and diving, with vibrant coral reefs and diverse marine life. Hiking enthusiasts can explore the island\'s mountainous terrain and dense forests, with trails leading to breathtaking viewpoints. Kayaking, fishing, and swimming are also popular activities, making Con Dao an excellent destination for outdoor enthusiasts.', NULL, '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(12, 9, 'Outdoor Adventures', 'Con Dao offers a range of outdoor adventures for visitors. The clear, turquoise waters are perfect for snorkeling and diving, with vibrant coral reefs and diverse marine life. Hiking enthusiasts can explore the island\'s mountainous terrain and dense forests, with trails leading to breathtaking viewpoints. Kayaking, fishing, and swimming are also popular activities, making Con Dao an excellent destination for outdoor enthusiasts.', NULL, '2024-08-31 22:24:49', '2024-08-31 22:24:49'),
	(13, 10, ' Getting There and Where to Stay', 'Halong Bay is conveniently accessible from Hanoi, which is approximately 170 kilometers (105 miles) away. The trip usually takes between 2.5 to 4 hours by car or bus. The bay features a variety of accommodation options, including luxury cruises, boutique hotels, and budget guesthouses. Staying on a cruise boat provides a unique experience, allowing guests to fully immerse themselves in the bay’s scenic beauty and enjoy overnight stays on the water.', NULL, '2024-08-31 22:28:39', '2024-08-31 22:28:39'),
	(14, 11, ' Getting There and Where to Stay', 'Halong Bay is conveniently accessible from Hanoi, which is approximately 170 kilometers (105 miles) away. The trip usually takes between 2.5 to 4 hours by car or bus. The bay features a variety of accommodation options, including luxury cruises, boutique hotels, and budget guesthouses. Staying on a cruise boat provides a unique experience, allowing guests to fully immerse themselves in the bay’s scenic beauty and enjoy overnight stays on the water.', NULL, '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(15, 11, ' Getting There and Where to Stay', 'Halong Bay is conveniently accessible from Hanoi, which is approximately 170 kilometers (105 miles) away. The trip usually takes between 2.5 to 4 hours by car or bus. The bay features a variety of accommodation options, including luxury cruises, boutique hotels, and budget guesthouses. Staying on a cruise boat provides a unique experience, allowing guests to fully immerse themselves in the bay’s scenic beauty and enjoy overnight stays on the water.', NULL, '2024-08-31 22:31:03', '2024-08-31 22:31:03'),
	(16, 12, ' Getting There and Where to Stay', 'Halong Bay is conveniently accessible from Hanoi, which is approximately 170 kilometers (105 miles) away. The trip usually takes between 2.5 to 4 hours by car or bus. The bay features a variety of accommodation options, including luxury cruises, boutique hotels, and budget guesthouses. Staying on a cruise boat provides a unique experience, allowing guests to fully immerse themselves in the bay’s scenic beauty and enjoy overnight stays on the water.', NULL, '2024-08-31 22:32:21', '2024-08-31 22:32:21'),
	(17, 13, 'Activities and Entertainment', 'Nha Trang Beach offers a wide range of activities and entertainment options for visitors. The clear waters are ideal for swimming, snorkeling, and diving, with vibrant coral reefs and diverse marine life just offshore. The beach also provides opportunities for water sports such as jet skiing, parasailing, and windsurfing. Additionally, Nha Trang is known for its lively beachfront promenade, which features numerous cafes, restaurants, and shops, providing ample options for dining and leisure.', NULL, '2024-08-31 22:37:18', '2024-08-31 22:37:18'),
	(18, 14, 'Activities and Entertainment', 'Nha Trang Beach offers a wide range of activities and entertainment options for visitors. The clear waters are ideal for swimming, snorkeling, and diving, with vibrant coral reefs and diverse marine life just offshore. The beach also provides opportunities for water sports such as jet skiing, parasailing, and windsurfing. Additionally, Nha Trang is known for its lively beachfront promenade, which features numerous cafes, restaurants, and shops, providing ample options for dining and leisure.', NULL, '2024-08-31 22:40:11', '2024-08-31 22:40:11'),
	(19, 15, 'Water Activities and Leisure', 'Phu Quoc Beach offers a range of water activities and leisure options. The calm, clear waters are ideal for swimming, snorkeling, and diving, with vibrant coral reefs and diverse marine life easily accessible. For adventure seekers, there are opportunities for kayaking, paddleboarding, and jet skiing. The beaches also feature opportunities for leisurely beach walks, sunbathing, and enjoying beachside massages.', NULL, '2024-08-31 22:42:21', '2024-08-31 22:42:21'),
	(20, 16, 'Recreational Activities', 'Thuan An Beach provides a range of recreational activities for visitors. The gentle waters are ideal for swimming and wading, while the expansive sandy area is perfect for sunbathing and relaxing. Visitors can also enjoy beach sports like volleyball and frisbee. For those interested in local culture, the beach offers opportunities to interact with local fishermen and learn about traditional fishing techniques.', NULL, '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(21, 16, 'Accessibility and Accommodations', 'Thuan An Beach is easily accessible from Hue city, which is located approximately 15 kilometers (9 miles) away. The beach can be reached by a short drive or motorbike ride. While Thuan An Beach is less developed than some other beach destinations, there are a few accommodation options in the nearby area, including local guesthouses and small hotels. For more extensive lodging choices, visitors can stay in Hue city and make day trips to the beach.', NULL, '2024-08-31 22:45:27', '2024-08-31 22:45:27'),
	(22, 17, 'Local Culture and Cuisine', 'Ho Tram Beach and its surrounding areas offer a taste of local culture and cuisine. The region is known for its seafood, and visitors can enjoy fresh catches at local eateries and beachfront restaurants. Traditional Vietnamese dishes are served alongside local specialties, providing a rich culinary experience. The nearby fishing villages offer insights into local maritime life and traditions, enhancing the cultural experience of the area.', NULL, '2024-08-31 22:46:54', '2024-08-31 22:46:54'),
	(23, 18, 'Water Activities and Leisure', 'Phu Quoc Beach offers a range of water activities and leisure options. The calm, clear waters are ideal for swimming, snorkeling, and diving, with vibrant coral reefs and diverse marine life easily accessible. For adventure seekers, there are opportunities for kayaking, paddleboarding, and jet skiing. The beaches also feature opportunities for leisurely beach walks, sunbathing, and enjoying beachside massages.', NULL, '2024-08-31 22:48:04', '2024-08-31 22:48:04');

-- Dumping structure for table beautifulbeaches.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.cache: ~4 rows (approximately)
DELETE FROM `cache`;
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1725172432),
	('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1725172432;', 1725172432),
	('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1725161157),
	('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1725161157;', 1725161157);

-- Dumping structure for table beautifulbeaches.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.cache_locks: ~0 rows (approximately)
DELETE FROM `cache_locks`;

-- Dumping structure for table beautifulbeaches.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_name_unique` (`name`),
  KEY `cities_region_id_foreign` (`region_id`),
  CONSTRAINT `cities_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.cities: ~14 rows (approximately)
DELETE FROM `cities`;
INSERT INTO `cities` (`id`, `name`, `region_id`, `created_at`, `updated_at`) VALUES
	(1, 'Haiphong', 2, NULL, NULL),
	(2, 'Quang Ninh', 2, NULL, NULL),
	(3, 'Da Nang', 3, NULL, NULL),
	(4, 'Hue', 3, NULL, NULL),
	(5, 'Nha Trang', 3, NULL, NULL),
	(6, 'Vung Tau', 1, NULL, NULL),
	(7, 'Can Tho', 1, NULL, NULL),
	(8, 'Phu Quoc', 1, NULL, NULL),
	(9, 'Mui Ne', 3, NULL, NULL),
	(10, 'Con Dao', 1, NULL, NULL),
	(11, 'Ha Long', 2, NULL, '2024-08-31 21:27:46'),
	(12, 'Ninh Binh', 2, NULL, NULL),
	(13, 'Phan Thiet', 1, '2024-08-31 21:10:47', '2024-08-31 21:10:47'),
	(14, 'Thuan An', 1, '2024-08-31 21:34:58', '2024-08-31 21:34:58');

-- Dumping structure for table beautifulbeaches.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `blog_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_blog_id_foreign` (`blog_id`),
  CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.comments: ~0 rows (approximately)
DELETE FROM `comments`;

-- Dumping structure for table beautifulbeaches.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table beautifulbeaches.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.feedback: ~0 rows (approximately)
DELETE FROM `feedback`;

-- Dumping structure for table beautifulbeaches.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.images: ~16 rows (approximately)
DELETE FROM `images`;
INSERT INTO `images` (`id`, `path`, `type`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'assets/images/1724846606_a1.jpg', 'About', 'section_1', NULL, '2024-08-27 21:44:03', '2024-08-27 22:03:26'),
	(2, 'assets/images/1724845510_beachesCentral_134.jpg', 'About', 'section_2', NULL, '2024-08-27 21:45:10', '2024-08-27 21:45:10'),
	(3, 'assets/images/1724845524_beachesCentral_113.jpg', 'About', 'section_2', NULL, '2024-08-27 21:45:24', '2024-08-27 21:45:24'),
	(4, 'assets/images/1724845611_beachesCentral_48.jpg', 'About', 'section_2', NULL, '2024-08-27 21:46:51', '2024-08-27 21:46:51'),
	(5, 'assets/images/1724845621_beachesCentral_22.jpg', 'About', 'section_2', NULL, '2024-08-27 21:47:01', '2024-08-27 21:47:01'),
	(7, 'assets/images/1724845643_beachesCentral_113.jpg', 'About', 'section_2', NULL, '2024-08-27 21:47:23', '2024-08-27 21:47:23'),
	(8, 'assets/images/1724846844_wallpaperflare.com_wallpaper.webp', 'About', 'section_3', NULL, '2024-08-27 21:48:12', '2024-08-27 22:07:24'),
	(9, 'assets/images/1724846727_copu.png', 'About', 'section_3', NULL, '2024-08-27 21:48:22', '2024-08-27 22:05:27'),
	(10, 'assets/images/1724846780_img_4.png', 'About', 'section_3', NULL, '2024-08-27 21:48:33', '2024-08-27 22:06:20'),
	(11, 'assets/images/1724845795_beachesCentral_100.jpg', 'About', 'section_4', NULL, '2024-08-27 21:49:55', '2024-08-27 21:49:55'),
	(12, 'assets/images/1724845816_pexels-photo-1457812.jpeg', 'About', 'section_4', NULL, '2024-08-27 21:50:16', '2024-08-27 21:50:16'),
	(13, 'assets/images/1724845830_0917b99a490716b77e5af056e5f1e369.jpg', 'About', 'section_4', NULL, '2024-08-27 21:50:30', '2024-08-27 21:50:30'),
	(14, 'assets/images/1724845840_0dae6fecbfde415e548f6612a257bc8c.jpg', 'About', 'section_4', NULL, '2024-08-27 21:50:40', '2024-08-27 21:50:40'),
	(15, 'assets/images/1724845849_staniel-cay-swimming-pig-seagull-fish-66258.jpeg', 'About', 'section_4', NULL, '2024-08-27 21:50:49', '2024-08-27 21:50:49'),
	(16, 'assets/images/1724845871_wallpaperflare.com_wallpaper.webp', 'About', 'section_4', NULL, '2024-08-27 21:51:11', '2024-08-27 21:51:11'),
	(17, 'assets/images/1724847357_beachesCentral_93.jpg', 'Contact_Title', NULL, NULL, '2024-08-27 22:12:42', '2024-08-27 22:15:57');

-- Dumping structure for table beautifulbeaches.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.jobs: ~0 rows (approximately)
DELETE FROM `jobs`;

-- Dumping structure for table beautifulbeaches.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.job_batches: ~0 rows (approximately)
DELETE FROM `job_batches`;

-- Dumping structure for table beautifulbeaches.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.migrations: ~17 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000001_create_cache_table', 1),
	(2, '0001_01_01_000002_create_jobs_table', 1),
	(3, '1_create_regions_table', 1),
	(4, '2024_08_07_132319_create_pending_feedbacks_table', 1),
	(5, '2_create_cities_table', 1),
	(6, '3_create_users_table', 1),
	(7, '4_create_beaches_table', 1),
	(8, '5_create_blogs_table', 1),
	(9, '6_create_comments_table', 1),
	(10, '7_create_texts_table', 1),
	(11, '8_create_images_table', 1),
	(12, '93_create_feedback_table', 1),
	(13, '94_create_beach_sections_table', 1),
	(14, '95_create_beach_images_table', 1),
	(15, '96_create_blog_sections_table', 1),
	(16, '97_create_blog_images_table', 1),
	(17, '9_create_videos_table', 1);

-- Dumping structure for table beautifulbeaches.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table beautifulbeaches.pending_feedbacks
CREATE TABLE IF NOT EXISTS `pending_feedbacks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_sent` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.pending_feedbacks: ~0 rows (approximately)
DELETE FROM `pending_feedbacks`;

-- Dumping structure for table beautifulbeaches.regions
CREATE TABLE IF NOT EXISTS `regions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `regions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.regions: ~3 rows (approximately)
DELETE FROM `regions`;
INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Southern Vietnam', NULL, NULL),
	(2, 'Northern Vietnam', NULL, NULL),
	(3, 'Central Vietnam', NULL, NULL);

-- Dumping structure for table beautifulbeaches.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.sessions: ~1 rows (approximately)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('b5ldlhDdKUjK26npbb6jdUv4qvq4TUJs8jQixI2W', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaExjSDZVeVJpWGd0Wm9NeUU2dW9iQzVkVGFjanl1WDRLR25TM3M4YiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL0NvbnRhY3RVcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkZXpEeUVkam80YzNrNmNaM3BSRzdnLnB2NS9wSXpodHRSa24vV29yVG1pZGpXeEhraFgyWHEiO30=', 1725435405);

-- Dumping structure for table beautifulbeaches.texts
CREATE TABLE IF NOT EXISTS `texts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.texts: ~24 rows (approximately)
DELETE FROM `texts`;
INSERT INTO `texts` (`id`, `content`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'About Us\n', 'About_Title', '2024-08-27 21:52:20', '2024-08-27 21:52:20'),
	(2, 'Explore the Vietnam\'s Beaches with us.\n', 'About_section_1_1', '2024-08-27 21:53:38', '2024-08-27 21:53:38'),
	(3, 'Your ideal beach vacation starts here with our blogs\n', 'About_section_1_2', '2024-08-27 21:53:56', '2024-08-27 21:53:56'),
	(4, 'We share the beauty of Vietnam\'s beaches through engaging blog posts. Explore our guides and tips for your next beach adventure.\n', 'About_section_1_3', '2024-08-27 21:54:09', '2024-08-27 21:54:09'),
	(5, 'Local travel blog\n', 'About_section_1_4', '2024-08-27 21:56:09', '2024-08-27 21:56:09'),
	(6, 'Happy Travelers Share Their Experiences\n', 'About_section_2_1', '2024-08-27 21:56:29', '2024-08-27 21:56:29'),
	(7, 'Stories from Satisfied Customers\n', 'About_section_2_2', '2024-08-27 21:56:52', '2024-08-27 21:56:52'),
	(8, 'True Roaming Tales\n', 'About_section_3_1', '2024-08-27 21:57:09', '2024-08-27 21:57:09'),
	(9, 'Latest Useful News\n', 'About_section_3_2', '2024-08-27 21:57:21', '2024-08-27 21:57:21'),
	(11, 'Paul Davis: +1 629 592 593\n', 'MobilePhone', '2024-08-27 22:09:42', '2024-08-27 22:09:42'),
	(12, '+1 184 016 482', 'Administration_number', '2024-08-27 22:09:59', '2024-08-27 22:09:59'),
	(13, '+1 546456456', 'technical_number', '2024-08-27 22:10:19', '2024-08-27 22:10:19'),
	(14, '285 Đội Cấn,Ba Đình,Hà Nội\n', 'Agency_Address', '2024-08-27 22:10:30', '2024-08-27 22:10:30'),
	(15, '285 Đội Cấn,Ba Đình,Hà Nội\n', 'operator_Address', '2024-08-27 22:10:42', '2024-08-27 22:10:42'),
	(16, 'Write to this email for a detailed quotation quote@travel.com and information.\n', 'Contact_Consulting', '2024-08-27 22:11:07', '2024-08-27 22:11:07'),
	(17, 'Our free consultation service can be requested here info@travel.com every day.\n', 'Contact_quotes', '2024-08-27 22:11:17', '2024-08-27 22:11:17'),
	(18, 'Beautiful Beaches In Vietnam\n', 'Home_1', '2024-08-30 11:41:43', '2024-08-30 11:41:43'),
	(19, 'Discover the hidden gems of Vietnam\'s beautiful beaches and indulge in pristine waters, vibrant marine life, and serene landscapes that promise unforgettable experiences.\n\n', 'Home_1_1', '2024-08-30 11:43:47', '2024-08-30 11:43:47'),
	(20, 'Discover Vietnam\'s Coastal Paradise\n', 'Home_2', '2024-08-30 11:44:07', '2024-08-30 11:44:07'),
	(21, 'Explore the breathtaking beauty of Vietnam\'s coastline, where each region offers its own unique charm. From the tranquil shores of the north to the vibrant beach scenes of the south, uncover hidden gems and picturesque spots that cater to every beach lover\'s dream.\n', 'Home_2_1', '2024-08-30 11:44:19', '2024-08-30 11:44:19'),
	(22, 'Travel Blog\n', 'Home_3', '2024-08-30 11:44:39', '2024-08-30 11:44:39'),
	(23, 'We share our experiences, tips and travel stories to inspire and guide our readers in their own wanderlust adventures. From hidden gems to popular destinations, we showcase the beauty and diversity of the world, and promote responsible and sustainable travel.\n', 'Home_3_1', '2024-08-30 11:44:49', '2024-08-30 11:44:49'),
	(24, 'Join Our Blogging Community\n', 'Home_4', '2024-08-30 11:45:01', '2024-08-30 11:45:01'),
	(25, 'Want to share your travel stories and insights? Log in to start writing your own blog posts or create an account to join our vibrant community of writers. We’ll showcase your work on our platform and help you connect with a wider audience.\n', 'Home_4_1', '2024-08-30 11:45:34', '2024-08-30 11:45:34');

-- Dumping structure for table beautifulbeaches.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp_expiration` timestamp NULL DEFAULT NULL,
  `city_id` bigint unsigned DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_city_id_foreign` (`city_id`),
  CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `password`, `fullname`, `phone`, `role`, `status`, `otp`, `otp_expiration`, `city_id`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
	(1, 'an', '$2y$12$ezDyEdjo4c3k6cZ3pRG7g.pv5/pIzhttRkn/WorTmidjWxHkhX2Xq', 'An Duc', NULL, 'customer', 'inactive', NULL, NULL, 11, 'admin@gmail.com', NULL, 'KBuST4BHSb5LUZpYIJYMgglTbUXg72jyKbgBrQAVakv1n1QduCfzsJYs1wf2', '2024-08-31 20:24:35', '2024-08-31 22:33:11', NULL);

-- Dumping structure for table beautifulbeaches.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table beautifulbeaches.videos: ~0 rows (approximately)
DELETE FROM `videos`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
