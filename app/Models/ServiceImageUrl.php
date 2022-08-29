<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImageUrl extends Model
{
    use HasFactory;

    //table name
    protected $table = 'service_image_url';

    protected $fillable = [
        'service_id',
        'image_url',
    ];

    public $timestamps = false;

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function imageUrl()
    {
        return $this->belongsTo(ImageUrl::class, 'image_url');
    }
}
