<?php
if (!empty($_FILES['uploadfile'])) {
    $path = dirname(__FILE__) . '/../../images/tmp/';
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    foreach ($_FILES['uploadfile']['tmp_name'] as $key => $tmp_name) {
        $name = basename($_FILES['uploadfile']['name'][$key]);
        move_uploaded_file($tmp_name, $path . $name);
    }
    echo "File uploaded!";
}
?>
