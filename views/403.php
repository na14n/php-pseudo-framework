<!--======================================
            This is a 403 Page 
    ======================================

    This page is displayed by the router.
    If it encounters an error.
-->

<?php require base_path('views/partials/head.php') ?>
<?php $heading = 'Error 403 :(' ?>


<main class="w-full h-dvh flex flex-col">
    <div class="m-16 grow flex items-center justify-center flex-col gap-2">
        <h1 class="text-2xl font-bold">Sorry but the resource you want is not for you.</h1>
        <a href="/"class="text-blue-700 hover:underline">Return to Home</a>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>