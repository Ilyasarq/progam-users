create database crud_db;
 
use crud_db;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(225),
  `email` varchar(255),
  `no_hp` varchar(225),
  PRIMARY KEY  (`id`)
);
