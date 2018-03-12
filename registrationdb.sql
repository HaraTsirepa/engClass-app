-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 22 Φεβ 2018 στις 12:23:08
-- Έκδοση διακομιστή: 10.1.8-MariaDB
-- Έκδοση PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `registrationdb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `child_comment`
--

CREATE TABLE `child_comment` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `par_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `child_comment`
--

INSERT INTO `child_comment` (`id`, `username`, `text`, `date`, `par_code`) VALUES
(1, 'maria', 'hello', '2018-02-06 01:17:45', ''),
(2, 'maria', 'hello', '2018-02-06 01:19:55', ''),
(3, 'maria', 'hi', '2018-02-06 01:23:21', ''),
(4, 'maria', 'oh really', '2018-02-06 01:25:15', '8IKEhg'),
(5, 'maria', 'oh really', '2018-02-06 01:26:18', '8IKEhg'),
(6, 'manos', 'The answer is wolves.', '2018-02-14 15:01:21', '6Av8Ni'),
(7, 'manos', 'The answer is wolves.', '2018-02-14 15:01:37', '6Av8Ni'),
(8, 'manos', 'Thank you very much', '2018-02-14 15:05:30', '6Av8Ni'),
(9, 'maria', 'No they are not', '2018-02-14 15:29:02', 'zXtfYc'),
(10, 'hara', 'very good!', '2018-02-14 19:25:57', 'zXtfYc'),
(11, 'maria', 'ti leei re file?', '2018-02-21 19:09:27', 'FlZ8yn'),
(12, 'maria', 'ti leei re file?', '2018-02-21 19:09:41', 'FlZ8yn'),
(13, 'hara', 'no', '2018-02-21 19:50:10', 'LshUWO');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `choices`
--

CREATE TABLE `choices` (
  `id` int(10) NOT NULL,
  `question_number` int(10) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'brothers-in-law'),
(2, 1, 1, 'donkies'),
(3, 1, 0, 'knives'),
(4, 1, 0, 'masses'),
(5, 1, 0, 'casts'),
(6, 2, 0, 'shelf'),
(7, 2, 1, 'church'),
(8, 2, 0, 'deer'),
(9, 2, 0, 'cone'),
(10, 2, 0, 'All answers are correct'),
(11, 3, 0, 'wives'),
(12, 3, 1, 'mice'),
(13, 3, 0, 'shelves'),
(14, 3, 0, 'books'),
(15, 4, 0, 'person - people'),
(16, 4, 0, 'lady - ladies'),
(17, 4, 0, 'man - men'),
(18, 4, 1, 'photo - photoes');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `like_dislike_info`
--

CREATE TABLE `like_dislike_info` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_action` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `like_dislike_info`
--

INSERT INTO `like_dislike_info` (`post_id`, `user_id`, `rating_action`, `username`) VALUES
(1, 0, 'like', '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `category_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `pages`
--

INSERT INTO `pages` (`id`, `category_page`) VALUES
(1, 'singular_plural_theory');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `parent_comment`
--

CREATE TABLE `parent_comment` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `parent_comment`
--

INSERT INTO `parent_comment` (`id`, `username`, `text`, `date`, `code`) VALUES
(1, 'maria', 'this is a post', '0000-00-00 00:00:00', ''),
(2, 'maria', 'this is a post', '0000-00-00 00:00:00', '8IKEhg'),
(3, 'mary', 'this is an another post', '2018-02-13 16:51:12', '3AKl2F'),
(4, 'mary', 'this is an another post', '2018-02-13 16:51:30', 'ZUKIjD'),
(5, 'maria', 'post test', '2018-02-14 14:45:14', '9TDzqv'),
(6, 'maria', 'post test', '2018-02-14 14:47:50', '5758cZ'),
(7, 'maria', 'post test', '2018-02-14 14:48:39', '8RjlD3'),
(8, 'maria', 'post test', '2018-02-14 14:48:46', 'pYGKGH'),
(9, 'maria', 'post test', '2018-02-14 14:49:20', 'sdaUPm'),
(10, 'maria', 'post test', '2018-02-14 14:49:41', 'ZPB6Ia'),
(11, 'maria', 'post test', '2018-02-14 14:50:28', 'aXr8lR'),
(12, 'maria', 'post test', '2018-02-14 14:50:44', 'MttiNn'),
(13, 'manos', 'Hello, I have a question on Chapter "Singular and Plural Nouns". Which is the plural noun of wolf?', '2018-02-14 14:59:45', '6Av8Ni'),
(14, 'manos', 'The tests are not so difficult for me', '2018-02-14 15:06:28', 'zXtfYc'),
(15, 'maria', 'test', '2018-02-14 15:38:54', '1YaYah'),
(16, 'maria', 'test2', '2018-02-14 15:39:56', 'IYLTij'),
(18, 'maria', 'kakakkkakakakakaka\r\nala\r\nkakakaak', '2018-02-14 15:41:18', 'Grq58Z'),
(19, 'maria', 'Hello, I have a question on Chapter "Singular and Plural Nouns". Which is the plural noun of wolf? Can anyone help me?', '2018-02-14 15:42:34', 'LshUWO'),
(20, 'maria', 'Can anyone help me?', '2018-02-14 15:44:17', 'hKa9xf'),
(21, 'maria', 'Can anyone help me?', '2018-02-14 15:45:01', 'Sb4Goi'),
(22, 'maria', 'Can anyone help me?', '2018-02-14 15:45:11', 'L3A8rv'),
(23, 'maria', 'Can anyone help me? I dont understand the irregular fo', '2018-02-14 15:45:35', 'VNkTpR'),
(24, 'maria', '"', '2018-02-14 15:46:13', 'a4jT7I'),
(25, 'maria', '''', '2018-02-14 15:49:33', 'VadMdE'),
(26, 'maria', 'Can anyone help me please? I don''t understand the irregular forn of comperative and superlative adjectives.', '2018-02-14 15:49:42', 'CX8SwW'),
(27, 'maria', 'Can anyone help me please? I don''t understand the irregular forn of comperative and superlative adjectives.', '2018-02-14 16:12:09', 'K4oDqf'),
(28, 'hara', 'If you want ask anything, don''t hesitate!', '2018-02-14 19:25:32', 'XA0YsV'),
(29, 'maria', 'Do you know mister Orestis?', '2018-02-15 01:31:18', '8gCplS'),
(30, 'maria', 'Good morning everyone!', '2018-02-15 14:18:29', 'FBIVDa'),
(31, 'maria', 'eememem', '2018-02-21 19:08:59', 'FlZ8yn'),
(32, 'kostas', 'Good morning!', '2018-02-22 00:17:39', 'pnZd6h'),
(33, 'anna', 'Upcoming material for vocabulary', '2018-02-22 00:27:59', 'YAHPB7'),
(34, 'maria', 'Can someone email me the answers of the test?', '2018-02-22 13:06:19', 'xNvMVi');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `questions`
--

CREATE TABLE `questions` (
  `question_number` int(10) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `questions`
--

INSERT INTO `questions` (`question_number`, `text`, `category`) VALUES
(1, 'Which of the following plural nouns is spelled incorrectly?', 'singular_plural'),
(2, 'Which noun requires that you add es to the end (and do nothing else) to make it plural?', 'singular_plural'),
(3, 'Choose the irregular plural.', 'singular_plural'),
(4, 'Choose the incorrect response.', 'singular_plural');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `password`) VALUES
(1, 'hara', '1234'),
(2, 'anna', '5678');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `theory`
--

CREATE TABLE `theory` (
  `id` int(30) NOT NULL,
  `category` varchar(60) NOT NULL,
  `theorytext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `theory`
--

INSERT INTO `theory` (`id`, `category`, `theorytext`) VALUES
(1, 'singular_plural', 'In order to make a noun plural, it is usually only necessary to add s. However, there are many irregular nouns that add es. The rules for spelling plural nouns are based on the letters at the end of the word. The chart below breaks up the rules into categories so that they are easier to remember'),
(3, 'be_verbs', 'The verb â€œTo beâ€ is said to be the most protean of the English language, constantly changing form, sometimes without much of a discernible pattern. Considering that we use it so often, it is really too bad that the verb â€œTo beâ€ has to be the most irregular, slippery verb in the language.'),
(4, 'be_verbs', 'We must choose carefully among these various forms when selecting the proper verb to go with our subject. Singular subjects require singular verbs; plural subjects require plural verbs. That''s usually an easy matter. We wouldn''t write â€œThe troops was moving to the border.â€ But some sentences require closer attention. Do we write â€œThe majority of students is (or are) voting against the referendum"?\r\n Review carefully the material in our section on, and notice how often the choices we make require a familiarity with these forms of the â€œTo beâ€ verb.'),
(5, 'comp_super', 'A comparative adjective is used to compare two things. A superlative adjective is used when you compare three or more things. For example, looking at apples you can compare their size, determining which is big, which is bigger, and which is biggest. The comparative ending (suffix) for short, common adjectives is generally "-er"; the superlative suffix is generally "-est." For most longer adjectives, the comparative is made by adding the word "more" (for example, more comfortable) and the superlative is made by adding the word "most" (for example, most comfortable).\r\n\r\nIf a 1-syllable adjective ends in "e", the endings are "-r" and "-st", for example: wise, wiser, wisest.\r\n\r\nIf a 1-syllable adjective ends in "y", the endings are "-er" and "-est", but the y is sometimes changed to an "i". For example: dry, drier, driest.\r\n\r\nIf a 1-syllable adjective ends in a consonant (with a single vowel preceding it), then the consonant is doubled and the endings "-er" and "-est" are used, for example: big, bigger, biggest.\r\n\r\nIf a 2-syllable adjective ends in "e", the endings are "-r" and "-st", for example: gentle, gentler, gentlest.'),
(6, 'comp_super', 'Noun (subject) + verb + comparative adjective + than + noun (object).'),
(7, 'comp_super', 'Noun (subject) + verb + the + superlative adjective + noun (object).');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `age`, `gender`) VALUES
(1, 'bob', 'bob@hotmail.com', '', '', '', 0, ''),
(2, 'bob', 'bob@hotmail.com', '', '', '', 0, ''),
(3, 'tom', 'tom@yahoo.com', '', '', '', 0, ''),
(4, 'tom', 'tom@yahoo.com', '', '', '', 0, ''),
(5, 'tom', 'tom@yahoo.com', '', '', '', 0, ''),
(6, 'tom', 'tom@yahoo.com', '', '', '', 0, ''),
(7, 'tom', 'tom@yahoo.com', '', '', '', 0, ''),
(8, 'bob', 'bob@hotmail.com', '', '', '', 0, ''),
(9, 'bob', 'bob@hotmail.com', '', '', '', 0, ''),
(10, 'max', 'max@gmail.com', '', '', '', 0, ''),
(11, 'thanos', 'thanos@live.com', '', '', '', 0, ''),
(12, 'bob', 'bob@hotmail.com', '', '', '', 0, ''),
(13, 'xara', 'xara@net.com', '', '', '', 0, ''),
(14, 'xara', 'xara@net.com', '', '', '', 0, ''),
(15, 'xara', 'xara@net.com', '', '', '', 0, ''),
(16, 'xara', 'xara@net.com', '', '', '', 0, ''),
(17, 'xara', 'xara@net.com', '', '', '', 0, ''),
(18, 'xara', 'xara@net.com', '', '', '', 0, ''),
(19, 'xara', 'xara@net.com', '', '', '', 0, ''),
(20, 'xara', 'xara@net.com', '', '', '', 0, ''),
(21, 'xara', 'xara@net.com', '777', '', '', 0, ''),
(22, 'thanos', 'thanos@live.com', '555', '', '', 0, ''),
(23, 'thanos', 'thanos@live.com', '111', '', '', 0, ''),
(24, 'steve', 'steve@hotmail.com', '888', '', '', 0, ''),
(25, 'steve23', 'steve@hotmail.com', '333', '', '', 0, ''),
(26, 'stefanos', 'kowalski@yahoo.com', '123', '', '', 0, ''),
(27, 'anna', 'annapap@yahoo.gr', '585', '', '', 0, ''),
(28, 'maria', 'maria@gmail.com', '666', 'maria', 'pappa', 13, 'female'),
(29, 'mary', 'marygiann@gmail.com', '222', 'maria', 'giannopoulou', 13, 'female'),
(30, 'manos', 'manoszara@gmail.com', '007', 'manos', 'zaratoustras', 15, 'male'),
(31, 'kostas', 'kostashi@yahoo.com', '999', 'kostas', 'hiliomodis', 16, 'male');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `child_comment`
--
ALTER TABLE `child_comment`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `like_dislike_info`
--
ALTER TABLE `like_dislike_info`
  ADD UNIQUE KEY `post_id` (`post_id`,`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Ευρετήρια για πίνακα `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `parent_comment`
--
ALTER TABLE `parent_comment`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Ευρετήρια για πίνακα `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `theory`
--
ALTER TABLE `theory`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `child_comment`
--
ALTER TABLE `child_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT για πίνακα `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT για πίνακα `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT για πίνακα `parent_comment`
--
ALTER TABLE `parent_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT για πίνακα `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT για πίνακα `theory`
--
ALTER TABLE `theory`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
