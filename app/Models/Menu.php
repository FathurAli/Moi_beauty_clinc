<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    
    protected $table = 'menus';

    protected $fillable = [
        'name',
        'url',
        'parent_id',
        'order',
    ];

    // Relasi untuk mendapatkan menu anak (children)
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // Relasi untuk mendapatkan menu induk (parent)
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
