<?php

declare(strict_types=1);

use PhpOffice\PhpSpreadsheet\IOFactory;
use Sample\MyFilter;

require_once __DIR__ . '/../vendor/autoload.php';

$file = __DIR__ . '/sample.xlsx';

$reader = IOFactory::createReaderForFile($file);

$reader->setReadFilter(new MyFilter());

$spreadsheet = $reader->load($file);

foreach ($spreadsheet->getAllSheets() as $sheet) {
  var_dump($sheet->toArray(null, true, true, true));
}
