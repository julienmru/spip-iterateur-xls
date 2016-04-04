<?php

function inc_xlsx_to_array_dist($data, $options = []) {

	if ($data) {

		$file = _DIR_CACHE.uniqid('xls');

		file_put_contents($file, $data);
		unset($data);

		include_spip('lib/spreadsheet-reader/SpreadsheetReader');
		$reader = new SpreadsheetReader($file, 'dummy.xlsx', 'application/xlsx');

		$datas = iterateur_xls_convert($reader);

		unlink($file);

		return $datas;

	}

}