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
        $query = DB::insert("INSERT INTO pelanggan VALUES $data");
    }
}
