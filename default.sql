/*
 Navicat MySQL Data Transfer

 Source Server         : Business Sorter
 Source Server Type    : MySQL
 Source Server Version : 50532
 Source Host           : localhost
 Source Database       : bs-dev

 Target Server Type    : MySQL
 Target Server Version : 50532
 File Encoding         : utf-8

 Date: 05/13/2014 21:17:27 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;


-- create database for the dynamic site
CREATE DATABASE IF NOT EXISTS `dev`;

-- create a new user for the Web app
DELETE FROM mysql.user WHERE User = 'dev-user';
CREATE USER 'dev-user'@'localhost' IDENTIFIED BY 'B32sU3PvJkrO';

-- grant only the necessary privileges to our new user
GRANT SELECT, INSERT, UPDATE, DELETE ON `dev`.* TO 'dev-user'@'localhost';

-- make this our active database
USE `dev`;

-- add default database setup here

SET FOREIGN_KEY_CHECKS = 1;
