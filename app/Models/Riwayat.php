<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'tipe', 'tgl_mulai', 'tgl_akhir', 'info1', 'info2', 'isi'];

    // Mengganti Nilai Tanggal (Atur Juga Config app.php)
    protected $appends = ['tgl_mulai_indo', 'tgl_akhir_indo']; //Sesuai urutan

    public function getTglMulaiIndoAttribute(){ // 1 (Mulai)
        return Carbon::parse($this->attributes['tgl_mulai'])->translatedFormat('d F Y'); // d F Y
    }
    
    public function getTglAkhirIndoAttribute(){ // 2 (Mulai)
        if ($this->attributes['tgl_akhir']) {
            return Carbon::parse($this->attributes['tgl_akhir'])->translatedFormat('d F Y'); // d F Y 
        } else {
            return 'Present';
        }
    }
}
