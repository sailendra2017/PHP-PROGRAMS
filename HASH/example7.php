<?php
file_put_contents('example.txt','The Quick brown fox jumped over the lazy dog');
echo hash_hmac_file('md5', 'example.txt', 'secret')
?>