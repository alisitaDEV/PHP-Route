<?php
// Fungsi untuk menyertakan template
$templateFolder = '../app/templates/';
function includeTemplate($templateName, $templateFolder) {
    $filePath = $templateFolder . $templateName . '.php';
    if (file_exists($filePath)) {
        include $filePath;
    } else {
        echo 'Template tidak ditemukan: ' . htmlspecialchars($templateName);
    }
}