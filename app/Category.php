<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name'];
  public function user()
  {
      return $this->belongsTo(User::class, 'id', 'user_id');
  }

  public function notes()
  {
      return $this->hasMany(Note::class, 'category_id', 'id');
  }
}
