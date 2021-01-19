<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\jelangjulangModel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class jelangjulangController extends Controller
{
    //
    public function fisrt(){
      $model = new jelangjulangModel();
      $senin = $model->sesi('senin');
      $selasa = $model->sesi('selasa');
      $rabu = $model->sesi('rabu');
      $kamis = $model->sesi('kamis');
      $jumat = $model->sesi('jumat');
      $sabtu = $model->sesi('sabtu');
      // dd($senin, $selasa, $rabu, $kamis, $jumat, $sabtu);
      return view('sesi')
      ->with ('senin', $senin)
      ->with ('selasa', $selasa)
      ->with ('rabu', $rabu)
      ->with ('kamis', $kamis)
      ->with ('jumat', $jumat)
      ->with ('sabtu', $sabtu);
    }

    public function order($id){
      session(['id' => $id]);
      return view('order');
    }

    public function input(Request $req){
      $nama = $req->nama;
      $email = $req->email;
      $nomor = $req->nomor;
    }

    // public function 
}
