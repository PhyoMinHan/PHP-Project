<?php include("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>
<ol class="flex items-center whitespace-nowrap mb-5" aria-label="Breadcrumb">
    <li class="inline-flex items-center">
        <a href="exchange.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 font-semibold focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
            Home
        </a>
        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
        </svg>
    </li>
</ol>
<hr class="border border-slate-200 mt-4 ">
<?php
$file = file_get_contents("https://forex.cbm.gov.mm/api/latest");
$obj = json_decode($file);
?>
<form action="exchangerate.php" method="post">
    <div class=" flex flex-col justify-center items-center">
        <div class="grid mt-3 gap-3">
            <div class="flex w-52 mx-auto">
                <input type="number" class=" py-3 px-4 block w-auto border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="amount" id="amount" name="amount">
            </div>
        </div>
        <div class="flex mt-3 justify-center w-auto gap-x-2">
            <div class="col-span-2 w-auto">
                <select name="from_currency" id="from_currency" class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600">
                    <option value="">From Currency</option>
                    <?php foreach ($obj->rates as $key => $rates) :  ?>
                        <option value="<?= $key ?>-<?= $rates ?>"> <?= $key ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-span-2 w-auto">
                <select id="to_currency" name="to_currency" class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600">
                    <option value="">To Currency</option>
                    <?php foreach ($obj->rates as $key => $rates) :  ?>
                        <option value="<?= $key ?>-<?= $rates ?>"> <?= $key ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center">
        <button class="me-2 mt-[30px] py-3 px-4 flex-grow w-auto text-center justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Calculate
        </button>
    </div>
</form>
<?php include("./template/footer.php") ?>