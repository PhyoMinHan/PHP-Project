<?php
echo "<pre>";
// print_r($_GET);
$fileName = $_GET["file_name"];
$data = file_get_contents("product-folder" . "/" . $fileName);
$obj = json_decode($data);
if (unlink($obj->product_image)) {
    if (unlink("product-folder" . "/" . $fileName)) {
        header("location:product.php");
    }
}
header("location:product.php");
