<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    /*protected $fillable=[
        'code',
        'description',
        'price',
        'existence',
        'category_id',
        'active',
    ];*/

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
