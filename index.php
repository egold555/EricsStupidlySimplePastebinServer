<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //setup strings
    $text = file_get_contents('php://input');
    $name = generateRandomString();
    $outputFileName = "data\\".$name.".txt";

    //write file
    $myfile = fopen($outputFileName, "w") or die("Unable to open file!");
    fwrite($myfile, $text);
    fclose($myfile);
    echo($name);
}
else {
    die("Request must be a POST request!");
}

function generateRandomString($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>
