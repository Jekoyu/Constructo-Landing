<?php
require_once 'crud.php';
$crud = new CRUD();

$type = $_GET['type'] ?? '';
$data = [];
switch ($type) {
    case 'legalitas':
        $data = $crud->read('legalitas');
        break;
    case 'services':
        $data = $crud->read('services');
        break;
    case 'clients':
        $data = $crud->read('clients');
        break;
    case 'projects':
        $data = $crud->read('projects');
        break;
    case 'users':
        $data = $crud->read('users');
        break;
    default:
        http_response_code(400);
        $data = ['error' => 'Unknown type'];
}

header('Content-Type: application/json');
echo json_encode($data);
?>
