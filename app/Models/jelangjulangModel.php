<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class jelangjulangModel extends Model
{
    use HasFactory;

    public function sesi($hari)
    {
        $query = DB::select("SELECT * FROM sesi WHERE hari = '$hari'");
        return $query;
    }
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

    public function get_sesi($id_sesi){
      $query = DB::select("SELECT * FROM sesi WHERE no_sesi = '$id_sesi'");
      return $query;
    }
    public function get_pelanggan($nama, $password){
      $query = DB::select("SELECT * FROM pelanggan WHERE nama = '$nama' AND password = '$password'");
      return $query;
    }

    public function update_total_tiket($id,$total){
      $num = $total-1;
      DB::table('sesi')
            ->where('no_sesi', $id)
            ->update(['total' => $num]);
    }
}
