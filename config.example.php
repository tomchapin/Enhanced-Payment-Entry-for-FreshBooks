<?php

// Note: Before you can use this application, you will need to copy this template file
// to a new file named "config.php" in the root folder of the application and edit it
// so that it has the proper connection values.

// MySQL Database Connection Information:
$AppVariables['DatabaseServer']		= 'localhost';
$AppVariables['DatabaseName']		= 'enter-your-database-name-here';
$AppVariables['DatabaseUserName']	= 'enter-your-database-username-here';
$AppVariables['DatabasePassword']	= 'enter-your-database-password-here';

// Freshbooks API Connection Information
// For more information, see: http://developers.freshbooks.com/blog/view/wheres_my_api_key/
$AppVariables['FreshbooksApiUrl']		= 'https://enter-your-account-name-here.freshbooks.com/api/2.1/xml-in';
$AppVariables['FreshbooksApiAuthToken']	= 'enter-your-api-authentication-token-here';

?>