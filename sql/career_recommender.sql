-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 07:12 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career recommender`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_info`
--

CREATE TABLE `about_info` (
  `ab_id` int(60) NOT NULL,
  `ab_title` varchar(60) NOT NULL,
  `ab_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_info`
--

INSERT INTO `about_info` (`ab_id`, `ab_title`, `ab_content`) VALUES
(1, 'What is Web Based Career Recommender System?', 'Web Based Career Recommendation System are commonly used over the internet to guide students to find the best fit with their personal preferences. It is a computer program build with the help of experts where the details of the students and their aptitudes help finding a right course for his future. This project proposes feasible predictions for student&#039;s field selection based on their marks and choice of interest. And essential to build a recommender system that provides direction and guidance to students in choosing their career. '),
(4, 'About the RIASEC Test', 'RIASEC stands for 6 characteristics: Realistic, Investigative, Artistic, Social, Enterprising, and Conventional. The RIASEC test asks questions about your aspirations, activities, skills, and interests in different jobs to help you discover careers and fields of study that are likely to satisfy you.\r\n\r\nWe hope this helps you understand your current skills, interests, and aspirations a little bit better to help you in explore options on your quest to find the path best suited for you.'),
(5, 'Vision', 'To address the aforementioned, Web Based Career Recommender System provide Senior High School students overcome their deficiencies at the same time accounting for changes overtime. They view a study program as a path to obtain graduating attributes skills, qualities, understanding and rank the impact that each course has on promoting those graduating attributes for a student who took the course.'),
(6, 'Mission', 'To successfully match students with courses suited to both their talent, personality and academic goals. Degree compass combines data on a students past grades with transcript information from thousands of other students.'),
(7, 'Goals', 'To help students manage their own study progress in a more effective way. With this system, students would achieve better performance, find it easy to select courses without wondering which will give them high score or which are the better for their future job or career path.'),
(8, 'Privacy Policy', 'A privacy policy is a document that discloses how the system collects, uses, protects, and shares information about its customers.\r\nReasonable to believe that tools assisting users with two tasks:\r\n1.) Understanding their social net behavior in terms of their privacy settings and broad privacy categories, and.\r\n2.) Recommending reasonable privacy options, will be a valuable tool for everyday privacy practice in a social network context. '),
(9, 'Terms and Conditions', 'These terms and conditions outline the rules and regulations for the use of Web Based Career Recommender System. By accessing this website we assume you accepts these terms and conditions in full. Do not continue to use Web Based Career Recommender System if you do not accept all of the terms and conditions stated on this pages. The following terminology applies to these terms and conditions, privacy statement and disclaimer notice and any or all agreements : &quot;Full name&quot;, &quot;Email Address&quot;, &quot;Username &quot;and &quot;Password&quot; refers to you. All terms refers to the offer, acceptance and consideration to undertake the process of our assistance to the user in the most appropriate manner.');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `c_id` int(30) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_desc` text NOT NULL,
  `c_desc_link` text NOT NULL,
  `c_image` text NOT NULL,
  `c_category` varchar(30) NOT NULL,
  `c_rank` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`c_id`, `c_name`, `c_desc`, `c_desc_link`, `c_image`, `c_category`, `c_rank`) VALUES
(1, 'Agriculture', 'Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets. Agriculture provides most of the world\'s food and fabrics.', 'https://www.nationalgeographic.org/encyclopedia/agriculture/', './career_img/agriculture.jpg', 'r', 1),
(2, 'Health Assistant', 'A Healthcare Assistant, or HCA cares for patients in a hospital, residential care facility or a patient\'s home. Their duties include assisting patients with daily activities, checking vital signs and assisting nursing staff when necessary.', 'https://www.indeed.com/hire/job-description/healthcare-assistant?hl=en&co=GB', './career_img/health assistant.png', 'r', 2),
(3, 'Computers', 'Computer operators monitor and control computer and electronic data processing equipment according to standardized operating instructions. They are tasked with managing and improving a company\'s network performance by troubleshooting hardware and software problems.', 'https://www.betterteam.com/computer-operator-job-description', './career_img/computers.jpg', 'r', 3),
(4, 'Construction', 'The construction sector includes the construction of commercial, industrial, and residential buildings and engineering projects like roads, bridges, and utility systems. ... Positions vary, ranging from unskilled laborer and helper jobs to skilled construction jobs that require extensive training and education.', 'thebalancecareers.com/construction-job-titles-2061492#:~:text=The%20construction%20sector%20includes%20the,%2C%20bridges%2C%20and%20utility%20systems.&text=Positions%20vary%2C%20ranging%20from%20unskilled,require%20extensive%20training%20and%20education.', './career_img/construction.jpg', 'r', 4),
(5, 'Mechanic/Machinist', 'An auto mechanic performs maintenance, diagnostic testing, repairs, and inspections of small trucks and cars. They work on engines, drive belts, transmissions, and electronic systems such as steering, brakes, and accident-avoidance systems.', 'https://www.yourfreecareertest.com/auto-mechanic/', './career_img/mechanic.png', 'r', 5),
(6, 'Engineering', 'Engineering refers to any type of science concerned with the design, construction and use of machines, systems and structures. It is a vast field that has applications in nearly every industry, from manufacturing and production to shipping and construction.', 'https://www.indeed.com/career-advice/finding-a-job/types-of-engineering-careers#:~:text=Engineering%20refers%20to%20any%20type,production%20to%20shipping%20and%20construction.', './career_img/engineering.jpg', 'r', 6),
(7, 'Food and Hospitality', 'Food Service and Hospitality includes businesses and companies that provide a meal outside the home. This can include companies such as restaurants, cafeterias, catering services, and more. The hospitality business alone is a several billion dollar industry that profits when disposable income is at its highest.', 'https://www.marketresearch.com/Food-Beverage-c84/Food-Service-Hospitality-c169/#:~:text=Food%20Service%20and%20Hospitality%20includes,income%20is%20at%20its%20highest.', './career_img/food and hospitality.png', 'r', 7),
(8, 'Counseling', 'Professional counseling is a professional relationship that empowers diverse individuals, families, and groups to accomplish mental health, wellness, education, and career goals.', 'https://www.counseling.org/aca-community/learn-about-counseling/what-is-counseling', './career_img/counseling.jpg', 's', 1),
(9, 'Nursing', 'Nursing encompasses autonomous and collaborative care of individuals of all ages, families, groups and communities, sick or well and in all settings. Nursing includes the promotion of health, prevention of illness, and the care of ill, disabled and dying people.', 'https://www.icn.ch/nursing-policy/nursing-definitions', './career_img/nursing.jpg', 's', 2),
(10, 'Physical Therapy', 'Physical therapists evaluate and record a patient\'s progress. Physical therapists help injured or ill people improve movement and manage pain. They are often an important part of preventive care, rehabilitation, and treatment for patients with chronic conditions, illnesses, or injuries.', 'https://www.bls.gov/ooh/healthcare/mobile/physical-therapists.htm', './career_img/physical therapy.png', 's', 3),
(11, 'Travel', 'Tourism and travel-related services include services provided by hotels and restaurants (including catering), travel agencies and tour operator services, tourist guide services and other related services. A crucial aspect of trade in tourism services is the cross-border movement of consumers.', 'https://www.wto.org/english/tratop_e/serv_e/tourism_e/tourism_e.htm', './career_img/travel.jpg', 's', 4),
(12, 'Advertising', 'The advertising industry creates and manages the connection between companies, products, and consumers, translating their clients\' messages into effective campaigns. Advertising can stimulate buying, increase sales, and help to jumpstart the economy. The economy, though, can also affect the advertising business.', 'https://firsthand.co/library/collections/a-day-in-the-life?page=1', './career_img/advertising.jpg', 's', 5),
(13, 'Public Relations', 'Public relations, or PR, is the practice of managing and guiding perceptions of your business to attract new customers and strengthen the loyalty of existing customers. ... While marketing focuses on promoting actual products and services, public relations focuses on promoting awareness, attitudes and behaviour change.', 'https://www.business.qld.gov.au/running-business/marketing-sales/marketing-promotion/pr#:~:text=Public%20relations%2C%20or%20PR%2C%20is,the%20loyalty%20of%20existing%20customers.&text=While%20marketing%20focuses%20on%20promoting,awareness%2C%20attitudes%20and%20behaviour%20change.', './career_img/public relations.webp', 's', 6),
(14, 'Education', 'The Education Industry comprises establishments whose primary objective is to provide education. These establishments can be public, non-profit, or for-profit institutions. They include elementary schools, secondary schools, community colleges, universities, and ministries or departments of education.', 'https://www.predictiveanalyticstoday.com/what-is-education-industry/#:~:text=The%20Education%20Industry%20comprises%20establishments,ministries%20or%20departments%20of%20education.', './career_img/education.webp', 's', 7),
(15, 'Marine Biology', 'Marine biologists study marine organisms in their natural habitats. They may investigate a population\'s behaviors or physiology. Or, they may assess the condition of habitats, and the effects of human activity on those animals and habitats.', 'https://www.environmentalscience.org/career/marine-biologist', './career_img/marine biology.webp', 'i', 1),
(16, 'Chemistry', 'The chemical industry consists of the companies that produce industrial chemicals. This industry utilizes chemical processes such as chemical reactions and refining methods to convert raw materials—such as oil, natural gas, air, water, metals, and minerals—into more than 70,000 different products.', 'https://www.newworldencyclopedia.org/entry/Chemical_industry', './career_img/chemistry.jpg', 'i', 2),
(17, 'Zoology', 'A zoologist is a professional who studies about a variety of animal species, their behaviour, characteristics and evolution. ... They also conduct research and experiments in coordination with scientists in laboratories and research centres in various aspects associated with animals.', 'https://www.collegedekho.com/careers/zoologist', './career_img/zoology.jpg', 'i', 3),
(18, 'Medicine/Surgery', 'A surgeon is a medical professional who has a medical degree that includes a specialty for particular organs or procedures. Their primary function is to conduct invasive, internal operations into a patient\'s body that correct various problems that arise from disease or injury.\r\n', 'https://universityhq.org/how-to-become/surgeon-careers/', './career_img/medical surgery.webp', 'i', 4),
(19, 'Consumer Economics', 'Consumer economics deals with the question of how the consumer allocates his scarce means over a variety of different commodities and services. The consumer is thought to be able to order the various sets of quantities of goods and services that fit in the limited budget according to his or her preferences. The most preferred alternative is the bundle demanded. This almost tautological principle turns out to have powerful consequences for the analysis and prediction of consumer demand. It makes it possible to describe the consequences of changes in available means and in the prices paid for the commodities. Assumptions about the structure of preferences—substitution, independence, complementarity—play an important role. On the basis of certain rather weak assumptions one can, for example, derive the well-known Law of Demand, which states that, with constant real income, demand for a good will be less if its price increases. Another implication of this framework is the homogeneity of demand: a demand bundle does not change in composition if total means and all prices change by the same factor. These properties can be useful in empirical work.', 'https://www.sciencedirect.com/topics/economics-econometrics-and-finance/consumer-economics', './career_img/consumer economics.png', 'i', 5),
(20, 'Psychology', 'What is the study of psychology?\r\nPsychology is the scientific study of the mind and behavior. Psychologists are actively involved in studying and understanding mental processes, brain functions, and behavior.', 'https://psychology.osu.edu/about/what-psychology', './career_img/psychology.jpg', 'i', 6),
(21, 'Fashion Merchandising', 'It could be a great career path for individuals who want to combine their interpersonal and negotiating skills with their love of fashion. Most buyer positions require applicants to hold a bachelor\'s degree in fashion merchandising or a related field, such as business or finance.', 'https://bestaccreditedcolleges.org/articles/careers-and-education/is-a-career-in-fashion-merchandising-a-good-choice.html', './career_img/fashion merch.jpg', 'e', 1),
(22, 'Real Estate', 'One successful business in the construction world is the real estate industry. This industry covers many aspects of the property such as development, leasing, appraisal, marketing, and management of commercial, residential, agricultural, and industrial properties.', 'https://www.construction21.org/articles/h/all-about-the-real-estate-industry.html?__cf_chl_jschl_tk__=pmd_GOWjS6wMges8uTKE4l.rQU9SYma49AQL_2hlBbQ3BMI-1635574362-0-gqNtZGzNApCjcnBszQi9', './career_img/real estate.png', 'e', 2),
(23, 'Marketing/Sales', 'Marketing includes advertising, selling, and delivering products to consumers or other businesses. Some marketing is done by affiliates on behalf of a company. Professionals who work in a corporation\'s marketing and promotion departments seek to get the attention of key potential audiences through advertising.', 'https://www.investopedia.com/terms/m/marketing.asp', './career_img/marketing sales.webp', 'e', 3),
(24, 'Law', 'Law is a profession and an industry. Lawyers in the U.S., the world\'s largest legal market, regulate both. ... The legal \'profession\' refers to lawyers—their training, licensure, ethical responsibilities, client obligations, and other practice-related matters.', 'https://www.forbes.com/sites/markcohen1/2018/03/29/law-is-a-profession-and-an-industry-it-should-be-regulated-that-way/?sh=a7052f265981', './career_img/law.jpg', 'e', 4),
(25, 'Political Science', 'Put most simply, political science is the study of politics, government, and public policy, both in the U.S. and around the world. ... Like other social sciences, political science uses a \"scientific\" approach, meaning that political scientists approach their study in an objective, rational, and systematic manner.', 'https://www.iup.edu/politicalscience/about/', './career_img/political science.jpg', 'e', 5),
(26, 'International Trade', 'International trade allows countries to expand their markets and access goods and services that otherwise may not have been available domestically. As a result of international trade, the market is more competitive. This ultimately results in more competitive pricing and brings a cheaper product home to the consumer.', 'https://www.mvorganizing.org/what-is-international-trade-and-its-importance/', './career_img/international trade.png', 'e', 6),
(27, 'Banking/Finance', 'What is banking and finance industry?\r\nBanking, financial services and insurance (BFSI) is an industry term for companies that provide a range of such financial products or services. ... BFSI comprises commercial banks, insurance companies, non-banking financial companies, cooperatives, pensions funds, mutual funds and other smaller financial entities.', 'https://en.wikipedia.org/wiki/BFSI', './career_img/banking.jpg', 'e', 7),
(28, 'Communications', 'communications industry, broadly defined, the business of conveying information. ... As such, it covers television and radio broadcasting, telegraphs, publishing, advertising, telecommunications, motion pictures, home videos, public relations, computer databases, and other information industries.', 'https://www.infoplease.com/encyclopedia/social-science/economy/business/communications-industry#:~:text=communications%20industry%2C%20broadly%20defined%2C%20the%20business%20of%20conveying%20information.&text=As%20such%2C%20it%20covers%20television,databases%2C%20and%20other%20information%20industries.', './career_img/communication.jpg', 'a', 1),
(29, 'Cosmetology', 'Cosmetologists provide personal care services that include caring for people\'s hair, skin, and nails. Beauty professionals employed in the cosmetology industry include hair stylists, barbers, and estheticians, also called skin care specialists.', 'https://www.thebalancecareers.com/cosmetology-careers-524866#:~:text=Cosmetologists%20provide%20personal%20care%20services,also%20called%20skin%20care%20specialists.', './career_img/cosmetolgy.jpg', 'a', 2),
(30, 'Fine and Performing Arts', 'Fine arts are a type of art that have been created to be visually and aesthetic appealing. Performing Arts, on the other hand, are the arts that are performed, i.e. those that require skills like acting, singing or dancing. Art can be defined as a wide range of human activities and the products of those activities.\r\n', 'http://www.differencebetween.info/difference-between-fine-arts-and-performing-arts', './career_img/fine and performing arts.jpg', 'a', 3),
(31, 'Photography', 'The Photography industry encompasses companies and individuals that offer a range of photographic services, including still photography and videography for private events. Commercial and portrait photography studios are also included in this industry.', 'https://www.ibisworld.com/united-states/market-research-reports/photography-industry/#:~:text=Industry%20Definition,also%20included%20in%20this%20industry.', './career_img/photography.jpg', 'a', 4),
(32, 'Radio and TV', 'Radio and television communications professionals work as broadcast and sound technicians, directors and producers, camera operators and journalists.', 'https://learn.org/directory/category/Media_Related_Communication/Radio_and_Television_Communications.html', './career_img/radio and tv.webp', 'a', 5),
(33, 'Interior Design', 'An interior designer is responsible for the layout of the internal space in a building or structure. ... An interior design relates to the layout and configuration of interior space and the design includes the skills of first and second fix installation to buildings such as kitchens, bathrooms, path-finding and surfaces.', 'https://www.sbid.org/what-does-a-designer-do/', './career_img/interior design.png', 'a', 6),
(34, 'Architecture', 'Architects are in charge of design and project planning, and they are also responsible for the visual appearance of buildings and structures. ... Architects work hand-in-hand with other professionals such as civil and HVAC engineers to deliver qualified designs.', 'https://www.ny-engineers.com/blog/architects-in-construction-projects#:~:text=Architects%20are%20in%20charge%20of,appearance%20of%20buildings%20and%20structures.&text=Architects%20work%20hand%2Din%2Dhand,engineers%20to%20deliver%20qualified%20designs.', './career_img/architecture.png', 'a', 7),
(35, ' Accounting', 'An accountant is a professional who is responsible for keeping and interpreting financial records. Most accountants are responsible for a wide range of finance-related tasks, either for individual clients or for larger businesses and organizations employing them.\r\n\r\nSeveral other terms are often discussed in conjunction with the phrase “accountant,” which can lead to confusion on what this career actually entails. For example, “accountant” and “bookkeeper” are phrases that are sometimes used interchangeably, yet there are several key differences between these job titles. ', 'https://www.northeastern.edu/bachelors-completion/news/what-does-an-accountant-do/', './career_img/accounting.webp', 'c', 1),
(36, 'Court Reporting', 'Court reporters have a critical role in legal proceedings, which require an exact record of what occurred. These workers are responsible for producing a complete, accurate, and secure transcript of depositions, trials, and other legal proceedings.', 'https://www.bls.gov/ooh/legal/court-reporters.htm', './career_img/court reporting.png', 'c', 2),
(37, 'Insurance', 'The insurance industry consists mainly of insurance carriers and insurance agencies and brokerages. In general, insurance carriers are large companies that provide insurance and assume the risks covered by the policy. Insurance agencies and brokerages sell insurance policies for the carriers.', 'https://collegegrad.com/industries/insurance', './career_img/insurance.jpg', 'c', 3),
(38, 'Administration', 'Administrative tasks are duties related to maintaining an office setting. These duties vary widely from workplace to workplace but most often include tasks such as scheduling appointments, answering phones, greeting visitors, and maintaining organized file systems for the organization.', 'https://www.glassdoor.com/blog/guide/administrative-tasks/', './career_img/administration.jpg', 'c', 4),
(39, 'Medical Records', 'Medical Records Clerk Job Description: Top Duties and Qualifications. A Medical Records Clerk, or Health Information Clerk, is responsible for managing patients\' health records and history. Their main duties include helping conduct audits, gathering and filing patient information and processing discharge papers.', 'https://www.indeed.com/recruitment/job-description/medical-records-clerk#:~:text=Medical%20Records%20Clerk%20Job%20Description%3A%20Top%20Duties%20and%20Qualifications,information%20and%20processing%20discharge%20papers.', './career_img/medical records.jpg', 'c', 5),
(40, 'Data Processing', 'This industry provides data processing or hosting services. Data processing services provide specialized reports from information supplied by clients. Hosting services can include web and application hosting. Services range from automated data entry to data processing.', 'https://www.ibisworld.com/united-states/market-research-reports/data-processing-hosting-services-industry/#:~:text=Industry%20Definition,data%20entry%20to%20data%20processing.', './career_img/data processing.png', 'c', 6);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(11) NOT NULL,
  `f_content` text NOT NULL,
  `f_u_id` int(11) NOT NULL,
  `f_status` varchar(60) NOT NULL,
  `f_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `f_content`, `f_u_id`, `f_status`, `f_date`) VALUES
(15, 'The result of the test feels realistic and true', 75, 'Edited', '2022-07-12 16:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `other_inf`
--

CREATE TABLE `other_inf` (
  `inf_id` int(60) NOT NULL,
  `inf_title` varchar(60) NOT NULL,
  `inf_content` varchar(60) NOT NULL,
  `inf_u_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `r_id` int(11) NOT NULL,
  `r_content` text NOT NULL,
  `r_f_id` int(11) NOT NULL,
  `r_u_id` int(11) NOT NULL,
  `r_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `s_id` int(60) NOT NULL,
  `s_realistic` int(60) NOT NULL,
  `s_investigative` int(60) NOT NULL,
  `s_artistic` int(60) NOT NULL,
  `s_social` int(60) NOT NULL,
  `s_enterprising` int(60) NOT NULL,
  `s_conventional` int(60) NOT NULL,
  `s_user_id` int(11) NOT NULL,
  `s_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(60) NOT NULL,
  `u_fname` varchar(60) NOT NULL,
  `u_mname` varchar(60) NOT NULL,
  `u_lname` varchar(60) NOT NULL,
  `u_ext` varchar(60) NOT NULL,
  `u_email` varchar(60) NOT NULL,
  `u_mobile` varchar(60) NOT NULL,
  `u_address` varchar(60) NOT NULL,
  `u_gender` varchar(60) NOT NULL,
  `u_status` varchar(60) NOT NULL,
  `u_religion` varchar(60) NOT NULL,
  `u_year` varchar(60) NOT NULL,
  `u_school` varchar(60) NOT NULL,
  `u_username` text NOT NULL,
  `u_password` varchar(60) NOT NULL,
  `u_role` varchar(60) NOT NULL,
  `u_test_attempt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_mname`, `u_lname`, `u_ext`, `u_email`, `u_mobile`, `u_address`, `u_gender`, `u_status`, `u_religion`, `u_year`, `u_school`, `u_username`, `u_password`, `u_role`, `u_test_attempt`) VALUES
(75, 'Clark Janndy', '', 'Casol', '', 'admin@gmail.com', '0912345696', 'Inabanga, Bohol', 'Male', 'Widowed', 'Christianity', '', 'San agustin', 'admin', 'admin123', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_info`
--
ALTER TABLE `about_info`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `other_inf`
--
ALTER TABLE `other_inf`
  ADD PRIMARY KEY (`inf_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_info`
--
ALTER TABLE `about_info`
  MODIFY `ab_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `c_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `other_inf`
--
ALTER TABLE `other_inf`
  MODIFY `inf_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `s_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
