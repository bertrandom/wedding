#!/usr/bin/php
<?php

	$endpoint = 'http://openexchangerates.org/api/latest.json?app_id=082d7005af824ca98c8b28167c7e7dac';
	$latestJSON = file_get_contents($endpoint);

	if (!is_null(json_decode($latestJSON))) {
		file_put_contents(dirname(__FILE__) . '/../data/rates.json', $latestJSON, LOCK_EX);
	}

?>