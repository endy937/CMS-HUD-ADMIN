<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'phone_number',
        'date_of_birth',
        'avatar_url',
        'satuan_id',
        'batalyon_id',
        'ranks_id',
        'regus_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }

    public function batalyon()
    {
        return $this->belongsTo(Batalyon::class);
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class, 'ranks_id');
    }

    public function regu()
    {
        return $this->belongsTo(Regu::class, 'regus_id');
    }
}
