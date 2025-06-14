<?php
require_once 'crud.php';
header('Content-Type: application/json');

// Fungsi custom kategori
function getCategory($name, $description) {
    $text = strtolower($name . ' ' . $description);
    if (strpos($text, 'fabrication') !== false) return 'Fabrication & Installation';
    if (strpos($text, 'installation') !== false) return 'Installation';
    if (strpos($text, 'modification') !== false || strpos($text, 'repair') !== false) return 'Modification/Repair';
    if (strpos($text, 'replacement') !== false) return 'Replacement';
    if (strpos($text, 'cleaning') !== false) return 'Cleaning';
    if (strpos($text, 'insulation') !== false || strpos($text, 'isolasi') !== false) return 'Insulation';
    return 'Others';
}

$crud = new CRUD();
$action = isset($_GET['action']) ? $_GET['action'] : '';

// GET KATEGORI DINAMIS
if ($action === 'categories') {
    $projects = $crud->read('projects');
    $categories = [];
    foreach ($projects as $p) {
        $cat = getCategory($p['name'], $p['description']);
        if (!in_array($cat, $categories)) $categories[] = $cat;
    }
    echo json_encode([
        'status' => 'success',
        'categories' => $categories
    ]);
    exit;
}

// GET PROJECT PER KATEGORI + GAMBAR
if ($action === 'projects') {
    $category = isset($_GET['category']) ? $_GET['category'] : '';
    $projects = $crud->read('projects');
    $result = [];
    foreach ($projects as $project) {
        $cat = getCategory($project['name'], $project['description']);
        if ($category && $cat !== $category) continue;

        // Ambil gambar project
        $images = $crud->read('images', ['project_id' => $project['id']]);
        $imgArr = [];
        foreach ($images as $img) {
            $imgArr[] = [
                'id' => $img['id'],
                'url' => $img['url']
            ];
        }

        $result[] = [
            'id' => $project['id'],
            'name' => $project['name'],
            'description' => $project['description'],
            'year' => $project['year'],
            'category' => $cat,
            'images' => $imgArr
        ];
    }
    echo json_encode([
        'status' => 'success',
        'projects' => $result
    ]);
    exit;
}
// GET WORK EXPERIENCE LIST
if ($action === 'experience') {
    // Fetch all projects + join client
    $projects = $crud->read('projects');
    $result = [];
    foreach ($projects as $p) {
        // Ambil client name
        $client = $crud->read('clients', ['id' => $p['client_id']]);
        $client_name = $client ? $client[0]['name'] : '';

        $result[] = [
            'description' => $p['name'],         // atau $p['description'] jika mau
            'client' => $client_name,
            'year' => $p['year']
        ];
    }
    echo json_encode([
        'status' => 'success',
        'experience' => $result
    ]);
    exit;
}


// JIKA TIDAK ADA ACTION
echo json_encode([
    'status' => 'error',
    'message' => 'Invalid action. Gunakan ?action=categories atau ?action=projects atau ?action=experience'
]);
