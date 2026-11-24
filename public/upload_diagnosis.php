<?php

header('Content-Type: application/json');

$uploadDir = ini_get('upload_tmp_dir');

echo json_encode([
    'upload_tmp_dir' => $uploadDir,
    'exists' => is_dir($uploadDir),
    'writable' => is_writable($uploadDir),
], JSON_PRETTY_PRINT);
