-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2018 lúc 12:18 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php09_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, '123', '123', '2018-03-03 09:28:20', '2018-03-03 09:41:54'),
(3, 'T-shirt', 'Áo sơ mi', NULL, NULL),
(4, 'Tet blazer', NULL, NULL, NULL),
(5, 'V-sweet', NULL, NULL, NULL),
(7, 'J-paint', NULL, NULL, NULL),
(8, 'Box-paint', NULL, NULL, NULL),
(9, 'Lamp', NULL, NULL, NULL),
(10, 'Laptop', NULL, NULL, NULL),
(11, 'Phone', NULL, NULL, NULL),
(12, 'Book', NULL, NULL, NULL),
(13, 'Mobile', 'Điện thoại di động ', '2018-03-04 21:43:26', '2018-03-09 23:16:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `code`, `name`, `mobile`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'KH01', 'ABCDE', '0986485123', 'abc@gmail.com', 'Hàn Dương', '2018-03-04 22:02:53', '2018-03-05 18:07:38'),
(2, 'KH02', 'Vux Linh', '0868133197', 'vuxlinh@gmail.com', 'Thasi Nguyen', '2018-03-06 23:34:09', NULL),
(3, 'KH03', 'Tử Đằng', '0965835699', 'tudang@honam.com', 'Hồ Nam', '2018-03-08 22:56:51', NULL),
(4, 'KH04', 'Nguyen Trung Anh', '0964856999', 'anhngtrung@gmail.com', 'Hàm Đan', '2018-03-09 06:05:56', NULL),
(5, 'KH05', 'Nguyen Trung Anh', '0964856999', 'anhngtrung@gmail.com', 'Hàm Đan', '2018-03-09 06:08:51', NULL),
(6, 'KH06', 'ABC', '0313131313', 'abc@gmail', 'ABC', '2018-03-09 11:55:25', NULL),
(10, 'KH10', 'LJ ULIU', '1368468767', '', 'K YTFYT', '2018-03-09 12:08:46', NULL),
(12, 'KH09', 'Triệu Viễn', '3475467956', 'trieuvien@hamduong.com', 'Hàm Dương', '2018-03-09 23:20:34', NULL),
(13, 'KH12', 'Tương Linh', '', 'tuonglinh@gmail.com', 'HN', '2018-03-09 23:26:46', NULL),
(14, 'KH21', 'My Linh', '0894899499', 'mylinh@gmail.com', 'HN', '2018-03-10 19:03:44', NULL),
(15, 'jkhgc', 'cghj', '048466449', 'abc@abc', 'HN', '2018-03-10 19:13:53', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `money` float DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `staff_id`, `money`, `date`) VALUES
('20180309195907', 3, 1, 375000, '2018-03-09 20:00:41'),
('20180309200123', 4, 1, 71125000, '2018-03-09 20:02:08'),
('20180309231938', 13, 1, 36750000, '2018-03-09 23:26:59'),
('20180309232823', 12, 1, 72375000, '2018-03-09 23:29:02'),
('20180310081942', 6, 1, 38940000, '2018-03-10 08:21:35'),
('2147483647', 3, 1, 282400000, '2018-03-09 16:55:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `invoice_detail`
--

INSERT INTO `invoice_detail` (`id`, `product_id`, `quantity`, `price`, `date`) VALUES
('20180309195907', 3, 1, 375000, '2018-03-09 20:00:41'),
('20180309200123', 1, 2, 35000000, '2018-03-09 20:02:08'),
('20180309231938', 3, 2, 375000, '2018-03-09 23:26:59'),
('20180309232823', 3, 1, 375000, '2018-03-09 23:29:02'),
('20180309232823', 5, 2, 36000000, '2018-03-09 23:29:02'),
('20180310081942', 5, 1, 36000000, '2018-03-10 08:21:35'),
('20180310081942', 6, 3, 980000, '2018-03-10 08:21:35'),
('2147483647', 1, 8, 35000000, '2018-03-09 16:55:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` int(4) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Manager', 'Quản lý HT', '2018-03-02 09:41:41', '2018-03-04 13:46:18'),
(2, 'Saler', 'Nhân viên bán hàng', '2018-03-03 09:28:20', '2018-03-03 09:41:54'),
(3, 'Stocker', 'Thủ kho', NULL, NULL),
(4, 'Secterary', 'Thư ký', NULL, NULL),
(5, 'Trainee', 'Thực tập sinh', NULL, NULL),
(15, 'Nothing', 'Ngoi mat an bat vang - Ha mieng cho sung > chi co chet doi', '2018-03-04 17:48:46', '2018-03-04 17:49:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` float(11,0) DEFAULT NULL,
  `category_id` int(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `quantity`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Machine learning co ban', 'hinh-nen-song-bien-dep-nhat-1.jpg', 88, 450000, 1, NULL, '2018-03-04 23:50:21'),
(3, 'ABC', '34409.jpg', 82, 375000, 12, '2018-03-04 23:32:04', '2018-03-04 23:40:07'),
(4, 'Áo len cừu V-sweet', 'abstraction_sharp_figure_101902_1920x1080.jpg', 150, 460000, 5, '2018-03-09 23:14:26', '2018-03-10 19:01:58'),
(5, 'Macbook Air', 'shapes_shape_line_points_92772_1920x1080.jpg', 246, 36000000, 10, '2018-03-09 23:14:58', '2018-03-10 19:01:49'),
(6, 'Áo dạ Tet', 'thumb-1920-148834.jpg', 47, 980000, 4, '2018-03-09 23:15:44', '2018-03-10 19:02:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) DEFAULT '0' COMMENT '0:male, 1:female',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_id` tinyint(4) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staffs`
--

INSERT INTO `staffs` (`id`, `code`, `name`, `gender`, `avatar`, `mobile`, `email`, `password`, `address`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'QL01', 'Nguyen Trung Anh', 1, 'abstraction_sharp_figure_101902_1920x1080.jpg', '0868603396', 'anhngtrung@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ha Noi', 1, '2018-02-22 13:10:20', '2018-03-10 19:11:33'),
(2, '', 'Luong Xuan Truong', 0, '', '0868133197', 'truonglx@u23.vn', NULL, 'Hàm Đan', 2, NULL, '2018-02-23 11:17:10'),
(3, '', 'Linh Chi', 0, 'hinh-nen-song-bien-dep-nhat-8.jpg', '012564621233', 'linhchi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'HN', 3, '2018-02-23 09:57:15', '2018-02-23 12:49:23'),
(4, 'TN05', 'Khanh Van', 1, 'shapes_shape_line_points_92772_1920x1080.jpg', '0864789658', 'khanhvan@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Ha Noi', 5, '2018-02-23 10:02:48', '2018-03-04 21:45:06'),
(5, '', 'Triệu Viễn', 1, '34409.jpg', '0123456789', 'trieuvien@hamduong.com', '202cb962ac59075b964b07152d234b70', 'Hàm Dương', 5, '2018-02-23 10:07:58', '2018-03-09 23:18:30'),
(6, 'SC01', 'Tùng Bách', 1, '', '0964561234', 'tungbach@gmail.com', '57ab1d8a98df3e3d0a6bd8bec5a68761', 'Hà Nội', 4, '2018-03-03 21:20:09', '2018-03-09 23:45:51'),
(7, '', 'Tinh Van', 1, '', '0886869669', 'tinhvan@gmail.com', 'ab4ade48e3c502e707ab78bd03dff204', 'Ham Dan', 2, '2018-03-03 23:01:04', NULL),
(8, '', '123', 0, '', '', '', '202cb962ac59075b964b07152d234b70', '', 3, '2018-03-03 23:10:31', NULL),
(9, 'TK03', 'Tuong Linh', 0, '', '946499595959', 'tuonglinh@gmail.com', '896300e645ee1c570562036654219c74', '123', 2, '2018-03-03 23:12:59', '2018-03-03 23:45:12'),
(10, 'QL02', 'Da Hoa', 1, 'ho-guom-ruc-mau-co-do-sau-chien-thang-cua-u23-viet-nam.jpg', '0868686868', 'dahoa@gmail.com', '71f69c9d1bcec34048b43d82eafee47b', 'Thien Toc', 1, '2018-03-03 23:34:32', '2018-03-04 17:47:04'),
(11, 'QL02', 'Tử Đằng', 1, 'hinh-nen-song-bien-dep-nhat-5.jpg', '0968456892', 'tudang@gmail.com', '78ea12270b511aebed0504b8b44491e9', 'TP. HCM', 1, '2018-03-04 17:21:39', '2018-03-10 18:59:40'),
(16, 'AH01', 'Nothing', 1, 'thumb-1920-658415.jpg', 'nothing', 'nothing@nothing', 'f80a4ad87fee7c9fdc19b7769495fdb5', 'Hang Chau', 15, '2018-03-04 17:50:18', NULL),
(17, 'NV01', 'Trịnh Thành', 1, 'abstraction_passage_light_black_blue_413_1920x1080.jpg', '09496326959', 'trinhthanh@gmail.com', 'a48c24318b9c23949e82b57dad2e34cb', 'HN', 15, '2018-03-05 18:09:48', '2018-03-05 18:10:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`,`staff_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`id`,`product_id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
