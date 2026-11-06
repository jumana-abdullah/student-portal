
CREATE DATABASE IF NOT EXISTS student_portal
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE student_portal;

CREATE TABLE `students` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) DEFAULT NULL,
    `email` varchar(100) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `gender` varchar(10) DEFAULT NULL,
    `level` varchar(50) DEFAULT NULL,
    `comments` text DEFAULT NULL,
    `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
