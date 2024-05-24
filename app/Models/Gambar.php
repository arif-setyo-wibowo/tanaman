<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Tanaman;

class Gambar extends Model
{
    use HasFactory;
    protected $table = 'gambar';
    protected $primary = 'id';
    public $timestamps = false;

    public function tanaman(): BelongsTo
    {
        return $this->belongsTo(Tanaman::class,'id_tanaman','id');
    }
}
