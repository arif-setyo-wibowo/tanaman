<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbanyak extends Model
{
    use HasFactory;
    protected $table = 'perbanyak';
    protected $primary = 'ID';
    public $timestamps = false;
}
