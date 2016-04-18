
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 18/04/2016 às 18:04:40
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u809825956_estud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE IF NOT EXISTS `alternativas` (
  `cod_alternativa` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resposta` int(2) NOT NULL,
  `cod_perguntas` int(11) unsigned NOT NULL,
  `alternativa` varchar(300) NOT NULL,
  PRIMARY KEY (`cod_alternativa`),
  KEY `alternativas_FKIndex1` (`cod_perguntas`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=210 ;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`cod_alternativa`, `resposta`, `cod_perguntas`, `alternativa`) VALUES
(163, 0, 57, 'também conhecida como Programação Orientada a Objetos (POO) ou ainda em inglês Object-Oriented Programming (OOP) é um paradigma de análise, projeto e programação de sistemas de software baseado na composição e interação entre diversas unidades de software chamadas de objetos.'),
(164, 1, 57, 'Uma forma simples de definir seria dizer que é uma ferramenta RAD (em português Desenvolvimento Rápido de Aplicações) para desenvolvimento desktop em Object Pascal (ramificação da linguagem de programação Pascal, grosseiramente definida como Pascal Orientado a Objetos).'),
(165, 0, 57, 'É uma das linguagens de programação mais utilizadas no mundo! Só para você ter idéia uma boa parte dos sistemas operacionais como Unix,Linux e até mesmo o Windows foram escritos nesta linguagem!'),
(166, 1, 58, 'File -> New -> VCL Forms Application – Delphi For Win32,'),
(167, 0, 58, 'New -> File ->  VCL Forms Application – Delphi For Win32,'),
(168, 0, 58, 'File -> New ->  VLC Forms Application – Delphi For Win32,'),
(169, 0, 60, 'Variavel = 1 + 2.\r\n'),
(170, 0, 60, 'Variavel : 1 + 2:\r\n'),
(171, 1, 60, 'Variavel := 1 + 2;\r\n'),
(172, 1, 61, 'Variavel := Valor;'),
(173, 0, 61, 'Variavel = Valor;'),
(174, 0, 61, 'Variavel == Valor;'),
(175, 1, 62, '// comentário...'),
(176, 0, 62, '/* comentário...*/'),
(177, 0, 62, '/-- comentário...--/'),
(178, 0, 63, 'Minha Variavel := dez;'),
(179, 0, 64, 'Integer, Double.'),
(180, 0, 64, 'Boolean, String.'),
(181, 1, 64, 'Select, Insert.'),
(182, 1, 65, 'RA_Aluno : Integer;'),
(183, 0, 65, 'RA_Aluno := Integer;'),
(184, 0, 65, 'RA_Aluno = Integer;'),
(185, 0, 66, 'NomeDaConstante := 12;'),
(186, 1, 67, 'IF/ELSE'),
(187, 0, 67, '(<>)'),
(188, 0, 67, '(not)'),
(189, 1, 68, 'True, False, True'),
(190, 0, 68, 'True, True, True'),
(191, 0, 68, 'False, True, False'),
(201, 0, 70, 'Verifica se o código de cada pagina esta funcionando sem falhas de acordo com os requisitos do Cliente.'),
(200, 0, 69, 'Requisitos Funcionais'),
(199, 0, 69, 'Validação de Requisitos'),
(198, 1, 69, 'Requisitos de Software'),
(202, 1, 70, 'Discute e fornece informação sobre o Ciclo de Requisitos de Software, indo da elicitação até a especificação de requisitos de software.'),
(203, 0, 70, 'Tem por objetivo uma resposta rápida para cliente e usuário fazendo o requisito ser necessário para a parte usurário final'),
(204, 0, 71, 'private e static.'),
(205, 1, 71, 'public e private.'),
(206, 0, 71, 'static e public.'),
(207, 0, 72, 'X'),
(208, 0, 72, 'P'),
(209, 1, 72, 'PO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `cod_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nome_materia` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`cod_materia`, `nome_materia`) VALUES
(1, 'ANALISE - William'),
(5, 'DELPHI - Claudemir');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `cod_perguntas` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(300) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `cod_materia` int(11) NOT NULL,
  PRIMARY KEY (`cod_perguntas`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `materia` (`cod_materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`cod_perguntas`, `pergunta`, `cod_usuario`, `cod_materia`) VALUES
(57, 'O Que é o Delphi?', 1, 5),
(58, 'Qual caminho usado para criar um novo projeto no Delphi?', 1, 5),
(70, 'Análise de Requisitos de Software...', 1, 1),
(71, 'Na linguagem Java, são modificadores para controle de acesso às variáveis e aos métodos de uma classe:', 1, 3),
(60, 'No Delphi, assinale a correta:', 1, 5),
(61, 'Qual a maneira certa de atribuir um valor em Delphi?', 1, 5),
(62, 'Como fazer um comentário de uma linha em Delphi?', 1, 5),
(64, 'Qual desses não é tipo de variável do delphi?', 1, 5),
(65, 'A declaração de uma variável sempre deve vir logo após as palavras reservadas VAR, PRIVATE ou PUBLIC sendo a primeira a mais comum, com a sintaxe. Como declarar uma variável no delphi?', 1, 5),
(69, 'Discute e fornece informação sobre o Ciclo de Requisitos de Software, indo da elicitação até a especificação de requisitos.', 1, 1),
(67, 'Operadores lógicos são utilizados para definir valores booleanos (0 ou 1, true ou false) que são usados principalmente em estruturas de decisão. Qual não pertence aos grupo de operadores lógicos?', 1, 5),
(68, '10=10, 5<>5, 1<>2... qual a saída?', 1, 5),
(72, 'public class SwitchTeste{\r\n  public static void main(String[] args){\r\n   int valor = 1;\r\n   switch (valor){\r\n   case 0:\r\n     system.out.print("X");\r\n     break;\r\n     case 1:\r\n     system.out.print("P");\r\n     default:\r\n     system.out.print("O");\r\n     }\r\n   }\r\n}', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontuacao`
--

CREATE TABLE IF NOT EXISTS `pontuacao` (
  `cod_pontuacao` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pergunta` int(11) unsigned NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `pontos` float NOT NULL,
  `cod_materia` int(11) NOT NULL,
  PRIMARY KEY (`cod_pontuacao`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `cod_pergunta` (`cod_pergunta`),
  KEY `materia` (`cod_materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=538 ;

--
-- Extraindo dados da tabela `pontuacao`
--

INSERT INTO `pontuacao` (`cod_pontuacao`, `cod_pergunta`, `cod_usuario`, `pontos`, `cod_materia`) VALUES
(501, 58, 11, 0, 5),
(500, 62, 11, 10, 5),
(499, 64, 11, 10, 5),
(498, 57, 11, 10, 5),
(497, 60, 11, 10, 5),
(496, 67, 11, 10, 5),
(526, 71, 1, 10, 3),
(493, 61, 11, 10, 5),
(537, 70, 1, 0, 1),
(536, 69, 1, 10, 1),
(503, 65, 11, 10, 5),
(502, 68, 11, 10, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `total_pontos`
--

CREATE TABLE IF NOT EXISTS `total_pontos` (
  `cod_total` int(11) NOT NULL AUTO_INCREMENT,
  `max_pontos` float NOT NULL,
  `usuario` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod_total`),
  KEY `cod_usuario` (`usuario`),
  KEY `cod_materia` (`materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Extraindo dados da tabela `total_pontos`
--

INSERT INTO `total_pontos` (`cod_total`, `max_pontos`, `usuario`, `materia`, `data`) VALUES
(36, 90, 10, 5, '2016-04-14 17:51:51'),
(35, 70, 1, 5, '2016-04-14 17:49:00'),
(37, 40, 1, 5, '2016-04-14 20:00:08'),
(38, 90, 1, 5, '2016-04-14 22:35:02'),
(39, 20, 1, 1, '2016-04-15 20:24:06'),
(40, 20, 1, 1, '2016-04-15 20:24:17'),
(41, 20, 1, 1, '2016-04-15 20:49:12'),
(42, 20, 1, 1, '2016-04-16 11:56:21'),
(43, 10, 1, 3, '2016-04-16 11:56:35'),
(44, 20, 1, 1, '2016-04-18 18:01:51'),
(45, 40, 1, 5, '2016-04-18 18:02:45'),
(46, 10, 1, 1, '2016-04-18 18:03:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `ano_curso` int(1) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(3) NOT NULL,
  `status` int(21) NOT NULL,
  `estudando_materia` int(11) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `ano_curso`, `email_usuario`, `username`, `senha`, `nivel`, `status`, `estudando_materia`) VALUES
(1, 'Diego Ribeiro', 2, 'diegouploads@gmail.com', 'diegouploads', 'bf709005906087dc1256bb4449d8774d', 3, 1, 1),
(7, 'novo usuario', 0, 'novo@novo.com', 'novousuario', '22d7fe8c185003c98f97e5d6ced420c7', 2, 1, 0),
(11, 'Leonardo Oliveira Gonçalves', 0, '00179661@alunos.unipar.br', 'leonardo01', '6fc19693ca95de50d4508a3d4ea75ac3', 2, 1, 5),
(9, 'diogo', 0, '00177551@alunos.unipar.br', 'diogo', '71e1db2ccd4c8704d5116b03f145f1f1', 2, 1, 0),
(10, 'Willian', 0, 'marcell.luh@gmail.com', 'Willmarcel', '1775a38d174c43ae38dbee83573baa9d', 2, 1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
