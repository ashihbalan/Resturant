<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function menu()
    {
        return $this->belongsToMany(Menu::class);
    }


}
