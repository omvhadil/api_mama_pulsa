<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'no_hp',
        'nominal',
        'status',
        'catatan'
    ];

    public function providers()
    {
        return $this->belongsTo(Provider::class, "provider_id");
    }
}