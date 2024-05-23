<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petak extends Model
{
    use HasFactory;
    protected $table = 'petak';
    protected $primary = 'ID';
    public $timestamps = false;
}
