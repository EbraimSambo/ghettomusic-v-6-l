<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Music extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'tags',
        'cover_path',
        'music_path',
        'audio_path',
        'category',
        'artist',
        'user_id',
        'slug',
        'search-content'
    ];

    public static function boot()
    {
         parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::uuid(20);
            $model->searchcontent = $model->title .' ' .$model->artist;
        });

    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
