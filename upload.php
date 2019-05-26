<?php

$allowed_ext = ['jpg', 'png', 'git', 'jpeg'];

$name = $_FILES['myFile']['name'];

$names = explode(".", $name);
$ext = array_pop($names);

if (!in_aaray($ext, $allowed_ext)) {
    echo "허용되지 않는 확장자 입니다.";
    exit;
}

move_uploaded_file($_FILES['myFile']['tmp_name'], "upload/$name");

echo "성공적으로 업로드 <br>";

echo "<pre>";
var_dump($_FILES);
echo "</pre>";