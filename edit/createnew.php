<?php

echo json_encode(["isSuccess" => touch('../programs/'. $_GET['name'] . '.lgo')]);
