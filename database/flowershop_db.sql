-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2025 at 08:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowershop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('REiQJsnrxGHnChtxFkUy', 'JV6MWjIG86SpClUJPZr5', 'pT87C2JdET38gMLcYxvn', 2000, 1),
('3hOXl8kbzPc45ulAzD5M', 'JV6MWjIG86SpClUJPZr5', '37T79cKkEpUMiWuLa5Mp', 1600, 1),
('b6sao1Jb4StXicctP772', 'JV6MWjIG86SpClUJPZr5', 'LFNlqI5MoXmgGX6Glng3', 5000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `subject`, `message`) VALUES
('BcJ6xzaHoiS05nG2JtyM', 'LDBecATFmd5I55bBfrA1', 'Demo Customer', 'demo.customer@example.com', 'regarding selling purpose', ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, temporibus sequi. Voluptatibus laboriosam recusandae voluptas sequi quo tempore ea aspernatur quod! Distinctio nobis at quo, a praesentium magni odit vitae aspernatur obcaecati quam nihil quis odio veritatis similique doloremque numquam dignissimos reprehenderit placeat illum alias?'),
('Q4vU7Nt00etU7L3lieMs', 'LDBecATFmd5I55bBfrA1', 'Demo Customer', 'demo.customer@example.com', 'how product sell on website', ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, temporibus sequi. Voluptatibus laboriosam recusandae voluptas sequi quo tempore ea aspernatur quod! Distinctio nobis at quo, a praesentium magni odit vitae aspernatur obcaecati quam nihil quis odio veritatis similique doloremque numquam dignissimos reprehenderit placeat illum alias?');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_type` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'in progress',
  `payment_status` varchar(200) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `seller_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`, `payment_status`) VALUES
('Vh01Nb187HCRCMRRoXQV', 'LDBecATFmd5I55bBfrA1', 'jZvuRzyG4OWSZZKEXFo7', 'Demo Customer', 0, 'demo.customer@example.com', 'Demo address, Demo city, Tanzania', '', 'home', 'P94fnESdipNhKLbu7Z5f', 150, '1', '2025-10-02', 'canceled', 'pending'),
('Vh01Nb187HCRCMRRoXQV', 'LDBecATFmd5I55bBfrA1', 'jZvuRzyG4OWSZZKEXFo7', 'Demo Customer', 0, 'demo.customer@example.com', 'Demo address, Demo city, Tanzania', '', 'home', 'pT87C2JdET38gMLcYxvn', 2000, '1', '2025-10-02', 'canceled', 'pending'),
('Vh01Nb187HCRCMRRoXQV', 'LDBecATFmd5I55bBfrA1', 'jZvuRzyG4OWSZZKEXFo7', 'Demo Customer', 0, 'demo.customer@example.com', 'Demo address, Demo city, Tanzania', '', 'home', 'N4OMqQps8lr1HlwMGs26', 10000, '1', '2025-10-02', 'canceled', 'pending'),
('Vh01Nb187HCRCMRRoXQV', 'LDBecATFmd5I55bBfrA1', 'jZvuRzyG4OWSZZKEXFo7', 'Demo Customer', 0, 'demo.customer@example.com', 'Demo address, Demo city, Tanzania', '', 'home', 'LFNlqI5MoXmgGX6Glng3', 5000, '1', '2025-10-02', 'canceled', 'pending'),
('oaFR3GwJ8lj5j19GSwtM', 'LDBecATFmd5I55bBfrA1', 'jZvuRzyG4OWSZZKEXFo7', 'Demo Customer', 0, 'demo.customer@example.com', 'Demo address, Demo city, Tanzania', 'home', 'credit or debit card', 'P94fnESdipNhKLbu7Z5f', 150, '1', '2025-10-02', 'in progress', 'pending'),
('oaFR3GwJ8lj5j19GSwtM', 'LDBecATFmd5I55bBfrA1', 'jZvuRzyG4OWSZZKEXFo7', 'Demo Customer', 0, 'demo.customer@example.com', 'Demo address, Demo city, Tanzania', 'home', 'credit or debit card', 'pT87C2JdET38gMLcYxvn', 2000, '1', '2025-10-02', 'in progress', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(20) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` varchar(500) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `name`, `price`, `image`, `stock`, `product_detail`, `status`) VALUES
('P94fnESdipNhKLbu7Z5f', 'jZvuRzyG4OWSZZKEXFo7', 'red roses', 150, 'HARROHT12-1.jpg', '2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ad numquam dolore quia sapiente eligendi itaque laboriosam magnam, facilis placeat, tenetur labore illum quo, nihil eum provident ea facere! Alias aspernatur quis voluptatibus eligendi quia vero labore minima molestiae dicta?', 'active'),
('pT87C2JdET38gMLcYxvn', 'jZvuRzyG4OWSZZKEXFo7', 'birthday flower', 2000, 'product1.webp', '50', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nostrum est suscipit fugit minima quae aliquid quisquam odio quod enim cum vitae, ab autem ullam ex perspiciatis tempore impedit voluptas!', 'active'),
('LFNlqI5MoXmgGX6Glng3', 'jZvuRzyG4OWSZZKEXFo7', 'hotel flower', 5000, 'product12.webp', '10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nostrum est suscipit fugit minima quae aliquid quisquam odio quod enim cum vitae, ab autem ullam ex perspiciatis tempore impedit voluptas!', 'active'),
('37T79cKkEpUMiWuLa5Mp', 'jZvuRzyG4OWSZZKEXFo7', 'table flower', 1600, 'product.avif', '50', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nostrum est suscipit fugit minima quae aliquid quisquam odio quod enim cum vitae, ab autem ullam ex perspiciatis tempore impedit voluptas!', 'active'),
('N4OMqQps8lr1HlwMGs26', 'jZvuRzyG4OWSZZKEXFo7', 'wedding flower', 10000, 'product14.jpg', '20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ex mollitia hic deserunt pariatur veniam similique, blanditiis necessitatibus! Quidem cupiditate consectetur voluptatum tempora hic. Quam perferendis suscipit consequuntur, incidunt officia enim quo accusantium rerum doloribus, veniam voluptatum atque, ducimus repellat.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `password`, `image`) VALUES
('eT82CgUjrC6REEP0sssv', 'Demo Shop Owner', 'demo.owner@example.com', 'demo123', 'wJtVHBM2AxBtkQQ1DM9M.jpg'),
('4p29PZDF9ECoEOaCz854', 'Demo Seller', 'demo.seller@example.com', 'demo123', '7Dj8j9tclRL7U8cXcwBP.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('LDBecATFmd5I55bBfrA1', 'Demo Customer', 'demo.customer@example.com', 'demo123', 'TWDLlbxstnNDmr2gdRsZ.webp');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `price`) VALUES
('PzgoMLpXJsAr96JpCTQW', 'JV6MWjIG86SpClUJPZr5', '37T79cKkEpUMiWuLa5Mp', '1600'),
('vBMu3tleMNxPzFCGRvBS', 'JV6MWjIG86SpClUJPZr5', 'LFNlqI5MoXmgGX6Glng3', '5000'),
('Qtzclp4ZlL3V6BzBOulT', 'LDBecATFmd5I55bBfrA1', 'pT87C2JdET38gMLcYxvn', '2000'),
('bRyuW6i9CL251pu6k9nw', 'LDBecATFmd5I55bBfrA1', 'N4OMqQps8lr1HlwMGs26', '10000'),
('kSbwykTstNJgBHGkpMN9', 'LDBecATFmd5I55bBfrA1', 'P94fnESdipNhKLbu7Z5f', '150');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
