<?php
//$json_data = readDataFromFile();
  $json_data = readDataFromPython();
echo $json_data;

function readDataFromPython()
{
    file_put_contents("urls.txt", "");
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
    $command = 'start /b python.exe apkpure.py';
    pclose(popen($command, 'r'));
    return "
    Do not run this url again.<br>
    <h1>The Scrapping App is running now.<br> It will take some time...<br> 
    Please open <a href='http://18.233.34.185/apk.php' target='_blank'>http://18.233.34.185/apk.php</a> after few mins.</h1><br>
    ";
}