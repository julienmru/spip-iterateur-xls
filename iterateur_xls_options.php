<?php

function iterateur_xls_convert(&$reader) {
	include_spip('inc/charsets');

	$datas = [];
	
	$header = FALSE;
	foreach ($reader as $row)
	{
		if ($header === FALSE) {
			$header = [];
			foreach($row as $k => $v) {
				if (!is_utf8($v)) $v = utf8_encode($v);
				$v = translitteration($v);
				$v = strtolower($v);
				$v = preg_replace('/[^a-z]/', '_', $v);
				$v = preg_replace('/__+/', '_', $v);
				$v = trim($v, '_');
				$header[$v] = $k;
			}
		} else {
			$data = [];
			foreach($header as $k => $v) {
				if (!is_utf8($v)) $v = utf8_encode($v);
				$data[$k] = $row[$v];
			}
			$datas[] = $data;
		}
	}

	return $datas;
}