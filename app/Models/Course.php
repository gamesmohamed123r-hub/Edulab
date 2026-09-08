<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $incrementing = false; 
    protected $keyType = 'string';
    use HasFactory;
    protected $fillable=[
        'id',
        'cour_image',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'status',
        'price',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function lessons(){
       return $this->hasMany(Lesson::class,'course_id','id');
    }
}
