<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id','product_id','point','comment'];

    public function product()
    {
        return $this->belonsTo(Product::class);
    }
    public function user()
    {
        return $this->belonsTo(User::class);
    }
}
