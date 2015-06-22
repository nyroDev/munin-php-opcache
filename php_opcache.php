<?php

$output = array(
	'mem_used' => 0,
	'mem_free' => 0,
	'mem_wasted' => 0,
	'hitrate' => 0,
	'hits' => 0,
	'misses' => 0,
	'used_keys' => 0,
	'free_keys' => 0,
);

if (function_exists('opcache_get_status')) {
	$data = opcache_get_status(false);
	$output = array(
		'mem_used' => $data['memory_usage']['used_memory'],
		'mem_free' => $data['memory_usage']['free_memory'],
		'mem_wasted' => $data['memory_usage']['wasted_memory'],
		'hitrate' => round($data['opcache_statistics']['opcache_hit_rate'], 2),
		'hits' => $data['opcache_statistics']['hits'],
		'misses' => $data['opcache_statistics']['misses'],
		'used_keys' => $data['opcache_statistics']['num_cached_keys'],
		'free_keys' => $data['opcache_statistics']['max_cached_keys'] - $data['opcache_statistics']['num_cached_keys'],
	);
}

header('Content-Type: text/plain');
foreach ($output as $key => $value) {
        echo $key.'.value '.$value, "\n";
}
