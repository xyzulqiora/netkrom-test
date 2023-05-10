<?php

namespace App\Models;

use App\Models\Biodata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'ticket';

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'nomor_id', 'id');
    }
}
