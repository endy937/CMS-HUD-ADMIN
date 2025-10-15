<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pangkat',
    ];

    // Kalau nama tabel di DB "rank" (bukan "ranks"), tambahkan ini:
    // protected $table = 'rank';

    public function profiles()
    {
        return $this->hasMany(Profile::class, 'ranks_id');
    }
}


