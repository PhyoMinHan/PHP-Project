<?php include("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>
<ol class="flex items-center whitespace-nowrap mb-5" aria-label="Breadcrumb">
    <li class="inline-flex items-center">
        <a href="index.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 font-semibold focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
            Home
        </a>
        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
        </svg>
    </li>
    <li class="inline-flex items-center">
        <a href="area.php" class="flex items-center text-sm text-gray-800 hover:text-blue-600 font-semibold focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
            Answer List
        </a>
    </li>
</ol>
<hr class="border border-slate-200 mt-4 ">
<?php
$fileName = "note.txt";
if (file_exists($fileName)) {
    touch($fileName);
};
$fileStream = fopen($fileName, "r");
?>
<div class="bg-slate-200 h-auto rounded-lg py-2">
    <h3 class="text-center text-xl px-2 mt-3 ">
        <?php
        while (!feof($fileStream)) :
            echo fgets($fileStream);
        endwhile;
        ?>
    </h3>
</div>
<div class="flex mt-10">
    <a href="./index.php" name="calc-btn" class="py-3 mt-10 px-4 flex w-[425px] text-center justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Calculate Again
    </a>
</div>
</div>
</div>
<?php include("./template/footer.php") ?>