<?php

$url = 'compress.zlib://http://localhost/dev/fileget_zlib/packages.json';
$fp = fopen($url, 'r');
echo stream_get_contents($fp);