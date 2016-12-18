<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    protected $primaryKey="id";
    protected $fillable=['name','description','join_date'];
    public $timestamps=false;
    use SoftDeletes;

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
