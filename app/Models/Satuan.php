<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_satuan',
    ];

    // Kalau nama tabel di DB "satuan" (bukan "satuans"), tambahkan ini:
    // protected $table = 'satuan';

    public function batalyons()
    {
        return $this->hasMany(Batalyon::class);
    }
}
