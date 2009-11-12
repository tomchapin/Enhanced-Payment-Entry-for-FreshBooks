-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Nov 11, 2009 at 11:32 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.6
-- 
-- Database: `freshbooks_payments`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `clients`
-- 

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `organization` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table structure for table `invoices`
-- 

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- Table structure for table `payments`
-- 

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
