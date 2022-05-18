<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Exports\DriversExport;
use App\Imports\DriversImport;

class ExcelController extends Controller
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('excel.index');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportExcel($type)
    {
        return \Excel::download(new DriversExport, 'drivers.'.$type);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExcel(Request $request)
    {
        \Excel::import(new DriversImport,$request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return redirect('driver/driverslist')->with('Your file is imported successfully in database.');
    }
}
