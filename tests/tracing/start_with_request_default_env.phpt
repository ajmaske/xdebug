--TEST--
Starting Tracing: default, environment
--INI--
xdebug.mode=trace
xdebug.start_with_request=default
xdebug.collect_params=0
xdebug.collect_return=0
xdebug.collect_assignments=0
--ENV--
XDEBUG_TRACE=anything
--FILE--
<?php
$fileName = xdebug_get_tracefile_name();

xdebug_stop_trace();

echo file_get_contents($fileName);
unlink($fileName);
?>
--EXPECTF--
TRACE START [%d-%d-%d %d:%d:%d]
%w%f %w%d   -> {main}() %stests/tracing/start_with_request_default_env.php:0
%w%f %w%d     -> xdebug_get_tracefile_name() %stests/tracing/start_with_request_default_env.php:2
%w%f %w%d     -> xdebug_stop_trace() %stests/tracing/start_with_request_default_env.php:4
%w%f %w%d
TRACE END   [%d-%d-%d %d:%d:%d]
