<?php
// Path ke folder rute
$routeFolder = '../app/routes/';

// Daftar rute yang tersedia
$routes = [
    '' => 'home/index.php', // Rute default
    'page_1' => 'page_1/index.php',
    'page_2' => 'page_2/index.php'
];

// Mendapatkan rute utama
$route = isset($urlParts[0]) ? $urlParts[0] : '';

// Fungsi untuk menyertakan template
include"templates.php";



/* OPSI 1 = MODE Standar

// Memeriksa apakah rute ada dalam daftar
if (array_key_exists($url, $routes)) {
    $filePath = $routeFolder . $routes[$url];
    if (file_exists($filePath)) {
        include $filePath;
    } else {
        echo '404 - Halaman tidak ditemukan';
    }
} else {
    // Menampilkan halaman 404 jika rute tidak ditemukan
    echo '404 - Halaman tidak ditemukan';
}*/



/* OPSI 2 = Mode $urlParts[0] dijadikan parameter

// Mendapatkan parameter tambahan jika ada
$parameter = isset($urlParts[1]) ? htmlspecialchars($urlParts[1]) : '';

// Validasi parameter tambahan (jika diperlukan)
if (!empty($parameter) && !preg_match('/^[a-zA-Z0-9_-]+$/', $parameter)) {
    die('Invalid URL');
}

// Memeriksa apakah rute ada dalam daftar
if (array_key_exists($route, $routes)) {
    $filePath = $routeFolder . $routes[$route];
    if (file_exists($filePath)) {
        include $filePath;
    } else {
        // Jika file rute tidak ditemukan
        echo '404 - Halaman tidak ditemukan';
    }
} else {
    // Menampilkan halaman 404 jika rute tidak ditemukan
    echo '404 - Halaman tidak ditemukan';
}*/
