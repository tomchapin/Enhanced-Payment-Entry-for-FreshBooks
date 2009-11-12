<?php

// This file handles all the including of various other files needed by the app

include_once("global_variables.php");
include_once("logging_functions.php");

// Search for the config file and include it
if(!file_exists($AppVariables['AppPath']."/config.php")){
	log_message_and_die($AppVariables['AppPath']."/config.php file is missing! Please copy the config.example.php file and edit it with your settings.");
}else{
	include_once($AppVariables['AppPath']."/config.php");
}

?>