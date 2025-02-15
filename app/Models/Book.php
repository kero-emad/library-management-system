<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable=['name','description','price','image','author_id','Student_id'];

    public function authors()
    {
        return $this->belongsTo(Author::class,'author_id','id');
    }
    public function students ()
    {
        return $this->belongsTo(Student::class,'Student_id','id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'book_category','book_id','category_id');
    }
}
