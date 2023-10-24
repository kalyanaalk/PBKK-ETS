<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'results';

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'user_id',
        'nama',
        'notelp',
        'berat',
        'layanan',
        'kondisi',
        'bukti',
    ];
}
