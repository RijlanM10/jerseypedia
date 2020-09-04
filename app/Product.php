<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function liga() {
        return $this->belongsTo(Liga::class, 'ligas_id');
    }

    public function pesanan_details() {
        return $this->hasMany(PesananDetail::class, 'pesanans_id');
    }
}
