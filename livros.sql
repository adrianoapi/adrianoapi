-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2018 às 04:49
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `isbn` varchar(13) DEFAULT NULL,
  `titulo` varchar(80) NOT NULL,
  `autor` varchar(80) NOT NULL,
  `paginas` smallint(6) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`isbn`, `titulo`, `autor`, `paginas`, `preco`) VALUES
('8585184965', 'HTML - Guia de Consulta Rápida', 'Marcelo Silveira,Rubens Prates', 128, 20),
('8585184981', 'JScript - Guia de Consulta Rápida', 'Edgard Damiani', 96, 20),
('8585184752', 'ASP - Guia de Consulta Rápida', 'Rubens Prates', 128, 18),
('858518454X', 'C++ - Guia de Consulta Rápida', 'Mauro Rezende', 32, 11),
('8585184930', 'Crystal Reports - Guia de Consulta Rápida', 'Joel Saade', 127, 20),
('8585184833', 'Dreamweaver - Guia de Consulta Rápida', 'Marcelo Silveira', 128, 20),
('8585184876', 'Flash - Guia de Consulta Rápida', 'Edgard Damiani', 128, 20),
('8585184868', 'XML - Guia de Consulta Rápida', 'Otávio C. Décio', 96, 20),
('8585184736', 'Visual Basic 6 Controles Activex - Guia de Consulta Rápida', 'Joel Saade', 128, 18),
('8585184469', 'Visual Basic Versão 4 - Guia de Consulta Rápida', 'Rubens Prates', 128, 18),
('8585184698', 'PHP - Guia de Consulta Rápida', 'Herbert G Fischer', 128, 18),
('8585184280', 'SQL - Guia de Consulta Rápida', 'Edison Liesse', 32, 11),
('858518471X', 'SQL Server 7 System Procedures - Guia de Consulta Rápida', 'Rubens Prates,Renato Piques', 128, 18),
('8585184701', 'SQL Server 7 Transact-SQL - Guia de Consulta Rápida', 'Rubens Prates,Renato Piques', 128, 20),
('8585184728', 'TCP/IP - Guia de Consulta Rápida', 'Rubens Prates,Luciano Palma', 128, 18),
('8585184558', 'Unix Comandos de Usuários - Guia de Consulta Rápida', 'Eduardo Marcan', 48, 13),
('8585184418', 'Turbo Pascal - Guia de Consulta Rápida', 'Rubens Prates,Dennis Cintra Leite', 32, 9),
('8585184388', 'HTML - Guia de Consulta Rápida', 'Rubens Prates', 32, 9),
('8585184906', 'ICQ - Guia de Consulta Rápida', 'Maria Alice De Castro', 96, 20),
('8585184914', 'Integrando PHP com MySQL - Guia de Consulta Rápida', 'Lucio Stoco', 94, 20),
('8585184256', 'Interrupções do Bios - Guia de Consulta Rápida', 'Adlich', 32, 9),
('8585184264', 'Interrupções do MS-DOS - Guia de Consulta Rápida', 'Adlich', 32, 9),
('8585184639', 'Java - Guia de Consulta Rápida', 'Fábio Ramon', 128, 18),
('8585184973', 'Java 2 - Guia de Consulta Rápida', 'Fábio Ramon', 144, 20),
('8585184884', 'JavaServer Pages - Guia de Consulta Rápida', 'Idemir Coelho', 96, 20),
('8585184396', 'JavaScript - Guia de Consulta Rápida', 'Rubens Prates', 32, 9),
('8585184744', 'JDBC2 - Guia de Consulta Rápida', 'Fábio Ramon', 96, 18),
('8575220063', 'BASH - Guia de Consulta Rápida', 'Joel Saade', 96, 20),
('8575220047', 'UML - Guia de Consulta Rápida', 'Douglas Marcos da Silva', 95, 20),
('8575220055', 'Cascading Style Sheets (CSS) - Guia de Consulta Rápida', 'Luis Gustavo Amaral', 128, 20),
('8585184957', 'Linux Administração e Suporte', 'Chuck V. Tibet', 379, 59),
('8585184647', 'Linux Comandos De Usuários - Guia de Consulta Rápida', 'Eduardo Maçan', 64, 15),
('8585184760', 'Linux Interface Gráfica KDE - Guia de Consulta Rápida', 'Frederico Reis', 92, 20),
('8585184787', 'MySQL - Guia de Consulta Rápida', 'Rubens Prates', 96, 20),
('8585184590', 'Netiqueta - Guia de Consulta Rápida', 'Maria Alice De Castro', 32, 11),
('8575220039', 'Desenvolvendo Websites com PHP', 'Juliano Niederauer', 256, 39),
('8575220101', 'HTTP - Guia de Consulta Rápida', 'Décio Jr.', 128, 20),
('857522011X', 'Expressões Regulares - Guia de Consulta Rápida', 'Aurélio Marinho Jargas', 96, 20),
('8575220071', 'JavaScript - Guia de Consulta Rápida', 'Edgard Damiani', 144, 20),
('8575220152', 'Segurança Nacional', 'Nelson Murilo de O. Rufino', 248, 45),
('8575220160', 'XHTML - Guia de Consulta Rápida', 'Juliano Niederauer', 128, 20),
('8575220128', 'PostgreSQL - Guia de Consulta Rápida', 'Juliano Niederauer', 128, 20),
('8575220144', 'Oracle 9i Built-in Packages - Guia de Consulta Rápida', 'Celso Henrique Poderoso de Oliveira', 128, 20),
('8575220098', 'Python - Guia de Consulta Rápida', 'Marco Catunda', 128, 20),
('857522008X', 'Tcl/TK - Guia de Consulta Rápida', 'Roberto L.S. Monteiro', 128, 20),
('8575220179', 'Formatos de Arquivos da Internet - Guia de Consulta Rápida', 'Marcelo Silveira', 128, 20),
('8585184795', 'Oracle 8 SQL - Guia de Consulta Rápida', 'Rubens Thiago de Oliveira', 96, 20),
('858518485X', 'Oracle 8i PL/SQL - Guia de Consulta Rápida', 'Celso Henrique Poderoso de Oliveira', 96, 20),
('8585184949', 'Samba - Guia de Consulta Rápida', 'Décio Jr.', 128, 20),
('8585184809', 'Perl - Guia de Consulta Rápida', 'Décio Jr.', 128, 20),
('8575220187', 'As Palavras Mais Comuns da Língua Inglesa', 'Rubens Queiroz de Almeida', 320, 24),
('8575220209', 'Oracle 9i SQL - Guia de Consulta Rápida', 'Rubens Thiago de Oliveira', 128, 20),
('8575220217', 'Aprendendo Java', 'Rodrigo Mello,Ramon Chiara,Renato Villela', 190, 42),
('8575220225', 'Read in English - Uma Maneira Divertida de Aprender Inglês', 'Rubens Queiroz de Almeida', 352, 48),
('8575220241', 'SQL - Curso Prático', 'Celso Henrique Poderoso de Oliveira', 272, 42),
('8575220284', 'Web Marketing Usando Ferramentas de Busca', 'Marcelo Silveira', 160, 38),
('8575220268', 'DB2 UDB v.7 - Guia de Consulta Rápida', 'João Alberto de Oliveira Lima', 128, 20),
('8575220276', 'Editor Vi - Guia de Consulta Rápida', 'Roberto Severo de A. Coelho', 64, 15),
('857522025X', 'PHP com XML - Guia de Consulta Rápida', 'Juliano Niederauer', 96, 20),
('8575220322', 'Oracle 9i PL/SQL - Guia de Consulta Rápida', 'Celso Henrique Poderoso de Oliveira', 112, 20),
('8575220292', 'Mirando Resultados', 'Ricardo Almeida,Marcelo Oliveira', 208, 42),
('8575220330', 'Virtual Private Network - VPN', 'Lino Sarlo da Silva', 240, 43),
('8575220349', 'Desenvolvendo Aplicações ASP.NET com Web Matrix', 'Daniel Wander', 320, 48),
('8575220306', 'Proteção Jurídica de Software', 'Alexandre Coutinho Ferrari', 192, 38),
('8575220314', 'ASP.NET Guia do Desenvolvedor', 'Felipe Cembranelli', 256, 39),
('8575220357', 'ASP.NET com C#', 'Alfredo Lotar', 384, 52),
('8575220365', 'Java e XML - Guia de Consulta Rápida', 'Renê Rodrigues Veloso', 96, 20),
('8575220373', 'As Palavras mais comuns da Língua Inglesa - 2ª edição', 'Rubens Queiroz de Almeida', 312, 53),
('8575220381', 'Linux - Guia do Administrador do Sistema', 'Rubem E. Ferreira', 512, 85),
('857522039X', 'InterBase - Guia de Consulta Rápida', 'Juliano Niederauer', 96, 22);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
