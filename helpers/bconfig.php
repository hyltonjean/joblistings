<?php

/**
 * Brand config
 *
 * @return any|$default
 */
function bconfig($key, $default = null) {
	static $BCONFIG = [];

	if (empty($BCONFIG)) {
		foreach (glob(base_path('config/' . env('BRAND')) . '/*.php') as $filename)
			$BCONFIG[basename($filename, '.php')] = require_once($filename);
	}

	return array_get($BCONFIG, $key) ?? $default;
}
