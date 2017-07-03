<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

  public static function getById($id)
  {
    return static::where('id', (integer) $id)->first();
  }
  public static function getLatest()
  {
    return static::latest()->get();
  }

  public function lessons() // one department can be related with many lessons
  {
  	return $this->hasMany(Lesson::class);
  }

}
