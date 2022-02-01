-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 23 Ιαν 2022 στις 14:47:45
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `sdi1500046`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `announcements`
--

CREATE TABLE `announcements` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `date`, `category`, `text`) VALUES
(1243125, 'Ανακοίνωση', '22/01/2022', 'Γενικά', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent hendrerit, elit id pellentesque tristique, erat risus placerat ante, sit amet tincidunt leo dui ac ligula. Cras at massa finibus nisi imperdiet pulvinar ac in tortor. Mauris lobortis, sem porttitor pellentesque vehicula, nisl justo porta ipsum, eu pulvinar arcu velit faucibus libero. Quisque imperdiet malesuada egestas. Ut lobortis sed augue et mollis. Sed sagittis ullamcorper orci, a malesuada quam molestie quis. Sed ac ullamcorper tellus. Curabitur eu accumsan urna. Nulla eget leo vulputate, molestie dolor nec, vestibulum risus. Integer nisl nisi, ultricies at bibendum eget, maximus id enim. Sed sed purus ornare, condimentum purus at, tincidunt lectus. Nam elementum consectetur rhoncus. Vivamus lectus nibh, semper eu diam non, dignissim varius ex. Nulla eleifend ultrices elit, sit amet fermentum mi posuere pretium. Suspendisse nec ligula lectus. Etiam sit amet ullamcorper dolor, a efficitur purus.\r\n\r\nAliquam congue leo vitae blandit tempus. In pretium sed tellus tristique bibendum. In hac habitasse platea dictumst. Donec vulputate vitae orci pharetra aliquet. Suspendisse in hendrerit purus. Vivamus eget libero neque. Aenean convallis aliquet placerat. Integer ut rhoncus purus. Vestibulum ullamcorper at nisi et ornare. Nullam urna elit, cursus eget diam ut, fringilla sollicitudin diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `departments`
--

CREATE TABLE `departments` (
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `departments`
--

INSERT INTO `departments` (`name`) VALUES
('Επιστημών Υγείας'),
('Θετικών Επιστημών'),
('Φιλοσοφική'),
('Νομική'),
('Οικονομικών και Πολιτικών Επιστημών'),
('Θεολογική'),
('Επιστήμης Φυσικής Αγωγής και Αθλητισμού'),
('Αγροτικής Ανάπτυξης, Διατροφής και Αειφορίας');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `deg_type` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `final` tinyint(1) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `stage` varchar(255) DEFAULT NULL,
  `isotimia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `form`
--

INSERT INTO `form` (`id`, `date`, `userid`, `firstname`, `lastname`, `deg_type`, `college`, `department`, `final`, `status`, `stage`, `isotimia`) VALUES
(33, '22/01/2022', '15022000', 'patroklos', 'euthimios', 'PhD', 'Harvard University', 'Νομική', 0, 'Απορρίφθηκε', 'Τελικό στάδιο', 'Εθνικό Μετσόβιο Πολυτεχνείο'),
(34, '22/01/2022', '8062000', 'Alexandros', 'Alexantrof', 'Msc', 'Stanford University', 'Επιστήμης Φυσικής Αγωγής και Αθλητισμού', 1, NULL, NULL, ''),
(35, '22/01/2022', '8062000', 'Alexandros', 'Alexantrof', 'BSc', 'Stanford University', 'Θετικών Επιστημών', 0, 'Τρέχουσα', 'Έλεγχος', ''),
(36, '23/01/2022', '8062000', 'Alexandros', 'Alexantrof', 'BSc', 'Stanford University', 'Επιστήμης Φυσικής Αγωγής και Αθλητισμού', 0, 'Τρέχουσα', 'Έλεγχος', ''),
(37, '23/01/2022', '8062000', 'Evdokia', 'Grekousi', 'Msc', 'Stanford University', 'Θεολογική', 0, 'Εγκρίθηκε', 'Τελικό στάδιο', 'Πανεπιστήμιο Πατρών');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `greek_colleges`
--

CREATE TABLE `greek_colleges` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `greek_colleges`
--

INSERT INTO `greek_colleges` (`name`) VALUES
('Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης'),
('Εθνικό Μετσόβιο Πολυτεχνείο'),
('Πανεπιστήμιο Θεσσαλίας'),
('Πανεπιστήμιο Πατρών'),
('Πανεπιστήμιο Δυτικής Αττικής'),
('Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `institutes`
--

CREATE TABLE `institutes` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `country`, `city`) VALUES
(1, 'Stanford University', 'USA', 'Stanford'),
(2, 'Harvard University', 'USA', 'Cambridge'),
(3, 'University of Cambridge', 'UK', 'Cambridge');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `DOB` int(255) DEFAULT NULL,
  `Phone` int(255) DEFAULT NULL,
  `Admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`id`, `First_Name`, `Last_Name`, `Email`, `Password`, `DOB`, `Phone`, `Admin`) VALUES
(8062000, 'Evdokia', 'Grekousi', 'eudokia123@gmail.com', '21111341', NULL, NULL, 1),
(15022000, 'Alexandros', 'Alexandrov', 'sdi1800270@gmail.com', '21111341', 0, 0, 0);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT για πίνακα `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21132419;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
