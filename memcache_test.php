<?php
$mc = new Memcache();
$mc->connect('127.0.0.1', 11211) or die('no connect');
$mc->set('ping', 'pong', 0, 60);
echo $mc->get('ping');
