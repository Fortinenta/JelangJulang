<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jelangjulangModel extends Model
{
    use HasFactory;

//check
    public function sesi($hari)
    {
        $query = DB::select("SELECT * FROM sesi WHERE hari = '$hari'");
        return $query;
    }

//check
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

//check
    public function get_sesi($id_sesi){
      $query = DB::select("SELECT * FROM sesi WHERE no_sesi = '$id_sesi'");
      return $query;
    }


//check
    public function get_pelanggan($nama, $password){
      $query = DB::select("SELECT * FROM pelanggan WHERE nama = '$nama' AND password = '$password'");
      return $query;
    }

//check
    public function update_total_tiket($id,$total){
      $num = $total-1;
      DB::table('sesi')
            ->where('no_sesi', $id)
            ->update(['total' => $num]);
    }


//check
    public function login($no, $password){
      $query = DB::select("SELECT * FROM pelanggan WHERE no_pendaftaran = '$no' AND password = '$password'");

      if ($query == null) {
        return false;
      }
      return $query;
    }

    public function get_sesi_login($no){
      $query = DB::select("SELECT status, hari, jam FROM sesi join pelanggan on sesi = no_sesi WHERE no_pendaftaran = '$no'");
      return $query;
    }

    public function get_element($no,$password){
      $query = DB::select("SELECT jeniskelamin FROM pelanggan WHERE no_pendaftaran = '$no' AND password = '$password'");
      foreach ($query as $qu) {
        if ($qu->jeniskelamin == null) {
          return false;
        }
        return true;
      }

    }

//check
    public function updatedatadiri($pekerjaan, $usia, $jeniskelamin, $pendidikan, $komunitas, $no_pendaftaran)
    {
        DB::table('pelanggan')
            ->where('no_pendaftaran', $no_pendaftaran)
            ->update(
                [
                    'pekerjaan' => $pekerjaan,
                    'usia' => $usia,
                    'jeniskelamin' => $jeniskelamin,
                    'pendidikan' => $pendidikan,
                    'komunitas' => $komunitas
                ]
            );
    }

    public function get_desk($no){
      $query = DB::select("SELECT * FROM pelanggan WHERE no_pendaftaran = '$no'");
      return $query;

    }
}
