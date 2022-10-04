-- Host: 127.0.0.1


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `reg_students` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `othername` varchar(255) NOT NULL,
  `nin` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `combination` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bord` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `parentname` varchar(255) NOT NULL,
  `pnin` varchar(255) NOT NULL,
  `pcon1` varchar(255) NOT NULL,
  `pcon2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `reg_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
