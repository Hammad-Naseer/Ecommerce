<?php

function img_upload($image){
    $fila_name = $image["name"];
    $fila_size = $image["size"];
    $fila_tmp = $image["tmp_name"];
    $fila_type = $image["type"];
    $img_upload_path = './uploads/'.$fila_name;
    // echo $img_upload_path;
    // exit;
    move_uploaded_file($fila_tmp,$img_upload_path);
}

function img_upload_update($image){
    $fila_name = $image["name"];
    $fila_size = $image["size"];
    $fila_tmp = $image["tmp_name"];
    $fila_type = $image["type"];
    $img_upload_path = './uploads/'.$fila_name;
    
    move_uploaded_file($fila_tmp,$img_upload_path);
}

?>