<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceComment extends Model
{
    use HasFactory;
    //table name
    protected $table = 'service_comments';
    protected $fillable = ['service_id', 'comments_id'];
    public $timestamps = false;
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class, 'comments_id');
    }
}
