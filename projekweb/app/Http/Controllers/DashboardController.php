<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Peserta;


class DashboardController extends Controller {

    public function index() {
        
        $peserta= Peserta::count();
        $kriteria= Kriteria::count();
        $alternatif= Alternatif::count();
        

        return view('main',[
            'title' => 'Dashboard'
        ], compact('peserta','kriteria','alternatif'))
        ;

        

        
    }
    
}
