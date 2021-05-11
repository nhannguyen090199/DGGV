-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 08:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdl_dggv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `account` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `account`, `password`) VALUES
(1, 'admin', '$2a$10$hRu88IuWk7gfL0xNOGxKxeEeiF9t.D4vItzw8DXxyhIYFzc6j2uMO');

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id_row` int(11) NOT NULL,
  `ma_sv` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_gv` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_mon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_vande` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_tieuchi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`id_row`, `ma_sv`, `ma_gv`, `ma_mon`, `ma_vande`, `ma_tieuchi`, `diem`, `updated_at`, `created_at`) VALUES
(324, '1', '112362322', 'MH2', '1', '2', 2, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(325, '1', '112362322', 'MH2', '2', '1', 2, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(326, '1', '112362322', 'MH2', '3', '1', 2, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(327, '1', '112362322', 'MH2', '4', '2', 2, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(328, '1', '112362322', 'MH2', '5', '1', 2, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(329, '1', '112362322', 'MH2', '6', '2', 2, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(330, '1', '112362322', 'MH2', '7', '2', 2, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(331, '12', '2323', 'MH3', '1', '2', 2, '2021-01-03 06:48:09', '2021-01-03 06:48:09'),
(332, '12', '2323', 'MH3', '2', '1', 2, '2021-01-03 06:48:09', '2021-01-03 06:48:09'),
(333, '12', '2323', 'MH3', '3', '1', 2, '2021-01-03 06:48:09', '2021-01-03 06:48:09'),
(334, '12', '2323', 'MH3', '4', '2', 2, '2021-01-03 06:48:09', '2021-01-03 06:48:09'),
(335, '12', '2323', 'MH3', '5', '1', 2, '2021-01-03 06:48:09', '2021-01-03 06:48:09'),
(336, '12', '2323', 'MH3', '6', '2', 2, '2021-01-03 06:48:09', '2021-01-03 06:48:09'),
(337, '12', '2323', 'MH3', '7', '2', 3, '2021-01-03 06:48:09', '2021-01-03 06:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `gv_ma` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gv_ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gv_ngaysinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`gv_ma`, `gv_ten`, `gv_ngaysinh`) VALUES
('1123623', 'Lê Thị Hoa', '09/2/1990'),
('112362322', 'Hồng Thị Thị', '3/2/1989'),
('2323', 'Nguyễn thị hoa ', '3/2/1996');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `ma_mon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_mon` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_tin_chi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`ma_mon`, `ten_mon`, `so_tin_chi`) VALUES
('MH1', 'Cơ sở dữ liệu', 2),
('MH2', 'Lập trình hướng đối tượng', 2),
('MH3', 'C++', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phieu`
--

CREATE TABLE `phieu` (
  `id_phieu` int(11) NOT NULL,
  `ma_sv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_gv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_mon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem_tb` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phieu`
--

INSERT INTO `phieu` (`id_phieu`, `ma_sv`, `ma_gv`, `ma_mon`, `diem_tb`, `updated_at`, `created_at`) VALUES
(16, '1', '112362322', 'MH2', NULL, '2021-01-03 06:47:44', '2021-01-03 06:47:44'),
(17, '12', '2323', 'MH3', NULL, '2021-01-03 06:48:09', '2021-01-03 06:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `sinhvien_ma` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinhvien_ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinhvien_lop` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinhvien_ngaysinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `khoa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`sinhvien_ma`, `sinhvien_ten`, `sinhvien_lop`, `sinhvien_ngaysinh`, `password`, `gioitinh`, `khoa`) VALUES
('1', 'Nguyễn Quang Phúc', 'k67a', '09/09/1999', '$2a$10$pwCoX.fy6cikoGjoz5uhNezfjK5AeezvqqG/G6B.sPADzcJWl8tri', 1, 'Công nghệ thông tin'),
('12', 'Nguyễn Đức Nhân', 'k67b', '08/6/1999', '$2a$10$pwCoX.fy6cikoGjoz5uhNezfjK5AeezvqqG/G6B.sPADzcJWl8tri', 0, 'Công nghệ thông tin'),
('99', 'Cường Nguyễn', 'K67B', '02/3/1998', '$2a$10$y9hRkV/sZYuXn/cvpeusgulFfL9/Gt5bgSjAL72sd.L3A6E5/FvC2', 1, 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `thoi_khoa_bieu`
--

CREATE TABLE `thoi_khoa_bieu` (
  `id_row` int(11) NOT NULL,
  `ma_sv` int(11) NOT NULL,
  `ma_gv` int(11) NOT NULL,
  `ma_mon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thoi_khoa_bieu`
--

INSERT INTO `thoi_khoa_bieu` (`id_row`, `ma_sv`, `ma_gv`, `ma_mon`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 1123623, 'MH1', NULL, NULL, '2021-01-02 04:00:52'),
(2, 1, 112362322, 'MH2', 1, NULL, '2021-01-03 06:47:44'),
(3, 12, 1123623, 'MH2', NULL, NULL, '2021-01-03 06:12:36'),
(4, 99, 2323, 'MH3', NULL, NULL, '2021-01-03 06:40:46'),
(5, 12, 2323, 'MH3', 1, NULL, '2021-01-03 06:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `tieuchi`
--

CREATE TABLE `tieuchi` (
  `tieuchi_id` int(11) NOT NULL,
  `tieuchi_ten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tieuchi`
--

INSERT INTO `tieuchi` (`tieuchi_id`, `tieuchi_ten`, `updated_at`, `created_at`) VALUES
(1, 'Sáng tạo', NULL, NULL),
(2, 'Làm việc nhóm', '2021-01-03 10:49:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vande`
--

CREATE TABLE `vande` (
  `vande_id` int(11) NOT NULL,
  `vande_noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tc_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vande`
--

INSERT INTO `vande` (`vande_id`, `vande_noidung`, `tc_id`, `updated_at`, `created_at`) VALUES
(1, 'Giảng viên giới thiệu mục tiêu môn học, đề cương chi tiết của môn học đầy đủ và rõ ràng trước khi bắt đầu môn học', 2, NULL, NULL),
(2, 'Giảng viên giới thiệu khái quát nội dung giảng dạy môn học', 1, NULL, NULL),
(3, 'Giải thích phương pháp kiểm tra, đánh giá rõ ràng (thời điểm, nội dung, phương pháp kiểm tra, đánh giá)', 1, NULL, NULL),
(4, ' Sử dụng phối hợp các phương pháp dạy học khác nhau trong tiết học', 2, NULL, NULL),
(5, ' Kích thích học sinh tham gia tích cực vào các hoạt động trong tiết học', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id_row`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`gv_ma`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`ma_mon`);

--
-- Indexes for table `phieu`
--
ALTER TABLE `phieu`
  ADD PRIMARY KEY (`id_phieu`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`sinhvien_ma`);

--
-- Indexes for table `thoi_khoa_bieu`
--
ALTER TABLE `thoi_khoa_bieu`
  ADD PRIMARY KEY (`id_row`);

--
-- Indexes for table `tieuchi`
--
ALTER TABLE `tieuchi`
  ADD PRIMARY KEY (`tieuchi_id`);

--
-- Indexes for table `vande`
--
ALTER TABLE `vande`
  ADD PRIMARY KEY (`vande_id`),
  ADD KEY `tc_id` (`tc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id_row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `phieu`
--
ALTER TABLE `phieu`
  MODIFY `id_phieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `thoi_khoa_bieu`
--
ALTER TABLE `thoi_khoa_bieu`
  MODIFY `id_row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tieuchi`
--
ALTER TABLE `tieuchi`
  MODIFY `tieuchi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vande`
--
ALTER TABLE `vande`
  MODIFY `vande_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vande`
--
ALTER TABLE `vande`
  ADD CONSTRAINT `vande_ibfk_1` FOREIGN KEY (`tc_id`) REFERENCES `tieuchi` (`tieuchi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
