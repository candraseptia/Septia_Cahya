create database crud_db;
 
use crud_db;
 
CREATE TABLE `users` (
  `nim` int(8) NOT NULL auto_increment,
  `nama` varchar(40),
  `jurusan` varchar(30),
  PRIMARY KEY  (`nim`)
);
