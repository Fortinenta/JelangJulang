<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\jelangjulangModel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Redirect;
use Illuminate\Routing\Redirector;

class jelangjulangController extends Controller
{
  public function home()
  {
    return view('home');
  }

  //check, menampilkan tiket yang tersedia
  public function fisrt()
  {
    $model = new jelangjulangModel();
    $senin = $model->sesi('senin');
    $selasa = $model->sesi('selasa');
    $rabu = $model->sesi('rabu');
    $kamis = $model->sesi('kamis');
    $jumat = $model->sesi('jumat');
    $sabtu = $model->sesi('sabtu');
    return view('sesi')
      ->with('senin', $senin)
      ->with('selasa', $selasa)
      ->with('rabu', $rabu)
      ->with('kamis', $kamis)
      ->with('jumat', $jumat)
      ->with('sabtu', $sabtu);
  }

  //check, memilih tiket
  public function order($id, $total)
  {
    $model = new jelangjulangModel();
    $sesi = $model->get_sesi($id);
    session(['id' => $id]);
    session(['total' => $total]);
    return view('order')
      ->with('sesi', $sesi);
  }

  //check, memesan tiket
  public function input(Request $req)
  {
    $req->validate([
      'nama' => 'required',
      'email' => 'required|email',
      'nomor' => 'required | min:11',
      'bukti' => 'required | mimes:jpg,jpeg,png'
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

  //login untuk update data diri
  public function login(Request $req)
  {
    $req->validate([
      'id' => 'required',
      'password' => 'required'
    ]);
    $model = new jelangjulangModel();
    $no = (int)$req->id;
    $nomor = ($no - 20210320);
    $pass = $req->password;
    //login
    $login = $model->login($nomor, $pass);
    $element = $model->get_element($nomor, $pass);
    if (!$login) {
      //login gagal
      session()->flash('msg', 'Wrong Number or Password');
      return redirect()->back();
    }
    //login berhasil
    session(['no_pendaftaran' => $nomor]);
    //belom update
    if ($element) {
      return redirect()->route('tiket');
      //sudah update
    } else {
      return redirect()->route('update');
    }
  }

  //memanggil halaman update data diri
  public function update()
  {
    $nopendaftaran = session()->get('no_pendaftaran');
    $model = new jelangjulangModel();
    $login = $model->get_desk($nopendaftaran);
    return view('update')
      ->with('user', $login);
  }

  //check, update data diri
  public function updatedatadiri(Request $req)
  {
    $req->validate([
      'pekerjaan' => 'required',
      'usia' => 'required',
      'jeniskelamin' => 'required',
      'pendidikan' => 'required',
      'komunitas' => 'required',
      'datadiri' => 'required | mimes:jpg,jpeg,png'
    ]);
    $pekerjaan = $req->pekerjaan;
    $usia = $req->usia;
    $jeniskelammin = $req->jeniskelamin;
    $pendidikan = $req->pendidikan;
    $komunitas = $req->komunitas;
    $nopendaftaran = session()->get('no_pendaftaran');
    $datadiri = NULL;
    if ($req->hasFile('datadiri')) {
      $file = $req->file('datadiri');
      $path = Str::random(10);
      $datadiri = $path . "." . $file->getClientOriginalExtension();
      $destinationpath = public_path('/images/datadiri');
      $file->move($destinationpath, $datadiri);
    }
    //memanggil model untuk update ke db
    $model = new jelangjulangModel();
    $model->updatedatadiri($pekerjaan, $usia, $jeniskelammin, $pendidikan, $komunitas, $nopendaftaran, $datadiri);
    return redirect()->route('tiket');
  }

  //generate QRcode untuk tiket pelanggan
  public function qrcode()
  {
    $no_pendaftaran = session()->get('no_pendaftaran');
    $model = new jelangjulangModel();
    $sesi = $model->get_sesi_login($no_pendaftaran);
    // return view buat nampilin tiket QR code
    $qrcode = QrCode::generate('jelangjulang.com/absen/' . $no_pendaftaran);
    session(['qr' => $qrcode]);
    return view('tiket')
      ->with('sesi', $sesi);
  }

  //login admin untuk mengecek password serta tiket
  public function admin(Request $req)
  {
    $req->validate([
      'id' => 'required',
      'password' => 'required'
    ]);
    $no = (int)$req->id;
    $id = ($no - 20210320);
    $password = $req->password;
    $admin = 'marvin0110';
    if ($password == $admin) {
      session(['id_pendaftaran' => $id]);
      return redirect()->route('pelanggan');
    } else {
      session()->flash('msg', 'Wrong Number or Password');
      return redirect()->back();
    }
  }

  // menampilkan info pelanggan setelah login untuk update data diri
  public function pelanggan()
  {
    $id = session()->get('id_pendaftaran');
    $model = new jelangjulangModel();
    $login = $model->get_desk($id);
    return view('pelanggan')
      ->with('user', $login);
  }

  //check in pelanggan
  public function checkin($id)
  {
    $model = new jelangjulangModel();
    $pelanggan = $model->check_in($id);
    return redirect()->route('info', ['id' => $id]);
  }

  //check out pelanggan
  public function checkout($id)
  {
    $model = new jelangjulangModel();
    $pelanggan = $model->check_out($id);
    return redirect()->route('info', ['id' => $id]);
  }

  //menampilkan info pelanggan
  public function info($id)
  {
    $model = new jelangjulangModel();
    $pelanggan = $model->get_desk($id);
    return view('info')->with('user', $pelanggan);
  }
}
