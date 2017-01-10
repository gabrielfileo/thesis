<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
  protected $fillable=['name','description'];
  public $timestamps=true;

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  /**
   * The table used by the model.
   *
   * @var string
   */
  protected $table="topics";
}
