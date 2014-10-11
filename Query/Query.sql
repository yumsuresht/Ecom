/* 
SQLyog v4.03
Host - localhost : Database - ecom
**************************************************************
Server version 4.1.8-nt
*/

create database if not exists `ecom`;

use `ecom`;

/*
Table structure for article
*/

drop table if exists `article`;
CREATE TABLE `article` (
  `articleName` varchar(50) NOT NULL default '',
  `Abstract` longtext,
  `Author` varchar(50) default NULL,
  `Version` varchar(50) NOT NULL default '',
  `PublishDate` date default NULL,
  `Path` varchar(100) default NULL,
  `Category` varchar(100) default NULL,
  `NoofViewedUsers` decimal(4,0) default NULL,
  `FileName` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`FileName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*
Table data for ecom.article
*/

INSERT INTO `article` VALUES 
('A Programmer’s Introduction to PHP 4.0','This chapter begins with an in-depth discussion of how PHP is used to mine\r\nand update information in what is arguably PHP’s most popular database counterpart,\r\nMySQL (http://www.mysql.com).','William Jason Gilmore','1','2006-04-09','http://localhost:8080/Assignment/Uploaded_Articles/1893115852-402.pdf','Computer Science',2,'1893115852-402.pdf'),
('C# Friends','About C# Programming','John','1','2006-04-09','http://localhost:8080/Assignment/Uploaded_Articles/csharpfriendsV1.zip','Computer Science',0,'csharpfriendsV1.zip'),
('A Survey of Case Studies of the Use of Knowledge M','This article examines the literature on case studies of knowledge management systems\r\nin use in organisations that develop software. We investigate knowledge management approaches\r\nin eight case studies, and what the reported benefits are. Surprisingly, very few organisations\r\nclaim to have lowered software production costs or increased the quality of the software. But\r\nmany claim to have improved the work situation for software developers and managers','Torgeir Dingsøyr* and Reidar Conradi','2','2006-04-09','http://localhost:8080/Assignment/Uploaded_Articles/ijseke-jul2002.pdf','Computer Science',2,'ijseke-jul2002.pdf'),
('PHP 5.0 MySQL4','Build Your Own Database\r\nDriven Website Using PHP &\r\nMySQL','Kevin Yank','2','2006-04-09','http://localhost:8080/Assignment/Uploaded_Articles/Kevs-php-mysql.pdf','Computer Science',0,'Kevs-php-mysql.pdf'),
('Speed up Windows XP','Tip 1: Eliminate programs that run at start-up\r\n Tip 2: Speed up shutdown times\r\n Tip 3: Disable services that run at start-up Submitted by:\r\nPreston Gralla\r\n','Windows XP Hacks','1','2006-04-09','http://localhost:8080/Assignment/Uploaded_Articles/Speed_up_WindowsXP.doc','Computer Science',1,'Speed_up_WindowsXP.doc');

/*
Table structure for hotnews
*/

drop table if exists `hotnews`;
CREATE TABLE `hotnews` (
  `No` decimal(2,0) NOT NULL default '0',
  `Title` varchar(50) default NULL,
  `Absract` longtext,
  `PublishDate` date default NULL,
  PRIMARY KEY  (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*
Table data for ecom.hotnews
*/

INSERT INTO `hotnews` VALUES 
(1,'New Release- 3rd Edtion Covers PHP 5.0, MySQL 4','This book is aimed at intermediate and advanced Web designers looking to make\r\nthe leap into server-side programming.','2006-04-09'),
(2,'How to Speed up Windows XP? New Article Available','Speed up Windows XP\r\n Tip 1: Eliminate programs that run at start-up\r\n Tip 2: Speed up shutdown times\r\n Tip 3: Disable services that run at start-up\r\n','2006-04-09'),
(3,'A Programmer’s Introduction to PHP 4.0','SQL could be defined as the standard language used to interact with relational\r\ndatabases, discussed shortly.','2006-04-09'),
(4,'Use of Knowledge Management','A Survey of Case Studies of the Use of Knowledge Management\r\nin Software Engineering','2006-04-09'),
(5,'Java Database Connectivity','Your FIRST ACCESS to\r\nJDBCTM\r\nJAVA DATABASE CONNECTIVITY','2006-04-09');

/*
Table structure for userdetails
*/

drop table if exists `userdetails`;
CREATE TABLE `userdetails` (
  `Title` varchar(10) default NULL,
  `UserName` varchar(30) NOT NULL default '',
  `Password` varchar(100) default NULL,
  `FirstName` varchar(30) default NULL,
  `LastName` varchar(30) default NULL,
  `Sex` varchar(10) default NULL,
  `Profession` varchar(30) default NULL,
  `Address` varchar(30) default NULL,
  `Country` varchar(30) default NULL,
  `Email` varchar(30) default NULL,
  `Question` varchar(40) default NULL,
  `Answer` varchar(50) default NULL,
  `LastLogin` date default NULL,
  PRIMARY KEY  (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*
Table data for ecom.userdetails
*/

INSERT INTO `userdetails` VALUES 
('Mr','Admin','202cb962ac59075b964b07152d234b70','Admin','Admin','Male','Systems Administrator','Colombo','Barbados','Admin@hotmail.com','What is your pets name?','Cat','2006-04-09'),
('Mr','rajkumar@gmail.com','65a1223dae83b8092c4edba0823a793c','T','Rajkumar','Male','Network Administrator','Colombo','Sri Lanka','rajkumar@gmail.com','What is your pets name?','monkey','2006-04-09'),
('Mr','subas@yahoo.com','202cb962ac59075b964b07152d234b70','G','Subaskar','Male','Systems Architect','colombo','Canada','subas@yahoo.com','What is your pets name?','cat','2006-04-09'),
('Mr','sureshp8@yahoo.com','0487cc982f7db39c51695026e4bdc692','P','Sureshkumar','Male','Analyst','colombo','Sri Lanka','sureshp8@yahoo.com','What is your pets name?','dog','2006-04-09'),
('Mr','tharmini_s@yahoo.co.uk','28742468abb3f5faeda64e4325cf4a5d','S','Tharmini','Female','Systems Administrator','Colombo','Sri Lanka','tharmini_s@yahoo.co.uk','What was the name of your first school?','R.H.C','2006-04-09'),
('Mr','theepan@inbox.com','2bf8c4160d6c7d0c70f368d2208a6226','P','Thivakaran','Male','Chairman/CEO','Colombo','Sri Lanka','theepan@inbox.com','What is your favorite pastime?','chatting','2006-04-09');

