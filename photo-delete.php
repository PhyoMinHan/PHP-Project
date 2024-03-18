<?php
$savefolder = "photos";
$file = $_GET["file_name"];
if (unlink($savefolder . "/" . $file)) {
    header("location:photo.php");
}