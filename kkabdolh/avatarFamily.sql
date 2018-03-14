# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.30-MariaDB)
# Database: avatarFamily
# Generation Time: 2018-03-14 01:20:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Character
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Character`;

CREATE TABLE `Character` (
  `char_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `birth` varchar(255) DEFAULT NULL,
  `death` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `era` varchar(255) DEFAULT NULL,
  `bender` varchar(255) DEFAULT NULL,
  `bending_specialty` varchar(255) DEFAULT NULL,
  `tribe_group` varchar(255) DEFAULT NULL,
  `general_description` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`char_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

LOCK TABLES `Character` WRITE;
/*!40000 ALTER TABLE `Character` DISABLE KEYS */;

INSERT INTO `Character` (`char_id`, `name`, `birth`, `death`, `age`, `era`, `bender`, `bending_specialty`, `tribe_group`, `general_description`, `img`)
VALUES
	(3,'sokka','84 AG','Between 158 and 170 AG','15-18','AG','None','None','Southern Water Tribe','Sokka was a Water Tribe warrior of the Southern Water Tribe and the son of Chief Hakoda and Kya. Following the death of his mother and his father\'s leave for war, Sokka was raised by his grandmother Kanna along with his younger sister Katara.','Sokka.png'),
	(4,'aang','12 BG','153 AG','112-166','AG','Airbender','Avatar','Air Nomads','Aang was a male Air Nomad born in 12 BG and the Avatar during the century-long conflict known as the Hundred Year War. His immediate predecessor was Avatar Roku, and his immediate successor is Avatar Korra. As the Avatar of his time, he was the only person capable of using all four bending arts: airbending, waterbending, earthbending, and firebending. He was also one of a select few Avatars, and one of the first in many cycles to learn the ancient art of energybending, and the first Avatar known to have actively used the technique.','aang.png'),
	(5,'katara','85 AG','N/A','89 ','AG','Water','Bloodbending','Water Tribe','Katara is a waterbending master, born in the Southern Water Tribe to Chief Hakoda and his wife, Kya. During her childhood, she was the only waterbender living in the South Pole. At first she lived a peaceful life with her family, until she lost her mother in a Fire Nation raid. After her father left to battle against the Fire Nation in the Hundred Year War, Katara was raised by her grandmother, Kanna, alongside her older brother Sokka. As a teenager, she and her brother discovered the young Air Nomad Avatar, Aang, who had been frozen in an iceberg with his bison, Appa, for one hundred years. In need of a waterbending master, the siblings and Aang left the South Pole on a journey toward the Northern Water Tribe. Katara and Sokka eventually became close friends with Aang, and after their journey to the North Pole, continued to travel with him across the world as he mastered the remaining elements, earth and fire. ','katara.png'),
	(6,'hokada','N/A','N/A','N/A','AG','None','None','Water Tribe','Hakoda was the father of Sokka and Katara, the husband of the late Kya, the son of Kanna, and the chieftain of a minor tribe at the South Pole that was part of the Southern Water Tribe\'s tribal confederation. Even though Hakoda was not the formal chief of the Southern Water Tribe, he was one of its most prominent leaders at the end of the Hundred Year War, skilled as talented ship captain, igloo builder, and weapons maker. Much of Sokka\'s ingenuity and craftiness was learned from his father. He went off to fight the Fire Nation two years before the end of the Hundred Year War, leaving his children to be raised by Kanna.','hokada.png'),
	(7,'suki','84 AG','N/A','15-18','AG','None','None','Earth Kingdom','Suki was the eldest member and leader of the all-female Kyoshi Warriors of the Earth Kingdom\'s Kyoshi Island. Having begun her training when she was only eight years old, Suki was well-respected by her fellow warriors for her leadership and combat skills. When Team Avatar arrived on Kyoshi Island, Suki and a few other Kyoshi Warriors captured them, thinking they were Fire Nation spies. Later, after realizing Aang was the Avatar, they released and befriended them, with Suki in particular forming a bond with Sokka.','suki.png'),
	(8,'kanna','19 AG','N/A','80','AG','Water','None','Water Tribe','Kanna, referred to by her grandchildren as \"Gran Gran\", was Katara and Sokka\'s caring paternal grandmother. She was a nonbender and the oldest resident of the Southern Water Tribe. Although Kanna initially distrusted Aang, once he was revealed to be the Avatar, she regained hope, something, she remarked, that she had not felt for a long time.','kanna.png'),
	(9,'kya','N/A','94 AG','N/A','AG','N/A','None','Water Tribe','Kya was the mother of Sokka and Katara and the wife of Hakoda, the chief of their village at the Southern Water Tribe. She was killed during a raid on her home, and her death had a profound impact upon both her children. Katara wore her mother\'s necklace as a memento of her affection.','kya.png');

/*!40000 ALTER TABLE `Character` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Event
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Event`;

CREATE TABLE `Event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `char_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`event_id`),
  KEY `char_id` (`char_id`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`char_id`) REFERENCES `Characters` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `Event` WRITE;
/*!40000 ALTER TABLE `Event` DISABLE KEYS */;

INSERT INTO `Event` (`event_id`, `char_id`, `title`, `date`, `body`)
VALUES
	(1,3,'Early Life','84 AG','Sokka was born at the South Pole to Chief Hakoda and Kya in 84 AG. Growing up as part of a minor tribe that lived in the remains of the Southern Water Tribe\'s ruined capital, Sokka was raised from a young age to be a warrior and possessed much knowledge of Water Tribe weapons and tactics. When he was ten, Sokka witnessed one of the last major Fire Nation raids on his tribe, during which his mother was targeted and killed, leaving him with great hatred for the Fire Nation.'),
	(2,3,'Helping to Train Team Beifong','101 AG','During the year immediately subsequent to the Hundred Year War, Sokka joined Katara and Aang in the \"Harmony Restoration Movement\" to disassemble the Fire Nation colonies in service of Earth King Kuei.'),
	(3,4,'Winter','99 AG','One hundred years later, Aang was found and freed from the iceberg by siblings Katara and Sokka of the Southern Water Tribe. He quickly befriended them and almost immediately attracted the attention of Prince Zuko, who was to capture him by order of his father, Fire Lord Ozai. A newly formed Team Avatar set out to find a waterbending master who could teach Katara and Aang, evading Zuko\'s attempts to capture them on their journey to the North Pole. While helping rid Senlin Village of Hei Bai, a spirit that was destroying their village, Aang crossed over to the Spirit World where he met Fang, the animal guide of his predecessor, Avatar Roku. He was instructed to visit an Avatar Temple on Crescent Island during the winter solstice so he could talk with Avatar Roku. Despite a run-in with most of the Fire Sages, a group whose loyalty had reallocated to the Fire Lord, Aang managed to speak with Roku, who warned him about the impending arrival of Sozin\'s Comet, which would grant the Fire Nation enough power to win the War.'),
	(4,4,'Spring','100 AG','Aang and the others flew to an Earth Kingdom base, from where they were to be escorted to Omashu, but decided to travel alone as the general in charge tried to force Aang into the Avatar State. Upon arrival, they learned that the city had fallen under Fire Nation control. They evacuated the citizens from the city in order to sustain the Omashu Resistance; but, in the process, the governor\'s son, Tom-Tom, followed them out. Team Avatar was sent a messenger hawk saying the governor would trade Bumi for Tom-Tom. However, Azula interfered and their attempt was called off. At that, Aang fought Azula, who deemed it her mission to capture him. Bumi told Aang that he needed to remain in Omashu and instructed the young Avatar to search for an earthbending master who waited and listened to the earth before attacking.[30] While in the city of Gaoling, the team learned about a tournament that housed the best earthbenders in the world which they attended, hoping to find a good earthbending teacher for Aang. After watching many rounds, they witnessed the final fight between one of the popular contestants and the current champion, a blind girl. During her match, Aang realized the girl was the same one he had envisioned while lost in the Foggy Swamp, and noticed her technique of waiting and listening before attacking, thus easily defeating her opponent. The ringmaster offered a sack of gold pieces to anyone who dared to face the \"Blind Bandit\". Aang accepted that challenge in order to talk to the girl, but she ignored him.');

/*!40000 ALTER TABLE `Event` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Relationship
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Relationship`;

CREATE TABLE `Relationship` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `char_id` int(11) DEFAULT NULL,
  `rel_id` int(11) DEFAULT NULL,
  `relationship` tinytext,
  PRIMARY KEY (`id`),
  KEY `char_id` (`char_id`),
  KEY `rel_id` (`rel_id`),
  CONSTRAINT `relationship_ibfk_1` FOREIGN KEY (`char_id`) REFERENCES `Character` (`char_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `relationship_ibfk_2` FOREIGN KEY (`rel_id`) REFERENCES `Character` (`char_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `Relationship` WRITE;
/*!40000 ALTER TABLE `Relationship` DISABLE KEYS */;

INSERT INTO `Relationship` (`id`, `char_id`, `rel_id`, `relationship`)
VALUES
	(1,3,5,'sibling'),
	(2,3,6,'parent'),
	(3,3,7,'significant'),
	(4,3,8,'other'),
	(5,3,9,'parent');

/*!40000 ALTER TABLE `Relationship` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
