-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 01:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060567_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hovaten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` float DEFAULT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
('NV01', 'Nguyễn Văn Quyết', 'Giám đốc điều hành', 'Ban kiểm soát', 40000000, '0000-00-00'),
('NV02', 'Đoàn Thị Hồng Hạnh', 'Quản lý thông tin', 'Phòng quản lý', 25000000, '2017-12-06'),
('NV03', 'Bùi Tiến Đạt', 'Quản lý văn phòng', 'Phòng quản lý', 30000000, '2020-05-22'),
('NV04', 'Nguyễn Thị Hoàn', 'Quản lý nhân lực, nhân sự', 'Phòng quản lý', 21000000, '2020-03-07'),
('NV05', 'Nguyễn Thái Trí', 'Nhân viên kế toán', 'Phòng Kế toán', 15000000, '2021-01-12'),
('NV06', 'Nguyễn Quang Thắng', 'Đại diện bán hàng', 'Ban tiếp thị', 14500000, '2019-11-16'),
('NV07', 'Phùng Tuyết Lan', 'Giám đốc công nghệ', 'Ban kiểm soát', 26000000, '2015-10-22'),
('NV08', 'Nguyễn Thanh Liêm', 'Lễ tân', 'Bộ phận hành chính', 13000000, '2020-04-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
