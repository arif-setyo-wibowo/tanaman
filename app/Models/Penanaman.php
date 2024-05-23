<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penanaman extends Model
{
    use HasFactory;
    protected $table = 'penanaman';
    protected $primary = 'ID';
    public $timestamps = false;
}
