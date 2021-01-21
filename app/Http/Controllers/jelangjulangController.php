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
  public function fisrt()
  {
    $model = new jelangjulangModel();
    $senin = $model->sesi('senin');
    $selasa = $model->sesi('selasa');
    $rabu = $model->sesi('rabu');
    $kamis = $model->sesi('kamis');
    $jumat = $model->sesi('jumat');
    $sabtu = $model->sesi('sabtu');
    // dd($senin, $selasa, $rabu, $kamis, $jumat, $sabtu);
    return view('sesi')
      ->with('senin', $senin)
      ->with('selasa', $selasa)
      ->with('rabu', $rabu)
      ->with('kamis', $kamis)
      ->with('jumat', $jumat)
      ->with('sabtu', $sabtu);
  }

  public function order($id)
  {
    session(['id' => $id]);
    return view('order');
  }

  public function input(Request $req)
  {

    $req->validate([
      'nama'=>'required',
      'email'=>'required',
      'nomor'=>'required | min:11',
      'bukti'=>'required'
    ]);

    $model = new jelangjulangModel();
    $sesi = session()->get('id');
    $nama = $req->nama;
    $email = $req->email;
    $nomor = $req->nomor;
    $status = 0;
    $password = Str::random(5);
    //buktiTF
    $bukti = NULL;
    if ($req->hasFile('bukti')) {
      $file = $req->file('bukti');
      $path = Str::random(10);
      $bukti = $path . "." . $file->getClientOriginalExtension();
      $destinationpath = public_path('/images/bukti_transfer');
      $file->move($destinationpath, $bukti);
    }
    //memanggil model untuk insert ke db
    $model->registrasi($nama, $email, $nomor, $sesi, $bukti, $status, $password);
  }

  public function update()
  {
  }
  public function absen()
  {
  }
}
