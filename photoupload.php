<?php
echo "<pre>";
$savefolder = "photos";
if (!is_dir($savefolder)) {
    mkdir($savefolder, 0777);
};
$error = false;
foreach ($_FILES["uploadfile"]["name"] as $key => $name) {
    $ext = pathinfo($name)["extension"]; //for jpg
    $savefile = $savefolder . "/" . uniqid() . "." . $ext; //for address    
    if (!move_uploaded_file($_FILES["uploadfile"]["tmp_name"][$key], $savefile)) { ////change address file
        header("location:photoupload.php");
        $error = true;
    }
};
if ($error === false) {
    header("location:photo.php");
};
// print_r($_FILES["uploadfile"]["name"]);
// print_r($_FILES);   
// print_r( $_FILES["uploadfile"]["name"])["extension"];