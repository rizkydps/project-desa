<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'kategori_beritas');
    }
}
