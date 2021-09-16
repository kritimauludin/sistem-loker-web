-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 06:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lowo`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `category` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`) VALUES
(2, 'All'),
(3, 'Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `job_provider`
--

CREATE TABLE `job_provider` (
  `id` int(128) NOT NULL,
  `title` text NOT NULL,
  `img_poster` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `provider` varchar(128) NOT NULL,
  `contact` varchar(128) NOT NULL,
  `location` text NOT NULL,
  `salary` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_provider`
--

INSERT INTO `job_provider` (`id`, `title`, `img_poster`, `deskripsi`, `category_id`, `provider`, `contact`, `location`, `salary`, `date_created`) VALUES
(15, 'Software', 'Capture.PNG', 'a', 2, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', '3.000.000-4.000.000', '20 November 2020'),
(16, 'Software', 'inggris.PNG', 'n', 2, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', 'discussed', '20 November 2020'),
(17, 'enginer', 'inggris1.PNG', 'na', 2, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', '3.000.000-4.000.000', '20 November 2020'),
(18, 'My Vacancies', 'logo.jpg', 'test', 2, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', 'discussed', '20 November 2020'),
(19, 'Test', 'Capture_materi_pkkmb_akhir1.PNG', 'aaas', 2, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', 'discussed', '20 November 2020'),
(20, 'Software Enginering', 'logo1.jpg', 'Selamat Datang di Situs Lowongan Kerja Indonesia Terbaru 2020 dan Saat ini kami ingin memberitahukan Info Terbaru Mengenai Informasi Loker dari Perusahaan PT Karya Daya Inti dengan posisi Staff IT Officer. Untuk selengkapnya silahkan baca deskripsi lowongan kerja di bawah ini dengan seksama dan teliti, beserta persyaratan minimal lowongan kerja di yang telah tertera dan dijelaskan di bawah ini.\r\n\r\nPT Karya Daya Inti melalui program rekrutmennya saat ini sedang membuka lowongan kerja untuk posisi Staff IT Officer di Bogor yang bertujuan untuk meningkatkan kinerja operasional di dalam maupun luar kantor PT Karya Daya Inti. Perusahaan Tersebut sedang mencari calon tenaga kerja yang siap diterjunkan ke setiap divisi bagian perusahaan yang sesuai dengan posisi, kemampuan dan keahlian para pencari kerja tersebut. Berikut ini adalah detail lengkap persyaratan untuk posisi Staff IT Officer di Bogor Perusahaan PT Karya Daya Inti:\r\n\r\nTugas / Tanggung Jawab :\r\n• Mampu membuat sofware aplikasi dan program sesuai kebutuhan perusahaan\r\n• Melakukan Trouble Shooting Internet (Hardware dan Sofware), Komputer dan Printer\r\n• Menulis Program berdasarkan design dan spesifikasi\r\n• Membuat Design Video untuk Presentasi\r\n• Merawat Sofware/ Hardware yang ada diperusahaan\r\n• Memastikan semua hardware dan komputer berfungsi optimal\r\n• Cek LAN dan WAN apabila ada kerusakan\r\n• Pembuatan kabel RJ45 apabila ada konektor yang rusak\r\n• Menyediakan data/ informasi yang dibutuhkan untuk pembuatan laporan departement regular\r\n• Melakukan pekerjaan Bagian Staff IT pada umumnya\r\n• Berdomisili di Bogor\r\n\r\nKualifikasi / Persyaratan :\r\n• Pria dan Wanita\r\n• Pendidikan Minimal Diploma\r\n• Usia Maksimal 30 Tahun\r\n• Memiliki Pengalaman di bidang yang sama minimal 1 Tahun\r\n• Kreatif, Iniatif, dan Inisiatif\r\n• Mampu membuat sofware aplikasi dan program sesuai kebutuhan perusahaan\r\n• Bisa jaringan, Troubleshooting, Web & Desain\r\n• Bisa bahasa program\r\n• Fresh Graduate Wellcome', 3, 'Ocumps Group', 'kritimauludin02@gmail.com', 'bogot, jawabarat.16112', 'discussed', '23 November 2020'),
(21, 'Software', 'Capture1.PNG', 'test', 2, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', '2.000.000-3.000.000', '29 November 2020'),
(22, 'My Vacancies', 'inggris2.PNG', 'test', 2, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', '3.000.000-4.000.000', '29 November 2020'),
(23, 'Tugas BID - Kriti Mauludin', 'Capture2.PNG', 'tets', 3, 'Administrator', 'kritimauludin24@gmail.com', 'bogot, jawabarat.16112', '>4.000.000', '29 November 2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `company` text NOT NULL,
  `address` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `company`, `address`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Kriti', 'kritimauludin24@gmail.com', 'logo.jpg', '$2y$10$ljyFpNUA9VN16of4vO2g2u1N/81g9hKShT5ynUv7topQV9rjcym8K', 'Administrator', 'bogot, jawabarat.16112', 1, 1, 1603527639),
(7, 'Kriti Mauludin', 'kritimauludin2@gmail.com', 'default1.jpg', '$2y$10$FTWi.W9mSKniboZ4/ZZ.wumFoK1I0Xltz7TSmtMzh5SFWPhYMK8eO', '', '', 2, 1, 1603987380),
(20, 'Kriti Mauludin', 'kritimauludin02@gmail.com', 'default.jpg', '$2y$10$qaoTRPGW8zes4SthJ3t/VeUvnbFD3BssoTTtYFjcxdMwry8O9tSv.', 'Ocumps Group', 'bogot, jawabarat.16112', 3, 1, 1605773828),
(21, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$rk2R601vKB0putrTQmvce.QqKeyBiJJz60mPPMrfxEWtF2yOhnmka', '', '', 2, 0, 1607872385);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(7, 1, 3),
(8, 1, 22),
(9, 6, 2),
(11, 6, 22),
(12, 6, 23),
(14, 1, 24),
(16, 1, 23),
(17, 1, 25),
(18, 2, 2),
(20, 1, 26),
(21, 3, 2),
(23, 3, 25),
(24, 3, 26),
(26, 2, 26);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'Menu'),
(24, 'Category'),
(25, 'Company'),
(26, 'Job');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'user'),
(3, 'company');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/editprofile', 'fas fa-fw fa-user-edit', 1),
(5, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(6, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(11, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(12, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(19, 24, 'Category Management', 'category', 'fas fa-fw fa-globe', 1),
(22, 25, 'My Vacancies', 'company', 'fas fa-fw fa-user-md', 1),
(23, 26, 'All Vacancies', 'Job', 'fas fa-fw fa-globe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(18, 'admin@gmail.com', '9AiSd4NU20L3l8KfykYJ/lkvxoyiykw+INzGItWNce0=', 1607872385);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_provider`
--
ALTER TABLE `job_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_provider`
--
ALTER TABLE `job_provider`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
