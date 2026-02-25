<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'image_path',
    ];

    public function getStatusLabelAttribute()
    {
        return ucfirst(str_replace('_', ' ', $this->status));
    }

    public function getPriorityFirstLetterCapAttribute()
    {
        return ucfirst($this->priority);
    }
}
