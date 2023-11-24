-- Database: `qp_gen`

CREATE TABLE IF NOT EXISTS `signup_form_entries` (
  `userid` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `username` varchar(255),
  `email` varchar(255),
  `pwd` varchar(255)
);

-- --------------------------------------------------------

-- Table structure for table `colleges`

CREATE TABLE IF NOT EXISTS `colleges` (
  `c_id` int PRIMARY KEY AUTO_INCREMENT,
  `c_name` varchar(255) 
);

INSERT INTO `colleges` (`c_name`) VALUES
('School of Technology'),
('School of Business'),
('School of Graduate Studies'),
('School of Agricultural Studies'),
('School of Media Studies & Design'),
('School of Health Sciences'),
('School of Hospitality & Tourism'),
('School of Law');

-- --------------------------------------------------------

-- Table structure for table `programs`

CREATE TABLE IF NOT EXISTS `programs` (
  `p_id` int PRIMARY KEY AUTO_INCREMENT,
  `prog` varchar(255),
  `p_duration` int(11),
  `c_id` int(11),
  FOREIGN KEY (`c_id`) REFERENCES `colleges`(`c_id`)
);

INSERT INTO `programs` (`prog`, `c_id`, `p_duration`) VALUES
('B.Tech', 1, 4),
('M.Tech', 1, 2),
('BCA', 1, 3),
('MCA', 1, 2),
('Diploma', 1, 3),
('BBA', 2, 3),
('MBA', 2, 2),
('B.Com', 3, 3),
('B.Com (Hons.)', 3, 3),
('B.Com (Hons.) Banking & Insurance', 3, 3),
('BA (Hons.) English', 3, 3),
('BA (Hons.) Psychology', 3, 3),
('BA (Hons.) Economics', 3, 3),
('B.Sc (Hons.) Physics', 3, 3),
('B.Sc (Hons.) Mathematics', 3, 3),
('B.Sc (Hons.) Chemistry', 3, 3),
('MA - English', 3, 2),
('MA - Economics', 3, 2),
('B.Sc (Hons.) Agriculture', 4, 4),
('M.Sc (Hons.) Agronomy', 4, 2),
('B.Sc Animation & VFX', 5, 3),
('BA (Hons.) Journalism & Mass Communication', 5, 3),
('B.Sc UI & Graphics Design', 5, 3),
('D.Pharma', 6, 3),
('B.Pharma', 6, 4),
('B.Sc (Radiology)', 6, 3),
('Bachelor in Medical Laboratory Technology', 6, 3),
('B.Sc (Nutrition Dietetics)', 6, 3),
('M.Sc (Nutrition Dietetics)', 6, 2),
('CHM', 7, 1),
('BHM', 7, 4),
('BA LLB', 8, 5),
('BBA LLB', 8, 5);

-- --------------------------------------------------------

-- Table structure for table `branch`

CREATE TABLE IF NOT EXISTS `branch` (
  `b_id` int PRIMARY KEY AUTO_INCREMENT,
  `branch` varchar(255),
  `p_id` int(11),
  FOREIGN KEY (`p_id`) REFERENCES `programs` (`p_id`)
);

INSERT INTO `branch` (`b_id`, `branch`, `p_id`) VALUES
(1, 'CSE', 1),
(2, 'CSE - AIML', 1),
(3, 'CSE - CSCQ', 1),
(4, 'CE', 1),
(5, 'ME', 1),
(6, 'ECE', 1),
(7, 'CSE', 2),
(8, 'CE', 2),
(9, 'ME', 2),
(10, 'ECE', 2),
(11, 'BCA', 3),
(12, 'MCA', 4),
(13, 'CSE', 5),
(14, 'CE', 5),
(15, 'ME', 5),
(16, 'ECE', 5),
(17, 'BBA', 6),
(18, 'Finance', 6),
(19, 'Digital Marketing', 6),
(20, 'Marketing Management', 6),
(21, 'Human Resource Management', 6),
(22, 'MBA', 7),
(23, 'Finance', 7),
(24, 'Marketing', 7),
(25, 'Human Resource', 7),
(26, 'Supply Chain & Operations', 7),
(27, 'International Business', 7),
(28, 'E-Commerce', 7),
(29, 'B.Com', 8),
(30, 'B.Com (Hons.)', 9),
(31, 'B.Com (Hons.) Banking & Insurance', 10),
(32, 'BA (Hons.) English', 11),
(33, 'BA (Hons.) Psychology', 12),
(34, 'BA (Hons.) Economics', 13),
(35, 'B.Sc (Hons.) Physics', 14),
(36, 'B.Sc (Hons.) Mathematics', 15),
(37, 'B.Sc (Hons.) Chemistry', 16),
(38, 'MA - English', 17),
(39, 'MA - Economics', 18),
(40, 'B.Sc (Hons.) Agriculture', 19),
(41, 'M.Sc (Hons.) Agronomy', 20),
(42, 'B.Sc Animation & VFX', 21),
(43, 'BA (Hons.) Journalism & Mass Communication', 22),
(44, 'B.Sc UI & Graphics Design', 23),
(45, 'D.Pharma', 24),
(46, 'B.Pharma', 25),
(47, 'B.Sc (Radiology)', 26),
(48, 'Bachelor in Medical Laboratory Technology', 27),
(49, 'B.Sc (Nutrition Dietetics)', 28),
(50, 'M.Sc (Nutrition Dietetics)', 29),
(51, 'CHM', 30),
(52, 'BHM', 31),
(53, 'BA LLB', 32),
(54, 'BBA LLB', 33),
(55, 'Test', 33);

-- --------------------------------------------------------

-- Table structure for table `semester`

CREATE TABLE IF NOT EXISTS `semester` (
  `s_id` int PRIMARY KEY AUTO_INCREMENT,
  `sem` int(11) ,
  `p_duration` int(11) ,
  FOREIGN KEY (`p_duration`) REFERENCES `programs` (`p_duration`)
);

INSERT INTO `semester` (`sem`, `p_duration`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(1, 1),
(2, 1),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 5),
(10, 5);

-- --------------------------------------------------------

-- Table structure for table `session`

CREATE TABLE IF NOT EXISTS `session` (
  `sess_id` int PRIMARY KEY AUTO_INCREMENT,
  `session` varchar(11)
);

INSERT INTO `session` (`sess_id`, `session`) VALUES
(1, 'Even'),
(2, 'Odd');

-- --------------------------------------------------------

-- Table structure for table `subject`

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` varchar PRIMARY KEY,
  `sub` varchar(255),
  `p_id` int(11),
  `s_id` int(11),
  FOREIGN KEY (`p_id`) REFERENCES  `programs` (`p_id`),
  FOREIGN KEY (`s_id`) REFERENCES `semester` (`s_id`)
);

INSERT INTO `subject` (`sub_id`, `sub`, `p_id`, `s_id`) VALUES
('BME3102', 'Basic Mechanical Engineering', 1, 1),
('CE3101', 'Disaster Management', 1, 1),
('CS3103', 'Basics of Computer & C Programming', 1, 1),
('CS3203', 'Graph Theory & Probability', 1, 2),
('CS3204', 'HTML5 & CSS', 1, 2),
('CS3205', 'Web & Digital Analytics', 1, 2),
('CS3206', 'Advance C Programming', 1, 2),
('CS3301', 'Data Structure & Programming', 1, 3),
('CS3302', 'Discrete Design Structure', 1, 3),
('CS3305', 'Database Management System', 1, 3),
('CS3321', 'Demystifying AI & ML', 1, 3),
('CS3322', 'Python Programming', 1, 3),
('CS3402', 'Computer Network', 1, 4),
('CS3403', 'OOPs with Java', 1, 4),
('CS3404', 'Thoery of Automata & Formal Language', 1, 4),
('CS3421', 'Supervised Learning', 1, 4),
('CS3422', 'Mathematics for Machine Learning', 1, 4),
('CY3205', 'Environmental Studies', 1, 2),
('EC3306', 'Digital Electronics', 1, 3),
('MA3102', 'Engineering Mathematics I ', 1, 1),
('PH3101', 'Engineering Physics', 1, 1);

-- --------------------------------------------------------

-- Table structure for table `question`

CREATE TABLE IF NOT EXISTS `question` (
  `ques_id` int PRIMARY KEY AUTO_INCREMENT,
  `question` varchar(2500),
  `max_mark` int(10),
  `sub_id` varchar(25),
  FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`)
);