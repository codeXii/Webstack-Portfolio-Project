-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 01:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `created`) VALUES
(1, 'Joan', 'admin234', '$2y$10$mtPwDSqn3RPrwEM02NojO.1Map3SRXklH9ddLdQtM7drNbKfXL4o6', '2024-03-18 19:51:45'),
(2, 'Nelson John', 'iwe', '$2y$10$Amajt46EY/zMdpNNoRHGeOPAMh0T4yRlTRpKxvU28RiBgIZ03fyMS', '2024-03-18 19:52:39'),
(3, 'Joshua Bufumoh', 'Joshua', '$2y$10$7po5pZeKjD5bFfiH9kA0aOJ61G9IT33WfB5lL7OspirvYHF0X9iJW', '2024-03-18 21:01:29'),
(4, 'admin', 'admin', '$2y$10$Z8tu3kCk4mR.v9juVC.dxeBqc/TWi2iJJO85oWGLacI1G1KAoDM7e', '2024-03-24 15:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(6, 'EREPA YENEZUE-GENE'),
(10, 'OPOLO'),
(11, 'PDP YENEZUE-GENE');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `t_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `t_id`) VALUES
(4, 'Kemetimbo Beauty in  PDP ESTATE (PERE-IBI ESTATE) BLOCK B FLAT 3 rent will be due in 63 days time <br> ', '35'),
(5, 'Toby Ibiene Charlotte in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK B SHOP 3 rent will be due in 63 days time <br> ', '50'),
(6, 'Egemuze Love in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK A FLAT 6 rent will be due in 63 days time <br> ', '53'),
(7, 'Edide Harriet in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK A FLAT 1 rent will be due in 63 days time <br> ', '55'),
(8, 'Toby Ibiene Charlotte in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK B SHOP 4 rent will be due in 63 days time <br> ', '57'),
(9, 'Ugboaja Sandra Nwanne in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK B FLAT 2 rent will be due in 63 days time <br> ', '24'),
(10, 'Eyedeinghabofa Perekeme in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK A FLAT 2 rent will be due in 63 days time <br> ', '25'),
(11, 'Achibiri Stephen in  PDP ESTATE (PERE-IBI ESTATE) BLOCK A FLAT 1 rent will be due in 63 days time <br> ', '33'),
(12, 'Kemetimbo Beauty in  PDP ESTATE (PERE-IBI ESTATE) BLOCK B FLAT 3 rent will be due in 63 days time <br> ', '35'),
(13, 'Toby Ibiene Charlotte in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK B SHOP 3 rent will be due in 63 days time <br> ', '50'),
(14, 'Egemuze Love in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK A FLAT 6 rent will be due in 63 days time <br> ', '53'),
(15, 'Edide Harriet in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK A FLAT 1 rent will be due in 63 days time <br> ', '55'),
(17, 'Abiodun Dele Akinwomoju in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK B FLAT 1 rent will be due in 63 days time <br> ', '28'),
(18, 'Abiodun Dele Akinwomoju in  EREPA ESTATE GLATO APARTMENTS/SHOPS BLOCK B FLAT 1 rent will be due in 63 days time <br> ', '28');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) NOT NULL,
  `t_id` varchar(10) NOT NULL,
  `t_fullname` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `count` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `location`, `description`, `count`) VALUES
(7, 'EREPA ESTATE GLATO APARTMENTS/SHOPS', 'EREPA YENEZUE-GENE', 'NO 44 Erepa road yenezue-gene', '3'),
(8, 'PDP ESTATE (PERE-IBI ESTATE)', 'PDP YENEZUE-GENE', 'NO 100 PDP road yenezue-gene', '4'),
(11, 'OPOLO ESTATE APARTMENT/SHOPS', 'OPOLO', 'GloryLand Hospital road, Opolo', '2'),
(12, 'EREPA GLATO ANNEX SHOPS/APARTMENTS', 'EREPA YENEZUE-GENE', 'Erepa road yenezue-gene', '0'),
(13, 'EREPA GLATO PLAZA APARTMENT/SHOPS', 'EREPA YENEZUE-GENE', 'Erepa road yenezue-gene', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `property` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `n_o_k` varchar(255) DEFAULT NULL,
  `n_o_k_p` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `lga` varchar(255) DEFAULT NULL,
  `soo` varchar(255) DEFAULT NULL,
  `apartment` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `hn` varchar(255) DEFAULT NULL,
  `expire` varchar(255) DEFAULT NULL,
  `rent` varchar(255) DEFAULT NULL,
  `tow` varchar(255) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `fullname`, `phone`, `property`, `thumbnail`, `email`, `n_o_k`, `n_o_k_p`, `community`, `lga`, `soo`, `apartment`, `block`, `hn`, `expire`, `rent`, `tow`, `employer`) VALUES
(21, 'Richard Adeola', '09032720695', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711242141JAK_1733.JPG', '', 'Elizabeth Adeola', '08034204459', 'Ozalla', 'Owan-West LGA', 'Edo State', '1 BEDROOM', 'BLOCK C', 'FLAT 6', '2024-12-31', '400000', 'Civil Service', 'NCDMB'),
(22, 'Edhemiuno Jeremiah', '08034754509', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711242415JAK_1735.JPG', '', 'Adhemiuno Helen', '07025474297', 'Ada-Irri', 'Isoko-South', 'Delta State', 'SELF CONTAIN', 'BLOCK A', 'SELFCON 1', '2024-09-30', '220000', 'Private Sector', 'Dr. E. Young-Dede (GloryLand Hospital)'),
(23, 'Goodluck Amadi', '08033472216', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711242616JAK_1739.JPG', '', 'Goodluck Tina', '07010011017', 'Oroworukwu', 'Phalga', 'Rivers State', 'SELF CONTAIN', 'BLOCK A', 'SELFCON 2', '2024-05-29', '250000', 'Self Employed', 'Private Sector'),
(24, 'Ugboaja Sandra Nwanne', '08029384538', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711242840JAK_1741.JPG', '', 'Promo Master (Johnson)', '08034077272', 'Abiriba', 'Ohafia', 'Abia State', '1 BEDROOM', 'BLOCK B', 'FLAT 2', '2024-05-31', '350000', 'Estate Surveyor &amp; Valuer', 'Henry Ikputu &amp; Partners'),
(25, 'Eyedeinghabofa Perekeme', '08034208552', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711243018JAK_1743.JPG', '', 'Perekeme Ibiene', '08037046383', 'Ekeremor', 'Ekeremor LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 2', '2024-05-31', '400000', 'Civil Service', 'Bayelsa State Government'),
(26, 'Okpotolomo Ebitonye', '07064345007', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711243172JAK_1745.JPG', '', 'Okpotolomo Patience Gad', '08125266744', 'Agudama Ekpetiama', 'Yenagoa LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK C', 'FLAT 3', '2025-01-31', '400000', 'Private Sector', 'Private'),
(27, 'Obodo Tochukwu Joseph', '08055575306', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711243407JAK_1747.JPG', '', 'Glory Onyekere Joseph', '08036897056', 'Uturu', 'Isukwuato', 'Abia State', '1 BEDROOM', 'BLOCK C', 'FLAT 1', '2024-12-31', '400000', 'Private Sector', 'Globacom Nig.'),
(28, 'Abiodun Dele Akinwomoju', '08064040001', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711243594JAK_1749.JPG', '', 'Mrs Shina Akinwomoju', '0706996854', 'Ile-Oluji', 'Ile-Oluji &amp; Oke-Igbo', 'Ondo State', '1 BEDROOM', 'BLOCK B', 'FLAT 1', '2024-06-01', '420000', 'Public Servant', 'NCDMB'),
(29, 'Igiran Ebitimi Ethel', '08133635024', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711243747JAK_1751.JPG', '', 'Itari Lancelot Potts-Johnson', '08038826652', 'Twon Brass', 'Brass LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 4', '2024-10-31', '400000', 'Self Employed/Civil Service', 'Her Excellency DR. Gloria Diri'),
(32, 'Kubor Timiebimene', '08063749133', 'PDP ESTATE (PERE-IBI ESTATE)', '1711270617img1.jpg', '', 'Kubor Ruth', '08036714666', 'Lobia', 'Southern Ijaw', 'Bayelsa State', 'SELF CONTAIN', 'BLOCK B', 'SELFCON 1', '2025-03-31', '247500', 'Civil Service', 'Bayelsa State Government'),
(33, 'Achibiri Stephen', '08055572805', 'PDP ESTATE (PERE-IBI ESTATE)', '1711271257img4.jpg', '', 'Chiamaka Achibiri', '08060249445', 'Itu Ezinihitfe Mbaise', 'Ezinihitfe', 'Imo State', '1 BEDROOM', 'BLOCK A', 'FLAT 1', '2024-05-31', '300000', 'Private Sector', 'Globacom Nig.'),
(35, 'Kemetimbo Beauty', '09022233352', 'PDP ESTATE (PERE-IBI ESTATE)', '1711272942img2.jpg', '', 'Vera EBi', '07019662975', 'Agoro', 'Sagbama LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK B', 'FLAT 3', '2024-05-31', '350000', 'Civil Service', 'Bayelsa State Government'),
(36, 'Adimiyenkumo Egbe', '08060813585', 'PDP ESTATE (PERE-IBI ESTATE)', '1711273225img3.jpg', '', 'Dubamo Egbe', '+447776749726', 'Aghoro', 'Ekeremor LGA', 'Bayelsa State', 'SELF CONTAIN', 'BLOCK B', 'SELFCON 2', '2025-02-28', '200000', 'Civil Service', 'Civil Service'),
(37, 'Akpede Deborah', '07039580772', 'PDP ESTATE (PERE-IBI ESTATE)', '1711273522img13.jpg', '', 'Ogunlola Esther (NEE Akpede)', '09095949083', 'Sapele', 'Sapele LGA', 'Delta State', '1 BEDROOM', 'BLOCK B', 'FLAT 4', '2024-07-31', '350000', 'Civil Service', 'NIGERIAN SOCIAL INSURANCE TRUST FUND'),
(38, 'Esther Thomas', '08035714746', 'PDP ESTATE (PERE-IBI ESTATE)', '1711273815img7.jpg', '', 'John Dautimi Thomas', '08039364007', 'Ayamasa', 'Ekeremor LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 4', '2025-03-31', '350000', 'Trader', 'SELF'),
(39, 'Odogu Ebitimi', '08086785999', 'PDP ESTATE (PERE-IBI ESTATE)', '1711274049img8.jpg', '', 'Timi Odogu', '07030885086', 'Tungbo', 'Sagbama LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 3', '2024-04-30', '350000', 'Civil Service', 'CIVIL SERVICE'),
(40, 'Ugochukwu Bright Victor', '08063498122', 'PDP ESTATE (PERE-IBI ESTATE)', '1711274363img12.jpg', '', 'Ugochukwu Ifunanya Calista', '08160383035', 'Agulu', 'Aniocha LGA', 'Anambra State', 'SELF CONTAIN', 'BLOCK A', 'SELFCON 1', '2025-04-30', '800000', 'Private Sector', 'PRIVATE SECTOR'),
(41, 'Esther Sawari', '07062169492', 'PDP ESTATE (PERE-IBI ESTATE)', '1711274620img5.jpg', '', 'Naomi Sawari', '08154429941', 'Sagbama', 'Sagbama LGA', 'Bayelsa State', 'SELF CONTAIN', 'BLOCK D', 'SELFCON 1', '2024-06-30', '200000', 'Self Employed', 'SELF EMPLOYED'),
(42, 'Chigozirim Brenda Wosu', '07012290463', 'PDP ESTATE (PERE-IBI ESTATE)', '1711275059img6.jpg', '', 'Barr Uloma Odimba', '08035218369', 'Umuakwu', 'Isialangwa North', 'Abia State', 'SELF CONTAIN', 'BLOCK D', 'SELFCON 2', '2025-04-30', '227000', 'Civil Service', 'CIVIL SERVICE'),
(43, 'Oriri Seiyefa Precious', '07062295709', 'PDP ESTATE (PERE-IBI ESTATE)', '1711276755img9.jpg', '', 'Faustina Benard', '08162797690', 'Biseni', 'Yenagoa LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK C', 'FLAT 2', '2025-04-30', '377500', 'Public Service', 'PREMIUM TRUST BANK'),
(44, 'Hope Christian ', '08038379679', 'PDP ESTATE (PERE-IBI ESTATE)', '1711278902img10.jpg', '', 'Biodumoye Numomoipre', '08147255516', 'Twon Brass', 'Brass L.G.A', 'Bayelsa State', '1 BEDROOM', 'BLOCK C', 'FLAT 6', '2025-02-28', '350000', 'Civil Service', 'ENVIROMENTAL SANITATION AUTHORITY BAYELSA STATE'),
(45, 'Idu Blessing', '08066429975', 'PDP ESTATE (PERE-IBI ESTATE)', '1711279126img11.jpg', '', 'Idu Favour', '08088788053', 'Dagama', 'Dagama LGA', 'Rivers State', '1 BEDROOM', 'BLOCK C', 'FLAT 4', '2025-03-31', '428000', 'Self Employed', 'SELF EMPLOYED'),
(46, 'Theophilus Princess Ebiama', '08138327133', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711288010JAK_1884.JPG', '', 'Angel Theophilus', '07044282192', 'Fortopugbene', 'Ekeremor LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 5', '2024-08-31', '400000', 'Private Sector', 'PRIVATE SECTOR'),
(47, 'Nwaiwu Linus', '08027900556', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711288201JAK_1876.JPG', '', 'Nwaiwu Lucy', '08033388937', 'Atta', 'Ikeduru LGA', 'Imo State', '1 BEDROOM', 'BLOCK C', 'FLAT 4', '2024-12-31', '400000', 'Private Sector', 'ZENITH BANK'),
(48, 'Enweani Abel Afam', '08034591926', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711288418JAK_1874.JPG', '', 'Mrs Nkiru Enweani', '08036501288', 'Enugu-Agidi', 'Njikoka LGA', 'Anambra State', 'SELF CONTAIN', 'BLOCK A', 'SELFCON 3', '2024-07-31', '250000', 'Public Servant', 'CENTRAL BANK OF NIGERIA'),
(49, 'Briggs Sodiepriye', '08037043644', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711288739JAK_1887.JPG', '', 'Dieworia Omusuo', '07060804982', 'Abonn Ema', 'Aku LGA', 'Rivers State', '1 BEDROOM', 'BLOCK C', 'FLAT 5', '2024-12-31', '400000', 'Public Servant', 'UBA PLC'),
(50, 'Toby Ibiene Charlotte', '08037046838', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711289233JAK_1881.JPG', '', 'Davidson Adasa Toby', '08036727520', 'Opobo Town', 'Opobo/Nikoro', 'Rivers State', 'SHOP', 'BLOCK B', 'SHOP 3', '2024-05-31', '140000', 'Self Employed', 'SELF EMPLOYED'),
(51, 'Grace Ngodoo Makeri ', '08106776750', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711372014JAK_1902.JPG', '', 'Dooshima Ann Makeri  ', '08032142536', 'Mbaduku', 'Vandeikya ', 'Benue State', '1 BEDROOM', 'BLOCK C', 'FLAT 2', '2024-12-31', '400000', 'Civil Service', 'CIVIL SERVICE'),
(52, 'Edith Omodero Emena', '08062158642', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1712764158JAK_1904.JPG', '', 'Evelyn Omodero Evi', '0808009702', 'Aviarre', 'Isoko-South LGA', 'Delta State', '1 BEDROOM', 'BLOCK C', 'SELFCON 1', '2024-11-30', '300000', 'Public Servant', 'FIDELITY BANK'),
(53, 'Egemuze Love', '08035909136', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711373161JAK_1899.JPG', '', 'Peter Paul', '08036210375', 'Yenagoa ', 'Yenagoa LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 6', '2024-05-31', '400000', 'Civil Service', 'PPSB'),
(54, 'Ayomiposi Akinsiku Isaiah', '08068621716', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711373834JAK_1897.JPG', '', 'Emmanuel Fieoku', '09035047665', 'Ekiti', 'Emure LGA ', 'Ekiti State', '1 BEDROOM', 'BLOCK A', 'FLAT 3', '2025-03-31', '400000', 'Private Sector', 'ACCESS BANK PLC.'),
(55, 'Edide Harriet', '08137789020', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711374635harriet.jpg', '', 'Diepreye Edide', '09066208832', 'Odi', 'Kolokuma/Opokuma', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 1', '2024-05-31', '400000', 'Self Employed', 'SELF EMPLOYED'),
(56, 'Toby Ibiene Charlotte', '08037046838', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711377320JAK_1882.JPG', '', 'Davidson Adasa Toby', '08036727520', 'Opobo Town', 'Opobo/Nikoro', 'Rivers State', 'SHOP', 'BLOCK C', 'SHOP 5', '2024-12-31', '250000', 'Self Employed', 'SELF EMPLOYED'),
(57, 'Toby Ibiene Charlotte', '08037046838', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1711377691JAK_1882.JPG', '', 'Davidson Adasa Toby', '08036727520', 'Opobo Town', 'Opobo/Nikoro', 'Rivers State', 'SHOP', 'BLOCK B', 'SHOP 4', '2024-05-31', '140000', 'Self Employed', 'SELF EMPLOYED'),
(60, 'Iwekimor Nelson', '08101574605', 'Nelson Estate', '1711524030IMG-20221227-WA0000.jpg', 'Iwekimorn@gmail.com', '', '', '', '', '', 'Pick below', 'Pick below', 'Pick below', '', '', '', ''),
(62, 'Grace Nelson moses', '08101574605', 'Nelson Estate', '171171478825409742-DDA5-4C77-AF42-550C003591BE.jpg', 'Iwekimorn@gmail.com', 'Iwekimor Nelson', '08101574605', 'Ozalla', 'Yenagoa LGA', 'South south', '1 BEDROOM', 'BLOCK A', 'FLAT 1', '2024-03-29', '400000', 'Self Employed', 'SELF EMPLOYED'),
(63, 'Grace Marcus', '08101574605', 'Pick below', '1711525702images (26).jpeg', 'Iwekimorn@gmail.com', 'Iwekimor Nelson', '08101574605', 'Ozalla', 'Yenagoa LGA', 'South south', 'Pick below', 'Pick below', 'Pick below', '2024-03-29', '400000', 'Self Employed', 'SELF EMPLOYED'),
(65, 'Iwekimor Nelson', '08101574605', 'Nelson Estate', '1711529370transfer1.PNG', 'Iwekimorn@gmail.com', '', '', '', '', '', 'SELF CONTAIN', 'BLOCK A', 'FLAT 3', '2024-03-28', '300000', '', ''),
(66, 'Sylva Igbogi', '0901236827647', 'Nelson Estate', '1711719576IMG-20221227-WA0000.jpg', 'sylvaigbogi9@gmail.com', 'Iwekimor Nelson', '08101574605', 'Otuokpoti', 'Ogbia LGA', 'South south', '1 BEDROOM', 'BLOCK A', 'FLAT 1', '2024-02-01', '400000', 'Self Employed', 'SELF EMPLOYED'),
(67, 'Okolonkwo C. Jonathan', '08035833330', 'PDP ESTATE (PERE-IBI ESTATE)', '1713020519okolonkwo.jpg', '', 'Barr UC Martins Mmaju', '08064827815', 'Umuabi', 'UDI', 'Enugu State', '1 BEDROOM', 'BLOCK B', 'FLAT 2', '2024-09-15', '400000', 'Self Employed', 'SELF EMPLOYED'),
(68, 'Olutu Abraham Mattew', '08039364069', 'PDP ESTATE (PERE-IBI ESTATE)', '1712757097Olotu.jpg', '', 'Naomi Oworodo-olotu', '08030960521', 'Toru-ebeni ', 'Sagbama LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK B', 'FLAT 1', '2025-03-31', '400000', 'Member Rural Development Authority', 'Bayelsa State Government'),
(69, 'Dr Ogidigba Peter Ikorira', '08066175745', 'PDP ESTATE (PERE-IBI ESTATE)', '1712758368Dr ogidigba.jpg', '', 'Mrs Ogidigba Precious Amaka', '07064464394', 'Gbarain Twn', 'Southern Ijaw LCA', 'Bayelsa State', 'SHOP', 'BLOCK A', 'SHOP 5', '2025-03-31', '140000', 'Medical Doctor', 'CIVIL SERVICE'),
(70, 'Dr Ogidigba Peter Ikorira', '08066175745', 'PDP ESTATE (PERE-IBI ESTATE)', '1712758651Dr ogidigba.jpg', '', 'Mrs Ogidigba Precious Amaka', '07064464394', 'Gbarain Town', 'Southern Ijaw LCA', 'Bayelsa State', 'SHOP', 'BLOCK A', 'SHOP 6', '2025-03-31', '140000', 'Medical Doctor', 'CIVIL SERVICE'),
(71, 'Dr Kalu Uka Shedrach', '08038820316', 'PDP ESTATE (PERE-IBI ESTATE)', '1712759145Dr Kalu.jpg', '', 'Iveren Kalu-Uka', '07032163593', 'Akanu', 'Ohafia LGA', 'Abia State', '1 BEDROOM', 'BLOCK C', 'FLAT 3', '2025-02-28', '350000', 'Civil Service', 'F.M.C Yenagoa Bayelsa State'),
(72, 'Johnson Nelson', '08125090259', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1712762246johnson.jpg', '', 'Ebiye Johnson', '08169887753', 'Sagbama', 'Brass L.G.A', 'Bayelsa State', 'SHOP', 'BLOCK B', 'SHOP 1', '2024-06-30', '140000', 'Self Employed', 'PRIVATE SECTOR'),
(73, 'Louisa Zibima', '08068554177', 'EREPA ESTATE GLATO APARTMENTS/SHOPS', '1712762420louisa.jpg', '', 'Gift Zibima', '08034222308', 'Biseni', 'Yenagoa LGA', 'Bayelsa State', 'SHOP', 'BLOCK B', 'SHOP 2', '2024-06-30', '140000', 'Self Employed', 'PRIVATE SECTOR'),
(74, 'Chioma Kelechi ThankGod', '08062937446', 'OPOLO ESTATE APARTMENT/SHOPS', '1712925662Chioma.jpg', '', 'Love Chioma', '08063594657', 'Odufor(Umuobiri)', 'Etche LGA', 'Rivers State', '1 BEDROOM', 'BLOCK A', 'FLAT 2', '2024-05-31', '375000', 'Private Sector', 'Tantita Security Services Nig.Ltd'),
(75, 'Obodo Tekena John', '07038326806', 'OPOLO ESTATE APARTMENT/SHOPS', '1712925931Tekena.jpg', '', 'Timi Obodo', '09030586970', 'Bassambiri', 'Nembe LGA', 'Bayelsa State', 'SELF CONTAIN', 'BLOCK B', 'SELFCON 1', '2024-07-31', '250000', 'Private Sector', 'Tripli Innovative Ltd.'),
(76, 'Bekeowei Alex Peremobowei', '08163128450', 'OPOLO ESTATE APARTMENT/SHOPS', '1712926286Alex bekeowei.jpg', '', 'Oghene Theresa', '0816001379', 'Angiama', 'Sagbama LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 1', '2024-04-30', '375000', 'Private Sector', 'Tripli Innovative Ltd.'),
(77, 'John Inemotimi', '07035470346', 'OPOLO ESTATE APARTMENT/SHOPS', '1712926744John.jpg', '', 'Okoko Idiomo', '09129637057', 'Akassa', 'Brass L.G.A', 'Bayelsa State', 'SELF CONTAIN', 'BLOCK B', 'SELFCON 3', '2024-04-30', '250000', 'Self Employed', 'SELF EMPLOYED'),
(78, 'Obua Silva', '08034720737', 'OPOLO ESTATE APARTMENT/SHOPS', '1712927145Silva.jpg', '', 'Mrs Rita Ochs', '08038756188', 'Emeyal 2', 'Ogbia LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK A', 'FLAT 3', '2025-03-31', '375000', 'Civil Service', 'NSITF'),
(79, 'Rita Pama', '07012851278', 'OPOLO ESTATE APARTMENT/SHOPS', '1712927628Rita Pama.jpg', '', 'Bobby Kennedy', '07060518037', '', 'Ughelli South LGA', 'Delta State', 'SHOP', 'BLOCK B', 'SHOP 1', '2024-04-26', '250000', 'Self Employed', 'SELF EMPLOYED'),
(80, 'Alozie Eze Bartholomen', '08038733525', 'PDP ESTATE (PERE-IBI ESTATE)', '1713006838IMG-20240413-WA0000.jpg', '', 'Ezioma Kelechi Alozie', '08063460989', 'Apukwu Autonomous Community', 'Isiala Ngwa South LGA', 'Abia State', '1 BEDROOM', 'BLOCK B', 'FLAT 5', '2025-03-31', '350000', 'Civil Service', 'CIVIL SERVICE'),
(81, 'Oladayo Olawale', '08063324647', 'PDP ESTATE (PERE-IBI ESTATE)', '1713007306IMG-20240413-WA0001.jpg', '', 'Wunmi Olawale', '07037615754', 'Ogbomoso', 'Ogbomoso North LGA', 'Oyo State', '1 BEDROOM', 'BLOCK A', 'FLAT 2', '2025-03-31', '350000', 'Private Sector', 'Friesland Campina Wamco'),
(82, 'Olagboye Bolanle', '07033399791', 'PDP ESTATE (PERE-IBI ESTATE)', '1713007675Olagboye Bolanle.jpg', '', 'Olagboye Bolaji', '07063664665', 'Lagos', 'Lagos', 'Lagos State', '1 BEDROOM', 'BLOCK C', 'FLAT 1', '2025-03-31', '350000', 'Self Employed', 'SELF EMPLOYED'),
(83, 'Ugochukwu Bright Victor', '08063498122', 'PDP ESTATE (PERE-IBI ESTATE)', '1713020839img12.jpg', '', 'Ugochukwu Ifunanya Calista', '08160383035', 'Agulu', 'Aniocha LGA', 'Anambra State', 'SHOP', 'BLOCK A', 'SHOP 1', '2025-04-30', '140000', 'Private Sector', 'PRIVATE SECTOR'),
(84, 'Ugochukwu Bright Victor', '08063498122', 'PDP ESTATE (PERE-IBI ESTATE)', '1713021026img12.jpg', '', 'Ugochukwu Ifunanya Calista', '08160383035', 'Agulu', 'Aniocha LGA', 'Anambra State', 'SHOP', 'BLOCK A', 'SHOP 2', '2025-04-30', '140000', 'Private Sector', 'PRIVATE SECTOR'),
(85, 'Ugochukwu Bright Victor', '08063498122', 'PDP ESTATE (PERE-IBI ESTATE)', '1713021230img12.jpg', '', 'Ugochukwu Ifunanya Calista', '08160383035', 'Agulu', 'Aniocha LGA', 'Anambra State', 'SHOP', 'BLOCK A', 'SHOP 3', '2025-04-30', '140000', 'Private Sector', 'PRIVATE SECTOR'),
(86, 'Ugochukwu Bright Victor', '08063498122', 'PDP ESTATE (PERE-IBI ESTATE)', '1713021366img12.jpg', '', 'Ugochukwu Ifunanya Calista', '08160383035', 'Agulu', 'Aniocha LGA', 'Anambra State', 'SHOP', 'Pick below', 'SHOP 4', '2025-04-30', '140000', 'Private Sector', 'PRIVATE SECTOR'),
(87, 'Ugochukwu Bright Victor', '08063498122', 'PDP ESTATE (PERE-IBI ESTATE)', '1713021583img12.jpg', '', 'Ugochukwu Ifunanya Calista', '08160383035', 'Agulu', 'Aniocha LGA', 'Anambra State', 'SHOP', 'BLOCK A', 'SHOP 4', '2025-04-30', '140000', 'Private Sector', 'PRIVATE SECTOR'),
(88, 'Williams Abadi ', '080788787171', 'PDP ESTATE (PERE-IBI ESTATE)', '1713110743Williams Abadi.jpg', '', 'Victor Abadi', '08035435531', 'Twon Brass', 'Brass LGA', 'Bayelsa State', 'SELF CONTAIN', 'BLOCK D', 'SELFCON 3', '2024-10-31', '200000', 'Naoc', 'Naoc'),
(89, 'Eyetigha James', '0803487358', 'OPOLO ESTATE APARTMENT/SHOPS', '1713385409Eyetigha james.jpg', '', 'Mrs Eyetigha Rita', '08058772120', 'Ogbinbiri', 'Warri-North', 'Delta State', '1 BEDROOM', 'BLOCK A', 'FLAT 4', '2025-03-31', '375000', 'Civil Service', 'Nigerian Content &amp; Monitoring Board, Yenagoa Bayelsa State'),
(90, 'Joseph E. Benjamin', '08068889456', 'OPOLO ESTATE APARTMENT/SHOPS', '1713385591Benjamin.jpg', '', 'Joseph Doubara', '08137183721', 'Ayamasa', 'Ekeremor LGA', 'Bayelsa State', 'SELF CONTAIN', 'BLOCK B', 'SELFCON 2', '2025-06-30', '250000', 'Self Employed', 'C.E.O Pensels Integrated Services'),
(91, 'Nasiru T. Ademola', '08037792402', 'EREPA GLATO ANNEX SHOPS/APARTMENTS', '1715978330IMG-20240517-WA0006.jpg', '', 'Nasiru K. Toyin', '07039895454', 'Okeho', 'Kajola L.G.A', 'Oyo State', 'SHOP', 'BLOCK', 'SHOP', '2025-01-31', '160000', 'Self Employed', 'PRIVATE SECTOR'),
(92, 'Perekibina Douye Ann', '07066784166', 'EREPA GLATO ANNEX SHOPS/APARTMENTS', '1715980845IMG-20240517-WA0007.jpg', '', 'Perekibina Ebiye', '08061233773', 'Gbaraonbiri', 'Kolokuma/Opokuma', 'Bayelsa State', '1 BEDROOM', 'BLOCK', 'FLAT', '2024-09-30', '350000', 'Civil Service', 'POST PRIMARY SCHOOL BOARD'),
(93, 'Obialor Francisca', '07066765912', 'EREPA GLATO ANNEX SHOPS/APARTMENTS', '1715988215IMG-20240518-WA0000.jpg', '', 'Obialor Chidi', '08033789830', 'Umuenyi Isiala Mbano', 'Isiala Mbano L.G.A', 'Imo State', '1 BEDROOM', 'BLOCK', 'FLAT', '2024-07-31', '350000', 'Civil Service', 'Federal Medical Centre Yenagoa'),
(94, 'Evelyn Usikoromogha', '08063663015', 'EREPA GLATO ANNEX SHOPS/APARTMENTS', '1715988528IMG-20240518-WA0001.jpg', '', 'Ebikila Bibowei-Elfrida', '08122556698', 'Sampou', 'Kolokuma/Opokuma', 'Bayelsa State', 'SHOP', 'BLOCK', 'SHOP', '2025-01-31', '160000', 'Civil Service', 'Bayelsa State Government'),
(95, 'Charles Kpatinde', '08036773822', 'EREPA GLATO PLAZA APARTMENT/SHOPS', '1716677960IMG-20240525-WA0001.jpg', '', 'Adam Edith', '070667757224', 'ozogi', 'Ogbia LGA', 'Bayelsa State', 'SHOP', 'BLOCK', 'SHOP', '2025-02-28', '140000', 'Private Sector', 'SELF EMPLOYED'),
(96, 'Omenka O. Amarachukwu', '08068090129', 'EREPA GLATO PLAZA APARTMENT/SHOPS', '1716678541IMG-20240526-WA0000.jpg', '', 'Eddyson Omenka Okoro', '08062076007', 'Agulu', 'Ideato L.G.A', 'Anambra State', 'SELF CONTAIN', 'BLOCK', 'SELFCON', '2025-06-30', '220000', 'Private Sector', 'Procter &amp; Gamble'),
(97, 'Helen Miene', '08037429624', 'EREPA GLATO PLAZA APARTMENT/SHOPS', '1716678888IMG-20240526-WA0001.jpg', '', 'Precious Ebikeseye', '07088278160', 'Amassoma', 'Southern Ijaw LGA', 'Bayelsa State', '1 BEDROOM', 'BLOCK', 'FLAT', '2025-03-31', '350000', 'Private Sector', 'Langrange Engineering Services'),
(98, 'Omomowo Edith Sijuola', '07033790781', 'EREPA GLATO PLAZA APARTMENT/SHOPS', '1716679215IMG-20240526-WA0002.jpg', '', 'Anike Omomowo Lanre Oni', '08060757547', 'Ugbo-Nla', 'Ilaje L.G.A', 'Ondo State', '1 BEDROOM', 'BLOCK', 'FLAT', '2025-03-31', '350000', 'Private Sector', 'Sanlam Nigeria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
