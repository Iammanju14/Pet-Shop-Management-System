-- Pet Shop Management System
-- Sample database for academic and development use
-- Import into a database named dbcnp

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Add a new administrator account locally before using the application.
-- Do not store real passwords in this public sample database.

CREATE TABLE `tblcnp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `prize` float DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tblcnp` (`name`, `prize`, `description`, `image`, `status`) VALUES
('Sample Dog', 500, 'Sample product for testing', 'images/2.jpg', 'Available'),
('Sample Cat', 350, 'Sample product for testing', 'images/3.jpg', 'Available'),
('Sample Bird', 300, 'Sample product for testing', 'images/e.jpg', 'Available');

CREATE TABLE `tblorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `cnpoid` int(11) DEFAULT NULL,
  `oqty` int(11) DEFAULT NULL,
  `ostatus` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `otype` varchar(50) DEFAULT NULL,
  `datepickup` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- No personal customer or order records are included.

COMMIT;
