<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeriksa extends Model
{
    use HasFactory;


    protected $table = 'detail_periksa';

    protected $fillable = [
        'id_periksa',
        'id_tindakan',
        'harga',
    ];

    public function tindakan()
    {
        return $this->belongsTo(Tindakan::class, 'id_tindakan');
    }

    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }
}
