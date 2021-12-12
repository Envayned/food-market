<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The fillable attributes
     *
     * @var string[]
     */

     protected $fillable = [
         'name',
         'description',
         'price',
     ];

    public function favorites()
    {
        return $this->HasMany(Favorite::class);
    }
}
