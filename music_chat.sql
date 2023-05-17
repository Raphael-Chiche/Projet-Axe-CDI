-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 17 mai 2023 à 19:36
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `music_chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE `chats` (
  `id` int NOT NULL,
  `userId` int NOT NULL,
  `contenu` text COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `theme` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pseudoChat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chats`
--

INSERT INTO `chats` (`id`, `userId`, `contenu`, `date`, `theme`, `image`, `pseudoChat`) VALUES
(51, 17, 'a', '2023-04-12 21:53:26', 'chatMetal', '', 'a'),
(52, 17, 'a', '2023-04-12 21:53:31', 'chatMetal', '', 'a'),
(53, 17, 'a', '2023-04-12 21:53:35', 'chatJazz', '', 'a'),
(54, 17, 'a', '2023-04-12 21:53:40', 'chatRap', '', 'a'),
(55, 17, 'a', '2023-04-12 21:53:45', 'chatPop', '', 'a'),
(56, 18, 'b', '2023-04-12 21:54:26', 'chatFunk', '', 'b'),
(58, 18, 'ddddddddddddddddddddddddddddddddddddddddddddddddddddd hjggg    hjhgjhgkgjhgkkjhg', '2023-04-12 22:21:48', 'chatElectro', '', 'b'),
(59, 18, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', '2023-04-12 22:30:47', '', '', 'b'),
(60, 17, 'a', '2023-04-13 11:13:48', 'chatMetal', '', 'a'),
(61, 17, 'aaa', '2023-04-13 11:13:55', 'chatRock', '', 'a'),
(64, 17, 'sdfsd', '2023-04-13 11:47:17', 'chatMetal', 'Monkey_Mother.png', 'a'),
(66, 19, 'azdqsdqsdezaazd', '2023-04-13 13:46:10', 'chatFunk', '', 'scarfacedugetho'),
(67, 17, 'gherfe', '2023-04-14 11:46:50', 'chatPop', '', 'a'),
(68, 17, 'gherfe', '2023-04-14 11:48:28', 'chatMetal', '', 'a'),
(70, 17, 'gherfegdssdgdgs', '2023-04-14 12:42:33', 'chatJazz', '1183004.jpg', 'a'),
(71, 17, 'gherfegds', '2023-04-14 12:45:09', 'chatRock', '', 'a'),
(72, 17, 'gherfegdsdfg', '2023-04-14 12:49:56', 'chatRock', '', 'a'),
(73, 17, 'dfgdfgqsd', '2023-04-14 14:46:10', 'chatRap', '', 'a'),
(74, 20, 'ça tchat ou quoi l\'équipe #cool', '2023-04-17 11:54:11', 'chatRock', 'photo_1625062095.jpg', 'erwan'),
(76, 17, 'dfsgdfgdgf', '2023-04-27 08:47:59', 'chatMetal', 'perso rouge.png', 'a'),
(77, 17, 'qsdqsd', '2023-04-27 08:49:16', 'chatRock', 'Capture d’écran 2023-04-05 103815.png', 'a'),
(78, 17, 'qsdqxdqsdf', '2023-05-03 11:48:12', 'chatRap', '', 'a'),
(79, 17, 'sdfdsfds', '2023-05-03 11:50:06', 'chatClassique', '', 'a'),
(80, 17, 'sqdqsd', '2023-05-03 11:52:00', 'chatPop', '', 'a'),
(81, 17, 'qsd', '2023-05-12 12:13:18', 'chatFunk', '', 'a'),
(82, 17, 'rap', '2023-05-12 12:16:41', 'chatRap', '', 'a'),
(83, 17, 'eletro', '2023-05-12 12:17:25', 'chatElectro', '', 'a'),
(84, 17, 'rap', '2023-05-15 12:42:42', 'chatRap', '', 'a'),
(85, 17, 'coucou', '2023-05-15 12:43:05', 'chatClassique', '', 'a'),
(86, 17, 'metal', '2023-05-15 12:43:29', 'chatMetal', '', 'a'),
(87, 17, 'rap', '2023-05-15 15:20:01', 'chatRap', '', 'a'),
(88, 17, 'funk', '2023-05-15 15:20:13', 'chatFunk', '', 'a'),
(89, 22, 'qsd', '2023-05-17 15:52:02', 'chatPop', '', '123');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `pseudo`) VALUES
(1, 'Chiche@gmail.com', '$2y$10$MUJNWWRg/t71vPnAfPgSXuizIIXTjIe1m8WJ5317js7tAtz0tX.a2', ''),
(2, 'chiche@chiche.fr', '$2y$10$8T4q8GG8rnLpUQAT5WNrYuFhc6YSdl0D2hWsWYAxEv1eSpIiWmvj6', ''),
(3, 'chicheraphael@chiche.fr', '$2y$10$4Ufnl3S9YvE9lqTANAlh2OOCiqxJpKpCGLIo6K/SjCiUQlHbzMjEi', ''),
(4, 'chicheraphael@chiche.fr', '$2y$10$VGUG6MXrb4zYKzSFl5cWnetNpZbLz6r83DcZVHmSPvQGLX39KelYK', ''),
(5, 'Chiche@test.fr', '$2y$10$EcqEYwltHqmDOWskiPf/X.IfC2r4730RQHJSyaMN0iDEAx0DNb0xe', ''),
(6, 'Chiche@test.fr', '$2y$10$cXvyLpxwH21xLZTTd8NOV.XuyNqO5qquCmeQbGbiNiM0j4lgxnT5a', ''),
(7, 'Chiche@g.fr', '$2y$10$IttHcS2jhxz//UoaT3EGPO0M33ZAbgDdCOC6TDZz/2Z44amPeSM5m', ''),
(8, 'Chiche@dfsdf.fr', '$2y$10$F7nhaFyLXtLFscHyWQBX7OomabYMhnw0PFzVZITRnhjuRyRMAMJ1u', ''),
(9, 'Chiche@sdjqsdsd.fr', '$2y$10$G3R/fLcuI29XnWro/FIgaeWEyEERTQ6IbdSL47p05LXPRkx.9W3pS', ''),
(10, 'Chiche@dsfdsf.fr', '$2y$10$29ig0SGjk1BRJY5j.o3oh.sRvA08WEVz54yOJs6nbtr0YotAvkhb6', ''),
(11, 'Chiche@123', '$2y$10$s/SLmSq6FdkLwy5qSrCWHOYWxUUPg35JvtZw57i13bf/.qtlnSnWm', ''),
(12, 'Chiche@123', '$2y$10$LG9L0qeTYGH2ldN7MAhYNeCaTOs7yHjjgBFdYXHbCgOUrHzcB0Oim', ''),
(13, 'Chiche@123', '$2y$10$afzSRSkPQnMwR1G8/ufH9e0JBrZHUDAOy9s0eHxtFPK6P5WpnACam', ''),
(14, 'Chiche@132321', '$2y$10$fp3LtNnOOL99fFbc182hfOWHMjXzsGdvqMrH9yIjRUPLjLXaBXZye', ''),
(15, 'Chiche@123', '$2y$10$2DUnd29Ky79QcsY3rP/wXuxLqFBwvSMQQA2RWaVcHZARNjeOWaBBW', ''),
(17, 'Chiche@a', '$2y$10$JiTnUBSqNAQhuehjloWjhO7IGvE0J4RSDJodCobMcA62wF5dC.dYS', 'a'),
(18, 'Chiche@b', '$2y$10$4xr2u6Rqa9RCht6ZSCHHnuudibcUBfj2y0BJCeRTAUPo23t651/Xu', 'b'),
(19, 'scarfacedugetho@desbarre.com', '$2y$10$heoopn5bll/dBJFqm44Bp.ySvEWri6UmulYdlqMBfstBOEWINsdVy', 'scarfacedugetho'),
(20, 'Chiche@erwan', '$2y$10$WC39Ry4phwiF0JtcERd5FeeZMrOI/YZ2RdedssB96Bk8i4Vb83Ou6', 'erwan'),
(21, 'Chiche@kistou', '$2y$10$Wl7BSsze3qIOExey3RBx5.RpKrT/YQmjND/u0NeEt2CphuggBdhHe', 'kitsou'),
(22, 'Chiche@az', '$2y$10$xN2yUor85W6osCXlQH9BauKxOj.8S26IbLgHv3o/.mcfDfm9ZCP2O', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;