<?php

function inc_ods_to_array_dist($data, $options = []) {

	if ($data) {

		$file = _DIR_CACHE.uniqid('xls');

		file_put_contents($file, $data);
		unset($data);

		$reader = new SpreadsheetReader($file, 'dummy.ods', 'application/vnd.oasis.opendocument.spreadsheet');

		$datas = iterateur_xls_convert($reader);

		unlink($file);

		return $datas;

	}

}