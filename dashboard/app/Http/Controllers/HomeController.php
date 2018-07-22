<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //Used to export an excel
    public function exportExcel() {
        return Excel::download(null, 'invoices.xlsx');

		/*return Excel::download('itsolutionstuff_example',  function ($writer) {
            $writer->sheet('Exported data', function ($sheet) {
                $sheet->fromModel(App\Models\User::get());
            });
        })->download('xlsx');*/
    }

    public function exportXML(){
        $xml = null;
        header('Contect-Type: application/xml; charset="utf-8"');~
        header('Content-Lenght:'.strlen($xml));
    }
}
