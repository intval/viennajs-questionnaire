<?php

if(isset($_GET['counter']))
{
	$i = 0; 
    $dir = '.';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    echo "There were $i files";
	die();
}

if(!isset($_POST['howManyTimesBeenHere']))
	return;
	
echo 'thanks';
$filename = time().'.json';
file_put_contents('./'.$filename, json_encode($_POST));