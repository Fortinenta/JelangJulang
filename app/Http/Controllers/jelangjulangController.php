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
  public function home(){
    return view('home');
  }
  //check
  public function fisrt(){
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


//check
  public function order($id,$total){
    $model = new jelangjulangModel();
    $sesi = $model->get_sesi($id);
    session(['id' => $id]);
    session(['total'=>$total]);
    return view('order')
      ->with('sesi',$sesi);
  }


//check
  public function input(Request $req){

    $req->validate([
      'nama'=>'required',
      'email'=>'required|email',
      'nomor'=>'required | min:11',
      'bukti'=>'required'
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
      // dd($bukti);
      $destinationpath = public_path('/images/bukti_transfer');
      $file->move($destinationpath, $bukti);
    }
    //memanggil model untuk insert ke db
    $model->registrasi($nama, $email, $nomor, $sesi, $bukti, $status, $password);

    //return ke view rincian_order dengan ngirim sesi dan data order
    $model = new jelangjulangModel();
    $model->update_total_tiket($sesi,$total);
    $sesi = $model->get_sesi($sesi);
    $user = $model->get_pelanggan($nama,$password);
    return view('rincian_order')
      ->with('sesi',$sesi)
      ->with('user',$user);
  }




  public function login(Request $req){
      $req->validate([
        'id'=>'required',
        'password'=>'required'
      ]);

      $model = new jelangjulangModel();
      $no = (int)$req->id;
      $nomor = ($no - 20210320);
      $pass = $req->password;
      //login
      $login = $model->login($nomor,$pass);
      $element = $model->get_element($nomor,$pass);
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



  public function update(){
    $nopendaftaran = session()->get('no_pendaftaran');
    $model = new jelangjulangModel();
    $login = $model->get_desk($nopendaftaran);
    return view('update')
    ->with('user',$login);
  }
  //check
    public function updatedatadiri(Request $req)
    {
      // dd($req->komunitas);
      $req->validate([
        'pekerjaan'=>'required',
        'usia'=>'required',
        'jeniskelamin'=>'required',
        'pendidikan'=>'required',
        'komunitas'=>'required'
      ]);
      $pekerjaan = $req->pekerjaan;
      // dd($pekerjaan);
      $usia = $req->usia;
      $jeniskelammin = $req->jeniskelamin;
      $pendidikan = $req->pendidikan;
      $komunitas = $req->komunitas;
      $nopendaftaran = session()->get('no_pendaftaran');
      // dd($nopendaftaran);
      //memanggil model untuk update ke db
      $model = new jelangjulangModel();
      $model->updatedatadiri($pekerjaan, $usia, $jeniskelammin, $pendidikan, $komunitas, $nopendaftaran);
      return redirect()->route('tiket');
    }


  public function qrcode(){
    $no_pendaftaran = session()->get('no_pendaftaran');
    $model = new jelangjulangModel();
    $sesi = $model->get_sesi_login($no_pendaftaran);
    // return view buat nampilin tiket QR code
    $qrcode = QrCode::generate('jelangjulang.com/absen/' . $no_pendaftaran);
    session(['qr' => $qrcode]);
    return view('tiket')
    ->with('sesi',$sesi);
  }


  public function admin (Request $req){
    $req->validate([
      'id'=>'required',
      'password'=>'required'
    ]);
    $no = (int)$req->id;
    $id = ($no - 20210320);
    $password = $req->password;
    $admin = 'marvin0110';
    if ($password == $admin){
      session(['id_pendaftaran' => $id]);
      return redirect()->route('pelanggan');
    }else{
      session()->flash('msg', 'Wrong Number or Password');
        return redirect()->back();
    }
  }

  public function pelanggan (){
    $id = session()->get('id_pendaftaran');
    $model = new jelangjulangModel();
    $login = $model->get_desk($id);
    return view('pelanggan')
    ->with('user',$login);
  }
}
