-----------------------------------------------------------------------------
Enhanced Payment Entry for Freshbooks (version 0.0.1)
-----------------------------------------------------------------------------
The goal of this app is to enhance and help automate the
mass-entry of payments (such as checks) made to client
invoices in Freshbooks.
-----------------------------------------------------------------------------
Author: Tom Chapin (tchapin@gmail.com)
        http://www.tchapin.com
-----------------------------------------------------------------------------
Git: http://github.com/tomchapin/Enhanced-Payment-Entry-for-FreshBooks
-----------------------------------------------------------------------------


Base Server Requirements:

 - PHP 5
 - Curl (with access to external sites)
 - MySQL database
 - Freshbooks API access


-----------------------------------------------------------------------------


Instructions for installation/deployment:

1. Set up a MySQL database and import the initial_mysql_database.sql file
   so that you have the required structure and initial data.

2. Copy the config.example.php file to "config.php" and edit
   it to enter your database connection information, as well
   as your Freshbooks API key (which can be obtained from your
   account tab inside of Freshbooks, if you are logged in as admin)

3. Change the server permissions for the /log/ and /tmp/ folders to have
   0777 (write,read,execute) permissions.

