<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

  public static function getById($id){
    return static::where('id', (integer) $id)->first();
  }

  public static function getLatest()
  {
    return static::latest()->get();
  }

  public function department()
  {
  	return $this->belongsTo(Department::class); //one lesson can only belongs to one department
  }

}
