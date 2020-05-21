<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        "source_ref",
        "payment_method",
        "amount",
        "reg_num"
    ];
}
