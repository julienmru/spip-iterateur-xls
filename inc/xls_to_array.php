<?php

function inc_xls_to_array_dist($data, $options = []) {

	if ($data) {

		$file = 'tmp/cache/'.uniqid('xls');

		file_put_contents($file, $data);
		unset($data);

		include_spip('lib/spreadsheet-reader/php-excel-reader/excel_reader2');
		include_spip('lib/spreadsheet-reader/SpreadsheetReader');
		$reader = new SpreadsheetReader($file, 'dummy.xls', 'application/vnd.ms-excel');

		$datas = iterateur_xls_convert($reader);

		unlink($file);

		return $datas;

	}

}