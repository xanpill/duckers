-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 05:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demotep`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `bnum` varchar(50) NOT NULL,
  `upimg` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `fname`, `lname`, `bnum`, `upimg`, `created_at`, `updated_at`) VALUES
(1, '#', '#', '#', '/img/bannerFN.png', '2023-02-11 07:48:46', '2024-08-22 03:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `boxlog`
--

CREATE TABLE `boxlog` (
  `id` int(11) NOT NULL,
  `date` datetime(2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `prize_name` varchar(255) NOT NULL,
  `uid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `box_product`
--

CREATE TABLE `box_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `price_vip` int(11) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_3` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_4` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_5` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_6` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_7` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_8` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_9` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `img_10` varchar(255) NOT NULL DEFAULT 'https://dedazen.store/assets/img/noimg.jpg',
  `type` int(11) NOT NULL DEFAULT 0,
  `percent` int(3) NOT NULL DEFAULT 100,
  `salt_prize` varchar(255) NOT NULL DEFAULT 'ไม่ได้รับรางวัล',
  `c_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `box_product`
--

INSERT INTO `box_product` (`id`, `name`, `price`, `price_vip`, `des`, `img`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `img_9`, `img_10`, `type`, `percent`, `salt_prize`, `c_type`) VALUES
(1, 'Tester', 999, 0, 'Tester Product NEW', '/img/product.png', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 'https://dedazen.store/assets/img/noimg.jpg', 1, 100, 'ไม่ได้รับรางวัล', 'Youku');

-- --------------------------------------------------------

--
-- Table structure for table `box_stock`
--

CREATE TABLE `box_stock` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(3) NOT NULL,
  `p_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `box_stock`
--

INSERT INTO `box_stock` (`id`, `username`, `password`, `p_id`) VALUES
(1080, '𓂂𓏸*꙳ 𝐥𝐪𝐢𝐲𝐢 𝐠𝐨𝐥𝐝 𝐩𝐫𝐞𝐦𝐢𝐮𝐦 𝟑𝟎 𝐝𝐚𝐲 🌻<br>♡𝐦𝐚𝐢𝐥 : 0647061936 <br>♡𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝 : Uy639542<br>♡𝐞𝐱𝐩 𝐝𝐚𝐭𝐞 : 24/07/24<br>🎀เข้าระบบผ่านเมล-พาสปกติ<br>📍หากขึ้นว่าอุปกรณ์เต็มให้รอน้า ทางร้านหาร 4 ดูพร้อมกันได้ 2 จอคับ', 0, '51'),
(1117, ' ༉‧♡ 𝐖𝐞𝐭𝐯 𝐕𝐈𝐏 𝟑𝟎 𝐃𝐚𝐲𝐬 🖇️🧤 <br>♡𝐦𝐚𝐢𝐥 : 0939785057 <br>♡𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝: Fi639542<br>♡𝐞𝐱𝐩 𝐝𝐚𝐭𝐞 : 25/07/24<br>❌ห้ามเปลี่ยนรหัส,เมล เด็ดขาด!❌<br>🌼 เป็นการหารรวม ประวัติการดูจะทับซ้อนกันนะงับเเนะนำให้ดูให้จบหรือโหลดเก็บไว้นะคะ', 0, '56'),
(1118, ' ༉‧♡ 𝐖𝐞𝐭𝐯 𝐕𝐈𝐏 𝟑𝟎 𝐃𝐚𝐲𝐬 🖇️🧤 <br>♡𝐦𝐚𝐢𝐥 : 0939785057 <br>♡𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝: Fi639542<br>♡𝐞𝐱𝐩 𝐝𝐚𝐭𝐞 : 25/07/24<br>❌ห้ามเปลี่ยนรหัส,เมล เด็ดขาด!❌<br>🌼 เป็นการหารรวม ประวัติการดูจะทับซ้อนกันนะงับเเนะนำให้ดูให้จบหรือโหลดเก็บไว้นะคะ', 0, '56'),
(1119, ' ༉‧♡ 𝐖𝐞𝐭𝐯 𝐕𝐈𝐏 𝟑𝟎 𝐃𝐚𝐲𝐬 🖇️🧤 <br>♡𝐦𝐚𝐢𝐥 : 0939785057 <br>♡𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝: Fi639542<br>♡𝐞𝐱𝐩 𝐝𝐚𝐭𝐞 : 25/07/24<br>❌ห้ามเปลี่ยนรหัส,เมล เด็ดขาด!❌<br>🌼 เป็นการหารรวม ประวัติการดูจะทับซ้อนกันนะงับเเนะนำให้ดูให้จบหรือโหลดเก็บไว้นะคะ', 0, '56'),
(1120, ' ༉‧♡ 𝐖𝐞𝐭𝐯 𝐕𝐈𝐏 𝟑𝟎 𝐃𝐚𝐲𝐬 🖇️🧤 <br>♡𝐦𝐚𝐢𝐥 : 0939785057 <br>♡𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝: Fi639542<br>♡𝐞𝐱𝐩 𝐝𝐚𝐭𝐞 : 25/07/24<br>❌ห้ามเปลี่ยนรหัส,เมล เด็ดขาด!❌<br>🌼 เป็นการหารรวม ประวัติการดูจะทับซ้อนกันนะงับเเนะนำให้ดูให้จบหรือโหลดเก็บไว้นะคะ', 0, '56'),
(1121, ' ༉‧♡ 𝐖𝐞𝐭𝐯 𝐕𝐈𝐏 𝟑𝟎 𝐃𝐚𝐲𝐬 🖇️🧤 <br>♡𝐦𝐚𝐢𝐥 : 0939785057 <br>♡𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝: Fi639542<br>♡𝐞𝐱𝐩 𝐝𝐚𝐭𝐞 : 25/07/24<br>❌ห้ามเปลี่ยนรหัส,เมล เด็ดขาด!❌<br>🌼 เป็นการหารรวม ประวัติการดูจะทับซ้อนกันนะงับเเนะนำให้ดูให้จบหรือโหลดเก็บไว้นะคะ', 0, '56'),
(1122, ' ༉‧♡ 𝐖𝐞𝐭𝐯 𝐕𝐈𝐏 𝟑𝟎 𝐃𝐚𝐲𝐬 🖇️🧤 <br>♡𝐦𝐚𝐢𝐥 : 0939785057 <br>♡𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝: Fi639542<br>♡𝐞𝐱𝐩 𝐝𝐚𝐭𝐞 : 25/07/24<br>❌ห้ามเปลี่ยนรหัส,เมล เด็ดขาด!❌<br>🌼 เป็นการหารรวม ประวัติการดูจะทับซ้อนกันนะงับเเนะนำให้ดูให้จบหรือโหลดเก็บไว้นะคะ', 0, '56');

-- --------------------------------------------------------

--
-- Table structure for table `byshop`
--

CREATE TABLE `byshop` (
  `status` varchar(255) NOT NULL,
  `apikey` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `byshop`
--

INSERT INTO `byshop` (`status`, `apikey`, `cost`) VALUES
('on', '#', '10');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `link`) VALUES
(8, '/img/bannerFN.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `des`, `img`) VALUES
(20, 'Test New Product', '✔️Newtest\n✔️ทดสอบสินค้า', '/img/bannerFN.png');

-- --------------------------------------------------------

--
-- Table structure for table `crecom`
--

CREATE TABLE `crecom` (
  `recom_1` int(11) NOT NULL DEFAULT 0,
  `recom_2` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crecom`
--

INSERT INTO `crecom` (`recom_1`, `recom_2`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kbank_trans`
--

CREATE TABLE `kbank_trans` (
  `id` int(11) NOT NULL,
  `qr` varchar(255) NOT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `sender` varchar(100) DEFAULT NULL,
  `date` datetime(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recom`
--

CREATE TABLE `recom` (
  `recom_1` int(11) NOT NULL DEFAULT 0,
  `recom_2` int(11) NOT NULL DEFAULT 0,
  `recom_3` int(11) NOT NULL DEFAULT 0,
  `recom_4` int(11) NOT NULL DEFAULT 0,
  `recom_5` int(11) NOT NULL DEFAULT 0,
  `recom_6` int(11) NOT NULL DEFAULT 0,
  `recom_7` int(11) NOT NULL DEFAULT 0,
  `recom_8` int(11) NOT NULL DEFAULT 0,
  `recom_9` int(11) NOT NULL DEFAULT 0,
  `recom_10` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recom`
--

INSERT INTO `recom` (`recom_1`, `recom_2`, `recom_3`, `recom_4`, `recom_5`, `recom_6`, `recom_7`, `recom_8`, `recom_9`, `recom_10`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `redeem`
--

CREATE TABLE `redeem` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `max_count` int(11) NOT NULL,
  `prize` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redeem_his`
--

CREATE TABLE `redeem_his` (
  `id` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date` datetime(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_cate`
--

CREATE TABLE `service_cate` (
  `s_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_cate`
--

INSERT INTO `service_cate` (`s_id`, `name`, `des`, `img`) VALUES
(1, 'Dedazen1', 'Dedazen1', 'https://cdn.discordapp.com/attachments/1170981715506892801/1214644450085834823/dz05.png?ex=65f9dccb&is=65e767cb&hm=d084daecb0004b725f983626b7ad6dcbc20e70142ba9cbf767925e3446daebe8&'),
(2, 'Dedazen2', 'Dedazen2', 'https://cdn.discordapp.com/attachments/1170981715506892801/1214644450085834823/dz05.png?ex=65f9dccb&is=65e767cb&hm=d084daecb0004b725f983626b7ad6dcbc20e70142ba9cbf767925e3446daebe8&');

-- --------------------------------------------------------

--
-- Table structure for table `service_order`
--

CREATE TABLE `service_order` (
  `id` int(11) NOT NULL,
  `cosid` varchar(255) NOT NULL,
  `prod` varchar(255) NOT NULL,
  `user` mediumtext NOT NULL,
  `pass` mediumtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `del` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_prod`
--

CREATE TABLE `service_prod` (
  `id` int(11) NOT NULL,
  `cate` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_prod`
--

INSERT INTO `service_prod` (`id`, `cate`, `name`, `des`, `price`, `img`) VALUES
(1, 'Dedazen1', '11,091 เพชร [Diamond Freefire]', '11,091 เพชร [Diamond Freefire]', 2990, 'https://cdn.discordapp.com/attachments/1170981715506892801/1214644450085834823/dz05.png?ex=65f9dccb&is=65e767cb&hm=d084daecb0004b725f983626b7ad6dcbc20e70142ba9cbf767925e3446daebe8&'),
(3, 'Dedazen1', '1052 เพชร [Diamond Freefire]', '1052 เพชร [Diamond Freefire]', 290, 'https://cdn.discordapp.com/attachments/1170981715506892801/1214644450085834823/dz05.png?ex=65f9dccb&is=65e767cb&hm=d084daecb0004b725f983626b7ad6dcbc20e70142ba9cbf767925e3446daebe8&'),
(4, 'Dedazen1', '517 เพชร [Diamond Freefire]', '517 เพชร [Diamond Freefire]', 149, 'https://cdn.discordapp.com/attachments/1170981715506892801/1214644450085834823/dz05.png?ex=65f9dccb&is=65e767cb&hm=d084daecb0004b725f983626b7ad6dcbc20e70142ba9cbf767925e3446daebe8&'),
(5, 'Dedazen1', '309 เพชร [Diamond Freefire]', '309 เพชร [Diamond Freefire]', 90, 'https://cdn.discordapp.com/attachments/1170981715506892801/1214644450085834823/dz05.png?ex=65f9dccb&is=65e767cb&hm=d084daecb0004b725f983626b7ad6dcbc20e70142ba9cbf767925e3446daebe8&'),
(6, 'Dedazen1', '172 เพชร [Diamond Freefire]', '172 เพชร [Diamond Freefire]', 49, 'https://cdn.discordapp.com/attachments/1170981715506892801/1214644450085834823/dz05.png?ex=65f9dccb&is=65e767cb&hm=d084daecb0004b725f983626b7ad6dcbc20e70142ba9cbf767925e3446daebe8&');

-- --------------------------------------------------------

--
-- Table structure for table `service_setting`
--

CREATE TABLE `service_setting` (
  `status` varchar(255) NOT NULL,
  `mes` varchar(255) NOT NULL,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_setting`
--

INSERT INTO `service_setting` (`status`, `mes`, `img`) VALUES
('on', 'บริการเติม Roblox', 'https://cdn.discordapp.com/attachments/1155002379314413588/1173969648937619466/New_Project_20_Copy_2_EE53A6B.png?ex=6565e36f&is=65536e6f&hm=9b65ed1308b9d3c217f1650fe4e20a3fbab986d37ee51030a1364b2d1648a7cf&');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `wallet` varchar(255) NOT NULL,
  `fee` enum('on','off') NOT NULL DEFAULT 'off',
  `bg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ann` varchar(255) NOT NULL,
  `main_color` varchar(255) NOT NULL,
  `sec_color` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `date` datetime(2) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `webhook_dc` varchar(255) NOT NULL,
  `bg_ann` varchar(500) NOT NULL,
  `tx_ann` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`wallet`, `fee`, `bg`, `name`, `ann`, `main_color`, `sec_color`, `contact`, `des`, `date`, `ip`, `logo`, `webhook_dc`, `bg_ann`, `tx_ann`) VALUES
('#', 'off', '#', 'Finix Offz | จำหน่ายเว็บ Shop', 'Finix Offz  เริ่มต้นเพียง 3500.-', '#ffbb00', '#ffdd00', '#', '.-.', '2022-12-25 12:30:39.00', '::1', './img/logoweb_FinixOffz.png', '#', '/img/product.png', 'เปิดให้บริการแล้ววันนี้ที่  Finix Offz'),
('#', 'off', '#', 'Finix Offz | จำหน่ายเว็บ Shop', 'Finix Offz  เริ่มต้นเพียง 3500.-', '#ffbb00', '#ffdd00', '#', '.-.', '0000-00-00 00:00:00.00', '', './img/logoweb_FinixOffz.png', '#', '/img/product.png', 'เปิดให้บริการแล้ววันนี้ที่  Finix Offz');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `s_count` int(11) NOT NULL DEFAULT 2575,
  `b_count` int(11) NOT NULL DEFAULT 3525,
  `m_count` int(11) NOT NULL DEFAULT 5468,
  `last_change` datetime(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`s_count`, `b_count`, `m_count`, `last_change`) VALUES
(0, 1, 0, '2024-02-16 15:42:53.00');

-- --------------------------------------------------------

--
-- Table structure for table `topup_his`
--

CREATE TABLE `topup_his` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` datetime NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `point` float NOT NULL,
  `total` float NOT NULL,
  `pin` varchar(6) NOT NULL,
  `rank` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date`, `point`, `total`, `pin`, `rank`) VALUES
(1, 'aq123', 'ecd782f5b01daad7a13dba45ebd51c8e', '2024-08-22', 0, 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boxlog`
--
ALTER TABLE `boxlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box_product`
--
ALTER TABLE `box_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box_stock`
--
ALTER TABLE `box_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `kbank_trans`
--
ALTER TABLE `kbank_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeem`
--
ALTER TABLE `redeem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeem_his`
--
ALTER TABLE `redeem_his`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_cate`
--
ALTER TABLE `service_cate`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `service_order`
--
ALTER TABLE `service_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_prod`
--
ALTER TABLE `service_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup_his`
--
ALTER TABLE `topup_his`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boxlog`
--
ALTER TABLE `boxlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `box_product`
--
ALTER TABLE `box_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `box_stock`
--
ALTER TABLE `box_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1166;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kbank_trans`
--
ALTER TABLE `kbank_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redeem`
--
ALTER TABLE `redeem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `redeem_his`
--
ALTER TABLE `redeem_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_cate`
--
ALTER TABLE `service_cate`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_order`
--
ALTER TABLE `service_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_prod`
--
ALTER TABLE `service_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `topup_his`
--
ALTER TABLE `topup_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
