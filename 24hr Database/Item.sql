-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 04:20 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE `Item` (
  `Item_ID` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `Item_Name` char(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Item_Cost` double unsigned DEFAULT NULL,
  `Item_Category` char(20) NOT NULL,
  `Description` longtext,
  `Cat_ID` int(2) NOT NULL,
  PRIMARY KEY (`Item_ID`),
  KEY `Cat_ID` (`Cat_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Item`
--

INSERT INTO `Item` VALUES(1, 'Olympus XZ-1 Digital Camera', 150000, 'Camera', 'Product Features Color: Black\r\n\r\n10-megapixel CCD sensor with the TruePic V Image Processor\r\niZUIKO f1.8-2.5 6.0-24mm [28-112 mm equiv.] (4x zoom) lens for improved shooting in lowlight scenarios\r\nCapture all the action in crisp 720p HD video at 30 frames-per-second\r\n3-inch OLED monitor; six creative Art Filters\r\nCapture images and HD video to SD/SDHC memory cards (not included)\r\nRs 150000\r\n', 1);
INSERT INTO `Item` VALUES(2, 'Nikon XZ-1 Digital Camera', 13000, 'Camera', 'Product Features Color: Black\r\n\r\nWorld''s Thinnest Camera with 28mm Wide-Angle Lens, 12x Optical Zoom, and Optical Image Stabilizer\r\n12.1 Megapixel CMOS Image Sensor and DIGIC 4 Image Processor\r\nFull HD Video Recording at 1080p in Stereo Sound\r\n3.2-Inch Wide Touch Panel LCD\r\nSmart AUTO Funciton Based on 32 Predefined Shooting Situations\r\n', 1);
INSERT INTO `Item` VALUES(3, 'Nikon COOLPIX L26 16.1 MP Digital Camera', 3000, 'Camera', 'Product Features Color: Maroon\r\n\r\n16.1 Megapixel CCD sensor\r\n5x Zoom-NIKKOR glass lens\r\n3-inch Bright LCD Monitor\r\nHD (720p) Movies\r\nCompatible with ''AA'' batteries\r\nBuilt-in Memory: 19MB,5x Zoom-NIKKOR glass lens\r\nComaptible with ''AA'' batteries\r\n', 1);
INSERT INTO `Item` VALUES(4, 'Call of Duty: Black Ops II', 250, 'Games', 'Product Features Platform: Xbox 360 | Edition: Standard\r\n\r\nAn all-new Call of Duty - Black Ops storyline featuring new characters and returning characters\r\nUnique single-player campaign that contains two time periods linked by characters and their actions\r\nSpecial Strike Force missions, in which the players action affect the outcome of gameplay and the overall campaign\r\nVariety of multiplayer modes and play options<.li>', 2);
INSERT INTO `Item` VALUES(5, 'Assassin''s Creed III', 120, 'Games', 'Product Features Platform: PLAYSTATION 3 | Edition: Standard\r\n\r\nAs a Native American assassin, eliminate your enemies with guns, bows, tomahawks, and more!\r\nFrom bustling city streets to the chaotic battlefields, play a critical role in the most legendary events of the American Revolution including the Battle of Bunker Hill and Great Fire of New York.\r\nExperience the truth behind the most gruesome war in history: the American Revolution.\r\nIntroducing the Anvil Next game engine, the stunning new technology that will revolutionize gaming with powerful graphics, lifelike animations, immersive combat, and advanced physics.', 2);
INSERT INTO `Item` VALUES(6, 'Casino Royale (James Bond) [Paperback]', 1900, 'Books', 'Book Description Release Date: October 16, 2012 | Series: James Bond In the novel that introduced James Bond to the world, Ian Fleming’s agent 007 is dispatched to a French casino in Royale-les-Eaux. His mission? Bankrupt a ruthless Russian agent who’s been on a bad luck streak at the baccarat table. One of SMERSH’s most deadly operatives, the man known only as “Le Chiffre,” has been a prime target of the British Secret Service for years. If Bond can wipe out his bankroll, Le Chiffre will likely be “retired” by his paymasters in Moscow. But what if the cards won’t cooperate? After a brutal night at the gaming tables, Bond soon finds himself dodging would-be assassins, fighting off brutal torturers, and going all-in to save the life of his beautiful female counterpart, Vesper Lynd. Taut, tense, and effortlessly stylish, Ian Fleming’s inaugural James Bond adventure has all the hallmarks that made the series a touchstone for a generation of readers.', 3);
INSERT INTO `Item` VALUES(7, 'Why Did the Soviet Union Collapse?: Understanding Historical Change [Paperback]', 7500, 'Books', 'The reversion of the Soviet Union to Russia has generated a cottage industry of assessments. Strayer (SUNY at Brockport) has produced a nicely written college text on the subject that would be useful to both political science and history students. Narrower in focus than Michael Kort''s recent The Soviet Colossus (M.E. Sharpe, 1996. 4th ed.) or Paul Dukes''s A History of Russia (Duke Univ., 1998. 3d. ed.), and complementary to Fred Coleman''s The Decline and Fall of the Soviet Empire (LJ 5/1/96), Strayer''s study not only incorporates basic historical facts but also muses on how historians do their work. Two-thirds of his book deals with the period after Mikhail Gorbachev came to power in the mid-1980s, and Strayer thoroughly examines what Gorbachev tried to accomplish and why he failed. Those with a general curiosity about the denouement of the late, great Soviet Union will benefit from Strayer''s intelligent survey. For most collections.?Edward Goedeken, Iowa State Univ. Lib., Ames Copyright 1998 Reed Business Information, Inc. ', 3);
INSERT INTO `Item` VALUES(8, 'Bad Piggies Premium HD (Kindle Tablet Edition)', 6000, 'Games', 'From the creators of Angry Birds: an all new game from the PIGS'' point of view! Create the ultimate flying/crawling/rolling/spinning/crashing device and pilot the pigs safely to the eggs! The Bad Piggies are after the eggs again -- but as usual, nothing is going according to plan! Can you create the ultimate flying machine and steer them safely to their destination? Those tricky pigs have a few objects they can use, but they need your help to turn these into the perfect transportation! With more than 60 levels, and free updates coming up, you have hours and hours of pig-crashing, exploding, and flying fun! Get three stars on every level to unlock 30 more puzzles! HINT: Sometimes you need to play the level several times to achieve all the objectives -- try building a new device or steering in a different way to earn all the stars! Rs. 6000\r\n', 2);
INSERT INTO `Item` VALUES(9, 'Kindle Fire 7" LCD Display, Wi-Fi, 8GB', 7500, 'Reader', 'Perfect portability - thin, light, and durable\r\nOver 22 million movies, TV shows, songs, magazines, books, audiobooks, and popular apps and games such as Facebook, Netflix, Twitter, HBO GO, Pandora, and Angry Birds Space\r\nUltra-fast web browsing over built-in Wi-Fi\r\nIntegrated support for Facebook, Twitter, Gmail, Hotmail, Yahoo! and more, as well as Exchange calendar, contacts, and email\r\nFree unlimited cloud storage for all your Amazon content', 4);
