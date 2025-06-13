<?php
require_once __DIR__ . '/../../env_loader.php'; // Load env variables
require_once __DIR__ . '/../../database.php';   // Load Database class

// Koneksi ke database (pakai Database class dari database.php)
$db = new Database();
$conn = $db->connect();

// Path ke file SQL migrasi
$sql_file = __DIR__ . '/db.sql';

if (!file_exists($sql_file)) {
    die("File db.sql tidak ditemukan!\n");
}

$sql = file_get_contents($sql_file);
if ($sql === false) {
    die("Gagal membaca file db.sql\n");
}

// Split multi-query, simple pakai ';'
$queries = array_filter(array_map('trim', explode(';', $sql)));

echo "Migrating database: " . getenv('DB_NAME') . "\n";

foreach ($queries as $query) {
    if (!empty($query)) {
        try {
            $conn->exec($query);
            // echo "Query sukses: $query\n"; // Bisa aktifkan untuk debug
        } catch (PDOException $e) {
            echo "Query error: " . $e->getMessage() . "\n";
        }                   
    }
}

echo "Migration selesai.\n";
