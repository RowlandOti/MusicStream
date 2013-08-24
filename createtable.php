<?php 
 // Connects to your Database 
 mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error()); 
 mysql_select_db("Database_Name") or die(mysql_error()); 
 mysql_query("CREATE TABLE tablename ( name VARCHAR(30), 
 age INT, car VARCHAR(30))"); 

Print "Your table has been created"; ?> 