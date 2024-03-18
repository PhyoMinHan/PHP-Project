<?php include("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>
<form action="photoupload.php" method="post" enctype="multipart/form-data">
  <label for="file-input" class="sr-only">Choose file</label>
  <input type="file" name="uploadfile[]" multiple id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400     dark:f  ocus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
    file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400">
  <button class="mt-4 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
    Submit
  </button>
</form>
<hr class="mt-6">
<?php
$photos = array_filter(scandir("photos"), fn ($el) => $el != "." && $el != "..");
?>
<div class="columns-3 gap-4 mt-4">
  <?php foreach ($photos as $photo) : ?>
    <div class="relative inline-flex mb-3 group">
      <img class="rounded shadow-slate-300 shadow-inner mb-3" src="photos/<?= $photo ?>" alt="">
      <a onclick="return confirm('Are you sure')" href="photo-delete.php?file_name=<?= $photo ?>" class=" hidden absolute bottom-0 left-0 py-3 px-4 group-hover:inline-flex items-center pointer-events-none group-hover:pointer-events-auto gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        Delete
      </a>
    </div>
  <?php endforeach; ?>
</div>
<?php include("./template/footer.php") ?>