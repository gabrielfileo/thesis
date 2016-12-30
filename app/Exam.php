<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{

    protected $fillable=['description','image_path'];
    public $timestamps=true;
    use SoftDeletes;

      public function course()
     {
         return $this->belongsTo('App\Course','course_id');
     }

     public static function course1()
    {
        return $this->belongsTo('App\Course','course_id');
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
    protected $table="exam";
}
