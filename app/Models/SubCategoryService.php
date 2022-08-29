<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryService extends Model
{
    use HasFactory;

    //table name
    protected $table = 'sub_category_service';

    protected $fillable = [
        'sub_category_id',
        'service_id',
    ];

    public $timestamps = false;

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
