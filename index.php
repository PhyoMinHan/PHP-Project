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
</ol>
<hr class="border border-slate-200 mt-4 ">
<form action="./save.php" method="post" class="mt-3">
    <label for="width" class="block text-md font-medium mb-2 dark:text-white">Width</label>
    <input type="number" id="width" name="width" class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
    <label for="breadth" class="block text-md font-medium mb-2 dark:text-white mt-3">Breadth</label>
    <input type="number" id="breadth" name="breadth" class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
    <div class="flex justify-between items-center">
        <button name="calc" type="submit" class="me-2 mt-[30px] py-3 px-4 flex w-[425px] text-center justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            submit
        </button>
        <a href="./area.php" name="calc" type="submit" class="ms-2 mt-[30px] py-3 px-4 flex w-[425px] text-center justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            list
        </a>
    </div>
</form>
</div>
</div>
<?php include("./template/footer.php") ?>