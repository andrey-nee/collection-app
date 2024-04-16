<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
  use HasFactory;

  public function images()
  {
    return $this->hasMany(FilmImage::class);
  }

  public function genre(): BelongsTo
  {
    return $this->belongsTo(Genre::class, 'genre_id');
  }

  public function director(): BelongsTo
  {
    return $this->belongsTo(Director::class, 'director_id');
  }

  protected $fillable = [
    'name_ru',
    'description',
    'genre_id',
    'year',
    'director_id',
  ];
}
