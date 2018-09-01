-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2016 at 11:31 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `My Hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `Form_Pasien`
--

CREATE TABLE `Form_Pasien` (
  `RS_Pilihan` varchar(25) NOT NULL,
  `No_Antrian` int(11) NOT NULL,
  `Nama_Lengkap` varchar(25) NOT NULL,
  `Jenis_Kelamin` enum('Pria','Wanita','','') NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Umur` int(5) NOT NULL,
  `Golongan_Darah` enum('A','B','AB','O') NOT NULL,
  `Diagnosa_Penyakit` text NOT NULL,
  `Tipe_Kamar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Form_Pasien`
--

INSERT INTO `Form_Pasien` (`RS_Pilihan`, `No_Antrian`, `Nama_Lengkap`, `Jenis_Kelamin`, `Tanggal_Lahir`, `Umur`, `Golongan_Darah`, `Diagnosa_Penyakit`, `Tipe_Kamar`) VALUES
('Pilih Rumah Sakit', 1, 'Iwan Jeriatno', 'Pria', '1995-02-09', 21, 'B', 'atit emam', 'Kelas 1'),
('Rs Wahidin', 2, 'Mahatir', 'Pria', '1994-02-03', 22, 'A', 'galau ki', 'VIP'),
('Rs Ibnu Sina', 3, 'Trizal', 'Pria', '1995-02-20', 21, 'B', 'alay ki', 'Kelas 3'),
('Rs Awal Bross', 4, 'Ummul', 'Wanita', '1997-12-08', 18, 'B', 'cantik ki', 'VVIP'),
('Rs Wahidin', 5, 'Indah', 'Wanita', '1998-12-09', 17, 'AB', 'pusing ki bede', 'Kelas 2');

-- --------------------------------------------------------

--
-- Stand-in structure for view `Form_Pasien_Kelas1`
--
CREATE TABLE `Form_Pasien_Kelas1` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Form_Pasien_Kelas2`
--
CREATE TABLE `Form_Pasien_Kelas2` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Form_Pasien_Kelas3`
--
CREATE TABLE `Form_Pasien_Kelas3` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Form_Pasien_VIP`
--
CREATE TABLE `Form_Pasien_VIP` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Form_Pasien_VVIP`
--
CREATE TABLE `Form_Pasien_VVIP` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
);

-- --------------------------------------------------------

--
-- Table structure for table `Kelas1`
--

CREATE TABLE `Kelas1` (
  `Kode` varchar(10) NOT NULL,
  `No-Ruangan` int(11) NOT NULL,
  `Kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Kelas2`
--

CREATE TABLE `Kelas2` (
  `Kode` varchar(10) NOT NULL,
  `No-Ruangan` int(11) NOT NULL,
  `Kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Kelas3`
--

CREATE TABLE `Kelas3` (
  `Kode` varchar(10) NOT NULL,
  `No-Ruangan` int(11) NOT NULL,
  `Kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('unjar', 'unjar');

-- --------------------------------------------------------

--
-- Stand-in structure for view `Pasien_Rs_Awal_Bross`
--
CREATE TABLE `Pasien_Rs_Awal_Bross` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
,`Tipe_Kamar` varchar(15)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Pasien_Rs_Ibnu_Sina`
--
CREATE TABLE `Pasien_Rs_Ibnu_Sina` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
,`Tipe_Kamar` varchar(15)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Pasien_Rs_Wahidin`
--
CREATE TABLE `Pasien_Rs_Wahidin` (
`No_Antrian` int(11)
,`Nama_Lengkap` varchar(25)
,`Jenis_Kelamin` enum('Pria','Wanita','','')
,`Tanggal_Lahir` date
,`Umur` int(5)
,`Golongan_Darah` enum('A','B','AB','O')
,`Diagnosa_Penyakit` text
,`Tipe_Kamar` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `Rs_Ibnu_Sina`
--

CREATE TABLE `Rs_Ibnu_Sina` (
  `Kode` varchar(10) NOT NULL,
  `Ruang-Inap` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Ruang_Inap`
--

CREATE TABLE `Ruang_Inap` (
  `No` int(11) NOT NULL,
  `Kd_Kelas1` varchar(10) NOT NULL,
  `Kd_Kelas2` varchar(10) NOT NULL,
  `Kd_Kelas3` varchar(10) NOT NULL,
  `Kd_VIP` varchar(10) NOT NULL,
  `Kd_VVIP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Rumah_Sakit`
--

CREATE TABLE `Rumah_Sakit` (
  `Kode` int(11) NOT NULL,
  `Nama-Rumah-Sakit` varchar(25) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rumah_Sakit`
--

INSERT INTO `Rumah_Sakit` (`Kode`, `Nama-Rumah-Sakit`, `Alamat`) VALUES
(1, 'Ibnu Sina', 'Jln. Urip Sumoharjo'),
(2, 'Wahidin', 'Jln. Perintis Kemerdekaan'),
(3, 'Awal Bross', 'Jln. Urip Sumoharjo');

-- --------------------------------------------------------

--
-- Table structure for table `Tipe_Kamar`
--

CREATE TABLE `Tipe_Kamar` (
  `No` int(11) NOT NULL,
  `Kode-Kamar` varchar(10) NOT NULL,
  `Tipe-Kamar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Tipe_Kamar`
--

INSERT INTO `Tipe_Kamar` (`No`, `Kode-Kamar`, `Tipe-Kamar`) VALUES
(1, 'kelas1', 'Kelas 1'),
(2, 'kelas2', 'Kelas 2'),
(3, 'kelas3', 'Kelas 3'),
(4, 'vip', 'VIP'),
(5, 'vvip', 'VVIP');

-- --------------------------------------------------------

--
-- Table structure for table `VIP`
--

CREATE TABLE `VIP` (
  `Kode` varchar(10) NOT NULL,
  `No-Ruangan` int(11) NOT NULL,
  `Kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `VVIP`
--

CREATE TABLE `VVIP` (
  `Kode` varchar(10) NOT NULL,
  `No-Ruangan` int(11) NOT NULL,
  `Kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `Form_Pasien_Kelas1`
--
DROP TABLE IF EXISTS `Form_Pasien_Kelas1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Form_Pasien_Kelas1`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit` from `Form_Pasien` where (`Form_Pasien`.`Tipe_Kamar` = 'Kelas 1') ;

-- --------------------------------------------------------

--
-- Structure for view `Form_Pasien_Kelas2`
--
DROP TABLE IF EXISTS `Form_Pasien_Kelas2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Form_Pasien_Kelas2`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit` from `Form_Pasien` where (`Form_Pasien`.`Tipe_Kamar` = 'Kelas 2') ;

-- --------------------------------------------------------

--
-- Structure for view `Form_Pasien_Kelas3`
--
DROP TABLE IF EXISTS `Form_Pasien_Kelas3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Form_Pasien_Kelas3`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit` from `Form_Pasien` where (`Form_Pasien`.`Tipe_Kamar` = 'Kelas 3') ;

-- --------------------------------------------------------

--
-- Structure for view `Form_Pasien_VIP`
--
DROP TABLE IF EXISTS `Form_Pasien_VIP`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Form_Pasien_VIP`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit` from `Form_Pasien` where (`Form_Pasien`.`Tipe_Kamar` = 'VIP') ;

-- --------------------------------------------------------

--
-- Structure for view `Form_Pasien_VVIP`
--
DROP TABLE IF EXISTS `Form_Pasien_VVIP`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Form_Pasien_VVIP`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit` from `Form_Pasien` where (`Form_Pasien`.`Tipe_Kamar` = 'VVIP') ;

-- --------------------------------------------------------

--
-- Structure for view `Pasien_Rs_Awal_Bross`
--
DROP TABLE IF EXISTS `Pasien_Rs_Awal_Bross`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Pasien_Rs_Awal_Bross`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit`,`Form_Pasien`.`Tipe_Kamar` AS `Tipe_Kamar` from `Form_Pasien` where (`Form_Pasien`.`RS_Pilihan` = 'Rs Awal Bross') ;

-- --------------------------------------------------------

--
-- Structure for view `Pasien_Rs_Ibnu_Sina`
--
DROP TABLE IF EXISTS `Pasien_Rs_Ibnu_Sina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Pasien_Rs_Ibnu_Sina`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit`,`Form_Pasien`.`Tipe_Kamar` AS `Tipe_Kamar` from `Form_Pasien` where (`Form_Pasien`.`RS_Pilihan` = 'Rs Ibnu Sina') ;

-- --------------------------------------------------------

--
-- Structure for view `Pasien_Rs_Wahidin`
--
DROP TABLE IF EXISTS `Pasien_Rs_Wahidin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `Pasien_Rs_Wahidin`  AS  select `Form_Pasien`.`No_Antrian` AS `No_Antrian`,`Form_Pasien`.`Nama_Lengkap` AS `Nama_Lengkap`,`Form_Pasien`.`Jenis_Kelamin` AS `Jenis_Kelamin`,`Form_Pasien`.`Tanggal_Lahir` AS `Tanggal_Lahir`,`Form_Pasien`.`Umur` AS `Umur`,`Form_Pasien`.`Golongan_Darah` AS `Golongan_Darah`,`Form_Pasien`.`Diagnosa_Penyakit` AS `Diagnosa_Penyakit`,`Form_Pasien`.`Tipe_Kamar` AS `Tipe_Kamar` from `Form_Pasien` where (`Form_Pasien`.`RS_Pilihan` = 'Rs Wahidin') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Form_Pasien`
--
ALTER TABLE `Form_Pasien`
  ADD PRIMARY KEY (`No_Antrian`);

--
-- Indexes for table `Kelas1`
--
ALTER TABLE `Kelas1`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `Kelas2`
--
ALTER TABLE `Kelas2`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `Kelas3`
--
ALTER TABLE `Kelas3`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `Ruang_Inap`
--
ALTER TABLE `Ruang_Inap`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `Rumah_Sakit`
--
ALTER TABLE `Rumah_Sakit`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `Tipe_Kamar`
--
ALTER TABLE `Tipe_Kamar`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `VIP`
--
ALTER TABLE `VIP`
  ADD PRIMARY KEY (`Kode`);

--
-- Indexes for table `VVIP`
--
ALTER TABLE `VVIP`
  ADD PRIMARY KEY (`Kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Form_Pasien`
--
ALTER TABLE `Form_Pasien`
  MODIFY `No_Antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Ruang_Inap`
--
ALTER TABLE `Ruang_Inap`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Rumah_Sakit`
--
ALTER TABLE `Rumah_Sakit`
  MODIFY `Kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Tipe_Kamar`
--
ALTER TABLE `Tipe_Kamar`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
