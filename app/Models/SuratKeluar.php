<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluars';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function tandatangan()
    {
        return $this->belongsTo(NamaTandatangan::class, 'id_tandatangan');
    }
    public function kepalaSurat()
    {
        return $this->belongsTo(kepalaSurat::class, 'id_kop');
    }
    protected $fillable = [
        'id_kop',
        'tanggal',
        'no_surat',
        'perihal',
        'tujuan',
        'isi_surat',
        'id_tandatangan',
        'id_user',
    ];
}
