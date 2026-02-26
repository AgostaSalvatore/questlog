<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Quest extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'image_path',
    ];

    protected $appends = ['image_url'];

    public function getStatusLabelAttribute()
    {
        return ucfirst(str_replace('_', ' ', $this->status));
    }

    public function getPriorityFirstLetterCapAttribute()
    {
        return ucfirst($this->priority);
    }

    public function getImageUrlAttribute()
    {
        return $this->image_path ? Storage::url($this->image_path) : null;
    }
}
