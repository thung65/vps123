<?php
error_reporting(0);
$id = $_GET['id'] ?? '';

if (empty($id)) {
    header("HTTP/1.1 404 Not Found");
    exit;
}

// Chon nguon link (Thu thay nguon khac neu nguon cu bi loi)
$source_url = "https://sgclient.duckdns.org/source/tv360.m3u8?id=" . $id;

// Header de chong cache va mo khoa cho Smart TV
header("Access-Control-Allow-Origin: *");
header("Cache-Control: no-cache, no-store, must-revalidate");

// Dung Redirect 302 - Cach nay nhanh nhat va tranh loi 502 tren host
header("Location: " . $source_url, true, 302);
exit;
