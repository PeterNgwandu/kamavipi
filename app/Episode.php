<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
        'content_id',
        'title',
        'episode_number',
        'url',
        'duration',
        'year_released',
        'thumbnail',
        'description',
    ];

    public function contents()
    {
        return $this->belongsTo(Content::class);
    }
}
