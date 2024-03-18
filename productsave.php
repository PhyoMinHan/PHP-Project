<?php
echo "<pre>";
$productFolder = "product-image";
$productFile = "product-folder";

if (!is_dir($productFolder)) {
    mkdir($productFolder, 0777, true);
};
if (!is_dir($productFile)) {
    mkdir($productFile, 0777, true);
}
$ext = pathinfo($_FILES["product_image"]["name"])["extension"];
$saveFile = $productFolder . "/" . uniqid() . "." . $ext;
if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $saveFile)) {
    $_POST["product_image"] = $saveFile;
}
print_r($_POST);
$json = json_encode($_POST);
$productFileName = $productFile . "/" . uniqid() . "_" . $_POST["product_name"] . ".json";
$fileStream = fopen($productFileName, "w");
if ($fileStream) {
    fwrite($fileStream, $json);
    fclose($fileStream);
    header("Location: product.php");
    exit;
} else {
    echo "Failed to open file $productFileName";
};
