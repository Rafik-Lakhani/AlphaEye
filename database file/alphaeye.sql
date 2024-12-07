-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 04:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphaeye`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `addingtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantity` int(11) DEFAULT 1,
  `powertype` varchar(255) DEFAULT NULL,
  `lenstype` varchar(255) DEFAULT NULL,
  `lensprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`, `productid`, `addingtime`, `quantity`, `powertype`, `lenstype`, `lensprice`) VALUES
(2, 1, 19, '2024-10-06 09:49:08', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `men` varchar(255) DEFAULT NULL,
  `women` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'hidden',
  `setboth` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `men`, `women`, `status`, `setboth`, `image`) VALUES
(1, 'Aviator', NULL, 'show', NULL, '66fbdf04ef7c1.png'),
(2, 'Geometric', NULL, 'show', NULL, '66fbdf1377014.png'),
(3, NULL, 'CatEye', 'show', NULL, '66fbde7311ea0.png'),
(4, NULL, NULL, 'show', 'Wayfarer', '66fbdeb290713.png'),
(5, NULL, 'Round', 'show', NULL, '66fbde8d9b681.webp');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `powertype` varchar(255) DEFAULT NULL,
  `lenstype` varchar(255) DEFAULT NULL,
  `lensprice` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Ordered',
  `placeddate` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `productid`, `userid`, `quantity`, `powertype`, `lenstype`, `lensprice`, `status`, `placeddate`, `amount`) VALUES
(1, 22, 1, 1, 'Bifocal/Progressive Eyeglasses', 'Neo Digi with Anti Reflect', 2500, 'Ordered', '2024-10-06 15:18:49', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `mrp` int(11) NOT NULL DEFAULT 0,
  `maincategory` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'show',
  `addingdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `size` varchar(20) DEFAULT 'medium',
  `sellingprice` int(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `name`, `detail`, `mrp`, `maincategory`, `img1`, `img2`, `img3`, `img4`, `color`, `status`, `addingdate`, `size`, `sellingprice`, `subcategory`) VALUES
(1, 'Full Rim Geometric', 'Brand Name<br/>Vincent Chase<br/>Product Type<br/>Eyeglasses<br/>Frame Type<br/>Full Rim<br/>Frame Shape<br/>Geometric<br/>Model No.<br/>VC E13786<br/>Frame Size<br/>Narrow?<br/>Frame Width<br/>132 mm<br/>Frame Dimensions<br/>49-20-146<br/>Frame colour<br/>Silver<br/>Weight<br/>20 gm?<br/>Weight Group<br/>Light?<br/>Material<br/>Stainless Steel<br/>Frame Material<br/>Stainless Steel?<br/>Temple Material<br/>Stainless Steel?<br/>Prescription Type<br/>Bifocal / Progressive<br/>Frame Style<br/>Standard<br/>Frame Style Secondary<br/>Youth<br/>Collection<br/>SLEEK STEEL<br/>Product Warranty<br/>1 Year Manufacturer Warranty?<br/>Gender<br/>Unisex<br/>Height<br/>48 mm<br/>Condition<br/>New<br/>Temple Colour<br/>Silver Transparent', 7000, 'men', '66c976986ea0e.jpg', '66c976986f1d8.jpg', '66c976986f775.jpg', '66c976986ffeb.jpg', 'Silver ', 'show', '2024-08-24 05:58:48', 'narrow', 5000, 'Geometric'),
(2, 'Full Rim Geometric', 'Brand Name<br/>Vincent Chase<br/>Product Type<br/>Eyeglasses<br/>Frame Type<br/>Full Rim<br/>Frame Shape<br/>Geometric<br/>Model No.<br/>VC E13786<br/>Frame Size<br/>Narrow?<br/>Frame Width<br/>132 mm<br/>Frame Dimensions<br/>49-20-146<br/>Frame colour<br/>Silver<br/>Weight<br/>20 gm?<br/>Weight Group<br/>Light?<br/>Material<br/>Stainless Steel<br/>Frame Material<br/>Stainless Steel?<br/>Temple Material<br/>Stainless Steel?<br/>Prescription Type<br/>Bifocal / Progressive<br/>Frame Style<br/>Standard<br/>Frame Style Secondary<br/>Youth<br/>Collection<br/>SLEEK STEEL<br/>Product Warranty<br/>1 Year Manufacturer Warranty?<br/>Gender<br/>Unisex<br/>Height<br/>48 mm<br/>Condition<br/>New<br/>Temple Colour<br/>Silver Transparent', 7000, 'men', '66c9769872350.jpg', '66c976987296b.jpg', '66c9769872ecf.jpg', '66c9769873409.jpg', 'Gold', 'show', '2024-08-24 05:58:48', 'narrow', 5000, 'Geometric'),
(3, 'Vincent Chase Black Full Rim Geometric', 'Brand Name<br/>Vincent Chase<br/>Product Type<br/>Eyeglasses<br/>Frame Type<br/>Full Rim<br/>Frame Shape<br/>Geometric<br/>Model No.<br/>VC E17038<br/>Frame Size<br/>Extra Wide?<br/>Frame Width<br/>147 mm<br/>Frame Dimensions<br/>54-17-145<br/>Frame colour<br/>Black<br/>Weight<br/>34 gm?<br/>Weight Group<br/>Average?<br/>Material<br/>Acetate<br/>Frame Material<br/>Acetate?<br/>Temple Material<br/>Acetate?<br/>Prescription Type<br/>Bifocal / Progressive<br/>Frame Style<br/>Standard<br/>Frame Style Secondary<br/>Youth<br/>Collection<br/>Classic Acetate<br/>Product Warranty<br/>1 Year Manufacturer Warranty?<br/>Gender<br/>Unisex<br/>Height<br/>41 mm<br/>Condition<br/>New<br/>Temple Colour<br/>Black<br/>', 7000, 'men', '66c97a3e67098.jpg', '66c97a3e67363.jpg', '66c97a3e675a5.jpg', '66c97a3e677cb.jpg', 'Black ', 'show', '2024-08-24 06:14:22', 'large', 5000, 'Geometric'),
(4, 'Vincent Chase Black Full Rim Geometric', 'Brand Name<br/>Vincent Chase<br/>Product Type<br/>Eyeglasses<br/>Frame Type<br/>Full Rim<br/>Frame Shape<br/>Geometric<br/>Model No.<br/>VC E17038<br/>Frame Size<br/>Extra Wide?<br/>Frame Width<br/>147 mm<br/>Frame Dimensions<br/>54-17-145<br/>Frame colour<br/>Black<br/>Weight<br/>34 gm?<br/>Weight Group<br/>Average?<br/>Material<br/>Acetate<br/>Frame Material<br/>Acetate?<br/>Temple Material<br/>Acetate?<br/>Prescription Type<br/>Bifocal / Progressive<br/>Frame Style<br/>Standard<br/>Frame Style Secondary<br/>Youth<br/>Collection<br/>Classic Acetate<br/>Product Warranty<br/>1 Year Manufacturer Warranty?<br/>Gender<br/>Unisex<br/>Height<br/>41 mm<br/>Condition<br/>New<br/>Temple Colour<br/>Black<br/>', 7000, 'men', '66c97a3e6814c.jpg', '66c97a3e6844c.jpg', '66c97a3e686b4.jpg', '66c97a3e6897c.jpg', 'Blue', 'show', '2024-08-24 06:14:22', 'large', 5000, 'Geometric'),
(5, 'John Jacobs  Full Rim Cat Eye', '        Brand Name<br/>John Jacobs<br/>Product Type<br/>Eyeglasses<br/>Frame Type<br/>Full Rim<br/>Frame Shape<br/>Cat Eye<br/>Model No.<br/>JJ E13583<br/>Frame Size<br/>Medium?<br/>Frame Width<br/>135 mm<br/>Frame Dimensions<br/>50-19-145<br/>Frame colour<br/>Black<br/>Weight<br/>18 gm?<br/>Weight Group<br/>Light?<br/>Material<br/>Italian Acetate<br/>Frame Material<br/>Italian Acetate?<br/>Temple Material<br/>Stainless Steel?<br/>Prescription Type<br/>Bifocal / Progressive<br/>Frame Style<br/>Premium<br/>Frame Style Secondary<br/>Premium<br/>Collection<br/>Rich Acetate<br/>Product Warranty<br/>1 Year Manufacturer Warranty?<br/>Gender<br/>Women<br/>Height<br/>43 mm<br/>Condition<br/>New<br/>Temple Colour<br/>Silver Brown Tortoise<br/>', 5500, 'women', '66c97d322dc2f.jpg', '66c97d322df11.jpg', '66c97d322e17b.jpg', '66c97d322e3ae.jpg', 'SkyBlue', 'show', '2024-08-24 06:26:58', 'medium', 4000, 'CatEye'),
(6, 'John Jacobs  Full Rim Cat Eye', '        Brand Name<br/>John Jacobs<br/>Product Type<br/>Eyeglasses<br/>Frame Type<br/>Full Rim<br/>Frame Shape<br/>Cat Eye<br/>Model No.<br/>JJ E13583<br/>Frame Size<br/>Medium?<br/>Frame Width<br/>135 mm<br/>Frame Dimensions<br/>50-19-145<br/>Frame colour<br/>Black<br/>Weight<br/>18 gm?<br/>Weight Group<br/>Light?<br/>Material<br/>Italian Acetate<br/>Frame Material<br/>Italian Acetate?<br/>Temple Material<br/>Stainless Steel?<br/>Prescription Type<br/>Bifocal / Progressive<br/>Frame Style<br/>Premium<br/>Frame Style Secondary<br/>Premium<br/>Collection<br/>Rich Acetate<br/>Product Warranty<br/>1 Year Manufacturer Warranty?<br/>Gender<br/>Women<br/>Height<br/>43 mm<br/>Condition<br/>New<br/>Temple Colour<br/>Silver Brown Tortoise<br/>', 5500, 'women', '66c97d322ed8a.jpg', '66c97d322f09b.jpg', '66c97d322f3bd.jpg', '66c97d322f612.jpg', 'Black', 'show', '2024-08-24 06:26:58', 'medium', 4000, 'CatEye'),
(7, 'AirOnlineBluet Fullrim Aviato', '        Brand Name    		AirOnlineBluet<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 7000, 'men', '66e005aa5af0c.jpg', '66e005aa5b863.jpg', '66e005aa5c035.jpg', '66e005aa5c6ab.jpg', 'transfer ', 'show', '2024-09-10 08:39:06', 'large', 5000, 'Aviator'),
(8, 'AirOnlineBluet Fullrim Aviato', '        Brand Name    		AirOnlineBluet<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 7000, 'men', '66e005aa5db60.jpg', '66e005aa5e169.jpg', '66e005aa5e630.jpg', '66e005aa5eabf.jpg', 'Blue', 'show', '2024-09-10 08:39:06', 'large', 5000, 'Aviator'),
(9, 'AirOnlineBluet Fullrim Aviato', '        Brand Name    		AirOnlineBluet<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 7000, 'men', '66e005aa5f7cf.jpg', '66e005aa5fcb8.jpg', '66e005aa60165.jpg', '66e005aa6066f.jpg', 'black', 'show', '2024-09-10 08:39:06', 'large', 5000, 'Aviator'),
(10, 'JohnJacobs FullRim Aviator', '        Brand Name    		John Jacobs<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 5700, 'men', '66e006b91e30b.jpg', '66e006b91ed3e.jpg', '66e006b91f24c.jpg', '66e006b91f71b.jpg', 'black', 'show', '2024-09-10 08:43:37', 'medium', 4700, 'Aviator'),
(11, 'JohnJacobs FullRim Aviator', '        Brand Name    		John Jacobs<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 5700, 'men', '66e006b92055c.jpg', '66e006b920aa1.jpg', '66e006b920ff2.jpg', '66e006b92167b.jpg', 'transfer', 'show', '2024-09-10 08:43:37', 'medium', 4700, 'Aviator'),
(12, 'John Jacobs Gunmetal Full Rim Aviator', '        Brand Name    		John Jacobs<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 5000, 'men', '66e008d80f78a.jpg', '66e008d80ff2a.jpg', '66e008d810637.jpg', '66e008d810b8b.jpg', 'gold', 'show', '2024-09-10 08:52:40', 'medium', 2200, 'Aviator'),
(13, 'John Jacobs Gunmetal Full Rim Aviator', '        Brand Name    		John Jacobs<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 5000, 'men', '66e008d811d77.jpg', '66e008d8122a4.jpg', '66e008d81276f.jpg', '66e008d812c3a.jpg', 'Black', 'show', '2024-09-10 08:52:40', 'medium', 2200, 'Aviator'),
(14, 'John Jacobs Silver Rimless Aviator', '        Brand Name    		John Jacobs<br/>Product Type  		Eyeglasses<br/>Frame Type    		Full Rim<br/>Frame Shape   		Aviator<br/>Model No.     		JJ E13346<br/>Frame Size    		Wide?<br/>Frame Width   		139 mm<br/>Frame Dimensions	 53-19-145<br/>Frame colour		Black<br/>Weight			23 gm?<br/>Weight Group		Average?<br/>Material		Italian Acetate<br/>Frame Material		Italian Acetate?<br/>Temple Material		Italian Acetate?<br/>Prescription Type   	Bifocal / Progressive<br/>Frame Style  Premium<br/>Frame Style Secondary 	 Premium<br/>Collection 		 Rich Acetate<br/>Product Warranty 	 1 Year Manufacturer Warranty?<br/>Gender  Unisex<br/>Height  42 mm<br/>Condition  New<br/>Temple Colour  Black', 5000, 'men', '66e009b4b2ced.jpg', '66e009b4b33cb.jpg', '66e009b4b3a42.jpg', '66e009b4b4097.jpg', 'silver', 'show', '2024-09-10 08:56:20', 'narrow', 4500, 'Aviator'),
(15, 'Vincent Chase Full Rim Geometric', '        Brand Name		Vincent Chase<br/>Product Type		Eyeglasses<br/>Frame 			TypeFull Rim<br/>Frame 			ShapeGeometric<br/>Model No.		VC E14977<br/>Frame Size	Medium?<br/>Frame 			Width133 mm<br/>Frame 			Dimensions49-20-135<br/>Frame 			colourBrown Transparent<br/>Weight			20 gm?<br/>Weight 			GroupLight?<br/>Material		Cellulose Acetate & Stainless Steel<br/>Frame 			MaterialCellulose Acetate?<br/>Temple 			MaterialStainless Steel?<br/>Prescription		 TypeBifocal / Progressive<br/>Frame 				StyleStandard<br/>Frame Style		 SecondaryYouth<br/>Collection		Blend Edit<br/>Product Warranty	1 Year Manufacturer Warranty?<br/>Gender	Unisex<br/>Height			41 mm<br/>Condition		New<br/>Temple Colour		Silver Brown<br/>', 3500, 'men', '66e15a0b17b62.jpg', '66e15a0b17ea0.jpg', '66e15a0b18227.jpg', '66e15a0b18564.jpg', 'brown', 'show', '2024-09-11 08:51:23', 'medium', 2000, 'Geometric'),
(16, 'Vincent Chase Full Rim Geometric', '        Brand Name		Vincent Chase<br/>Product Type		Eyeglasses<br/>Frame 			TypeFull Rim<br/>Frame 			ShapeGeometric<br/>Model No.		VC E14977<br/>Frame Size		Medium?<br/>Frame 			Width133 mm<br/>Frame 			Dimensions49-20-135<br/>Frame 			colourBrown Transparent<br/>Weight			20 gm?<br/>Weight 			GroupLight?<br/>Material		Cellulose Acetate & Stainless Steel<br/>Frame 			MaterialCellulose Acetate?<br/>Temple 			MaterialStainless Steel?<br/>Prescription		 TypeBifocal / Progressive<br/>Frame 				StyleStandard<br/>Frame Style		 SecondaryYouth<br/>Collection		Blend Edit<br/>Product Warranty	1 Year Manufacturer Warranty?<br/>Gender	Unisex<br/>Height			41 mm<br/>Condition		New<br/>Temple Colour		Silver Brown<br/>', 3500, 'men', '66e15a0b197ec.jpg', '66e15a0b19b76.jpg', '66e15a0b19ebf.jpg', '66e15a0b1a1c9.jpg', 'pink', 'show', '2024-09-11 08:51:23', 'medium', 2000, 'Geometric'),
(17, 'Vincent Chase Brown Demi Full Rim Geometric', '        Brand Name		Vincent Chase<br/>Product Type		Eyeglasses<br/>Frame Type		Full Rim<br/>Frame Shape		Geometric<br/>Model No.		VC E17229<br/>Frame Size		Wide?<br/>Frame Width		139 mm<br/>Frame Dimensions	53-17-145<br/>Frame colour		Brown Demi<br/>Weight			26 gm?<br/>Weight GroupAverage?	Material<br/>AcetateFrame 		Material<br/>Acetate?		Temple 	Material<br/>Acetate?Prescription 	TypeBifocal / Progressive<br/>Frame Style		Standard<br/>Frame Style 		SecondaryYouth<br/>Collection		Classic Acetate<br/>Product Warranty	1 Year Manufacturer Warranty?<br/>Gender			Unisex<br/>Height			41 mm<br/>Condition		New<br/>Temple Colour		Brown Demi<br/><br/>', 3500, 'men', '66e15c200ed07.jpg', '66e15c200f06c.jpg', '66e15c200f363.jpg', '66e15c200f62d.jpg', 'brown', 'show', '2024-09-11 09:00:16', 'large', 2000, 'Geometric'),
(18, ' Vincent Chase  Transparent Full Rim Geometric  ', '        Brand Name		Vincent Chase<br/>Product Type		Eyeglasses<br/>Frame Type		Full Rim<br/>Frame Shape		Geometric<br/>Model No.		VC E17229<br/>Frame Size		medium<br/>Frame Width		139 mm<br/>Frame Dimensions	53-17-145<br/>Frame colour		Brown Demi<br/>Weight			26 gm?<br/>Weight GroupAverage?	Material<br/>AcetateFrame 		Material<br/>Acetate?		Temple 	Material<br/>Acetate?Prescription 	TypeBifocal / Progressive<br/>Frame Style		Standard<br/>Frame Style 		SecondaryYouth<br/>Collection		Classic Acetate<br/>Product Warranty	1 Year Manufacturer Warranty?<br/>Gender			Unisex<br/>Height			41 mm<br/>Condition		New<br/>Temple Colour		Brown Demi<br/><br/>', 5000, 'men', '66e15d4b53be9.jpg', '66e15d4b53f20.jpg', '66e15d4b541d8.jpg', '66e15d4b54587.jpg', 'Grey Transparent ', 'show', '2024-09-11 09:05:15', 'medium', 2500, 'Geometric'),
(19, 'Lenskart Air  Full Rim Geometric', '        Brand Name		Vincent Chase<br/>Product Type		Eyeglasses<br/>Frame Type		Full Rim<br/>Frame Shape		Geometric<br/>Model No.		VC E17229<br/>Frame Size		Wide?<br/>Frame Width		139 mm<br/>Frame Dimensions	53-17-145<br/>Frame colour		Brown Demi<br/>Weight			26 gm?<br/>Weight GroupAverage?	Material<br/>AcetateFrame 		Material<br/>Acetate?		Temple 	Material<br/>Acetate?Prescription 	TypeBifocal / Progressive<br/>Frame Style		Standard<br/>Frame Style 		SecondaryYouth<br/>Collection		Classic Acetate<br/>Product Warranty	1 Year Manufacturer Warranty?<br/>Gender			Unisex<br/>Height			41 mm<br/>Condition		New<br/>Temple Colour		Brown Demi<br/><br/>', 5000, 'men', '66e16014d0f95.jpg', '66e16014d1572.jpg', '66e16014d1a85.jpg', '66e16014d23e7.jpg', 'gray', 'show', '2024-09-11 09:17:08', 'medium', 2500, 'Geometric'),
(20, 'Lenskart Air  Full Rim Geometric', '        Brand Name		Vincent Chase<br/>Product Type		Eyeglasses<br/>Frame Type		Full Rim<br/>Frame Shape		Geometric<br/>Model No.		VC E17229<br/>Frame Size		Wide?<br/>Frame Width		139 mm<br/>Frame Dimensions	53-17-145<br/>Frame colour		Brown Demi<br/>Weight			26 gm?<br/>Weight GroupAverage?	Material<br/>AcetateFrame 		Material<br/>Acetate?		Temple 	Material<br/>Acetate?Prescription 	TypeBifocal / Progressive<br/>Frame Style		Standard<br/>Frame Style 		SecondaryYouth<br/>Collection		Classic Acetate<br/>Product Warranty	1 Year Manufacturer Warranty?<br/>Gender			Unisex<br/>Height			41 mm<br/>Condition		New<br/>Temple Colour		Brown Demi<br/><br/>', 5000, 'men', '66e16014d2f9f.jpg', '66e16014d32fc.jpg', '66e16014d35b9.jpg', '66e16014d385a.jpg', 'Blue', 'show', '2024-09-11 09:17:08', 'medium', 2500, 'Geometric'),
(21, 'Lenskart Air  Full Rim Geometric', '        Brand Name		Vincent Chase<br/>Product Type		Eyeglasses<br/>Frame Type		Full Rim<br/>Frame Shape		Geometric<br/>Model No.		VC E17229<br/>Frame Size		Wide?<br/>Frame Width		139 mm<br/>Frame Dimensions	53-17-145<br/>Frame colour		Brown Demi<br/>Weight			26 gm?<br/>Weight GroupAverage?	Material<br/>AcetateFrame 		Material<br/>Acetate?		Temple 	Material<br/>Acetate?Prescription 	TypeBifocal / Progressive<br/>Frame Style		Standard<br/>Frame Style 		SecondaryYouth<br/>Collection		Classic Acetate<br/>Product Warranty	1 Year Manufacturer Warranty?<br/>Gender			Unisex<br/>Height			41 mm<br/>Condition		New<br/>Temple Colour		Brown Demi<br/><br/>', 5000, 'men', '66e16014d4207.jpg', '66e16014d4625.jpg', '66e16014d49d2.jpg', '66e16014d4cca.jpg', 'green', 'show', '2024-09-11 09:17:08', 'medium', 2500, 'Geometric'),
(22, 'Hustlr Full Rim Wayfarer', 'Product Type Eyeglasses<br/>Frame Type Full Rim <br/>Frame Shape Wayfarer<br/>Model No. LA E15417-W<br/>Frame Width 139mm<br/>Frame Dimensions 50-20-145<br/>Weight 16gm<br/>Weight Group Light<br/>Material TR90 (Flexible Light-Weight)<br/>Frame Material TR90<br/>Temple Material  TR90<br/>Prescription Type  Bifocal / Progressive<br/>Frame Style Light-Weigh', 2500, 'both', '66e82a45e9554.png', '66e82a45e97df.png', '66e82a45e99b4.png', '66e82a45e9b85.png', 'SkyBlue', 'show', '2024-09-16 12:53:25', 'medium', 2000, 'Wayfarer'),
(23, 'Hustlr Full Rim Wayfarer', 'Product Type Eyeglasses<br/>Frame Type Full Rim <br/>Frame Shape Wayfarer<br/>Model No. LA E15417-W<br/>Frame Width 139mm<br/>Frame Dimensions 50-20-145<br/>Weight 16gm<br/>Weight Group Light<br/>Material TR90 (Flexible Light-Weight)<br/>Frame Material TR90<br/>Temple Material  TR90<br/>Prescription Type  Bifocal / Progressive<br/>Frame Style Light-Weigh', 2500, 'both', '66e82a45ebc6b.png', '66e82a45ebf19.png', '66e82a45ec0f2.png', '66e82a45ec2e3.jpg', 'greenyellow', 'show', '2024-09-16 12:53:25', 'medium', 2000, 'Wayfarer'),
(24, 'Hustlr Full Rim Wayfarer', 'Product Type Eyeglasses<br/>Frame Type Full Rim <br/>Frame Shape Wayfarer<br/>Model No. LA E15417-W<br/>Frame Width 139mm<br/>Frame Dimensions 50-20-145<br/>Weight 16gm<br/>Weight Group Light<br/>Material TR90 (Flexible Light-Weight)<br/>Frame Material TR90<br/>Temple Material  TR90<br/>Prescription Type  Bifocal / Progressive<br/>Frame Style Light-Weigh', 2500, 'both', '66e82a45ed227.png', '66e82a45ed4b1.png', '66e82a45ed68f.png', '66e82a45ed819.png', 'pink', 'show', '2024-09-16 12:53:25', 'medium', 2000, 'Wayfarer'),
(25, 'Hustlr Full Rim Wayfarer', 'Product Type Eyeglasses<br/>Frame Type Full Rim <br/>Frame Shape Wayfarer<br/>Model No. LA E15417-W<br/>Frame Width 139mm<br/>Frame Dimensions 50-20-145<br/>Weight 16gm<br/>Weight Group Light<br/>Material TR90 (Flexible Light-Weight)<br/>Frame Material TR90<br/>Temple Material  TR90<br/>Prescription Type  Bifocal / Progressive<br/>Frame Style Light-Weigh', 2500, 'both', '66e82a45edcfd.png', '66e82a45edf2f.png', '66e82a45ee130.png', '66e82a45ee3ac.png', 'Purple', 'show', '2024-09-16 12:53:25', 'medium', 2000, 'Wayfarer'),
(27, ' Transparent Full Rim Round', ' Brand Name Lenskart Air<br/>Product Type Eyeglasses<br/>Frame Type Full Rim<br/>Frame Shape Round<br/>Frame Width 132 mm<br/>Frame Dimensions 48-18-145<br/>Weight 13 gm<br/>Weight Group Light?<br/>Material Ultem<br/>Frame Material Ultem<br/>Temple Material Ultem?<br/>Prescription Type Bifocal / Progressive<br/>Frame Style Light-Weight<br/>Frame Style Secondary Standard<br/>Collection Air Flex<br/>Product Warranty 1 Year Manufacturer Warranty?<br/>Height 40 mm<br/>', 1600, 'women', '670297ed34378.png', '670297ed34baa.png', '670297ed34efd.png', '670297ed3513e.png', 'Violet', 'show', '2024-10-06 14:00:13', 'medium', 1200, 'Round'),
(28, ' Transparent Full Rim Round', ' Brand Name Lenskart Air<br/>Product Type Eyeglasses<br/>Frame Type Full Rim<br/>Frame Shape Round<br/>Frame Width 132 mm<br/>Frame Dimensions 48-18-145<br/>Weight 13 gm<br/>Weight Group Light?<br/>Material Ultem<br/>Frame Material Ultem<br/>Temple Material Ultem?<br/>Prescription Type Bifocal / Progressive<br/>Frame Style Light-Weight<br/>Frame Style Secondary Standard<br/>Collection Air Flex<br/>Product Warranty 1 Year Manufacturer Warranty?<br/>Height 40 mm<br/>', 1600, 'women', '670297ed35c05.png', '670297ed35e56.png', '670297ed3604b.jpg', '670297ed36215.png', 'DodgerBlue', 'show', '2024-10-06 14:00:13', 'medium', 1200, 'Round');

-- --------------------------------------------------------

--
-- Table structure for table `useraddres`
--

CREATE TABLE `useraddres` (
  `userid` int(11) DEFAULT NULL,
  `Phonenumber` int(10) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraddres`
--

INSERT INTO `useraddres` (`userid`, `Phonenumber`, `street`, `city`, `state`, `country`, `pincode`) VALUES
(1, 999999999, 'Millennium 2 Complex, Upasana Cir', 'Surendranagar', 'Gujarat', 'India', 363002);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `joindate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `useremail`, `password`, `status`, `joindate`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$G18NhcW7znA1apU6MfwGd.0JmlnHq4LUFikypp.eO3PUS9CAYA5Ca', 0, '2024-10-06 09:19:25'),
(2, 'admin', 'admin@gmail.com', '$2y$10$lGoIdSTeB4wqGTZtz.SpUeznOKnLHbIJaZMZiM5YUMp4mQnSo5ddO', 1, '2024-10-06 09:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `userprescription`
--

CREATE TABLE `userprescription` (
  `prescriptionid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `leftSPH` float NOT NULL,
  `rightSPH` float NOT NULL,
  `leftCYL` float NOT NULL,
  `rightCYL` float NOT NULL,
  `leftAXIS` float NOT NULL,
  `rightAXIS` int(11) NOT NULL,
  `leftADD` float NOT NULL,
  `rightADD` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userprescription`
--

INSERT INTO `userprescription` (`prescriptionid`, `orderid`, `userid`, `productid`, `leftSPH`, `rightSPH`, `leftCYL`, `rightCYL`, `leftAXIS`, `rightAXIS`, `leftADD`, `rightADD`) VALUES
(1, 1, 1, 22, -0.25, -0.25, -0.5, -0.5, 90, 22, 0.75, 0.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `useraddres`
--
ALTER TABLE `useraddres`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `useremail` (`useremail`);

--
-- Indexes for table `userprescription`
--
ALTER TABLE `userprescription`
  ADD PRIMARY KEY (`prescriptionid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userprescription`
--
ALTER TABLE `userprescription`
  MODIFY `prescriptionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
