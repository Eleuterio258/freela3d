<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificaoChat extends Model
{
    use HasFactory;
    //table name
    protected $table = 'notificacao_chat';



    //timestamps
    public $timestamps = true;





    protected $fillable = [
        'id',
        'create_on',
        'messagefrom',
        'messageto',
        'nicknamefrom',
        'nickto',
        'qtd',
        'readed',
        'toid',
        'ultima_mensagem',
        'update_on',
        'from_id',
        'to_id',
    ];
}
