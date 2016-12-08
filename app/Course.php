<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table="course";
    protected $primaryKey="id";
    protected $fillable=['name','description','join_date'];
    public $timestamps=false;
}
