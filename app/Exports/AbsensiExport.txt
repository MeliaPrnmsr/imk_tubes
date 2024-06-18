<?php

namespace App\Exports;

use Excel;

class AbsensiExport
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function export()
    {
        \Excel::create('Absensi', function($excel) {
            $excel->sheet('Sheet1', function($sheet) {
                $sheet->row(1, [
                    'ID', 'Nama Murid', 'Sabuk', 'Status Absensi', 'Dojo', 'Tanggal'
                ]);

                $sheet->rows($this->data);
            });
        })->export('xlsx');
    }
}

