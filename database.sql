/* Create Database and Table */
create database sample;

use sample;

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255),
  `email` varchar(255),
  `mobile` varchar(255),
  PRIMARY KEY  (`id`)
);