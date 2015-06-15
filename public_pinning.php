<?php
// openssl x509 -in example.crt -pubkey -noout | openssl rsa -pubin -outform der | openssl dgst -sha256 -binary | base64
if(!isset($argv['1'])){
	die('certificate not set');
}
$certificate = $argv['1'];
$public_key = openssl_get_publickey(file_get_contents($certificate));
$public_key_details = openssl_pkey_get_details($public_key);
$public_key_pem = $public_key_details['key'];

//Convert PEM to DER before SHA1'ing
$string_start = '-----BEGIN PUBLIC KEY-----';
$string_end = '-----END PUBLIC KEY-----';
$pem_trimed = substr($public_key_pem, (strpos($public_key_pem, $string_start)+strlen($string_start)), (strlen($public_key_pem) - strpos($public_key_pem, $string_end))*(-1));
$der = base64_decode($pem_trimed);

// 47DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU= is an empty hash
echo PHP_EOL. "Header always set Public-Key-Pins 'pin-sha256=\"" . base64_encode(openssl_digest($der,'sha256',true)) ."\"; pin-sha256=\"bZ3qT75yZLagDEADBEEF0h3KAseeheXXJ5dliOfLB2A=\"; max-age=5184000'". PHP_EOL;
