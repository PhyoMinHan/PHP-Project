<?php
$path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');
echo $path_parts['dirname'], "\n";
echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$arrayFilter = array_filter($array, fn ($el) => $el === 3 || $el === 4);
print_r($arrayFilter);
$photos = scandir("template");
print_r($photos);
if (!$filename = "app.txt") {
    touch("app.txt");
};
$fileStream = fopen("$filename", "r");
while (!feof($fileStream)) {
    var_dump(fgets($fileStream));
};
$file = file_get_contents("https://forex.cbm.gov.mm/api/latest");
$obj = json_decode($file, true);
var_dump($obj["rates"]);
$savefile = "gallery";
if (file_exists($savefile)) {
    unlink($savefile);
}
