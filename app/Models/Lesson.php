<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $incrementing = false; 
    protected $keyType = 'string';
    use HasFactory;
    protected $fillable=[
        'id',
        'course_id',
        'title_en',
        'title_ar',
        'video_url',
        'description_en',
        'description_ar',
        'status',
    ];
    public function courses(){
        return $this->beLongsTo(Course::class,'course_id','id');
    }
}
