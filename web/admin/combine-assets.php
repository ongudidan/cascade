<?php
function combineFiles($files, $output)
{
    $buffer = '';
    foreach ($files as $file) {
        $buffer .= file_get_contents($file) . "\n";
    }
    file_put_contents($output, $buffer);
}

// Combine CSS files
$cssFiles = [
    __DIR__ . "/css/bootstrap.min.css",
    __DIR__ . "/css/feather.css",
    __DIR__ . "/css/flags.css",
    __DIR__ . "/css/fontawesome.min.css",
    __DIR__ . "/css/all.min.css",
    __DIR__ . "/css/style.css",
    __DIR__ . "/css/dan.css",
    __DIR__ . "/css/dan2.css",
    __DIR__ . "/css/datatables.min.css",
    __DIR__ . "/css/toastr.min.css",
];
combineFiles($cssFiles, __DIR__ . "/css/all-css.min.css");

// Combine JS files
$jsFiles = [
    __DIR__ . "/js/bootstrap.bundle.min.js",
    __DIR__ . "/js/feather.min.js",
    __DIR__ . "/js/jquery.slimscroll.min.js",
    __DIR__ . "/js/apexcharts.min.js",
    __DIR__ . "/js/chart-data.js",
    __DIR__ . "/js/datatables.min.js",
    __DIR__ . "/js/sweetalert.min.js",
    // __DIR__ . "/js/custom.js",
    __DIR__ . "/js/canvasjs.min.js",
    __DIR__ . "/js/modal-handler.js",
    __DIR__ . "/js/toastr.min.js",
    __DIR__ . "/js/script.js",
];
combineFiles($jsFiles, __DIR__ . "/js/all-js.min.js");

echo "Assets combined successfully!";
