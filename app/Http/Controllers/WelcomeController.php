<?php

namespace App\Http\Controllers;

use App\Models\Present;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $presents = Present::whereTanggal(date('Y-m-d'))->orderBy('jam_masuk')->paginate(6);
        $rank = $presents->firstItem();
        return view('tes', compact('presents','rank'));
}
}
