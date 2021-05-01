
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `name`, `position`, `username`, `password`) VALUES
(1, 'AS', 'admin', 'admin', '123');

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
