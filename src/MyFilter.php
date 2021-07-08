<?php

declare(strict_types=1);

namespace Sample;

use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class MyFilter implements IReadFilter
{
  public function readCell($column, $row, $worksheetName = '')
  {
    if ($row === 3) {
      return true;
    }

    return false;
  }
}
