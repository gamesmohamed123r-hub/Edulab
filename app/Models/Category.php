<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'id',
        'cate_image',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'status',
    ];
    public function courses()
    {
        return $this->hasMany(Course::class,'category_id','id');
    }
    public function enrollments() {
       return $this->hasMany(Enrollment::class);
     }
}
