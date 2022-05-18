<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DriversExport;
use App\Imports\DriversImport;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new DriversExport, 'drivers.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new DriversImport,request()->file('file'));

        return back();
    }
}
