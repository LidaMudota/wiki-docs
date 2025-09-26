<?php
$m = new Memcache();
$m->connect('127.0.0.1', 11211);
header('Content-Type: text/plain; charset=utf-8');
print_r($m->getStats());
