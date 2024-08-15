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
    <p class="font-black tracking-widest text-2xl">Hello World!</p>
    <a href="/disclaimer" class="mt-8 text-red-500 underline hover:text-red-700">Please read my Disclaimer !!! </a>
</main>

<?php require base_path('views/partials/footer.php') ?>