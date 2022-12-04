-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2022 at 11:39 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esport-manager_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ID` int(11) NOT NULL,
  `Player_ID` int(11) NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ID` int(11) NOT NULL,
  `Type` varchar(32) NOT NULL,
  `Tag` varchar(32) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `ID` int(11) NOT NULL,
  `League` varchar(32) NOT NULL,
  `Points` int(11) NOT NULL DEFAULT '0',
  `Team_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `ID` int(11) NOT NULL,
  `Team1Name` varchar(64) NOT NULL,
  `Team2Name` varchar(64) NOT NULL,
  `MatchTime` datetime NOT NULL,
  `Team1Score` int(11) NOT NULL,
  `Team2Score` int(11) NOT NULL,
  `Map` varchar(32) NOT NULL,
  `Result` varchar(32) NOT NULL,
  `Team_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `match info`
--

CREATE TABLE `match info` (
  `ID` int(11) NOT NULL,
  `Match_ID` int(11) NOT NULL,
  `MatchDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `ImageUrl` varchar(64) NOT NULL,
  `Title` varchar(64) NOT NULL,
  `PostDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TextArea` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `player market`
--

CREATE TABLE `player market` (
  `ID` int(11) NOT NULL,
  `Player_ID` int(11) NOT NULL,
  `Price` float NOT NULL,
  `ActiveTeam` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `ID` int(11) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Role` varchar(32) NOT NULL,
  `Age` int(11) NOT NULL DEFAULT '16',
  `Nationality` varchar(32) NOT NULL,
  `Status` varchar(32) NOT NULL,
  `Skill` float NOT NULL,
  `PotencialSkill` decimal(2,0) NOT NULL,
  `Team_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `ID` int(11) NOT NULL,
  `ImagePath` varchar(128) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Country` varchar(32) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PrizeMoney` float NOT NULL DEFAULT '0',
  `1stPlace` int(11) NOT NULL DEFAULT '0',
  `2ndPlace` int(11) NOT NULL DEFAULT '0',
  `3rdPlace` int(11) NOT NULL DEFAULT '0',
  `TournamentCount` int(11) NOT NULL DEFAULT '0',
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `ID` int(11) NOT NULL,
  `ImageUrl` varchar(64) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `TournamentDate` date NOT NULL,
  `PrizePool` float NOT NULL,
  `TeamCount` int(11) NOT NULL DEFAULT '0',
  `Team_ID` int(11) NOT NULL,
  `MatchInfo_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tournament matches`
--

CREATE TABLE `tournament matches` (
  `ID` int(11) NOT NULL,
  `Team1Name` varchar(64) NOT NULL,
  `Team2Name` varchar(64) NOT NULL,
  `Team1Score` int(11) NOT NULL,
  `Team2Score` int(11) NOT NULL,
  `Map` varchar(32) NOT NULL,
  `Result` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `EMail` varchar(64) NOT NULL,
  `Password` int(64) NOT NULL,
  `Valute` float NOT NULL DEFAULT '10000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Item_ID` (`Item_ID`),
  ADD KEY `Player_ID` (`Player_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Team_ID` (`Team_ID`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD KEY `Team_ID` (`Team_ID`);

--
-- Indexes for table `match info`
--
ALTER TABLE `match info`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Match_ID` (`Match_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player market`
--
ALTER TABLE `player market`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Player_ID` (`Player_ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Team_ID` (`Team_ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Team_ID` (`Team_ID`),
  ADD KEY `MatchInfo_ID` (`MatchInfo_ID`);

--
-- Indexes for table `tournament matches`
--
ALTER TABLE `tournament matches`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `match info`
--
ALTER TABLE `match info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player market`
--
ALTER TABLE `player market`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament matches`
--
ALTER TABLE `tournament matches`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`Item_ID`) REFERENCES `items` (`ID`),
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`Player_ID`) REFERENCES `players` (`ID`),
  ADD CONSTRAINT `inventory_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD CONSTRAINT `leaderboard_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `team` (`ID`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `team` (`ID`);

--
-- Constraints for table `match info`
--
ALTER TABLE `match info`
  ADD CONSTRAINT `match info_ibfk_1` FOREIGN KEY (`Match_ID`) REFERENCES `tournament matches` (`ID`);

--
-- Constraints for table `player market`
--
ALTER TABLE `player market`
  ADD CONSTRAINT `player market_ibfk_1` FOREIGN KEY (`Player_ID`) REFERENCES `players` (`ID`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `team` (`ID`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `tournament`
--
ALTER TABLE `tournament`
  ADD CONSTRAINT `tournament_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `tournament_ibfk_2` FOREIGN KEY (`MatchInfo_ID`) REFERENCES `match info` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
