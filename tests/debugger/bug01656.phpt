--TEST--
Test for bug #1656: remote_connect_back alters header if multiple values are present
--ENV--
I_LIKE_COOKIES=127.0.0.1, 127.0.0.2
XDEBUG_CONFIG="idekey=foobar"
--INI--
xdebug.mode=debug
xdebug.remote_addr_header=I_LIKE_COOKIES
xdebug.remote_autostart=1
xdebug.remote_connect_back=1
xdebug.remote_port=9999
--FILE--
<?php
var_dump( $_SERVER['I_LIKE_COOKIES'] );
?>
--EXPECTF--
Xdebug: [Step Debug] %sTried: 127.0.0.1:9999 (from I_LIKE_COOKIES HTTP header), localhost:9999 (fallback through xdebug.remote_host/xdebug.remote_port) :-(
string(20) "127.0.0.1, 127.0.0.2"
