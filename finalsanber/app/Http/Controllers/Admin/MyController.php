<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Exports\AuthorsExport;
use App\Imports\AuthorsImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    public function importExportView() {
        return view('import');
    }

    public function export() {
        return Excel::download(new AuthorsExport, 'authors.xlsx');
    }

    public function import() {
        Excel::import(new AuthorsImport,request()->file('file'));
        return back();
    }

    public function exportUsers() {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
