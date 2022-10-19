<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skshhk extends Model
{
    use HasFactory;
    protected $table = 'tbl_skshhk';
    protected $guarded = [];

    public function petugas()
    {
        return $this->hasOne(Ganis::class, 'id', 'id_ganis');
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class, 'id', 'id_vendor');
    }

    public function hh()
    {
        return $this->hasOne(HasilHutan::class, 'id', 'id_hh');
    }
}
