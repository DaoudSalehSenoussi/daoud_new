<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;


class ExcelDownloadController extends Controller
{
    public function userExportView()
    {
        return view('users.upload');
    }

    public function userExport()
    {
        Excel::Export(new UserEmport, request()->file('file'));

        return back();
    }
}