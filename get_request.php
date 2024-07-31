<?php
header('Content-Type: application/json');

switch ($_SERVER['REQUEST_METHOD']) {
    case 'PUT':
        // JSON verisini al
        $put_data = file_get_contents('php://input');
        // JSON verisini diziye dönüştür
        $put_vars = json_decode($put_data, true);
        echo json_encode($put_vars);
        break;

    case 'PATCH':
        // JSON verisini al
        $patch_data = file_get_contents('php://input');
        // JSON verisini diziye dönüştür
        $patch_vars = json_decode($patch_data, true);
        echo json_encode($patch_vars);
        break;

    case 'DELETE':
        echo json_encode(['message' => 'DELETE request received']);
        break;

    default:
        echo json_encode(['message' => 'GET request received']);
        break;
}
