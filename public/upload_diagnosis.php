<?php

header('Content-Type: application/json');

echo json_encode([
    'php_ini' => php_ini_loaded_file(),
    'upload_tmp_dir' => ini_get('upload_tmp_dir'),
    'system_tmp_dir' => sys_get_temp_dir(),
    'tmp_exists' => is_dir(sys_get_temp_dir()),
    'tmp_writable' => is_writable(sys_get_temp_dir()),
    'file_uploads' => ini_get('file_uploads'),
    'upload_max_filesize' => ini_get('upload_max_filesize'),
    'post_max_size' => ini_get('post_max_size'),
], JSON_PRETTY_PRINT);
