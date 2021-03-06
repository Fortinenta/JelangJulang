<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jelangjulangModel extends Model
{
  use HasFactory;

  //check, query DB untuk mencari tiket dengan hari tertentu
  public function sesi($hari)
  {
    $query = DB::select("SELECT * FROM sesi WHERE hari like '%$hari%'");
    return $query;
  }

  //check, query DB untuk registrasi
  public function registrasi($nama, $email, $nomor, $sesi, $bukti, $status, $password)
  {
    $data = array(
      'no_pendaftaran' => NULL,
      'nama' => $nama,
      'email' => $email,
      'nomor' => $nomor,
      'pekerjaan' => NULL,
      'usia' => NULL,
      'jeniskelamin' => NULL,
      'pendidikan' => NULL,
      'komunitas' => NULL,
      'sesi' => $sesi,
      'statuskehadiran' => $status,
      'bukti' => $bukti,
      'password' => $password
    );
    DB::table('pelanggan')->insert($data);;
  }

  //check, query DB untuk memanggil sesi tiket
  public function get_sesi($id_sesi)
  {
    $query = DB::select("SELECT * FROM sesi WHERE no_sesi = '$id_sesi'");
    return $query;
  }

  //check, memanggil data pelanggan saat login
  public function get_pelanggan($nama, $password)
  {
    $query = DB::select("SELECT * FROM pelanggan WHERE nama = '$nama' AND password = '$password'");
    return $query;
  }


  //check total tiket
  public function total($id)
  {
    $query = DB::select("SELECT * FROM sesi WHERE no_sesi = '$id'");
    foreach ($query as $qu) {
      return $qu->total;
    }
  }
  //check, merubah total tiket setelah registrasi
  public function update_total_tiket($id, $total)
  {
    $num = $total - 1;
    DB::table('sesi')
      ->where('no_sesi', $id)
      ->update(['total' => $num]);
  }

  //check, memanggil data saat pelanggan sukses login
  public function login($no, $password)
  {
    $query = DB::select("SELECT * FROM pelanggan WHERE no_pendaftaran = '$no' AND password = '$password'");

    if ($query == null) {
      return false;
    }
    return $query;
  }

  //memanggil sesi login
  public function get_sesi_login($no)
  {
    $query = DB::select("SELECT status, hari, jam FROM sesi join pelanggan on sesi = no_sesi WHERE no_pendaftaran = '$no'");
    return $query;
  }

  // memanggil tuple untuk mengecek data diri sudah di update atau belum 
  public function get_element($no, $password)
  {
    $query = DB::select("SELECT jeniskelamin FROM pelanggan WHERE no_pendaftaran = '$no' AND password = '$password'");
    foreach ($query as $qu) {
      if ($qu->jeniskelamin == null) {
        return false;
      }
      return true;
    }
  }

  //check, mengupdate data diri
  public function updatedatadiri($pekerjaan, $usia, $jeniskelamin, $pendidikan, $komunitas, $no_pendaftaran, $datadiri)
  {
    DB::table('pelanggan')
      ->where('no_pendaftaran', $no_pendaftaran)
      ->update(
        [
          'pekerjaan' => $pekerjaan,
          'usia' => $usia,
          'jeniskelamin' => $jeniskelamin,
          'pendidikan' => $pendidikan,
          'komunitas' => $komunitas,
          'datadiri' => $datadiri
        ]
      );
  }

  //memanggil data diri pelanggan dengan no pendaftaran tertentu
  public function get_desk($no)
  {
    $query = DB::select("SELECT * FROM pelanggan WHERE no_pendaftaran = '$no'");
    return $query;
  }

  //check in user
  public function check_in($no_pendaftaran)
  {
    $query = DB::table('pelanggan')
      ->where('no_pendaftaran', $no_pendaftaran)
      ->update(['statuskehadiran' => 'Check In']);
  }

  //check out user
  public function check_out($no_pendaftaran)
  {
    $query = DB::table('pelanggan')
      ->where('no_pendaftaran', $no_pendaftaran)
      ->update(['statuskehadiran' => 'Check Out']);
  }

  //get deskripsi pengrajin
  public function get_pengrajin($id)
  {
    $query = DB::select("SELECT * FROM pengrajin WHERE id_pengrajin = '$id'");
    return $query;
  }

  //get katalog image
  public function get_katalog($id, $karya)
  {
    $query = DB::select("SELECT * FROM karya WHERE id_pengrajin = '$id' AND foto_ke = '$karya'");
    return $query;
  }
}
