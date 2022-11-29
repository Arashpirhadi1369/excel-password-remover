<?php
set_time_limit(0);

require_once('PHPDecryptXLSXWithPassword.php');

$encryptedFilePath = 'encrypted.xlsx';

$decryptedFilePath = 'decrypted.xlsx';

$dictionary = fopen("passDicNumOnly4Char.txt", "r");

if ($dictionary) {
    $passwords = explode(",", file_get_contents('passDicNumOnly4Char.txt'));
}

foreach ($passwords as $password) {
    decrypt($encryptedFilePath, $password, $decryptedFilePath);
}
