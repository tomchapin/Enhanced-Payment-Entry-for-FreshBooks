<?php

// Array for holding global variables (access within functions by running: global $AppVariables;
if(!isset($AppVariables)){
	$AppVariables = array();
}

// Determine absolute system path to the applications's working folder
$AppVariables['AppPath'] = realpath('./');

// Paths to log files
$AppVariables['LogFolder'] = $AppVariables['AppPath'] . '/log';
$AppVariables['ErrorLog'] = $AppVariables['LogFolder'] . '/error_log.log';

// Paths to tmp files
$AppVariables['TmpFolder'] = $AppVariables['AppPath'] . '/tmp';

?>