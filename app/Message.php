<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        "reg_num",
        "msg_title",
        "msg_body",
        "msg_state",
        "msg_type"
    ];
}
