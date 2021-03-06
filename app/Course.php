<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{

    protected $fillable=['name','description'];
    public $timestamps=true;
    use SoftDeletes;

    public function label()
   {
       return $this->hasMany('App\Exam','id');
   }

  
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
    protected $table="course";
}
