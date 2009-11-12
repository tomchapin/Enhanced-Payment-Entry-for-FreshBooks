<?php

// This function will log the message with a timestamp and will then
// cause the app to halt and display the error message
function log_message_and_die($message=""){
	log_message($message);
	die($message);
	exit;
}

// This function will write a message to the log file with a timestamp
function log_message($message=""){
	global $AppVariables;
	$filename = $AppVariables['ErrorLog'];
	// Add timestamp to message
	$message = date("r")." - ".$message."\n";
	// In our example we're opening $filename in append mode.
	// The file pointer is at the bottom of the file hence
	// that's where $somecontent will go when we fwrite() it.
	if (!$handle = fopen($filename, 'a')) {
		 echo $message;
		 die("Cannot open file ($filename). Please make sure the following log folder has write permissions: ".$AppVariables['LogFolder']);
		 exit;
	}
	// Write $somecontent to our opened file.
	if (fwrite($handle, $message) === FALSE) {
		echo $message;
		die("Cannot write to file ($filename). Please make sure the following log folder has write permissions: ".$AppVariables['LogFolder']);
		exit;
	}
	fclose($handle);


}

?>