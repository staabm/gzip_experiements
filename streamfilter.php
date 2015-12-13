<?php

$options['http']['header'] = array('Accept-Encoding: gzip');
$ctx = stream_context_create($options);

$url = 'http://localhost/dev/fileget_zlib/packages.json';
$fp = fopen($url, 'r', null, $ctx);
stream_filter_append($fp, 'zlib.inflate');
echo stream_get_contents($fp);