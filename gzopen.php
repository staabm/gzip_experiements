<?php

$url = 'http://localhost/dev/fileget_zlib/packages.json';
$fp = gzopen($url, 'r');
echo stream_get_contents($fp);