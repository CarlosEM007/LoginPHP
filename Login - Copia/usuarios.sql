SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` char(32) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `email`) VALUES
(1, 'Carlos', 'CarlosEM', '827ccb0eea8a706c4c34a16891f84e7b', 'carlos@gmail.com'),
(2, 'Ana', 'ana123', 'e7d80ffeefa212b7c5c55700e4f7193e', 'ana@gmail.com'),
(3, 'Pedro', 'pedro456', '3d7fcc75ff6bfcbc40127078aa3760d5', 'pedro@gmail.com'),
(4, 'Mariana', 'mariana789', '2de3dca5a6f506661af5884c103524f4', 'mariana@gmail.com'),
(5, 'Lucas', 'lucas101', '5981f8d5ca831f4eb80b0834743fe7d9', 'lucas@gmail.com'),
(6, 'Fernanda', 'fernanda2022', 'd6f705479043da411ab9a3a1a1ad2261', 'fernanda@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
