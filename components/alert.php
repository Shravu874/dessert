<?php
function unique_id(){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsLength = strlen($chars);
    $randomString = '';
    for ($i=0; $i < 20; $i++) {
        $randomString.=$chars[mt_rand(0, $charLength - 1)];
    }
    return $randomString;
}
?>