<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'detail',
        'user_id'
    ];

    public function user() {
    	return $this->belongsTo(User::class);
    }

    public function category() {
    	return $this->belongsTo(Category::class);
    }
    public function subCaegorys() {
    	return $this->belongsTo(SubCategory::class);
    }
    
}
