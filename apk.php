<?php
//$json_data = readDataFromFile();
  $json_data = readDataFromPython();
echo $json_data;

function readDataFromPython()
{
    $pwd = getcwd();
    $cmd = "python " . $pwd . "/urls.py";
    $last_line = exec($cmd, $output, $retval);
    if ($retval != 0) {
        echo("Python Error");
        return;
    }
    // return $last_line;
    foreach(json_decode($last_line) as $url){
        print("<a href='$url ' target='_blank'>$url</a><br>");
    }
}