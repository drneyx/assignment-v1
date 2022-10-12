<?php


$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['sku'])) {
    $errors['sku'] = 'SKU is required.';
}

if (empty($_POST['price'])) {
    $errors['price'] = 'Price is required.';
}


if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);
