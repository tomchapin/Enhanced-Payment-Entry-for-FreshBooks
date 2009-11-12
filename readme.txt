-----------------------------------------------------------------------------
Enhanced Payment Entry for Freshbooks (version 0.0.1)
-----------------------------------------------------------------------------
The goal of this app is to help Freshbooks users enter received
payments (such as checks) and apply them to client invoices in Freshbooks.

Some of the features will include:
 - Multi-step wizard
 - Mass entry of payments all from one screen (broken down per-client)
 - Intelligent automated application of payments to invoices (attempts to
   pay off oldest invoices first, and even handles spanning payments across
   multiple invoices). User is also able to manually allocate payments.
 - Notifies clients by email after payments have been applied
 
IMPORTANT: THIS APPLICATION IS NOT CURRENTLY FUNCTIONAL!!! Please check back soon!
 
-----------------------------------------------------------------------------
Author: Tom Chapin (tchapin@gmail.com)
        http://www.tchapin.com
-----------------------------------------------------------------------------
Git: http://github.com/tomchapin/Enhanced-Payment-Entry-for-FreshBooks
-----------------------------------------------------------------------------
Third-Party Libraries Used:
 - Freshbooks PHP Library (http://code.google.com/p/freshbooks-php-library/)
 - QuickBase (http://github.com/ashrewdmint/quickbase)
-----------------------------------------------------------------------------

Server Requirements:

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
   as your Freshbooks API url and authorization key.
   For more information, please see:
   http://developers.freshbooks.com/blog/view/wheres_my_api_key/

3. Change the server permissions for the /log/ and /tmp/ folders to have
   0777 (write,read,execute) permissions.
   
4. Access the application by loading the index.php file in the root folder.

