<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'cate',
        'name',
        'role',
        'desc',
        'image',
        'links',
        
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        "cate" => "integer",
        'links' => 'array',
    ];

    /**
     * Get the image path.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return config('app.url') . Storage::url($this->image);
    }
}
