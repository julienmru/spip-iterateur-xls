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
				$header['col_'.iterateur_xls_num2alpha($k)] = $k;
			}

		} else {
			$data = [];
			foreach($header as $k => $v) {
				if (!is_utf8($row[$v])) $row[$v] = utf8_encode($row[$v]);
				$data[$k] = $row[$v];
			}
			$datas[] = $data;
		}
	}

	return $datas;
}

// Source : http://stackoverflow.com/questions/3302857/algorithm-to-get-the-excel-like-column-name-of-a-number
function iterateur_xls_num2alpha($n)
{
    for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
        $r = chr($n%26 + 0x61) . $r;
    return $r;
}
