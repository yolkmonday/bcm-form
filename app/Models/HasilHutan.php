<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilHutan extends Model
{
    use HasFactory;
    protected $table = 'tbl_hasil_hutan';
    protected $guarded = [];
}
