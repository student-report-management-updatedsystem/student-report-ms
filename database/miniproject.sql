
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL

) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '123');

ALTER TABLE `user`
ADD PRIMARY KEY (`username`);



CREATE TABLE IF NOT EXISTS `kg-1` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `student_id` varchar(220) NOT NULL UNIQUE,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `yoa` varchar(45) NOT NULL,
  `class` varchar(45) NOT NULL,
  `grade` varchar(45) NOT NULL,
  `report` varchar(2000) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `kg-1` (`id`, `student_id`, `name`, `last_name`, `dob`, `gender`, `parent`, `yoa`, `class`, `grade`, `report`, `file`) VALUES
(1, 'AS01-2341', 'Ron', 'Weasley', '2018-05-05','Male','8138652645', '2021', 'kg-1', 'A','Good', 'ronweasley.jpg');

ALTER TABLE `kg-1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE IF NOT EXISTS `kg-2` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `student_id` varchar(220) NOT NULL UNIQUE,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `yoa` varchar(45) NOT NULL,
  `class` varchar(45) NOT NULL,
  `grade` varchar(45) NOT NULL,
  `report` varchar(2000) NOT NULL,
  `file` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `kg-2` (`id`, `student_id`, `name`, `last_name`, `dob`, `gender`, `parent`, `yoa`, `class`, `grade`, `report`, `file`) VALUES
(1, 'AS02-7621', 'Hermoine', 'Granger', '2017-05-05','Male','9678652645', '2021', 'kg-2', 'A+','Good', 'hermione.jpeg');

ALTER TABLE `kg-2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `username` varchar(220) NOT NULL UNIQUE,
  `password` varchar(45) NOT NULL UNIQUE,
  `name` varchar(45) NOT NULL,
  `class` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `teacher` (`id`, `username`, `password`, `name`, `class`) VALUES (1, 'usha-01', '05-07-1974', 'Usha Pramod', 'KG-1');
INSERT INTO `teacher` (`id`, `username`, `password`, `name`, `class`) VALUES (2, 'teena-71', '11-09-1972', 'Teena John', 'KG-2');

CREATE TABLE IF NOT EXISTS `HOD` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `username` varchar(220) NOT NULL UNIQUE,
  `password` varchar(45) NOT NULL UNIQUE,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `HOD` (`id`, `username`, `password`, `name`) VALUES (1, 'mangala-01', '1961-01-08', 'Mangala Pillai');

CREATE TABLE IF NOT EXISTS `roles` (
  `role` varchar(45) NOT NULL,
  `username` varchar(220) NOT NULL,
  `password` varchar(45) NOT NULL,
  `class` varchar(45)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `roles` (`role`, `username`, `password`,`class`) VALUES ('admin', 'admin', '123',NULL);
INSERT INTO `roles` (`role`, `username`, `password`,`class`) VALUES ('hod', 'Priya Menon', '123',NULL);
INSERT INTO `roles` (`role`, `username`, `password`,`class`) VALUES ('KG-1 Teacher', 'usha-01', '05-07-1974','kg-1');
INSERT INTO `roles` (`role`, `username`, `password`,`class`) VALUES ('KG-2 Teacher', 'teena-71', '11-09-1972','kg-2');
INSERT INTO `roles` (`role`, `username`, `password`,`class`) VALUES ('student', 'AS01-2341', '2018-05-05','kg-1');
INSERT INTO `roles` (`role`, `username`, `password`,`class`) VALUES ('student', 'AS02-7621', '2017-05-05','kg-2');

