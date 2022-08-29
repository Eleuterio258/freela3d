<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //table name
    protected $table = 'comments';
    protected $fillable = ['description', 'id_service', 'commented_by_id','email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
