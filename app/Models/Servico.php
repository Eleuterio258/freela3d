<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;



    //table name
    protected $table = 'service';



    protected $fillable = [
        'name',
        'description',
        'price',
        'owner',
        'nrview',
        'update_on',
        'create_on',
        'id_sub',
        'category_id',
        'creator_id',
        'rates_id',
        'pdf_portifolio',

    ];

    public $timestamps = false;

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'id_sub');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
