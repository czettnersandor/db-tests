-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2018 at 03:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disease_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('Admin', 'clinton');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `Code` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Treatment` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`Code`, `Name`, `Description`, `Treatment`) VALUES
('CHPF/1139', 'MUMPS-2', 'SYMPTOMSâ€”Swelling of one or both salivary glands, fever (up to 104o F.), chills, headache, sore\r\nthroat, and pain when swallowing or chewing. Swelling often occurs in one gland first, and then begins\r\nin the other as swelling in the first subsides. But it may occur on only one side. ', 'GENERALâ€”Cold Mitten Friction or Cold Towel Rub 24 times a day. Neutral Bath for one hour, daily;\r\ncopious water drinking.\r\nTO COMBAT LOCAL INFLAMMATIONâ€”Hot Blanket Pack followed by Heating or Sweating Wet\r\nSheet Pack, continued 1-2 hours. Repeat the application twice a day. Fomentation over the affected parts\r\nevery 2 hours for 15 minutes, followed by Heating Compress at 600F., to be changed every 10 minutes\r\nor as soon as warm; Ice Bag over swollen glands until active inflammation is subdued. Remove ice\r\nevery half hour and apply Fomentation for 5 minutes.\r\nHEADACHEâ€”Cool Compress.\r\nNOSE BLEEDâ€”Ice to back of neck; Hot Compress over face; ice to hands; elevate hands to vertical\r\nposition, if necessary; Hot Footbath or Hot Leg Pack; very Hot Nasal Douche.\r\nDIARRHEAâ€”Enema at 950 F. after each bowel movement. Abdominal Bandage at 600 F., renewed\r\nevery 15-30 minutes. If pain is present, Fomentation to abdomen for 15 minutes or until it is relieved,\r\nevery 2 hours; large Hot Enema to empty colon if due to fecal accumulation.\r\nVOMITINGâ€”Ice over stomach or spine opposite the stomach or Hot and Cold Compress over\r\nstomach; ice pills; sipping very hot water.\r\nEARACHEâ€”Ice Bag to neck of the same side; Fomentation over ear; Hot Ear Douche, if necessary.\r\nProtect the ear with warm cotton, to prevent chilling by evaporation after treatment.\r\nCONVULSIONSâ€”Hot Blanket Pack or Hot Immersion at 1050-1080 F., with cold to the head (Cold\r\nCompress, Ice Bag, Ice Cap, etc.).\r\nINFLAMMATION OF THE BREASTâ€”Fomentation over the breast for 15 minutes every 3 hours.\r\nDuring interval between, apply a Heating Compress at 600 F., that is renewed every 15-30 minutes. Hot\r\nPack to arm of the same side. Hot Hip and Leg Pack for derivative effect if pain is severe.\r\nINFLAMMATION OF TESTICLEâ€”Ice Compress covering entire genitals and inner surfaces of\r\nthighs with simultaneous Hot Hip and Leg Pack for 30 minutes. Repeat every 4 hours. During interval\r\nbetween, apply Heating Compress at 600 F. in place of the Ice Compress, renewed every 15 minutes. '),
('CHPF/1568', 'MMUMPS-1', 'SYMPTOMSâ€”Swelling of one or both salivary glands, fever (up to 104o F.), chills, headache, sore\r\nthroat, and pain when swallowing or chewing. Swelling often occurs in one gland first, and then begins\r\nin the other as swelling in the first subsides. But it may occur on only one side.\r\nCAUSESâ€”Mumps is an infection of the salivary (parotid) glands, located in front of, and below, each\r\near. It rarely occurs before 3 years of age or after 40. Either direct contact or droplets spread the disease.\r\nMumps is not as contagious as chickenpox or measles. But a person with the disease is still contagious \r\nfrom 48 hours, before symptoms develop, to 6 days afterward. Incubation is 14 to 21 days.\r\nOne bout and lifetime immunity generally follows.\r\nIf it is acquired after puberty, the ovaries or testes may become involved and sterility may result. Other\r\ncomplications can also occur, which affect the heart, kidneys, and brain. \r\nIf no complications occur, complete recovery generally occurs within about 10 days.\r\nSwollen salivary glands can be caused by several other diseases: A partial list includes cirrhosis of the\r\nliver, leukemia, lupus, and tuberculosis (all of which are dealt with in this book). It also includes strep\r\nthroat and the taking of certain drugs. If it is an isolated case of "mumps," it might actually be something\r\nelse.', 'TREATMENTâ€”\r\nâ€¢ Keep the diet simple, fat-free, and sugar-free. Avoid foods that require chewing or might\r\nbe irritating. Eat mostly raw fruits and vegetables that are juiced or softened.\r\nâ€¢ Drink plenty of pure water and fresh juices. This will keep the body working well, help\r\nflush toxins, and render it less likely that complications may occur.\r\nâ€¢ Do not eat junk food of any type. Avoid caffeine, tobacco, alcohol, soft drinks, etc.\r\nAvoid acidic foods, such as pickles or citrus fruits.\r\nâ€¢ To relieve pain, cold or warm compresses (whichever feels best) may be placed on the\r\nneck and over the glands. But avoid hot or icy cold applications.\r\nâ€¢ If nausea and/or pain on swallowing becomes so severe that the person becomes unable\r\nto eat, intravenous administration of dextrose and fluids may be needed.\r\nâ€¢ Do not give aspirin to a child or youth with a fever; it may result in death!'),
('CHPF/1730', 'TYPHOID', 'SYMPTOMSâ€”Onset comes 1-4 weeks after the germs enter the body. First a tired feeling and general\r\nweakness, then possibly a headache and nosebleed. The fever rises higher each day, until by the end of\r\nthe first week it be 104o F. The evening temperature is distinctly higher than in the morning. Appetite is\r\npoor, the tongue is coated, and the teeth and lips have a brownish coat. There is either diarrhea or\r\nconstipation, and stools are offensive. The abdomen is distended.\r\nCAUSESâ€”Typhoid fever is an acute infectious disease caused by the typhoid bacillus.\r\nGerms are taken into the body through food or drink that has been directly or indirectly contaminated by\r\nbowel or kidney discharges from a typhoid fever patient.\r\nIf the body was kept clean and only pure food and water was consumed, there would by no typhoid. ', 'TREATMENTâ€”\r\nâ€¢ Call a physician.\r\nâ€¢ Put him to bed and give him air and moderate warmth, and lots of water to drink. \r\nâ€¢ Place him on a diet of fruit juices and vegetable broths. All patients with typhoid fever\r\nmust have raw garlic to eat.\r\nâ€¢ Give at least one hot bath every day. Have him remain in the tub as long as possible (30\r\nminutes or longer). Put cold cloths on the head and throat if weak or faint. Finish with a\r\ncold towel rub or spray.\r\nâ€¢ Give a daily high enema.\r\nâ€¢ Red clover tea and goldenseal tea are both good. Add 1 tsp. red clover blossoms to a cup\r\nof boiling water. Steep, and drink 5-12 cups a day. '),
('CHPF/1868', 'MALARIA', 'SYMPTOMSâ€”Chills occur for several hours, followed by drenching sweats every 1-3 days.\r\nCAUSESâ€”There are four types of parasites which are introduced into the bloodstream by the anopheles\r\nmosquito. If the disease becomes chronic (recurrent), it results in general debility, anemia, and an\r\nenlarged spleen.\r\nSevere cases can be very debilitating. An especially deadly form is called blackwater fever. The skin\r\ntakes on a yellow tint and the urine becomes progressively darker in color. Few people survive three\r\nattacks of blackwater fever.\r\nThis disease generally occurs only in tropical climates, but it can and does occur in the United States as\r\nwell.', 'TREATMENTâ€”\r\nâ€¢ Call a physician.\r\nâ€¢ There are two primary ways to treat malaria:\r\nâ€¢ One way is by taking quinine. This is an extract of the bark of the cinchona tree. Quinine \r\nwill generally eliminate the malaria, but a mild to severe hearing loss may also result.\r\nâ€¢ The other way is to give hot and cold water treatments to the person. This takes work.\r\nThe result is equally good, but no hearing loss results.\r\nâ€¢ During the fever, give cold applications (cool wet sheet packs, sponge him off with cool\r\nwater, etc.). During the chills, give him hot applications (hot packs).\r\nâ€¢ Give goldenseal tea. ');

-- --------------------------------------------------------

--
-- Table structure for table `email_server`
--

CREATE TABLE `email_server` (
  `Emails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_server`
--

INSERT INTO `email_server` (`Emails`) VALUES
('clinton@cohesiondigital.co.uk'),
('sandor@cohesiondigital.co.uk'),
('alistair@cohesiondigital.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Country`, `Disease`) VALUES
('zz', 'zz@cc.cc', 'canada', 'pressure'),
('aa', 'aa@xx.cc', 'australia', 'Ulcers'),
('s', 's@a.x', 'australia', 'Ulcers'),
('a', 'zz@cc.cc', 'australia', 'Ulcers'),
('a', 'aa@xx.cc', 'australia', 'Ulcers'),
('clinton were', 'clinton@cohesiondigital.co.uk', 'Kenya', 'MALARIA'),
('clinton were', 'clinton@cohesiondigital.co.uk', 'Kenya', 'TYPHOID'),
('clinton were', 'clinton@cohesiondigital.co.uk', 'Kenya', 'TYPHOID'),
('clinton were', 'clinton@cohesiondigital.co.uk', 'Kenya', 'MUMPS-2'),
('clinton were', 'clinton@cohesiondigital.co.uk', 'Kenya', 'MUMPS-2'),
('clinton were', 'clinton@cohesiondigital.co.uk', 'Kenya', 'TYPHOID'),
('clinton were', 'clinton@cohesiondigital.co.uk', 'Kenya', 'TYPHOID'),
('SANDOR', 'sandor@cohesiondigital.co.uk', 'UK', 'MALARIA'),
('SANDOR', 'sandor@cohesiondigital.co.uk', 'UK', 'TYPHOID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`Code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
