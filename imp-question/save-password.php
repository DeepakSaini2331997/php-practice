<?php 
$name = 'Deepak';
echo password_hash($name,PASSWORD_DEFAULT);

$dbPassword='$2y$10$E7P5J2eZq.to6xlV2nfNkOM5XVYb291JM/iwHUGbfR3ZTruxoZx9G';

echo password_verify($name,$dbPassword);

?>