-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2026 pada 07.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `qty_in_stock` int(11) NOT NULL DEFAULT 0,
  `price` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `qty_in_stock`, `price`) VALUES
(1, 'Laptop Asus', 15, 8500000.00),
(2, 'Mouse Wireless', 80, 75000.00),
(3, 'Keyboard Mechanical', 40, 350000.00),
(4, 'Monitor LED 24 Inch', 25, 1450000.00),
(5, 'Headset Gaming', 60, 250000.00),
(6, 'Flashdisk 32GB', 120, 55000.00),
(7, 'Powerbank 10000mAh', 70, 150000.00),
(8, 'Charger USB-C', 100, 45000.00),
(9, 'Kabel HDMI', 90, 35000.00),
(10, 'Speaker Bluetooth', 50, 200000.00),
(11, 'Kaos Polos', 150, 45000.00),
(12, 'Celana Jeans', 90, 175000.00),
(13, 'Jaket Hoodie', 70, 220000.00),
(14, 'Sepatu Sneakers', 60, 350000.00),
(15, 'Sandal Jepit', 100, 25000.00),
(16, 'Tas Ransel', 55, 180000.00),
(17, 'Topi Baseball', 80, 40000.00),
(18, 'Kacamata Hitam', 65, 90000.00),
(19, 'Jam Tangan', 45, 275000.00),
(20, 'Dompet Kulit', 70, 130000.00),
(21, 'Beras 5kg', 200, 62000.00),
(22, 'Minyak Goreng 2L', 180, 32000.00),
(23, 'Gula Pasir 1kg', 220, 15000.00),
(24, 'Kopi Bubuk 200g', 150, 22000.00),
(25, 'Teh Celup Box', 170, 12000.00),
(26, 'Mie Instan Dus', 300, 95000.00),
(27, 'Susu UHT 1L', 140, 18000.00),
(28, 'Telur Ayam 1kg', 160, 28000.00),
(29, 'Sabun Mandi', 200, 6000.00),
(30, 'Shampoo Botol', 130, 24000.00),
(31, 'Pasta Gigi', 150, 11000.00),
(32, 'Tisu Wajah', 180, 9000.00),
(33, 'Deterjen Bubuk', 120, 20000.00),
(34, 'Pewangi Pakaian', 110, 16000.00),
(35, 'Panci Stainless', 40, 145000.00),
(36, 'Wajan Anti Lengket', 45, 120000.00),
(37, 'Rice Cooker', 30, 350000.00),
(38, 'Blender', 35, 275000.00),
(39, 'Setrika Listrik', 40, 165000.00),
(40, 'Kipas Angin', 50, 210000.00),
(41, 'Lampu LED', 200, 18000.00),
(42, 'Baterai AA', 250, 8000.00),
(43, 'Payung Lipat', 90, 35000.00),
(44, 'Buku Tulis', 300, 5000.00),
(45, 'Pulpen Set', 200, 15000.00),
(46, 'Pensil 2B', 250, 3000.00),
(47, 'Penghapus', 300, 2000.00),
(48, 'Map Plastik', 180, 4000.00),
(49, 'Stapler', 100, 18000.00),
(50, 'Gunting Kertas', 90, 12000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` decimal(12,2) NOT NULL,
  `transaction_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id`, `product_id`, `payment_method`, `qty`, `total_price`, `transaction_date`) VALUES
(1, 41, 8, 'E-Wallet', 1, 45000.00, '2026-04-08 10:47:00'),
(2, 7, 44, 'Transfer Bank', 5, 25000.00, '2026-07-02 08:05:00'),
(3, 14, 15, 'QRIS', 5, 125000.00, '2026-01-18 11:45:00'),
(4, 42, 45, 'Kartu Kredit', 5, 75000.00, '2026-04-15 17:17:00'),
(5, 1, 49, 'Kartu Kredit', 2, 36000.00, '2026-06-09 10:13:00'),
(6, 49, 22, 'Transfer Bank', 1, 32000.00, '2026-07-04 13:54:00'),
(7, 23, 39, 'Transfer Bank', 3, 495000.00, '2026-08-18 09:59:00'),
(8, 25, 6, 'E-Wallet', 5, 275000.00, '2026-06-19 11:45:00'),
(9, 5, 3, 'E-Wallet', 2, 700000.00, '2026-02-28 11:55:00'),
(10, 7, 25, 'Kartu Kredit', 3, 36000.00, '2026-06-06 13:22:00'),
(11, 14, 43, 'Transfer Bank', 3, 105000.00, '2026-03-18 19:15:00'),
(12, 11, 30, 'E-Wallet', 4, 96000.00, '2026-09-08 18:20:00'),
(13, 50, 50, 'COD', 1, 12000.00, '2026-01-26 13:25:00'),
(14, 18, 5, 'QRIS', 2, 500000.00, '2026-06-07 18:31:00'),
(15, 26, 42, 'COD', 4, 32000.00, '2026-05-05 11:47:00'),
(16, 36, 35, 'QRIS', 3, 435000.00, '2026-07-19 14:23:00'),
(17, 15, 9, 'Kartu Kredit', 5, 175000.00, '2026-02-25 08:55:00'),
(18, 8, 10, 'Kartu Kredit', 2, 400000.00, '2026-02-13 14:38:00'),
(19, 30, 34, 'QRIS', 3, 48000.00, '2026-01-22 19:07:00'),
(20, 44, 35, 'E-Wallet', 3, 435000.00, '2026-02-10 14:10:00'),
(21, 30, 1, 'QRIS', 3, 25500000.00, '2026-03-17 09:55:00'),
(22, 41, 20, 'QRIS', 5, 650000.00, '2026-04-05 13:48:00'),
(23, 11, 35, 'Transfer Bank', 5, 725000.00, '2026-06-16 08:07:00'),
(24, 24, 20, 'Transfer Bank', 2, 260000.00, '2026-04-19 09:05:00'),
(25, 47, 32, 'QRIS', 1, 9000.00, '2026-03-05 18:30:00'),
(26, 36, 11, 'QRIS', 3, 135000.00, '2026-07-07 16:48:00'),
(27, 47, 45, 'E-Wallet', 2, 30000.00, '2026-07-22 18:23:00'),
(28, 29, 34, 'Transfer Bank', 4, 64000.00, '2026-04-08 09:21:00'),
(29, 2, 38, 'COD', 5, 1375000.00, '2026-04-01 09:45:00'),
(30, 41, 4, 'Transfer Bank', 2, 2900000.00, '2026-01-28 13:04:00'),
(31, 33, 16, 'Kartu Kredit', 3, 540000.00, '2026-04-18 10:46:00'),
(32, 37, 37, 'COD', 4, 1400000.00, '2026-08-26 14:12:00'),
(33, 7, 7, 'E-Wallet', 4, 600000.00, '2026-07-14 15:55:00'),
(34, 47, 4, 'Transfer Bank', 1, 1450000.00, '2026-07-24 13:51:00'),
(35, 7, 16, 'COD', 2, 360000.00, '2026-09-15 10:27:00'),
(36, 12, 18, 'COD', 4, 360000.00, '2026-02-15 20:55:00'),
(37, 36, 7, 'QRIS', 1, 150000.00, '2026-01-03 20:54:00'),
(38, 16, 11, 'Kartu Kredit', 4, 180000.00, '2026-08-07 21:25:00'),
(39, 4, 11, 'Transfer Bank', 4, 180000.00, '2026-07-09 20:50:00'),
(40, 30, 19, 'QRIS', 4, 1100000.00, '2026-08-05 11:18:00'),
(41, 14, 4, 'QRIS', 5, 7250000.00, '2026-01-24 13:03:00'),
(42, 4, 38, 'QRIS', 4, 1100000.00, '2026-09-06 08:32:00'),
(43, 6, 12, 'QRIS', 1, 175000.00, '2026-02-22 21:15:00'),
(44, 26, 8, 'COD', 5, 225000.00, '2026-01-20 09:26:00'),
(45, 43, 38, 'QRIS', 5, 1375000.00, '2026-06-09 11:42:00'),
(46, 46, 21, 'E-Wallet', 2, 124000.00, '2026-07-05 18:41:00'),
(47, 20, 30, 'Transfer Bank', 3, 72000.00, '2026-01-15 17:36:00'),
(48, 7, 5, 'COD', 5, 1250000.00, '2026-09-09 10:59:00'),
(49, 23, 5, 'E-Wallet', 2, 500000.00, '2026-05-06 15:53:00'),
(50, 35, 46, 'QRIS', 3, 9000.00, '2026-09-01 18:52:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `created_at`) VALUES
(1, 'Budi', 'budi1@mail.com', '2026-09-16 12:11:25'),
(2, 'Siti', 'siti2@mail.com', '2026-09-16 12:11:25'),
(3, 'Andi', 'andi3@mail.com', '2026-09-16 12:11:25'),
(4, 'Dewi', 'dewi4@mail.com', '2026-09-16 12:11:25'),
(5, 'Rudi', 'rudi5@mail.com', '2026-09-16 12:11:25'),
(6, 'Ani', 'ani6@mail.com', '2026-09-16 12:11:25'),
(7, 'Joko', 'joko7@mail.com', '2026-09-16 12:11:25'),
(8, 'Wati', 'wati8@mail.com', '2026-09-16 12:11:25'),
(9, 'Agus', 'agus9@mail.com', '2026-09-16 12:11:25'),
(10, 'Rina', 'rina10@mail.com', '2026-09-16 12:11:25'),
(11, 'Eko', 'eko11@mail.com', '2026-09-16 12:11:25'),
(12, 'Yuni', 'yuni12@mail.com', '2026-09-16 12:11:25'),
(13, 'Hendra', 'hendra13@mail.com', '2026-09-16 12:11:25'),
(14, 'Fitri', 'fitri14@mail.com', '2026-09-16 12:11:25'),
(15, 'Dedi', 'dedi15@mail.com', '2026-09-16 12:11:25'),
(16, 'Lina', 'lina16@mail.com', '2026-09-16 12:11:25'),
(17, 'Bambang', 'bambang17@mail.com', '2026-09-16 12:11:25'),
(18, 'Sri', 'sri18@mail.com', '2026-09-16 12:11:25'),
(19, 'Agung', 'agung19@mail.com', '2026-09-16 12:11:25'),
(20, 'Nita', 'nita20@mail.com', '2026-09-16 12:11:25'),
(21, 'Tono', 'tono21@mail.com', '2026-09-16 12:11:25'),
(22, 'Wulan', 'wulan22@mail.com', '2026-09-16 12:11:25'),
(23, 'Yudi', 'yudi23@mail.com', '2026-09-16 12:11:25'),
(24, 'Santi', 'santi24@mail.com', '2026-09-16 12:11:25'),
(25, 'Arif', 'arif25@mail.com', '2026-09-16 12:11:25'),
(26, 'Indah', 'indah26@mail.com', '2026-09-16 12:11:25'),
(27, 'Irfan', 'irfan27@mail.com', '2026-09-16 12:11:25'),
(28, 'Diah', 'diah28@mail.com', '2026-09-16 12:11:25'),
(29, 'Fajar', 'fajar29@mail.com', '2026-09-16 12:11:25'),
(30, 'Ratna', 'ratna30@mail.com', '2026-09-16 12:11:25'),
(31, 'Doni', 'doni31@mail.com', '2026-09-16 12:11:25'),
(32, 'Erna', 'erna32@mail.com', '2026-09-16 12:11:25'),
(33, 'Gunawan', 'gunawan33@mail.com', '2026-09-16 12:11:25'),
(34, 'Mira', 'mira34@mail.com', '2026-09-16 12:11:25'),
(35, 'Hadi', 'hadi35@mail.com', '2026-09-16 12:11:25'),
(36, 'Nia', 'nia36@mail.com', '2026-09-16 12:11:25'),
(37, 'Iwan', 'iwan37@mail.com', '2026-09-16 12:11:25'),
(38, 'Puji', 'puji38@mail.com', '2026-09-16 12:11:25'),
(39, 'Johan', 'johan39@mail.com', '2026-09-16 12:11:25'),
(40, 'Rani', 'rani40@mail.com', '2026-09-16 12:11:25'),
(41, 'Kurnia', 'kurnia41@mail.com', '2026-09-16 12:11:25'),
(42, 'Sari', 'sari42@mail.com', '2026-09-16 12:11:25'),
(43, 'Lukman', 'lukman43@mail.com', '2026-09-16 12:11:25'),
(44, 'Tuti', 'tuti44@mail.com', '2026-09-16 12:11:25'),
(45, 'Maman', 'maman45@mail.com', '2026-09-16 12:11:25'),
(46, 'Prabowo', 'prabowo46@mail.com', '2026-09-16 12:11:25'),
(47, 'Jokowi', 'jokowi47@mail.com', '2026-09-16 12:11:25'),
(48, 'Gibran', 'gibran48@mail.com', '2026-09-16 12:11:25'),
(49, 'Purbaya', 'purbaya49@mail.com', '2026-09-16 12:11:25'),
(50, 'Bahlil', 'bahlil50@mail.com', '2026-09-16 12:11:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `fk_transaction_user` (`user_id`),
  ADD KEY `fk_transaction_product` (`product_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaction_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
