<?php

namespace App\Exports;

use App\Models\Present;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Fromview;

class PegawaiPresentExportMonth implements Fromview
{
    private $bulan;

    public function __construct($bulan) {
       
        $this->bulan = $bulan;
    }
    
   
    public function view(): view
    {
        $data = explode('-',$this->bulan);
        $presents = Present::whereUserId(auth()->user()->id)->whereMonth('tanggal',date('m'))->whereYear('tanggal',date('Y'))->orderBy('tanggal','desc')->get();
        $kehadiran = Present::whereUserId(auth()->user()->id)->whereMonth('tanggal',date('m'))->whereYear('tanggal',date('Y'))->whereKeterangan('telat')->get();
        return view('presents.excel-pegawai-month', compact('presents'));

    }
}
