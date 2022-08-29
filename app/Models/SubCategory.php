<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    //table name
    protected $table = 'sub_category';




    protected $fillable = [
        'name',
        'description',
         'img_path',
        'create_on',
        'update_on',
        'id_cat',
    ];

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_cat');
    }

    public function servicos()
    {
        return $this->hasMany(Servico::class, 'sub_category_id');
    }

    
}
