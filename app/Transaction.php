<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public function products() {
        return $this->belongsTo(Products::class);
    }
}
