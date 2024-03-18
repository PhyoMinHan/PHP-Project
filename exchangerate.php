<?php
if (empty($_POST["from_currency"]) || empty($_POST["to_currency"]) || empty($_POST["amount"])) {
    header("location:exchange.php");
};
?>
<?php
$amount = $_POST["amount"];
$from_current_arr = explode("-", $_POST["from_currency"]);
$from_current_name = $from_current_arr[0];
$from_current_value = str_replace(",", "", $from_current_arr[1]);
$to_current_arr = explode("-", $_POST["to_currency"]);
$to_current_name = $to_current_arr[0];
$to_current_value = str_replace(",", "", $to_current_arr[1]);
$mmk = $amount * ($from_current_value);
$to = $mmk / $to_current_value;
?>
<?php include("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>
<ol class="flex items-center whitespace-nowrap mb-5" aria-label="Breadcrumb">
    <li class="inline-flex items-center">
        <a href="./exchange.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 font-semibold focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
            Home
        </a>
        <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
        </svg>
    </li>
    <li class="inline-flex items-center">
        <a href="#" class="flex items-center text-sm text-gray-800 hover:text-blue-600 font-semibold focus:outline-none focus:text-blue-600 dark:focus:text-blue-500">
            Exchange rate
        </a>
    </li>
</ol>
<hr class="border border-slate-200 mt-4">
<div class="bg-slate-200 flex justify-center items-center text-center py-auto rounded-lg">
    <p class=" text-2xl  text-center mt-9 h-28"> <?= abs(round($to, 2)), " ", $to_current_name ?></p>
</div>
<div class="flex mt-10 ">
    <a href="./exchange.php" name="calc-btn" class="py-3 mt-10 px-4 flex w-[425px] text-center justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Calculate Again
    </a>
</div>
<?php include("./template/footer.php") ?>