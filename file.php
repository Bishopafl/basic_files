<?php

// finds out if a file exists or the address of the specific file
echo __FILE__ . "<br>";

// shows the line your on
echo __LINE__ . "<br>";

// gives directory path
echo __DIR__ . "<br>";

// finds out if file or directory exists... 
// best used in if statement
if(file_exists(__DIR__)){
	echo "yes <br>";

}

if(is_file(__DIR__)){
	echo "yes";

} else {
	echo "no";
}

echo file_exists(__FILE__) ? "yes" : "no";



?>