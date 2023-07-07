<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller {

    public function index() {
        return view('datapeserta', [
            'users' => Peserta::all(), 
            'title' => 'Data peserta'
        ]);
    }
    
    public function add() {
        return view('adddatapeserta',[
            'title' => 'Tambah Data peserta'
        ]);
    }
    public function edit($id){
        
        $peserta = Peserta::where('id', $id)->first();

        return view('editdatapeserta', [
            'peserta' => $peserta,
            'title' => 'Edit Data peserta'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_peserta      = $request->input('nama_peserta');
        $jenis_kelamin       = $request->input('jenis_kelamin');
        $berat_badan   = $request->input('berat_badan');
        $tinggi_badan = $request->input('tinggi_badan');
        $stamina = $request->input('stamina');
        $event = $request->input('event');
        $kejuaraan = $request->input('kejuaraan');
        
        $peserta = Peserta::where('id', $id)->first();
        $peserta->nama_peserta    = $nama_peserta;
        $peserta->jenis_kelamin     = $jenis_kelamin;
        $peserta->berat_badan = $berat_badan;
        $peserta->tinggi_badan = $tinggi_badan;
        $peserta->stamina = $stamina;
        $peserta->event = $event;
        $peserta->kejuaraan = $kejuaraan;

        $peserta->save();

        return redirect()->to('/peserta');
    }


    public function dashboard(){
        $peserta= Peserta::count();

        return view('main', compact('peserta'));

    }

    public function store(Request $request) {
        $nama_peserta      = $request->input('nama_peserta');
        $jenis_kelamin       = $request->input('jenis_kelamin');
        $berat_badan   = $request->input('berat_badan');
        $tinggi_badan = $request->input('tinggi_badan');
        $stamina = $request->input('stamina');
        $event = $request->input('event');
        $kejuaraan = $request->input('kejuaraan');

        $peserta           = new Peserta;
        $peserta->nama_peserta    = $nama_peserta;
        $peserta->jenis_kelamin     = $jenis_kelamin;
        $peserta->berat_badan = $berat_badan;
        $peserta->tinggi_badan = $tinggi_badan;
        $peserta->stamina = $stamina;
        $peserta->event = $event;
        $peserta->kejuaraan = $kejuaraan;

        $peserta->save();

        return redirect()->to('/peserta');
    }
    public function delete($id) {
        $peserta = Peserta::where('id', $id)->first();
        $peserta->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $peserta = Peserta::where('nama','berat_badan','tinggi_badan','stamina','event','kejuaraan','%',$request->search.'%')->get();
        }else{
            $peserta = Peserta::all();
        }
        return view('datapeserta',['Peserta' => $peserta]);
    }
}
