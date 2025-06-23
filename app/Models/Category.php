<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'stock_id'];
    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
    public function book()
    {
        return $this->hasMany(Books::class);
    }
}
