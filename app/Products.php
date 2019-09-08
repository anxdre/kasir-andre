<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    public function transaction() {
        return $this->hasOne(Transaction::class);
    }
}
