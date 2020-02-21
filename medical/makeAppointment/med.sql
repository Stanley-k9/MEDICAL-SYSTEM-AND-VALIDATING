SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `users` (
 `id` int(11) NOT NULL,
 `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ID_number` varchar(255) NOT NULL,
   `dates` date NOT NULL,
  `times` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL
) ;

CREATE TABLE `doctors` (
 `username` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `Doc_id_number` varchar(255) NOT NULL
) ;


INSERT INTO `users` (`id`,`Name`, `Email`,`phone`,`ID_Number`,`dates`,`times`,`speciality`) VALUES
(1,'stanley', 'default@gmail.com','0721234567','9912304567086','10-jan-2019','10:00','family planning');

INSERT INTO `doctors` (`username`,`password`, `Doc_id_number`) VALUES
('stanley', 'default@gmail.com','9901305412084');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `doctors`
  ADD PRIMARY KEY (`username`,`password`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

