<?php

function remove_ext($filename) {
  return basename($filename, '.lgo');
}

echo json_encode(array_map('remove_ext', glob('../programs/*.lgo')));
