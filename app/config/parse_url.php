<?php
// Mendapatkan parameter URL
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Pisahkan URL menjadi bagian-bagian
$urlParts = explode('/', trim($url, '/'));