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

  public function order($id, $total)
  {
    $model = new jelangjulangModel();
    $sesi = $model->get_sesi($id);
    session(['id' => $id]);
    session(['total' => $total]);
    return view('order')
      ->with('sesi', $sesi);
  }

  public function input(Request $req)
  {
    $req->validate([
      'nama' => 'required',
      'email' => 'required',
      'nomor' => 'required | min:11',
      'bukti' => 'required'
    ]);
    $model = new jelangjulangModel();
    $sesi = session()->get('id');
    $total = session()->get('total');
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
    //return ke view rincian_order dengan ngirim sesi dan data order
    $model = new jelangjulangModel();
    $model->update_total_tiket($sesi, $total);
    $sesi = $model->get_sesi($sesi);
    $user = $model->get_pelanggan($nama, $password);
    return view('rincian_order')
      ->with('sesi', $sesi)
      ->with('user', $user);
  }

  public function updatedatadiri(Request $req)
  {
    $model = new jelangjulangModel();
    $pekerjaan = $req->pekerjaan;
    $usia = $req->usia;
    $jeniskelammin = $req->jeniskelamin;
    $pendidikan = $req->pendidikan;
    $komunitas = $req->komunitas;
    $nopendaftaran = $req->nopendaftaran;
    //memanggil model untuk update ke db
    $model->updatedatadiri($pekerjaan, $usia, $jeniskelammin, $pendidikan, $komunitas, $nopendaftaran);
    // return view buat nampilin tiket QR code
    $qrcode = QrCode::generate('.../absen/' . $nopendaftaran);
    session(['qr' => $qrcode]);
    return view('tiket');
  }
  public function absen()
  {
  }
}
