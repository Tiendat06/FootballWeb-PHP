-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 06:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `competition`
--
CREATE DATABASE IF NOT EXISTS `competition` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `competition`;

-- --------------------------------------------------------

--
-- Table structure for table `ad_account`
--

CREATE TABLE `ad_account` (
  `ad_id` varchar(500) NOT NULL,
  `ad_name` varchar(500) DEFAULT NULL,
  `ad_mail` varchar(500) DEFAULT NULL,
  `ad_pass` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_account`
--

INSERT INTO `ad_account` (`ad_id`, `ad_name`, `ad_mail`, `ad_pass`) VALUES
('521H0442', 'Tạ Tiến Đạt', 'tadat290903@gmail.com', 'Khinaobacanli290903');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` varchar(500) NOT NULL,
  `player_name` varchar(500) DEFAULT NULL,
  `player_phone` varchar(500) DEFAULT NULL,
  `player_mail` varchar(500) DEFAULT NULL,
  `player_pass` varchar(500) DEFAULT NULL,
  `player_ingame` varchar(500) DEFAULT NULL,
  `added` varchar(500) DEFAULT NULL,
  `attendance` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `player_phone`, `player_mail`, `player_pass`, `player_ingame`, `added`, `attendance`) VALUES
('521H0001', 'Jake_1', '0123456781', '521H0442@student.tdtu.edu.vn', NULL, 'ZdY0MnmU', 'add', 'present'),
('521H0002', 'Jake_2', '0123456782', '521H0002@student.tdtu.edu.vn', NULL, '2vDvTtX0', 'add', 'present'),
('521H0003', 'Jake_3', '0123456783', '521H0003@student.tdtu.edu.vn', NULL, '35XEwH56', 'add', 'present'),
('521H0004', 'Jake_4', '0123456784', '521H0004@student.tdtu.edu.vn', NULL, 'iHyxQqqQ', 'add', 'present'),
('521H0005', 'Jake_5', '0123456785', '521H0005@student.tdtu.edu.vn', NULL, 'T13Kg7Qn', 'add', 'present'),
('521H0006', 'Jake_6', '0123456786', '521H0006@student.tdtu.edu.vn', NULL, 'xrWDkXDW', 'add', 'present'),
('521H0007', 'Jake_7', '0123456787', '521H0007@student.tdtu.edu.vn', NULL, 'YCJbABYq', 'add', 'present'),
('521H0008', 'Jake_8', '0123456788', '521H0008@student.tdtu.edu.vn', NULL, 'aFyXZC0M', 'add', 'present'),
('521H0009', 'Jake_9', '0123456789', '521H0009@student.tdtu.edu.vn', NULL, 'wBE5hQ3S', 'add', 'present'),
('521H0010', 'Jake_10', '0123456710', '521H0010@student.tdtu.edu.vn', NULL, 'tuwjsuTi', 'add', 'present'),
('521H0011', 'Jake_11', '0123456711', '521H0011@student.tdtu.edu.vn', NULL, 'rMInVoD7', 'add', 'present'),
('521H0012', 'Jake_12', '0123456712', '521H0012@student.tdtu.edu.vn', NULL, 'dzyTyi1I', 'add', 'present'),
('521H0013', 'Jake_13', '0123456713', '521H0013@student.tdtu.edu.vn', NULL, '11oPOarz', 'add', 'present'),
('521H0014', 'Jake_14', '0123456714', '521H0014@student.tdtu.edu.vn', NULL, 'pJFsJY9w', 'add', 'present'),
('521H0015', 'Jake_15', '0123456715', '521H0015@student.tdtu.edu.vn', NULL, 'c58IurkW', 'add', 'present'),
('521H0016', 'Jake_16', '0123456716', '521H0016@student.tdtu.edu.vn', NULL, 'V69Or93I', 'add', 'present'),
('521H0017', 'Jake_17', '0123456717', '521H0017@student.tdtu.edu.vn', NULL, '1twRxYJq', 'add', 'present'),
('521H0018', 'Jake_18', '0123456718', '521H0018@student.tdtu.edu.vn', NULL, 'yYcoqMdN', 'add', 'present'),
('521H0019', 'Jake_19', '0123456719', '521H0019@student.tdtu.edu.vn', NULL, 'zD5eToRx', 'add', 'present'),
('521H0020', 'Jake_20', '0123456720', '521H0020@student.tdtu.edu.vn', NULL, 'lk3ctDAB', 'add', 'present'),
('521H0021', 'Jake_21', '0123456721', '521H0021@student.tdtu.edu.vn', NULL, 'rbx0DzGp', 'add', 'present'),
('521H0022', 'Jake_22', '0123456722', '521H0022@student.tdtu.edu.vn', NULL, 'PTh6fWi2', 'add', 'present'),
('521H0023', 'Jake_23', '0123456723', '521H0023@student.tdtu.edu.vn', NULL, 'INplZEpb', 'add', NULL),
('521H0024', 'Jake_24', '0123456724', '521H0024@student.tdtu.edu.vn', NULL, 'Kx5jsjWW', 'add', 'present'),
('521H0025', 'Jake_25', '0123456725', '521H0025@student.tdtu.edu.vn', NULL, '8FEPNvAT', 'add', 'present'),
('521H0026', 'Jake_26', '0123456726', '521H0026@student.tdtu.edu.vn', NULL, 'BlOIPDdS', 'add', NULL),
('521H0027', 'Jake_27', '0123456727', '521H0027@student.tdtu.edu.vn', NULL, 'eidZ75kd', 'add', 'present'),
('521H0028', 'Jake_28', '0123456728', '521H0028@student.tdtu.edu.vn', NULL, 'Lb4WTSrM', 'add', 'present'),
('521H0029', 'Jake_29', '0123456729', '521H0029@student.tdtu.edu.vn', NULL, 'm58INdlI', 'add', NULL),
('521H0030', 'Jake_30', '0123456730', '521H0030@student.tdtu.edu.vn', NULL, '8ltfkoYI', 'add', 'present'),
('521H0031', 'Jake_31', '0123456731', '521H0031@student.tdtu.edu.vn', NULL, 'tC6hropA', 'add', 'present'),
('521H0032', 'Jake_32', '0123456732', '521H0032@student.tdtu.edu.vn', NULL, 'xctPuVXn', 'add', NULL),
('521H0033', 'Jake_33', '0123456733', '521H0033@student.tdtu.edu.vn', NULL, 'ImKYv9QU', 'add', 'present'),
('521H0034', 'Jake_34', '0123456734', '521H0034@student.tdtu.edu.vn', NULL, 'tTVpJquH', 'add', NULL),
('521H0035', 'Jake_35', '0123456735', '521H0035@student.tdtu.edu.vn', NULL, 'vIxFFAVi', 'add', 'present'),
('521H0036', 'Jake_36', '0123456736', '521H0036@student.tdtu.edu.vn', NULL, 'WSE48ICB', 'add', 'present'),
('521H0037', 'Jake_37', '0123456737', '521H0037@student.tdtu.edu.vn', NULL, 'xNaJZHm6', 'add', NULL),
('521H0038', 'Jake_38', '0123456738', '521H0038@student.tdtu.edu.vn', NULL, '9etUEcmO', 'add', NULL),
('521H0039', 'Jake_39', '0123456739', '521H0039@student.tdtu.edu.vn', NULL, '62ibJ7vL', 'add', NULL),
('521H0040', 'Jake_40', '0123456740', '521H0040@student.tdtu.edu.vn', NULL, '58jXuNkU', 'add', NULL),
('521H0041', 'Jake_41', '0123456741', '521H0041@student.tdtu.edu.vn', NULL, 'QTG7gcwy', 'add', NULL),
('521H0042', 'Jake_42', '0123456742', '521H0042@student.tdtu.edu.vn', NULL, 'BVRXgoj7', 'add', NULL),
('521H0043', 'Jake_43', '0123456743', '521H0043@student.tdtu.edu.vn', NULL, 'RtRbr2cC', 'add', NULL),
('521H0044', 'Jake_44', '0123456744', '521H0044@student.tdtu.edu.vn', NULL, 'ptepuS8Y', 'add', NULL),
('521H0045', 'Jake_45', '0123456745', '521H0045@student.tdtu.edu.vn', NULL, 'CrC8KCpL', 'add', NULL),
('521H0046', 'Jake_46', '0123456746', '521H0046@student.tdtu.edu.vn', NULL, 'JM2K66U1', 'add', NULL),
('521H0047', 'Jake_47', '0123456747', '521H0047@student.tdtu.edu.vn', NULL, 'GmSeuWKZ', 'add', NULL),
('521H0048', 'Jake_48', '0123456748', '521H0048@student.tdtu.edu.vn', NULL, '10Kw9ME6', 'add', NULL),
('521H0049', 'Jake_49', '0123456749', '521H0049@student.tdtu.edu.vn', NULL, 'tkCR2t2i', 'add', 'present'),
('521H0050', 'Jake_50', '0123456750', '521H0050@student.tdtu.edu.vn', NULL, 'Vd58J0bK', 'add', NULL),
('521H0051', 'Jake_51', '0123456751', '521H0051@student.tdtu.edu.vn', NULL, 'hvIWASgc', 'add', NULL),
('521H0052', 'Jake_52', '0123456752', '521H0052@student.tdtu.edu.vn', NULL, 'LbvURtl2', 'add', NULL),
('521H0053', 'Jake_53', '0123456753', '521H0053@student.tdtu.edu.vn', NULL, 'MxuDOTya', 'add', NULL),
('521H0054', 'Jake_54', '0123456754', '521H0054@student.tdtu.edu.vn', NULL, 'q81xhTC4', 'add', NULL),
('521H0055', 'Jake_55', '0123456755', '521H0055@student.tdtu.edu.vn', NULL, 'M7yjkfdH', 'add', NULL),
('521H0056', 'Jake_56', '0123456756', '521H0056@student.tdtu.edu.vn', NULL, 'Fal1wvPj', 'add', NULL),
('521H0057', 'Jake_57', '0123456757', '521H0057@student.tdtu.edu.vn', NULL, 'rEWlp7bm', 'add', NULL),
('521H0058', 'Jake_58', '0123456758', '521H0058@student.tdtu.edu.vn', NULL, 's5WXb6Uh', 'add', NULL),
('521H0059', 'Jake_59', '0123456759', '521H0059@student.tdtu.edu.vn', NULL, 'S7nNjqke', 'add', NULL),
('521H0060', 'Jake_60', '0123456760', '521H0060@student.tdtu.edu.vn', NULL, 'jcyFaXhy', 'add', NULL),
('521H0061', 'Jake_61', '0123456761', '521H0061@student.tdtu.edu.vn', NULL, '8g3pnoiQ', 'add', NULL),
('521H0062', 'Jake_62', '0123456762', '521H0062@student.tdtu.edu.vn', NULL, '6kQqT8ZS', 'add', NULL),
('521H0063', 'Jake_63', '0123456763', '521H0063@student.tdtu.edu.vn', NULL, 'p1kLLkSm', 'add', NULL),
('521H0064', 'Jake_64', '0123456764', '521H0064@student.tdtu.edu.vn', NULL, 'byiKxemr', 'add', NULL),
('521H0065', 'Jake_65', '0123456765', '521H0065@student.tdtu.edu.vn', NULL, 'CY8pM3fX', 'add', NULL),
('521H0066', 'Jake_66', '0123456766', '521H0066@student.tdtu.edu.vn', NULL, 'gnwY8soS', 'add', NULL),
('521H0067', 'Jake_67', '0123456767', '521H0067@student.tdtu.edu.vn', NULL, 'tuX1KX3k', 'add', NULL),
('521H0068', 'Jake_68', '0123456768', '521H0068@student.tdtu.edu.vn', NULL, 'TsijsoUL', 'add', NULL),
('521H0069', 'Jake_69', '0123456769', '521H0069@student.tdtu.edu.vn', NULL, 'AGasN9u5', 'add', NULL),
('521H0070', 'Jake_70', '0123456770', '521H0070@student.tdtu.edu.vn', NULL, 'CAn1HAVt', 'add', NULL),
('521H0071', 'Jake_71', '0123456771', '521H0071@student.tdtu.edu.vn', NULL, 'jLOwiuIy', 'add', NULL),
('521H0072', 'Jake_72', '0123456772', '521H0072@student.tdtu.edu.vn', NULL, 'pM39n3is', 'add', NULL),
('521H0073', 'Jake_73', '0123456773', '521H0073@student.tdtu.edu.vn', NULL, '9KfD7Ggi', 'add', NULL),
('521H0074', 'Jake_74', '0123456774', '521H0074@student.tdtu.edu.vn', NULL, 'ylh2ufB7', 'add', NULL),
('521H0075', 'Jake_75', '0123456775', '521H0075@student.tdtu.edu.vn', NULL, 'xkIqDSl2', 'add', NULL),
('521H0076', 'Jake_76', '0123456776', '521H0076@student.tdtu.edu.vn', NULL, 'pAoWXePN', 'add', NULL),
('521H0077', 'Jake_77', '0123456777', '521H0077@student.tdtu.edu.vn', NULL, 'AZB01rwv', 'add', NULL),
('521H0078', 'Jake_78', '0123456778', '521H0078@student.tdtu.edu.vn', NULL, '8dxXO8en', 'add', NULL),
('521H0079', 'Jake_79', '0123456779', '521H0079@student.tdtu.edu.vn', NULL, 'lV5AbICj', 'add', NULL),
('521H0080', 'Jake_80', '0123456780', '521H0080@student.tdtu.edu.vn', NULL, 'NxbwGbty', 'add', NULL),
('521H0081', 'Jake_81', '0123456781', '521H0081@student.tdtu.edu.vn', NULL, 'V5dNYPbl', 'add', NULL),
('521H0082', 'Jake_82', '0123456782', '521H0082@student.tdtu.edu.vn', NULL, 'zO65dg6s', 'add', NULL),
('521H0083', 'Jake_83', '0123456783', '521H0083@student.tdtu.edu.vn', NULL, 'KdJmRzGS', 'add', NULL),
('521H0084', 'Jake_84', '0123456784', '521H0084@student.tdtu.edu.vn', NULL, '6v3q2gMp', 'add', NULL),
('521H0085', 'Jake_85', '0123456785', '521H0085@student.tdtu.edu.vn', NULL, 'E6jKTwaG', 'add', NULL),
('521H0086', 'Jake_86', '0123456786', '521H0086@student.tdtu.edu.vn', NULL, 'yYUwNQuS', 'add', NULL),
('521H0087', 'Jake_87', '0123456787', '521H0087@student.tdtu.edu.vn', NULL, '5LTmV6FV', 'add', NULL),
('521H0088', 'Jake_88', '0123456788', '521H0088@student.tdtu.edu.vn', NULL, 'ax2nVFjt', 'add', NULL),
('521H0089', 'Jake_89', '0123456789', '521H0089@student.tdtu.edu.vn', NULL, 'YH3E3o4z', 'add', NULL),
('521H0090', 'Jake_90', '0123456790', '521H0090@student.tdtu.edu.vn', NULL, '72UuakcY', 'add', NULL),
('521H0091', 'Jake_91', '0123456791', '521H0091@student.tdtu.edu.vn', NULL, 'ZL3FjUXs', 'add', NULL),
('521H0092', 'Jake_92', '0123456792', '521H0092@student.tdtu.edu.vn', NULL, 'qMg6EKnH', 'add', NULL),
('521H0093', 'Jake_93', '0123456793', '521H0093@student.tdtu.edu.vn', NULL, '0zI9jLuX', 'add', NULL),
('521H0094', 'Jake_94', '0123456794', '521H0094@student.tdtu.edu.vn', NULL, 'YUGVsrMK', 'add', NULL),
('521H0095', 'Jake_95', '0123456795', '521H0095@student.tdtu.edu.vn', NULL, '0Iw38CRb', 'add', NULL),
('521H0096', 'Jake_96', '0123456796', '521H0096@student.tdtu.edu.vn', NULL, 'LRdX5r3d', 'add', NULL),
('521H0097', 'Jake_97', '0123456797', '521H0097@student.tdtu.edu.vn', NULL, 'BpHshWXn', 'add', NULL),
('521H0098', 'Jake_98', '0123456798', '521H0098@student.tdtu.edu.vn', NULL, 'qvQCSQRS', 'add', NULL),
('521H0099', 'Jake_99', '0123456799', '521H0099@student.tdtu.edu.vn', NULL, '4BtuUti1', 'add', NULL),
('521H0100', 'Jake_100', '0123456100', '521H0100@student.tdtu.edu.vn', NULL, 'mxBJjzQh', 'add', NULL),
('521H0101', 'Jake_101', '0123456101', '521H0101@student.tdtu.edu.vn', NULL, '928fiPS1', 'add', NULL),
('521H0102', 'Jake_102', '0123456102', '521H0102@student.tdtu.edu.vn', NULL, 'vnFXU3WA', 'add', NULL),
('521H0103', 'Jake_103', '0123456103', '521H0103@student.tdtu.edu.vn', NULL, 'xpkSbTl3', 'add', NULL),
('521H0104', 'Jake_104', '0123456104', '521H0104@student.tdtu.edu.vn', NULL, 'D1z08znI', 'add', NULL),
('521H0105', 'Jake_105', '0123456105', '521H0105@student.tdtu.edu.vn', NULL, 'pFfA7ppc', 'add', NULL),
('521H0106', 'Jake_106', '0123456106', '521H0106@student.tdtu.edu.vn', NULL, 'lBJXVCdB', 'add', NULL),
('521H0107', 'Jake_107', '0123456107', '521H0107@student.tdtu.edu.vn', NULL, 'B9uZlr1s', 'add', NULL),
('521H0108', 'Jake_108', '0123456108', '521H0108@student.tdtu.edu.vn', NULL, '9QntAVTR', 'add', NULL),
('521H0109', 'Jake_109', '0123456109', '521H0109@student.tdtu.edu.vn', NULL, 'thwrqmJU', 'add', NULL),
('521H0110', 'Jake_110', '0123456110', '521H0110@student.tdtu.edu.vn', NULL, 'pLZgqQjf', 'add', NULL),
('521H0111', 'Jake_111', '0123456111', '521H0111@student.tdtu.edu.vn', NULL, 'yHuC3Hne', 'add', NULL),
('521H0112', 'Jake_112', '0123456112', '521H0112@student.tdtu.edu.vn', NULL, '51HUCBBT', 'add', NULL),
('521H0113', 'Jake_113', '0123456113', '521H0113@student.tdtu.edu.vn', NULL, 'QaH7SiJ1', 'add', NULL),
('521H0114', 'Jake_114', '0123456114', '521H0114@student.tdtu.edu.vn', NULL, '4CCgtKz9', 'add', NULL),
('521H0115', 'Jake_115', '0123456115', '521H0115@student.tdtu.edu.vn', NULL, 'j96oUu33', 'add', NULL),
('521H0116', 'Jake_116', '0123456116', '521H0116@student.tdtu.edu.vn', NULL, 'plJtJqgE', 'add', NULL),
('521H0117', 'Jake_117', '0123456117', '521H0117@student.tdtu.edu.vn', NULL, 'dCZiEfeQ', 'add', NULL),
('521H0118', 'Jake_118', '0123456118', '521H0118@student.tdtu.edu.vn', NULL, 'UbGftHPj', 'add', NULL),
('521H0119', 'Jake_119', '0123456119', '521H0119@student.tdtu.edu.vn', NULL, 'JRKW2OuG', 'add', NULL),
('521H0120', 'Jake_120', '0123456120', '521H0120@student.tdtu.edu.vn', NULL, 'KsJYnTj8', 'add', NULL),
('521H0121', 'Jake_121', '0123456121', '521H0121@student.tdtu.edu.vn', NULL, 'n057txTZ', 'add', NULL),
('521H0122', 'Jake_122', '0123456122', '521H0122@student.tdtu.edu.vn', NULL, 'J7TLcFjs', 'add', NULL),
('521H0123', 'Jake_123', '0123456123', '521H0123@student.tdtu.edu.vn', NULL, 'M5WvVzCY', 'add', 'present'),
('521H0124', 'Jake_124', '0123456124', '521H0124@student.tdtu.edu.vn', NULL, 'WC0J2Ujr', 'add', NULL),
('521H0125', 'Jake_125', '0123456125', '521H0125@student.tdtu.edu.vn', NULL, 'V7o2Hw5P', 'add', NULL),
('521H0126', 'Jake_126', '0123456126', '521H0126@student.tdtu.edu.vn', NULL, 'kkSV7P9M', 'add', NULL),
('521H0127', 'Jake_127', '0123456127', '521H0127@student.tdtu.edu.vn', NULL, '19F4GERo', 'add', NULL),
('521H0128', 'Jake_128', '0123456128', '521H0128@student.tdtu.edu.vn', NULL, 'Km7csiU1', 'add', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `r1_2`
--

CREATE TABLE `r1_2` (
  `R1_2ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `ranks` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r1_2`
--

INSERT INTO `r1_2` (`R1_2ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `ranks`) VALUES
('R1001', '521H0049', '521H0005', '521H0005', '521H0049', '1', '0', 'RA001'),
('R1002', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `r2`
--

CREATE TABLE `r2` (
  `R2ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `R2_R1ID` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r2`
--

INSERT INTO `r2` (`R2ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `R2_R1ID`) VALUES
('R2001', '521H0001', NULL, '521H0049', '521H0002', '1', '0', 'R1001'),
('R2002', '521H0012', '521H0005', '521H0005', '521H0012', '3', '2', 'R1001'),
('R2003', NULL, NULL, NULL, NULL, NULL, NULL, 'R1002'),
('R2004', NULL, NULL, NULL, NULL, NULL, NULL, 'R1002');

-- --------------------------------------------------------

--
-- Table structure for table `r3_4`
--

CREATE TABLE `r3_4` (
  `R3_4ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `ranks` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r3_4`
--

INSERT INTO `r3_4` (`R3_4ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `ranks`) VALUES
('R3001', '521H0002', '521H0012', '521H0002', '521H0012', '3', '2', 'RA002'),
('R3002', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `r4`
--

CREATE TABLE `r4` (
  `R4ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `R4_R2ID` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r4`
--

INSERT INTO `r4` (`R4ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `R4_R2ID`) VALUES
('R4001', '521H0001', '521H0027', '521H0001', '521H0027', '1', '0', 'R2001'),
('R4002', NULL, NULL, NULL, NULL, NULL, NULL, 'R2001'),
('R4003', NULL, NULL, NULL, NULL, NULL, NULL, 'R2002'),
('R4004', NULL, NULL, NULL, NULL, NULL, NULL, 'R2002'),
('R4005', NULL, NULL, NULL, NULL, NULL, NULL, 'R2003'),
('R4006', NULL, NULL, NULL, NULL, NULL, NULL, 'R2003'),
('R4007', NULL, NULL, NULL, NULL, NULL, NULL, 'R2004'),
('R4008', NULL, NULL, NULL, NULL, NULL, NULL, 'R2004');

-- --------------------------------------------------------

--
-- Table structure for table `r8`
--

CREATE TABLE `r8` (
  `R8ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `R8_R4ID` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r8`
--

INSERT INTO `r8` (`R8ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `R8_R4ID`) VALUES
('R8001', '521H0010', '521H0001', '521H0001', '521H0010', '2', '1', 'R4001'),
('R8002', '521H0015', '521H0027', '521H0027', '521H0015', '4', '2', 'R4001'),
('R8003', NULL, NULL, NULL, NULL, NULL, NULL, 'R4002'),
('R8004', NULL, NULL, NULL, NULL, NULL, NULL, 'R4002'),
('R8005', NULL, NULL, NULL, NULL, NULL, NULL, 'R4003'),
('R8006', NULL, NULL, NULL, NULL, NULL, NULL, 'R4003'),
('R8007', NULL, NULL, NULL, NULL, NULL, NULL, 'R4004'),
('R8008', NULL, NULL, NULL, NULL, NULL, NULL, 'R4004'),
('R8009', NULL, NULL, NULL, NULL, NULL, NULL, 'R4005'),
('R8010', NULL, NULL, NULL, NULL, NULL, NULL, 'R4005'),
('R8011', NULL, NULL, NULL, NULL, NULL, NULL, 'R4006'),
('R8012', NULL, NULL, NULL, NULL, NULL, NULL, 'R4006'),
('R8013', NULL, NULL, NULL, NULL, NULL, NULL, 'R4007'),
('R8014', NULL, NULL, NULL, NULL, NULL, NULL, 'R4007'),
('R8015', NULL, NULL, NULL, NULL, NULL, NULL, 'R4008'),
('R8016', NULL, NULL, NULL, NULL, NULL, NULL, 'R4008');

-- --------------------------------------------------------

--
-- Table structure for table `r16`
--

CREATE TABLE `r16` (
  `R16ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `R16_R8ID` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r16`
--

INSERT INTO `r16` (`R16ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `R16_R8ID`) VALUES
('R16001', '521H0001', '521H0004', '521H0001', '521H0004', '1', '0', 'R8001'),
('R16002', '521H0009', '521H0010', '521H0010', '521H0009', '2', '0', 'R8001'),
('R16003', '521H0015', '521H0036', '521H0015', '521H0036', '1', '0', 'R8002'),
('R16004', '521H0022', '521H0027', '521H0027', '521H0022', '3', '0', 'R8002'),
('R16005', NULL, NULL, NULL, NULL, '', NULL, 'R8003'),
('R16006', NULL, NULL, NULL, NULL, '', NULL, 'R8003'),
('R16007', NULL, NULL, NULL, NULL, '', NULL, 'R8004'),
('R16008', NULL, NULL, NULL, NULL, '', NULL, 'R8004'),
('R16009', NULL, NULL, NULL, NULL, '', NULL, 'R8005'),
('R16010', NULL, NULL, NULL, NULL, '', NULL, 'R8005'),
('R16011', NULL, NULL, NULL, NULL, '', NULL, 'R8006'),
('R16012', NULL, NULL, NULL, NULL, '', NULL, 'R8006'),
('R16013', NULL, NULL, NULL, NULL, '', NULL, 'R8007'),
('R16014', NULL, NULL, NULL, NULL, '', NULL, 'R8007'),
('R16015', NULL, NULL, NULL, NULL, '', NULL, 'R8008'),
('R16016', NULL, NULL, NULL, NULL, '', NULL, 'R8008'),
('R16017', NULL, NULL, NULL, NULL, '', NULL, 'R8009'),
('R16018', NULL, NULL, NULL, NULL, '', NULL, 'R8009'),
('R16019', NULL, NULL, NULL, NULL, '', NULL, 'R8010'),
('R16020', NULL, NULL, NULL, NULL, '', NULL, 'R8010'),
('R16021', NULL, NULL, NULL, NULL, '', NULL, 'R8011'),
('R16022', NULL, NULL, NULL, NULL, '', NULL, 'R8011'),
('R16023', NULL, NULL, NULL, NULL, '', NULL, 'R8012'),
('R16024', NULL, NULL, NULL, NULL, '', NULL, 'R8012'),
('R16025', NULL, NULL, NULL, NULL, '', NULL, 'R8013'),
('R16026', NULL, NULL, NULL, NULL, '', NULL, 'R8013'),
('R16027', NULL, NULL, NULL, NULL, '', NULL, 'R8014'),
('R16028', NULL, NULL, NULL, NULL, '', NULL, 'R8014'),
('R16029', NULL, NULL, NULL, NULL, '', NULL, 'R8015'),
('R16030', NULL, NULL, NULL, NULL, '', NULL, 'R8015'),
('R16031', NULL, NULL, NULL, NULL, '', NULL, 'R8016'),
('R16032', NULL, NULL, NULL, NULL, '', NULL, 'R8016');

-- --------------------------------------------------------

--
-- Table structure for table `r32`
--

CREATE TABLE `r32` (
  `R32ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `R32_R16ID` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r32`
--

INSERT INTO `r32` (`R32ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `R32_R16ID`) VALUES
('R32001', '521H0002', '521H0001', '521H0001', '521H0002', NULL, NULL, 'R16001'),
('R32002', '521H0003', '521H0008', '521H0004', '521H0008', NULL, NULL, 'R16001'),
('R32003', '521H0007', '521H0009', '521H0009', '521H0007', '1', '0', 'R16002'),
('R32004', '521H0010', '521H0021', '521H0010', '521H0021', '3', '0', 'R16002'),
('R32005', '521H0015', '521H0018', '521H0015', '521H0018', '2', '1', 'R16003'),
('R32006', '521H0024', '521H0036', '521H0036', '521H0024', '1', '0', 'R16003'),
('R32007', '521H0022', '521H0032', '521H0022', '521H0032', '1', '0', 'R16004'),
('R32008', '521H0043', '521H0027', '521H0027', '521H0043', '3', '0', 'R16004'),
('R32009', '521H0038', '521H0014', NULL, NULL, NULL, NULL, 'R16005'),
('R32010', '521H0048', '521H0054', NULL, NULL, NULL, NULL, 'R16005'),
('R32011', '521H0045', '521H0056', NULL, NULL, NULL, NULL, 'R16006'),
('R32012', '521H0017', '521H0060', NULL, NULL, NULL, NULL, 'R16006'),
('R32013', '521H0055', '521H0033', NULL, NULL, NULL, NULL, 'R16007'),
('R32014', '521H0059', '521H0066', NULL, NULL, NULL, NULL, 'R16007'),
('R32015', NULL, NULL, NULL, NULL, NULL, NULL, 'R16008'),
('R32016', NULL, NULL, NULL, NULL, NULL, NULL, 'R16008'),
('R32017', NULL, NULL, NULL, NULL, NULL, NULL, 'R16009'),
('R32018', NULL, NULL, NULL, NULL, NULL, NULL, 'R16009'),
('R32019', NULL, NULL, NULL, NULL, NULL, NULL, 'R16010'),
('R32020', NULL, NULL, NULL, NULL, NULL, NULL, 'R16010'),
('R32021', NULL, NULL, NULL, NULL, NULL, NULL, 'R16011'),
('R32022', NULL, NULL, NULL, NULL, NULL, NULL, 'R16011'),
('R32023', NULL, NULL, NULL, NULL, NULL, NULL, 'R16012'),
('R32024', NULL, NULL, NULL, NULL, NULL, NULL, 'R16012'),
('R32025', NULL, NULL, NULL, NULL, NULL, NULL, 'R16013'),
('R32026', NULL, NULL, NULL, NULL, NULL, NULL, 'R16013'),
('R32027', NULL, NULL, NULL, NULL, NULL, NULL, 'R16014'),
('R32028', NULL, NULL, NULL, NULL, NULL, NULL, 'R16014'),
('R32029', NULL, NULL, NULL, NULL, NULL, NULL, 'R16015'),
('R32030', NULL, NULL, NULL, NULL, NULL, NULL, 'R16015'),
('R32031', NULL, NULL, NULL, NULL, NULL, NULL, 'R16016'),
('R32032', NULL, NULL, NULL, NULL, NULL, NULL, 'R16016'),
('R32033', NULL, NULL, NULL, NULL, NULL, NULL, 'R16017'),
('R32034', NULL, NULL, NULL, NULL, NULL, NULL, 'R16017'),
('R32035', NULL, NULL, NULL, NULL, NULL, NULL, 'R16018'),
('R32036', NULL, NULL, NULL, NULL, NULL, NULL, 'R16018'),
('R32037', NULL, NULL, NULL, NULL, NULL, NULL, 'R16019'),
('R32038', NULL, NULL, NULL, NULL, NULL, NULL, 'R16019'),
('R32039', NULL, NULL, NULL, NULL, NULL, NULL, 'R16020'),
('R32040', NULL, NULL, NULL, NULL, NULL, NULL, 'R16020'),
('R32041', NULL, NULL, NULL, NULL, NULL, NULL, 'R16021'),
('R32042', NULL, NULL, NULL, NULL, NULL, NULL, 'R16021'),
('R32043', NULL, NULL, NULL, NULL, NULL, NULL, 'R16022'),
('R32044', NULL, NULL, NULL, NULL, NULL, NULL, 'R16022'),
('R32045', NULL, NULL, NULL, NULL, NULL, NULL, 'R16023'),
('R32046', NULL, NULL, NULL, NULL, NULL, NULL, 'R16023'),
('R32047', NULL, NULL, NULL, NULL, NULL, NULL, 'R16024'),
('R32048', NULL, NULL, NULL, NULL, NULL, NULL, 'R16024'),
('R32049', NULL, NULL, NULL, NULL, NULL, NULL, 'R16025'),
('R32050', NULL, NULL, NULL, NULL, NULL, NULL, 'R16025'),
('R32051', NULL, NULL, NULL, NULL, NULL, NULL, 'R16026'),
('R32052', NULL, NULL, NULL, NULL, NULL, NULL, 'R16026'),
('R32053', NULL, NULL, NULL, NULL, NULL, NULL, 'R16027'),
('R32054', NULL, NULL, NULL, NULL, NULL, NULL, 'R16027'),
('R32055', NULL, NULL, NULL, NULL, NULL, NULL, 'R16028'),
('R32056', NULL, NULL, NULL, NULL, NULL, NULL, 'R16028'),
('R32057', NULL, NULL, NULL, NULL, NULL, NULL, 'R16029'),
('R32058', NULL, NULL, NULL, NULL, NULL, NULL, 'R16029'),
('R32059', NULL, NULL, NULL, NULL, NULL, NULL, 'R16030'),
('R32060', NULL, NULL, NULL, NULL, NULL, NULL, 'R16030'),
('R32061', NULL, NULL, NULL, NULL, NULL, NULL, 'R16031'),
('R32062', NULL, NULL, NULL, NULL, NULL, NULL, 'R16031'),
('R32063', NULL, NULL, NULL, NULL, NULL, NULL, 'R16032'),
('R32064', NULL, NULL, NULL, NULL, NULL, NULL, 'R16032');

-- --------------------------------------------------------

--
-- Table structure for table `r64`
--

CREATE TABLE `r64` (
  `R64ID` varchar(500) NOT NULL,
  `player1` varchar(500) DEFAULT NULL,
  `player2` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `lose_id` varchar(500) DEFAULT NULL,
  `winner_result` varchar(500) DEFAULT NULL,
  `loser_result` varchar(500) DEFAULT NULL,
  `R64_R32ID` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r64`
--

INSERT INTO `r64` (`R64ID`, `player1`, `player2`, `winner_id`, `lose_id`, `winner_result`, `loser_result`, `R64_R32ID`) VALUES
('R64001', '521H0001', '521H0005', '521H0001', '521H0005', '3', '0', 'R32001'),
('R64002', '521H0002', '521H0006', '521H0002', '521H0006', '5', '1', 'R32001'),
('R64003', '521H0003', '521H0004', '521H0003', '521H0004', '2', '0', 'R32002'),
('R64004', '521H0008', '521H0020', '521H0008', '521H0020', '1', '0', 'R32002'),
('R64005', '521H0007', '521H0011', '521H0007', '521H0011', '2', '0', 'R32003'),
('R64006', '521H0009', '521H0016', '521H0009', '521H0016', '3', '0', 'R32003'),
('R64007', '521H0010', '521H0019', '521H0010', '521H0019', '1', '0', 'R32004'),
('R64008', '521H0021', '521H0012', '521H0021', '521H0012', '3', '0', 'R32004'),
('R64009', '521H0015', '521H0028', '521H0015', '521H0028', '4', '0', 'R32005'),
('R64010', '521H0018', '521H0031', '521H0018', '521H0031', '1', '0', 'R32005'),
('R64011', '521H0024', '521H0035', '521H0024', '521H0035', '2', '0', 'R32006'),
('R64012', '521H0025', '521H0036', '521H0036', '521H0025', '1', '0', 'R32006'),
('R64013', '521H0022', '521H0037', '521H0022', '521H0037', '3', '0', 'R32007'),
('R64014', '521H0013', '521H0032', '521H0032', '521H0013', '1', '0', 'R32007'),
('R64015', '521H0023', '521H0043', '521H0043', '521H0023', '2', '0', 'R32008'),
('R64016', '521H0027', '521H0041', '521H0027', '521H0041', '5', '0', 'R32008'),
('R64017', '521H0029', '521H0038', '521H0038', '521H0029', '1', '0', 'R32009'),
('R64018', '521H0014', '521H0049', '521H0014', '521H0049', '2', '0', 'R32009'),
('R64019', '521H0048', '521H0051', '521H0048', '521H0051', '2', '1', 'R32010'),
('R64020', '521H0054', '521H0050', '521H0054', '521H0050', '5', '3', 'R32010'),
('R64021', '521H0045', '521H0042', '521H0045', '521H0042', '2', '0', 'R32011'),
('R64022', '521H0056', '521H0052', '521H0056', '521H0052', '1', '0', 'R32011'),
('R64023', '521H0053', '521H0017', '521H0017', '521H0053', '3', '0', 'R32012'),
('R64024', '521H0060', '521H0026', '521H0060', '521H0026', '3', '0', 'R32012'),
('R64025', '521H0055', '521H0030', '521H0055', '521H0030', '3(4)', '3(2)', 'R32013'),
('R64026', '521H0057', '521H0033', '521H0033', '521H0057', '1', '0', 'R32013'),
('R64027', '521H0059', '521H0034', '521H0059', '521H0034', '2', '1', 'R32014'),
('R64028', '521H0039', '521H0066', '521H0066', '521H0039', '1', '0', 'R32014'),
('R64029', '521H0070', '521H0040', NULL, NULL, NULL, NULL, 'R32015'),
('R64030', '521H0071', '521H0063', NULL, NULL, NULL, NULL, 'R32015'),
('R64031', '521H0069', '521H0044', NULL, NULL, NULL, NULL, 'R32016'),
('R64032', '521H0075', '521H0046', NULL, NULL, NULL, NULL, 'R32016'),
('R64033', '521H0074', '521H0047', NULL, NULL, NULL, NULL, 'R32017'),
('R64034', '521H0077', '521H0058', NULL, NULL, NULL, NULL, 'R32017'),
('R64035', '521H0061', '521H0079', NULL, NULL, NULL, NULL, 'R32018'),
('R64036', '521H0086', '521H0062', NULL, NULL, NULL, NULL, 'R32018'),
('R64037', '521H0064', '521H0089', NULL, NULL, NULL, NULL, 'R32019'),
('R64038', '521H0065', '521H0087', NULL, NULL, NULL, NULL, 'R32019'),
('R64039', '521H0067', '521H0095', NULL, NULL, NULL, NULL, 'R32020'),
('R64040', '521H0068', '521H0092', NULL, NULL, NULL, NULL, 'R32020'),
('R64041', '521H0072', '521H0096', NULL, NULL, NULL, NULL, 'R32021'),
('R64042', '521H0073', '521H0097', NULL, NULL, NULL, NULL, 'R32021'),
('R64043', '521H0076', '521H0098', NULL, NULL, NULL, NULL, 'R32022'),
('R64044', '521H0078', '521H0091', NULL, NULL, NULL, NULL, 'R32022'),
('R64045', '521H0080', '521H0101', NULL, NULL, NULL, NULL, 'R32023'),
('R64046', '521H0081', '521H0100', NULL, NULL, NULL, NULL, 'R32023'),
('R64047', '521H0105', '521H0082', NULL, NULL, NULL, NULL, 'R32024'),
('R64048', '521H0083', '521H0103', NULL, NULL, NULL, NULL, 'R32024'),
('R64049', '521H0111', '521H0110', NULL, NULL, NULL, NULL, 'R32025'),
('R64050', '521H0084', '521H0114', NULL, NULL, NULL, NULL, 'R32025'),
('R64051', '521H0094', '521H0085', NULL, NULL, NULL, NULL, 'R32026'),
('R64052', '521H0088', '521H0112', NULL, NULL, NULL, NULL, 'R32026'),
('R64053', '521H0121', '521H0090', NULL, NULL, NULL, NULL, 'R32027'),
('R64054', '521H0093', '521H0117', NULL, NULL, NULL, NULL, 'R32027'),
('R64055', '521H0120', '521H0099', NULL, NULL, NULL, NULL, 'R32028'),
('R64056', '521H0102', '521H0119', NULL, NULL, NULL, NULL, 'R32028'),
('R64057', '521H0122', '521H0104', NULL, NULL, NULL, NULL, 'R32029'),
('R64058', '521H0106', '521H0118', NULL, NULL, NULL, NULL, 'R32029'),
('R64059', '521H0107', '521H0113', NULL, NULL, NULL, NULL, 'R32030'),
('R64060', '521H0115', '521H0108', NULL, NULL, NULL, NULL, 'R32030'),
('R64061', '521H0109', '521H0116', NULL, NULL, NULL, NULL, 'R32031'),
('R64062', '521H0123', '521H0125', NULL, NULL, NULL, NULL, 'R32031'),
('R64063', '521H0124', '521H0127', NULL, NULL, NULL, NULL, 'R32032'),
('R64064', '521H0128', '521H0126', NULL, NULL, NULL, NULL, 'R32032'),
('R64065', NULL, NULL, NULL, NULL, NULL, NULL, 'R32033'),
('R64066', NULL, NULL, NULL, NULL, NULL, NULL, 'R32033'),
('R64067', NULL, NULL, NULL, NULL, NULL, NULL, 'R32034'),
('R64068', NULL, NULL, NULL, NULL, NULL, NULL, 'R32034'),
('R64069', NULL, NULL, NULL, NULL, NULL, NULL, 'R32035'),
('R64070', NULL, NULL, NULL, NULL, NULL, NULL, 'R32035'),
('R64071', NULL, NULL, NULL, NULL, NULL, NULL, 'R32036'),
('R64072', NULL, NULL, NULL, NULL, NULL, NULL, 'R32036'),
('R64073', NULL, NULL, NULL, NULL, NULL, NULL, 'R32037'),
('R64074', NULL, NULL, NULL, NULL, NULL, NULL, 'R32037'),
('R64075', NULL, NULL, NULL, NULL, NULL, NULL, 'R32038'),
('R64076', NULL, NULL, NULL, NULL, NULL, NULL, 'R32038'),
('R64077', NULL, NULL, NULL, NULL, NULL, NULL, 'R32039'),
('R64078', NULL, NULL, NULL, NULL, NULL, NULL, 'R32039'),
('R64079', NULL, NULL, NULL, NULL, NULL, NULL, 'R32040'),
('R64080', NULL, NULL, NULL, NULL, NULL, NULL, 'R32040'),
('R64081', NULL, NULL, NULL, NULL, NULL, NULL, 'R32041'),
('R64082', NULL, NULL, NULL, NULL, NULL, NULL, 'R32041'),
('R64083', NULL, NULL, NULL, NULL, NULL, NULL, 'R32042'),
('R64084', NULL, NULL, NULL, NULL, NULL, NULL, 'R32042'),
('R64085', NULL, NULL, NULL, NULL, NULL, NULL, 'R32043'),
('R64086', NULL, NULL, NULL, NULL, NULL, NULL, 'R32043'),
('R64087', NULL, NULL, NULL, NULL, NULL, NULL, 'R32044'),
('R64088', NULL, NULL, NULL, NULL, NULL, NULL, 'R32044'),
('R64089', NULL, NULL, NULL, NULL, NULL, NULL, 'R32045'),
('R64090', NULL, NULL, NULL, NULL, NULL, NULL, 'R32045'),
('R64091', NULL, NULL, NULL, NULL, NULL, NULL, 'R32046'),
('R64092', NULL, NULL, NULL, NULL, NULL, NULL, 'R32046'),
('R64093', NULL, NULL, NULL, NULL, NULL, NULL, 'R32047'),
('R64094', NULL, NULL, NULL, NULL, NULL, NULL, 'R32047'),
('R64095', NULL, NULL, NULL, NULL, NULL, NULL, 'R32048'),
('R64096', NULL, NULL, NULL, NULL, NULL, NULL, 'R32048'),
('R64097', NULL, NULL, NULL, NULL, NULL, NULL, 'R32049'),
('R64098', NULL, NULL, NULL, NULL, NULL, NULL, 'R32049'),
('R64099', NULL, NULL, NULL, NULL, NULL, NULL, 'R32050'),
('R64100', NULL, NULL, NULL, NULL, NULL, NULL, 'R32050'),
('R64101', NULL, NULL, NULL, NULL, NULL, NULL, 'R32051'),
('R64102', NULL, NULL, NULL, NULL, NULL, NULL, 'R32051'),
('R64103', NULL, NULL, NULL, NULL, NULL, NULL, 'R32052'),
('R64104', NULL, NULL, NULL, NULL, NULL, NULL, 'R32052'),
('R64105', NULL, NULL, NULL, NULL, NULL, NULL, 'R32053'),
('R64106', NULL, NULL, NULL, NULL, NULL, NULL, 'R32053'),
('R64107', NULL, NULL, NULL, NULL, NULL, NULL, 'R32054'),
('R64108', NULL, NULL, NULL, NULL, NULL, NULL, 'R32054'),
('R64109', NULL, NULL, NULL, NULL, NULL, NULL, 'R32055'),
('R64110', NULL, NULL, NULL, NULL, NULL, NULL, 'R32055'),
('R64111', NULL, NULL, NULL, NULL, NULL, NULL, 'R32056'),
('R64112', NULL, NULL, NULL, NULL, NULL, NULL, 'R32056'),
('R64113', NULL, NULL, NULL, NULL, NULL, NULL, 'R32057'),
('R64114', NULL, NULL, NULL, NULL, NULL, NULL, 'R32057'),
('R64115', NULL, NULL, NULL, NULL, NULL, NULL, 'R32058'),
('R64116', NULL, NULL, NULL, NULL, NULL, NULL, 'R32058'),
('R64117', NULL, NULL, NULL, NULL, NULL, NULL, 'R32059'),
('R64118', NULL, NULL, NULL, NULL, NULL, NULL, 'R32059'),
('R64119', NULL, NULL, NULL, NULL, NULL, NULL, 'R32060'),
('R64120', NULL, NULL, NULL, NULL, NULL, NULL, 'R32060'),
('R64121', NULL, NULL, NULL, NULL, NULL, NULL, 'R32061'),
('R64122', NULL, NULL, NULL, NULL, NULL, NULL, 'R32061'),
('R64123', NULL, NULL, NULL, NULL, NULL, NULL, 'R32062'),
('R64124', NULL, NULL, NULL, NULL, NULL, NULL, 'R32062'),
('R64125', NULL, NULL, NULL, NULL, NULL, NULL, 'R32063'),
('R64126', NULL, NULL, NULL, NULL, NULL, NULL, 'R32063'),
('R64127', NULL, NULL, NULL, NULL, NULL, NULL, 'R32064'),
('R64128', NULL, NULL, NULL, NULL, NULL, NULL, 'R32064');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `Ranks_ID` varchar(500) NOT NULL,
  `round` varchar(500) DEFAULT NULL,
  `winner_id` varchar(500) DEFAULT NULL,
  `loser_id` varchar(500) DEFAULT NULL,
  `top_winner` varchar(500) DEFAULT NULL,
  `top_loser` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`Ranks_ID`, `round`, `winner_id`, `loser_id`, `top_winner`, `top_loser`) VALUES
('RA001', 'r1_2', '521H0005', '521H0049', '1', '2'),
('RA002', 'r3_4', '521H0002', '521H0012', '3', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_account`
--
ALTER TABLE `ad_account`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `r1_2`
--
ALTER TABLE `r1_2`
  ADD PRIMARY KEY (`R1_2ID`);

--
-- Indexes for table `r2`
--
ALTER TABLE `r2`
  ADD PRIMARY KEY (`R2ID`);

--
-- Indexes for table `r3_4`
--
ALTER TABLE `r3_4`
  ADD PRIMARY KEY (`R3_4ID`);

--
-- Indexes for table `r4`
--
ALTER TABLE `r4`
  ADD PRIMARY KEY (`R4ID`);

--
-- Indexes for table `r8`
--
ALTER TABLE `r8`
  ADD PRIMARY KEY (`R8ID`);

--
-- Indexes for table `r16`
--
ALTER TABLE `r16`
  ADD PRIMARY KEY (`R16ID`);

--
-- Indexes for table `r32`
--
ALTER TABLE `r32`
  ADD PRIMARY KEY (`R32ID`);

--
-- Indexes for table `r64`
--
ALTER TABLE `r64`
  ADD PRIMARY KEY (`R64ID`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`Ranks_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
