<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batalyon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_batalyon',
        'satuan_id',
    ];

    // Kalau nama tabel di DB "batalyon" (bukan "batalyons"), tambahkan ini:
    // protected $table = 'batalyon';

    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }
}
