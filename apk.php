<?php
//$json_data = readDataFromFile();
  $json_data = readDataFromPython();
echo $json_data;

function readDataFromPython()
{
    $pwd = getcwd();
    // $cmd = "python " . $pwd . "/apkpure.py";
    // $cmd = "python " . $pwd . "/urls.py";
    // $last_line = exec($cmd, $output, $retval);
    // if ($retval != 0) {
        // echo("Python Error");
        // return;
    // }
    // exec($cmd);
    // return $last_line;
    // $urls = json_decode($last_line);
    // foreach($urls as $url){
        // print("<a href='$url ' target='_blank'>$url</a><br>");
    // }
    // $command = 'start /b python.exe apkpure.py';
    // pclose(popen($command, 'r'));
    // sleep(20);
    $urls = json_decode(file_get_contents('urls.txt'));
    if(count($urls) < 200)
        return "<h1>Processing not finished yet.<br> Please wait and try again later.</h1>";
    $i = 0;
    foreach($urls as $url){
        $i += 1;
        print("<h3><a href='$url ' target='_blank'>$i. \t$url</a><br></h3>");
    }
}