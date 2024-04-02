<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
  use HasFactory;

  public function images()
  {
    return $this->hasMany(FilmImage::class);
  }
}
