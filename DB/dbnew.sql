-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 05:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_password` varchar(16) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fullname`, `admin_password`, `admin_email`) VALUES
(2, 'Slameh Yaseen', '123456', 'salameh@gmail.com'),
(4, 'Mary', '123456', 'mary@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_nameAr` varchar(255) NOT NULL,
  `cat_img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_nameAr`, `cat_img`) VALUES
(1, 'Royal', 'رويال', 'work-2.png'),
(2, 'Fayrouz', '', 'work-1.jpg'),
(3, 'Bal Snak', '', 'work-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(3) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `job_nameAr` varchar(100) NOT NULL,
  `job_desc` text NOT NULL,
  `job_desc_Ar` text NOT NULL,
  `job_qual` text NOT NULL,
  `job_qual_Ar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `job_nameAr`, `job_desc`, `job_desc_Ar`, `job_qual`, `job_qual_Ar`) VALUES
(1, 'Developer', 'مطور', 'A Java, C#, .Net, C, Sybase and Oracle Software Developer is generally responsible for the development, design and implementation of new or modified software products or ongoing business projects.\r\nTypically sitting within the IT team of a business, a Software Developer will be involved in liaising with the Business Analysts and Development Managers to ensure software projects meet requirements.', 'يعد Java و C # و .Net و C و Sybase و Oracle Software Developer مسؤولين بشكل عام عن تطوير وتصميم وتنفيذ منتجات برمجية جديدة أو معدلة أو مشروعات تجارية جارية.\r\nيجلس مطور البرامج عادةً ضمن فريق تكنولوجيا المعلومات في إحدى الشركات ، وسيشارك في التواصل مع محللي الأعمال ومدراء التطوير لضمان تلبية مشاريع البرامج للمتطلبات.', 'Software Developer duties and responsibilities of the job\r\nA standard Software Developer job description should include, but not be limited to:\r\nResearching, designing, implementing and managing software programs\r\nTesting and evaluating new programs\r\nIdentifying areas for modification in existing programs and subsequently developing these modifications\r\nWriting and implementing efficient code\r\nDetermining operational practicality\r\nDeveloping quality assurance procedures\r\nDeploying software tools, processes and metrics\r\nMaintaining and upgrading existing systems\r\nTraining users\r\nWorking closely with other developers, UX designers, business and systems analysts\r\nSoftware Developer job qualifications and requirements\r\nA degree and a technical background should be required to gain a Software Developer role. Degrees in the following subjects should be highlighted as particularly advantageous:\r\nComputer Science\r\nComputer Software Engineering\r\nSoftware Programming and Development\r\nEngineering\r\nMathematics\r\nElectronics\r\nPhysics\r\nAs well as formal qualifications, a Software Developer job description should highlight the following qualities:\r\nKnowledge and interest in computer systems and the latest technologies\r\nThe ability to learn new technologies quickly\r\nAn analytical mind\r\nThe ability to communicate complex procedures to other colleagues\r\nCommercial and business awareness\r\nGood communication skills â€“ both written and verbal\r\nAttention to detail and desire to probe further into data\r\nAre you looking for an Software Developer role? View our latest Software Developer jobs here.\r\nLooking for an Software Developer job or IT and Technology specific salary information? Head over to our Software Developer Salary Guide for insights and trends.', 'واجبات ومسؤوليات مطور البرامج للوظيفة\r\nيجب أن يتضمن الوصف الوظيفي القياسي لمطور البرامج ، على سبيل المثال لا الحصر:\r\nالبحث عن البرامج وتصميمها وتنفيذها وإدارتها\r\nاختبار وتقييم البرامج الجديدة\r\nتحديد مجالات التعديل في البرامج الحالية ثم تطوير هذه التعديلات\r\nكتابة التعليمات البرمجية الفعالة وتنفيذها\r\nتحديد التطبيق العملي للعمليات\r\nتطوير إجراءات ضمان الجودة\r\nنشر أدوات البرامج والعمليات والمقاييس\r\nصيانة وتحديث النظم القائمة\r\nتدريب المستخدمين\r\nالعمل بشكل وثيق مع المطورين الآخرين ومصممي UX ومحللي الأعمال والنظم\r\nالمؤهلات والمتطلبات الوظيفية لمطور البرامج\r\nيجب الحصول على درجة وخلفية فنية للحصول على دور مطور برامج. يجب إبراز الدرجات في المواد التالية على أنها مفيدة بشكل خاص:\r\nعلوم الكمبيوتر\r\nهندسة برامج الحاسوب\r\nبرمجة وتطوير البرمجيات\r\nهندسة\r\nالرياضيات\r\nإلكترونيات\r\nالفيزياء\r\nبالإضافة إلى المؤهلات الرسمية ، يجب أن يسلط الوصف الوظيفي لمطور البرامج الصفات التالية:\r\nالمعرفة والاهتمام بأنظمة الكمبيوتر وأحدث التقنيات\r\nالقدرة على تعلم التقنيات الجديدة بسرعة\r\nعقل تحليلي\r\nالقدرة على توصيل الإجراءات المعقدة إلى الزملاء الآخرين\r\nالوعي التجاري والتجاري\r\nمهارات الاتصال الجيدة - المكتوبة والشفوية على حد سواء\r\nالانتباه إلى التفاصيل والرغبة في إجراء مزيد من التحقيق في البيانات\r\nهل تبحث عن دور مطور برامج؟ اطلع على أحدث وظائف مطور برامج لدينا هنا.\r\nهل تبحث عن وظيفة مطور برامج أو معلومات راتب خاصة بتكنولوجيا المعلومات؟ توجه إلى دليل راتب مطور البرامج للحصول على رؤى واتجاهات.'),
(11, 'slameh', '', 'Architects work in the construction industry designing new buildings and the spaces in and around them. They also help restore and conserve old buildings, and develop new ways of using existing buildings. They are involved in construction projects from the earliest stages right through to completion.', '', 'nfjladskvnkl\r\nsdnv\r\nldnasv\r\nklnva\r\nslvn\r\naslnvads\r\nlkvnslaknvdsklvn\r\nn\r\nlksdnkl\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(3) NOT NULL,
  `news_name` varchar(100) NOT NULL,
  `news_nameAr` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `news_img` text NOT NULL,
  `news_desc` varchar(400) NOT NULL,
  `news_desc_Ar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_nameAr`, `news_date`, `news_img`, `news_desc`, `news_desc_Ar`) VALUES
(1, 'New Vision ', '', '2020-03-02', 'image_2.jpg', 'image_2', ''),
(2, 'Admin', '', '2020-03-04', 'image_1.jpg', 'Why Lead Generation is Key for Business Growth', ''),
(3, 'King Hussien ', '', '2020-03-19', 'image_3.jpg', 'Hussein was born in Amman as the eldest child of Talal bin Abdullah and Zein Al-Sharaf. Hussein began his schooling in Amman, continuing his education abroad. After Talal became King of Jordan in 1951, Hussein was named heir apparent. The Parliament forced Talal to abdicate a year later due to his illness, and a regency council was appointed until Hussein came of age. He was enthroned at the age o', ''),
(4, 'Sami', '', '2020-03-23', 'image_4.jpg', 'image_4', ''),
(5, 'Alaa', '', '2020-03-24', 'image_5.jpg', 'image_5', ''),
(6, 'Admin', '', '2020-03-18', 'image_6.jpg', 'image_6', ''),
(7, 'Anas', '', '2020-03-17', 'image_7.jpg', 'nkjbveww', ''),
(8, 'Yazan', '', '2020-03-16', 'image_8.jpg', 'njksdb', '');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `par_id` int(3) NOT NULL,
  `par_name` varchar(100) NOT NULL,
  `par_nameAr` varchar(100) NOT NULL,
  `par_logo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`par_id`, `par_name`, `par_nameAr`, `par_logo`) VALUES
(2, 'Jo_Petrol', 'Jo_Petrol', 'person_9.jpg'),
(3, 'Umniah', 'أمنية', 'person_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(3) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `prod_nameAr` varchar(100) NOT NULL,
  `pro_desc` text NOT NULL,
  `prod_desc_Ar` text CHARACTER SET utf8mb4 NOT NULL,
  `prod_price` int(255) NOT NULL,
  `pro_img` text NOT NULL,
  `cat_id` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `prod_nameAr`, `pro_desc`, `prod_desc_Ar`, `prod_price`, `pro_img`, `cat_id`) VALUES
(1, 'Fayrouz', '', 'Fayrouz is not your average drink', '', 10, 'fay4.jpg', 1),
(2, 'Royal', '', 'Fayrouz is not your average drink', '', 10, 'work-8.jpg', 1),
(3, 'Bal Sank', '', 'Fayrouz is not your average drink', '', 0, 'work-7.jpg', 3),
(4, 'Fayrouz', '', 'Fayrouz is not your average drink', '', 0, 'fay3.jpg', 2),
(5, 'Fayrouz', '', 'Fayrouz is not your average drink', '', 0, 'fay1.png', 2),
(6, 'Royal products', '', 'Fayrouz is not your average drink', '', 0, 'work-9.jpg', 1),
(7, 'Royal', '', 'Fayrouz is not your average drink', '', 0, 'work-4.jpg', 1),
(8, 'Bal Sank', '', 'Fayrouz is not your average drink', '', 0, 'work-6.jpg', 3),
(9, 'Bal Sank', '', 'Fayrouz is not your average drink', '', 0, 'work-5.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`par_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `par_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
