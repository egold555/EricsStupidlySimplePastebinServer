<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    if(isset($_GET['id'])){}
        $Parsedown = new Parsedown();
        
        $name = $_GET['id'];
        $outputFileName = "data\\".$name.".txt";
        $myfile = fopen($outputFileName, "r") or die("Unable to open file!");
        echo fread($myfile, filesize($outputFileName));
        fclose($myfile);
    }
    else {
        die("'id' can not be blank!")
    }
}
else {
    die("Request must be a GET request!");
}

?>
