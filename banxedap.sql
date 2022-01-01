-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2022 at 08:40 PM
-- Server version: 10.6.4-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banxedap`
--

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaKH` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoDH` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `NgayDat` datetime NOT NULL,
  `NgayGiao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`MaKH`, `SoDH`, `NgayDat`, `NgayGiao`) VALUES
('A2', '10', '2021-12-17 08:43:07', '2021-12-17 08:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaGH` int(11) NOT NULL,
  `MaSP` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` float NOT NULL,
  `Email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaSP` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `NgayLamHD` datetime NOT NULL,
  `TongGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaSP`, `NgayLamHD`, `TongGia`) VALUES
('S002', '002', '2021-12-17 08:40:48', 170000),
('S003', '003', '2021-12-17 08:40:48', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(150) COLLATE utf8mb3_unicode_ci NOT NULL,
  `TenKH` varchar(150) COLLATE utf8mb3_unicode_ci NOT NULL,
  `Matkhau` varchar(150) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Matkhau`) VALUES
('lehoangtrongtin@gmail.com', 'TinLe', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoai` int(50) NOT NULL,
  `TenLoai` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`) VALUES
(1, 'Xe leo núi'),
(2, 'Xe thể thao'),
(3, 'Xe đạp điện'),
(4, 'Xe vượt địa hình');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaQuyen` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `TenNV` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `GioiTinh` varchar(5) COLLATE utf8mb3_unicode_ci NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `CMND` int(11) NOT NULL,
  `SDTNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `MaQuyen`, `TenNV`, `GioiTinh`, `NgaySinh`, `CMND`, `SDTNV`) VALUES
('1', 'C1', 'Lâm Văn B', 'Nam', '2021-12-02 00:00:00', 1234567, 14567888),
('145', 'C1', 'Nguyen VV', 'Nữ', '2021-12-02 00:00:00', 1476988, 1869449906),
('2', 'C2', 'Nguyễn A', 'Nam', '2000-12-01 00:00:00', 1354789, 1234567),
('3', 'C1', 'Nguyễn Thương', 'Nữ', '1999-12-03 00:00:00', 33898888, 16357698);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhapkho`
--

CREATE TABLE `phieunhapkho` (
  `MaPhieuNhap` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaSP` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaNV` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  `NgayNhap` date NOT NULL,
  `TongGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `phieunhapkho`
--

INSERT INTO `phieunhapkho` (`MaPhieuNhap`, `MaSP`, `MaNV`, `SoLuong`, `DonGia`, `NgayNhap`, `TongGia`) VALUES
('123', '002', '2', 180, 4500, '2021-12-01', 7000000),
('Q2', '002', '2', 10, 200000, '2021-12-17', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuatkho`
--

CREATE TABLE `phieuxuatkho` (
  `MaPhieuXuat` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaSP` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaNV` varchar(20) COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  `NgayXuat` datetime NOT NULL,
  `TongGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `phieuxuatkho`
--

INSERT INTO `phieuxuatkho` (`MaPhieuXuat`, `MaSP`, `MaNV`, `SoLuong`, `DonGia`, `NgayXuat`, `TongGia`) VALUES
('K1', '002', '2', 2000, 1200000, '2021-12-01 00:00:00', 9000000),
('W2', '002', '2', 18, 200000, '2021-12-17 08:43:36', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `TenQuyen` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `TenQuyen`) VALUES
('C1', 'Quyền đăng nhập'),
('C2', 'Quyền tìm kiếm');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MaLoai` int(50) NOT NULL,
  `TenSP` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `Hinh` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `GiaBan` float NOT NULL,
  `mota` varchar(300) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLoai`, `TenSP`, `Hinh`, `GiaBan`, `mota`) VALUES
('002', 2, 'XdS Hacker 800', '1.jpg', 2000000, 'Khung hợp kim nhôm nhẹ X6 – Logo XDS dập nổi 3D'),
('003', 2, 'Xe Đạp Gấp Trợ Lực Điện Xiaomi', '1.jpg', 600000, 'Líp 10 tầng – Xích Kmc 10 Tốc Độ'),
('B1', 2, 'Xe đua tốc độ cao', '1.jpg', 3000000, 'Xe có phanh tốc độ'),
('B2', 2, 'Xe Đạp Thể Thao XdS Geeker 300', '4.jpg', 500000, 'Đùi đĩa nhôm bạc đạn Prowheel'),
('B3', 2, 'Xe Đạp XdS X500', '1.jpg', 1400000, 'Săm lốp Maxxis 27.5×1.95'),
('B4', 2, 'Motachie Camero R9.1', '1.jpg', 140000, 'Chiều cao phù hợp: 1m6 – 1m8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaKH`,`SoDH`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGH`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `hoadon_sanpham_MaSP` (`MaSP`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`,`MaQuyen`),
  ADD KEY `quyen_nhanvien_MaQuyen` (`MaQuyen`);

--
-- Indexes for table `phieunhapkho`
--
ALTER TABLE `phieunhapkho`
  ADD PRIMARY KEY (`MaPhieuNhap`,`MaSP`,`MaNV`),
  ADD KEY `phieunhapkho_sanpham_MaSP` (`MaSP`),
  ADD KEY `phieunhapkho_nhanvien_MaNV` (`MaNV`);

--
-- Indexes for table `phieuxuatkho`
--
ALTER TABLE `phieuxuatkho`
  ADD PRIMARY KEY (`MaPhieuXuat`,`MaSP`,`MaNV`),
  ADD KEY `phieuxuatkho_sanpham_MaSP` (`MaSP`),
  ADD KEY `phieuxuatkho_nhanvien_MaNV` (`MaNV`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`,`MaLoai`),
  ADD KEY `sanpham_loaisanpham_MaLoai` (`MaLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGH` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_sanpham_MaSP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `quyen_nhanvien_MaQuyen` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieunhapkho`
--
ALTER TABLE `phieunhapkho`
  ADD CONSTRAINT `phieunhapkho_nhanvien_MaNV` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phieunhapkho_sanpham_MaSP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieuxuatkho`
--
ALTER TABLE `phieuxuatkho`
  ADD CONSTRAINT `phieuxuatkho_nhanvien_MaNV` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phieuxuatkho_sanpham_MaSP` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_loaisanpham_maloai` FOREIGN KEY (`MaLoai`) REFERENCES `loaisanpham` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
