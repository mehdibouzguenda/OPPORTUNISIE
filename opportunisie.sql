-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 07:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opportunisie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `expected_salary_range` varchar(255) DEFAULT NULL,
  `salary_range` varchar(255) DEFAULT NULL,
  `experience_years` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `full_name`, `languages`, `age`, `location`, `expected_salary_range`, `salary_range`, `experience_years`) VALUES
(10, 'John Smith', 'Java, Python, SQL', 30, 'Beja', '$50,000 - $70,000', '$60,000 - $75,000', 5),
(11, 'Jane Doe', 'C++, JavaScript, HTML/CSS', 28, 'Sfax', '$60,000 - $80,000', '$65,000 - $85,000', 7),
(12, 'Michael Johnson', 'Python, R, MATLAB', 35, 'Sousse', '$70,000 - $90,000', '$75,000 - $95,000', 8),
(13, 'Emily Brown', 'Java, JavaScript, Swift', 26, 'Sfax', '$55,000 - $75,000', '$60,000 - $80,000', 4),
(14, 'David Lee', 'Python, SQL, Ruby', 32, 'Tunis', '$65,000 - $85,000', '$70,000 - $90,000', 6),
(15, 'Sarah Wilson', 'JavaScript, HTML/CSS, PHP', 29, 'Jendouba', '$50,000 - $70,000', '$55,000 - $75,000', 5),
(16, 'Matthew Taylor', 'C#, SQL, ASP.NET', 31, 'Gabes', '$60,000 - $80,000', '$65,000 - $85,000', 6),
(17, 'Emma Martinez', 'Python, Java, Kotlin', 27, 'Gafsa', '$55,000 - $75,000', '$60,000 - $80,000', 4),
(18, 'James Anderson', 'JavaScript, TypeScript, React', 34, 'Ariana', '$70,000 - $90,000', '$75,000 - $95,000', 8),
(19, 'Olivia Garcia', 'Java, Python, Swift', 30, 'Sfax', '$65,000 - $85,000', '$70,000 - $90,000', 7),
(20, 'Daniel Hernandez', 'Python, C++, Ruby', 33, 'Sousse', '$70,000 - $90,000', '$75,000 - $95,000', 9),
(21, 'Sophia Lopez', 'JavaScript, HTML/CSS, Node.js', 28, 'Monastir', '$55,000 - $75,000', '$60,000 - $80,000', 5),
(22, 'Alexander Perez', 'Java, SQL, Spring', 29, 'Kef', '$60,000 - $80,000', '$65,000 - $85,000', 6),
(24, 'William Rodriguez', 'C++, Python, Flask', 32, 'Tunis', '$65,000 - $85,000', '$70,000 - $90,000', 7),
(27, 'Wiam Fajraoui', 'HTML, C, C++,Python', 20, 'Mannouba', '5000', '5000', 0),
(28, 'Sidi Ali Azouz', 'Maktoub', 3000, 'Tunisia', 'barcha flous', 'barcha flous', 3000),
(31, 'AAAAAAAAAAZZZZZZZZZZZZ', 'egzg', 33, 'Tunis', '5252', '5252525252', 33),
(32, NULL, 'egzg', 22, 'Tunis', NULL, NULL, NULL),
(33, NULL, 'egzg', 2121, 'Tunis', NULL, NULL, NULL),
(34, NULL, 'egzg', 32, 'Tunis', NULL, NULL, NULL),
(36, 'Edam Dahad', 'C++', 36, 'Tunis', '5252', '5252525252', 6),
(37, 'Dali ', 'Java', 45, 'kassernie', '1450', '2500', 6);

-- --------------------------------------------------------

--
-- Table structure for table `candidates_education`
--

CREATE TABLE `candidates_education` (
  `candidate_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidates_experience`
--

CREATE TABLE `candidates_experience` (
  `candidate_id` int(11) NOT NULL,
  `experience_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidates_skills`
--

CREATE TABLE `candidates_skills` (
  `candidate_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `years_attended` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `employer_id` int(11) NOT NULL,
  `job_type` enum('Full Time','Part Time','Freelance','Contract') NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `employees` int(11) NOT NULL,
  `founded_year` int(11) NOT NULL,
  `jobs_posted` int(11) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `followers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`employer_id`, `job_type`, `company_name`, `employees`, `founded_year`, `jobs_posted`, `website`, `followers`) VALUES
(3000, 'Full Time', 'TechSolutions', 500, 2005, 200, 'https://www.techsolutions.com', 1500),
(3001, 'Part Time', 'DataWorks', 100, 2010, 50, 'https://www.dataworks.com', 300),
(3002, 'Freelance', 'CodeMasters', 50, 2015, 30, 'https://www.codemasters.io', 200),
(3003, 'Contract', 'EngineeringPro', 200, 2008, 80, 'https://www.engineeringpro.net', 600);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `years_served` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `offered_salary_min` int(10) DEFAULT NULL,
  `offered_salary_max` int(10) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `exp_required` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','Any') DEFAULT 'Any',
  `industry` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `applications_received` int(11) DEFAULT 0,
  `app_end_date` datetime DEFAULT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Normal','Urgent','Featured') DEFAULT 'Normal',
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_type`, `location`, `offered_salary_min`, `offered_salary_max`, `post_date`, `exp_required`, `gender`, `industry`, `label`, `applications_received`, `app_end_date`, `employer_id`, `description`, `status`, `category_id`) VALUES
(2000, 'Full Time', 'San Francisco', 60000, 80000, '2024-04-21 09:00:00', 3, 'Any', 'Information Technology', 'Software Developer', 50, '2024-05-21 00:00:00', 3000, NULL, 'Normal', 1000),
(2001, 'Part Time', 'New York', 30000, 40000, '2024-04-20 10:00:00', 1, 'Female', 'Information Technology', 'Data Analyst', 20, '2024-05-20 00:00:00', 3001, NULL, 'Normal', 1001),
(2002, 'Freelance', 'Los Angeles', 5000, 10000, '2024-04-19 11:00:00', 2, 'Male', 'Engineering', 'Electrical Engineer', 10, '2024-05-19 00:00:00', 3002, NULL, 'Normal', 1004),
(20067, 'Time', 'Tunis', 1500, 2000, '2024-04-20 14:35:00', 4, 'Any', 'a', 'aa', 3, '2024-04-26 14:35:00', 3000, 'gggg', 'Urgent', 1000),
(20069, 'Time', 'Tunis', 1500, 3000, '0200-01-15 02:22:00', 4, 'Any', 'a', 'aa', 45, '2024-04-24 14:42:00', 3000, 'lklklklk', 'Urgent', 1000),
(20070, 'Time', 'Tunis', 2000, 2500, '2024-04-19 15:03:00', 12, 'Any', 'A', 'aa', 12, '2024-04-22 15:03:00', 3000, 'lhlklklkh', 'Urgent', 1000),
(20071, 'Time', 'Tunis', 1200, 1500, '2000-02-12 20:20:00', 25, 'Any', '55', '55', 3, '2024-04-24 15:55:00', 3000, 'mamama', 'Urgent', 1007),
(20073, 'Time', 'Tunis', 12000, 1500, '2024-04-21 15:46:00', 12, 'Any', 'a', 'aaklhjkjkj', 21, '2024-04-21 15:23:00', 3000, 'koo', 'Urgent', 1000),
(20074, 'Time', 'Tunis', 1212, 1000, '2024-04-21 15:29:00', 12, 'Any', 'a', 'aa', 125, '2024-04-21 15:29:00', 3000, 'kjkjkk', 'Urgent', 1000),
(20075, 'Time', 'Tunis', 1212, 1500, '2024-04-21 15:32:00', 12, 'Any', 'a', 'aa', 10, '2024-04-21 15:32:00', 3000, 'hclefe', 'Urgent', 1003);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `application_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `app_status` enum('Applied','Reviewed','Interviewed','Offered','Accepted','Rejected') NOT NULL,
  `app_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id_category`, `category`, `subcategory`) VALUES
(1000, 'Information Technology', 'Software Development'),
(1001, 'Information Technology', 'Data Science'),
(1002, 'Information Technology', 'Cybersecurity'),
(1003, 'Engineering', 'Mechanical Engineering'),
(1004, 'Engineering', 'Electrical Engineering'),
(1005, 'Sales', 'Retail Sales'),
(1006, 'Sales', 'Inside Sales'),
(1007, 'Sales', 'Outside Sales');

-- --------------------------------------------------------

--
-- Table structure for table `professional_skills`
--

CREATE TABLE `professional_skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `proficiency_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `reviewee_id` int(11) NOT NULL,
  `review_text` text NOT NULL,
  `rating` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Candidate','Employer','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `candidates_education`
--
ALTER TABLE `candidates_education`
  ADD PRIMARY KEY (`candidate_id`,`education_id`),
  ADD KEY `education_id` (`education_id`);

--
-- Indexes for table `candidates_experience`
--
ALTER TABLE `candidates_experience`
  ADD PRIMARY KEY (`candidate_id`,`experience_id`),
  ADD KEY `experience_id` (`experience_id`);

--
-- Indexes for table `candidates_skills`
--
ALTER TABLE `candidates_skills`
  ADD PRIMARY KEY (`candidate_id`,`skill_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `employer_id` (`employer_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `professional_skills`
--
ALTER TABLE `professional_skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviewer_id` (`reviewer_id`),
  ADD KEY `reviewee_id` (`reviewee_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `employer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20076;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT for table `professional_skills`
--
ALTER TABLE `professional_skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `candidates_education`
--
ALTER TABLE `candidates_education`
  ADD CONSTRAINT `candidates_education_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_education_ibfk_2` FOREIGN KEY (`education_id`) REFERENCES `education` (`education_id`) ON DELETE CASCADE;

--
-- Constraints for table `candidates_experience`
--
ALTER TABLE `candidates_experience`
  ADD CONSTRAINT `candidates_experience_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_experience_ibfk_2` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`experience_id`) ON DELETE CASCADE;

--
-- Constraints for table `candidates_skills`
--
ALTER TABLE `candidates_skills`
  ADD CONSTRAINT `candidates_skills_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `candidates_skills_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `professional_skills` (`skill_id`) ON DELETE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employer` (`employer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `job_category` (`id_category`) ON DELETE CASCADE;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_applications_ibfk_2` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`reviewer_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`reviewee_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
