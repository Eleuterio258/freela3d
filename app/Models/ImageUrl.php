<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageUrl extends Model
{
    use HasFactory;


    //table name
    protected $table = 'image_url';

    protected $fillable = [
        'path',
        'create_on',
        'update_on',
    ];

    public $timestamps = false;

    public function serviceImageUrl()
    {
        return $this->belongsTo(ServiceImageUrl::class, 'image_url');
    }

    public function imageUrl()
    {
        return $this->belongsTo(ImageUrl::class, 'image_url');
    }



}
