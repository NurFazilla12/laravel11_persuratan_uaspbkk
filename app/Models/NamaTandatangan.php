<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaTandatangan extends Model
{
    use HasFactory;
    protected $table = 'nama_tandatangans';

    protected $fillable = [
        'nama_tandatgn',
        'jabatan',
        'nip',
    ];
}
