<?php

namespace App\Exports;

use App\Models\Present;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Fromview;

class UsersPresentExportMonth implements Fromview
{
    private $bulan;

    public function __construct($bulan) {
        $this->bulan = $bulan;
    }
    
   
    public function view(): view
    {
        $data = explode('-',$this->bulan);
        $presents = Present::whereMonth('tanggal',$data[1])->whereYear('tanggal',$data[0])->orderBy('tanggal','desc')->get();
        $kehadiran = Present::whereMonth('tanggal',$data[1])->whereYear('tanggal',$data[0])->whereKeterangan('telat')->get();
        return view('presents.excel-user-month', compact('presents'));
    }
}
