<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $fillable = ['title', 'excerpt', 'body'];

  public function listPath() {
    return route('news.index');
  }

  public function path() {
    return route('news.show', ['id' => $this->id, 'slug' => $this->slug]);
  }

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function author() {
    return $this->belongsTo(Author::class);
  }

  public function categories()
  {
      return $this->belongsToMany(Category::class);
  }
}

