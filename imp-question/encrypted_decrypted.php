<?php
// Encryption
$data = "Sensitive Information!";
$cipher_method = "aes-256-cbc";
$key = "thisisaverysecureencryptionkey!!"; // Must be 32 characters for AES-256
//$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));

// Encrypt data
$encrypted = openssl_encrypt($data, $cipher_method, $key);
echo "encrypted: " . $encrypted;
echo '<br>';
// Concatenate IV with encrypted data (for easy storage)
// $encrypted_with_iv = base64_encode($encrypted . '::' . $iv);
// echo "Encrypted: " . $encrypted_with_iv . PHP_EOL;

// Decryption
//list($encrypted_data, $iv) = explode('::', base64_decode($encrypted_with_iv), 2);

// Decrypt data
$decrypted = openssl_decrypt($encrypted, $cipher_method, $key);
echo "Decrypted: " . $decrypted;
