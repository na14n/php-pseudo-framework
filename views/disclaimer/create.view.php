<?php

// ==================================
//        File-Specific Styling
// ==================================
// By Adding a $page_styles array at
// the start of your view page. You 
// can add specific CSS files to be
// loaded in the view page.
//
// Make sure to incldue the whole
// file path inside the public folder.
// (e.g '/styles/index.css')
//
//  Also, make sure that PAGE STYLES
//  PRECEED THE INITIALIZATION OF
//  HEAD.PHP FILE
//

$page_styles = [
    '/styles/index.css',
];

// ===========================================
//             View File Structure
// ===========================================
// ALWAYS ADD THE require 'partials/head.php'
// at the top of the file and the require
// 'partials/footer.php' at the end of the
// file.
//
// You can also add other partial or UI
// components by adding its full path string
// on the base_path() function as done below.
//  

require base_path('views/partials/head.php')

?>

<!-- Your HTML code goes here -->

<main class="main">
    <h3 class="font-black tracking-widest text-2xl">Hello Everyone!</h3>
    <p class="mt-8 text-slate-700 max-w-[75ch] text-pretty indent-8 align-justify">This PHP pseudo framework is by no means a perfect one. If you want to use this for production or anything that deals with complex functionalities, you are better off using <a target="_blank" href="https://laravel.com/" class="underline text-red-900 hover:text-red-700">Laravel</a>. </p>
    <p class="mt-2 text-slate-700 max-w-[75ch] text-pretty indent-8 align-justify">By no means also that I own everything that is in this repository. This is a product of <a target="_blank" href="https://laracasts.com/series/php-for-beginners-2023-edition" class="underline text-blue-900 hover:text-blue-700">learning PHP with Laracast</a>. All credits to him for without his course I could not make this. </p>
    <p class="mt-2 text-slate-700 max-w-[75ch] text-pretty indent-8 align-justify">Lastly, I made this for fun and for reference for my juniors if ever they want to learn how to create simple web applications using PHP and Mysql. I did this for fun, and hoping that maybe someone may find this useful.</p>
</main>

<?php require base_path('views/partials/footer.php') ?>