<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articale extends Model
{
    protected $fillable = ['title','body',"image","category_id"];
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
