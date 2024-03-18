<?php
if (empty($_POST["width"]) || empty($_POST["breadth"])) {
    header("location:index.php");
};
?>
<?php include_once("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>
<ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
    <li class="inline-flex items-center">
        <a href="index.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
            Home
        </a>
        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
        </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
        <a href="save.php" class="flex items-center text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
            area result
        </a>
    </li>
</ol>
<hr class="border border-slate-200 mt-4 ">
<?php
$width = $_POST["width"];
$breadth = $_POST["breadth"];
$area = $width * $breadth;
$filename = "note.txt";
if (isset($_POST["width"]) && isset($_POST["breadth"])) {
    if ($width != 0 && $breadth != 0) {
        if (file_exists($filename)) {
            $fileStream = fopen($filename, "a");
            fwrite($fileStream, "$width * $breadth = $area <br>");
            fclose($fileStream);
        } else {
            echo "File $filename does not exist.";
        }
    } else {
        echo "Width and breadth cannot both be zero.";
    }
} else {
    echo "Please provide both width and breadth values.";
}
?>
<p class="font-bold text-3xl flex justify-center items-center h-40"><?= $area ?> Sqft</p>
<div class="flex justify-between items-center">
    <a href="index.php" name="calc" type="submit" class="me-2 mt-[30px] py-3 px-4 flex w-[425px] text-center justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Home
    </a>
    <a href="./area.php" name="calc" type="submit" class="ms-2 mt-[30px] py-3 px-4 flex w-[425px] text-center justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        List
    </a>
</div>
</div>
</div>
<?php include("./template/footer.php") ?>