<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'foto_profil',
        'alamat',
        // tambahkan kolom-kolom lain yang diperlukan
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
