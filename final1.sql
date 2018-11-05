-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2018 às 21:42
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhamento`
--

CREATE TABLE `acompanhamento` (
  `idacompanhamento` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `fkvenda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `idcidade` int(10) UNSIGNED NOT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`idcidade`, `uf`, `estado`, `nome`) VALUES
(1, 'Ma', 1, ''),
(2, 'Ma', 2, ''),
(3, 'Ma', 3, ''),
(4, 'Ma', 4, ''),
(6, 'RS', 8, 'caicara'),
(7, 'PR', 9, 'curitiba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `logradouro` varchar(150) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `datanascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `logradouro`, `cpf`, `datanascimento`) VALUES
(1, 'vanessa', 'Minha casa haha', '99999999999', '2018-10-10'),
(2, 'mauricio zatt', '', '', '2018-10-01'),
(3, 'Bolsonaro', '', '', '2018-10-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `idestado` int(10) UNSIGNED NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`idestado`, `nome`, `uf`) VALUES
(6, 'Minas', 'MG'),
(8, 'Rio grande do SUl', 'RS'),
(9, 'Parana', 'PR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formapagamento`
--

CREATE TABLE `formapagamento` (
  `idforma` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formapagamento`
--

INSERT INTO `formapagamento` (`idforma`, `nome`) VALUES
(3, 'A vista'),
(4, 'cartao de credito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensvendasp`
--

CREATE TABLE `itensvendasp` (
  `iditensvendasp` int(11) NOT NULL,
  `fkproduto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensvendass`
--

CREATE TABLE `itensvendass` (
  `iditensvendass` int(11) NOT NULL,
  `fkservico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `valor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `valor`) VALUES
(1, 'Pneu Aro 17', '55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idservico` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `valor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idservico`, `nome`, `valor`) VALUES
(1, 'Troca de pneu', '75'),
(2, 'troca de filtro', '44'),
(3, 'Pintura', '5000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `cargo` varchar(2) DEFAULT NULL,
  `emp_fil_codigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `login`, `senha`, `nivel`, `cargo`, `emp_fil_codigo`) VALUES
(1, 'teste', 'teste', '123', '1', NULL, 0),
(5, 'teste1', 'teste1', '123', '0', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `idveiculo` int(10) UNSIGNED NOT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `ano` int(10) DEFAULT NULL,
  `Modelo` varchar(150) DEFAULT NULL,
  `fkcliente` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`idveiculo`, `placa`, `ano`, `Modelo`, `fkcliente`) VALUES
(6, 'BUN321', 1990, 'Chevete', 5),
(7, 'fuf1234', 1233, 'Saveiro cross', 4),
(8, 'CAG3432', 1998, 'golf Sapao', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idvendas` int(11) NOT NULL,
  `data` date NOT NULL,
  `total` double NOT NULL,
  `fkformapagamento` int(11) DEFAULT NULL,
  `fkcliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`idvendas`, `data`, `total`, `fkformapagamento`, `fkcliente`) VALUES
(1, '2018-10-10', 200, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acompanhamento`
--
ALTER TABLE `acompanhamento`
  ADD PRIMARY KEY (`idacompanhamento`),
  ADD KEY `acompanha` (`fkvenda`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`idcidade`),
  ADD KEY `fkestado` (`estado`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indexes for table `formapagamento`
--
ALTER TABLE `formapagamento`
  ADD PRIMARY KEY (`idforma`);

--
-- Indexes for table `itensvendasp`
--
ALTER TABLE `itensvendasp`
  ADD PRIMARY KEY (`iditensvendasp`),
  ADD KEY `itensproduto` (`fkproduto`);

--
-- Indexes for table `itensvendass`
--
ALTER TABLE `itensvendass`
  ADD PRIMARY KEY (`iditensvendass`),
  ADD KEY `itensservicos` (`fkservico`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idservico`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`idveiculo`),
  ADD KEY `fkproprietario` (`fkcliente`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idvendas`),
  ADD KEY `forma` (`fkformapagamento`),
  ADD KEY `client` (`fkcliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `idcidade` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `formapagamento`
--
ALTER TABLE `formapagamento`
  MODIFY `idforma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itensvendasp`
--
ALTER TABLE `itensvendasp`
  MODIFY `iditensvendasp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itensvendass`
--
ALTER TABLE `itensvendass`
  MODIFY `iditensvendass` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idservico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `idveiculo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acompanhamento`
--
ALTER TABLE `acompanhamento`
  ADD CONSTRAINT `acompanha` FOREIGN KEY (`fkvenda`) REFERENCES `vendas` (`idvendas`);

--
-- Limitadores para a tabela `itensvendasp`
--
ALTER TABLE `itensvendasp`
  ADD CONSTRAINT `itensproduto` FOREIGN KEY (`fkproduto`) REFERENCES `produto` (`idproduto`);

--
-- Limitadores para a tabela `itensvendass`
--
ALTER TABLE `itensvendass`
  ADD CONSTRAINT `itensservicos` FOREIGN KEY (`fkservico`) REFERENCES `servicos` (`idservico`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `forma` FOREIGN KEY (`fkformapagamento`) REFERENCES `formapagamento` (`idforma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
