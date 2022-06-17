-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `idcustomers` int(11) NOT NULL AUTO_INCREMENT,
  `Cust_FullName` varchar(200) NOT NULL,
  `Cust_UISP_ID` varchar(200) DEFAULT NULL,
  `CUST_WAVE_ID` varchar(200) DEFAULT NULL,
  `Cust_IsSync` int(11) NOT NULL DEFAULT 0,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`idcustomers`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `customers`;
INSERT INTO `customers` (`idcustomers`, `Cust_FullName`, `Cust_UISP_ID`, `CUST_WAVE_ID`, `Cust_IsSync`, `updated_at`, `created_at`) VALUES
(8,	' - ( TestClient Residental )',	'1',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO0N1c3RvbWVyOjY1MDU2MjE4',	1,	'2022-06-06 12:45:16',	'2022-06-06 12:45:16'),
(9,	'TestClient Company 1 - (   )',	'2',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO0N1c3RvbWVyOjY1MDU2MjE5',	1,	'2022-06-06 12:45:17',	'2022-06-06 12:45:17'),
(10,	' - ( TestClient Residential 2 )',	'3',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO0N1c3RvbWVyOjY1MDU2MjIw',	1,	'2022-06-06 12:45:18',	'2022-06-06 12:45:18'),
(11,	' - ( Ritika Bhawsar )',	'4',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO0N1c3RvbWVyOjY1MDU2MjIx',	1,	'2022-06-06 12:45:18',	'2022-06-06 12:45:18'),
(12,	'Some Test Company - (   )',	'5',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO0N1c3RvbWVyOjY1MDk2MjY5',	1,	'2022-06-07 15:09:21',	'2022-06-07 15:09:21'),
(13,	' - ( First Name )',	'6',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO0N1c3RvbWVyOjY1Mjg2MjI4',	1,	'2022-06-14 13:43:38',	'2022-06-14 13:43:38');

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `idinvoices` int(11) NOT NULL AUTO_INCREMENT,
  `Inv_UISP_ID` varchar(200) NOT NULL,
  `Inv_WAVE_ID` varchar(200) NOT NULL,
  `Inv_IsSync` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idinvoices`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `invoices`;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `idproducts` int(11) NOT NULL AUTO_INCREMENT,
  `Prod_Type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Prod_Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Prod_UISP_ID` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prod_WAVE_ID` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prod_IsSync` int(11) NOT NULL DEFAULT 0,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`idproducts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

TRUNCATE `products`;
INSERT INTO `products` (`idproducts`, `Prod_Type`, `Prod_Name`, `Prod_UISP_ID`, `Prod_WAVE_ID`, `Prod_IsSync`, `updated_at`, `created_at`) VALUES
(10,	'product',	'UTP cable',	'2',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTQ4NzQ=',	1,	'2022-06-06 10:48:02',	'2022-06-06 10:48:02'),
(11,	'product',	'Router',	'1',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTQ4NzM=',	1,	'2022-06-06 10:48:24',	'2022-06-06 10:48:24'),
(12,	'service',	'50/10 Plan',	'1',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTQ4NzM=',	1,	'2022-06-10 09:50:32',	'2022-06-10 09:50:32'),
(13,	'service',	'100/100',	'3',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTQ1OTY=',	1,	'2022-06-10 09:50:33',	'2022-06-10 09:50:33'),
(14,	'service',	'50/10 Plan',	'4',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTQ1OTc=',	1,	'2022-06-10 09:50:34',	'2022-06-10 09:50:34'),
(15,	'product',	'Router',	'1',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTQ4NzM=',	1,	'2022-06-10 10:04:24',	'2022-06-10 10:04:24'),
(16,	'product',	'UTP cable',	'2',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTQ4NzQ=',	1,	'2022-06-10 10:04:25',	'2022-06-10 10:04:25'),
(17,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTkwMDQ=',	1,	'2022-06-10 12:54:18',	'2022-06-10 12:54:18'),
(18,	'product',	'Test Router',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTkwMDU=',	1,	'2022-06-10 12:54:20',	'2022-06-10 12:54:20'),
(19,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTk4MzE=',	1,	'2022-06-10 13:19:38',	'2022-06-10 13:19:38'),
(20,	'product',	'Test Router',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NTk4MzI=',	1,	'2022-06-10 13:19:39',	'2022-06-10 13:19:39'),
(21,	'other',	'Test Cable',	'0',	NULL,	0,	'2022-06-10 13:25:44',	'2022-06-10 13:25:44'),
(22,	'other',	'Test Cable',	'0',	NULL,	0,	'2022-06-10 13:26:11',	'2022-06-10 13:26:11'),
(23,	'other',	'Test Cable',	'0',	NULL,	0,	'2022-06-10 13:26:43',	'2022-06-10 13:26:43'),
(24,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAxMTg=',	1,	'2022-06-10 13:27:16',	'2022-06-10 13:27:16'),
(25,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAxMTk=',	1,	'2022-06-10 13:27:17',	'2022-06-10 13:27:17'),
(26,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAxMjE=',	1,	'2022-06-10 13:27:18',	'2022-06-10 13:27:18'),
(27,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAxMjI=',	1,	'2022-06-10 13:27:19',	'2022-06-10 13:27:19'),
(28,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAxMzM=',	1,	'2022-06-10 13:27:20',	'2022-06-10 13:27:20'),
(29,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAxMzQ=',	1,	'2022-06-10 13:27:22',	'2022-06-10 13:27:22'),
(30,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAxMzU=',	1,	'2022-06-10 13:27:23',	'2022-06-10 13:27:23'),
(31,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAyMjU=',	1,	'2022-06-10 13:30:33',	'2022-06-10 13:30:33'),
(32,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAyMjc=',	1,	'2022-06-10 13:30:34',	'2022-06-10 13:30:34'),
(33,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAyMzA=',	1,	'2022-06-10 13:30:35',	'2022-06-10 13:30:35'),
(34,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAyMzI=',	1,	'2022-06-10 13:30:37',	'2022-06-10 13:30:37'),
(35,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAyMzQ=',	1,	'2022-06-10 13:30:38',	'2022-06-10 13:30:38'),
(36,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAyMzU=',	1,	'2022-06-10 13:30:39',	'2022-06-10 13:30:39'),
(37,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6Nzc5NjAyMzc=',	1,	'2022-06-10 13:30:41',	'2022-06-10 13:30:41'),
(38,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4NzQ=',	1,	'2022-06-14 04:45:55',	'2022-06-14 04:45:55'),
(39,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4NzU=',	1,	'2022-06-14 04:45:58',	'2022-06-14 04:45:58'),
(40,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4NzY=',	1,	'2022-06-14 04:45:59',	'2022-06-14 04:45:59'),
(41,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4Nzg=',	1,	'2022-06-14 04:46:01',	'2022-06-14 04:46:01'),
(42,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4Nzk=',	1,	'2022-06-14 04:46:02',	'2022-06-14 04:46:02'),
(43,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4ODA=',	1,	'2022-06-14 04:46:03',	'2022-06-14 04:46:03'),
(44,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4ODE=',	1,	'2022-06-14 04:46:05',	'2022-06-14 04:46:05'),
(45,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE4ODQ=',	1,	'2022-06-14 04:46:06',	'2022-06-14 04:46:06'),
(46,	'service',	'Test Internet 2',	'5',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwODE5NzU=',	1,	'2022-06-14 04:52:16',	'2022-06-14 04:52:16'),
(47,	'product',	'Ubnt Nano M5',	'3',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTUyNzk=',	1,	'2022-06-14 13:22:59',	'2022-06-14 13:22:59'),
(48,	'service',	'100MBS Plan',	'6',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU2NzQ=',	1,	'2022-06-14 13:32:36',	'2022-06-14 13:32:36'),
(49,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4NjM=',	1,	'2022-06-14 13:37:45',	'2022-06-14 13:37:45'),
(50,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4NjQ=',	1,	'2022-06-14 13:37:47',	'2022-06-14 13:37:47'),
(51,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4NjU=',	1,	'2022-06-14 13:37:48',	'2022-06-14 13:37:48'),
(52,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4Njc=',	1,	'2022-06-14 13:37:49',	'2022-06-14 13:37:49'),
(53,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4NzA=',	1,	'2022-06-14 13:37:51',	'2022-06-14 13:37:51'),
(54,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4NzE=',	1,	'2022-06-14 13:37:52',	'2022-06-14 13:37:52'),
(55,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4NzI=',	1,	'2022-06-14 13:37:53',	'2022-06-14 13:37:53'),
(56,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4Nzk=',	1,	'2022-06-14 13:37:55',	'2022-06-14 13:37:55'),
(57,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgwOTU4ODE=',	1,	'2022-06-14 13:37:56',	'2022-06-14 13:37:56'),
(58,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3MjM=',	1,	'2022-06-15 10:51:31',	'2022-06-15 10:51:31'),
(59,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3NDQ=',	1,	'2022-06-15 10:52:43',	'2022-06-15 10:52:43'),
(60,	'other',	'Test Cable',	'0',	'',	1,	'2022-06-15 10:52:57',	'2022-06-15 10:52:57'),
(61,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3NDc=',	1,	'2022-06-15 10:53:03',	'2022-06-15 10:53:03'),
(62,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3NDk=',	1,	'2022-06-15 10:53:11',	'2022-06-15 10:53:11'),
(63,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3NTQ=',	1,	'2022-06-15 10:53:17',	'2022-06-15 10:53:17'),
(64,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3NTc=',	1,	'2022-06-15 10:53:22',	'2022-06-15 10:53:22'),
(65,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3NTk=',	1,	'2022-06-15 10:53:26',	'2022-06-15 10:53:26'),
(66,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg3Njc=',	1,	'2022-06-15 10:53:30',	'2022-06-15 10:53:30'),
(67,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzg4MjI=',	1,	'2022-06-15 10:55:18',	'2022-06-15 10:55:18'),
(68,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzkxMTI=',	1,	'2022-06-15 11:07:19',	'2022-06-15 11:07:19'),
(69,	'other',	'Test Cable',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzkxMjE=',	1,	'2022-06-15 11:07:32',	'2022-06-15 11:07:32'),
(70,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'',	1,	'2022-06-15 11:21:21',	'2022-06-15 11:21:21'),
(71,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'',	1,	'2022-06-15 11:21:21',	'2022-06-15 11:21:21'),
(72,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'',	1,	'2022-06-15 11:23:31',	'2022-06-15 11:23:31'),
(73,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzk2MTA=',	1,	'2022-06-15 11:25:52',	'2022-06-15 11:25:52'),
(74,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzk2MTE=',	1,	'2022-06-15 11:25:54',	'2022-06-15 11:25:54'),
(75,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'',	1,	'2022-06-15 11:27:10',	'2022-06-15 11:27:10'),
(76,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzk2NTk=',	1,	'2022-06-15 11:27:10',	'2022-06-15 11:27:10'),
(77,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzk3NjE=',	1,	'2022-06-15 11:29:48',	'2022-06-15 11:29:48'),
(78,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzk3NzA=',	1,	'2022-06-15 11:30:14',	'2022-06-15 11:30:14'),
(79,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzk4ODU=',	1,	'2022-06-15 11:35:49',	'2022-06-15 11:35:49'),
(80,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxMzk4ODY=',	1,	'2022-06-15 11:35:50',	'2022-06-15 11:35:50'),
(81,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxNDAxNjQ=',	1,	'2022-06-15 11:48:56',	'2022-06-15 11:48:56'),
(82,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxNDAxNjY=',	1,	'2022-06-15 11:48:57',	'2022-06-15 11:48:57'),
(83,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxNDA5MjE=',	1,	'2022-06-15 12:14:50',	'2022-06-15 12:14:50'),
(84,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxNDA5MjI=',	1,	'2022-06-15 12:14:51',	'2022-06-15 12:14:51'),
(85,	'service',	'100MBS Plan 6/14/2022 – 7/13/2022',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxNDI1NjU=',	1,	'2022-06-15 13:08:50',	'2022-06-15 13:08:50'),
(86,	'product',	'Ubnt Nano M5',	'0',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1Byb2R1Y3Q6NzgxNDI1NjY=',	1,	'2022-06-15 13:08:52',	'2022-06-15 13:08:52');

DROP TABLE IF EXISTS `sales_taxes`;
CREATE TABLE `sales_taxes` (
  `idsales_taxes` int(11) NOT NULL AUTO_INCREMENT,
  `ST_Name` varchar(100) NOT NULL,
  `ST_Percentage` float NOT NULL,
  `ST_UISP_ID` varchar(200) NOT NULL,
  `ST_WAVE_ID` varchar(200) NOT NULL,
  PRIMARY KEY (`idsales_taxes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `sales_taxes`;
INSERT INTO `sales_taxes` (`idsales_taxes`, `ST_Name`, `ST_Percentage`, `ST_UISP_ID`, `ST_WAVE_ID`) VALUES
(1,	'G.S.T',	5,	'1',	'QnVzaW5lc3M6ZTY4ZWY2OGYtYjgyZS00NzEzLTlmNTYtYTg1NTI1ZjI3NWNlO1NhbGVzVGF4OjE4NTYzMzk4NDI=');

-- 2022-06-16 04:59:05