-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 12 mei 2022 om 11:16
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `excellent_taste`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

CREATE TABLE `bestellingen` (
  `ID` int(11) NOT NULL,
  `reserverings_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `aantal` int(11) DEFAULT NULL,
  `geserveerd` varchar(255) DEFAULT 'Nee'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bestellingen`
--

INSERT INTO `bestellingen` (`ID`, `reserverings_id`, `item_id`, `aantal`, `geserveerd`) VALUES
(4, 6, 5, 3, 'nee'),
(5, 6, 6, 2, 'klaar om te serveren'),
(6, 6, 18, 2, 'geserveerd');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerechtcategorien`
--

CREATE TABLE `gerechtcategorien` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gerechtcategorien`
--

INSERT INTO `gerechtcategorien` (`ID`, `naam`) VALUES
(1, 'dranken'),
(2, 'hapjes'),
(3, 'hoofdgerechten'),
(4, 'nagerechten'),
(5, 'voorgerechten');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gerechtsoorten`
--

CREATE TABLE `gerechtsoorten` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `gerechtsoorten`
--

INSERT INTO `gerechtsoorten` (`ID`, `naam`, `cat_id`) VALUES
(2, 'koude_dranken', 1),
(3, 'warme_hapjes', 2),
(4, 'koude_hapjes', 2),
(5, 'vegetarisch', 3),
(6, 'vis', 3),
(7, 'vlees', 3),
(8, 'ijs', 4),
(9, 'mousse', 4),
(10, 'koud', 5),
(11, 'warm', 5),
(12, 'bieren', 1),
(13, 'frisdranken', 1),
(15, 'warme dranken', 1),
(16, 'wijnen', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE `klant` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `telefoonnummer` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`ID`, `naam`, `telefoonnummer`, `email`) VALUES
(16, 'osman2', '32132                        ', 'osman@gmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu_items`
--

CREATE TABLE `menu_items` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `soort_id` int(11) DEFAULT NULL,
  `prijs_per_stuk` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `menu_items`
--

INSERT INTO `menu_items` (`ID`, `naam`, `soort_id`, `prijs_per_stuk`) VALUES
(5, 'Kasteel donker', 12, '13.00'),
(6, 'Palm                 ', 12, '14.00'),
(7, 'Portie kaas met mosterd', 4, '5.00'),
(9, 'Pilsneer', 12, '6.00'),
(10, 'Chaudfontaine rood', 13, '12.00'),
(11, 'Verse jus', 13, '5.00'),
(12, 'Tonic', 13, '4.00'),
(13, 'Koffie', 15, '3.00'),
(14, 'Thee', 15, '2.00'),
(15, 'Espresso', 15, '5.00'),
(16, 'Per glas', 16, '3.00'),
(17, 'Rode port', 16, '10.00'),
(18, 'Brood met kruidenboter', 4, '26.00'),
(19, 'Portie salami worst', 4, '25.00'),
(20, 'Bitterballetjes met mosterd', 3, '22.00'),
(21, 'Gebakken banana', 5, '15.00'),
(22, 'Bonengerecht met diverse groen', 5, '6.00'),
(23, 'Gebakken makreel', 6, '9.00'),
(24, 'Wienerschnitzel', 7, '8.00'),
(25, 'Biefstuk in champignonsaus', 7, '14.00'),
(26, 'Vruchtenijs', 8, '15.00'),
(27, 'Dame blanche', 8, '13.00'),
(28, 'Chocolademousse', 9, '10.00'),
(29, 'Vanillemousse', 9, '8.00'),
(30, 'Salade met geitenkaas', 10, '7.00'),
(31, 'Tonijnsalade', 10, '0.00'),
(32, 'Tomatensoep', 11, '0.00'),
(33, 'Aspergesoep', 11, '0.00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveringen`
--

CREATE TABLE `reserveringen` (
  `ID` int(11) NOT NULL,
  `tafel` varchar(255) NOT NULL,
  `klant_code` int(11) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `tijdstip` time DEFAULT NULL,
  `aantal_personen` int(11) DEFAULT NULL,
  `allergien` varchar(255) DEFAULT NULL,
  `opmerkingen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reserveringen`
--

INSERT INTO `reserveringen` (`ID`, `tafel`, `klant_code`, `datum`, `tijdstip`, `aantal_personen`, `allergien`, `opmerkingen`) VALUES
(6, '3', 16, '2022-05-12', '20:16:00', 2, 'geen', 'geen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `reserverings_code` (`reserverings_id`),
  ADD KEY `item_code` (`item_id`);

--
-- Indexen voor tabel `gerechtcategorien`
--
ALTER TABLE `gerechtcategorien`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `gerechtsoorten`
--
ALTER TABLE `gerechtsoorten`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `gerechtsoorten_ibfk_1` (`cat_id`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `soort_code` (`soort_id`);

--
-- Indexen voor tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `reserveringen_ibfk_1` (`klant_code`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `gerechtcategorien`
--
ALTER TABLE `gerechtcategorien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `gerechtsoorten`
--
ALTER TABLE `gerechtsoorten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `klant`
--
ALTER TABLE `klant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT voor een tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD CONSTRAINT `bestellingen_ibfk_1` FOREIGN KEY (`reserverings_id`) REFERENCES `reserveringen` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `bestellingen_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu_items` (`ID`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `gerechtsoorten`
--
ALTER TABLE `gerechtsoorten`
  ADD CONSTRAINT `gerechtsoorten_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `gerechtcategorien` (`ID`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_ibfk_1` FOREIGN KEY (`soort_id`) REFERENCES `gerechtsoorten` (`ID`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD CONSTRAINT `reserveringen_ibfk_1` FOREIGN KEY (`klant_code`) REFERENCES `klant` (`ID`) ON DELETE CASCADE;
COMMIT;
