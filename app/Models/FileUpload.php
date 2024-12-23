<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $table = 'peta_informasi';
    protected $primaryKey = 'informasi_id';

    protected $fillable = [
        'nama_pembuatan', 'tanggal_dibuat', 'file'
    ];

}
