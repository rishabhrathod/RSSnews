-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2016 at 05:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rssfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `news1`
--

CREATE TABLE `news1` (
  `headlines` varchar(5000) NOT NULL,
  `news` varchar(5000) NOT NULL,
  `file` varchar(5000) NOT NULL,
  `category` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news1`
--

INSERT INTO `news1` (`headlines`, `news`, `file`, `category`) VALUES
('Is iphone 7 a place-holder? ', 'Its been a week now, that iphone-7 has arrived in india \r\nshould you buy this?\r\nummm... wait for our complete review on iphone-7 !', 'iphone7.jpg', 'Technology'),
('Big move by samsung,scraps...note-7 forever', 'After facing a tough time from battery bursts,replacement units! and critisism problem remains unsolved,hence samsung officially recalled all its flagship phab note-7,\r\nand scraped the Note-7 forever.', 'note7.jpg', 'Technology'),
('Rajnath Singh assures safe screening of "Ae Dil Hai Mushkil".', 'Home minister breaks silence on release of "ae dil hai mushkil", its less than a week for movie to go on screens and MNS has given threatning statements to all multiplex owners. lets see,what happens next!', 'raj.jpg', ''),
('Rajnath Singh assures safe screening of "Ae Dil Hai Mushkil".', 'Home minister breaks silence on release of "ae dil hai mushkil", its less than a week for movie to go on screens and MNS has given threatning statements to all multiplex owners. lets see,what happens next!', 'raj.jpg', 'Nation'),
('INDIA adds more power to its defence!', 'Manohar Parrikar clears purchase of 145 M777 howitzers worth Rs 4500 crore from US.\r\n\r\n', 'ind.jpg', 'Nation'),
('4th week for MS dhoni-the untold story,on screens!', 'No wonders captain cool is the best INDIA can afford on field, but he proved himself on screens too,\r\nmovie makes its path into 100 crore club! ', 'ms.jpg', 'Entertainment'),
('Tough start for Harshvardhan Kapoor!', 'After so much efforts shown in VFX of "Mirzya" movie was not able to create magic on screens!\r\nit will be a tough time for cameo actors, to stay in the race of glamorous industry.', 'mir.jpg', 'Entertainment'),
('We kept losing wickets against run of play, says MS Dhoni.', 'The Black Caps levelled the five-match series 1-1 and in the process also won their first game of the tour. India were all-out for 236 in 49.3 overs while chasing a target of 243. It is also after 11 long years that India have lost an ODI at the Feroz Shah Kotla ground here.', 'indvsnz.jpg', 'Sports'),
('Asian Champions Trophy 2016: India trounce Japan as Rupinder Pal Singh slams six goals', 'Penalty corner specialist Rupinder Pal Singh slammed six goals as India launched their campaign in the fourth Asian Champions Trophy with a rousing 10-2 victory over Japan in the Kuantan Hockey Stadium on Thursday.\r\nRepeatedly leaving the Japanese defenders stunned with his rasping drag-flicks, Rupinder converted his first four penalty corner shots as fancied India steam-rolled over the hapless Japanese defence.', 'hockey.jpg', 'Sports'),
('SL 2016: Chennaiyin FC break Guwahati jinx; beat NorthEast United courtesy a Davide Succi strike', 'Defending champions Chennaiyin FC broke their Guwahati jinks with a hard-fought 1-0 victory over NorthEast United FC in an absorbing Hero Indian Super League clash at Indira Gandhi Athletic Stadium, in Guwahati on Thursday.\r\nChennaiyin FC were the only team to neither score a goal in Guwahati nor secure a point at Indira Gandhi Athletic Stadium during the previous seasons of the ISL.', 'fc-goa-m1.jpg', 'Sports'),
('Talks of Russia ditching India for China is a case of over-exaggeration', 'One can not ignore the fact that the inability of the Brics leaders in naming Pakistan as a source of global terror in the â€œGoa declarationâ€ is being perceived by many in India as not only a failure of Modi"s foreign policy but also as a strong signal of Russia moving away from India, and towards China.', 'Brics_1.jpg', 'International'),
('Ta Ta Trump: Donalds final debate performance may well have been his swan song', 'All across the US, it is getting clearer by the day that Trumps late night appearance in the final presidential debate may well have been his swan song. Nobody played The End in the background, but Jim Morrison`s ghost seemed to be singing in everybody`s ears.\r\nThe question, as polls show Hillary Clinton surging ahead by 5-10 points, now is whether Trump will go down. The suspense now is this: How much and who he will take down with him?', 'Trump_clinton_8252.jpg', 'International'),
('Asaduddin Owaisi attacks PM Modi for his "Jai Shri Ram" greeting on Dussehra', 'Hyderabad: AIMIM president Asaduddin Owaisi on Thursday slammed Prime Minister Narendra Modi for raising "religious" slogans, as he alleged that the BJP-led government`s real intention was to "convert India into a Hindu rashtra".\r\n', 'Asaduddin-Owaisi_AFP.jpg', 'Politics'),
('UP polls: Latest Samajwadi Party developments have compounded political confusion in state.', 'The CM shall be launching `his` party`s election campaign separately two days earlier on 3 November.  He would go his own way, independent of the parent party, on what is being described as "Vikas Rath Yatra". And remember, the father and the son haven`t split up officially despite the nasty tug of war that has been going on within the family for over a month.', 'ok.jpg', 'Politics'),
('Reliance Industries July-September quarter net profit up 43.1% on-year', 'Reliance Industries (RIL) on Thursday reported a consolidated net profit of Rs 7,206 crore for the quarter ended September 30, which was higher by 43.1 percent over the corresponding quarter year ago. The company reported a net profit of Rs 5,035 crore in second quarter of previous year after excluding exceptional item of Rs 4,310 crore.', 'mukesh.jpg', 'Business'),
('Wipro to acquire cloud services company Appirio for Rs 3,340 crore', 'Country`s third largest IT firm Wipro today said it will acquire cloud services company Appirio for USD 500 million (around Rs 3,340 crore) in a cash transaction.\r\n"Once completed, Wipro`s acquisition of Appirio will create one of the world`s largest cloud transformation practices, a game changer in today`s as-a-service and digital economy," Wipro said in a statement.', 'wipro.jpg', 'Business');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
