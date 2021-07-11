<?php

$fileContent = file_get_contents('php://input');

$result = file_put_contents('../programs/' . $_GET['name'] . '.lgo', $fileContent);

echo json_encode(["isSuccess" => $result != false]);
