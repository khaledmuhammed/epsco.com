-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 01:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epsco_en`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@abmegypt.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `cat` varchar(256) NOT NULL,
  `sort` int(10) NOT NULL,
  `list` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat`, `sort`, `list`) VALUES
(1, 'Support Services for exploration', 1, 0),
(2, 'Technical and Nontechnical services', 2, 0),
(3, 'Catering services\r\n', 6, 0),
(4, 'Vehicles rent and Labor Transportation\r\n', 4, 0),
(5, 'Environment protection & pest control\r\n', 5, 0),
(6, 'Traveling services\r\n', 4, 0),
(7, 'Potable/Drilling water transfer\r\n', 2, 0),
(8, 'Crude oil transfer\r\n', 3, 0),
(9, 'General Trading and Supplies\r\n', 4, 0),
(10, 'Engineering works and architectural finishes\r\n', 5, 0),
(14, 'first cat', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `domain` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `lang`, `domain`) VALUES
(1, 'en', 'epsco.com');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `data`) VALUES
(1, '[\"Open Magazines\",\"Open Magazines\",\"file/final-2.pdf\"]'),
(2, '[\"&lt;p&gt;Providing (technical and non-technical ) services in the most qualified and professional level to petroleum companies in the petroleum sector regarding health, safety&lt;/p&gt;\\r\\n\",\"https://www.youtube.com/embed/k9Vf1dp8nrI\"]'),
(3, '[\"About Us\",\"&lt;p&gt;Transportations and car renting service, providing Traveling services and facilities, catering service, buffet service, providing water activity ( barakis and fresh water ), providing crude oil transporting,&amp;nbsp;providing various supplies to all sector companies and recently we add:&amp;nbsp;&lt;em&gt;marine transportation and wells purification (work over)&lt;/em&gt;&lt;/p&gt;\\r\\n\",\"img/3.jpg\",\"Our mission\",\"&lt;p&gt;Providing (technical and non-technical ) services in the most qualified and professional level to petroleum companies in the petroleum sector regarding health, safety, quality standards in providing the services, as well as reaching effectiveness and proficiency in preventing accidents and injuries&lt;/p&gt;\\r\\n\",\"img/4.jpg\",\"Future vision\",\"&lt;p&gt;EPSCO is seeking to provide the best service in the lowest cost possible through trained labors and increasing the value adds through activating the activities that is not depending on labors and the recent activities (marine - transporting - heavy equipment&amp;rsquo;s maintenance) and some supporting activities to drilling operations like producing maintenance&lt;/p&gt;\\r\\n\",\"img/2.jpg\",\"Our services\",\"&lt;p&gt;Ensuring the highest standard of quality and safety complying with all regulations and international standards and continue usually developing our highly professional workforce.&amp;nbsp;&lt;br /&gt;\\r\\n- providing technical and non-technical services.&amp;nbsp;&lt;br /&gt;\\r\\n- logistic services: drilling and exploration assisting works and services.&lt;/p&gt;\\r\\n\"]'),
(4, '[\"18000\",\"Employee\",\"2022000000\",\"Total Revenue\",\"28\",\"Companies\"]'),
(5, '[\"Mr. tarek ElBadry\",\"Administation assistant\",\"img/Adm.jpg\",\"&lt;p&gt;&lt;strong&gt;Date of birth:&lt;/strong&gt;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;November - 1963&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Educational Qualification:&lt;/strong&gt;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;Bsc. of Business Administration&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Job history:&lt;/strong&gt;&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2014 : Chairman assistant for administration(&lt;strong&gt;EPSCO&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2012 : Member of the board of directors (&lt;strong&gt;sinai co.&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2011 : Administration General Manager (&lt;strong&gt;PETROJET&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 1983 : Personal affairs accountant (&lt;strong&gt;PETROJET&lt;/strong&gt;).&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Certifications :&lt;/strong&gt;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;Strategic change and risk management course&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;Business Administration Course&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;effective board management course&amp;nbsp;&lt;/p&gt;\\r\\n\",\"Mr. Mohamed Mostafa\",\"Chairman &amp; EO\",\"img/CEO.jpg\",\"&lt;p&gt;&lt;strong&gt;Date of birth:&lt;/strong&gt;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;March - 1960&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Educational Qualification:&lt;/strong&gt;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;Bsc. of commerce, Ain-Shams University 1983&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Job history:&lt;/strong&gt;&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2014 : Chairman of the board of directors and executive officer (&lt;strong&gt;EPSCO&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2013 : Vice president of Egyptian natural gas holding company (&lt;strong&gt;EGAS&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2012 : Member of the board of directors (&lt;strong&gt;EPSCO&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2010 till 2013 : Chairman assistant for administration(&lt;strong&gt;EGPC&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2008 : Administration General Manager (&lt;strong&gt;PETROBEL&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 1985 : Personal affairs accountant (&lt;strong&gt;PETROBEL&lt;/strong&gt;).&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Certifications :&lt;/strong&gt;&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;English Language 1981 from CAMBRIDGE University&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;American University Diploma in Accounting&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;HR Management Diploma for one year at American University&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;Cambridge First , Proficiency 1981/1982&lt;/p&gt;\\r\\n\",\"Mr. Mohamed Yossef\",\"Financial assistant\",\"img/Fin.jpg\",\"&lt;p&gt;&lt;strong&gt;Date of birth:&lt;/strong&gt;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Educational Qualification:&lt;/strong&gt;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;Bsc. of commerce&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Job history:&lt;/strong&gt;&amp;nbsp;&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2014 : Chairman assistant for finance(&lt;strong&gt;EPSCO&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2012 : Member of the board of directors(&lt;strong&gt;EPSCO&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 2011 : Financial General Manager (&lt;strong&gt;EPSCO&lt;/strong&gt;).&lt;br /&gt;\\r\\n&amp;emsp;&amp;emsp;- 1983 : accountant (&lt;strong&gt;PETROBEL&lt;/strong&gt;).&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Certifications :&lt;/strong&gt;&amp;nbsp;&lt;/p&gt;\\r\\n\",\"Directors\",\"\"]'),
(6, '[\"img/sacsdvxfv.jpg\",\"img/sdffdb.jpg\",\"img/ukfgjv.jpg\",\"img/ztdbdzfb.jpg\",\"img/fnfvng.jpg\",\"img/asfgdfb.jpg\"]'),
(7, '[\"Contact us\",\"02-23814030\",\"Monday-Friday (9am-5pm)\",\"info@epsco.com.eg\",\"http://epsco.com.eg\",\"6th zone - Nasr city - Cairo - Egypt\"]'),
(8, '[\"EPSCO Egyptian Petroleum Services Company\",\"img/slid1.jpg\",\"&lt;p&gt;Was founded on 1997 and since then providing wide range of supporting services to all petroleum companies.&lt;/p&gt;\\r\\n\",\"EPSCO Egyptian Petroleum Services Company\",\"img/slid1.jpg\",\"&lt;p&gt;Was founded on 1997 and since then providing wide range of supporting services to all petroleum companies.&lt;/p&gt;\\r\\n\",\"EPSCO Egyptian Petroleum Services Company\",\"img/slid4.jpg\",\"&lt;p&gt;Was founded on 1997 and since then providing wide range of supporting services to all petroleum companies.&lt;/p&gt;\\r\\n\",\"Album\",\"gallercat.php\",\"news\",\"#blog\"]'),
(9, '[\"&lt;p&gt;Select companys authorize capital the amount of fifty million Egyptian pounds, and select the issued capital in the amount of ten million pound distributed over five thousand shares, the value of each share is twenty pounds and all of the closed cache shares on the petroleum sector and its employees.&lt;/p&gt;\\r\\n\",\"img/holders.jpg\",\"Shareholders\",\"\"]'),
(10, '[\"&lt;p&gt;Reference to Article no (3) of the internal policy for Egyptian petroleum services Company (EPSCO), General Authority for investment (GAFI) has ratified an amendment to the aforementioned Article in accordance to the minutes of meeting for the unusual General assembly meeting dated 31/03/2016 and has been ratified in accordance to the minutes ratification no (r/1748) for year 2016 dated 17/08/2016 from investment registration office.&amp;nbsp;&lt;br /&gt;\\r\\nEgyptian petroleum Company (EPSCO) is a shared Egyptian company (SAE) providing support services to all petroleum sector companies with commercial registration no (310351) dated 17/12/1997.&amp;nbsp;&lt;br /&gt;\\r\\nIn accordance with company vision to &amp;ndash;expand the scope of business and to increase the market share, this matter has been demonstrated to the Unusual Assembly Meeting dated 31/03/2016 and they unanimity consensus approved the proposed changes to article no. (3) Of the internal policy to be as follows:-&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;&lt;strong&gt;Amended Article (3) - Company Purpose is to:-&lt;/strong&gt;&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;1. Provide all support services for exploration, drilling, Gas transmission and distribution.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;2. Provide all support services for oil companies, oil refining and gas processing facilities and providing base oil (SN150) and (SN500) to all Countries through EGPC as well as marketing and maintenance works.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;3. Provide Oil transport services and its equipment.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;4. Providing qualified labors for all oil &amp;amp; gas companies with necessary instruments, equipment and training centers to qualify labors.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;5. Providing cleaning services necessary for all petroleum sector companies and its fields and facilities.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;6. Providing labor transportation for all petroleum sector companies &amp;amp; gas companies and its fields.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;7. Operate and manage petrol stations, car services and petroleum products distribution.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;8. Providing instruments, equipment, and technical &amp;amp; logistics services for all petroleum companies and its facilities and fields and gas companies.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;9. Import all whatsoever necessary for company purposes.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;10. Company has the authorization to provide (LTO) lease to own activities in accordance to low No (95) for year 1995.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;11. Company is authorized to operate and manage Heliport and landing areas and any other support activities for oil and gas fields and other activities.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;12. Providing catering services for all petroleum sector companies and their employees in their different locations and fields.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;13. Providing potable and saline water transport services for all oil and gas fields.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;14. Providing all travel services.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;15. Providing vehicles services and maintenance.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;16. Providing all supporting services for all petroleum sector companies for its facilities and fields.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;17. Providing supplementary and maintenance works for buildings.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;18. Trade and distribution for building materials.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;19. Providing environment protection and pest control services.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;20. Providing household goods trading.&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;(Subject to the provisions of law and its valid executive regulations provided the issuance of the necessary licenses to practice these activities).&amp;nbsp;&lt;br /&gt;\\r\\nAlso, Company is permitted to have interest or to share howsoever with any other organizations, companies and others that performing similar activities or providing support services to achieve its purpose in Egypt or abroad.&amp;nbsp;&lt;br /&gt;\\r\\nCompany is also permitted to merge or acquire with any of the aforementioned organizations in accordance with the law and its executive regulations).&lt;/p&gt;\\r\\n\",\"Amendment Contract\",\"EPSCO - Egyptian Petroleum Services Company Amendment Contract.\"]'),
(11, '[\"&lt;p&gt;&lt;strong&gt;APPLICABILITY OF THE CODE OF CONDUCT&lt;/strong&gt;&lt;br /&gt;\\r\\nA. All those acting for or on behalf of EPSCO are required to consistently comply with this Code when their work/actions are on behalf of, or related to EPSCO, including:&amp;nbsp;&lt;br /&gt;\\r\\n1. All directors, officers, employees and workers of EPSCO.&amp;nbsp;&lt;br /&gt;\\r\\n2. All Business Partners, Consultants and &amp;quot;Agents&amp;quot; of EPSCO who are working on our behalf or in our name, and their respective owners, directors,&amp;nbsp;&lt;br /&gt;\\r\\nemployees and &amp;quot;Agents&amp;quot; with respect to the work performed for, or services and equipment provided to EPSCO. B. Independent subcontractors, suppliers or consultants of EPSCO will be made aware of the Code by including a provision in all contracts and agreements indicating so.&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;EMPLOYEES At EPSCO&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\\r\\na. We seek to build a workplace that is safe, professional, and supportive of teamwork and trust. Everyone who works for EPSCO contributes to our success and to creating a great company. Working together, drawing from our diverse talents and perspectives, we will inspire new and creative opportunities.&amp;nbsp;&lt;br /&gt;\\r\\nb. We are committed to creating a work environment of mutual trust-in which diversity and inclusion are valued- and where everyone who works for EPSCO is treated with dignity and respect.&amp;nbsp;&lt;br /&gt;\\r\\nc. Employees will be recruited, selected, developed and advanced on merit, irrespective of color, religion, gender, age, marital status or disability.&amp;nbsp;&lt;br /&gt;\\r\\nd. Employees will be entitled to feel included and valued as part of a merit based organization of people from diverse backgrounds.&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Fair treatment and equal employment opportunity&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\\r\\nWe respect the rights and dignity of all employees. EPSCO aspires to create a work environment of mutual trust and respect in which diversity and inclusion are value, and where everyone who works for EPSCO:&amp;nbsp;&lt;br /&gt;\\r\\n1. Not discriminated according to race, color, religion, age, gender, marital status, disability, ethnic origin or nationality in hiring and employment practices such as application for employment, evaluation, promotion, wages, access to training, job assignments, discipline, compensation and termination. Only qualifications, merit, performance and business considerations shall govern these practices.&amp;nbsp;&lt;br /&gt;\\r\\n2. Knows what is expected of him in his job.&amp;nbsp;&lt;br /&gt;\\r\\n3. Is helped to develop his capabilities.&amp;nbsp;&lt;br /&gt;\\r\\n4. Is recognized and competitively rewarded for his performance based on merit.&amp;nbsp;&lt;br /&gt;\\r\\n5. Is listened to and is involved in improving team performance.&amp;nbsp;&lt;br /&gt;\\r\\n6. Is fairly treated, with respect and dignity, without discrimination.&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Harassment&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\\r\\nInsulting, harassing or offensive conduct is unacceptable, whether verbal, physical or visual.&amp;nbsp;&lt;br /&gt;\\r\\nExamples include derogatory comments based on racial or ethnic characteristics, sexual harassment, sexual abuse, corporate punishment, mental coercion, physical coercion, religious beliefs or deprecating remarks concerning a persons disability. Threats or acts of violence or physical intimidation are prohibited, as is retaliatory treatment in response to any complaint of harassment made in good faith.&amp;nbsp;&lt;br /&gt;\\r\\n&lt;br /&gt;\\r\\n&lt;strong&gt;Child and forced labor&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\\r\\nAll EPSCO employees are expected to be aware of, and to abide by the following commitments in their job:&amp;nbsp;&lt;br /&gt;\\r\\n1. It is strictly prohibited to hire child or forced labor.&amp;nbsp;&lt;br /&gt;\\r\\n2. be alert to any evidence of child labor or forced labor abuses in operations linked to EPSCO businesses - and report them.&amp;nbsp;&lt;br /&gt;\\r\\n3. Closely monitoring commitment of subcontractors, suppliers, consultants, and anyone working for or on behalf of EPSCO toward refraining from child labor.&lt;/p&gt;\\r\\n\",\"Business Conduct\",\"EPSCO - Egyptian Petroleum Services Company Business Conduct.\"]'),
(12, '[\"img/iso.jpg\",\"&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n\\r\\n&lt;p&gt;The Egyptian Company for Petroleum Services (IPSCO) received four certificates of ISO one payment during October 2018 in total quality, occupational safety and health, food safety, safety and environmental protection. The ceremony, which was held under the auspices of Engineer Tarek Mulla, Minister of Petroleum and Mineral Resources, Eng. Abed Ezzalragal, Chief Executive Officer of the Petroleum Authority, Eng. Mohamed Azim, President of South Valley Petroleum Holding and Eng. Nabil Salah,&amp;nbsp;Vice President of the Authority for Production, Mr. Hamdi Abdulaziz, Media Spokesperson of the Ministry of Petroleum, Dr. Hisham Lotfi, Undersecretary of the Ministry of Legal Affairs, Amir Wens, Undersecretary of the Ministry of Finance, Major General Amr Al Sherbini, Director of Security of the Petroleum Authority, Chairman of Sina Petroleum Services Company, former accountant Ashraf Abdullah, Deputy Chairman of the Authority for Financial Affairs, Advisor Yahia Al-Roubi, Deputy Chairman of the Authority for Legal and Legal Affairs Ayman Hijazi, Deputy Legal Officer, Egyas, Tour Osama Farouk, Vice President of the Commission for Exploration,&amp;nbsp;Maji Abbas, Undersecretary of the Ministry of Security, Major General Osama al-Gindi, Acting Secretary General of the Ministry of Petroleum, and attended by the heads of companies, Dr. Alaa Al-Batal, Chairman of Badr Company Chairman of the Board of Directors of the Medical Center, Dr. Jamal Al-Qurashiish, President of Assiut Oil Refining Company, Major General Akram Badawi, President of Sinai Petroleum Services Company, Eng. Khaled Mawafi, Chairman of Khaleda &amp;amp; Company DS Jalal Suleiman, president Petrospot&amp;nbsp;Accountant Niazi Al-Najjar, Assistant President of PetroSport for Financial Affairs, Eng. Tarek Yahya, President of Paris Oasis, Dr. Yasser Fakhreddine, Managing Director of Egyptco, Dr. Yasser Serry, Assistant to the President of Petrobal for Administrative Affairs, Counselor Majdi Al-Ajati, former Minister of Majlis Affairs, Major Majdi Chenishan, Board of Directors and Eng. Mohamed Taha Al-Salanti, Operations Manager, Gapukma Company The ceremony was attended by Mr. Mohamed Jubran, President of the General Union of Petroleum Workers&amp;nbsp;Eng. Mohamed Ali, Director General of Engineering Affairs and supervisor of occupational safety and health, said that the ISO certificates obtained by IPSCO are the first since the establishment of the company and Dr. Dalia Abdel Azim, Director General of Quality Control said that the certificates are ISO 18000/9001/14001/22000. Professional, Food Safety, Safety and Environmental Protection, and Ahmed Ali, President of JAPCO&lt;/p&gt;\\r\\n\",\"ISO-Certificates\",\"The Egyptian Company for Petroleum Services (EPSCO) obtained four ISO certificates for one payment during October 2018\"]'),
(13, '[\"img/log.png\",\"Egyptian Petroleum Services Company\",\"https://www.facebook.com/EpscoOfficalPage\",\"\",\"http://www.youtube.com/channel/UCds1DJxnJukt5wgCoEyyhRQ\",\"\",\"\"]'),
(14, '[\"CONTACT US\",\"We\'re excited to hear from you! \",\" 02-23814031 02-23814032\",\"info@epsco.com.eg\",\"9am-5pm\"]'),
(15, '[\"Our Services\",\" Ensuring the highest standard of quality and safety complying with all regulations and international standards and continue usually developing our highly professional workforce.\"]'),
(16, '[\"Our Services\",\"Ensuring the highest standard of quality and safety complying with all regulations \"]'),
(17, '[\"News\",\"Publication of the latest news and articles\"]'),
(18, '[\"Album\",\"\"]'),
(19, '[\"img/logo.png\",\"Home \",\"About US\",\"Our company\",\"Services\",\"Share Holders\",\"Amendment Contract\",\"Business Conducut\",\"Operations areas\",\"Directors\",\"News\",\"ISO-Certificates\",\"Album\",\"Album\",\"عربي\"]');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_cat_id`, `title`, `image`, `sort`) VALUES
(2, 1, 'image2', 'img/2_ser.jpg', 3),
(3, 1, 'image2', 'img/3_ser.jpg', 3),
(4, 1, 'image3', 'img/4_ser.jpg', 4),
(5, 1, 'Services Pricing !jkhgk', 'img/5_ser.jpg', 3),
(6, 1, 'Services Pricing !jkhgk', 'img/8_ser.jpg', 3),
(7, 1, 'Services Pricing ', 'img/7_ser.jpg', 3),
(8, 2, 'Services ', 'img/6_ser.jpg', 11),
(9, 3, 'test-1', 'img/2.jpg', 0),
(10, 5, 'image-2', 'img/3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallerycat`
--

CREATE TABLE `gallerycat` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallerycat`
--

INSERT INTO `gallerycat` (`id`, `title`, `image`, `description`, `sort`) VALUES
(1, 'image_cat1', 'img/1_ser.jpg', '<p>image category 1</p>', 1),
(2, 'sd', 'img/1_ser.jpg', 'dsd', 2),
(3, 'dsdsd', 'img/1.jpg', '<p>dasdfsafsf</p>\r\n', 0),
(4, 'dasdwqfqdq', 'img/2.jpg', '<p>dasdasfawdfas</p>\r\n', 0),
(5, 'firt - cat', 'img/3.jpg', '<p>test-1</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `cat` int(10) NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `short_desc` varchar(512) NOT NULL,
  `long_desc` longtext NOT NULL,
  `sort` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `cat`, `title`, `image`, `short_desc`, `long_desc`, `sort`) VALUES
(1, 1, 'Support Services', 'img/pexels-photo-24276.jpg', '<p>EPSCO provides petroleum services supporting the exploration, drilling, production and refining of petroleum</p>\r\n', '<p>EPSCO provides petroleum services supporting the exploration, drilling, production and refining of petroleum Repair head of wells and supply of head wells in accordance with European specifications and connect the pipes of head wells with high determination and other services and the delivery and transportation of gas, as well as related to marketing and maintenance</p>\r\n', 1),
(2, 2, 'Technical Services\r\n', 'img/2_ser.jpg', 'EPSCO provided the The service was provided by 15829 employees to 46 companies', '\r\nEPSCO provided the The service was provided by 15829 employees to 46 companies (2 / holding companies / 3 public sector companies / 29 joint-venture companies / 11 investment sector companies) with total revenues of LE 1.191 billion\r\nCompared to (1.026) billion pounds in 2015. A growth rate of 16% representing 83% of the total volume of business.Repair head of wells and supply of head wells in accordance with European specifications and connect the pipes of head wells with high determination and other services and the delivery and transportation of gas, as well as related to marketing and maintenance', 2),
(3, 3, 'Catering services\r\n', 'img/3_ser.jpg\r\n', 'EPSCO provided This service has been provided to 8 companies ', 'EPSCO provided This service has been provided to 8 companies (7 companies, common sector and public sector) with a total volume of 158 million pounds, compared to 148 million pounds in 2015.\r\nA growth rate of 7% representing 11% of the total volume of business.', 3),
(4, 4, 'Transportation', 'img/4_ser.jpg', 'EPSCO providedThe service was provided to 12 companies', 'EPSCO providedThe service was provided to 12 companies (7 companies, 2 public sectors, 2 joint ventures / 2 investment sectors / holding companies) with a total volume of LE 9 million.\r\n(8.8) million pounds in 2015, an increase rate of 2%', 4),
(5, 5, 'Environment protection', 'img/5_ser.jpg', 'EPSCO provided This service was provided to (6) companies', 'EPSCO provided This service was provided to (6) companies (holding company, a joint sector company / 4 investment sector) with a total volume of work amounted to (149) thousand pounds and this service is provided to individuals and third parties. Compared to (123) thousand pounds in 2015, an evolution rate of 21%. The company also uses pesticides safe and conform to international health standards at competitive prices.', 5),
(6, 6, 'Traveling services', 'img/1.jpg', '<p>EPSCO providedThe service was provided to 19 companies in the sector</p>\r\n', '<p>EPSCO providedThe service was provided to 19 companies in the sector (Kabadah company / public sector company / 10 joint sector companies 6 investment sector companies and foreign company). This service was provided to individuals and external parties with a total volume of works amounted to (7.8) million pounds. A growth rate of 5%.</p>\r\n', 6),
(7, 7, 'Potable/Drilling water transfer', 'img/7_ser.jpg', 'EPSCO provided The service was provided to (6) joint-sector companies with a total volume of LE 12.8 million.', 'EPSCO provided The service was provided to (6) joint-sector companies with a total volume of LE 12.8 million.\r\nCompared to (12) million pounds in 2015', 7),
(8, 8, 'Crude oil transfer\r\n', 'img/8_ser.jpg', 'EPSCO provided the service was provided to (7) companies of the joint sector with a total volume of work amounted to (25.4) million', 'EPSCO provided the service was provided to (7) companies of the joint sector with a total volume of work amounted to (25.4) million', 8),
(9, 9, 'General Trading', 'img/9_ser.jpg', 'EPSCO provided the services to (16 companies) (3 holding companies / 9 joint-stock companies / the Authority / 3 investment sector companies)', 'EPSCO provided the services to (16 companies) (3 holding companies / 9 joint-stock companies / the Authority / 3 investment sector companies) with a total volume of business reached (2.4) million pounds\r\nIn comparison to (1.5) million pounds in 2015, an increase rate of 60%', 9),
(10, 10, 'Engineering works', 'img/10_ser.jpg', 'EPSCO provided this service to 3 companies in the joint sector in addition to providing this service to other third parties and the total volume of business (2.3) million pounds ', 'EPSCO provided this service to 3 companies in the joint sector in addition to providing this service to other third parties and the total volume of business (2.3) million pounds . (1.2) million pounds in 2015, an increase of 92% In 2016,\r\n\r\n the company was registered with the General Union of Construction and Construction Contractors, which had the greatest effect on the opportunity to win. In many of the various tenders offered to companies in the petroleum sector, including (Petro shadh Company and PhPc Company \r\n\r\nAll works assigned to the company to be implemented either in the fields or the main centers are carried out at an advanced level of efficiency and professionalism of the company includes engineering and technical staff qualified to carry out all the work of the supplementary reforms in accordance with the engineering specifications by 100% completion.', 10),
(18, 1, 'first item', 'img/3.jpg', '<p>item - 1</p>\r\n', '<p>item -2</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(155) NOT NULL,
  `short_desc` varchar(512) NOT NULL,
  `long_desc` longtext NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `short_desc`, `long_desc`, `sort`) VALUES
(1, 'img/10.png', 'HQ SOLAR ', 'EPSCO (Egyptian Petroleum Services Co.) and HQ SOLAR Energy Solutions signing a partnership agreement', 'EPSCO (Egyptian Petroleum Services Co.) and HQ Solar Energy signing a partnership agreement for the on 1.grid System 2.soler st lighting3.Off grid System 4.solar water heaters .', 1),
(2, 'img/009.png', 'Almansoori', 'EPSCO (Egyptian Petroleum Services Co.) and \r\n\r\nAlmansoori Specialized Engineering free zoon signing a partnership\r\n\r\nagreement for provides', 'EPSCO (Egyptian Petroleum Services Co.) and \r\n\r\nAlmansoori Specialized Engineering free zoon signing a partnership\r\n\r\nagreement for provides 1.surface well testing and Early production facilities2.turbing converyed perforation.3.integrated inspection services 4.slick line/production logging / MPLT Services5.cased hole Logging & perforation Services6.Drill Stem Testing (open/cased hole)7.H25 Safety Services8.Marine Services (fendercare)9.colled Tubing Services10.directional drilling MWD/LWD Services11.Drilling Fishing Tools Rental Services12.Cathodic Protection Services13.Marine Gross Protection Equipmenr & Services14.HF Communication Systems.\r\n\r\n', 2),
(3, 'img/03.png', 'GVOS', '\r\n\r\nMemorandum of understanding with between&nbsp;EPSCO (Egyptian Petroleum Services Co.) and GVOS(Green valley Oil Services) \r\n\r\n', '\r\n\r\nOn February ,2017 , Egyptian Petroleum Services Company is nearing completion of the signing of a partnership agreement between EPSCO (Egyptian Petroleum Services Co.) and GVOS(Green valley Oil Services) provides Zero-discharge Systems (Dry Location) for onshore, offshore drilling operators and Drilling waste management.\r\n\r\n', 3),
(4, 'img/008.jpg', 'MIDCO', '\r\n\r\nEPSCO (Egyptian Petroleum Services Co.) and MIDCO Oil Services signing a partnership agreement\r\n\r\n', '\r\n\r\nMr Mohamed Mostafa (CEO) of Egyptian Petroleum Services Company and Eng Essam Abd El Fattah (CEO) of MIDCO For oil Services signed an Agreement in the field of providing wellhead Maintenance&nbsp; Load test for handling tools wellhead supply in European standard anf Rig inspection services In the presence of Mr Tarek El-Badry head of the company is Administrative Assistant and Mr Mustafa Helal head of the company is financial Assistant. And it was registered partnership contract between the two companies in the EGPC (Egyptian General Petroleum Corporation).\r\n\r\n', 4),
(5, 'img/06.jpg', 'Petro﻿marine', '\r\n\r\nEPSCO (Egyptian Petroleum Services Co.) and Petromarine signing a partnership agreement\r\n\r\n', '\r\n\r\nMr Mohamed Mostafa (CEO) of Egyptian Petroleum Services Company and Eng Mohamed Mohamed Fathia (CEO) of PetroMarine For oil and Logistic Services signed an Agreement in the field of providing drilling services and working on the rigs , rigging equipment and spare parts for the Equipments and Marine agencies and petroleum logistic services In the presence of Mr. Tarek El-Badry head of the company is Administrative Assistant and Mr. Mustafa Helal head of the company is financial Assistant. And it was registered partnership contract between the two companies in the EGPC (Egyptian General Petroleum Corporation) and the signing of contracts with 30 companies in the leasing of drilling equipment, repair and maintenance of wells.\r\n\r\n', 5),
(6, 'img/07.png', 'Elmasriatrack', '\r\n\r\nEPSCO (Egyptian Petroleum Services Co.) and Elmasriatrack signing a partnership agreement\r\n\r\n', '\r\n\r\nMr Mohamed Mostafa (CEO) of Egyptian Petroleum Services Company and Eng Adel Mahmoud (CEO) of Elmasriatrack For the maintenanc of heavy equipmen and spare parts signed an Agreement in the field of Provide services supply and installation of heavy equipment (Caterpillar) , hold all both maintenance and overhaul of heavy equipment , rental and sale of generators (Caterpillar).\r\n\r\n', 6),
(7, 'img/02.png', 'INTEK ', '\r\n\r\nEPSCO (Egyptian Petroleum Services Co.) and INTEK Innovative Solutions signing a partnership agreement\r\n\r\n', '\r\n\r\nEgyptian Petroleum Services Company (EPSCO) has completed the signing of a partnership agreement with INTEK Innovative Solutions for the provision of energy management solutions and oil&amp;gas services. The agreement now in the process of registration at EGPC (Egyptian General Petroleum Corporation).\r\n\r\n', 7),
(8, 'img/01.jpg', 'SNOS ', '\r\n\r\nSigning an Agreement of between EPSCO (Egyptian Petroleum Services Co.) And SNOS (Star Nile oil Services)\r\n\r\n', '\r\n\r\nOn August, 2016, Mr Mohamed Mostafa (CEO) of Egyptian Petroleum Services Company and Eng Hamada maghraby (CEO) of Star Nile oil Services signed an Agreement in the field of providing drilling services and working on the rigs , rigging equipment and spare parts for the Equipments In the presence of Mr. Tarek El-Badry head of the company is Administrative Assistant and Mr. Mustafa Helal head of the company is financial Assistant. And it was registered partnership contract between the two companies in the EGPC (Egyptian General Petroleum Corporation) and the signing of contracts with 30 companies in the leasing of drilling equipment, repair and maintenance of wells.\r\n\r\n', 8),
(9, 'img/04.jpg', 'MultiExport', '<b>Egyptian Petroleum</b> Services Company is nearing completion of the signing of a partnership agreement between EPSCO (Egyptian Petroleum Services Co.) and MultiExport', 'Egyptian Petroleum Services Company is nearing completion of the signing of a partnership agreement between EPSCO (Egyptian Petroleum Services Co.) and MultiExport for the provisions of Marine agencies and petroleum logistic services', 9);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `pass`) VALUES
(1, 'img/2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerycat`
--
ALTER TABLE `gallerycat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallerycat`
--
ALTER TABLE `gallerycat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
