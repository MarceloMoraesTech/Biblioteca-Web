-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 06:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `estoque`
--

CREATE TABLE `estoque` (
  `estoqueID` int(11) NOT NULL,
  `quantidadeTotal` smallint(6) NOT NULL,
  `quantidadeRecebida` smallint(6) NOT NULL,
  `dataAtualizacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estoque`
--

INSERT INTO `estoque` (`estoqueID`, `quantidadeTotal`, `quantidadeRecebida`, `dataAtualizacao`) VALUES
(1, 6, 2, '2019-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `fornecedores`
--

CREATE TABLE `fornecedores` (
  `fornecedoresID` int(11) NOT NULL,
  `nomeFornecedor` varchar(30) NOT NULL,
  `endereco` varchar(65) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `telefone` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fornecedores`
--

INSERT INTO `fornecedores` (`fornecedoresID`, `nomeFornecedor`, `endereco`, `cidade`, `telefone`) VALUES
(1, 'Salem', 'Rua da Lindez, 30', 'Perfeição', '+55 51 99999-999');

-- --------------------------------------------------------

--
-- Table structure for table `funcionários`
--

CREATE TABLE `funcionários` (
  `funcionarioID` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data_contratacao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionários`
--

INSERT INTO `funcionários` (`funcionarioID`, `nome`, `data_contratacao`) VALUES
(1, 'Nadine Zíngano', '2019-08-12'),
(2, 'Marcelo', '2018-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `livros`
--

CREATE TABLE `livros` (
  `livrosID` int(11) NOT NULL,
  `titulo` varchar(65) NOT NULL,
  `anoPublicacao` smallint(6) NOT NULL,
  `edicao` smallint(11) NOT NULL,
  `editora` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`livrosID`, `titulo`, `anoPublicacao`, `edicao`, `editora`) VALUES
(1, 'O Guia do Mochileiro das Galáxias\r\n', 1999, 1, 'Iggy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`estoqueID`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`fornecedoresID`);

--
-- Indexes for table `funcionários`
--
ALTER TABLE `funcionários`
  ADD PRIMARY KEY (`funcionarioID`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`livrosID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `estoqueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `fornecedoresID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `funcionários`
--
ALTER TABLE `funcionários`
  MODIFY `funcionarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `livrosID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`estoqueID`) REFERENCES `livros` (`livrosID`),
  ADD CONSTRAINT `estoque_ibfk_2` FOREIGN KEY (`estoqueID`) REFERENCES `funcionários` (`funcionarioID`);

--
-- Constraints for table `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`livrosID`) REFERENCES `fornecedores` (`fornecedoresID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
