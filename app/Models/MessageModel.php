<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    use HasFactory;

    //table name
    protected $table = 'message_model';



    protected $fillable = [
        'message',
        'messagefrom',
        'messageto',
        'nicknamefrom',
        'nickto',
        'readed',
        'toid',
    ];

    //timestamps
    public $timestamps = true;
}
