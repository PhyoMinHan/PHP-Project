<?php include("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>
<section class="">
    <h3 class="font-bold font-serif text-2xl mb-4">Create product</h3>
    <hr class="mb-4">
    <form action="./productsave.php" method="post" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="product_name" class="block text-sm font-medium mb-2 dark:text-white">Product Name</label>
            <input required type="text" id="product_name" name="product_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="eg . apple ">
        </div>
        <div class="mb-4">
            <label for="product_price" class="block text-sm font-medium mb-2 dark:text-white">Product Price</label>
            <input type="number" id="product_price" name="product_price" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="eg . 500 ">
        </div>
        <div class="mb-6">
            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product Rating</label>
            <select required name="product_rating" class="py-3 px-4 pe-9 block w-full focus:outline-none border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                <option value="">Select Rating</option>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="mb-6">
            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product Image</label>
            <label for="product_image" class="sr-only">Choose file</label>
            <input required type="file" name="product_image" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
    file:bg-gray-50 file:border-0
    file:me-4
    file:py-3 file:px-4
    dark:file:bg-gray-700 dark:file:text-gray-400">
        </div>
        <div class=" flex justify-end">
            <button class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Created
            </button>
        </div>
    </form>
</section>
<?php include("./template/footer.php") ?>