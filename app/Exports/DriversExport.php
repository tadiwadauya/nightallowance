<?php

namespace App\Exports;

use App\Models\Driver;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class DriversExport implements FromCollection, WithHeadings, WithMapping
{/**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Driver::all();
    }

    public function headings(): array
    {
        return [
            'pay_number',
            'first_name',
            'last_name',
            'status',
        ];
    }

    public function map($driver): array
    {
        return [
            $driver->pay_number,
            $driver->first_name,
            $driver->last_name,
            $driver->status,
        ];
    }
}
