-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3309
-- Généré le : mer. 01 mai 2024 à 15:39
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(7, '3', 1),
(2, '', 1),
(2, '4', 1),
(8, '4', 1),
(6, '4', 1),
(3, '4', 1),
(2, ' 4', 2),
(8, ' 4', 1),
(7, '  4', 1),
(4, '  4', 1),
(5, '  4', 1),
(2, '  2', 1),
(3, '   2', 1),
(2, '    2', 1),
(1, ' 4', 1),
(3, ' 4', 1),
(4, ' 4', 1),
(8, '  4', 1),
(7, '204', 1),
(8, ' 2', 2),
(7, ' 2', 1),
(6, ' 2', 1),
(5, ' 2', 1),
(4, ' 2', 1),
(1, ' 2', 1),
(2, ' 2', 1),
(2, '2', 1),
(3, '2', 1),
(4, '2', 1),
(11, '4', 1),
(5, '3', 1),
(4, '3', 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_brand` varchar(20) NOT NULL,
  `product_price` varchar(15) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  `product_cylindre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_img`, `product_cylindre`) VALUES
(1, 'TMAX 560 DX', 'YAMAHA', '17500', 'tmax.jpg', '560 CC'),
(2, 'YAMAHA R1', 'YAMAHA', '18000', 'r1.jpeg', '1000 CC'),
(3, 'HONDA X-ADV', 'HONDA', '19000', 'X-ADV-Argent.jpg', '700 CC'),
(4, 'BMW GS-1250', 'BMW', '25000', 'BMW GS.jpg', '1250 CC'),
(5, 'SUZUKI GSXR-1000', 'SUZUKI', '18300', 'GSXR1000.jpg', '1000 CC'),
(6, 'YAMAHA XTX-660', 'YAMAHA', '15200', 'Yamaha-XT660X.jpg', '660 CC'),
(7, 'HONDA CBR-1000rr', 'HONDA ', '28000', 'cbr1000rr.jpg', '1000 CC'),
(8, 'YAMAHA YZ-125', 'YAMAHA', '70000', 'Yamaha-YZ-White-Graphics-Kit-1.jpg', '125 CC'),
(11, 'YAMAHA MT-07', 'YAMAHA', '14500', 'mt07.webp', '700 CC'),
(12, 'YAMAHA MT-07', 'YAMAHA', '14500', 'mt07.webp', '700 CC');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `phone_number`) VALUES
(2, 'zakaria lamkadmi', 'zakarialamkadmi5@gmail.com', 'zakaria123', 695019595),
(3, 'hamza', 'hamza@gmail.com', 'hamza123', 695019595),
(4, 'yahya', 'yahya@gmail.com', 'yahya123', 695019595);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart_details`
--
ALTER TABLE `cart_details`
  ADD KEY `product_id` (`product_id`) USING BTREE;

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
