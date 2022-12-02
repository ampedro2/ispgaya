-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Fev-2020 às 18:01
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siteispg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cartao`
--

CREATE TABLE `tbl_cartao` (
  `numidentificacao` int(11) NOT NULL,
  `numcartao` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Data` date NOT NULL,
  `entregue` varchar(255) NOT NULL DEFAULT 'Nao'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_cartao`
--

INSERT INTO `tbl_cartao` (`numidentificacao`, `numcartao`, `nome`, `apelido`, `Email`, `Data`, `entregue`) VALUES
(5, 12345678, 'ricardo', 'nogueira', 'acer@sapo.pt', '2020-01-15', 'Nao'),
(14123, 31241, 'pedro', 'deawedwaeda', 'administrador@gmail.com', '2020-01-10', 'Sim'),
(31231, 312313123, 'deawdeawdewadeaw', 'deawdeawdeaw', 'alexandre@gmail.com', '2020-01-14', 'Nao'),
(32131, 2147483647, '31312312', 'aecawecwa', 'ecawceacewa@e.com', '2020-01-20', 'Nao'),
(131231, 31231321, 'pedro', 'deadeawdeaw', 'alexandre@gmail.com', '2020-01-28', 'Nao'),
(321312, 31231231, 'daedawd', 'edawedwadea', 'alexandre@gmail.com', '2020-01-07', 'Sim'),
(13214123, 123457, 'daedawd', 'nogueira', 'oteuemail@gmail.com', '2020-01-09', 'Nao'),
(32132131, 123213123, 'dawedawedaw', 'edwadewadewa', '123213@gmail.com', '2020-01-28', 'Sim'),
(342134231, 3414231, 'pedro', 'rgdswedrcdsa', 'pedro-pedrocas@hotmail.com', '2020-01-16', 'Nao'),
(1234314231, 2147483647, 'rsvaacsdacXDS', 'AECACWEA', 'pedropedrocas213@gmail.com', '2020-01-15', 'Nao'),
(2147483647, 54123643, 'pedro', 'daesvsaewsqwedvd', 'deus@gmail.com', '2020-01-22', 'Nao'),
(2147483647, 2147483647, 'fsdacfvcsas', 'dscfsasdscsas', 'oteuemail@gmail.com', '2020-01-16', 'Nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'a13798', 'administrador@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Pedro', 'pedro-pedrocas@hotmail.com', 'd3ce9efea6244baa7bf718f12dd0c331'),
(3, 'Pedroea', '123131312', 'c6cc8094c2dc07b700ffcc36d64e2138'),
(4, 'lalalala', 'lalala@gmail.com', '9aa6e5f2256c17d2d430b100032b997c'),
(5, '12345', '12345@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'pedro123', 'pedro123@gmail.com', 'd3ce9efea6244baa7bf718f12dd0c331'),
(7, 'pedro4321', 'pedro4321@gmail.com', 'd3ce9efea6244baa7bf718f12dd0c331'),
(8, '10000', 'pedropedrocas213@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(9, 'pedro123', 'pedropedrocas213@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cartao`
--
ALTER TABLE `tbl_cartao`
  ADD PRIMARY KEY (`numidentificacao`,`numcartao`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
