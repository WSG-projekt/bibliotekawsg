CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library`;

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_admin` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`ID_admin`, `name`, `surname`, `email`) VALUES
(1, 'John', 'Doe', 'john.doe@library.com'),
(2, 'Thomas', 'Dooe', 'thomas.dooe@library.com'),
(3, 'Adam', 'sandler', 'adam.sandler@library.com');

CREATE TABLE IF NOT EXISTS `books_category` (
  `ID_category` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `books_category` (`ID_category`, `category_name`) VALUES
(1, 'Literatura obyczajowa, romans'),
(2, 'Kryminał, sensacja, thriller'),
(3, 'Fantastyka, science fiction'),
(4, 'Reportaż'),
(5, 'Horror'),
(6, 'Literatura młodzieżowa'),
(7, 'Literatura piękna'),
(8, 'Powieść historyczna'),
(9, 'Powieść przygodowa'),
(10, 'Biografia, autobiografia, pamiętnik'),
(11, 'Publicystyka literacka, eseje'),
(12, 'Literatura popularnonaukowa'),
(13, 'Baśnie, legendy, podania'),
(14, 'Historie biblijne'),
(15, 'Interaktywne, obrazkowe, edukacyjne');

CREATE TABLE IF NOT EXISTS `books_collection` (
  `ID_book` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `ID_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_book`),
  KEY `ID_category` (`ID_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `books_collection` (`ID_book`, `title`, `author`, `ID_category`) VALUES
(1, 'Duma i uprzedzenie', 'Jane Austen', 1),
(2, 'Władca much', 'William Golding', 1),
(3, 'Zabić drozda', 'Harper Lee', 1),
(4, '1984', 'George Orwell', 1),
(5, 'Wielki Gatsby', 'F. Scott Fitzgerald', 1),
(6, 'Dziewczyna, która igrała z ogniem', 'Stieg Larsson', 2),
(7, 'Anioły i demony', 'Dan Brown', 2),
(8, 'Zamek z piasku, który runął', 'Stieg Larsson', 2),
(9, 'Mężczyźni, którzy nienawidzą kobiet', 'Stieg Larsson', 2),
(10, 'Kod Leonarda da Vinci', 'Dan Brown', 2),
(11, 'Cień wiatru', 'Carlos Ruiz Zafón', 1),
(12, 'Złodziejka książek', 'Markus Zusak', 1),
(13, 'Zabić drozda', 'Harper Lee', 1),
(14, 'Czerwony królik', 'Tom Clancy', 2),
(15, 'Anioły i demony', 'Dan Brown', 2),
(16, 'Zamek z piasku, który runął', 'Stieg Larsson', 2),
(17, 'Mężczyźni, którzy nienawidzą kobiet', 'Stieg Larsson', 2),
(18, 'Kod Leonarda da Vinci', 'Dan Brown', 2),
(19, 'Hobbit, czyli tam i z powrotem', 'J.R.R. Tolkien', 3),
(20, 'Gra o tron', 'George R.R. Martin', 3),
(21, 'Gra o tron', 'George R.R. Martin', 3),
(22, 'Władca Pierścieni', 'J.R.R. Tolkien', 3),
(23, 'Harry Potter i Kamień Filozoficzny', 'J.K. Rowling', 3),
(24, 'Dune', 'Frank Herbert', 3),
(25, 'Metro 2033', 'Dmitry Glukhovsky', 3),
(26, 'Człowiek, który pomylił swoją żonę z kapeluszem', 'Oliver Sacks', 4),
(27, 'Ziemia jest płaska', 'Thomas L. Friedman', 4),
(28, 'Freakonomics', 'Steven D. Levitt i Stephen J. Dubner', 4),
(29, 'Sapiens. Od zwierząt do bogów', 'Yuval Noah Harari', 4),
(30, 'Homo Deus. Krótka historia jutra', 'Yuval Noah Harari', 4),
(31, 'Homo Deus. Krótka historia jutra', 'Yuval Noah Harari', 4),
(32, 'Dracula', 'Bram Stoker', 5),
(33, 'Frankenstein', 'Mary Shelley', 5),
(34, 'Upiorny dom na wzgórzu', 'Shirley Jackson', 5),
(35, 'To', 'Stephen King', 5),
(36, 'Złodziejka książek', 'Markus Zusak', 6),
(37, 'Igrzyska śmierci', 'Suzanne Collins', 6),
(38, 'Harry Potter i Kamień Filozoficzny', 'J.K. Rowling', 6),
(39, 'Percy Jackson i Bogowie Olimpijscy: Złodziej Pioruna', 'Rick Riordan', 6),
(40, 'Dziennik cwaniaczka', 'Jeff Kinney', 6),
(41, 'Powieść o dwóch miastach', 'Charles Dickens', 7),
(42, 'Wojna i pokój', 'Leo Tolstoy', 7),
(43, 'Moby Dick', 'Herman Melville', 7),
(44, 'Don Kichot', 'Miguel de Cervantes', 7),
(45, 'Ulysses', 'James Joyce', 7),
(46, 'Czerwony i czarny', 'Stendhal', 8),
(47, 'Iliada', 'Homer', 8),
(48, 'Odyseja', 'Homer', 8),
(49, 'Eneida', 'Wergiliusz', 8),
(50, 'Mahabharata', 'Autor nieznany', 8),
(51, 'Przygody Toma Sawyera', 'Mark Twain', 9),
(52, 'Przygody Hucka', 'Mark Twain', 9),
(53, 'Robinson Crusoe', 'Daniel Defoe', 9),
(54, 'Gulliver', 'Jonathan Swift', 9),
(55, 'Przygody dobrego wojaka Szwejka', 'Jaroslav Hašek', 9),
(56, 'Naku*wiam zen', 'Maria Peszek', 10),
(57, 'Szklane ptaki. Opowieść o miłościach Krzysztofa Kamila Baczyńskiego', 'Katarzyna Zyskowska', 10),
(58, 'Przyjaciele, kochankowie i ta Wielka Straszna Rzecz. Autobiografia', 'Matthew Perry', 10),
(59, 'Zełenski', 'Wojciech Rogacin', 10),
(60, 'Lata', 'Annie Ernaux', 10),
(61, 'Sztuka i życie. Antologia tekstów z lat 2011-2023', 'Maria Anna Potocka', 11),
(62, 'Pierwsza Umowa. Podstawy praktyki szamanizmu', 'Robert Rient', 11),
(63, 'Era Sztucznej Inteligencji', 'Henry Kissinger, Eric Schmidt', 11),
(64, 'Nowy porządek globalny. Mocarstwa, średniacy i niewidzialne siły kierujące światem', 'Bartłomiej Radziejewski', 11),
(65, 'Strategiczna Pauza. Polska Wobec Ryzyka Wojny Z Rosją', 'Marek Budzisz', 11),
(66, 'Historia odkryć geograficznych i poznania Ziemi', 'Zbigniew Długosz', 12),
(67, 'Sztuka cenniejsza niż złoto', 'Jan Białostocki', 12),
(68, 'Historia Polski', 'Jerzy Topolski', 12),
(69, 'Życie pszczół', 'Maurice Maeterlinck', 12),
(70, 'Męczennicy w imię nauki', 'autor nieznany', 12),
(71, 'Zakorzenieni w Naturze', 'Katarzyna Kosiak', 13),
(72, 'Rozbudzona harfa. Baśnie i legendy z całego świata', 'Stefan Majchrowski', 13),
(73, 'Egil i krwawy topór', 'Javier Yanes, Juan Carlos Moreno', 13),
(74, 'Wölsungowie Ostatni z Rodu Wölsungów', 'Juan Carlos Moreno, Álvaro Marcos', 13),
(75, 'Baśnie Braci Grimm', 'Jacob Grimm, Wilhelm Grimm', 13),
(76, 'National Geographic Polska Numer Specjalny 2/2023. Atlas Biblii', 'Jean-Pierre Isbouts', 14),
(77, 'Proroctwo Królowej Saby', 'autor nieznany', 14),
(78, 'Moja pierwsza Biblia', 'Jan Godfrey, Paula Doherty', 14),
(79, 'Ewangelia i Księga Tomasza', 'Tomasz Chałko', 14),
(80, 'Gdzie jest Dzieciątko? Opowieść o Bożym Narodzeniu', 'Vicki Howie', 14),
(81, 'Dzieci z Bullerbyn', 'Astrid Lindgren', 15),
(82, 'Dziennik Anny Frank', 'Anna Frank', 15),
(83, 'Dziewczynka z zapałkami', 'Hans Christian Andersen', 15),
(84, 'Królewna Śnieżka i siedmiu krasnoludków', 'Bracia Grimm', 15),
(85, 'Jaś i Małgosia', 'Bracia Grimm', 15);


CREATE TABLE IF NOT EXISTS `borrowed` (
  `ID_borrow` int(11) NOT NULL,
  `ID_customer` int(11) DEFAULT NULL,
  `ID_book` int(11) DEFAULT NULL,
  `rental_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  PRIMARY KEY (`ID_borrow`),
  KEY `ID_customer` (`ID_customer`),
  KEY `ID_book` (`ID_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `borrowed` (`ID_borrow`, `ID_customer`, `ID_book`, `rental_date`, `return_date`) VALUES
(1, 1, 1, '2023-01-01', '2023-01-31'),
(2, 2, 2, '2023-01-02', '2023-02-01'),
(3, 3, 3, '2023-01-03', '2023-02-02'),
(4, 4, 4, '2023-01-04', '2023-02-03'),
(5, 5, 5, '2023-01-05', '2023-02-04'),
(6, 6, 6, '2023-01-06', '2023-02-05'),
(7, 7, 7, '2023-01-07', '2023-02-06'),
(8, 8, 8, '2023-01-08', '2023-02-07'),
(9, 9, 9, '2023-01-09', '2023-02-08'),
(10, 10, 10, '2023-01-10', '2023-02-09'),
(11, 11, 11, '2023-01-11', '2023-02-10'),
(12, 12, 12, '2023-01-12', '2023-02-11'),
(13, 13, 13, '2023-01-13', '2023-02-12'),
(14, 14, 14, '2023-01-14', '2023-02-13'),
(15, 15, 15, '2023-01-15', '2023-02-14'),
(16, 1, 16, '2023-01-16', '2023-02-15'),
(17, 2, 17, '2023-01-17', '2023-02-16'),
(18, 3, 18, '2023-01-18', '2023-02-17'),
(19, 4, 19, '2023-01-19', '2023-02-18'),
(20, 5, 20, '2023-01-20', '2023-02-19'),
(21, 6, 21, '2023-01-21', '2023-02-20'),
(22, 7, 22, '2023-01-22', '2023-02-21'),
(23, 8, 23, '2023-01-23', '2023-02-22'),
(24, 9, 24, '2023-01-24', '2023-02-23'),
(25, 10, 25, '2023-01-25', '2023-02-24'),
(26, 11, 26, '2023-01-26', '2023-02-25'),
(27, 12, 27, '2023-01-27', '2023-02-26'),
(28, 13, 28, '2023-01-28', '2023-02-27'),
(29, 14, 29, '2023-01-29', '2023-02-28'),
(30, 15, 30, '2023-01-30', '0000-00-00'),
(31, 1, 31, '2023-01-31', '2023-03-01'),
(32, 2, 32, '2023-02-01', '2023-03-02'),
(33, 3, 33, '2023-02-02', '2023-03-03'),
(34, 4, 34, '2023-02-03', '2023-03-04'),
(35, 5, 35, '2023-02-04', '2023-03-05'),
(36, 6, 36, '2023-02-05', '2023-03-07'),
(37, 7, 37, '2023-02-06', '2023-03-08'),
(38, 8, 38, '2023-02-07', '2023-03-09'),
(39, 9, 39, '2023-02-08', '2023-03-10'),
(40, 10, 40, '2023-02-09', '2023-03-11'),
(41, 1, 41, '2023-02-10', '2023-03-12'),
(42, 2, 42, '2023-02-11', '2023-03-13'),
(43, 3, 43, '2023-02-12', '2023-03-14'),
(44, 4, 44, '2023-02-13', '2023-03-15'),
(45, 5, 45, '2023-02-14', '2023-03-16'),
(46, 6, 46, '2023-02-15', '2023-03-17'),
(47, 7, 47, '2023-02-16', '2023-03-18'),
(48, 8, 48, '2023-02-17', '2023-03-19'),
(49, 9, 49, '2023-02-18', '2023-03-20'),
(50, 10, 50, '2023-02-19', '2023-03-21'),
(51, 11, 51, '2023-02-20', '2023-03-22'),
(52, 12, 52, '2023-02-21', '2023-03-23'),
(53, 13, 53, '2023-02-22', '2023-03-24'),
(54, 14, 54, '2023-02-23', '2023-03-25'),
(55, 15, 55, '2023-02-24', '2023-03-26'),
(56, 1, 56, '2023-02-25', '2023-03-27'),
(57, 2, 57, '2023-02-26', '2023-03-28'),
(58, 3, 58, '2023-02-27', '2023-03-29'),
(59, 4, 59, '2023-02-28', '2023-03-30'),
(60, 5, 60, '2023-03-01', '2023-03-31'),
(61, 6, 61, '2023-03-02', '2023-04-01'),
(62, 7, 62, '2023-03-03', '2023-04-02'),
(63, 8, 63, '2023-03-04', '2023-04-03'),
(64, 9, 64, '2023-03-05', '2023-04-04'),
(65, 10, 65, '2023-03-06', '2023-04-05'),
(66, 11, 66, '2023-03-07', '2023-04-06'),
(67, 12, 67, '2023-03-08', '2023-04-07'),
(68, 13, 68, '2023-03-09', '2023-04-08'),
(69, 14, 69, '2023-03-10', '2023-04-09'),
(70, 15, 70, '2023-03-11', '2023-04-10'),
(71, 1, 71, '2023-03-12', '2023-04-11'),
(72, 2, 72, '2023-03-13', '2023-04-12'),
(73, 3, 73, '2023-03-14', '2023-04-13'),
(74, 4, 74, '2023-03-15', '2023-04-14'),
(75, 5, 75, '2023-03-16', '2023-04-15');


CREATE TABLE IF NOT EXISTS `customer` (
  `ID_customer` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customer` (`ID_customer`, `name`, `surname`, `email`, `phone_number`) VALUES
(1, 'Jan', 'Kowalski', 'jan.kowalski@gmail.com', '123456789'),
(2, 'Anna', 'Nowak', 'anna.nowak@gmail.com', '234567890'),
(3, 'Piotr', 'Zieliński', 'piotr.zielinski@gmail.com', '345678901'),
(4, 'Katarzyna', 'Woźniak', 'katarzyna.wozniak@gmail.com', '456789012'),
(5, 'Andrzej', 'Kowalczyk', 'andrzej.kowalczyk@gmail.com', '567890123'),
(6, 'Agnieszka', 'Kamińska', 'agnieszka.kaminska@gmail.com', '678901234'),
(7, 'Tomasz', 'Lewandowski', 'tomasz.lewandowski@gmail.com', '789012345'),
(8, 'Magdalena', 'Zawadzka', 'magdalena.zawadzka@gmail.com', '890123456'),
(9, 'Paweł', 'Wiśniewski', 'pawel.wisniewski@gmail.com', '901234567'),
(10, 'Małgorzata', 'Dąbrowska', 'malgorzata.dabrowska@gmail.com', '012345678'),
(11, 'Michał', 'Wójcik', 'michal.wojcik@gmail.com', '123456780'),
(12, 'Joanna', 'Mazur', 'joanna.mazur@gmail.com', '234567801'),
(13, 'Jakub', 'Kwiatkowski', 'jakub.kwiatkowski@gmail.com', '345678910'),
(14, 'Barbara', 'Kaczmarek', 'barbara.kaczmarek@gmail.com', '456789101'),
(15, 'Marcin', 'Piotrowski', 'marcin.piotrowski@gmail.com', '567891012');

ALTER TABLE `books_collection`
  ADD CONSTRAINT `books_collection_ibfk_1` FOREIGN KEY (`ID_category`) REFERENCES `books_category` (`ID_category`);

ALTER TABLE `borrowed`
  ADD CONSTRAINT `borrowed_ibfk_1` FOREIGN KEY (`ID_customer`) REFERENCES `customer` (`ID_customer`),
  ADD CONSTRAINT `borrowed_ibfk_2` FOREIGN KEY (`ID_book`) REFERENCES `books_collection` (`ID_book`);
COMMIT;

