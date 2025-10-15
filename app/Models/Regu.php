<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_regu',
    ];

    // Kalau nama tabel di DB "regu" (bukan "regus"), tambahkan ini:
    // protected $table = 'regu';

    public function profiles()
    {
        return $this->hasMany(Profile::class, 'regus_id');
    }

    
}
