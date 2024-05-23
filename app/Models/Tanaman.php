<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Perbanyak;
use App\Models\Petak;
use App\Models\Bagian;
use App\Models\Kebun;

class Tanaman extends Model
{
    use HasFactory;
    protected $table = 'table_tanaman';
    protected $primary = 'ID';
    public $timestamps = false;

    public function perbanyak(): BelongsTo
    {
        return $this->belongsTo(Perbanyak::class,'id_perbanyak','ID');
    }

    public function petak(): BelongsTo
    {
        return $this->belongsTo(Petak::class,'id_petak','ID');
    }

    public function bagian(): BelongsTo
    {
        return $this->belongsTo(Bagian::class,'id_bagian_yg_digunakan','ID');
    }

    public function kebun(): BelongsTo
    {
        return $this->belongsTo(Bagian::class,'id_kebun','ID');
    }
}
