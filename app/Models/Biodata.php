<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $table = 'biodata';
    public function ticket()
    {
        return $this->hasOne(Tiket::class, 'nomor_id', 'id');
    }
}
