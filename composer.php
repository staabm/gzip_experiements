<?php

$options['http']['header'] = array('Accept-Encoding: gzip');
$ctx = stream_context_create($options);

$url = 'http://localhost/dev/fileget_zlib/packages.json';
$res = file_get_contents($url, null, $ctx);

echo zlib_decode($res);